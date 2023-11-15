<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel | Fortify | Package</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>

<body>
    @guest
        <header id="mainHeader">
            <nav class="navbar navbar-expand-lg bg-dark">
                <div class="container">
                    <a href="#" class="navbar-brand text-light">A.E</a>
                    <a href="#" class="navbar-toggler" data-toggle="collapse" data-target="#navbarToggle"
                        aria-controls="navbarToggle">
                        <span class="navbar-toggler-icon"></span>
                    </a>
                    <div class="navbar-collapse collapse justify-content-end align-items-end" id="navbarToggle">
                        <ul class="navbar-nav">
                            <li class="nav-item "><a href="{{route('register')}}" class="nav-link text-light">Register</a></li>
                            <li class="nav-item"><a href="{{route('login')}}" class="nav-link text-light">Login</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>
    @else
        <header id="mainHeader">
            <nav class="navbar navbar-expand-lg bg-dark">
                <div class="container">
                    <a href="#" class="navbar-brand text-light">A.E</a>
                    <a href="#" class="navbar-toggler" data-toggle="collapse" data-target="#navbarToggle"
                        aria-controls="navbarTo">
                        <span class="navbar-toggler-icon"></span>
                    </a>
                    <div class="navbar-collapse collapse justify-content-end align-items-end" id="navbarToggle">
                        <ul class="navbar-nav">
                            <li class="nav-item"><a href="#" class="nav-link text-light">Home</a></li>
                            <li class="nav-item"><a href="#" class="nav-link text-light">About</a></li>
                            <li class="nav-item"><a href="#" class="nav-link text-light">Skill</a></li>
                            <li class="nav-item"><a href="#" class="nav-link text-light">Project</a></li>
                            <li class="nav-item"><a href="#" class="nav-link text-light">Contact</a></li>
                            <span class="text-light fs-1">|</span>
                            <li class="nav-item"><a href="{{route('logout')}}" class="nav-link text-light">Logout</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>
    @endguest

    @yield('content')




    <!--------------js links------------->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>
</body>

</html>
