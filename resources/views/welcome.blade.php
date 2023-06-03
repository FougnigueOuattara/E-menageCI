<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        
        <!-- Styles -->
        @livewireStyles
        @vite('resources/css/app.css')
        <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    </head>
    <body class="bg-white box-border lg: px-44">
        <section class="w-full h-screen bg-cover bg-center" style="background-image: url('/storage/images/bg.png')">
            <header class="max-w-full h-14">
                <nav class="flex h-14 justify-between items-center w-full">
                    <div><img class="h-9 w-full" src="/storage/images/EmenageLogo.svg"></div>
                    <button type="button" class="h-6 w-8 cursor-pointer flex flex-col justify-around items-center" x-data="{open:true}" @click=" open = !open">
                        <span class="block bg-orange-400 h-1 rounded-lg w-7" :class="open ? '' : ['rotate-45','translate-y-2','transition-all','duration-500'] "></span>
                        <span class="block bg-orange-400 h-1 rounded-lg w-7" :class="open ? '' : ['opacity-0','transition-opacity','duration-500']"></span>
                        <span class="block bg-orange-400 h-1 rounded-lg w-7" :class="open ? '' : ['-rotate-45','-translate-y-2','transition-all','duration-500'] "></span>
                    </button>
                    <ul class="flex w-2/3 justify-end text-gray-600">
                        <li class="mx-3"><a href="http://">Personnels bâtiment</a></li>
                        <li class="mx-3"><a href="http://">Cuisinier</a></li>
                        <li class="mx-3"><a href="http://">Ménagère</a></li>
                        <li class="mx-3"><a href="http://">Se connecter</a></li>
                        <li class="mx-3"><a href="http://"><img src="/storage/images/pngegg.png" class="w-5 h-5"></a></li>
                    </ul>
                </nav>
            </header>
            <div class="flex items-center justify-between">
                <div class="mt-20">
                    <h1 class="text-9xl text-black font-semibold">
                            {{env('APP_NAME')}}
                    </h1>
                    <h2 class="text-6xl text-orange-500 my-3 font-medium mb-10">Full Services</h2>
                    <div class="w-80 h-32 flex items-center justify-center">
                        <button type="button" class="text-white text-xl  transition bg-orange-500 w-72 h-14 rounded-full  hover:-translate-y-1 hover:scale-110 hover:ring-2 border-2 hover:bg-transparent hover:text-orange-500 border-none ring-orange-600 ease-in-out duration-500">Decouvrir nos services</button>
                    </div>
                </div>
                <div class="h-96 w-80 mt-20 ml-56 bg-white shadow-xl rounded-md">
                    <p>Visualisation</p>
                </div>
            </div>
            </div>
        </section>
        <main class="w-full">
        </main>
        <footer class="">

        </footer>
        @livewireScripts
    </body>
</html>
