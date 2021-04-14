@extends('admin.admin-main')

@section('admin-content')

<style>
    .page-link {
        box-shadow: none !important;
    }

    .page-link:hover {
        border: 1px solid red;
    }

    .sort-select {
        padding: 10px;
        flex-wrap: nowrap;
    }

    .sort-select:focus {
        outline: none;
    }
</style>

@if ($subscribers->count() != 0)
<div class="m-5">

    <div class="container d-flex justify-content-around">

        <div class="input-group mb-3" style="width: 200px; flex-wrap:nowrap ;">
            <div class="input-group-prepend">
                <label class="input-group-text" for="sortSelect">Sort by :</label>
            </div>

            <select style="border-top-right-radius: 5px; border-bottom-right-radius: 5px;" class="sort-select p-2"
                id="sortSelect" onchange="(window.location = this.options[this.selectedIndex].value);">
                {{-- this.options[this.selectedIndex].value &&  --}}

                <option disabled>Seç ...</option>

                <option {{ Request::query('sort') == "id" ? 'selected' : ''}}
                    value="{{ request()->fullUrlWithQuery(['sort' => 'id']) }}">ID</option>

                <option {{ Request::query('sort') == "new" ? 'selected' : ''}}
                    value="{{ request()->fullUrlWithQuery(['sort' => 'new']) }}">Ən Yeni</option>

                <option {{ Request::query('sort') == "email" ? 'selected' : ''}}
                    value="{{ request()->fullUrlWithQuery(['sort' => 'email']) }}">Email (A-Z)</option>

            </select>

            {{-- <div>
                Filter by : 
                <a href="{{ request()->fullUrlWithQuery(['sort' => 'new']) }}">New</a>
            <a href="{{ request()->fullUrlWithQuery(['sort' => 'id']) }}">ID</a>
            <a href="{{ request()->fullUrlWithQuery(['sort' => 'email']) }}">Email</a>
        </div> --}}

    </div>

    <form id="deleteAllByAdmin-form" action="{{ route('admin.deleteAll') }}" method="POST">
        @csrf
        @method('DELETE')
        <a class="pr-3 text-danger" href=""
            onclick="event.preventDefault(); document.getElementById('deleteAllByAdmin-form').submit();">
            Delete all
        </a>
    </form>

</div>

<table class="table table-striped">
    <thead>
        <tr>
            <th scope="col"># id</th>
            <th scope="col">Email Address</th>
            <th scope="col">Created</th>
        </tr>
    </thead>
    <tbody>

        @foreach ($subscribers as $subscriber)

        <tr>
            <th scope="row">
                {{ $subscriber->id }}
            </th>
            <td>
                @if ($subscriber->created_at->diffInHours(now()) < 5) <span class="badge badge-primary badge-pill"
                    title="{{ $subscriber->created_at->locale('en')->diffForHumans() }}">Yeni</span>
                    @endif
                    {{ $subscriber->subscribedMail }}
            </td>
            <td>{{ $subscriber->created_at->locale('en')->diffForHumans() }}</td>

            <td>

                <form id="deleteByAdmin-form-{{ $subscriber->id }}"
                    action="{{ route('admin.destroy', [$subscriber->subscribedMail]) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <a class="text-danger" href="{{ route('subscription.destroy',  $subscriber->subscribedMail) }}"
                        onclick="event.preventDefault(); this.parentNode.submit();">
                        Sil
                    </a>
                </form>

            </td>
        </tr>

        @endforeach

    </tbody>
</table>


<div class="">
    {{-- ->appends(request()->query()) --}}
    {{ $subscribers->links() }}
</div>

</div>
@else
<div class="m-5">
    Hal hazırda heç bir abunə yoxdur
</div>
@endif

@endsection