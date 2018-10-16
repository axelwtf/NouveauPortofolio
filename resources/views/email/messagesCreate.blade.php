@component('mail::message')
# Introduction
{{ $request->name }}
{{ $request->email }}
The body of your message.
{{ $request->msg }}
@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
