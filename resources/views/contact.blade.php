@extends('layouts.app')
@section('content')


<div class="container mt-5 mb-5">
    <div class="row">
        <div class="col bg-light pt-5 pb-5 pr-5 pl-5 rounded-left container-email">
            <h3 class="text-center">Əlaqə</h3>

            <form action="/elaqe" method="POST" class="mt-4" id="contactForm">
                @csrf

                <div class="mt-2">
                    <label class="form-label" for="contactName"><strong>Adınız :</strong></label>
                    <input class="form-control " style="box-shadow:none;" type="text" name="senderName" id="contactName"
                        placeholder="Adınız" title="Zəhmət olmasa boşluğu doldurun" value="{{old('contactName')}}"
                        required>

                    @error('senderName')

                    <div class="alert alert-danger">{{ $message }}</div>

                    @enderror
                </div>

                <div class="mt-2">
                    <label class="form-label" for="contactEmail"><strong>E-poçt :</strong></label>
                    <input class="form-control @error('contactEmail') is-invalid @enderror" style="box-shadow:none;"
                        type="email" name="senderEmailName" id="contactEmail" placeholder="E-poçt ünvan"
                        title="Zəhmət olmasa boşluğu doldurun" value="{{old('contactEmail')}}" required>

                    @error('senderEmailName')

                    <div class="alert alert-danger">{{ $message }}</div>

                    @enderror

                </div>

                <div class="mt-2">
                    <label for="emailMessage"><strong> Mesajınız :</strong></label>
                    <textarea class="form-control @error('emailMessage') is-invalid @enderror" id="emailMessage"
                        placeholder="Yaz" rows="7" style="resize:none; box-shadow:none;" name="senderText"
                        value="{{old('emailMessage')}}" required></textarea>

                    @error('senderText')

                    <div class="alert alert-danger">{{ $message }}</div>

                    @enderror

                </div>

                {{-- @if ($errors->any())
                @foreach ($errors->all() as $error)
                    <div class="alert alert-danger" role="alert">
                        {{$error}}
        </div>
        @endforeach

        @endif --}}



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



@endsection