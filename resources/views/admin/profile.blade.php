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
</style>

<div class="container mt-5">

    <div>
        <h4 class="text-center">Administrator Details: </h4>

        <form id="profileEditForm" class="needs-validation"
            action="{{ route('admin.profile.update', auth()->user()->name) }}" method="POST">
            @csrf
            @method('PATCH')

            <div class="mt-4">

                <div class="form-group d-flex flex-column align-items-center">

                    <div class="col-md-4 mb-3">
                        <label for="validationCustom01">Name :</label>
                        <input type="text" name="name" value="{{ $admin->name }}" class="form-control"
                            placeholder="Name" id="name" required>
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                        <div class="invalid-feedback">
                            Please fill in your name
                        </div>
                    </div>

                    <div class="col-md-4 mb-3">
                        <label for="validationCustom02">Email :</label>
                        <input type="email" name="email" value="{{ $admin->email }}" class="form-control"
                            placeholder="Email" id="email" required>
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                        <div class="invalid-feedback">
                            Please fill in your email address
                        </div>
                    </div>

                    <div class="col-md-4 mb-3">
                        <label for="validationCustom02">Privilege Level :</label>
                        <input disabled type="text" name="privilege" value="{{ $admin->privilegeInWords() }}"
                            class="form-control" placeholder="Privilege">
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                    </div>

                    <div class="col-md-4 mb-3">
                        <label for="oldPassword">Current password :</label>
                        <input class="form-control" type="password" id="oldPassword" name="oldPassword"
                            placeholder="Current password"
                            oninvalid="this.setCustomValidity('Fill in your currect password to proceed!')"
                            onchange="try{setCustomValidity('')}catch(e){};" required>
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                        <div class="invalid-feedback">
                            Please fill in your current password to proceed!
                        </div>
                    </div>

                </div>
                

                <div class="form-group d-flex flex-column align-items-center">
                    <p class="text-center font-weight-bold" style="">Change password : (optional)</p>

                    <div class="col-md-4 mb-3">
                        <label for="password">New password :</label>
                        <input class="form-control" type="password" id="password" name="password"
                            placeholder="New password">
                        <div class="invalid-feedback">
                            New password should contain minimum 8 characters!
                        </div>
                    </div>

                    <div class="col-md-4 mb-3">
                        <label for="password-confirm">Confirm password :</label>
                        <input class="form-control" type="password" id="password-confirm" name="password_confirmation"
                            placeholder="Confirm password">
                        <div class="invalid-feedback">
                            Confirm your new password!
                        </div>
                    </div>

                    <button id="saveBtn" class="btn btn-outline-success" style="">
                        <div id="saveBtnLabel">Save</div>
                        <div id="saveBtnLoadLabel" style="display: none;">
                            <span class="spinner-border spinner-border-sm mx-2" role="status" aria-hidden="true"></span>
                        </div>
                    </button>

                </div>

                <hr>


                

            </div>
        </form>

        <div class="d-flex flex-column align-items-center mt-5 mb-5">
            <p>Created: {{ $admin->created_at->diffForHumans() }}</p>
            <p>Last updated: {{ $admin->updated_at->diffForHumans() }}</p>
            <a class="btn btn-warning deleteProfileBtn" href="{{ route('admin.destroy') }}">Delete profile</a>
        </div>
    </div>

</div>

<script>
    let profileForm = document.getElementById("profileEditForm");

profileForm.addEventListener('submit', function() {
    document.getElementById("saveBtnLabel").style.display = "none";
    document.getElementById("saveBtnLoadLabel").style.display = "block";
});
    //     let name = document.getElementById("name");
//     let email = document.getElementById("email");
//     let oldPassword = document.getElementById("oldPassword");
//     let password = document.getElementById("password");
//     let password_confirm = document.getElementById("password-confirm");
//     let profileForm = document.getElementById("profileEditForm");
//     saveBtn.disabled = true;
        
//     profileForm.addEventListener('keyup', function() {
//         if(name.value != name.defaultValue || email.value != email.defaultValue || oldPassword.value != oldPassword.defaultValue || password.value != password.defaultValue || password_confirm.value != password_confirm.defaultValue)
//         {
//             enableBtn();
//         }
//         else {
//             disableBtn();
//         }
//     });

// function enableBtn() {
//     saveBtn.disabled=false;
// }

// function disableBtn() {
//     saveBtn.disabled=true; 
// }
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