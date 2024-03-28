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
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    </head>
<body class="box-border bg-blue-50">
    <!-- Header -->
    <x-header/>
    <section class="h-screen w-full flex flex-col justify-between bg-slate-900">
        <p class="text-white text-5xl h-1/4 flex justify-center items-center">
            Informations personnelles
        </p>
        <div class="h-3/4 w-full bg-white">
            <form action="profile" method="post" class="h-full flex flex-col justify-between">
                @csrf
                <div class=" relative bg-slate-600">
                    <p class="absolute -top-24 left-52">
                        <img class="w-40 h-40 object-cover rounded-full" src="{{ asset('storage/'.Auth::user()->photo) }}" alt="profile">
                        <label for="picture" class="absolute z-10 rounded top-28 hover:cursor-pointer left-28 bg-slate-300 h-8 w-8 text-center ">
                            <i class="pt-2 fa-solid fa-pen" style="color: #18052c;"></i>
                            <input type="file" class="sr-only" name="picture" id="picture">
                        </label>
                    </p>
                </div>
                <div class=" h-full flex flex-col justify-center items-center w-full">
                    <div class="bg-blue-50 grid grid-rows-3 grid-cols-2 items-center w-2/4 h-3/4">
                        <div class="flex justify-center">
                            <label for="">
                                <p>
                                    Nom
                                </p>
                                <input class="w-64 h-10 pl-2" type="text" name="" id="" readonly value="<?= Auth::user()->lastName ?>">
                            </label>
                        </div>
                        <div class="flex justify-center">
                            <label for="">
                                <p>
                                    Prénom
                                </p>
                                <input class="w-64 h-10 pl-2" type="text" name="" id="" readonly value="<?= Auth::user()->firstName ?>">
                            </label>
                        </div>
                        <div class="flex justify-center">
                            <label for="">
                                <p>
                                    Ville
                                </p>
                                <input class="w-64 h-10 pl-2" type="text" name="city" id="" value="<?= Auth::user()->city ?>">
                            </label>
                        </div>
                        <div class="flex justify-center">
                            <label for="">
                                <p>
                                    Quartier
                                </p>
                                <input class="w-64 h-10 pl-2" type="text" name="quarter" id="" value="<?= Auth::user()->quarter ?>">
                            </label>
                        </div>
                        <div class="flex justify-center">
                            <label for="">
                                <p>
                                    Métiers
                                </p>
                                <input class="w-64 h-10 pl-2" type="text" name="work" id="" value="<?= Auth::user()->staff ?>">
                            </label>
                        </div>
                        <div class="flex justify-center">
                            <label for="">
                                <p>
                                    Numéro
                                </p>
                                <input class="w-64 h-10 pl-2" type="text" name="number" id="" value="<?= Auth::user()->phoneNumber ?>">
                            </label>
                        </div>
                    </div>
                    
                    <div class="w-full flex justify-center">
                        <div class="mt-6 flex items-center justify-end gap-x-6">
                            <button type="button" class="text-sm font-semibold leading-6 text-gray-900">Cancel</button>
                            <button type="submit" class="rounded-md bg-slate-900 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-orange-400 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Save</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>
    <x-footer/>
</body>
</html>