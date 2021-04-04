@extends('layouts/app')
@section('content')

<div class="flex-center position-ref full-height main-container">

    <div class="container pt-5 mt-5">
        <div class="jumbotron shadow-lg welcomeContainer">
            <div class="bg-danger bannerLeft">

            </div>
            <h3 class="text-center" id="nameAuthor"></h3>
            <p><code></code></p>
        </div>
    </div>


    <x-products-card></x-products-card>

    <x-photoswipe></x-photoswipe>

    <div class="container-fluid jumbotron jumbo-box mb-0" style="border-top: 3px solid red; border-bottom: 3px solid red;">

        <h3 id="reservationSentence" class="text-center"></h3>
        <p></p>
        <p class="text-center">Sifariş etmək üçün əlaqə nömrəsindən istifadə edin</p>
        <p class="text-center">Çatdırılma yoxdur!</p>

    </div>


    <div class="" style="">

        <x-why-us></x-why-us>

    </div>




</div>
@endsection