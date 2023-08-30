<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .details{
            display: flex;
            justify-content: space-between;

            padding:100px 90px;

        }
        .details div{
            margin-left: 100px;

        }
        .content label{
            color: #000;
            font-size: 25px;
        }
        .content p{
            color: blue;
            font-size: 20px
        }

    </style>
</head>
<body>
<div class="details">
<img width="400px" height="350" src="{{ $product->product_image }}" alt="Product Image"><br>

<div class="content">

    <label>product name:</label>
<p>{{$product->product_name}}</p>

<label>product price:</label>
<p>{{$product->product_price}}</p>

<label>product description:</label>

<p>{{$product->description}}</p>
<label>product availability</label>
<p>{{$product->product_availability}}</p>


<label>product category:</label>
<p>{{$product->category_id}}</p>
</div></div>
</body>
</html>
