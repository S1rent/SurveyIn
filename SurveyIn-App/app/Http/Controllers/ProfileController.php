<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;

class ProfileController extends Controller
{
    public function getCreatorProfilePage()
    {
        $user = User::where('email', Cookie::get('email'))->first();
        if($user->fullName == NULL) {
            return redirect('finishup');
        }

        return view(
            'creator-profile',
            [
                'user' => $user
            ]
        );
    }

    public function getRespondentProfilePage()
    {
        $user = User::where('email', Cookie::get('email'))->first();
        if($user->fullName == NULL) {
            return redirect('finishup');
        }

        return view(
            'respondent-profile',
            [
                'user' => $user
            ]
        );
    }
}
