<?php
if (!isset($user)) {
    $user = Session::get('user');
}
?>
@extends('admin')
@section('admin-content')
    <main id="main">
        <!-- ======= Login Section ======= -->
        <section id="form" class="form">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h3>Création d'utilisateur</h3>
                </div>

                <div class="row content">

                    <form method="POST" action="{{ route('administrator-register') }}">
                        @csrf
                        <div class="row justify-content-around">
                            <div class="col-lg-5">
                                <div class="form-col">
                                    <div class="mb-3">
                                        <label for="name" class="form-label ">Nom
                                            et Prénoms :</label>
                                        <input type="text" name="name"
                                            class="form-control @error('name') is-invalid @enderror" id="name"
                                            value="{{ old('name') ?? ($user && $user != null ? $user->name : null) }}">
                                        @if ($errors->has('name'))
                                            <div class="text-danger">{{ $errors->first('genre') }}</div>
                                        @endif
                                    </div>

                                    <div class="mb-3">
                                        <label for="role" class="form-label">Rôle :</label>
                                        <select name="role" class="form-select @error('role') is-invalid @enderror"
                                            id="role">
                                            <option disabled selected>Selectionner une personnalité</option>
                                            <option value="manager"
                                                {{ old('role') == 'manager' ? 'selected' : ($user != null ? ($user->role == 'manager' ? 'selected' : null) : null) }}>
                                                Manageur</option>
                                            <option value="admin"
                                                {{ old('role') == 'admin' ? 'selected' : ($user != null ? ($user->role == 'admin' ? 'selected' : null) : null) }}>
                                                Administrateur</option>
                                            <option value="super admin"
                                                {{ old('role') == 'super admin' ? 'selected' : ($user != null ? ($user->role == 'super admin' ? 'selected' : null) : null) }}>
                                                Super Administrateur</option>
                                        </select>
                                        @if ($errors->has('role'))
                                            <div class="text-danger">{{ $errors->first('role') }}</div>
                                        @endif
                                    </div>

                                    <div class="mb-3">
                                        <label for="email" class="form-label">Identifiant :</label>
                                        <input type="email" name="email"
                                            class="form-control @error('email') is-invalid @enderror" id="email"
                                            value="{{ old('email') }}" id="email">
                                        @if ($errors->has('email'))
                                            <div class="text-danger">{{ $errors->first('email') }}</div>
                                        @endif

                                    </div>
                                    <div class="mb-3">
                                        <label for="password" class="form-label ">Mot de passe :</label>
                                        <input type="password" name="password"
                                            class="form-control @error('password') is-invalid @enderror"
                                            value="{{ old('password') }}" id="password">
                                        @if ($errors->has('name'))
                                            <div class="text-danger">{{ $errors->first('genre') }}</div>
                                        @endif
                                    </div>

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
    </main>
    <!-- End #main --
@endsection
