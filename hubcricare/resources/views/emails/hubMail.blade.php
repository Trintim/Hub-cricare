
@component('mail::message')

#Você recebeu uma mensagem

Nome: {{$details['name']}}<br>
Telefone: {{$details['telefone']}}<br>
Email: {{$details['email']}}<br>
<br>
Motivo: {{$details['subject']}}<br>
<br>
Mensagem: {{$details['message']}}<br>

Obrigado,<br>
{{ config('app.name') }}
@endcomponent