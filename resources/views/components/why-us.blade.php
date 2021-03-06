<style>
    /* Why us text font */
    /* @import url('https://fonts.googleapis.com/css2?family=Quicksand:wght@300&display=swap'); */
    @import url('https://fonts.googleapis.com/css2?family=Lobster&display=swap');

    .why-us-cont {
        background-image: url("images/svg/background.svg");
        background-repeat: no-repeat;
        background-size: cover;
        height: 1080px;
    }

    .why-us-text {
        font-family: 'Lobster', cursive;
        font-size: 3rem;
        font-weight: 800;
        letter-spacing: 5px;
        word-spacing: 5px;
        border-bottom: 5px solid;
    }

    .why-us-card-1:hover {
        border: 1px solid #499AFC;
    }

    .why-us-card-2:hover {
        border: 1px solid red;
    }

    .why-us-card-3:hover {
        border: 1px solid #38C172;
    }

    .why-us-card-1:hover,
    .why-us-card-2:hover,
    .why-us-card-3:hover {
        transition: 0.5s;
        transform: translateX(-10px) translateY(-10px);
    }

    .why-us-card {
        border-radius: 23px;
    }

    .card {
        border-radius: 25px !important;
    }
    
    .card-wrapper {
        padding: 0;
        transition: 0.5s;
        z-index: 1;
        height: 100%;
    }

    .bg-primary {
        background-color: #3490dc;
    }

    .bg-white {
        background-color: #fff;
    }

    .bg-success {
        background-color: #38c172;
    }

    .pt-2 {
        padding-top: .5rem;
    }

    .pb-2 {
        padding-bottom: .5rem;
    }
</style>



<section class="why-us-cont" style="display:grid; place-items:center;">

    <div class="text-center">
        <p class="why-us-text"> Niyə biz?</p>
    </div>

    <div class="container" style="">

        <div class="card-deck" style="">


            <div class="card text-center bg-primary border rounded">
                <div class="card-wrapper why-us-card why-us-card-1 bg-white">
                    <div class="">
                        <img class="" src="/images/svg/customer_satisfaction.svg" alt="" width="100%" height="auto">
                    </div>

                    <div class="card-body" style="float: bottom;">
                        <p class="card-title" style="font-size:1.2rem;">Müştəri məmnuniyyəti</p>
                    </div>
                </div>
            </div>




            <div class="card text-center bg-danger border rounded">
                <div class="card-wrapper why-us-card why-us-card-2 bg-white">
                    <div class="">
                        <img class="pt-2 pb-2" src="/images/svg/low_price.svg" alt="" width="100%" height="auto">
                    </div>

                    <div class="card-body">
                        <p class="card-title" style="font-size:1.2rem;">Əlverişli qiymətlər</p>
                    </div>
                </div>
            </div>



            <div class="card text-center bg-success border rounded">
                <div class="card-wrapper why-us-card why-us-card-3 bg-white">
                    <div class="">
                        <img class="pt-2 pb-2" src="/images/svg/high_quality.svg" alt="" width="100%" height="auto">
                    </div>

                    <div class="card-body">
                        <p class="card-title" style="font-size:1.2rem;">Keyfiyyətli iş</p>
                    </div>
                </div>
            </div>

        </div>

    </div>

    <div class=""></div>

    <div class=""></div>

</section>