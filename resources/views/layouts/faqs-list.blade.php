<?php
if (!isset($filter)) {
    $filter = Session::get('filter');
}
?>

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
                    <div class="col-md-3">
                        <div class="form-control">
                            <form method="GET" class="form-inline" action="{{ route('faqs-index-filtering') }}">
                                <div class="search">
                                    @csrf
                                    <input type="text" name="filter" placeholder="Rechercher ici ..."
                                        value="{{ $filter }}">
                                        <button type="submit" ><i role="button" class='fa-solid fa-search'></i></button>
                                </div>
                            </form>
                        </div>
                    </div>

                    <div class="col mb-3 text-end">

                        <a href="{{ route('faq') }}#form" class="btn btn-light">AJOUTER UNE QUESTION <i
                                class="fa-solid fa-plus"></i></a>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr class="table-secondary">
                                    <th scope="col">#</th>
                                    <th scope="col">@sortablelink('quiz', 'Question') </th>
                                    <th scope="col">@sortablelink('answer', 'Réponse')</th>
                                    <th scope="col">@sortablelink('status', 'Status')</th>
                                    <th scope="col">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if (!empty($faqs) && $faqs->count())
                                    @foreach ($faqs as $key => $faq)
                                        <tr>
                                            <th scope="row">{{ $key + 1 }}</th>
                                            <td>{{ $faq->quiz }}</td>
                                            <td>{{ $faq->answer }}</td>
                                            <td>
                                                <div class="form-check form-switch">
                                                    @if ($faq->status == true || $faq->status == 1 || $faq->status == '1')
                                                        <span class="v-driver-primary">Affichée</span>
                                                    @else
                                                        <span class="text-danger">Expirée</span>
                                                    @endif

                                                </div>
                                            </td>
                                            <td class="d-flex">
                                                <a href="{{ route('faqs.edit', $faq) }}" title="modifier" class="btn"><i
                                                        class="fa-solid fa-pen-to-square"></i></a>
                                                <a href="{{ route('faqs.delete', $faq) }}" type="submit" title="supprimer"
                                                    class="btn text-danger"><i class="fa-solid fa-trash"></i></a>
                                            </td>
                                        </tr>
                                    @endforeach
                                @else
                                    <tr>
                                        <td colspan="5">Aucun enrégistrement trouvé</td>
                                    </tr>
                                @endif
                            </tbody>
                        </table>

                    </div>
                    <div class="d-flex justify-content-end">
                        {!! $faqs->appends(Request::except('page'))->render() !!}
                    </div>
                </div>

            </div>
        </section><!-- End Form Section -->
    </main><!-- End #main -->
@endsection
