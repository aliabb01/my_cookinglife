{{-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Qeydiyyat</title>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css'
        integrity='sha512-P5MgMn1jBN01asBgU0z60Qk4QxiXo86+wlFahKrsQf37c9cro517WzVSPPV1tDKzhku2iJ2FVgL67wG03SGnNA=='
        crossorigin='anonymous' />
</head>

<style>
    input {
        box-shadow: none !important;
    }
</style>


<body>

    <div style="min-height: 100%; min-height: 100vh; display: flex; align-items: center;">
        <div class="container my-3">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card bg-light shadow" style="border:none;">
                        <div class="card-header text-center lead text-white"
                            style="background: linear-gradient(45deg, rgba(236, 69, 79, 1) 0%, rgba(244, 72, 129, 1) 100%)">
                            Qeydiyyatdan keç</div>

                        <div class="card-body">
                            <form method="POST" action="{{ route('register') }}">
                                @csrf

                                <div class="form-group row">
                                    <label for="name" class="col-md-4 col-form-label text-md-right">Ad :</label>

                                    <div class="col-md-6">
                                        <input id="name" type="text"
                                            class="form-control @error('name') is-invalid @enderror" name="name"
                                            value="{{ old('name') }}" required autocomplete="name" autofocus
                                            oninvalid="this.setCustomValidity('Adınızı qeyd edin')"
                                            onchange="try{setCustomValidity('')}catch(e){};">

                                        @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>Ad 40 hərfdən çox ola bilməz!</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="email" class="col-md-4 col-form-label text-md-right">E-Mail ünvanı
                                        :</label>

                                    <div class="col-md-6">
                                        <input id="email" type="email"
                                            class="form-control @error('email') is-invalid @enderror" name="email"
                                            value="{{ old('email') }}" required autocomplete="email"
                                            oninvalid="this.setCustomValidity('Email ünvanınızı qeyd edin')"
                                            onchange="try{setCustomValidity('')}catch(e){};">

                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>E-mail ünvanı artıq götürülmüşdür!</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="password" class="col-md-4 col-form-label text-md-right">Şifrə :</label>

                                    <div class="col-md-6 input-group">
                                        <input id="password" type="password"
                                            class="form-control @error('password') is-invalid @enderror" name="password"
                                            required autocomplete="new-password"
                                            oninvalid="this.setCustomValidity('Şifrəni qeyd edin!')"
                                            onchange="try{setCustomValidity('')}catch(e){};">

                                        <div class="input-group-append">
                                            <a class="btn btn-outline-dark d-flex align-items-center" type="button"
                                                id="togglePassword">
                                                <svg width="20" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5"
                                                    viewBox="0 0 20 20" fill="currentColor" id="passwordHidden">
                                                    <path fill-rule="evenodd" id="passwordHiddenPath"
                                                        d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z"
                                                        clip-rule="evenodd" />
                                                </svg>
                                            </a>
                                        </div>

                                        @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>Şifrə ən azı 8 rəqəm/hərfdən ibarət olmalıdır!</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="password-confirm" class="col-md-4 col-form-label text-md-right">Şifrəni
                                        təsdiqləyin :</label>

                                    <div class="col-md-6">
                                        <input id="password-confirm" type="password" class="form-control"
                                            name="password_confirmation" required autocomplete="new-password"
                                            oninvalid="this.setCustomValidity('Şifrəni təsdiqləyin!')"
                                            onchange="try{setCustomValidity('')}catch(e){};">
                                    </div>
                                </div>

                                <div class="form-group row mb-0">
                                    <div class="col-md-6 offset-md-4">
                                        <button type="submit" class="btn btn-primary" style="box-shadow: none;">
                                            Qeydiyyatdan keç
                                        </button>
                                        <a class="btn btn-link text-success" style="box-shadow: none;"
                                            href="{{ route('login') }}">
                                            Daxil ol
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


    <script>
        const email = document.getElementById("email");

        email.addEventListener("input", function(event){
            if (email.validity.typeMismatch) {
                email.setCustomValidity("Qeyd etdiyiniz e-mail adresi deyil!");
            } else {
                email.setCustomValidity("");
            }
        });
    </script>

    <script>
        const togglePassword = document.getElementById("togglePassword");
        const password = document.getElementById("password");
        const password_confirm = document.getElementById("password-confirm");
        const path = document.getElementById("passwordHiddenPath");
        const dHidden = 'M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z';
        const dVisible = 'M10 2a5 5 0 00-5 5v2a2 2 0 00-2 2v5a2 2 0 002 2h10a2 2 0 002-2v-5a2 2 0 00-2-2H7V7a3 3 0 015.905-.75 1 1 0 001.937-.5A5.002 5.002 0 0010 2z';

        togglePassword.addEventListener('click', function() {
            const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
            password.setAttribute('type', type);
            password_confirm.setAttribute('type', type);
            if(type === 'password')
            {
                path.setAttribute('d', dHidden);
            }
            else {
                path.setAttribute('d', dVisible);
            }
        });
    </script>
</body>

</html> --}}

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
</head>
<body>
    <style>
        html {
            padding: 0;
            margin: 0;
        }
        .flex {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            flex-direction: column;
        }
    </style>
    <div class="flex">
        <p style="font-size: 1.2rem;">Qeydiyyatdan keçmək üçün administratorla əlaqə saxlayın!</p>

        <div>        
            <p style="font-size: 1.2rem;">
                <a style="text-decoration-line: none; color: rgb(255, 66, 66); margin-right: 10px;" href="/">Ana səhifə</a>

                <a style="text-decoration-line: none; color: rgb(19, 194, 19); margin-left: 10px;" href="mailto:ali3abbasov@gmail.com">Administratorla əlaqə</a>
            </p>
        </div>
    </div>
</body>
</html>