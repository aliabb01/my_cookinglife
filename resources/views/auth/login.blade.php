<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Daxil ol</title>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css'
        integrity='sha512-P5MgMn1jBN01asBgU0z60Qk4QxiXo86+wlFahKrsQf37c9cro517WzVSPPV1tDKzhku2iJ2FVgL67wG03SGnNA=='
        crossorigin='anonymous' />
</head>

<style>
    input{
        box-shadow: none !important;
    }
</style>

<body>

    <div style="min-height: 100%; min-height: 100vh; display: flex; align-items: center;">
        <div class="container my-3">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card bg-light shadow">
                        <div class="card-header text-center lead text-white"
                            style="background: linear-gradient(45deg, rgba(236, 69, 79, 1) 0%, rgba(244, 72, 129, 1) 100%)">
                            Daxil ol</div>

                        <div class="card-body my-3">
                            <form method="POST" action="{{ route('login') }}">
                                @csrf

                                <div class="form-group row">
                                    <label for="email" class="col-md-4 col-form-label text-md-right">E-mail ünvanı
                                        :</label>

                                    <div class="col-md-6">
                                        <input id="email" type="email"
                                            class="form-control @error('email') is-invalid @enderror" name="email"
                                            value="{{ old('email') }}" required autocomplete="email" autofocus>

                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>Qeyd etdiyiniz e-mail ünvanı və ya şifrə yanlışdır</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="password" class="col-md-4 col-form-label text-md-right">Şifrə :</label>

                                    <div class="col-md-6">
                                        <input id="password" type="password"
                                            class="form-control @error('email') is-invalid @enderror" name="password"                                            
                                            required autocomplete="current-password">

                                        @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>Qeyd etdiyiniz şifrə yanlışdır</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-md-6 offset-md-4">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="remember"
                                                id="remember" {{ old('remember') ? 'checked' : '' }}>

                                            <label class="form-check-label" for="remember">
                                                Yadda saxla
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group row mb-0">
                                    <div class="col-md-8 offset-md-4">
                                        <button type="submit" style="box-shadow: none;" class="btn btn-primary">
                                            Daxil ol
                                        </button>

                                        @if (Route::has('password.request'))
                                        <a class="btn btn-link" style="box-shadow: none;"
                                            href="{{ route('password.request') }}">
                                            Şifrəni unutdun?
                                        </a>
                                        @endif

                                        <a class="btn btn-link text-danger" style="box-shadow: none;"
                                            href="{{ route('register') }}">
                                            Qeydiyyatdan keç
                                        </a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container mt-3">
                <a href="/" class="text-danger lead">
                    Ana səhifə
                </a>
            </div>

        </div>
    </div>


    <script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.bundle.min.js'
        integrity='sha512-wV7Yj1alIZDqZFCUQJy85VN+qvEIly93fIQAN7iqDFCPEucLCeNFz4r35FCo9s6WrpdDQPi80xbljXB8Bjtvcg=='
        crossorigin='anonymous'></script>
</body>

</html>