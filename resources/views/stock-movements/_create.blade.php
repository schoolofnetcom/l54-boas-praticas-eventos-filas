<div class="form-group">
    {!! Form::label('quantity', 'Quant.', ['class' => 'control-label']) !!}
    {!! Form::text('quantity', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('product_id', 'Produto', ['class' => 'control-label']) !!}
    {!! Form::select('product_id',$products, null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::submit('Criar',['class' => 'btn btn-primary']) !!}
</div>