<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="{{ asset('css/style-respondent.css') }}">
    <title>SurveyIn</title>
</head>

<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>

    <main>
        <!-- Sidebar -->
        <nav class="position-absolute sidebar bg-blue09173A p-4">
            <img src="../{{ $user->profileImageURL }}" class="user-avatar mb-4 mt-4">

            <a href={{ url('/respondent/profile') }} class="text-decoration-none sidebar-menu sidebar-active mb-5" style="width: 80%;">
                <div>
                    <p class="m-0 text-center" style="font-size: 30px;">View Profile</p>
                </div>
            </a>

            <h3 class="text-white sidebar-subtitle mb-3">Survey</h3>

            <a href={{ url('/respondent/surveys') }}
                class="text-decoration-none sidebar-menu mb-4 d-flex align-items-center justify-content-start"
                style="width: 100%; padding: 4px 16px;">
                <img src={{ asset('images/ic-eye.png') }} class="sidebar-sub-icon">
                <div style="margin-left: 16px;">
                    <p class="m-0 text-center" style="font-size: 30px;">View Surveys</p>
                </div>
            </a>

            <a href={{ url('/respondent/history') }}
                class="text-decoration-none sidebar-menu mb-5 d-flex align-items-center justify-content-start"
                style="width: 100%; padding: 4px 16px;">
                <img src={{ asset('images/ic-eye.png') }} class="sidebar-sub-icon">
                <div style="margin-left: 16px;">
                    <p class="m-0 text-center" style="font-size: 30px;">View History</p>
                </div>
            </a>

            <h3 class="text-white sidebar-subtitle mb-3">Thread</h3>

            <a href={{ url('/respondent/create-thread') }}
                class="text-decoration-none sidebar-menu mb-5 d-flex align-items-center justify-content-start"
                style="width: 100%; padding: 4px 16px;">
                <img src="{{ asset('images/ic-create-survey.png') }}" class="sidebar-sub-icon">
                <div style="margin-left: 16px;">
                    <p class="m-0 text-center" style="font-size: 30px;">Create Thread</p>
                </div>
            </a>

            <h3 class="text-white sidebar-subtitle mb-4 mt-3">Logout</h3>
            <a href="{{ url('logout') }}">
                <img src={{ asset('images/ic-logout.png') }} style="width: 45px; height: 45px;margin-left: -16px;">
            </a>

        </nav>

        <!-- Main Container -->
        <section class="main-content p-4">
            <a href={{ url('/respondent/home') }} class="text-decoration-none">
                <h1 class="app-logo mb-4"><span class="redff0000">Survey</span><span class="text-black">In</span></h1>
            </a>

            <div class="profile-wrapper p-lg-4">

                <div class="px-5 py-3 justify-content-between d-flex">
                    <h4 style="color: #020CFF;">{{ $user->rewardPoint }} Point</h4>
                    <a href={{ url('/respondent/reward') }} class="text-secondary text-decoration-none">Reedem Reward</a>
                </div>

                <section class="profile-picture-section">
                    <img src="../{{ $user->profileImageURL }}" class="user-avatar mb-3">
                    <h2>{{ $user->fullName }}</h2>
                </section>

                <div class="px-5 py-3">
                    <section>
                        <h2 class="redff0000">Balance</h2>
                        <div class="justify-content-between d-flex">
                            <h2>Rp. {{ $user->balance }}</h2>
                            <a href="respondent-withdraw.html" class="btn btn-topup text-decoration-none">Withdraw</a>
                        </div>
                    </section>
                </div>

                <section class="px-5 py-3">
                    <div class="row">
                        <div class="col">
                            <p class="profile-item-title">Email</p>
                            <p class="profile-item-description">{{ $user->email }}</p>
                        </div>
                        <div class="col">
                            <p class="profile-item-title">Occupation</p>
                            <p class="profile-item-description">{{ $user->occupation }}</p>
                        </div>

                        <div class="w-100"></div>

                        <div class="col">
                            <p class="profile-item-title">Address</p>
                            <p class="profile-item-description">{{ $user->address }}</p>
                        </div>
                        <div class="col">
                            <p class="profile-item-title">Place of Birth</p>
                            <p class="profile-item-description">{{ explode("*", $user->dateAndPOB)[1] }}</p>
                        </div>

                        <div class="w-100"></div>

                        <div class="col">
                            <p class="profile-item-title">Gender</p>
                            <p class="profile-item-description">{{ $user->gender }}</p>
                        </div>
                        <div class="col">
                            <p class="profile-item-title">Date of Birth</p>
                            <p class="profile-item-description">{{ explode("*", $user->dateAndPOB)[0] }}</p>
                        </div>
                    </div>
                </section>
            </div>
        </section>

</body>

</html>
