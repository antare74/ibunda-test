<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Page Title')</title>
    @include('layouts/user/style')
</head>
<body>
    @include('layouts/user/header')
    <div class="container">
        <div class="content">
            @yield('content')
        </div>
    </div>
    @include('layouts/user/footer')
    @include('layouts/user/script')
</body>
</html>
