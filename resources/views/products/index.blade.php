@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <h3>Products</h3>
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th style="width: 10px;">#</th>
                    <th>Nome</th>
                    <th>Quant.</th>
                    <th>Quant. Max.</th>
                    <th>Preço Venda</th>
                    <th>Preço Compra</th>
                </tr>
                </thead>
                <tbody>
                @foreach($products as $product)
                    <tr>
                        <td>{{ $product->id  }}</td>
                        <td>{{ $product->name }}</td>
                        <td>{{ $product->stock }}</td>
                        <td>{{ $product->stock_max }}</td>
                        <td>{{ $product->price_sale }}</td>
                        <td>{{ $product->price_purchase }}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection