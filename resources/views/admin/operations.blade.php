@extends('admin.admin-main')

@section('admin-content')

@if (auth()->user()->privilege == 1)
    
<style>
    a {
        box-shadow: none !important;
    }
</style>

<div class="container mt-4">
    <h3 class="text-center mb-5">Operations</h3>

    <div class="d-flex justify-content-center align-content-around flex-wrap">
        <div class="p-2 flex-fill">
            <a class="btn btn-primary" href="{{ route('operations.add-fake-subs') }}">Add fake subscribers</a>
        </div>

        <div class="p-2 flex-fill">
            <a class="btn btn-danger" href="{{ route('admin.deleteAll') }}">Delete all profiles</a>
        </div>

        <div class="p-2 flex-fill">
            <a class="btn btn-danger" href="{{ route('operations.refresh-all') }}">Refresh all migrations</a>
        </div>
    </div>
</div>

@else

<div class="container mt-5">
    <p style="font-size: 1.2rem;">You do not have enough privileges to do operations!</p>
    <p style="font-size: 1.2rem;">To do advanced operations you need to have privilege of  <span style="font-size: 1.4rem;">@include('privileges.advanced')</span></p>
</div>

@endif

@endsection