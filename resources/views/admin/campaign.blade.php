@extends('admin.admin-main')
@section('admin-content')


<div class="container mb-5 pt-5 pb-5">
    <h3 class="text-center mb-5">Start a campaign</h3>
    <form method="POST" action="/campaign">
        @csrf

        {{-- To access subscribers in campaign mailable view --}}
        {{-- @foreach ($subscribers as $subscriber)
        <input hidden type="email" name="subscribedMail" value="{{ $subscriber->subscribedMail }}">
        @endforeach --}}

        <label for="campaignTitle">Mövzu :</label>
        <input id="campaignTitle" class="form-control mb-3" style="box-shadow:none;" type="text" name="campaignTitle"
            placeholder="Daxil et">

        <label for="campaignMessage">İsmarış :</label>
        <textarea class="form-control" placeholder="Daxil et" name="campaignMessage"
            style="resize:none; box-shadow:none; height:300px;"></textarea>


        <button class="btn btn-primary mt-3" type="submit">Göndər</button>
    </form>


    @if (Session('campaign-sent'))
    <script>
        alertify.notify("{!! \Session::get('campaign-sent') !!}", "success", 10);
    </script>
    @endif

    @if (Session('campaign-no-subscribers'))
    <script>
        alertify.notify("{!! \Session::get('campaign-no-subscribers') !!}", "error", 10);
    </script>
    @endif

</div>

@endsection