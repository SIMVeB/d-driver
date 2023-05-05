@extends('master')
@section('content')
    <!-- ======= Side Section ======= -->
    <section id="side" class="d-flex align-items-center ">
        <div class="container">
            <div class="row">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}">ACCUEIL</a></li>
                        <li class="breadcrumb-item active text-white" aria-current="page">CONDUCTEURS</li>
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
                    <h3>Liste des abonnés</h3>
                </div>

                <div class="row content">
                    {{-- <div class="row mb-3">
                    <h4 class="text-uppercase"><i class="fa-solid fa-user-tie"></i> Liste des conducteurs</h4>
                </div> --}}
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr class="table-secondary">
                                    <th scope="col">#</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Date</th>

                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($newsLetters as $key => $email)
                                    <tr>
                                        <th scope="row">{{ $key + 1 }}</th>
                                        <td>{{ $email->email }}</td>
                                        <td>{{ $email->created_at }}</td>
                                    </tr>
                                @endforeach


                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </section><!-- End Form Section -->
    </main><!-- End #main -->
@endsection
