@extends('layout.base')
@section('content')
    {{-- List des menager inscrit --}}
    <section class="flex flex-col min-h-screen">
        <livewire:menager-pagination />
    </section>
@endsection