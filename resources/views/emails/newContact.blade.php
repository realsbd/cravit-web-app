@component('mail::message')

{{ $email->message }}

Thanks,<br>
{{ config('app.name') }}
@endcomponent
