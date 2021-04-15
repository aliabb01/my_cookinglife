<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    // destroy currently logged in admins profile
    public function destroy()
    {
        $user = User::where('id', auth()->user()->id);
        $user->delete();
        return redirect()
                    ->route('home')
                    ->with('admin-profile-deleted', 'Your profile was deleted successfully. We are sorry to see you go '. auth()->user()->name);
    }

    public function deleteAll()
    {
        User::truncate();
        return redirect()->route('home')->with('all-admins-deleted', 'All the administrators were deleted');
    }
}
