<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <!-- Meta data -->
    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
    <meta content="Soukaina - Portfolio" name="description">
    <meta content="Soukaina - Portfolio" name="author">
    <meta name="keywords" content="Soukaina - Portfolio" />
    @include('admin.layouts.custom-head')
</head>

<body class="h-100vh"
    style="background-image: linear-gradient(
        rgba(0, 0, 0, 0.4), 
        rgba(0, 20, 8, 0.6)
      ), url('{{ URL::asset('assets/images/bg/bg_2.jpg') }}'); background-position: center; background-repeat: no-repeat; background-size: cover;">
    <div class="box">
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
    </div>
    @yield('content')
    @include('admin.layouts.custom-footer-scripts')
</body>

</html>
