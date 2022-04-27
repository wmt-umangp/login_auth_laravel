@component('mail::message')
# Successfully Registered

Hello{{' '.$user->name.' '}} You have successfully Registered with Our Portal.
Welcome to our portal.

Thanks,<br>
{{ config('app.name') }}
@endcomponent
