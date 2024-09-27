@extends('layout.base')
@section('content')
{{-- List des vitiriers inscrit --}}
<section class="flex flex-col min-h-screen">
    <livewire:vitrier-pagination :userdata="$user_data"/>
</section>
@endsection