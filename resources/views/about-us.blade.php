@extends('layouts.app')

@section('content')

<style>
    @import url('https://fonts.googleapis.com/css2?family=Nunito+Sans:ital,wght@1,300&display=swap');

    @import url('https://fonts.googleapis.com/css2?family=Source+Sans+Pro&display=swap');

    @import url('https://fonts.googleapis.com/css2?family=Space+Grotesk&display=swap');

    :root {
        --boxHeights: 24rem;
    }

    * {
        box-sizing: border-box;
    }

    .flexBox {
        display: flex;
        justify-content: center;
        align-items: center;
        flex-wrap: wrap;
        flex-basis: auto;
    }

    .flexBox__1 {
        background: url("../images/svg/about_blockquote_bg.svg");
        background-repeat: no-repeat;
        background-position: center;
    }

    .about__text {
        font-family: 'Space Grotesk', sans-serif;
        font-size: 1.3em;

    }

    .about__text blockquote {
        font-family: 'Space Grotesk', sans-serif;
        font-size: 1.3em;
        /* font-weight: bold; */
    }

    .about__text__underline {
        color: black;
        position: relative;
        z-index: 10;
    }

    .about__text__underline::after {
        content: '';
        position: absolute;
        z-index: -1;
        top: 70%;
        left: -0.1rem;
        right: -0.1rem;
        bottom: 0;
        transition: top 200ms cubic-bezier(0, 0.8, 0.13, 1);
        background-color: #02df95;
    }

    .about__text__underline:hover:after {
        top: 0%;
    }

    .about__blockquote {}

    /* .image {
        background-image: url('https://images.unsplash.com/photo-1588195538326-c5b1e9f80a1b?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxleHBsb3JlLWZlZWR8Mnx8fGVufDB8fHx8&auto=format&fit=crop&w=500&q=60')
    } */

    .blob {
        width: 300px;
        fill: #0CDCF9;
        position: relative;
    }

    .blob::before {
        display: none;
        content: 'Kəmalə Abbasova';
        position: absolute;
        width: 135px;
        height: 25px;
        background-color: #02DF95;
        border-radius: 25px;
        top: 10%;
        left: 60%;
    }

    .blob:hover:before {
        display: inline;
    }

    .blob__img {
        width: 185px;
    }

    /* Testimonials */

    .testimonials__label {
        font-family: 'Space Grotesk', sans-serif;
    }

    
</style>



<div class="about mt-5 mb-5">
    <div class="flexBox flexBox__1 container" style="">
        <div class="text-center" style="flex: 0.5;">
            <div>
                <div class="blob">
                    <svg class="blob__svg" viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
                        <mask id="mask0" mask-type="alpha">
                            <path
                                d="M41.1,-63.9C55.7,-54.5,71.9,-47.3,79.9,-35C87.8,-22.6,87.7,-5,81.2,8.8C74.8,22.6,62,32.6,50.8,42C39.5,51.3,29.9,60,17.7,66.3C5.6,72.6,-9,76.5,-21.2,72.7C-33.4,68.9,-43.3,57.5,-55.1,46.3C-66.9,35.2,-80.8,24.4,-82.4,12C-84,-0.5,-73.4,-14.6,-66.2,-30.2C-59,-45.8,-55.2,-62.9,-44.8,-74.3C-34.3,-85.6,-17.2,-91.1,-2,-88.1C13.2,-85,26.4,-73.3,41.1,-63.9Z"
                                transform="translate(100 100)" />
                        </mask>
                        <g mask="url(#mask0)">
                            <path class="blob__img__path"
                                d="M41.1,-63.9C55.7,-54.5,71.9,-47.3,79.9,-35C87.8,-22.6,87.7,-5,81.2,8.8C74.8,22.6,62,32.6,50.8,42C39.5,51.3,29.9,60,17.7,66.3C5.6,72.6,-9,76.5,-21.2,72.7C-33.4,68.9,-43.3,57.5,-55.1,46.3C-66.9,35.2,-80.8,24.4,-82.4,12C-84,-0.5,-73.4,-14.6,-66.2,-30.2C-59,-45.8,-55.2,-62.9,-44.8,-74.3C-34.3,-85.6,-17.2,-91.1,-2,-88.1C13.2,-85,26.4,-73.3,41.1,-63.9Z"
                                transform="translate(100 100)" />
                            <image class="blob__img" x='5' y='-60' xlink:href="{{ asset('images/portrait.jpeg') }}" />
                            {{--  --}}
                        </g>
                    </svg>
                </div>
            </div>
        </div>

        <div class="about__text about__blockquote" style="flex: 0.8;">
            <blockquote class="about__text__blockquote">
                <p>Gənc yaşlarımdan olan maraq və həvəs, məni bu sənətə gətirdi !</p>
                <footer class="blockquote-footer"><span style="font-weight: normal;"><cite
                            style="font-weight: bold; color: black;">Kəmalə Abbasova</cite> | MyCookingLife-ın
                        yaradıcısı və <b class="about__text__underline">kulinarı</b></span> .</footer>
            </blockquote>
        </div>

    </div>

    <div class="flexBox flexBox__2 container mt-5" style="">
        <div class="about__text" style="flex: 0.8;">
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptatibus placeat quibusdam ea unde maxime
            deserunt
            delectus, quod nulla sapiente itaque molestiae nobis in eos, repellat facilis iure minima explicabo ipsam!
        </div>
        <div class="text-center" style="flex: 0.5;">
            <img class="m-3" width="340" height="340" style="border-radius: 15px;"
                src="https://images.unsplash.com/photo-1588195538326-c5b1e9f80a1b?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxleHBsb3JlLWZlZWR8Mnx8fGVufDB8fHx8&auto=format&fit=crop&w=500&q=60"
                alt="tort">
        </div>
    </div>

    <div class="flexBox flexBox__3 container mt-5 mb-5" style="">
        <div class="text-center" style="flex: 0.5;">
            <img class="m-3" width="340" height="340" style="border-radius: 15px;"
                src="https://images.unsplash.com/photo-1588195538326-c5b1e9f80a1b?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxleHBsb3JlLWZlZWR8Mnx8fGVufDB8fHx8&auto=format&fit=crop&w=500&q=60"
                alt="tort">
        </div>
        <div class="about__text" style="flex: 0.8;">
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptatibus placeat quibusdam ea unde maxime
            deserunt
            delectus, quod nulla sapiente itaque molestiae nobis in eos, repellat facilis iure minima explicabo ipsam!
        </div>
    </div>

    @include('testimonials')

    <div class="container text-center mt-5 py-5">
        
        <a href="https://forms.gle/tsSCJ1xhWWib87c26" target="_blank" style="color: #867AE9; font-size: 1.3em;"><i class="material-icons">question_answer</i> Rəyinizi göndərin!</a>
    </div>
    
</div>





@endsection