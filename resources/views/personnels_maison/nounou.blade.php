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
<body class="box-border bg-blue-50">
    <!-- Header -->
    <x-header/>
    {{-- List des vitriers inscrit --}}
    <section class="max-h-full px-44 mx-44">
        <div>
            <form action="{{url('/personnels/nounous/search')}}" method="Get">
                @csrf
                <div class="flex justify-between pb-4 pt-4">
                    <input class="rounded-sm h-10 w-2/3 placeholder:pl-4 bg-white outline-slate-300" name="search" placeholder="Rechercher par ville ou quartier">
                    <button type="submit" class="text-white bg-orange-400 w-36 rounded-lg">Rechercher</button>
                </div>
            </form>
        </div>
        <div class="justify-center border-gray-500 border-2">
            <p class=" pl-4 mb-6 bg-gray-300 font-medium text-xl ">Toutes les annonces</p>
            @foreach ($nounous as $nounou)
                <a href="/vitriers/descriptions">
                    <div class="flex h-24 bg-slate-200 mb-2 items-center  m-2">
                        <div class="">
                            <img class="h-24 w-24 object-cover object-center" src="{{asset('storage/'.$nounou->photo)}}">
                        </div>
                        <div class="p-4">
                            <p><?= $nounou->lastName ?> <?= $nounou->firstName ?> </p>
                            <p ><?= $nounou->quarter ?> <?= $nounou->city ?> </p>
                        </div>
                    </div>
                </a>
            @endforeach
            <div class="flex flex-col items-center">
                <p>{{ $nounous->links() }}</p>
            </div>
        </div>
    </section>
    <x-footer/>
</body>
</html>