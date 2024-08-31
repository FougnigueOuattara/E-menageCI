@extends('layout.base')
@section('content')
    {{-- List des nounous inscrit --}}
    <section class="flex flex-col min-h-screen">
        <livewire:nounou-pagination />
    </section>
@endsection