@extends('master')
@section('content')
    <!-- ======= Side Section ======= -->
    <section id="side" class="d-flex align-items-center">
        <div class="container">
            <div class="row">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}">ACCUEIL</a></li>
                        <li class="breadcrumb-item active text-white" aria-current="page">FAQs</li>
                    </ol>
                </nav>
            </div>
        </div>
    </section><!-- End Side -->

    <main id="main">
        <!-- ======= Form Section ======= -->
        <section id="form" class="form">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h3>Formulaire de foirs aux quizs</h3>
                </div>

                <div class="row content">
                    <div class="row mb-3">
                        <h4 class="text-uppercase"><i class="fa-solid fa-clipboard-question"></i> Enregistrement des quizs et réponses</h4>
                    </div>
                    <form method="POST" action="{{ route('faq-store') }}">
                        @csrf
                        <div class="row justify-content-around">
                            <div class="col-lg-8">
                                <div class="form-col">
                                    <div class="mb-3">
                                        <label for="quiz" class="form-label">Question :</label>
                                        <input type="text" name="quiz"
                                            class="form-control @error('quiz') is-invalid @enderror" id="quiz"
                                            value="{{ old('quiz') }}" id="quiz">
                                        @if ($errors->has('quiz'))
                                            <div class="text-danger">{{ $errors->first('quiz') }}</div>
                                        @endif
                                    </div>
                                    <div class="mb-3">
                                        <label for="answer" class="form-label">Réponse :</label>
                                        <textarea name="answer" id="answer" cols="30" rows="10"
                                            class="form-control @error('answer') is-invalid @enderror">{{ old('answer') }}</textarea>
                                        @if ($errors->has('answer'))
                                            <div class="text-danger">{{ $errors->first('answer') }}</div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex justify-content-end mt-3">
                            <button type="submit" class="v-driver-btn-outline-primary">Sauvegerder <i
                                    class="fa-solid fa-floppy-disk"></i></button>
                        </div>
                    </form>
                </div>

            </div>
        </section><!-- End Form Section -->
    </main><!-- End #main -->
@endsection
