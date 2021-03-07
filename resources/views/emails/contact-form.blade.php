@component('mail::message')

# {{ $data['senderName'] }} adlı şəxsdən sizə əlaqə e-maili gəldi

<strong> Ad </strong> - {{ $data['senderName'] }}

<strong> Göndərənin e-maili </strong> - {{ $data['senderEmailName'] }}

<strong> İsmarış </strong> - <p style="border:10px;">{{ $data['senderText'] }}</p>
{{--# Əlaqə


The body of your message.

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }} --}}
@endcomponent