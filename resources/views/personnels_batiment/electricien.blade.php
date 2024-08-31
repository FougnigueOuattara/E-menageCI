@extends('layout.base')
@section('content')
{{-- List des electriciens inscrit --}}
<section class="flex flex-col min-h-screen">
    <livewire:electricien-pagination :userdata="$user_data"/>
</section>
@endsection