<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .side{
            display: flex;

        }
        .user{
            margin-left:90px;
            margin-top: 30px;
        }
        table {
        width: 30%;
        text-align: center;
        margin-left: 20%;
        margin-top: 70px;
    }

    .display-product-table table th {
        padding: 1.5rem;
        font-size: 1.2rem;
        background-color: #2e2e2f;
        color: #fff;
    }

    .display-product-table table td {
        padding: 1.5rem;
        font-size: 1.1rem;
        color:#2e2e2f ;
    }

    .display-product-table table td:first-child {
        padding: 0;
    }

    .display-product-table table tr:nth-child(even) {
        background-color: #eee;
    }

    </style>
</head>
<body>
<div class="side">
    <div class="user">
    <h1>User Profile</h1>
    <p>Name: {{ $user->name }}</p>
    <p>Email: {{ $user->email }}</p>
    </div>

    <div class="display-product-table">

    <table >
        <tr>
        <th>Order ID</th>
        <th>product name</th>
        <th>Price</th>
        <th>Total</th>

        {{-- <th>product_availability</th> --}}
    </tr>
    @foreach ($orders as $order)
    <tr>
        <td> {{ $order->id }}</td>
        <td>{{$order->product_name}}</td>
        <td> {{ $order->price }}</td>
        <td>{{ $order->total }}</td>
{{--
        <td>{{$order->product_availability}}</td> --}}


    </tr>
     @endforeach



    </table></div></div>

</body>
</html>
