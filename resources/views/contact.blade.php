@extends('layouts.app')
@section('content')
<style>
    .badge-light-red {
        background-color: #F05340;
        color: white;
    }

    .badge-green {
        background-color: #15A815;
        color: white;
    }

    .bg-light-gray {
        background-color: #E9ECEF;
    }

    button {
        box-shadow: none !important;
    }
</style>

<div class="container mt-5 mb-5">
    <div class="row">
        <div class="col bg-light-gray shadow-lg pt-5 pb-5 pr-5 pl-5 rounded-left container-email">
            <h3 class="text-center">Əlaqə</h3>

            <hr>

            <form action="/elaqe" method="POST" class="mt-4" id="contactForm">
                @csrf

                <div class="d-flex flex-column justify-content-center">
                    <div class="mt-2">
                        <label class="form-label" for="contactName"><strong style="font-size: 1.1rem;">Ad :</strong></label>
                        <input class="form-control @error('senderName') is-invalid @enderror" style="box-shadow:none; width:80%;"
                            type="text" name="senderName" id="contactName" placeholder="Adınız"
                            title="Zəhmət olmasa boşluğu doldurun" value="{{old('contactName')}}" required>

                        @error('senderName')

                        <div class="invalid-feedback">{{ $message }}</div>

                        @enderror
                    </div>

                    <div class="mt-3">
                        <label class="form-label" for="contactEmail"><strong style="font-size: 1.1rem;">E-poçt :</strong></label>
                        <input class="form-control @error('senderEmailName') is-invalid @enderror"
                            style="box-shadow:none; width:80%;" type="email" name="senderEmailName" id="contactEmail"
                            placeholder="E-poçt ünvan" title="Zəhmət olmasa boşluğu doldurun"
                            value="{{old('contactEmail')}}" required>

                        @error('senderEmailName')

                        <div class="invalid-feedback">{{ $message }}</div>

                        @enderror

                    </div>


                    <div class="mt-3">
                        <label for="emailMessage"><strong style="font-size: 1.1rem;"> Mesajınız :</strong></label>
                        <textarea class="form-control @error('senderText') is-invalid @enderror" id="emailMessage"
                            placeholder="Yaz" rows="7" style="resize:none; box-shadow:none;" name="senderText"
                            value="{{old('emailMessage')}}" required></textarea>

                        <span style="font-size: smaller; margin-top:7px;" id="chars-left"></span>

                        @error('senderText')

                        <div class="invalid-feedback">{{ $message }}</div>

                        @enderror

                    </div>
                </div>

                {{-- @if ($errors->any())
                @foreach ($errors->all() as $error)
                <div class="alert alert-danger" role="alert">
                    {{$error}}
        </div>
        @endforeach

        @endif --}}



        <div class="form-group @error('g-recaptcha-response') is-invalid @enderror">
            <div class="captcha mt-3">
                {!! app('captcha')->display() !!}
            </div>
        </div>

        @error('g-recaptcha-response')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
        @enderror

        <div class="flex-column mt-4">
            <button class="btn btn-email-send btn-lg text-light" type="submit">Göndər</button>
        </div>

        </form>

    </div>

</div>

</div>


<div class="container-below-email bg-light">
    <div class="container bg-light" style="border-radius: 100px; padding-top:10px; padding-bottom:30px;">
        <h5 class="mt-5 text-center">Telefon: <p> (050) 537-02-59 <a href="#" type="button" class="" data-toggle="modal"
                    data-target="#phoneNumberInfoModal"><i class="fas fa-info-circle"></i></a></p>
        </h5>
        <h5 class="text-center">Ünvan: <p>Bakı şəhəri, Nərimanov rayonu, Gənclik şadlıq sarayının yanı</p>
        </h5>
    </div>
</div>

<div class="modal fade" id="phoneNumberInfoModal" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Mobil Əlaqə</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body text-center">
                <p><i class="fas fa-phone-alt mr-3 text-primary"></i><a href="tel:+994555370259">Telefonla Zəng et</a>
                </p>
                <p><i class="fas fa-comment-alt mr-3 text-success"></i><a href="sms:+994555370259">SMS mesaj yaz</a></p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Geri dön</button>
            </div>
        </div>
    </div>
</div>

{!! app('captcha')->displayJs() !!}

<script>
    var textarea = document.getElementById("emailMessage");

    // window.onload = textareaLengthCheck();

    textarea.addEventListener('focus', function() {
        if(textarea.focus) {
            document.getElementById('chars-left').style.visibility = "visible";
            textareaLengthCheck();
        }
    }, false);
    
    function textareaLengthCheck()
    {
        var textareaLength = textarea.value.length;
        var charactersLeft = 255 - textareaLength;
        var countView = document.getElementById('chars-left');
        countView.innerHTML = charactersLeft + " Hərf qaldı";

        if(textarea.value.length < 10) {
            var charsStill = 10 - textarea.value.length;
            countView.innerHTML = charsStill + " Hərf daha";
        }

        // if(charactersLeft > 10) {
        //     countView.classList.add("badge-success");
        //     countView.classList.remove("badge-warning");
        //     countView.classList.remove("badge-danger");
        // }

        // if(charactersLeft <= 10) {
        //     countView.classList.add("badge-warning");
        //     countView.classList.remove("badge-success");
        //     countView.classList.remove("badge-danger");
        // }

        // if(charactersLeft < 0) {
        //     countView.classList.add("badge-danger");
        //     countView.classList.remove("badge-warning");
        // }

        // variable that gets value of the wanted classes as string and then we add it to the element by assigning className 
        var addedClass = textarea.value.length < 10 ? "badge badge-pill badge-light-red" : charactersLeft <= 0 ? "badge badge-pill badge-light-red" : charactersLeft <= 10 ? "badge badge-pill badge-warning" : "badge badge-pill badge-green";
        countView.className = addedClass;
    }

    textarea.addEventListener('keyup', textareaLengthCheck, false);
    textarea.addEventListener('keydown', textareaLengthCheck, false);
    
</script>


@endsection