<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- Bootstrap Icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">


    <!-- my style -->
    <link rel="stylesheet" href="/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link href="/css/carousel.css" rel="stylesheet">
    <title>BTA | {{ $title }}</title>
</head>

<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-lg-5">
                <div class="mx-5 pb-5 content_center">
                    <img src="/img/btq.png" alt="..." height="60" width="400">
                </div>
                <main class="form-registration">
                    <h1 class="h2 mb-3 fw-normal text-center">Form Registrasi</h1>
                    <form action="/register" method="post">
                        @csrf
                        <div class="form-floating">
                            <input type="text" name="name"
                                class="form-control rounded 
                                @error('name') is-invalid @enderror"
                                id="name" placeholder="Name" required value="{{ old('name') }}">
                            <label for="name">Nama</label>
                            @error('name')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-floating mt-4">
                            <input type="email" name="email"
                                class="form-control rounded @error('email') is-invalid @enderror" id="email"
                                placeholder="name@example.com" required value="{{ old('email') }}">
                            <label for="email">Alamat Email</label>
                            @error('email')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-floating mt-4">
                            <input type="password" name="password"
                                class="form-control rounded @error('password') is-invalid @enderror"
                                id="password" placeholder="Password" required>
                            <label for="password">Kata Sandi</label>
                            @error('password')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-floating mt-4">
                            <input type="password" name="password"
                                class="form-control rounded @error('password') is-invalid @enderror"
                                id="password" placeholder="Password" required>
                            <label for="password">Konfirmasi Sandi</label>
                            @error('password')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        {{-- <div class="form-floating">
                            <input type="is_ustadz" name="is_ustadz"
                                class="form-control @error('is_ustadz') is-invalid @enderror" id="is_ustadz" placeholder="1"
                                required value="{{ old('is_ustadz') }}">
                            <label for="is_ustadz">Ketik 1 Untuk Ustadz</label>
                            @error('is_ustadz')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div> --}}

                        <button class="w-100 btn btn-lg btn-primary mt-5" type="submit">Register</button>
                    </form>
                    <h6 class="d-block text-center mt-3 pb-5">Already Registed? <a href="/login">Login</a></h6>
                </main>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>

</body>

</html>
