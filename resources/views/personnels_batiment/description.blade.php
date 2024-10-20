@extends('layout.base')
@section('content')
    {{-- List des menuisiers inscrit --}}
    <section>
        <div class="profile-container">
            <div class=" flex justify-center items-center user-info w-full pt-24">
                <img class="object-cover rounded-lg max-h-44 object-center w-11/12" src="{{asset('storage/profil/'.$plombier->photo)}}" alt="User Picture" class="user-picture">
            </div>
            <div class="flex pl-4 mt-3 mb-2">
                <button class="border p-0.5 w-20 font-archivo border-blue-500 rounded text-blue-500 text-sm font-medium">
                    Plombier
                </button>
            </div>
            <div>
            <div class="flex font-archivo font-medium px-4 items-center justify-between">
                <p class="font-medium">{{$plombier->lastName}} {{$plombier->firstName}}</p>
                <svg class="w-6 h-6 text-gray-800 dark:text-green-600" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                    <path fill-rule="evenodd" d="M12 2c-.791 0-1.55.314-2.11.874l-.893.893a.985.985 0 0 1-.696.288H7.04A2.984 2.984 0 0 0 4.055 7.04v1.262a.986.986 0 0 1-.288.696l-.893.893a2.984 2.984 0 0 0 0 4.22l.893.893a.985.985 0 0 1 .288.696v1.262a2.984 2.984 0 0 0 2.984 2.984h1.262c.261 0 .512.104.696.288l.893.893a2.984 2.984 0 0 0 4.22 0l.893-.893a.985.985 0 0 1 .696-.288h1.262a2.984 2.984 0 0 0 2.984-2.984V15.7c0-.261.104-.512.288-.696l.893-.893a2.984 2.984 0 0 0 0-4.22l-.893-.893a.985.985 0 0 1-.288-.696V7.04a2.984 2.984 0 0 0-2.984-2.984h-1.262a.985.985 0 0 1-.696-.288l-.893-.893A2.984 2.984 0 0 0 12 2Zm3.683 7.73a1 1 0 1 0-1.414-1.413l-4.253 4.253-1.277-1.277a1 1 0 0 0-1.415 1.414l1.985 1.984a1 1 0 0 0 1.414 0l4.96-4.96Z" clip-rule="evenodd"/>
                </svg>
            </div>
                <p class="text-xs pl-4 text-gray-500 flex items-center">
                    <svg class="h-4 mr-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path fill="#f77d3b" d="M215.7 499.2C267 435 384 279.4 384 192C384 86 298 0 192 0S0 86 0 192c0 87.4 117 243 168.3 307.2c12.3 15.3 35.1 15.3 47.4 0zM192 128a64 64 0 1 1 0 128 64 64 0 1 1 0-128z"/></svg>
                    <?= $plombier->quarter ?> <?= $plombier->city ?>
                </p>
                <div class="pl-4 mt-1 flex items-center space-x-1">
                    @for ($i = 1; $i <= 5; $i++)
                        @if ($i <= round($plombier->received_ratings_avg_note, 1))
                            <!-- Affiche une étoile pleine -->
                            <svg class="w-4 h-4 text-yellow-400" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 .587l3.668 7.431L24 9.751l-6 5.841 1.42 8.281L12 18.896l-7.42 4.977L6 15.592 0 9.751l8.332-1.733L12 .587z"/>
                            </svg>
                        @elseif ($i - 0.5 == round($plombier->received_ratings_avg_note, 1))
                            <!-- Affiche une demi-étoile -->
                            <svg class="w-4 h-4 text-yellow-400" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 .587l3.668 7.431L24 9.751l-6 5.841 1.42 8.281L12 18.896l-7.42 4.977L6 15.592 0 9.751l8.332-1.733L12 .587z"/>
                            </svg>
                        @else
                            <!-- Affiche une étoile vide -->
                            <svg class="w-4 h-4 text-gray-300" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 .587l3.668 7.431L24 9.751l-6 5.841 1.42 8.281L12 18.896l-7.42 4.977L6 15.592 0 9.751l8.332-1.733L12 .587z"/>
                            </svg>
                        @endif 
                    @endfor
                    <div class="w-full flex justify-between items-center pr-4">
                        <span class="text-gray-500 pl-1">{{$plombier->received_ratings_avg_note}}</span>
                        <a href="tel:+225{{$plombier->phoneNumber}}">
                            <button class="border bg-orange-100 p-0.5 w-auto font-archivo border-orange-500 rounded text-orange-500 text-sm font-medium">
                                Appeler
                            </button>
                        </a>
                    </div>
                    
                </div>
            </div>

            <div class="comments-section">
                <h3>Comments:</h3>
                <ul id="comments-list">
                    <li>Great user, very friendly!</li>
                    <li>Had a good experience, would recommend.</li>
                    <!-- More comments here -->
                </ul>
            </div>

            <div class="add-comment">
                <h3>Add a Comment:</h3>
                <textarea id="comment-input" rows="4" placeholder="Write a comment..."></textarea>
                <button id="submit-comment">Submit</button>
            </div>
        </div>
    </section>
@endsection
