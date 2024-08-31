<!DOCTYPE html>
<html lang="en">
    @include('layout.head')
<body class="box-border bg-my-gray">
    <!-- Header -->
    <x-header/>
        @yield('content')
    <x-footer/>
</body>
</html>