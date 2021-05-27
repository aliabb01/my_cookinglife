@extends('admin.admin-main')

@section('admin-content')

<style>
    .deleteProfileBtn {
        box-shadow: none !important;
    }

    input {
        box-shadow: none !important;
    }

    button {
        box-shadow: none !important;
    }

    .advancedSettings:hover {
        background-color: rgb(233, 233, 233);
        border-radius: 25px;
        text-decoration: none;
    }

    .advancedSettings[aria-expanded='false']>.advancedSettingsDiv>.advancedSettingsIcon {
        transform: rotate(0deg);
        transition: 0.5s;
    }

    .advancedSettingsIcon {
        transform: rotate(90deg);
        transition: 0.5s;
    }
</style>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

<div class="container mt-5">

    <div>
        <h4 class="text-center"> </h4>
        <p class="text-center font-weight-bold">Administrator Details :</p>

        <form id="profileEditForm" class="needs-validation"
            action="{{ route('admin.profile.update', auth()->user()->name) }}" method="POST">
            @csrf
            @method('PATCH')

            <div class="mt-4">

                <div class="form-group d-flex flex-column align-items-center">

                    <div class="col-md-4 mb-3">
                        <label for="validationCustom01">Name :</label>
                        <input type="text" name="name" value="{{ $admin->name }}"
                            class="form-control @error('name') is-invalid @enderror" placeholder="Name" id="name"
                            required>
                        @error('name')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>

                    <div class="col-md-4 mb-3">
                        <label for="validationCustom02">Email :</label>
                        <input type="email" name="email" value="{{ $admin->email }}"
                            class="form-control @error('email') is-invalid @enderror" placeholder="Email" id="email"
                            required>
                        @error('email')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>

                    <div class="col-md-4 mb-3">
                        <label for="validationCustom02">Privilege Level :</label>
                        <input disabled type="text" name="privilege" value="{{ $admin->privilegeInWords() }}"
                            class="form-control" placeholder="Privilege">
                    </div>

                    <div class="col-md-4 mb-3">
                        <label for="oldPassword">Current password :</label>
                        <input class="form-control @error('oldPassword') is-invalid @enderror" type="password"
                            id="oldPassword" name="oldPassword" placeholder="Current password"
                            oninvalid="this.setCustomValidity('Fill in your currect password to proceed!')"
                            onchange="try{setCustomValidity('')}catch(e){};" required>
                        @error('oldPassword')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>

                </div>


                <div class="d-flex justify-content-center mb-3">
                    <a class="advancedSettings" role="button" data-toggle="collapse" href="#advancedCollapse"
                        aria-expanded="false" aria-controls="advancedCollapse">
                        <div
                            class="badge badge-transparent d-flex align-items-center advancedSettingsDiv text-primary py-1 px-3">
                            Advanced
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-caret-right advancedSettingsIcon ml-1" viewBox="0 0 16 16">
                                <path
                                    d="M6 12.796V3.204L11.481 8 6 12.796zm.659.753 5.48-4.796a1 1 0 0 0 0-1.506L6.66 2.451C6.011 1.885 5 2.345 5 3.204v9.592a1 1 0 0 0 1.659.753z" />
                            </svg>
                        </div>
                    </a>
                </div>

                <div class="collapse" id="advancedCollapse">
                    <div class="form-group d-flex flex-column align-items-center">
                        <p class="text-center font-weight-bold" style="">Change password : (optional)</p>

                        <div class="col-md-4 mb-3">
                            <label for="password">New password :</label>
                            <input class="form-control @error('password') is-invalid @enderror" type="password"
                                id="password" name="password" placeholder="New password">
                            @error('password')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <div class="col-md-4 mb-3">
                            <label for="password_confirmation">Confirm password :</label>
                            <input class="form-control @error('password_confirmation') is-invalid @enderror"
                                type="password" id="password_confirmation" name="password_confirmation"
                                placeholder="Confirm password">
                            @error('password_confirmation')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                    </div>
                </div>

                <div class="d-flex justify-content-center">
                    <button type="submit" id="saveBtn" class="btn btn-outline-success" style="">
                        <div id="saveBtnLabel">Save</div>
                        <div id="saveBtnLoadLabel" style="display: none;">
                            <span class="spinner-border spinner-border-sm mx-2" role="status" aria-hidden="true"></span>
                        </div>
                    </button>
                </div>

                <hr>

            </div>
        </form>

        <div class="d-flex flex-column  mt-4 mb-5">

            <div class="d-flex justify-content-between">

                <div>
                    <p class="font-weight-bold">Statistics : </p>
                    <p>Created: {{ $admin->created_at->diffForHumans() }}</p>
                    <p>Last updated: {{ $admin->updated_at->diffForHumans() }}</p>
                </div>

                <div class="d-flex align-items-center">
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-outline-danger" data-toggle="modal" data-target="#staticBackdrop">
                        Delete Profile
                    </button>
                </div>

            </div>

        </div>

    </div>

