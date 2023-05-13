<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <title>SOGEAC | Admin</title>
</head>

<body id="body-pd">

    <!-- ======= Header ======= -->
    @include('partials.admin-header')
    <!-- End Header -->

    <!-- ======= Sidbar ======= -->
    @include('partials.admin-sidebar')
    <!-- End  Sidbar -->

    <!-- ======= Container Main start ======= -->
    @yield('admin-content')
    <!-- Container Main end -->



    @include('sweetalert::alert')

    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/script.js') }}"></script>
    <script src="{{ asset('assets/js/admin.js') }}"></script>
</body>

</html>
