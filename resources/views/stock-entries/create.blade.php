@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <h3>Criar entrada</h3>
            {!! Form::open(['url' => route('stock_entries.store'),'method' => 'POST']) !!}
                @include('stock-movements._create')
            {!! Form::close() !!}
        </div>
    </div>
@endsection
