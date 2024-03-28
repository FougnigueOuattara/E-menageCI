<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{env('APP_NAME')}}</title>
    
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
    <section class="w-full flex  justify-center h-screen">
        <div class="bg-slate-800 w-3/4 rounded-lg flex flex-col justify-center items-center h-full">
            <div>
                <h1 class="text-white font-medium tracking-wide text-2xl ">
                    INSCRIPTION
                </h1>
            </div>
            <form action="inscription" method="post" enctype="multipart/form-data" class="w-3/4">
                @csrf
               <div class="flex justify-evenly my-6">
                <div>
                    <p>
                        <label for="name" class="text-white">Nom</label><br>
                        <input type="text" required name="name" autocomplete="false" class="h-10 w-72 rounded-sm">
                    </p>
                    <p> 
                        <label for="firstname" class="text-white">Prenom</label><br>
                        <input type="text" required name="firstname" autocomplete="false" class="h-10 w-72 rounded-sm">
                    </p>
                    <p>
                        <label for="email" class="text-white">Email</label><br>
                        <input type="email" name="email" required aria-placeholder="Email" autocomplete="false" class="h-10 w-72 rounded-sm @error('email') is-invalid @enderror">
                        @error('email')
                            <div class="text-orange-500">{{ $message }}</div>
                        @enderror
                    </p>
                    <p>
                        <label for="age" class="text-white">Age</label><br>
                        <input type="number" required name="age" autocomplete="false" class="h-10 w-72 rounded-sm">
                    </p>
                    <p>
                        <label for="number" class="text-white">Numéro</label><br>
                        <input type="tel" required name="number" autocomplete="false" class="h-10 w-72 rounded-sm @error('number') is-invalid @enderror">
                        @error('number')
                            <div class="text-orange-500">{{ $message }}</div>
                        @enderror
                    </p>
                    <p>
                        <label for="city" class="text-white">Ville</label><br>
                        <input type="text" required name="city" autocomplete="false" class="h-10 w-72 rounded-sm">
                    </p>
                    <p>
                        <label for="city" class="text-white">Quartier</label><br>
                        <input type="text" required name="quarter" autocomplete="false" class="h-10 w-72 rounded-sm">
                    </p>
                    <p>
                        <label for="password" class="text-white">Mot de passe</label><br>
                        <input type="password" required name="password" aria-placeholder="Mot de passe" autocomplete="false" class="h-10 w-72 rounded-sm">
                    </p>
                </div>
                <div>
                    <div class="pt-4">
                        <label for="work" class="text-white mb-8">Métier :</label><br>
                        <div class="flex flex-col bg-slate-600">
                            <p>
                                <input type="radio" value="Vitrier" name="work" class="mb-6">
                                <span class="text-white">Vitrier</span>
                            </p>
                            <p>
                                <input type="radio" value="Ferronnier" name="work" class="mb-6">
                                <span  class="text-white">Ferronnier</h2>
                            </p>
                            <p>
                                <input type="radio" value="Menuisier" name="work" class="mb-6">
                                <span  class="text-white">Menuisier</h2>
                            </p>
                            <p>
                                <input type="radio" value="Electricien" name="work" class="mb-6">
                                <span  class="text-white">Electricien</h2>
                            </p>
                            <p>
                                <input type="radio" value="Plombier" name="work" class="mb-6">
                                <span  class="text-white">Plombier</span >
                            </p>
                            <p>
                                <input type="radio" value="Peintre" name="work" class="mb-6">
                                <span  class="text-white">Peintre</span >
                            </p>
                            <p>
                                <input type="radio" value="Nounou" name="work" class="mb-6">
                                <span  class="text-white">Nounou</span >
                            </p>
                            <p>
                                <input type="radio" value="Menager" name="work" class="mb-6">
                                <span  class="text-white">Menager</span >
                            </p>
                            <p>
                                <input type="radio" value="Cuisinier" name="work" class="mb-6">
                                <span  class="text-white">Cuisinier</span >
                            </p>
                        </div>
                        <p>
                            <label for="genre" class="text-white">Genre :</label><br>
                            <div class="flex">
                                <p class="mr-2">
                                    <input type="radio" value="M" name="genre">
                                    <h2 class="mr-8 text-white">Homme</h2>
                                </p>
                                <p class="mr-2">
                                    <input type="radio" value="F" name="genre" class="mb-6">
                                    <h2 class="mr-8 text-white">Femme</h2>
                                </p>
                            </div>
                        </p>
                    </div>
                </div>
               </div>
                <div class="flex flex-col items-center text-white justify-center w-full">
                    <p class="w-3/4 flex flex-col justify-center items-center">
                        <label for="picture">Ajouter une photo :</label><br>
                        <input type="file" required name="picture">
                    </p>
                    <button type="submit" class=" rounded m-8 border-orange-400 border w-1/3 h-10 flex justify-center items-center text-white bg-orange-400">Je m'inscris</button>
                </div>
            </form>
        </div>
    </section>
</body>
</html>
