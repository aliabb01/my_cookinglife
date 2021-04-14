@component('mail::message')

# MyCookingLife,

# {{ $body['campaignTitle'] }}

{{ $body['campaignMessage'] }}



@component('mail::subcopy')
<small>Tarix: {{ now("Asia/Baku")->toRfc850String() }}</small>

<a href="{{ route('subscription.show', $subscriber->subscribedMail) }}">
    Abunəliyi ləğv et
</a>    
{{-- @foreach ($subscribers as $subscriber)
<a href="{{ route('subscription.show', $subscriber->subscribedMail) }}">
    Abunəliyi ləğv et
</a>    
@endforeach --}}

@endcomponent

@endcomponent