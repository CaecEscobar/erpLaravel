@component('mail::message')
# Recupera tu contraseña

Has recibido este correo porque solicitaste restablecer tu contraseña en {{ config('app.name') }}.

@component('mail::button', ['url' => $actionUrl])
Restablecer contraseña
@endcomponent

Este enlace expirará en 60 minutos.

Si no solicitaste el restablecimiento de tu contraseña, puedes ignorar este mensaje.

Gracias,<br>
El equipo de {{ config('app.name') }}
@endcomponent
 
