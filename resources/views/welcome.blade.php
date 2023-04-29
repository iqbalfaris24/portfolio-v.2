<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="img/IP V3.png" type="image/x-icon">
    <title>Iqbal Faris Akbar</title>
    @include('includes.style')
    {{-- Changed --}}
    <!-- Styles -->

</head>

<body id="home">
    <!-- Open Navbar -->
    @include('includes.navbar')
    <!-- CLose Navbar -->

    <!-- Open Jumbotron -->
    @include('includes.jumbotron')
    <!-- Close Jumbotron -->

    <!-- Open Project -->
    @include('includes.projects')
    <!-- Close Procject -->

    <!-- Open Contact -->
    @include('includes.contact')
    <!-- Close Contact -->

    <!-- Open Footer -->
    @include('includes.footer')
    <!-- Close footer -->

    <!-- Scripts -->
    @include('includes.script')
</body>

</html>
