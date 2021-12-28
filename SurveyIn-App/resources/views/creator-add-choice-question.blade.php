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

            <section class="mt-5 mb-3">
                <div class="mb-4">
                    <h4>Question</h4>
                    <div class="mb-3">
                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Input Question" style="height: 200px; padding: 20px 0 150px 25px;">
                    </div>

                    <h4 class="mt-5">Choice Option</h4>
                    <section class="d-flex mb-3 align-items-center">
                        <div class="mb-3" style="width: 50%; margin-right: 32px;">
                            <input id="tv-option" type="text" class="form-control py-3" id="answeroption" placeholder="Input Choice Option"></input>
                        </div>

                        <span class="d-flex justify-content-end">
                            <button id="btn-add" type="button" class="btn btn-primary" style="height: 36px !important;">Add</button>
                        </span>
                    </section>

                    <h4 class="mt-5">Choice Option Result</h4>
                    <section>
                        <div id="option-results" class="card">
                            <div class="card-body px-4 py-3 d-flex justify-content-between align-items-center">
                                <div style="width: 50%;">
                                    <input class="form-check-input" style="width: 30px; height: 30px; border-color: black; border-width: 1px;" type="radio" name="role" id="creator">
                                    <label class="form-check-label mt-1" for="creator">
                                        <b class="mx-3" style="font-size: x-large;">iPhone</b>
                                    </label>
                                </div>

                                <button id="iPhone" class="text-decoration-none" style="border: none; background-color: transparent;" onclick="del(id)">
                                    <h4 class="redff0000">Delete</h4>
                                </button>
                            </div>


                        </div>
                    </section>

                </div>
            </section>
            <span class="d-flex justify-content-end">
                <button type="button" class="btn btn-primary" onclick="window.location.href='{{ url('/creator/create-survey') }}'">Add Question</button>
            </span>
        </section>
    </main>

    <script>
        let arr = [
            "iPhone"
        ]
        $(document).ready(function(){
            let view = document.getElementById('option-results')
            let textView = document.getElementById('tv-option')

            $("#btn-add").click(function() {
                view.innerHTML = ""
                arr.push(textView.value)
                arr.forEach((item) => {
                    view.innerHTML += `
                        <div class="card-body px-4 py-3 d-flex justify-content-between align-items-center">
                            <div style="width: 50%;">
                                <input class="form-check-input" style="width: 30px; height: 30px; border-color: black; border-width: 1px;" type="radio" name="role" id="creator">
                                <label class="form-check-label mt-1" for="creator">
                                    <b class="mx-3" style="font-size: x-large;">${item}</b>
                                </label>
                            </div>

                            <button id="${item}" class="text-decoration-none btn-delete" style="border: none; background-color: transparent;" onclick="del(id)">
                                <h4 class="redff0000">Delete</h4>
                            </button>
                        </div>
                    `
                })
            })
        });
        function del(e) {
            arr = arr.filter((item) => {
                return item != e
            })
            document.getElementById('option-results').innerHTML = ""
            arr.forEach((item) => {
                document.getElementById('option-results').innerHTML += `
                    <div class="card-body px-4 py-3 d-flex justify-content-between align-items-center">
                        <div style="width: 50%;">
                            <input class="form-check-input" style="width: 30px; height: 30px; border-color: black; border-width: 1px;" type="radio" name="role" id="creator">
                            <label class="form-check-label mt-1" for="creator">
                                <b class="mx-3" style="font-size: x-large;">${item}</b>
                            </label>
                        </div>

                        <button id="${item}" class="text-decoration-none btn-delete" style="border: none; background-color: transparent;" onclick="del(id)">
                            <h4 class="redff0000">Delete</h4>
                        </button>
                    </div>
                `
            })
        }
    </script>

  </body>
</html>
