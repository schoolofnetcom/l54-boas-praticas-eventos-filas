<div class="row">
    <table class="table table-bordered">
        <thead>
        <tr>
            <th style="width: 10px;">#</th>
            <th>Quant.</th>
            <th>Produto</th>
            <th>Estoque</th>
        </tr>
        </thead>
        <tbody>
        @foreach($movements as $movement)
            <tr>
                <td>{{ $movement->id  }}</td>
                <td>{{ $movement->quantity }}</td>
                <td>{{ $movement->product->name }}</td>
                <td>{{ $movement->product->stock }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>