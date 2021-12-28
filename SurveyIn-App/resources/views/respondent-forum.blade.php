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

            <section class="mt-2 mb-3">
                <div class="thread-item text-decoration-none">
                    <article class="py-3 px-4 align-items-center mb-4">
                        <div class="d-flex align-items-center" style="width: 100%;">
                            <img class="thread-avatar" src={{ asset('images/avatar-antonius.png') }}>

                            <div class="thread-item-description" style="width: 100%;">
                                <h3>Antonius</h3>
                                <p class="pb-1">29 Nov 2021, 10:37</p>

                                <h2>Perkembangan VR 2021</h2>
                                <p>Menurut kalian bagaimana perkembangan VR pada tahun 2021 ini?</p>
                            </div>
                        </div>
                    </article>
                </div>

                <div class="thread-item">
                    <article class="py-4 px-4 mb-4" style="display: block;">
                        <h4>Title</h4>
                        <div class="mb-3">
                            <input type="text" class="form-control" id="exampleFormControlInput1"
                                placeholder="Reply Title">
                        </div>
                        <h4 class="m-0">Comment</h4>
                        <div class="mb-3">
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"
                                style="resize: none;" placeholder="Write something here..."></textarea>
                        </div>
                        <hr>
                        <span class="d-flex justify-content-end">
                            <button type="button" class="btn btn-primary">Reply</button>
                        </span>
                    </article>
                </div>

                <h3 class="mb-3" style="color: #767070; font-weight: bold;">Discussion</h3>

                <div class="thread-item text-decoration-none">
                    <article class="py-3 px-4 align-items-center mb-4">
                        <div class="d-flex align-items-center" style="width: 100%;">
                            <img class="thread-avatar" src={{ asset('images/avatar-budi.png') }}>

                            <div class="thread-item-description" style="width: 100%;">
                                <h3>Budi</h3>
                                <p class="pb-3">01 Dec 2021, 13:23</p>

                                <h2>Saya ingin coba menjawab</h2>
                                <p>Pada tahun 2021, VR memiliki kesempatan dalam menjadi teknologi yang dapat digunakan
                                    oleh sektor pariwisata untuk 'pariwisata online'. Teknologi VR juga membuka
                                    kesempatan bagi pihak tour and travel dalam mempromosikan hotel dan kota atau negara
                                    tujuan para konsumen.
                                </p>
                            </div>
                        </div>
                    </article>
                </div>

            </section>
        </section>
    </main>

</body>

</html>
