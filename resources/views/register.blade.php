<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Register Page</title>
    <link rel="stylesheet" href="{{ asset('style.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@500&display=swap" rel="stylesheet">

</head>

<body>
    <div class="main">



        <div class="signup">
            @if (Session::has('success'))
                <div class="message" role="alert">
                    {{ Session::get('success') }}
                </div>
            @endif
            <form action="{{ route('register') }}" method="POST">
                @csrf
                <label class="header">Register</label>
                {{-- <label for="name" class="lbl">Name: </label> --}}
                <input type="text" name="name" id="name" placeholder="Your name"required>

                {{-- <label for="email" class="lbl" >Email address: </label> --}}
                <input type="email" name="email" id="email" placeholder="name@example.com" required>

                {{-- <label for="password" class="lbl" >Password: </label> --}}
                <input type="password" placeholder="password" name="password" id="password" required>

                <button>Register</button>

            </form>
        </div>


    </div>
</body>

</html>
