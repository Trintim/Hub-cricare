@component('mail::message')

#Você recebeu uma mensagem

Nome: {{$details['name']}}<br>
Email: {{$details['email']}}<br>
Telefone: {{$details['telefone']}}<br>
Motivo: {{$details['subject']}}<br>
Mensagem: {{$details['message']}}<br>

Obrigado,<br>
{{ config('app.name') }}
@endcomponent
