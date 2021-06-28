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

<footer class="bg-light text-center py-5">
 <div class="container">
     <img src="./images/lary-newsletter-icon.svg" alt="email" class="mx-auto" style="width: 145px;">
     <h2 class="font-weight-normal mb-4"> Stay in touch with the latest posts </h2>

     <div class="">
         <form method="POST" action="#" class="position-relative d-inline-block">
             <div class="form-group d-flex align-items-center">
                 <label for="email" class="d-none">
                     <img src="/images/mailbox-icon.svg" alt="mailbox letter">
                 </label>
                 <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email">
             </div>
             <button type="submit" class="btn btn-info px-3 my-3">Subscribe</button>
         </form>
     </div>
 </div>

</footer>

</body>

</html>
