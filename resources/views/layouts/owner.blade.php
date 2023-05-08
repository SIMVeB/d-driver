<?php
if (!isset($vehicle)) {
    $vehicle = Session::get('vehicle');
}
if (!isset($owner)) {
    $owner = Session::get('owner');
}
?>
@extends('master')
@section('content')
    <!-- ======= Side Section ======= -->
    <section id="side" class="d-flex align-items-center">
        <div class="container">
            <div class="row">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}">ACCUEIL</a></li>
                        <li class="breadcrumb-item active text-white" aria-current="page">INSCRIPTION</li>
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
                    <h3>Formulaire d'inscription</h3>
                </div>

                <div class="row content">
                    <div class="row mb-3">
                        <h4 class="text-uppercase"><i class="fa-solid fa-user"></i> Information sur le propriétaire</h4>
                    </div>
                    <form method="POST"
                        action="{{ $owner && $owner != null ? route('owner-update', $owner->id) : route('owner-store') }}">
                        @csrf

                        <div class="row justify-content-between">
                            <div class="col-lg-6">
                                <div class="form-col">
                                    <div class="mb-3">
                                        <label for="name" class="form-label  @error('name') is-invalid @enderror">Nom
                                            et Prénoms :</label>
                                        <input type="text" name="name" class="form-control" id="name"
                                            value="{{ old('name') ?? ($owner && $owner != null ? $owner->name : null) }}">
                                        @if ($errors->has('name'))
                                            <div class="text-danger">{{ $errors->first('genre') }}</div>
                                        @endif
                                    </div>
                                    <div class="mb-3">
                                        <label for="gender" class="form-label ">Sexe :</label>
                                        <select name="gender" class="form-select  @error('gender') is-invalid @enderror"
                                            id="gender">
                                            <option disabled selected>Selectionner votre sexe</option>
                                            <option value="masculin"
                                                {{ old('gender') == 'masculin' ? 'selected' : ($owner && $owner != null ? ($owner->gender == 'masculin' ? 'selected' : null) : null) }}>
                                                Masculin</option>
                                            <option value="feminin"
                                                {{ old('gender') == 'feminin' ? 'selected' : ($owner && $owner != null ? ($owner->gender == 'feminin' ? 'selected' : null) : null) }}>
                                                Féminin</option>
                                        </select>
                                        @if ($errors->has('gender'))
                                            <div class="text-danger">{{ $errors->first('gender') }}</div>
                                        @endif
                                    </div>
                                    <div class="mb-3">
                                        <label for="birthDate" class="form-label">Date de naissance :</label>
                                        <input type="date" name="birthDate"
                                            value="{{ old('birthDate') ?? ($owner && $owner != null ? $owner->birthDate : null) }}"
                                            class="form-control  @error('birthDate') is-invalid @enderror" id="birthDate">
                                        @if ($errors->has('birthDate'))
                                            <div class="text-danger">{{ $errors->first('birthDate') }}</div>
                                        @endif
                                    </div>
                                    <div class="mb-3">
                                        <label for="birthPlace" class="form-label">Lieu de naissance :</label>
                                        <input type="text" name="birthPlace"
                                            value="{{ old('birthPlace') ?? ($owner && $owner != null ? $owner->birthPlace : null) }}"
                                            class="form-control  @error('birthPlace') is-invalid @enderror" id="birthPlace">
                                        @if ($errors->has('birthPlace'))
                                            <div class="text-danger">{{ $errors->first('birthPlace') }}</div>
                                        @endif
                                    </div>
                                    <div class="mb-3">
                                        <label for="profession" class="form-label">Profession :</label>
                                        <input type="text" name="profession"
                                            value="{{ old('profession') ?? ($owner && $owner != null ? $owner->profession : null) }}"
                                            class="form-control @error('profession') is-invalid @enderror" id="profession">
                                        @if ($errors->has('profession'))
                                            <div class="text-danger">{{ $errors->first('profession') }}</div>
                                        @endif
                                    </div>
                                    <div class="mb-3">
                                        <label for="personality" class="form-label">Personnalité :</label>
                                        <select name="personality"
                                            class="form-select @error('personality') is-invalid @enderror" id="personality">
                                            <option disabled selected>Selectionner une personnalité</option>
                                            <option value="phisique"
                                                {{ old('personality') == 'phisique' ? 'selected' : ($owner && $owner != null ? ($owner->personality == 'phisique' ? 'selected' : null) : null) }}>
                                                Physique</option>
                                            <option value="morale"
                                                {{ old('personality') == 'morale' ? 'selected' : ($owner && $owner != null ? ($owner->personality == 'morale' ? 'selected' : null) : null) }}>
                                                Morale</option>
                                        </select>
                                        @if ($errors->has('personality'))
                                            <div class="text-danger">{{ $errors->first('personality') }}</div>
                                        @endif
                                    </div>
                                    <div class="mb-3">
                                        <label for="address" class="form-label">Lieu de résidence :</label>
                                        <input type="text" name="address"
                                            value="{{ old('address') ?? ($owner && $owner != null ? $owner->address : null) }}"
                                            class="form-control @error('address') is-invalid @enderror" id="address">
                                        @if ($errors->has('address'))
                                            <div class="text-danger">{{ $errors->first('address') }}</div>
                                        @endif
                                    </div>
                                    <div class="mb-3">
                                        <label for="district" class="form-label">Secteur/District :</label>
                                        <input type="text" name="district"
                                            value="{{ old('district') ?? ($owner && $owner != null ? $owner->district : null) }}"
                                            class="form-control @error('district') is-invalid @enderror" id="district">
                                        @if ($errors->has('district'))
                                            <div class="text-danger">{{ $errors->first('district') }}</div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 ">
                                <div class="form-col">
                                    <div class="mb-3">
                                        <label for="village" class="form-label">Sous-préfecture/Quartier :</label>
                                        <input type="text" name="village"
                                            value="{{ old('village') ?? ($owner && $owner != null ? $owner->village : null) }}"
                                            class="form-control @error('village') is-invalid @enderror" id="village">
                                        @if ($errors->has('village'))
                                            <div class="text-danger">{{ $errors->first('village') }}</div>
                                        @endif
                                    </div>
                                    <div class="mb-3">
                                        <label for="commune" class="form-label">Commune/Préfecture :</label>
                                        <input type="text" name="commune"
                                            value="{{ old('commune') ?? ($owner && $owner != null ? $owner->commune : null) }}"
                                            class="form-control @error('commune') is-invalid @enderror" id="commune">
                                        @if ($errors->has('commune'))
                                            <div class="text-danger">{{ $errors->first('commune') }}</div>
                                        @endif
                                    </div>
                                    <div class="mb-3">
                                        <label for="region" class="form-label">Région :</label>
                                        <input type="text" name="region"
                                            value="{{ old('region') ?? ($owner && $owner != null ? $owner->region : null) }}"
                                            class="form-control @error('region') is-invalid @enderror" id="region">
                                        @if ($errors->has('region'))
                                            <div class="text-danger">{{ $errors->first('region') }}</div>
                                        @endif
                                    </div>
                                    <div class="mb-3">
                                        <label for="email" class="form-label">Adresse email :</label>
                                        <input type="email" name="email"
                                            value="{{ old('email') ?? ($owner && $owner != null ? $owner->email : null) }}"
                                            class="form-control @error('email') is-invalid @enderror" id="email">
                                        @if ($errors->has('email'))
                                            <div class="text-danger">{{ $errors->first('email') }}</div>
                                        @endif
                                    </div>
                                    <div class="mb-3">
                                        <label for="phoneNumber" class="form-label">Téléphone :</label>
                                        <input type="text" name="phoneNumber"
                                            value="{{ old('phoneNumber') ?? ($owner && $owner != null ? $owner->phoneNumber : null) }}"
                                            class="form-control @error('phoneNumber') is-invalid @enderror"
                                            id="phoneNumber">
                                        @if ($errors->has('phoneNumber'))
                                            <div class="text-danger">{{ $errors->first('phoneNumber') }}</div>
                                        @endif
                                    </div>
                                    <div class="mb-3">
                                        <label for="passport" class="form-label">NCI/Passeport :</label>
                                        <input type="text" name="passport"
                                            value="{{ old('passport') ?? ($owner && $owner != null ? $owner->passport : null) }}"
                                            class="form-control @error('passport') is-invalid @enderror" id="passport">
                                        @if ($errors->has('passport'))
                                            <div class="text-danger">{{ $errors->first('passport') }}</div>
                                        @endif
                                    </div>
                                    <div class="mb-3">
                                        <label for="zip" class="form-label">Adresse postale :</label>
                                        <input type="text" name="zip"
                                            value="{{ old('zip') ?? ($owner && $owner != null ? $owner->zip : null) }}"
                                            class="form-control @error('zip') is-invalid @enderror" id="zip">
                                        @if ($errors->has('zip'))
                                            <div class="text-danger">{{ $errors->first('zip') }}</div>
                                        @endif
                                    </div>
                                    <div class="mb-3">
                                        <label for="nif" class="form-label">NIF :</label>
                                        <input type="text" name="nif"
                                            value="{{ old('nif') ?? ($owner && $owner != null ? $owner->nif : null) }}"
                                            class="form-control @error('nif') is-invalid @enderror" id="nif">
                                        @if ($errors->has('nif'))
                                            <div class="text-danger">{{ $errors->first('nif') }}</div>
                                        @endif
                                    </div>
                                    <div>
                                        <input type="text" name="vehicle_id"
                                            value="{{ $vehicle ? $vehicle->id : old('vehicle_id') }}"
                                            class="form-control" id="nif" hidden>
                                        @if ($errors->has('vehicle_id'))
                                            <div class="text-danger">{{ $errors->first('vehicle_id') }}</div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex justify-content-between mt-3">
                            <a href="{{ $vehicle && $vehicle != null ? route('vehicle-back', $vehicle->id) : '#' }}"
                                class="v-driver-btn-outline-primary"><i class="fa-solid fa-arrow-left-long"></i> Etape
                                précédente</a>

                            <button type="submit" class="v-driver-btn-outline-primary">Etape suivante <i
                                    class="fa-solid fa-arrow-right-long"></i></button>
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
