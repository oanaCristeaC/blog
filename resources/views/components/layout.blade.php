<!DOCTYPE html>
<html lang="en">

<head>
    <title>Learn 2 Program </title>
    <link rel="icon" type="image/ico" href="/favicon.ico"/>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
            crossorigin="anonymous"></script>{{--    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>--}}
</head>

<body class="w-100">

<section>
    <nav class="navbar navbar-light bg-light">
        <div class="container-fluid">
            <a href="/" class="navbar-brand">
                <picture>
                    <source media="(max-width: 799px)" srcset="images/logo-short.jpg">
                    <source media="(min-width: 800px)" srcset="/images/logo.jpg">
                    <img style="max-height:40px" src="/images/logo-short.jpg" alt="logo">
                </picture>
            </a>
            <form class="d-flex">
                {{--                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">--}}
                <button class="btn btn-outline-info">Subscribe for Updates</button>
            </form>
        </div>
    </nav>
</section>

{{ $slot }}

{{--@yield('content')--}}

</body>

</html>
