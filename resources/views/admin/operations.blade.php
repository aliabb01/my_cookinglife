@extends('admin.admin-main')

@section('admin-content')

<div class="container mt-4">
    <h3 class="text-center mb-5">Operations</h3>

    <div class="d-flex justify-content-center align-content-around flex-wrap">
        <div class="p-2 flex-fill"><a class="btn btn-primary" href="{{ route('operations.add-fake-subs') }}">Add fake subscribers</a> </div>
        <div class="p-2 flex-fill"><a class="btn btn-warning" href="{{ route('admin.destroy') }}">Delete profile</a></div>
        <div class="p-2 flex-fill"><a class="btn btn-danger" href="{{ route('admin.deleteAll') }}">Delete all profiles</a></div>
        <div class="p-2 flex-fill"><a class="btn btn-danger" href="{{ route('operations.refresh-all') }}">Refresh all migrations</a></div>
    </div>
</div>

@endsection