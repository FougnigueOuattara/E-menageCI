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
<body class="box-border">
    <!-- Header -->
    <x-header/>
    {{-- Formulaire d'inscription --}}
    <section class="w-full h-screen flex flex-col justify-center bg-my-gray items-center">
        <div class="bg-white w-full sm:w-1/2 sm:h-4/5 h-full  sm:rounded-lg flex flex-col justify-center items-center">
            <form action="login" method="post" class="w-3/4 h-full flex flex-col items-center justify-center">
                @csrf
                <div>
                    <h1 class="text-slate-900 ml-4 mb-10 font-bold text-4xl text-center">
                        connexion
                    </h1>
                </div>
               <div class="w-3/4 h-1/3 flex flex-col items-center justify-around">
                    <div class="form-group">
                        <label for="email" class="text-slate-700 font-medium lg:text-xl">Email</label><br>
                        <input type="email" name="email" placeholder="exemple@gmail.com" required aria-placeholder="Email" autocomplete="false" class="h-9 w-72 pl-2 rounded-lg border-2 focus:outline-none placeholder:pl-2 border-gray-300 @error('email') is-invalid @enderror" value="{{ old('email') }}">
                        @error('email')
                            <div class="text-orange-500 ">{{ $message }}</div>
                        @enderror
                    </div>        
                    <div class="form-group">
                        <label for="password" class="text-slate-700 font-medium lg:text-xl">Mot de passe</label><br>
                        <input type="password" placeholder="******" required name="password" aria-placeholder="Mot de passe" autocomplete="false" class="h-9 w-72 pl-2 placeholder:pl-2 rounded-lg border-2 focus:outline-none border-gray-300">
                        @error('password')
                            <div class="text-orange-500 ">{{ $message }}</div>
                        @enderror
                    </div>
                    <p class="text-gray-500 w-full text-center text-xs mt-1">
                        Pas de compte ? <a href="{{url('users/inscription')}}" class="text-xs underline">S'inscrire</a>
                    </p>
               </div>
                <div class="flex flex-col items-center text-white justify-center w-full">
                    <button type="submit" class="mt-8 rounded border-orange-400 border w-2/3 h-10 flex justify-center items-center text-white bg-orange-400">Se connecter</button>
                </div>
            </form>
        </div>
    </section>
    <x-footer/>
</body>
</html>
