@extends('layout.base')
@section('content')
<main class="w-full">
    <x-user-register-flash-message/>
    <section class="w-full h-screen bg-right bg-no-repeat bg-contain" style="background-image: url('/storage/images/bg.svg')">
        <div class="flex items-center justify-between w-full pt-6 h-4/5">
            <div class="flex flex-col w-full justify-around h-96">
                <div class="w-full">  
                    <h1 class="font-bold text-4xl text-slate-900">{{env('APP_NAME')}}</h1>
                    <h2 class="mt-3 ml-2 text-2xl font-semibold text-orange-400">Full Services</h2>
                </div>
                <button type="button" class="ml-2 text-md text-white font-medium transition duration-500 ease-in-out bg-orange-500 border-2 border-none rounded-full w-2/3 h-10 hover:-translate-y-1 hover:scale-110 hover:ring-2 hover:bg-transparent hover:text-orange-500 ring-orange-600"><a href="#service-section">Decouvrir nos services</a></button>
            </div>
        </div>
    </section>
    <!-- Good to know section -->
    <section class="w-full min-h-screen text-slate-900" x-data="{ shown: false }" x-intersect="shown = true">
        <div class="flex flex-col items-center my-14">
            <p class="text-3xl font-medium text-slate-900">Bon à savoir</p>
        </div>
        <div class="flex w-full m-3 transition-all h-1/3" x-show="shown" x-transition.duration.1000>
            <div class="w-1/3 h-full overflow-hidden rounded-xl"><img class="object-cover w-full h-full" src="/storage/images/or-hakim-ZlE20IWgerw-unsplash.jpg"/></div>
            <p class="w-1/3 h-full ml-4 text-justify">
                Engager un cuisinier à domicile vous libère de la préparation des repas, ce qui vous permet de gagner du temps précieux.
                Un cuisinier peut vous faire découvrir de nouvelles saveurs, cuisines et techniques culinaires. Il peut aussi vous proposer des plats régionaux ou internationaux, des recettes créatives et des combinaisons d'ingrédients que vous n'auriez peut-être pas essayés autrement.
            </p>
        </div>
        <div class="flex flex-row-reverse w-full m-3 h-1/3" x-show="shown" x-transition.duration.2000>
            <div class="w-1/3 h-full overflow-hidden rounded-xl"><img class="object-cover w-full h-full" src="/storage/images/pexels-pixabay-159375.jpg"/></div>
            <p class="w-1/3 h-full mr-4 text-justify">
                Si vous avez des besoins spécifiques en matière de mobilier ou d'aménagement intérieur, 
                ici vous trouverez un menuisier capable de concevoir et fabriquer des pièces sur mesure adaptées à vos besoins. 
                Que vous souhaitiez des armoires, des étagères, ou d'autres éléments, nos menuisiers peuvent réaliser des projets personnalisés qui correspondent à votre style et à vos préférences.
            </p>
        </div>
        <div class="flex w-full m-3 h-1/3" x-show="shown" x-transition.duration.3000>
            <div class="w-1/3 h-full overflow-hidden rounded-xl"><img class="object-cover w-full h-full" src="/storage/images/pexels-tima-miroshnichenko-6195275.jpg"/></div>
            <p class="w-1/3 h-full ml-4 text-justify">
                Le temps est une ressource précieuse, et déléguer les tâches ménagères à quelqu'un d'autre permet
                 de libérer du temps pour se concentrer sur d'autres activités importantes de la vie quotidienne, 
                comme le travail, la famille, les loisirs ou simplement se reposer.  
                Les femmes de ménage ont souvent une connaissance approfondie des techniques de nettoyage et des produits adaptés, 
                ce qui peut conduire à un résultat plus satisfaisant que si vous effectuiez vous-même ces tâches.
            </p>
        </div>
    </section>
    <!-- services section -->
    <section class="flex flex-col w-full min-h-screen px-3" id="service-section">
        <div class="flex h-full flex-col justify-evenly items-center w-full">
            <div class="w-auto mb-8">
                <h2 class="text-4xl font-medium text-slate-900">Services</h2>
            </div>
            <div class="w-full h-5/6 grid md:grid-cols-4 md:grid-rows-2 gap-4">
                <div class="bg-gray-300 flex flex-col items-center justify-between rounded-xl overflow-hidden">
                    <div class="w-full h-3/5 "><img src="/storage/images/vitrier.jpg" class=" w-full h-full object-cover"></div>
                    <p class="text-slate-900 font-base">Vitrier</p>
                    <div><button type="button" class="text-white transition duration-500 ease-in-out bg-orange-500 border-2 border-none rounded-full hover:-translate-y-1 hover:scale-110 hover:ring-2 hover:bg-transparent hover:text-orange-500 ring-orange-600 h-8 w-32 mb-4"><a href="{{ url('/personnels/vitriers') }}">Consulter</a></button></div>
                </div>
                <div class="bg-gray-300 flex flex-col items-center justify-between rounded-xl overflow-hidden">
                    <div class="w-full h-3/5"><img src="/storage/images/electricien.jpg" class=" w-full h-full object-cover"></div>
                    <p class="text-slate-900 font-base">Electricien</p>
                    <div><button type="button" class="text-white transition duration-500 ease-in-out bg-orange-500 border-2 border-none rounded-full hover:-translate-y-1 hover:scale-110 hover:ring-2 hover:bg-transparent hover:text-orange-500 ring-orange-600 h-8 w-32 mb-4">Consulter</button></div>
                </div>
                <div class="bg-gray-300 flex flex-col items-center justify-between rounded-xl overflow-hidden">
                    <div class="w-full h-3/5"><img src="/storage/images/ferronnier.jpg" class=" w-full h-full object-cover"></div>
                    <p class="text-slate-900 font-base">Ferronnier</p>
                    <div><button type="button" class="text-white transition duration-500 ease-in-out bg-orange-500 border-2 border-none rounded-full hover:-translate-y-1 hover:scale-110 hover:ring-2 hover:bg-transparent hover:text-orange-500 ring-orange-600 h-8 w-32 mb-4">Consulter</button></div>
                </div>
                <div class="bg-gray-300 flex flex-col items-center justify-between rounded-xl overflow-hidden">
                    <div class="w-full h-3/5"><img src="/storage/images/menagere.jpg" class=" w-full h-full object-cover"></div>
                    <p class="text-slate-900 font-base">Menagere</p>
                    <div><button type="button" class="text-white transition duration-500 ease-in-out bg-orange-500 border-2 border-none rounded-full hover:-translate-y-1 hover:scale-110 hover:ring-2 hover:bg-transparent hover:text-orange-500 ring-orange-600 h-8 w-32 mb-4">Consulter</button></div>
                </div>
                <div class="bg-gray-300 flex flex-col items-center justify-between rounded-xl overflow-hidden">
                    <div class="w-full h-3/5"><img src="/storage/images/carpenter.jpg" class=" w-full h-full object-cover"></div>
                    <p class="text-slate-900 font-base">Menuisier</p>
                    <div><button type="button" class="text-white transition duration-500 ease-in-out bg-orange-500 border-2 border-none rounded-full hover:-translate-y-1 hover:scale-110 hover:ring-2 hover:bg-transparent hover:text-orange-500 ring-orange-600 h-8 w-32 mb-4">Consulter</button></div>
                </div>
                <div class="bg-gray-300 flex flex-col items-center justify-between rounded-xl overflow-hidden">
                    <div class="w-full h-3/5"><img src="/storage/images/plumbing.jpg" class=" w-full h-full object-cover"></div>
                    <p class="text-slate-900 font-base">Plombier</p>
                    <div><button type="button" class="text-white transition duration-500 ease-in-out bg-orange-500 border-2 border-none rounded-full hover:-translate-y-1 hover:scale-110 hover:ring-2 hover:bg-transparent hover:text-orange-500 ring-orange-600 h-8 w-32 mb-4">Consulter</button></div>
                </div>
                <div class="bg-gray-300 flex flex-col items-center justify-between rounded-xl overflow-hidden">
                    <div class="w-full h-3/5"><img src="/storage/images/baby-sitting.jpg" class=" w-full h-full object-cover"></div>
                    <p class="text-slate-900 font-base">Nounou</p>
                    <div><button type="button" class="text-white transition duration-500 ease-in-out bg-orange-500 border-2 border-none rounded-full hover:-translate-y-1 hover:scale-110 hover:ring-2 hover:bg-transparent hover:text-orange-500 ring-orange-600 h-8 w-32 mb-4">Consulter</button></div>
                </div>
                <div class="bg-gray-300 flex flex-col items-center justify-between rounded-xl overflow-hidden">
                    <div class="w-full h-3/5"><img src="/storage/images/cuisinier.jpg" class=" w-full h-full object-cover"></div>
                    <p class="text-slate-900 font-base">Cuisinier</p>
                    <div><button type="button" class="text-white transition duration-500 ease-in-out bg-orange-500 border-2 border-none rounded-full hover:-translate-y-1 hover:scale-110 hover:ring-2 hover:bg-transparent hover:text-orange-500 ring-orange-600 h-8 w-32 mb-4">Consulter</button></div>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection