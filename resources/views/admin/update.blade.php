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
    <section class="edit-form-container">
        <form action="{{ route('product.edit', $product->id) }}" method="POST">
            @csrf
            @method('PUT')
{{--
            @error('product_name')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror --}}

            <input type="text" class="box" name="product_name" value="{{ $product->product_name }}">

            {{-- @error('product_name')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror --}}

            <input type="text" class="box" name="product_price" value="{{ $product->product_price }}">

            {{-- @error('product_name')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror --}}

            <input type="text" class="box" name="product_availability"
                value="{{ $product->product_availability }}">

            {{-- @error('product_name')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror --}}

            <input type="text" class="box" name="category_id" value="{{ $product->category_id }}">
            <input type="file" name="product_image" class="form-control" placeholder="image">
            <img src="/imgs/{{ $product->product_image }}" width="300px">




            <input type="submit" class="btn">
            <input type="reset" value="cancel" class="btn">

        </form>
    </section>
</body>

</html>
