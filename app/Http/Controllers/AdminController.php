<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule; // (64) This is need in order to make Rule::unique() work

class AdminController extends Controller
{
    public function edit(User $user)
    {
        return view('admin.profile', [
            'admin' => $user
        ]);
    }

    public function update(User $user)
    {
        // $hashedValue = '$2y$10$T2xnxqxB9zMWrWOcnwSX1OjJZ2q/xvKXN0czz2DI4T/gF2ytJdYKu';
        // dd(Hash::check(request('oldPassword'), $hashedValue));

        // dd(Hash::check($inputOldPassword, $passwordHash));

        $inputOldPassword = request('oldPassword');
        $passwordHash = $user->password;

        if (Hash::check($inputOldPassword, $passwordHash)) {

            $attributes = request()->validate([
                'name' => ['string', 'required', Rule::unique('users')->ignore($user)],
                'email' => ['string', 'required', 'email', 'max:40', Rule::unique('users')->ignore($user)],
                'password' => ['exclude_if:password, ""', 'string', 'min:8', 'confirmed'],
            ]);
            
            if (request('password') != '') {
                $attributes['password'] = Hash::make(request('password'));
            }

            $user->update($attributes);
            return redirect()
                ->route('admin.profile', $user->name)
                ->with('profile-updated', 'Your profile was updated successfully!');
        } else if (request('oldPassword') == '') {
            return redirect()
                ->route('admin.profile', $user->name)
                ->with('write-current-password', 'You should write your current password to submit the form!');
        } else {
            return redirect()
                ->back()
                ->with('wrong-current-password', 'Current password that you submitted was not correct!');
        }
    }

    // destroy currently logged in admins profile
    public function destroy()
    {
        $user = User::where('id', auth()->user()->id);
        $user->delete();
        return redirect()
            ->route('home')
            ->with('admin-profile-deleted', 'Your profile was deleted successfully. We are sorry to see you go ' . auth()->user()->name);
    }

    public function deleteAll()
    {
        User::truncate();
        return redirect()->route('home')->with('all-admins-deleted', 'All the administrators were deleted');
    }
}
