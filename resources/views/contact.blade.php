@extends('layouts.app')
@section('content')





<div class="container mt-5 mb-5">
    <div class="row">
        <div class="col bg-light pt-5 pb-5 pr-5 pl-5 rounded-left container-email">
            <h3 class="text-center">Əlaqə</h3>
            <form class="mt-4" action="">

                <div class="mt-2">
                    <label class="form-label" for="contact-email-input"><strong>E-poçt :</strong></label>
                    <input class="form-control" type="email" name="email" id="contact-email-input"
                        placeholder="E-poçt ünvan" title="Zəhmət olmasa boşluğu doldurun" required>
                </div>

                <div class="mt-2">
                    <label for="emailMessage"><strong> Mesajınız :</strong></label>
                    <textarea class="form-control" id="emailMessage" placeholder="Yaz" rows="7" style="resize:none;"
                        required></textarea>
                </div>
                <div class="flex-column mt-4">
                    <button class="btn btn-email-send btn-lg text-light" type="submit">Göndər</button>
                </div>
            </form>
        </div>




    </div>

</div>

<div class="container-below-email bg-light">
    <div class="container bg-light" style="border-radius: 100px; padding-top:10px; padding-bottom:30px;">
        <h5 class="mt-5 text-center">Telefon: <p> (050) 537-02-59</p>
        </h5>
        <h5 class="text-center">Ünvan: <p>Bakı şəhəri, Nərimanov rayonu, Gənclik şadlıq sarayının yanı</p>
        </h5>
    </div>
</div>




@endsection