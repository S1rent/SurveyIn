<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>SurveyIn</title>
  </head>
  <body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <main>
        <!-- Sidebar -->
        <nav class="position-absolute sidebar bg-blue09173A p-4">
            <img src="../{{ $user->profileImageURL }}" class="user-avatar mb-4 mt-4">

            <a href={{ url('/creator/profile') }} class="text-decoration-none sidebar-menu mb-5" style="width: 80%;">
                <div>
                    <p class="m-0 text-center" style="font-size: 30px;">View Profile</p>
                </div>
            </a>

            <h3 class="text-white sidebar-subtitle mb-3">Survey</h3>

            <a href={{ url('/creator/create-survey') }} class="text-decoration-none sidebar-menu sidebar-active mb-4 d-flex align-items-center justify-content-start" style="width: 100%; padding: 4px 16px;">
                <img src="{{ asset('images/ic-create-survey.png') }}" class="sidebar-sub-icon">
                <div style="margin-left: 16px;">
                    <p class="m-0 text-center" style="font-size: 30px;">Create Survey</p>
                </div>
            </a>

            <a href={{ url('/creator/survey-list') }} class="text-decoration-none sidebar-menu mb-5 d-flex align-items-center justify-content-start" style="width: 100%; padding: 4px 16px;">
                <img src={{ asset('images/ic-eye.png') }} class="sidebar-sub-icon">
                <div style="margin-left: 16px;">
                    <p class="m-0 text-center" style="font-size: 30px;">My Survey</p>
                </div>
            </a>

            <h3 class="text-white sidebar-subtitle mb-3">Thread</h3>

            <a href={{ url('/creator/create-thread') }} class="text-decoration-none sidebar-menu mb-5 d-flex align-items-center justify-content-start" style="width: 100%; padding: 4px 16px;">
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
            <a href={{ url('/creator/home') }} class="text-decoration-none">
                <h1 class="app-logo mb-4"><span class="redff0000">Survey</span><span class="text-black">In</span></h1>
            </a>

            <h4>Survey Title</h4>
            <div class="mb-3">
                <input id="tv-option" type="text" class="form-control py-2" id="answeroption" placeholder="Title"></input>
            </div>

            <section class="mt-5 mb-3">
                <div class="mb-4">
                    <h4>Survey Description</h4>
                    <div class="mb-3">
                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Description" style="height: 200px; padding: 8px 0 150px 16px;">
                    </div>
                </div>
            </section>

            <span class="d-flex align-items-center mb-4">
                <div class="form-control border-0 p-0">
                    <h4>Budget</h4>
                    <input id="tv-option" type="number" class="form-control py-2" id="answeroption" placeholder="-">
                </div>
                <div style="width: 2%;"></div>

                <div class="form-control border-0 p-0">
                    <h4>Finish Date</h4>
                    <input id="tv-option" type="date" class="form-control py-2" id="answeroption">
                </div>
                <div style="width: 2%;"></div>

                <div class="form-control border-0 p-0">
                    <h4>Max Quota</h4>
                    <input id="tv-option" type="number" class="form-control py-2" id="answeroption" placeholder="-">
                </div>
            </span>

            <span class="d-flex align-items-center mb-4">
                <button type="button" class="btn btn-primary w-50" onclick="window.location.href='{{ url('/creator/add-choice-question') }}'">Add Multiple Choice Question</button>
                <div style="width: 2%;"></div>
                <button type="button" class="btn btn-primary w-50" onclick="window.location.href='{{ url('/creator/add-scale-question') }}'">Add Scale Question</button>
            </span>

            <h3>Questions</h3>

            <section class="py-3">
                <div class="card mb-3">
                    <div class="card-body d-flex">
                        <b>1. </b>
                        <div style="width: 2%;"></div>
                        <div>
                            <p class="mb-1">Apa saja merek smartphone dari berikut ini yang anda kenal?</p>
                            <div class="form-check mb-2">
                                <input class="form-check-input" type="radio" name="choice" id="samsung">
                                <label class="form-check-label" for="samsung">
                                  <b>Samsung</b>
                                </label>
                            </div>
                            <div class="form-check mb-2">
                                <input class="form-check-input" type="radio" name="choice" id="mito">
                                <label class="form-check-label" for="mito">
                                  <b>Mito</b>
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="choice" id="iPhone">
                                <label class="form-check-label" for="iPhone">
                                  <b>iPhone</b>
                                </label>
                            </div>
                        </div>
                    </div>
                    <span class="d-flex justify-content-end align-items-center px-3">
                        <button id="iPhone" class="text-decoration-none" style="border: none; background-color: transparent;" onclick="window.location.href='{{ url('/creator/add-choice-question') }}'">
                            <h5 class="text-primary">Update</h5>
                        </button>
                        <button id="iPhone" class="text-decoration-none" style="border: none; background-color: transparent;">
                            <h5 class="redff0000">Delete</h5>
                        </button>
                    </span>
                </div>

                <div class="card mb-3">
                    <div class="card-body d-flex">
                        <b>2. </b>
                        <div style="width: 2%;"></div>
                        <div class="w-100">
                            <p class="mb-1">Menurut anda dari 1 sampai 10 berapa nilai yang tepat untuk survey ini?</p>
                            <input type="range" class="form-range" min="1" max="10" id="customRange2">
                            <div class="d-flex justify-content-between">
                                <p>1</p>
                                <p>10</p>
                            </div>
                        </div>
                    </div>
                    <span class="d-flex justify-content-end align-items-center px-3">
                        <button id="iPhone" class="text-decoration-none" style="border: none; background-color: transparent;" onclick="window.location.href='{{ url('/creator/add-scale-question') }}'">
                            <h5 class="text-primary">Update</h5>
                        </button>
                        <button id="iPhone" class="text-decoration-none" style="border: none; background-color: transparent;">
                            <h5 class="redff0000">Delete</h5>
                        </button>
                    </span>
                </div>
            </section>

            <span class="d-flex justify-content-between align-items-center">
                <h4 class="redff0000">Total Question: 2</h4>
                <button type="button" class="btn btn-primary" onclick="window.location.href='{{ url('/creator/home') }}'">Create</button>
            </span>
        </section>
    </main>

  </body>
</html>
