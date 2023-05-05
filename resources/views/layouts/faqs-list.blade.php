@extends('master')
@section('content')
    <!-- ======= Side Section ======= -->
    <section id="side" class="d-flex align-items-center ">
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
                    <h3>Liste des questions et réponses</h3>
                </div>

                <div class="row content">
                    <div class="col mb-3 text-end">
                        <a href="{{ route('faq') }}#form" class="btn btn-light">AJOUTER UNE QUESTION <i
                            class="fa-solid fa-plus"></i></a>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr class="table-secondary">
                                    <th scope="col">#</th>
                                    <th scope="col">Question</th>
                                    <th scope="col">Réponse</th>
                                    <th scope="col">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                {{-- @foreach ($faqs as $key => $faq)
                                    <tr>
                                        <th scope="row">{{ $key + 1 }}</th>
                                        <td>{{ $faq->name }}</td>
                                        <td>{{ $faq->birthDate }}</td>
                                        <td>
                                            <button type="submit" title="modifier" class="btn"><i class="fa-solid fa-pen-to-square"></i></button>
                                            <button type="submit" title="supprimer" class="btn text-danger"><i class="fa-solid fa-trash"></i></button>
                                        </td>
                                    </tr>
                                @endforeach --}}
                                <tr>
                                    <th scope="row">{{ $key + 1 </th>
                                    <td>{{ $driver->name </td>
                                    <td>{{ $driver->birthDate </td>
                                    <td>
                                        <button type="submit" title="modifier" class="btn"><i class="fa-solid fa-pen-to-square"></i></button>
                                        <button type="submit" title="supprimer" class="btn text-danger"><i class="fa-solid fa-trash"></i></button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </section><!-- End Form Section -->
    </main><!-- End #main -->
@endsection
