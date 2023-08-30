<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('style1.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>Document</title>
</head>
<body>
    <header>
        <div class="container">
            <div class="header-content">
        <h4>e-commerence</h4>
        {{-- <form action="/search" class="search-form">
            <div class="form-group">
            <input type="text" name="query" class="search-box" placeholder="Search">
            <button type="submit" class="search"><i class="fa fa-search fa-lg"></i></button></div>
        </form> --}}
       <nav class="navbar">

            <ul class="list">

                <li><a href="{{route('product.create')}}"> add products</a></li>
                <li><a href="#">category</a></li>
            </ul>

        </nav>
            <div class="login">
                <ul class="list">
                   {{-- <li> <a href="cart.html"><i class="fa fa-shopping-cart fa-lg"></i></a></li> --}}

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
    <br>
    <br>
<section class="display-product-table" enctype="multipart/form-data">
   <table >

    <thead>
        <tr>
            <th>product image</th>
            <th>Product name</th>
            <th>Product price</th>
            <th>Product availability</th>
            <th>Category Name</th>
            <th>actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($products as $product)
        <tr>
            <td> <img  src="/imgs/{{ $product->product_image }}" alt="Product Image" width="200px"></td>
            <td>{{$product->product_name}}</td>
            <td>{{$product->product_price}}</td>
            <td>{{$product->product_availability}}</td>
            <td>{{$product->category->name}}</td>

           <td>
            <button class="butn"><a href="{{route('product.show',$product->id)}}">
           show</a></button>


           <form action="{{route('product.delete',$product->id)}}" method="POST">
            @method('DELETE')
            @csrf
               <button class="delete-btn" type="submit">Delete</button>
           </form>

            <form action="{{route('product.update',$product->id)}}">

                <button class="option-btn">Update</button>
            </form>
            </td>
        </tr>
        @endforeach
    </tbody>
   </table>
</section>


</body>
</html>
