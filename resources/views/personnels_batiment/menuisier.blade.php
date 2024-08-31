@extends('layout.base')
@section('content')
    {{-- List des menuisiers inscrit --}}
    <section class="flex flex-col min-h-screen">
        <livewire:menuisier-pagination :userdata="$user_data"/>
    </section>
@endsection