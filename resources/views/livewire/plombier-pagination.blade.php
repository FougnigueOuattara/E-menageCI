<div class="justify-center border-gray-300 min-h-[60vh] mb-10">
    <div class="w-full h-44 flex justify-around items-end pb-5">
        <input wire:model.live="search" type="text" class="rounded-3xl shadow-sm h-10 w-11/12 placeholder:pl-4 bg-white outline-slate-300" name="search" placeholder="Rechercher par ville ou quartier">
    </div>
    <div class="flex items-center justify-between px-4 py-6">
        <div class="px-2 py-1 bg-slate-200 rounded-md text-lg font-medium text-slate-500 w-auto">
            Plomberie
        </div>
        <div class="flex items-center justify-between bg-gray-200 ring-1 p-1 h-auto rounded ring-gray-300 border-gray-400 w-1/6 text-center">
            <span class="text-slate-500">Trier</span>
            <svg class="w-4 h-4 text-slate-500 dark:text-slate-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                <path d="M5 13.17a3.001 3.001 0 0 0 0 5.66V20a1 1 0 1 0 2 0v-1.17a3.001 3.001 0 0 0 0-5.66V4a1 1 0 0 0-2 0v9.17ZM11 20v-9.17a3.001 3.001 0 0 1 0-5.66V4a1 1 0 1 1 2 0v1.17a3.001 3.001 0 0 1 0 5.66V20a1 1 0 1 1-2 0Zm6-1.17V20a1 1 0 1 0 2 0v-1.17a3.001 3.001 0 0 0 0-5.66V4a1 1 0 1 0-2 0v9.17a3.001 3.001 0 0 0 0 5.66Z"/>
            </svg>              
        </div>
    </div>
    
    @if (!$userdata->isEmpty())
        @foreach ($userdata as $data)
            <a class="cursor-pointer w-full" href="{{route('plombier.details',['id'=>$data->id])}}">
                <div class="flex h-24 w-full items-center shadow-sm">
                    <div class="rounded-full h-full p-2 w-auto">
                        <img class="rounded-full w-20 h-full md:round object-cover object-center" src="{{asset('storage/profil/'.$data->photo)}}">
                    </div>
                    <div class="pl-4 h-full flex flex-col justify-start w-2/3">
                        <div class="flex flex-col justify-evenly h-full">
                            <div>
                                <div class="flex items-center justify-between">
                                    <p class="font-medium"><?= $data->lastName ?> <?= $data->firstName ?> </p>
                                    <svg class="w-6 h-6 text-gray-800 dark:text-green-600" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                        <path fill-rule="evenodd" d="M12 2c-.791 0-1.55.314-2.11.874l-.893.893a.985.985 0 0 1-.696.288H7.04A2.984 2.984 0 0 0 4.055 7.04v1.262a.986.986 0 0 1-.288.696l-.893.893a2.984 2.984 0 0 0 0 4.22l.893.893a.985.985 0 0 1 .288.696v1.262a2.984 2.984 0 0 0 2.984 2.984h1.262c.261 0 .512.104.696.288l.893.893a2.984 2.984 0 0 0 4.22 0l.893-.893a.985.985 0 0 1 .696-.288h1.262a2.984 2.984 0 0 0 2.984-2.984V15.7c0-.261.104-.512.288-.696l.893-.893a2.984 2.984 0 0 0 0-4.22l-.893-.893a.985.985 0 0 1-.288-.696V7.04a2.984 2.984 0 0 0-2.984-2.984h-1.262a.985.985 0 0 1-.696-.288l-.893-.893A2.984 2.984 0 0 0 12 2Zm3.683 7.73a1 1 0 1 0-1.414-1.413l-4.253 4.253-1.277-1.277a1 1 0 0 0-1.415 1.414l1.985 1.984a1 1 0 0 0 1.414 0l4.96-4.96Z" clip-rule="evenodd"/>
                                      </svg>
                                                                      </div>
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
