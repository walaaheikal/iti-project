<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login Page</title>
    <link rel="stylesheet" href="{{ asset('style.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@500&display=swap" rel="stylesheet">
</head>

<body>
    <div class="main">



        <div class="login">
            @if (Session::has('error'))
                <div class="massege" role="alert">
                    {{ Session::get('error') }}
                </div>
            @endif
            <form action="{{ route('login') }}" method="POST">
                @csrf
                <label class="header">Login</label>
                {{-- <label for="email" class="form-label">Email address</label> --}}
                <input type="email" name="email" class="form-control" id="email" placeholder="name@example.com"
                    required>


                {{-- <label for="password" class="form-label">Password</label> --}}
                <input type="password" name="password" class="form-control" id="password" required>



                <button class="btn btn-primary">Login</button>


            </form>
        </div>


    </div>
</body>

</html>
