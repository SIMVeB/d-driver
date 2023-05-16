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
                    <h3>Liste des utilisateurs</h3>
                </div>

                <div class="d-flex justify-content-end mb-2">
                    <a href="{{ route('administrator-register') }}" class="v-driver-btn-outline-primary">Nouveau <i
                            class="fa-solid fa-plus"></i></a>
                </div>

                <div class="row content">
                    <div class="col-lg-6 mb-2">
                        <div class="form-control">
                            <form method="GET" class="form-inline" action="{{ route('users-index-filtering') }}">
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
                                    <th scope="col">@sortablelink('email', 'Email') </th>
                                    <th scope="col">@sortablelink('role', 'Role') </th>
                                    <th scope="col">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if (!empty($users) && $users->count())
                                    @foreach ($users as $key => $user)
                                        <tr>
                                            <th scope="row">{{ $key + 1 }}</th>
                                            <td>{{ $user->name }}</td>
                                            <td>{{ $user->email }}</td>
                                            <td>{{ $user->role }}</td>
                                            <td class="d-flex">
                                                <a href="{{ route('user-edit', $user) }}" title="modifier" class="btn"><i
                                                        class="fa-solid fa-pen-to-square"></i></a>

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
                        {!! $users->appends(Request::except('page'))->render() !!}
                    </div>
                </div>

            </div>
        </section><!-- End Form Section -->
    </main><!-- End #main -->
@endsection
