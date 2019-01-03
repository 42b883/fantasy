@extends('admin.layout.admin')

@section('content')
    <h3>Костюмы</h3>

    <ul>
        @forelse($products as $product)
        <li>
            <h4>Название костюма: {{$product->name}}</h4>
        </li>

        @empty
        <h3>Пусто</h3>
        @endforelse
    </ul>