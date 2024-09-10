@extends('layout.base')
@section('content')
    {{-- List des menuisiers inscrit --}}
    <section>
        <div class="profile-container">
            <div class="user-info">
                <img class="h-20 w-20" src="{{asset('storage/'.$plombier->photo)}}" alt="User Picture" class="user-picture">
                <h2 class="user-name">User Name : {{$plombier->lastName}}</h2>
                <p class="user-rating">Rating: 4.5/5</p>
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
