<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SurveyController extends Controller
{
    public function getCreatorCreateSurveyPage()
    {
        return view('creator-create-survey');
    }

    public function getCreatorSurveyListPage()
    {
        return view('creator-survey-list');
    }

    public function getCreatorCreateThreadPage()
    {
        return view('creator-create-thread');
    }

    public function getCreatorSurveyDetailPage()
    {
        return view('creator-survey-detail');
    }

    public function getCreatorForumPage()
    {
        return view('creator-forum');
    }

    public function getCreatorAddChoiceQuestionPage()
    {
        return view('creator-add-choice-question');
    }

    public function getCreatorAddScaleQuestionPage()
    {
        return view('creator-add-scale-question');
    }

    public function getCreatorRespondentAnswer()
    {
        return view('creator-survey-respondent-answer');
    }
}
