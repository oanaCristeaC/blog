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
            crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@2.8.2/dist/alpine.min.js"></script>
</head>

<body class="w-100">

<section>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <picture>
                    <source media="(max-width: 799px)" srcset="images/logo-short.jpg">
                    <source media="(min-width: 800px)" srcset="/images/logo.jpg">
                    <img style="max-height:40px" src="/images/logo-short.jpg" alt="logo">
                </picture>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>


            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                </ul>
                <div class="d-flex">
                    <ul class="navbar-nav nav-item me-auto mb-2 mb-lg-0">
                        @guest
                            <li class="nav-link mx-2">
                                <a class="nav-link" href="/login" id="navbarDropdown" role="button">
                                    Login
                                </a>
                            </li>
                            <li class="nav-link mx-2">
                                <a class="nav-link" href="/login" id="navbarDropdown" role="button">
                                    Login
                                </a>
                            </li>
                        @endguest
                        @auth
                            <li class="nav-link mx-2">
                                <a class="nav-link" href="/account" id="navbarDropdown" role="button">
                                    {{ ucfirst(auth()->user()->name)}}
                                </a>
                            </li>
                        @endauth
                    </ul>
                    <button class="btn btn-outline-info">Subscribe for Updates</button>
                </div>
            </div>
        </div>
    </nav>
</section>

{{ $slot }}

<footer class="bg-light text-center py-5">
    <div class="container">
        <img src="/images/lary-newsletter-icon.svg" alt="email" class="mx-auto" style="width: 145px;">
        <h2 class="font-weight-normal mb-4"> Stay in touch with the latest posts </h2>

        <div class="">
            <form method="POST" action="#" class="position-relative d-inline-block">
                <div class="form-group d-flex align-items-center">
                    <label for="email" class="d-none">
                        <img src="/images/mailbox-icon.svg" alt="mailbox letter">
                    </label>
                    <input type="email" class="form-control" id="email" aria-describedby="emailHelp"
                           placeholder="Enter email">
                </div>
                <button type="submit" class="btn btn-info px-3 my-3">Subscribe</button>
            </form>
        </div>
    </div>

</footer>
</body>

</html>
