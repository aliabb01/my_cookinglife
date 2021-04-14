@component('mail::message')

Sizə bağlı {{ $subscriberData['subscribedMail'] }} E-poçt adresi <b>MyCookingLife bildiriş siyahısına</b> abunə olundu.

Abunəliyiniz üçün <b>təşəkkür edirik!</b>

Hörmətlə,
<br>
<b>{{ config('app.name') }}.</b>


@component('mail::subcopy')
<small>Tarix: {{ now("Asia/Baku")->toRfc850String() }}</small>

<a href="{{ route('subscription.show', [$subscriberData['subscribedMail']]) }}">
    Abunəliyi ləğv et
</a>
@endcomponent

@endcomponent