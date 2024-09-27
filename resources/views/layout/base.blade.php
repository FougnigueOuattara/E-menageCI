<!DOCTYPE html>
<html lang="en">
    @include("layout.head")
<body class="box-border bg-my-gray scroll-smooth font-archivo">
    <!-- Header -->
    <x-header/>
        @yield('content')
    <x-footer/>
    @livewireScripts
</body>
</html>
