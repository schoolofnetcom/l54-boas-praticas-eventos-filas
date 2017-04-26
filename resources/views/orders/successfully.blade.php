@extends('layouts.app')

@section('content')
    <div class="container">
        <h3>Sua compra foi efetuada com sucesso</h3>
        <p>Order: {{$order->id}}</p>
        <p>Total: R$ {{$order->total}}</p>
    </div>
@endsection