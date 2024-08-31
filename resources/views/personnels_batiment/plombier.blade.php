@extends('layout.base')
@section('content')
    {{-- List des plombier inscrit --}}
    <section class="flex flex-col min-h-screen">
        <livewire:plombier-pagination/>
    </section>
@endsection