@extends('layout.base')
@section('content')
    {{-- List des vitriers inscrit --}}
    <section class="flex flex-col min-h-screen">
        <livewire:ferronnier-pagination />
    </section>
@endsection