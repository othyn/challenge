@component('mail::message')
# New Share Request

Hi {{ $friend_name }},

You've recieved a new share request from {{ $customer_name }}!

Thanks,<br>
{{ config('app.name') }}
@endcomponent
