<?php

namespace App\Http\Controllers;
use App\Models\User as User;
use App\Service\MetierService;
use App\Service\UserService;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    private $userService;
    private $metierService;

    public function __construct(UserService $userService, MetierService $metierService)
    {
        $this->userService = $userService;
        $this->metierService = $metierService;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $metier = $this->metierService->getAllMetier();

        return view('formulaire-inscription', ['metiers'=>$metier]);
      
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store()
    {
        $result = $this->userService->userRegister();   

        if($result)
        {
            return redirect("/")->with('success','Vous avez bien été enregistré !');
        }else{
            return redirect("/")->with("Quelque chose s'est mal passé");
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // 
         
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit()
    {
        //
        return view('profile');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $file = $request->file('picture');
        
        if($file != null){

            $path = $file->store('profil','public');
            $user = User::find(Auth::user()->id);
            $user->city = $request->input('city');
            $user->quarter = $request->input('quarter');
            $user->staff = $request->input('work');
            $user->phoneNumber = $request->input('number');
            $user->photo = $path;

            $user->save();
            User::search();
        
            return redirect('/')->with('success', 'Informations mises à jour avec succès.');
        }else{
            
            $user = User::find(Auth::user()->id);
            $user->city = $request->input('city');
            $user->quarter = $request->input('quarter');
            $user->staff = $request->input('work');
            $user->phoneNumber = $request->input('number');

            $user->save();
        
            return redirect()->back()->with('success', 'Informations mises à jour avec succès.');
        }

    }

    public function vipStatus()
    {
        $result = DB::table('user_statuts')->insert(
            [
                "user_id" => Auth::user()->id,
                "vip" => "Actif",
                'created_at' => now()
            ]
        );
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
