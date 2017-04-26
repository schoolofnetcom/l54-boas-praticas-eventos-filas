@component('mail::message')
    # Olá

    O estoque de {{$product->name}} está abaixo do mínimo permitido.

    Estoque Atual: {{$product->stock}}

    Estoque Mínimo: {{intval($product->stock_max*0.10)}}

    Obrigado,<br>
    {{ config('app.name') }}
@endcomponent
