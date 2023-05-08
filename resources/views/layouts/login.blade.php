<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <title>V-Driver</title>
</head>

<body>
    <main id="main">
        <!-- ======= Login Section ======= -->
        <section id="form" class="form">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h3>Connexion</h3>
                </div>

                <div class="row content">

                    <form method="POST" action="{{ route('administrator-login') }}">
                        @csrf
                        <div class="row justify-content-around">
                            <div class="col-lg-5">
                                <div class="form-col">
                                    <div class="mb-3">
                                        <label for="email" class="form-label">Identifiant :</label>
                                        <input type="email" name="email" class="form-control" id="email"
                                            value="{{ old('email') }}" id="email">

                                    </div>
                                    <div class="mb-3">
                                        <label for="password" class="form-label">Mot de passe :</label>
                                        <input type="password" name="password"
                                            class="form-control @error('password') is-invalid @enderror"
                                            value="{{ old('password') }}" id="password">

                                    </div>
                                    @if ($errors->has('email') || $errors->has('password'))
                                        <div class="text-danger">Email ou mot de passe invalide</div>
                                    @endif
                                    <div class="d-grid">
                                        <button type="submit" class="v-driver-btn-outline-primary">Connexion <i
                                                class="fa-solid fa-sign-in"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </form>
                </div>

            </div>
        </section><!-- End Form Section -->
    </main><!-- End #main -->

    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/script.js') }}"></script>
</body>

</html>
