<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;
use PharIo\Manifest\Email;
use stdClass;

class AuthController extends Controller
{
    public function getLoginPage()
    {
        return view('login');
    }

    public function getCreatorHomePage()
    {
        $user = User::where('email', Cookie::get('email'))->first();

        return view(
            'creator-home',
            [
                'user' => $user
            ]
        );
    }

    public function getRegisterPage()
    {
        return view('register');
    }

    public function getFinishProfilePage()
    {
        return view('finish-profile');
    }

    public function loginProcess(Request $request)
    {
        $validation = $request->validate(
            [
                'email' => 'required',
                'password' => 'required'
            ],
            [
                'email.required' => 'Email must not be empty',
                'password.required' => 'Password must not be empty',
            ]
        );

        if (
            Auth::attempt(
                [
                    'email' => $validation['email'],
                    'password' => $validation['password']
                ]
            )
        ) {
            Cookie::queue('email', $validation['email'], 60);
            if(Auth::user()->fullName == NULL) {
                return redirect('/finishup');
            } else if(Auth::user()->roleStatus == '0') {
                return redirect('/creator/home');
            } else {
                return redirect('/respondent/home');
            }
    	}

        return back()->withErrors([
            'auth' => 'Email or password is wrong.',
        ]);
    }

    public function registerProcess(Request $request)
    {
        $validation = $request->validate(
            [
                'email' => 'required',
                'password' => 'required',
                'confirmpassword' => 'required',
                'role' => 'required'
            ],
            [
                'email.required' => 'Email must not be empty',
                'password.required' => 'Password must not be empty',
                'confirmpassword' => 'Confirm password must not be empty',
            ]
        );

        if($request->password != $request->confirmpassword) {
            return back()->withErrors([
                'confirmpassword' => 'Confirm password must be the same as password',
            ]);
        }

        User::create([
    		'email' => $validation['email'],
    		'password' => bcrypt($validation['password']),
            'roleStatus' => $validation['role']
    	]);

    	return redirect('/login');
    }

    public function finishUpProcess(Request $request) {
        $validation = $request->validate(
            [
                'name' => 'required',
                'address' => 'required',
                'occupation' => 'required',
                'gender' => 'required',
                'pob' => 'required',
                'dob' => 'required',
                'imageinput' => 'required|image'
            ],
            [
                'name.required' => 'Name must not be empty.',
                'address.required' => 'Address must not be empty.',
                'occupation' => 'Occupation must not be empty.',
                'gender.required' => 'Please select your gender.',
                'pob.required' => 'Place of Birth must not be empty.',
                'dob.required' => 'Date of Birth must not be empty.',
                'imageinput.required' => 'Please upload your profile image.',
                'imageinput.image' => 'Uploaded file must be only image.'
            ]
        );

        $fileName = Cookie::get('email').$validation['imageinput']->getClientOriginalName();
        $path = $validation['imageinput']->move('images', $fileName);

        User::where('email', Cookie::get('email'))
            ->update(
                [
                    'fullName' => $validation['name'],
                    'gender' => $validation['gender'],
                    'dateAndPOB' => $validation['dob'].`$`.$validation['pob'],
                    'occupation' => $validation['occupation'],
                    'rewardPoint' => 0,
                    'balance' => 0,
                    'profileImageURL' => $path,
                    'address' => $validation['address']
                ]
            );

        $user = User::where('email', Cookie::get('email'))->first();
        if($user->roleStatus == '0') {
            return redirect('/creator/home');
        } else {
            return redirect('/respondent/home');
        }
    }

    public function logoutProcess()
    {
        Auth::logout();
        Cookie::queue(Cookie::forget('email'));
    	return redirect('/login');
    }
}
