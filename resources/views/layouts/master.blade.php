<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <title>{{config('app.name')}} @yield('title')</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <meta content="" name="keywords"/>
    <meta content="" name="description"/>

    @include('layouts.components.1_style')

</head>

<body>

@include('layouts.components.2_spinner')

@include('layouts.components.3_topbar')

@include('layouts.components.4_navbar')

@yield('content')

@include('layouts.components.5_footer')

<!-- Back to Top -->
<a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"
><i class="bi bi-arrow-up"></i
    ></a>

@include('layouts.components.6_script')

</body>
</html>
