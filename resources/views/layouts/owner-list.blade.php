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
                    <h3>Liste des propriétaires</h3>
                </div>

                <div class="row content">
                    <div class="col-lg-6 mb-2">
                        <div class="form-control">
                            <form method="GET" class="form-inline" action="{{ route('owners-index-filtering') }}">
                                @csrf
                                <div class="search">
                                    @csrf
                                    <input type="text" name="filter" placeholder="Rechercher ici ..."
                                        value="{{ $filter }}">
                                    <button type="submit"><i role="button" class='fa-solid fa-search'></i></button>
                                </div>
                            </form>
                        </div>

                    </div>
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr class="table-secondary">
                                    <th scope="col">#</th>
                                    <th scope="col">@sortablelink('name', 'Nom & Prénom') </th>
                                    <th scope="col">@sortablelink('birthDate', 'Date de naissance') </th>
                                    <th scope="col">@sortablelink('birthPlace', 'Lieu de résidence') </th>
                                    <th scope="col">@sortablelink('email', 'Email') </th>
                                    <th scope="col">@sortablelink('phoneNumber', 'Téléphone') </th>
                                    <th scope="col">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if (!empty($owners) && $owners->count())
                                    @foreach ($owners as $key => $owner)
                                        <tr>
                                            <th scope="row">{{ $key + 1 }}</th>
                                            <td>{{ $owner->name }}</td>
                                            <td>{{ $owner->birthDate }}</td>
                                            <td>{{ $owner->birthPlace }}</td>
                                            <td>{{ $owner->email }}</td>
                                            <td>{{ $owner->phoneNumber }}</td>
                                            <td class="d-flex">
                                                <a href="{{ route('owner-edit', $owner) }}" title="modifier"
                                                    class="btn"><i class="fa-solid fa-pen-to-square"></i></a>
                                                <a href="{{ route('owner-info', $owner) }}" title="modifier"
                                                    class="btn"><i class="fa-solid fa-info-circle"></i></a>
                                            </td>
                                        </tr>
                                    @endforeach
                                @else
                                    <tr>
                                        <td colspan="7">Aucun enrégistrement trouvé</td>
                                    </tr>
                                @endif
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="d-flex justify-content-end">
                    {!! $owners->appends(Request::except('page'))->render() !!}
                </div>
            </div>
        </section><!-- End Form Section -->
    </main><!-- End #main -->
@endsection
