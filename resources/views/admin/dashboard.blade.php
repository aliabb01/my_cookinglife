@extends('admin.admin-main')

@section('admin-content')

<style>
    :root {
        --hoverOpacity: 1;
        --counterOpacity: 0.5;
    }

    .card-counter {
        box-shadow: 2px 2px 10px #DADADA;
        margin: 5px;
        padding: 20px 10px;
        background-color: #fff;
        height: 100px;
        border-radius: 5px;
        transition: .3s linear all;
    }

    .card-counter:hover {
        box-shadow: 10px 10px 20px #DADADA;
        transition: .3s linear all;
    }

    .card-counter.primary {
        border-left: 10px solid rgba(0, 123, 255, var(--counterOpacity));
        color: black;
    }

    .card-counter.primary:hover{
        border-left: 10px solid rgba(0, 123, 255, var(--hoverOpacity));
    }

    .card-counter.danger {
        border-left: 10px solid rgba(239, 83, 80, var(--counterOpacity));
        color: black;
    }

    .card-counter.danger:hover {
        border-left: 10px solid rgba(239, 83, 80, var(--hoverOpacity));
    }

    .card-counter.success {
        border-left: 10px solid rgba(102, 187, 106, var(--counterOpacity));
        color: black;
    }

    .card-counter.success:hover {
        border-left: 10px solid rgba(102, 187, 106, var(--hoverOpacity));
    }

    .card-counter.info {
        border-left: 10px solid rgba(38, 198, 218, var(--counterOpacity));
        color: black;
    }

    .card-counter.info:hover {
        border-left: 10px solid rgba(38, 198, 218, var(--hoverOpacity));
    }

    .card-counter i {
        font-size: 5em;
        opacity: 0.2;
    }

    .card-counter .count-numbers {
        position: absolute;
        right: 35px;
        top: 20px;
        font-size: 32px;
        display: block;
    }

    .card-counter .count-name {
        position: absolute;
        right: 35px;
        top: 65px;
        font-style: italic;
        text-transform: capitalize;
        opacity: 0.5;
        display: block;
        font-size: 18px;
    }
</style>

<div class="d-flex justify-content-around flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    
    <h2 class="text-center">Dashboard</h2>

</div>

<div class="container">
    <div class="row">
        <div class="col-md-4">
            <div class="card-counter primary">
                <i class="fa fa-code-fork"></i>
                <span class="count-numbers">{{ $totalSubscribers }}</span>
                <span class="count-name">Toplam abunələr (E-poçt)</span>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card-counter danger">
                <i class="fa fa-ticket"></i>
                <span class="count-numbers">{{ auth()->user()->count() }}</span>
                <span class="count-name">Toplam admin sayı</span>
            </div>
        </div>

        

        <div class="col-md-4" title="Keçmiş 5 saatda abunə olanlar">
            <div class="card-counter success">
                <i class="fa fa-database"></i>
                <span class="count-numbers">
                    {{ $newSubCount }}
                </span>
                <span class="count-name">Yeni abunələr</span>
            </div>
        </div>

        {{-- <div class="col-md-3">
            <div class="card-counter info">
                <i class="fa fa-users"></i>
                <span class="count-numbers">35</span>
                <span class="count-name">Users</span>
            </div>
        </div> --}}
    </div>
</div>



@endsection