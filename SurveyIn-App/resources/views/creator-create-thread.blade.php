<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
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

            <a href={{ url('/creator/create-survey') }} class="text-decoration-none sidebar-menu mb-4 d-flex align-items-center justify-content-start" style="width: 100%; padding: 4px 16px;">
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

            <a href={{ url('/creator/create-thread') }} class="text-decoration-none sidebar-menu sidebar-active mb-5 d-flex align-items-center justify-content-start" style="width: 100%; padding: 4px 16px;">
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

            <div class="shadow card py-4 px-5 mb-5 bg-body rounded">
                <h1 class="text-center">Create Thread</h1>

                <h4>Thread Title</h4>
                <div class="mb-4">
                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Title">
                </div>

                <h4>Thread Description</h4>
                <div class="mb-3">
                    <textarea class="form-control" style="resize: none;" id="exampleFormControlTextarea1" rows="15"></textarea>
                </div>

                <span class="d-flex justify-content-end">
                    <button type="button" class="btn btn-primary">Submit</button>
                </span>
            </div>
        </section>
    </main>
  </body>
</html>
