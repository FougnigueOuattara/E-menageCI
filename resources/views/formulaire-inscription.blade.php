<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{env('APP_NAME')}}</title>
    
        <!-- Styles -->
        @livewireStyles
        @vite('resources/css/app.css')
        @vite('resources/js/my_script.js')
        <script defer src="https://cdn.jsdelivr.net/npm/@alpinejs/intersect@3.x.x/dist/cdn.min.js"></script>
        <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
        <script>
            function imageUpload() {
                return {
                    image: null,
                    previewImage(event) {
                        const file = event.target.files[0];
                        if (file) {
                            const reader = new FileReader();
                            reader.onload = (e) => {
                                this.image = e.target.result;
                            }
                            reader.readAsDataURL(file);
                        }
                    }
                }
            }
        </script>
    </head>
<body class="box-border">
    <!-- Header -->
    <x-header/>
    {{-- Formulaire d'inscription --}}
    <section class="w-full flex flex-col my-24  justify-center items-center min-h-screen">
        <div class="min-h-full lg:h-full w-full flex flex-col justify-between items-center bg-slate-900 rounded-t-lg">
            <div class="w-full h-1/3 text-xl pl-6 py-10 font-bold">
                <p class="sm:text-4xl xl:text-5xl text-white ">
                    inscrivez-vous et commencez à proposer vos services dès maintenant !
                </p>
                <p class="py-4 text-orange-400 xl:text-3xl text-sm sm:text-2xl ">
                    Coût d'inscription 3000 FCFA
                </p>
            </div>
            <div class="w-full flex flex-col items-center justify-end h-2/3">
                <img class="object-cover lg:w-2/3" src="{{asset('storage/images/signUp.svg')}}" alt="">
            </div>
        </div>
        <div class="bg-white w-full flex justify-center items-center rounded-r-lg min-h-full">
            <div class="w-full h-full flex flex-col justify-center items-center">
                <div>
                    <h1 class="text-slate-700 font-bold my-6 tracking-wide text-center text-xl sm:text-4xl">
                        INSCRIPTION 
                    </h1>
                </div>
                <div class="w-full">
                    <form action="inscription" method="post" enctype="multipart/form-data" class="w-full h-full flex flex-col items-center gap-3 justify-center sm:place-items-center sm:grid sm:grid-cols-2">
                        @csrf
                        <div class="form-group">
                            <label for="name" class="text-slate-700 font-medium lg:text-xl">Nom</label><br>
                            <input type="text" required id="name" name="name" autocomplete="false" class="h-9 w-72 pl-2 rounded-lg border-2 focus:outline-none placeholder:pl-2 border-gray-300" placeholder="exemple: Torres" value="{{ old('name') }}">
                            @error('name')
                                <div class="text-orange-500 ">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="firstname" class="text-slate-700 font-medium lg:text-xl">Prenom</label><br>
                            <input type="text" placeholder="exemple: Alvin" required name="firstname" autocomplete="false" class="h-9 w-72 pl-2 rounded-lg border-2 focus:outline-none placeholder:pl-2 border-gray-300" value="{{ old('firstname') }}">
                            @error('firstname')
                                <div class="text-orange-500 ">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="email" class="text-slate-700 font-medium lg:text-xl">Email</label><br>
                            <input type="email" name="email" placeholder="exemple@gmail.com" required aria-placeholder="Email" autocomplete="false" class="h-9 w-72 pl-2 rounded-lg border-2 focus:outline-none placeholder:pl-2 border-gray-300 @error('email') is-invalid @enderror" value="{{ old('email') }}">
                            @error('email')
                                <div class="text-orange-500 ">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="age" class="text-slate-700 font-medium lg:text-xl">Age</label><br>
                            <input type="number" placeholder="superieur ou egale à 20 ans" required name="age" autocomplete="false" class="h-9 w-72 pl-2 rounded-lg border-2 focus:outline-none placeholder:pl-2 border-gray-300" value="{{ old('age') }}">
                            @error('age')
                                <div class="text-orange-500 ">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="number" class="text-slate-700 font-medium lg:text-xl">Numero</label><br>
                            <input type="tel" id="phone"  required name="number" autocomplete="false" class="h-9 w-72 pl-2 rounded-lg border-2 focus:outline-none placeholder:pl-2 border-gray-300 @error('number') is-invalid @enderror" value="+225">
                            @error('number')
                                <div class="text-orange-500 ">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="city" class="text-slate-700 font-medium lg:text-xl">Ville</label><br>
                            <input type="text" placeholder="exemple: Abidjan" required name="city" autocomplete="false" class="h-9 w-72 pl-2 rounded-lg border-2 focus:outline-none placeholder:pl-2 border-gray-300" value="{{ old('city') }}">
                            @error('city')
                                <div class="text-orange-500 ">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="quarter" class="text-slate-700 font-medium lg:text-xl">Quartier</label><br>
                            <input type="text" placeholder="exemple: 220 logements" required name="quarter" autocomplete="false" class="h-9 w-72 pl-2 rounded-lg border-2 placeholder:pl-2 focus:outline-none border-gray-300" value="{{ old('quarter') }}">
                            @error('quarter')
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
                        <div class="flex flex-col items-center justify-center col-span-full">
                            <p class="mb-4">
                                <label for="work" class="text-slate-700 font-medium lg:text-xl">Métier :</label>
                            </p>
                            <div class="grid grid-flow-col gap-4 w-full">
                                <div class="form-group w-full grid grid-cols-3 text-center rounded-lg border-2 divide-x divide-y divide-my-gray border-my-gray" >
                                    @foreach ($metiers as $metier)
                                    <p class="p-2 rounded-lg flex justify-center cursor-pointer text-center" >
                                        <input class="ml-2" type="radio" value="{{ $metier->libelle }}" id="{{ $metier->libelle }}" name="work" {{ old('work') == $metier->libelle ? 'checked' : '' }}>
                                        <label class="text-black cursor-pointer pl-2  lg:text-xl" for="{{ $metier->libelle }}">{{ $metier->libelle }}</label>
                                        @error('work')
                                            <div class="text-orange-500 ">{{ $message }}</div>
                                        @enderror
                                    </p>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <div class="flex flex-col items-center justify-center col-span-full my-8">
                            <p class="my-4">
                                <label for="genre" class="text-slate-700 font-medium  lg:text-xl text-center">Genre :</label><br>
                            </p>
                            <div class="grid grid-flow-col gap-2 items-center justify-center text-center lg:text-xl">
                                <p>
                                    <input type="radio" value="M" name="genre" {{ old('genre') == 'M' ? 'checked' : '' }}>
                                    <h2 class="text-black">Homme</h2>
                                </p>
                                <p>
                                    <input type="radio" value="F" name="genre" {{ old('genre') == 'F' ? 'checked' : '' }}>
                                    <h2 class="text-black">Femme</h2>
                                </p>
                                @error('genre')
                                    <div class="text-orange-500 ">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="w-full flex flex-col items-center text-slate-700 col-span-full">
                            <p class="text-slate-700 font-medium text-center my-4 lg:text-xl">
                                Profil :
                            </p>
                            <div class="w-[40%] h-[20vh] md:w-[35%] md:h-[35vh] xl:h-[40vh] xl:w-[20vw] bg-my-gray rounded-md flex flex-col justify-center items-center" x-data="imageUpload()">
                                <template x-if="!image">
                                    <img class="w-full h-full object-contain rounded-md cursor-pointer" src="{{ asset('storage/images/photo-camera_63984.png') }}" alt="profile" @click="$refs.fileInput.click()">
                                </template>
                                <template x-if="image">
                                    <img class="w-full h-full rounded-md object-cover cursor-pointer" :src="image" alt="profile" @click="$refs.fileInput.click()">
                                </template>
                                <input x-ref="fileInput" class="hidden" type="file" required name="picture" id="picture" @change="previewImage">
                            </div>
                            @error('picture')
                                <div class="text-orange-500 ">{{ $message }}</div>
                            @enderror
                            <button type="submit" class="rounded mt-14 border-orange-400 border w-3/5 lg:w-2/5 h-9 flex justify-center items-center text-white bg-orange-400">s'inscrire</button>
                        </div>
                    </form>   
                </div>  
            </div>
        </div>
    </section>
    <!-- Footer -->
    <x-footer/>
</body>
</html>
