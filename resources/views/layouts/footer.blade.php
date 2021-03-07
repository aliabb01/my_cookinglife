<style>
    .footer {
        position: absolute;
        bottom: 0;
    }

    .bg-footer{
        background-color:#350b40;
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
</style>


<div class="container-fluid bg-footer text-light pt-5 pb-5 mt-auto">
    <div class="row">
        <div class="col-md-3 footer-columns">
            <h3>MyCookingLife</h3>
            <p>Ləzzət buradan başlayır!</p>
        </div>
        <div class="col-md-3 footer-columns">
            <h3>Haqqımızda:</h3>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quod doloremque fugiat error! Dolorem sed non iure provident cupiditate debitis a.</p>
        </div>
        <div class="col-md-3 footer-columns">
            <h3>Əlaqə:</h3>
            <ul class="list-group">
                <li style="list-style-type:none;">Tel: <a href="tel:+994 555370259">+994 (055) 537-02-59</a></li>
                <li style="list-style-type:none;">Email: <a href="mailto:mycookinglifecontact@gmail.com">mycookinglifecontact@gmail.com</a></li>
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
</div>