</div>



<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content" style="border: 0;">
            <div class="modal-header bg-danger text-white">
                <h5 class="modal-title" id="staticBackdropLabel">Are you sure you want to delete your account?</h5>
                <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <p>
                    <svg class="text-warning" width="24px" height="24px" xmlns="http://www.w3.org/2000/svg"
                        class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />
                    </svg>
                    This action <b>CANNOT</b> be undone!
                </p>
                <p>Please type in <span style="font-size: 0.9rem;"
                        class="badge badge-pill badge-light border border-primary">{{ $admin->name }}</span> to confirm!
                </p>

                <input class="form-control" type="text" name="deleteProfile" id="deleteProfile">

            </div>
            <div class="modal-footer">

                <form id="deleteProfile-form" method="POST">
                    @csrf

                    <a style="" class="btn btn-danger disabled deleteProfileBtn" id="deleteProfileBtn"
                        href="javascript:{}"
                        onclick="event.preventDefault(); document.getElementById('deleteProfile-form').submit();">

                        <span id="deleteProfileBtnLabel">Delete</span>
                        <div id="deleteProfileBtnLoadLabel" style="display: none;">
                            <span class="spinner-border spinner-border-sm mx-2" role="status" aria-hidden="true"></span>
                        </div>
                    </a>

                    <button type="button" class="btn btn-outline-primary" data-dismiss="modal">Cancel</button>

                </form>

            </div>
        </div>
    </div>
</div>


<script>
    var deleteProfileBtn = document.getElementById("deleteProfileBtn");
    var deleteProfileInput = document.getElementById("deleteProfile");
    var deleteProfileInputBlade = "{{ $admin->name }}";
    var deleteProfileForm = document.getElementById("deleteProfile-form");
    
    deleteProfileInput.addEventListener('keyup', function() {
        if(deleteProfileInput.value != deleteProfileInputBlade)
        {
            deleteProfileBtn.classList.add("disabled");
            deleteProfileForm.setAttribute("action", "");
           // deleteProfileBtn.setAttribute("href", "");
        }
        else {
            deleteProfileBtn.classList.remove("disabled");
            deleteProfileForm.setAttribute("action", "{{ route('admin.destroy', auth()->user()->name) }}");
            //deleteProfileBtn.setAttribute("href", "{{ route('admin.destroy', auth()->user()->name) }}");
        }
    });

    deleteProfileBtn.addEventListener('click', function() {
        document.getElementById("deleteProfileBtnLabel").style.display = "none";
        document.getElementById("deleteProfileBtnLoadLabel").style.display = "block";
    });
</script>

<script>
    let profileForm = document.getElementById("profileEditForm");

    profileForm.addEventListener('submit', function() {
        document.getElementById("saveBtnLabel").style.display = "none";
        document.getElementById("saveBtnLoadLabel").style.display = "block";
    });
</script>

@if (Session('profile-updated'))
<script>
    alertify.notify("{!! \Session::get('profile-updated') !!}", "success", 10)
</script>
@endif

@if (Session('write-current-password'))
<script>
    alertify.notify("{!! \Session::get('write-current-password') !!}", "error", 10)
</script>
@endif

@if (Session('wrong-current-password'))
<script>
    alertify.notify("{!! \Session::get('wrong-current-password') !!}", "error", 10)
</script>
@endif

@endsection