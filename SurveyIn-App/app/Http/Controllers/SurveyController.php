<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;

class SurveyController extends Controller
{
    public function getCreatorCreateSurveyPage()
    {
        $user = User::where('email', Cookie::get('email'))->first();
        if($user->fullName == NULL) {
            return redirect('finishup');
        }

        return view(
            'creator-create-survey',
            [
                'user' => $user
            ]
        );
    }

    public function getCreatorSurveyListPage()
    {
        $user = User::where('email', Cookie::get('email'))->first();
        if($user->fullName == NULL) {
            return redirect('finishup');
        }

        return view(
            'creator-survey-list',
            [
                'user' => $user
            ]
        );
    }

    public function getCreatorCreateThreadPage()
    {
        $user = User::where('email', Cookie::get('email'))->first();
        if($user->fullName == NULL) {
            return redirect('finishup');
        }

        return view(
            'creator-create-thread',
            [
                'user' => $user
            ]
        );
    }

    public function getCreatorSurveyDetailPage()
    {
        $user = User::where('email', Cookie::get('email'))->first();
        if($user->fullName == NULL) {
            return redirect('finishup');
        }

        return view(
            'creator-survey-detail',
            [
                'user' => $user
            ]
        );
    }

    public function getCreatorForumPage()
    {
        $user = User::where('email', Cookie::get('email'))->first();
        if($user->fullName == NULL) {
            return redirect('finishup');
        }

        return view(
            'creator-forum',
            [
                'user' => $user
            ]
        );
    }

    public function getCreatorAddChoiceQuestionPage()
    {
        $user = User::where('email', Cookie::get('email'))->first();
        if($user->fullName == NULL) {
            return redirect('finishup');
        }

        return view(
            'creator-add-choice-question',
            [
                'user' => $user
            ]
        );
    }

    public function getCreatorAddScaleQuestionPage()
    {
        $user = User::where('email', Cookie::get('email'))->first();
        if($user->fullName == NULL) {
            return redirect('finishup');
        }

        return view(
            'creator-add-scale-question',
            [
                'user' => $user
            ]
        );
    }

    public function getCreatorRespondentAnswer()
    {
        $user = User::where('email', Cookie::get('email'))->first();
        if($user->fullName == NULL) {
            return redirect('finishup');
        }

        return view(
            'creator-survey-respondent-answer',
            [
                'user' => $user
            ]
        );
    }
}
