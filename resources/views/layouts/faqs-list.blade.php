@extends('admin')
@section('admin-content')
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
                                @foreach ($faqs as $key => $faq)
                                    <tr>
                                        <th scope="row">{{ $key + 1 }}</th>
                                        <td>{{ $faq->quiz }}</td>
                                        <td>{{ $faq->answer }}</td>
                                        <td class="d-flex">
                                            <a href="{{ route('faqs.edit', $faq) }}" title="modifier" class="btn"><i
                                                    class="fa-solid fa-pen-to-square"></i></a>
                                            <a href="{{ route('faqs.delete', $faq) }}" type="submit" title="supprimer"
                                                class="btn text-danger"><i class="fa-solid fa-trash"></i></a>
                                        </td>
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
