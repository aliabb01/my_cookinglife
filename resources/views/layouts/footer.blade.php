<style>
    /* @import url('https://fonts.googleapis.com/css2?family=Rubik:wght@300&display=swap'); */
    .footer {
        position: absolute;
        bottom: 0;
    }

    .bg-footer {
        background: rgb(53, 11, 64);
        background: linear-gradient(90deg, rgba(53, 11, 64, 1) 0%, rgba(8, 5, 93, 1) 100%);
    }

    a {
        color: rgb(210 210 210)
    }

    a:hover {
        text-decoration: none;
    }

    .fb {
        transition: 0.3s;
    }

    .fb:hover {
        cursor: pointer;
        color: rgb(24, 119, 242);
        transition: 0.3s;
    }

    .insta {
        transition: 0.3s;
    }

    .insta:hover {
        color: transparent;
        background: radial-gradient(circle at 30% 107%, #fdf497 0%, #fdf497 5%, #fd5949 45%, #d6249f 60%, #285AEB 90%);
        background: -webkit-radial-gradient(circle at 30% 107%, #fdf497 0%, #fdf497 5%, #fd5949 45%, #d6249f 60%, #285AEB 90%);
        background-clip: text;
        cursor: pointer;
        transition: 0.3s;
        -webkit-background-clip: text;
    }

    .wp {
        transition: 0.3s;
    }

    .wp:hover {
        color: #fff;
        cursor: pointer;
        background:
            linear-gradient(#25d366, #25d366) 14% 84%/16% 16% no-repeat,
            radial-gradient(#25d366 60%, transparent 0);
        transition: 0.2s;
    }

    .yt {
        transition: 0.3s;
    }

    .yt:hover {
        color: rgb(255 0 0);
        cursor: pointer;
        transition: 0.3s;
    }

    .btn-primary-gradient {
        background: rgb(33, 200, 246);
        background: linear-gradient(86deg, rgba(33, 200, 246, 1) 0%, rgba(99, 123, 255, 1) 100%);
        color: white;
    }

    .btn-primary-gradient:hover {
        background: rgb(244, 72, 129);
        background: linear-gradient(86deg, rgba(244, 72, 129, 1) 0%, rgba(236, 69, 79, 1) 100%);
        color: white;
        transition: 0.5s;
    }

    .btn-primary-gradient:focus {
        box-shadow: none;
        -webkit-box-shadow: none;
    }

    /* Bootstrap fixes */

    .p-2 {
        padding: .5rem;
    }

    .pl-3 {
        padding-left: 1rem;
    }

    .footer-brand {
        font-family: 'Rubik', sans-serif;
    }
</style>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

<div class="container-fluid bg-footer text-light pt-5 pb-5 mt-auto" id="footer">
    <div class="row">
        <div class="col-md-3 footer-columns">
            <h3 class="brandName">MyCookingLife</h3>
            <p>Ləzzət buradan başlayır!</p>
        </div>
        <div class="col-md-3 footer-columns">
            <h3>Haqqımızda:</h3>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quod doloremque fugiat error! Dolorem sed non
                iure provident cupiditate debitis a.</p>
        </div>
        <div class="col-md-3 footer-columns">
            <h3>Əlaqə:</h3>
            <ul class="list-group">
                <li style="list-style-type:none;">Tel: <a href="tel:+994 555370259">+994 (055) 537-02-59</a></li>
                <li style="list-style-type:none;">Email: <a
                        href="mailto:mycookinglifecontact@gmail.com">mycookinglifecontact@gmail.com</a></li>
            </ul>
        </div>
        <div class="col-md-3 text-center footer-columns">
            <h4>Sosial Hesablar:</h4>
            <div class="row">
                <div class="col-3 col-xs-3">
                    <a class="fab fa-facebook-f fb fa-2x" data-toggle="tooltip" data-placement="top" title="Facebook"
                        data-delay='{"show":"500", "hide":"100"}' target="_blank"></a>
                </div>

                <div class="col-3 col-xs-3">
                    <a href="https://www.instagram.com/my_cookinglife/" class="fab fa-instagram insta fa-2x"
                        data-toggle="tooltip" data-placement="top" title="Instagram"
                        data-delay='{"show":"500", "hide":"100"}' target="_blank"></a>
                </div>

                <div class="col-3 col-xs-3">
                    <a href="https://api.whatsapp.com/send/?phone=994555370259&text&app_absent=0"
                        class="fab fa-whatsapp wp fa-2x" data-toggle="tooltip" data-placement="top" title="WhatsApp"
                        data-delay='{"show":"500", "hide":"100"}' target="_blank"></a>
                </div>

                <div class="col-3 col-xs-3">
                    <a class="fab fa-youtube yt fa-2x" data-toggle="tooltip" data-placement="top" title="YouTube"
                        data-delay='{"show":"500", "hide":"100"}' target="_blank"></a>
                </div>
            </div>
        </div>
    </div>

    <div class="container mt-5 text-center" id="subscribeContainer">

        <label class="mr-1" for="subscribedMail">Email siyahımıza abunə olun :</label>

        <div class="" style="position: relative; display:inline-block; justify-content:center;" id="subscribeForm">

            <form method="POST" action="/subscribe">
                @csrf
                <input placeholder="E-poçt ünvanınız" type="email" name="subscribedMail" id="subscribedMail"
                    class="p-2 pl-3 @error('subscribedMail') is-invalid @enderror"
                    style="border-radius: 25px; width: 300px; border:none; outline: none;" required
                    oninvalid="this.setCustomValidity('Email adresinizi qeyd edin')" oninput="setCustomValidity('')">
                <button type="submit" class="btn btn-primary-gradient"
                    style="position:absolute; right:-30px; border-radius:25px; border:none; padding:8px; padding-right:15px; padding-left:15px;">Abunə
                    ol</button>

                @error('subscribedMail')
                <span class="invalid-feedback" role="alert" style="position: absolute;">
                    <strong>E-mail ünvanı 40 hərfdən çox olmamalıdır!</strong>
                </span>
                @enderror
            </form>

        </div>

    </div>

    <div class="mt-5" style="position: relative;">
        @if (App::environment('production'))
        Your IP address is :
        {{ $_SERVER['HTTP_X_FORWARDED_FOR'] }}

        {{-- Your IP Address is : {{ $locationData->ip }} --}}

        @else
        Your IP Address is : {{ $locationData->ip }}
        @endif

        <br>

        Your connection is from : {{ $locationData->countryName }}, {{ $locationData->cityName }}

    </div>



    <div class="mt-5">
        @guest
        <div style="float:right;">
            <a class="text-danger px-1" href="/login">Daxil ol</a>
            <a class="text-danger px-1" href="/register">Qeydiyyat</a>
        </div>
        @endguest
        @auth
        <div class="" style="display:flex; justify-content:space-around;">

        </div>
        @endauth
    </div>

</div>

<script>
    var observer = new IntersectionObserver(function(entries) {
	// isIntersecting is true when element and viewport are overlapping
	// isIntersecting is false when element and viewport don't overlap
    let scrollClass = "animate__" + "fadeInDown";
	if(entries[0].isIntersecting === true)
		document.getElementById("subscribeForm").classList.add("animate__animated", scrollClass);
    else
    document.getElementById("subscribeForm").classList.remove("animate__animated", scrollClass);
}, { threshold: [0] });

observer.observe(document.querySelector("#subscribeContainer"));
</script>