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

            <a href={{ url('/respondent/profile') }} class="text-decoration-none sidebar-menu mb-5" style="width: 80%;">
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
            <a href="respondent-home.html" class="text-decoration-none">
                <h1 class="app-logo mb-4"><span class="redff0000">Survey</span><span class="text-black">In</span></h1>
            </a>

            <div class="profile-reedem-wrapper p-lg-4">
                <aside class="d-flex w-100">
                    <a href={{ url('/respondent/profile') }}><img src={{ asset('images/back-arrow.png') }} height="30px"></a>
                </aside>

                <div class="px-5 py-3 align-items-center justify-content-between d-flex">
                    <h4 id="points" style="color: #020CFF;">{{ $user->rewardPoint }} Point</h4>
                    <h1 class="fw-bold">Reedem Reward</h1>
                    <a href="respondent-transactionHistory.html"
                        class="border py-2 px-3 shadow p-3 mb-5 bg-body fw-bold text-decoration-none"
                        style="color: #F61919; border-radius: 12px;">Transaction
                        History</a>
                </div>

                <button id="selected" type="button" class="p-0" style="background: none; border: none;"
                    data-toggle="modal" data-target="#exampleModal">
                    <section>
                        <div class="row flex-wrap">
                            <a href="#" class="col text-decoration-none survey-item text-black">
                                <article>
                                    <div class="shadow bg-body rounded mb-5">
                                        <h3 class="px-3 pt-3">Voucher</h3>
                                        <p class="text-danger">Point needed: 500</p>

                                        <div class="separator-black"></div>

                                        <div class="text-end me-3">
                                            <p class="text-secondary">(15)</p>
                                        </div>
                                        <img src={{ asset('images/reward-tokopedia.png') }} class="mb-2" width="180px">
                                        <h2 class="pb-3 fw-bold">Rp. 25 000</h2>
                                    </div>
                                </article>
                            </a>

                            <a href="#" class="col text-decoration-none survey-item text-black">
                                <article>
                                    <div class="shadow bg-body rounded mb-5">
                                        <h3 class="px-3 pt-3">Voucher</h3>
                                        <p class="text-danger">Point needed: 1000</p>

                                        <div class="separator-black"></div>

                                        <div class="text-end me-3">
                                            <p class="text-secondary">(10)</p>
                                        </div>
                                        <img src={{ asset('images/reward-tokopedia.png') }} class="mb-2" width="180px">
                                        <h2 class="pb-3 fw-bold">Rp. 50 000</h2>
                                    </div>
                                </article>
                            </a>

                            <a href="#" class="col text-decoration-none survey-item text-black">
                                <article>
                                    <div class="shadow bg-body rounded mb-5">
                                        <h3 class="px-3 pt-3">Voucher</h3>
                                        <p class="text-danger">Point needed: 450</p>

                                        <div class="separator-black"></div>

                                        <div class="text-end me-3">
                                            <p class="text-secondary">(10)</p>
                                        </div>
                                        <img src={{ asset('images/reward-shopee.png') }} class="mb-2" width="92px">
                                        <h2 class="pb-3 fw-bold">Rp. 30 000</h2>
                                    </div>
                                </article>
                            </a>

                            <a href="#" class="col text-decoration-none survey-item text-black">
                                <article>
                                    <div class="shadow bg-body rounded mb-5">
                                        <h3 class="px-3 pt-3">Voucher</h3>
                                        <p class="text-danger">Point needed: 900</p>

                                        <div class="separator-black"></div>

                                        <div class="text-end me-3">
                                            <p class="text-secondary">(15)</p>
                                        </div>
                                        <img src={{ asset('images/reward-shopee.png') }} class="mb-2" width="92px">
                                        <h2 class="pb-3 fw-bold">Rp. 60 000</h2>
                                    </div>
                                </article>
                            </a>
                        </div>
                    </section>

                    <section>
                        <div class="row flex-wrap">
                            <a href="#" class="col text-decoration-none survey-item text-black">
                                <article>
                                    <div class="shadow bg-body rounded mb-5">
                                        <h3 class="px-3 pt-3 overflow-hidden" style="line-height: 1.5em;
                                    height: 3.7em;">Shoes</h3>
                                        <p class="text-danger">Point needed: 250 000</p>

                                        <div class="separator-black"></div>

                                        <div class="text-end me-3">
                                            <p class="text-secondary">(1)</p>
                                        </div>
                                        <img src={{ asset('images/reward-nike.png') }} class="mb-2" width="180px">
                                        <h2 class="pb-3 fw-bold overflow-hidden" style="line-height: 1.5em;
                                    height: 3.7em;">Nike <br> Revolution 5</h2>

                                    </div>
                                </article>
                            </a>

                            <a href="#" class="col text-decoration-none survey-item text-black">
                                <article>
                                    <div class="shadow bg-body rounded mb-5">
                                        <h3 class="px-3 pt-3 overflow-hidden" style="line-height: 1.5em;
                                    height: 3.7em;">Skin Mobile Legend Bang Bang</h3>
                                        <p class="text-danger">Point needed: 300 000</p>

                                        <div class="separator-black"></div>

                                        <div class="text-end me-3">
                                            <p class="text-secondary">(4)</p>
                                        </div>
                                        <img src={{ asset('images/reward-mobileLegend.png') }} class="mb-2" width="180px">
                                        <h2 class="pb-3 fw-bold overflow-hidden" style="line-height: 1.5em;
                                    height: 3.7em;">Skin Legend <br>Granger</h2>

                                    </div>
                                </article>
                            </a>

                            <a href="#" class="col text-decoration-none survey-item text-black">
                                <article>
                                    <div class="shadow bg-body rounded mb-5">
                                        <h3 class="px-3 pt-3 overflow-hidden" style="line-height: 1.5em;
                                    height: 3.7em;">Voucher</h3>
                                        <p class="text-danger">Point needed: 60 000</p>

                                        <div class="separator-black"></div>

                                        <div class="text-end me-3">
                                            <p class="text-secondary">(5)</p>
                                        </div>
                                        <img src={{ asset('images/reward-disney.png') }} class="mb-2" width="168px">
                                        <h2 class="pb-3 fw-bold overflow-hidden" style="line-height: 1.5em;
                                    height: 3.7em;">One Year <br> Subscription</h2>

                                    </div>
                                </article>
                            </a>

                            <a href="#" class="col text-decoration-none survey-item text-black">
                                <article>
                                    <div class="shadow bg-body rounded mb-5">
                                        <h3 class="px-3 pt-3 overflow-hidden" style="line-height: 1.5em;
                                    height: 3.7em;">Netflix</h3>
                                        <p class="text-danger">Point needed: 25 000</p>

                                        <div class="separator-black"></div>

                                        <div class="text-end me-3">
                                            <p class="text-secondary">(2)</p>
                                        </div>
                                        <img src={{ asset('images/reward-netflix.png') }} class="mb-2" width="113px">
                                        <h2 class="pb-3 fw-bold overflow-hidden" style="line-height: 1.5em;
                                    height: 3.7em;">One Month <br> Subscription</h2>

                                    </div>
                                </article>
                            </a>
                        </div>
                    </section>
                </button>

                <nav aria-label="Page navigation example">
                    <ul class="pagination ">
                        <li class="page-item disabled">
                            <a class="page-link"> &#8249 </a>
                        </li>
                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#"> &#8250 </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </section>

        <!-- Modal -->
        <div class="modal fade align-items-center" id="exampleModal" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title" id="exampleModalLabel">Information</h1>
                    </div>
                    <div class="modal-body">
                        <p id="modal-description"></p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Done</button>
                    </div>
                </div>
            </div>
        </div>
</body>

<script>
    $(document).ready(function () {
        $("#selected").click(function () {
            $('#exampleModal').modal('show');
            let point = document.getElementById('points').innerHTML
            let array = point.split(" ");
            let description = "";

            if (parseInt(array[0]) <= 0) {
                description = "Insufficient number of points";
            }

            document.getElementById('modal-description').innerHTML = description;
        });
    });
</script>

</html>
