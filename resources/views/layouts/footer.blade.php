<style>
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
</style>


<div class="container-fluid bg-footer text-light pt-5 pb-5 mt-auto">
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

    <div class="container mt-5 text-center" style="">

        <label class="mr-1" for="mailing-list">Email siyahımıza abunə olun :</label>

        <div class="" style="position: relative; display:inline-block; justify-content:center;">

            <input placeholder="E-poçt ünvanınız" type="email" name="mailing-list" id="mailing-list" class="p-2 pl-3"
                style="border-radius: 25px; width: 300px; border:none; outline: none;">
            <button type="submit" class="btn btn-primary-gradient"
                style="position:absolute; right:-30px; border-radius:25px; border:none; padding:8px; padding-right:15px; padding-left:15px;">Abunə
                ol</button>

        </div>

    </div>

    <div class="mt-5">
        @if (App::environment('production'))
        Your IP address is :
            {{ $_SERVER['HTTP_X_FORWARDED_FOR'] }}

        @else
        IP Address is not shown in local environment
        @endif
    </div>

</div>