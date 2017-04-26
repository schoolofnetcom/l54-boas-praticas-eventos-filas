<div>
    <div>
        <h3>Comprovante de pagamento - {{config('app.name')}}</h3>
        <p>Data: {{$order->created_at}}</p>
        <p>Total: {{$order->total}}</p>
        <table>
            <thead>
            <tr>
                <th>Produto</th>
                <td>Quant.</td>
                <td>Price.</td>
            </tr>
            </thead>
            <tbody>
            @foreach($order->products as $product)
                <tr>
                    <td>{{ $product->product->name  }}</td>
                    <td>{{ $product->quantity }}</td>
                    <td>{{ $product->price }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>
