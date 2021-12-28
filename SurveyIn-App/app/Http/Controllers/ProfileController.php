<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function getCreatorProfilePage()
    {
        return view('creator-profile');
    }

    public function getRespondentProfilePage()
    {
        return view('respondent-profile');
    }
}
