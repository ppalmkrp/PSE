<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</head>

<body>
    <div class="container">
        <header
            class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
            <div class="col-md-3 mb-2 mb-md-0">
                <a href="/home" class="d-inline-flex link-body-emphasis text-decoration-none">
                    CLASSROOM
                </a>
            </div>

            @guest <!-- ตรวจสอบว่าไม่มีใครล็อกอิน -->
                <div class="dropdown">
                    <a href="/login" class="btn btn-outline-danger me-2">Login</a>
                    <a href="/register" class="btn btn-danger">Register</a>
                </div>
            @else
                <!-- ถ้ามีใครล็อกอินแล้ว -->
                <div class="dropdown">
                    <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        <i class="bi bi-person-circle" style="font-size: 1.2rem;"> </i>{{ Auth::user()->name }}<span
                            class="visually-hidden">Toggle Dropdown</span>
                    </button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="/user/profile">Setting</a></li>
                        @if (Auth::user()->roles == 2)
                            <li><a class="dropdown-item" href="/addUserForm">Add Student</a></li>
                        @else
                            <li><a class="dropdown-item" href="/MyWatchlist">Subject</a></li>
                            <li><a class="dropdown-item" href="/favpage">Score</a></li>
                        @endif
                        <li>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <a class="dropdown-item" href="route('logout')"
                                    onclick="event.preventDefault(); this.closest('form').submit();">
                                    Logout
                                </a>
                            </form>
                        </li>
                    </ul>
                </div>
            @endguest
        </header>

        <footer class="py-3 my-4">
            <ul class="nav justify-content-center border-bottom pb-3 mb-3">
                <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">Home</a></li>
                <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">Student</a></li>
                <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">Subject</a></li>
                <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">Score</a></li>
            </ul>
            <p class="text-center text-body-secondary">© 2023 Company, Inc</p>
        </footer>
    </div>
</body>

</html>
