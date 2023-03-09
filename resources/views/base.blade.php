<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CheapTalk</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/df9f7c369a.js" crossorigin="anonymous"></script>
    @livewireStyles()
</head>
<body class="bgImg">

    @include('navbar.base')

    <div class="container">
        @yield('content')
    </div>
    @livewireScripts()
</body>
</html>

<style>
    .bgImg {
        background-image: url('/images/1089110.jpg');
        background-size: cover;
    }

    .bgcolor {
        background-color: #D1B5A5;
    }

    .bghdcolor {
        background-color: #3B2F2A;
    }

    .createcolor{
        background-color: #E5D7D1;
    }

    .createbtnclr {
        background-color: #3B2F2A;
        color: #D1B5A5;
    }

    .createbtnclr:hover {
        background-color: #D1B5A5;
        color: #3B2F2A;
    }

    .borderclr {
        border-color: #1B1716;
    }

    .theadclr {
        color: #D1B5A5;
    }

    .catebtnclr {
        background-color: #3B2F2A;
        color: #D1B5A5;
    }

    .catebtnclr:hover {
        background-color: #D1B5A5;
        color: #3B2F2A;
    }

    .postcardhdclr {
        background-color: #3B2F2A;
        color:#D1B5A5;
    }

    .postcardbdclr {
        background-color: #D1B5A5;

    }

    .createpostbdclr {
        background-color: #B08C74;
    }

    .addcatebtnclr {
        background-color: #D1B5A5;
    }

    .addcatebtnclr:hover {
        background-color: #B08C74;
    }

    .dltbtnclr {
        background-color: #3B2F2A;
        color:#B08C74;
    }

    .dltbtnclr:hover {
        background-color: #B08C74;
    }
</style>
