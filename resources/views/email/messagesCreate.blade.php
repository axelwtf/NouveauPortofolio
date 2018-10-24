@component('mail::message')
# Introduction
{{ $name }}
{{ $email }}
The body of your message.
{{ $msg }}
@component('mail::button', ['url' => ''])
Button Text
@endcomponent
 Thanks,<br>
{{ config('app.name') }}
@endcomponent
