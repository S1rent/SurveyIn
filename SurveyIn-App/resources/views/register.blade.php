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

    <main style="height: 100%;" class="login-form p-4">
        <form action={{ route('register.process') }} method="POST">
            @csrf
            <h1 class="app-logo mb-4" style="text-align: center;"><span class="redff0000">Survey</span><span>In</span></h1>

            <div class="mb-3">
                <input type="email" class="form-control big-input" style="border-color: black; border-width: 1px;" id="email" name="email" placeholder="Email" value="{{ old('email') }}">
                @error('email') <p class="text-danger"><b>{{ $message }}</b></p> @enderror
            </div>

            <div class="mb-3">
                <input type="password" class="form-control big-input" style="border-color: black; border-width: 1px;" id="password" name="password" placeholder="Password" value="{{ old('password') }}">
                @error('password') <p class="text-danger"><b>{{ $message }}</b></p> @enderror
            </div>

            <div class="mb-3">
                <input type="password" class="form-control big-input" style="border-color: black; border-width: 1px;" id="confirmpassword" name="confirmpassword" placeholder="Confirm Password" value="{{ old('confirmpassword') }}">
                @error('confirmpassword') <p class="text-danger"><b>{{ $message }}</b></p> @enderror
            </div>

            <div class="row g-3 mb-4">
                <label for="role" class="grayC4C4C4">Select Role</label>
                <div class="d-flex" style="margin-top:  4px;">
                    <div style="width: 50%;">
                        <input class="form-check-input" style="width: 30px; height: 30px; border-color: black; border-width: 1px;" value="0" {{(old('role') == '0') ? 'checked' : ''}} type="radio" name="role" id="creator">
                        <label class="form-check-label grayC4C4C4 mt-2 ml-2" for="creator">
                            Survey Creator
                        </label>
                    </div>
                    <div>
                        <input class="form-check-input" style="width: 30px; height: 30px; border-color: black; border-width: 1px;" value="1" {{(old('role') == '1') ? 'checked' : ''}} type="radio" name="role" id="respondent">
                        <label class="form-check-label grayC4C4C4 mt-2 ml-2" for="respondent">
                            Respondent
                        </label>
                    </div>
                </div>
                @error('role') <p class="text-danger"><b>{{ $message }}</b></p> @enderror
            </div>

            <input type="submit" class="btn bg-blue2f92db white button-input" value="Register">
            <p class="text-center mt-3 text-decoration-none" style="font-weight: 400; font-size: 24px;">Already have an account? <a class="text-decoration-none" href="{{ url('login') }}">Login</a></p>
        </form>
    </main>

  </body>
</html>
