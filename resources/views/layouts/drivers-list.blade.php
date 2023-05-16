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
                    <h3>Liste des conducteurs</h3>
                </div>

                <div class="row content">
                    <div class=" col-lg-6 mb-2 ">
                        <div class="form-control">
                            <form method="GET" class="form-inline" action="{{ route('drivers-index-filtering') }}">
                                @csrf
                                <div class="search">
                                    @csrf
                                    <input type="text" name="filter" placeholder="Rechercher ici ..."
                                        value="{{ $filter }}">
                                    <button type="submit "><i role="button" class='fa-solid fa-search'></i></button>
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
                                    <th scope="col">@sortablelink('permis', 'Numéro permis') </th>
                                    <th scope="col">@sortablelink('email', 'Contact') </th>
                                    <th scope="col">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if (!empty($drivers) && $drivers->count())
                                    @foreach ($drivers as $key => $driver)
                                        <tr>
                                            <th scope="row">{{ $key + 1 }}</th>
                                            <td>{{ $driver->name }}</td>
                                            <td>{{ $driver->birthDate }}</td>
                                            <td>{{ $driver->birthPlace }}</td>
                                            <td>{{ $driver->permis }}</td>
                                            <td>{{ $driver->email }} / {{ $driver->phoneNumber }}</td>
                                            <td class="d-flex">
                                                <a href="{{ route('driver-edit', $driver) }}" title="modifier"
                                                    class="btn"><i class="fa-solid fa-pen-to-square"></i></a>
                                                <a href="{{ route('driver-info', $driver) }}" title="modifier"
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
                    <div class="d-flex justify-content-end">
                        {!! $drivers->appends(Request::except('page'))->render() !!}
                    </div>
                </div>

            </div>
        </section><!-- End Form Section -->
    </main><!-- End #main -->
@endsection
