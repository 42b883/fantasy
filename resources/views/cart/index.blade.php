@extends('layout.main')

@section('content')

<h3 class="text-center text-uppercase">Корзинка</h3>
{{-- <ol>
    @foreach($cartItems as $cartItem)
    <li>{{$cartItem->name}}</li>
</ol>  --}}

<table class="table table-hover">
    <thead>
        <tr>
            <th>Наименование</th>
            <th>Цена</th>
            <th>Количество</th>
            <th>Размер</th>
        </tr>
    </thead>
    <tbody>
        @foreach($cartItems as $cartItem)
        <tr>
            <td>{{$cartItem->name}}</td>
            <td>{{$cartItem->price}}</td>
            <td width="50px">
                {!! Form::open(['route'=>['cart.update',$cartItem->rowId], 'method'=>'PUT']) !!}
            <input name="qty" type="text" value="{{$cartItem->qty}}">
            <input type="submit" class="btn btn-sm btn-default" value="ok">    
            {!! Form::close() !!}
            </td>
            <td>{{$cartItem->size}}</td>
        </tr>
        @endforeach
        <tr>
            <td>Общая сумма: {{Cart::total()}}с.</td>
            <td>Количество: {{Cart::count()}}</td>
            <td></td>
        </tr>
    </tbody>
</table>
<a href="#" class="button">Checkout</a>
@endsection