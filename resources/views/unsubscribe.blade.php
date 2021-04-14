<form id="unsubscribe-form" action="{{ route('subscription.destroy', $subscribedMail) }}" method="POST"
    style="display: none;">
    @csrf
    @method('DELETE')
</form>

<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css'
    integrity='sha512-P5MgMn1jBN01asBgU0z60Qk4QxiXo86+wlFahKrsQf37c9cro517WzVSPPV1tDKzhku2iJ2FVgL67wG03SGnNA=='
    crossorigin='anonymous' />

<div class="d-flex justify-content-center align-items-center h-100">
    <div class="container jumbotron">
        <p class="">Salam <b>{{ $subscribedMail }}</b>,</p>
        <p>E-poçt siyahımıza olan abunəliyinizi <b>ləğv etmək</b> istədiyinizə əminsiniz?</p>
        <div class="ml-5">
            <a class="pr-3 text-danger" href="{{ route('subscription.destroy',  $subscribedMail) }}"
                onclick="event.preventDefault(); document.getElementById('unsubscribe-form').submit();">
                Ləğv et
            </a>
            <a href="{{ route('home') }}">Ana səhifəyə qayıt</a>
        </div>

    </div>
</div>