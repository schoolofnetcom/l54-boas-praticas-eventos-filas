@component('mail::message')
    # Olá {{$user->name}},

    Seu pagamento foi efetuado com sucesso.

    Order: {{$order->id}}

    Total: {{$order->total}}

    @component('mail::button', ['url' => ''])
        Clique aqui para saber mais detalhes
    @endcomponent

    Obrigado,<br>
    {{ config('app.name') }}
@endcomponent
