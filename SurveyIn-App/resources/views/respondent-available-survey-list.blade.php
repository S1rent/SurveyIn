<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
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

            <a href={{ url('/respondent/profile') }} class="text-decoration-none sidebar-menu mb-5" style="width: 80%;">
                <div>
                    <p class="m-0 text-center" style="font-size: 30px;">View Profile</p>
                </div>
            </a>

            <h3 class="text-white sidebar-subtitle mb-3">Survey</h3>

            <a href={{ url('/respondent/surveys') }}
                class="text-decoration-none sidebar-menu sidebar-active mb-4 d-flex align-items-center justify-content-start"
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

            <section class="mt-5 mb-3">
                <h3 class="mb-3" style="color: #767070; font-weight: bold;">Available Surveys</h3>
                <div class="row flex-wrap">
                    <a href={{ url('/respondent/survey-detail') }} class="col text-decoration-none survey-item">
                        <article>
                            <div class="shadow bg-body rounded mb-5">
                                <h3 class="px-3 pt-3">WorkIt Application</h3>
                                <div class="separator-black"></div>

                                <img src={{ asset('images/ic-respondents.png') }}>
                                <p>2 Respondent</p>

                                <div class="d-flex align-items-center justify-content-between px-5">
                                    <div>
                                        <img src={{ asset('images/ic-money.png') }}>
                                        <p>Rp 1.000</p>
                                    </div>

                                    <div>
                                        <img src={{ asset('images/ic-reward-point.png') }}>
                                        <p>10 Point</p>
                                    </div>
                                </div>

                                <p class="pb-3">Created 10 Dec 2021, 13:22</p>
                            </div>
                        </article>
                    </a>

                    <a href={{ url('/respondent/survey-detail') }} class="col text-decoration-none survey-item">
                        <article>
                            <div class="shadow bg-body rounded mb-5">
                                <h3 class="px-3 pt-3">IoT 4.0</h3>
                                <div class="separator-black"></div>

                                <img src={{ asset('images/ic-respondents.png') }}>
                                <p>10 Respondent</p>

                                <div class="d-flex align-items-center justify-content-between px-5">
                                    <div>
                                        <img src={{ asset('images/ic-money.png') }}>
                                        <p>Rp 500</p>
                                    </div>

                                    <div>
                                        <img src={{ asset('images/ic-reward-point.png') }}>
                                        <p>5 Point</p>
                                    </div>
                                </div>

                                <p class="pb-3">Created 17 Nov 2021, 20:02</p>
                            </div>
                        </article>
                    </a>

                    <a href={{ url('/respondent/survey-detail') }} class="col text-decoration-none survey-item">
                        <article>
                            <div class="shadow bg-body rounded mb-5">
                                <h3 class="px-3 pt-3">New VR Application</h3>
                                <div class="separator-black"></div>

                                <img src={{ asset('images/ic-respondents.png') }}>
                                <p>50 Respondent</p>

                                <div class="d-flex align-items-center justify-content-between px-5">
                                    <div>
                                        <img src={{ asset('images/ic-money.png') }}>
                                        <p>Rp 1.500</p>
                                    </div>

                                    <div>
                                        <img src={{ asset('images/ic-reward-point.png') }}>
                                        <p>15 Point</p>
                                    </div>
                                </div>

                                <p class="pb-3">Created 4 May 2021, 10:00</p>
                            </div>
                        </article>
                    </a>

                    <a href={{ url('/respondent/survey-detail') }} class="col text-decoration-none survey-item">
                        <article>
                            <div class="shadow bg-body rounded mb-5">
                                <h3 class="px-3 pt-3">GTalk UI Experience</h3>
                                <div class="separator-black"></div>

                                <img src={{ asset('images/ic-respondents.png') }}>
                                <p>45 Respondent</p>

                                <div class="d-flex align-items-center justify-content-between px-5">
                                    <div>
                                        <img src={{ asset('images/ic-money.png') }}>
                                        <p>Rp 1.000</p>
                                    </div>

                                    <div>
                                        <img src={{ asset('images/ic-reward-point.png') }}>
                                        <p>10 Point</p>
                                    </div>
                                </div>

                                <p class="pb-3">Created 23 Feb 2021, 08:27</p>
                            </div>
                        </article>
                    </a>
                </div>
            </section>

            <nav aria-label="Page navigation">
                <ul class="pagination d-flex justify-content-center">
                    <li class="page-item disabled">
                        <a class="page-link"> &#8249 </a>
                    </li>
                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#"> &#8250 </a>
                    </li>
                </ul>
            </nav>
        </section>
    </main>

</body>

</html>
