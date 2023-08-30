<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel e-commerence</title>
    <link rel="stylesheet" href="{{ asset('style1.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<body>
    <header>
        <div class="container">
            <div class="header-content">
        <h4>e-commerence</h4>
        <form action="/search" class="search-form">
            <div class="form-group">
            <input type="text" name="query" class="search-box" placeholder="Search">
            <button type="submit" class="search"><i class="fa fa-search fa-lg"></i></button></div>
        </form>
       <nav class="navbar">

            <ul class="list">

                <li><a href="#">products</a></li>
                <li><a href="#">category</a></li>
            </ul>

        </nav>
            <div class="login">
                <ul class="list">
                   <li> <a href="cart.html"><i class="fa fa-shopping-cart fa-lg"></i></a></li>
                    <li><a href="{{route('profile')}}"><i class="fa fa-user fa-lg"></i></a></li>
                    <li><form action="{{ route('logout') }}" method="POST"  role="search">
                        @csrf
                        @method('DELETE')
                        <button  class="logout" type="submit">Logout</button>
                    </form></li>
                </ul>

            </div>
            </div>
        </div>
    </header>
<div class="body">
<section class="products" id="" >

    <h3 class="heading">reselt of search</h3>
    <div class="box-container">
        @foreach ($products as $product)
        <div class="box">
            <img src="{{ $product->product_image }}" alt="Product Image">
            <h3>{{ $product->product_name }}</h3>
            <div class="price">{{ $product->product_price }}$</div>
            <h2>{{ $product->product_availability }}</h2>
            <input type="submit" class="btn" value="add to cart">
            {{-- <a href="{{route('show',$product->id)}}" class="btn" >see more</a> --}}
             {{-- <button><a href="{{route('product.show',$product->id)}}">
               show</a></button> --}}


            </div>
            @endforeach
    </div>

</section>
</div>

        {{-- <h4> Welcome, {{ Auth::user()->name }}</h4> --}}




</body>

</html>
