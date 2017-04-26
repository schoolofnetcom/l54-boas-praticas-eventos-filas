@component('mail::message')
    # Olá {{$user->name}}

    Sua compra foi realiza com sucesso.

    Order: {{$order->id}}

    Total: R$ {{$order->total}}

    @component('mail::button', ['url' => ''])
        Veja aqui os detalhes da compra realizada
    @endcomponent

    Obrigado,<br>
    {{ config('app.name') }}
@endcomponent
