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
<body class="add">

    <form class="add-product-form" action="{{route('product.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
         <h3>add product</h3>
         {{-- @error('product_name')
          <div >{{ $message }}</div>
         @enderror --}}


        <input class="box" type="text" name="product_name" placeholder="Product name">

        {{-- @error('product_price')
          <div >{{ $message }}</div>
         @enderror --}}

         <input type="text" class="box" name="product_price" placeholder="product price">

         {{-- @error('product_availability')
                    <div >{{ $message }}</div>
                    @enderror --}}

        <input type="text" class="box" name="product_availability"placeholder="product availability">
        {{-- <input  type="file" name="product_image" placeholder="Product image"> --}}
{{--
        @error('category_id')
          <div >{{ $message }}</div>
         @enderror --}}

        <input type="text" class="box" name="category_id"placeholder="category id">
         <input type="submit" class="btn">

    </form>
</body>
</html>
