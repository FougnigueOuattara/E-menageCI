<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Emenage</title>
    
        <!-- Styles -->
        @livewireStyles
        @vite('resources/css/app.css')
        <script defer src="https://cdn.jsdelivr.net/npm/@alpinejs/intersect@3.x.x/dist/cdn.min.js"></script>
        <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    </head>
<body class="box-border  bg-blue-50">
    <!-- Header -->
    <x-header/>
    {{-- Formulaire d'inscription --}}
    <section class="w-full flex  justify-center bg-red-50 items-center h-min-full">
        <div class="bg-slate-800 w-1/4 rounded-lg flex flex-col justify-center items-center">
            <div>
                <h1 class="text-white font-medium text-center tracking-wide text-2xl ">
                    Se connecter
                </h1>
            </div>
            <form action="login" method="post" class="w-3/4">
                @csrf
               <div class="flex flex-col items-center justify-evenly my-6">
                    <p class="flex flex-col mb-6">
                        <label for="email" class="text-white mb-2">Email</label>
                        <input type="email" name="email" placeholder="Exemple@gmail.com" class="h-10 w-72 rounded-sm @error('email') is-invalid @enderror">
                        @error('email')
                            <div class="text-orange-500">{{ $message }}</div>
                        @enderror
                    </p>        
                    <p class="flex flex-col">
                        <label for="password" class="text-white mt-4 mb-2">Mot de passe</label>
                        <input type="password" name="password" placeholder="Mot de passe" class="h-10 w-72 rounded-sm @error('password') is-invalid @enderror">
                        @error('password')
                            <div class="text-orange-500">{{ $message }}</div>
                        @enderror
                        <p class="text-white text-xs mt-2">
                            Vous n'avez pas de compte ? <a href="{{url('users/inscription')}}" class="text-xs underline">S'inscrire</a>
                        </p>
                    </p>
               </div>
                <div class="flex flex-col items-center text-white justify-center w-full">
                    <button type="submit" class=" rounded m-8 border-orange-400 border w-1/3 h-10 flex justify-center items-center text-white bg-orange-400">Connexion</button>
                </div>
            </form>
        </div>
    </section>
</body>
</html>
