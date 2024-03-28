<?php

namespace App\Http\Controllers;
use App\Models\User as User;
use Illuminate\Contracts\View\View;
use App\Http\Requests\UserRequest;
use Illuminate\Database\Query\Builder;
use Ramsey\Uuid\Uuid;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{

    /// Affiche la liste des electriciens



    /// Recherche les electriciens en fonction de la ville ou du quartier

    public function searchElectricien(Request $request)
    {
        if($request->has('search'))
        {
            return view('personnels_batiment.electricien',[
                'electriciens' => DB::table('users')->where('staff', '=', 'Electricien')
                                ->where(function(Builder $query) use ($request){
                                    $query->where('city', '=', $request->input('search'))->orWhere('quarter', '=', $request->input('search'));
                                })->simplePaginate(15)       
            ]);
        }
    }

    /// Affiche la liste des peintres

   

    /// Recherche les peintres en fonction de la ville ou du quartier


    

    


       /// Affiche la liste des nounous

       public function NounouIndex()
       {      
           return view('personnels_maison.nounou',[
               'nounous' => DB::table('users')->where('staff', '=', "Nounou")->simplePaginate(15)
               ]);
   
       }

       /// Recherche les nounous en fonction de la ville ou du quartier

    public function searchNounou(Request $request)
    {
        if($request->has('search'))
        {
            return view('personnels_maison.nounou',[
                'nounous' => DB::table('users')->where('staff', '=', 'Nounou')
                                ->where(function(Builder $query) use ($request){
                                    $query->where('city', '=', $request->input('search'))->orWhere('quarter', '=', $request->input('search'));
                                })->simplePaginate(15)       
            ]);
        }
    }

           /// Affiche la liste des menagers

       public function MenagerIndex():View
       {      
           return view('personnels_maison.menager',[
               'menagers'
               ]);
   
       }

       /// Recherche les menagers en fonction de la ville ou du quartier

    public function searchMenager(Request $request):View
    {
        if($request->has('search'))
        {
            return view('personnels_maison.menager',[
                'menagers'       
            ]);
        }
    }

               /// Affiche la liste des cuisiniers

       public function CuisinierIndex():View
       {      
           return view('personnels_maison.cuisinier',[
               'cuisiniers' => DB::table('users')->where('staff', '=', "Cuisinier")->simplePaginate(15)
               ]);
   
       }

       /// Recherche les cuisiniers en fonction de la ville ou du quartier

    public function searchCuisinier(Request $request):View
    {
        if($request->has('search'))
        {
            //dd($request->input('search'));
            return view('personnels_maison.cuisinier',[
                'cuisiniers' => DB::table('users')->where('staff', '=', 'Cuisinier')
                                ->where(function(Builder $query) use ($request){
                                    $query->where('city', '=', $request->input('search'))->orWhere('quarter', '=', $request->input('search'));
                                })->simplePaginate(15)       
            ]);
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
      
        return view('formulaire-inscription');
      
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $file = $request->file('picture');
        $path = $file->store('profil','public');

        DB::table('users')->insert(
            [   'id'=>Uuid::uuid4(),
                'firstName'=>$request->input('firstname'),
                'lastName'=>$request->input('name'),
                'email'=>$request->input('email'),
                'age'=>$request->input('age'),
                'gender'=>$request->input('genre'),
                'phoneNumber'=>$request->input('number'),
                'city'=>$request->input('city'),
                'quarter'=>$request->input('quarter'),
                'photo'=>$path,
                'staff'=>$request->input('work'),
                'etat'=> true,
                'password'=>Hash::make($request->input('password')),
                'created_at' => now()
            ]
        );
        
    return redirect('/');
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
        
            return redirect()->back()->with('success', 'Informations mises à jour avec succès.');
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

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
