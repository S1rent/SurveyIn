<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
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

            <a href={{ url('/creator/survey-list') }} class="text-decoration-none sidebar-menu sidebar-active mb-5 d-flex align-items-center justify-content-start" style="width: 100%; padding: 4px 16px;">
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

            <section class="mt-2 mb-3">
                <div class="thread-item">
                    <article class="py-3 px-4 mb-4 d-block">
                        <aside class="d-flex w-100 justify-content-between">
                            <p>Created 10 Dec 2021, 13:22</p>
                            <div class="d-block">
                            <img src="ic-respondents.png">
                            <p class="m-0 text-end" style="position: relative; z-index: 100;top: -40px; right: -12px;">2</p>
                            </div>
                        </aside>

                        <div class="d-flex justify-content-between">
                            <h2>WorkIt Application</h2>
                        </div>
                        <hr>

                        <div class="mb-4">
                            <h4 class="redff0000">Description </h4>
                            <h4 style="font-weight: 400;">Aplikasi WorkIt adalah aplikasi untuk mencari pekerjaan</h4>
                        </div>

                        <div class="mb-4 text-ce">
                            <h4 class="redff0000">Result </h4>
                            <div class="mb-3">
                                <div class="card-body d-flex justify-content-center">
                                    <b>1. </b>
                                    <div style="width: 2%;"></div>
                                    <div class="px-5">
                                        <p class="mb-1">Apa saja merek smartphone dari berikut ini yang anda kenal?</p>

                                        <!--  JS PIE CHART -->
                                        <div>
                                            <canvas id="myChart"></canvas>
                                        </div>

                                    </div>
                                </div>

                                <div class="card-body d-flex justify-content-center">
                                    <b>2. </b>
                                    <div style="width: 2%;"></div>
                                    <div class="px-5">
                                        <p class="mb-1">Menurut anda dari 1 sampai 10 berapa nilai yang tepat untuk survey ini?</p>

                                        <!--  JS SCATTER CHART -->
                                        <div>
                                            <canvas id="scatterChart"></canvas>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="d-flex justify-content-between align-items-center">
                            <h4 class="redff0000">Start - Finish</h4>
                            <div class="d-flex">
                                <img src="ic-money.png" width="28px" height="28px">
                                <p style="margin-left: 8px;">Rp 1.000</p>
                            </div>
                        </div>

                        <div class="d-flex justify-content-between align-items-center">
                            <h5 style="color: #A5A5A5;">10 Dec 2021 - 1 Jan 2022</h5>
                            <div class="d-flex">
                                <img src="ic-reward-point.png" width="28px" height="28px">
                                <p style="margin-left: 8px;">10 Point</p>
                            </div>
                        </div>

                    </article>
                </div>
            </section>
        </section>
    </main>

    <script>
        let ctx = document.getElementById('myChart').getContext('2d');
        let pieLabel = ['Samsung', 'Mito', 'iPhone'];
        let colorHex = ['#FF0000', '#008101', '#0001fe'];

        let myChart = new Chart(ctx, {
        type: 'pie',
        data: {
            datasets: [{
            data: [1, 0, 1],
            backgroundColor: colorHex
            }],
            labels: pieLabel
        },
        options: {
            responsive: true,
            legend: {
            position: 'bottom'
            },
            plugins: {
            datalabels: {
                color: '#fff',
                anchor: 'end',
                align: 'start',
                offset: -10,
                borderWidth: 2,
                borderColor: '#fff',
                borderRadius: 25,
                backgroundColor: (context) => {
                return context.dataset.backgroundColor;
                },
                font: {
                weight: 'bold',
                size: '10'
                },
                formatter: (value) => {
                return value + ' %';
                }
            }
            }
        }
        })




        let scatter = document.getElementById('scatterChart').getContext('2d');

        let scatterChart = new Chart(scatter, {
            type: 'line',
            showLine: false,
            data: {
                labels: [1, 2, 3, 4, 5, 6, 7, 8, 9, 10],
                datasets: [
                    {
                        label: 'Answer',
                        data: [
                            { x: 10, y: 1 },
                            { x: 8, y: 1 }
                        ],
                        borderColor: '#0001FE',
                        backgroundColor: '#0001FE',
                    }
                ]
            },
            options: {
                showLine: false,
                indexAxis: 'x',
                scales: {
                    y: {
                        beginAtZero: true
                    }
                },
                responsive: true,
                legend: {
                    position: 'bottom'
                },
                plugins: {
                    datalabels: {
                        color: '#fff',
                        anchor: 'end',
                        align: 'start',
                        offset: -10,
                        borderWidth: 2,
                        borderColor: '#fff',
                        borderRadius: 25,
                        backgroundColor: (context) => {
                            return context.dataset.backgroundColor;
                        },
                        font: {
                            weight: 'bold',
                            size: '10'
                        },
                        formatter: (value) => {
                            return value + ' %';
                        }
                    }
                }
            }
        })
    </script>
  </body>
</html>
