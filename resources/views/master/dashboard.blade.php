<!DOCTYPE html>
<html lang="en">
@include('layouts.dashboard.head')

<body>
    @include('layouts.dashboard.navbar')

    @yield('content')
    @include('sweetalert::alert')
    @include('layouts.dashboard.script')
    @stack('script')
</body>
</html>