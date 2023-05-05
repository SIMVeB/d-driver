<?php $vehicle = Session::get('vehicle');
$owner = Session::get('owner'); ?>

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
                    <h3>Formulaire de foirs aux questions</h3>
                </div>

                <div class="row content">
                    <div class="row mb-3">
                        <h4 class="text-uppercase"><i class="fa-solid fa-clipboard-question"></i> Enregistrement des questions et réponses</h4>
                    </div>
                    <form method="POST" action="{{ route('faq-store') }}" >
                        @csrf
                        <div class="row justify-content-around">
                            <div class="col-lg-8">
                                <div class="form-col">
                                    <div class="mb-3">
                                        <label for="question" class="form-label">Question :</label>
                                        <input type="text" name="question"
                                            class="form-control @error('question') is-invalid @enderror" id="question"
                                            value="{{ old('question') }}" id="question">
                                        @if ($errors->has('question'))
                                            <div class="text-danger">{{ $errors->first('question') }}</div>
                                        @endif
                                    </div>
                                    <div class="mb-3">
                                        <label for="response" class="form-label">Réponse :</label>
                                        <textarea name="response" id="response" cols="30" rows="10" class="form-control @error('response') is-invalid @enderror"
                                        value="{{ old('response') }}"></textarea>
                                        @if ($errors->has('response'))
                                            <div class="text-danger">{{ $errors->first('response') }}</div>
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
    <script>
        document.getElementById('form').scrollIntoView();
    </script>
@endsection
