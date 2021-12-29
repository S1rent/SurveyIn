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

            <a href={{ url('/creator/profile') }} class="text-decoration-none sidebar-menu sidebar-active mb-5" style="width: 80%;">
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

            <div class="profile-wrapper p-lg-4">
                <section class="profile-picture-section">
                    <img src="../{{ $user->profileImageURL }}" class="user-avatar mb-3">
                    <h2>{{ $user->fullName }}</h2>
                </section>

                <div class="px-5 py-3">
                    <section>
                        <h2 class="redff0000">Balance</h2>
                        <h2>Rp. {{ $user->balance }}</h2>

                        <div class="mb-3 mt-4 d-flex justify-content-between flex-wrap">
                            <input style="border-color: black; border-width: 1px; width: 80% !important;" min="0" type="number" class="form-control" id="amount" name="amount" placeholder="Amount">
                            <button id="btn-topup" type="button" class="btn btn-topup" data-toggle="modal" data-target="#exampleModal" style="height: 50px !important;">
                                Top Up
                            </button>
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

        <!-- Modal -->
        <div class="modal fade align-items-center" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
    </main>

    <script type="text/javascript">
        $(document).ready(function(){
            $("#btn-topup").click(function() {
                $('#exampleModal').modal('show');
                let description = document.getElementById('amount').value
                let uniqueCode = 0

                if(parseInt(description) < 100) {
                    uniqueCode = Math.floor(Math.random() * 10) + 1;
                } else if(parseInt(description) < 1000) {
                    uniqueCode = Math.floor(Math.random() * 100) + 1;
                } else {
                    uniqueCode = Math.floor(Math.random() * 1000) + 1;
                }

                if(description == null || description == "" || description < 0 || description == "0") {
                    description = "Please input proper amount of balance you would like to deposit."
                } else {
                    description =
                    "Please transfer the exact following amount of Gopay Balance to 0812-2323-9191<br>(PLEASE TRANSFER THE EXACT SAME VALUE AS THE TOTAL TRANSFER VALUE)<br><br>"
                    +
                    `<b style="font-size: 24px; text-align: center;">Amount of Deposit - Rp. ${description}</b><br>`
                    +
                    `<b style="font-size: 24px; text-align: center;">Unique Code - Rp. ${uniqueCode}</b><br><br>`
                    +
                    `<b style="font-size: 24px; text-align: center;">Total Transfer - Rp. ${parseInt(description) + uniqueCode}</b>`
                    +
                    "<br><br>"
                    +
                    `<p style="color: red"><i>The amount of balance is different from your previous input value,<br>
                    because it contains a unique number so that our system could detect your top up automatically.</i></p>`
                    +
                    `<p style="color: red"><i>IF YOU HAVE TRANSFERRED PLEASE PRESS DONE, THE SYSTEM WILL VALIDATE YOUR TRANSACTION.
                        It takes the system around 1-2 minutes to validate your transaction, if it's longer,
                        please consult in the forum section or contact the customer service</i></p>`
                }
                document.getElementById('modal-description').innerHTML = description
            });
        });
    </script>

  </body>
</html>
