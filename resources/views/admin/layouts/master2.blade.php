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
    style="background-color: rgb(44, 135, 138); background-image: linear-gradient(
        rgba(40, 68, 154, 0.2), 
        rgba(163, 186, 255, 0.2)
      ), url('{{ URL::asset('admin_assets/images/bg.jpg') }}'); background-position: center; background-repeat: no-repeat; background-size: cover;">
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
