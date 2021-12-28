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

            <section class="mt-5 mb-3">
                <div class="mb-3 justify-content-between d-flex">
                    <h3 class="text-secondary fw-bold">Reedem History
                    </h3>
                    <h4 style="color: #020CFF;">{{ $user->rewardPoint }} Point</h4>
                </div>

                <div class="" style="border: solid 1px;">
                    <div class="row px-5 pt-4">
                        <div class="col ">
                            <h4 class="fw-bold">Voucher Tokopedia (Rp. 25 000)</h4>
                            <p class="text-secondary">23 December 2021 </p>
                        </div>
                        <div class="col text-end align-self-center">
                            <p class="redff0000 fw-bold">- 500 Points</p>
                        </div>
                    </div>

                    <hr class="shadow-lg">

                    <div class="row px-5 py-2">
                        <div class="col ">
                            <h4 class="fw-bold">Voucher Shopee (Rp. 60 000)</h4>
                            <p class="text-secondary">1 December 2021 </p>
                        </div>
                        <div class="col text-end align-self-center">
                            <p class="redff0000 fw-bold">- 500 Points</p>
                        </div>
                    </div>
                </div>

            </section>

            <section class="mt-5 mb-3">
                <div class="mb-3 justify-content-between d-flex">
                    <h3 class="text-secondary fw-bold">Withdraw History
                    </h3>
                    <h4 style="color: #020CFF;">Rp. {{ $user->balance }}</h4>
                </div>

                <div class="" style="border: solid 1px;">
                    <div class="row px-5 pt-4">
                        <div class="col ">
                            <h4 class="text-secondary">23 December 2021 </h4>
                        </div>
                        <div class="col text-end align-self-center">
                            <p class="redff0000 fw-bold">- Rp. 10 000</p>
                        </div>
                    </div>

                    <hr class="shadow-lg">

                    <div class="row px-5 py-2">
                        <div class="col ">
                            <h4 class="text-secondary">1 December 2021 </h4>
                        </div>
                        <div class="col text-end align-self-center">
                            <p class="redff0000 fw-bold">- Rp. 20 000</p>
                        </div>
                    </div>
                </div>

            </section>


        </section>
    </main>

</body>

</html>
