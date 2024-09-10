<div class="justify-center border-gray-300 min-h-[60vh]">
    <div class="flex justify-around pb-4 pt-4">
        <input wire:model.live="search" type="text" class="rounded-3xl shadow-sm px-4 h-10 w-4/5 placeholder:pl-4 bg-white outline-slate-300" name="search" placeholder="Rechercher par ville ou quartier">
    </div>
    <p class=" pl-4 mb-6 bg-gray-300 font-medium text-xl ">Toutes les annonces</p>
    @if (!$userdata->isEmpty())
        @foreach ($userdata as $data)
            <a class="cursor-pointer w-full" href="/{{$data->staff}}/descriptions">
                <div class="flex h-20 w-full items-center shadow-sm">
                    <div class="rounded-2xl h-full p-2 w-1/3">
                        <img class="h-full rounded-2xl w-full object-cover object-center" src="{{asset('storage/'.$data->photo)}}">
                    </div>
                    <div class="pl-4 h-full flex flex-col justify-start w-2/3 bg-gray-100">
                        <div class="flex flex-col justify-evenly h-full">
                            <div>
                                <p class="font-medium"><?= $data->lastName ?> <?= $data->firstName ?> </p>
                                <p class="text-xs text-gray-500 flex items-center">
                                    <svg class="h-4 mr-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path fill="#f77d3b" d="M215.7 499.2C267 435 384 279.4 384 192C384 86 298 0 192 0S0 86 0 192c0 87.4 117 243 168.3 307.2c12.3 15.3 35.1 15.3 47.4 0zM192 128a64 64 0 1 1 0 128 64 64 0 1 1 0-128z"/></svg>
                                    <?= $data->quarter ?> <?= $data->city ?>
                                </p>
                            </div>
                            <div class="flex items-center space-x-1">
                                @for ($i = 1; $i <= 5; $i++)
                                    @if ($i <= round($data->average_note, 1))
                                        <!-- Affiche une étoile pleine -->
                                        <svg class="w-4 h-4 text-yellow-400" fill="currentColor" viewBox="0 0 24 24">
                                            <path d="M12 .587l3.668 7.431L24 9.751l-6 5.841 1.42 8.281L12 18.896l-7.42 4.977L6 15.592 0 9.751l8.332-1.733L12 .587z"/>
                                        </svg>
                                    @elseif ($i - 0.5 == round($data->average_note, 1))
                                        <!-- Affiche une demi-étoile -->
                                        <svg class="w-4 h-4 text-yellow-400" fill="currentColor" viewBox="0 0 24 24">
                                            <path d="M12 17.27l6.18 3.73-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/>
                                        </svg>
                                    @else
                                        <!-- Affiche une étoile vide -->
                                        <svg class="w-4 h-4 text-gray-300" fill="currentColor" viewBox="0 0 24 24">
                                            <path d="M12 .587l3.668 7.431L24 9.751l-6 5.841 1.42 8.281L12 18.896l-7.42 4.977L6 15.592 0 9.751l8.332-1.733L12 .587z"/>
                                        </svg>
                                    @endif
                                @endfor
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        @endforeach
    @else
        <div class="text-black text-lg text-center h-[100vh] flex flex-col justify-center items-center">
            <p>
                Pas de prestataire disponible
            </p>
        </div>
    @endif
    <div class="flex flex-col items-center">
        <p>{{ $userdata->links() }}</p>
    </div>
</div>
