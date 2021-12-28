<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>SurveyIn</title>
  </head>
  <body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <header class="p-3">
        <h1 class="app-logo mb-4"><span class="redff0000">Survey</span><span>In</span></h1>
    </header>

    <main class="finishup-form p-5 justify-content-evenly" style="height: 100%;">
        <img src="{{ asset('images/finishup.png') }}">
        <form runat="server" action={{ route('finishup.process') }} method="POST" enctype="multipart/form-data">
            @csrf
            <h1 class="app-logo mb-4 redff0000 text-center">Finish Up Your Profile</h1>
            <div class="mb-3">
                <input type="text" class="form-control small-input" style="border-color: black; border-width: 1px;" id="name" name="name" placeholder="Name" value="{{ old('name') }}">
                @error('name') <p class="text-danger"><b>{{ $message }}</b></p> @enderror
            </div>

            <div class="mb-3">
                <input type="text" class="form-control small-input" style="border-color: black; border-width: 1px;" id="address" name="address" placeholder="Address" value="{{ old('address') }}">
                @error('address') <p class="text-danger"><b>{{ $message }}</b></p> @enderror
            </div>

            <div class="mb-3">
                <input type="text" class="form-control small-input" style="border-color: black; border-width: 1px;" id="occupation" name="occupation" placeholder="Occupation" value="{{ old('occupation') }}">
                @error('occupation') <p class="text-danger"><b>{{ $message }}</b></p> @enderror
            </div>

            <div class="row g-3 mb-4">
                <label for="gender" class="grayC4C4C4">Gender</label>
                <div class="d-flex" style="margin-top:  4px;">
                    <div style="width: 50%;">
                        <input class="form-check-input" style="width: 30px; height: 30px; border-color: black; border-width: 1px;" value="Female" {{(old('gender') == 'Female') ? 'checked' : ''}} type="radio" name="gender" id="female">
                        <label class="form-check-label grayC4C4C4 mt-2 ml-2" for="female">
                            Female
                        </label>
                    </div>
                    <div>
                        <input class="form-check-input" style="width: 30px; height: 30px; border-color: black; border-width: 1px;" value="Male" {{(old('gender') == 'Male') ? 'checked' : ''}} type="radio" name="gender" id="male">
                        <label class="form-check-label grayC4C4C4 mt-2 ml-2" for="male">
                            Male
                        </label>
                    </div>
                </div>
                @error('gender') <p class="text-danger"><b>{{ $message }}</b></p> @enderror
            </div>

            <div class="mb-3">
                <input type="text" class="form-control small-input" style="border-color: black; border-width: 1px;" id="pob" name="pob" value="{{ old('pob') }}" placeholder="Place of Birth">
                @error('pob') <p class="text-danger"><b>{{ $message }}</b></p> @enderror
            </div>

            <div class="mb-4">
                <input type="date" class="form-control small-input" style="border-color: black; border-width: 1px;" id="dob" name="dob" value="{{ old('dob') }}" placeholder="Date of Birth">
                @error('dob') <p class="text-danger"><b>{{ $message }}</b></p> @enderror
            </div>

            <div class="mb-3">
                <label for="imageinput" class="form-label grayC4C4C4">Choose profile picture</label>
                <input class="form-control" accept="image/*" type="file" id="imageinput" value="{{ old('imageinput') }}" name="imageinput">
                @error('imageinput') <p class="text-danger"><b>{{ $message }}</b></p> @enderror

                <div class="text-center mt-3">
                    <img id="profileimage" src="#" style="width: 0px; height: 0px; border-radius: 50%;object-fit: cover;" />
                </div>
            </div>

            <input type="submit" class="btn bg-blue2f92db white button-input" value="Continue">
        </form>
    </main>

    <script type="text/javascript">
        imageinput.onchange = evt => {
            const [file] = imageinput.files
            if (file) {
                profileimage.src = URL.createObjectURL(file)
                profileimage.style.width = '150px';
                profileimage.style.height = '150px';
            }
        }
    </script>

  </body>
</html>
