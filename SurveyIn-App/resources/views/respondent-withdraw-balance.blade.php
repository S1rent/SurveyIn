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

            <div class="profile-reedem-wrapper p-lg-4">
                <aside class="d-flex w-100 align-items-center justify-content-between">
                    <a href={{ url('/respondent/profile') }}><img src={{ asset('images/back-arrow.png') }} height="30px"></a>
                    <a href={{ url('/respondent/transaction-history') }}
                        class="border  shadow py-2 px-2  bg-body fw-bold text-decoration-none"
                        style="color: #F61919; border-radius: 12px;">Transaction
                        History</a>
                </aside>

                <h1 class="fw-bold px-5 py-3 text-center">Withdraw</h1>

                <div class="text-center mb-5 d-flex justify-content-center">
                    <div class="text-center" style="width: 70%; border-radius: 30px; height: 400px; background-image: url('{{ asset('images/background-card.png') }}'); background-size: cover; background-repeat: no-repeat;">
                        <div>
                            <h1 class="text-light text-start px-5 py-3">Balance</h1>
                        </div>
                        <div class="w-100 d-flex justify-content-center mt-5">
                            <div class="bg-light py-2 px-3 mt-5 w-25 text-center justify-content-center d-flex" style="border-radius: 50px;">
                                <h1 class="app-logo"><span class="redff0000">Survey</span><span class="text-black">In</span></h1>
                            </div>
                        </div>
                        <div class="text-center text-light mt-5">
                            <h1>Rp. 60 000</h1>
                        </div>
                    </div>
                </div>

                <div class="container">
                    <div class="row">
                        <div class="col text-center">
                            <button id="selected" type="button" class="p-0" style="background: none; border: none;"
                                data-toggle="modal" data-target="#exampleModal">
                                <section>
                                    <div class="row col">
                                        <div href="#" class="col text-decoration-none survey-item text-black">
                                            <article>
                                                <div class="shadow bg-body rounded mb-5">
                                                    <h3 class="py-5">Rp. 10 000</h3>
                                                </div>
                                            </article>
                                        </div>

                                        <div href="#" class="col text-decoration-none survey-item text-black">
                                            <article>
                                                <div class="shadow bg-body rounded mb-5">
                                                    <h3 class="py-5">Rp. 20 000</h3>
                                                </div>
                                            </article>
                                        </div>

                                        <div href="#" class="col text-decoration-none survey-item text-black">
                                            <article>
                                                <div class="shadow bg-body rounded mb-5">
                                                    <h3 class="py-5">Rp. 50 000</h3>
                                                </div>
                                            </article>
                                        </div>
                                    </div>
                                </section>

                                <section>
                                    <div class="row flex-wrap">
                                        <div href="#" class="col text-decoration-none survey-item text-black">
                                            <article>
                                                <div class="shadow bg-body rounded mb-5">
                                                    <h3 class="py-5">Rp. 100 000</h3>
                                                </div>
                                            </article>
                                        </div>

                                        <div href="#" class="col text-decoration-none survey-item text-black">
                                            <article>
                                                <div class="shadow bg-body rounded mb-5">
                                                    <h3 class="py-5">Rp. 250 000</h3>
                                                </div>
                                            </article>
                                        </div>

                                        <div href="#" class="col text-decoration-none survey-item text-black">
                                            <article>
                                                <div class="shadow bg-body rounded mb-5">
                                                    <h3 class="py-5">Rp. 500 000</h3>
                                                </div>
                                            </article>
                                        </div>

                                    </div>
                                </section>
                            </button>

                        </div>
                    </div>
                </div>

                <div class="container">
                    <div class="input-group mb-3 row justify-content-center ">
                        <label for="phone" class="col-3 fw-bold fs-5">Gopay Phone
                            Number</label>
                        <input type="text" class=" shadow col-5" id="phone" name="phone" placeholder="(+62) XXX - XXXX"
                            style="border: none;">
                        <button class="btn text-light ms-2 col-2" style="background-color: #009AFF; " type="button"
                            id="button-addon2">Withdraw</button>
                    </div>
                    <div class="row">
                        <div class="col text-center fw-bold">
                            <i class="redff0000">*We can only withdraw to Gopay e-wallet for now, please stay tuned as
                                we try to
                                include
                                other pwithdraw methods</i>
                        </div>
                    </div>
                </div>

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

<!-- <script>
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
</script> -->

</html>
