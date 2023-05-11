<?php if (!isset($vehicle)) {
    $vehicle = Session::get('vehicle');
}
if (!isset($driver)) {
    $driver = Session::get('driver');
}

?>

@extends('admin')
@section('admin-content')
    <main id="main">
        <!-- ======= Form Section ======= -->
        <section id="form" class="form">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h3>Details conducteur</h3>

                </div>

                <div class="row content">
                    <div class="row mb-3">
                        <h4 class="text-uppercase"> <i class="fa-solid fa-user-tie"></i> Information sur le conducteur</h4>
                    </div>
                    <form method="POST" action="{{ route('driver-update', $driver->id) }}">
                        @csrf
                        <div class="row justify-content-between">
                            <div class="col-lg-6">
                                <div class="form-col">
                                    <div class="mb-3">
                                        <label for="name" class="form-label">Nom et Prénoms :</label>
                                        <input type="text" name="name"
                                            class="form-control @error('name') is-invalid @enderror" id="name"
                                            value="{{ old('name') ?? ($driver && $driver != null ? $driver->name : null) }}"
                                            id="name">
                                        @if ($errors->has('name'))
                                            <div class="text-danger">{{ $errors->first('name') }}</div>
                                        @endif
                                    </div>
                                    <div class="mb-3">
                                        <label for="gender" class="form-label">Sexe :</label>
                                        <select class="form-select @error('gender') is-invalid @enderror" name="gender"
                                            id="gender" value="{{ old('gender') }}" id="gender">
                                            <option disabled selected>Selectionner votre sexe</option>
                                            <option value="masculin"
                                                {{ old('gender') == 'masculin' ? 'selected' : ($driver && $driver != null ? ($driver->gender == 'masculin' ? 'selected' : null) : null) }}>
                                                Masculin</option>
                                            <option value="feminin"
                                                {{ old('gender') == 'feminin' ? 'selected' : ($driver && $driver != null ? ($driver->gender == 'feminin' ? 'selected' : null) : null) }}>
                                                Féminin</option>
                                        </select>
                                        @if ($errors->has('gender'))
                                            <div class="text-danger">{{ $errors->first('gender') }}</div>
                                        @endif
                                    </div>
                                    <div class="mb-3">
                                        <label for="birthDate" class="form-label">Date de naissance :</label>
                                        <input type="date" name="birthDate"
                                            class="form-control @error('birthDate') is-invalid @enderror" id="birthDate"
                                            value="{{ old('birthDate') ?? ($driver && $driver != null ? $driver->birthDate : null) }}"
                                            id="birthDate">
                                        @if ($errors->has('birthDate'))
                                            <div class="text-danger">{{ $errors->first('birthDate') }}</div>
                                        @endif
                                    </div>
                                    <div class="mb-3">
                                        <label for="birthPlace" class="form-label">Lieu de naissance :</label>
                                        <input type="text" name="birthPlace"
                                            class="form-control @error('birthPlace') is-invalid @enderror" id="birthPlace"
                                            value="{{ old('birthPlace') ?? ($driver && $driver != null ? $driver->birthPlace : null) }}"
                                            id="birthPlace">
                                        @if ($errors->has('birthPlace'))
                                            <div class="text-danger">{{ $errors->first('birthPlace') }}</div>
                                        @endif
                                    </div>
                                    <div class="mb-3">
                                        <label for="address" class="form-label">Lieu de résidence :</label>
                                        <input type="text" name="address"
                                            class="form-control @error('address') is-invalid @enderror" id="address"
                                            value="{{ old('address') ?? ($driver && $driver != null ? $driver->address : null) }}"
                                            id="address">
                                        @if ($errors->has('address'))
                                            <div class="text-danger">{{ $errors->first('address') }}</div>
                                        @endif
                                    </div>
                                    <div class="mb-3">
                                        <label for="district" class="form-label">Secteur/District :</label>
                                        <input type="text" name="district"
                                            class="form-control @error('district') is-invalid @enderror" id="district"
                                            value="{{ old('district') ?? ($driver && $driver != null ? $driver->district : null) }}"
                                            id="district">
                                        @if ($errors->has('district'))
                                            <div class="text-danger">{{ $errors->first('district') }}</div>
                                        @endif
                                    </div>
                                    <div class="mb-3">
                                        <label for="commune" class="form-label">Commune/Préfecture :</label>
                                        <input type="text" name="commune"
                                            class="form-control @error('commune') is-invalid @enderror"
                                            value="{{ old('commune') ?? ($driver && $driver != null ? $driver->commune : null) }}"
                                            id="commune">
                                        @if ($errors->has('commune'))
                                            <div class="text-danger">{{ $errors->first('commune') }}</div>
                                        @endif
                                    </div>
                                    <div class="mb-3">
                                        <label for="village" class="form-label">Sous-préfecture/Quartier :</label>
                                        <input type="text" name="village"
                                            class="form-control @error('village') is-invalid @enderror"
                                            value="{{ old('village') ?? ($driver && $driver != null ? $driver->village : null) }}"
                                            id="village">
                                        @if ($errors->has('village'))
                                            <div class="text-danger">{{ $errors->first('village') }}</div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 ">
                                <div class="form-col">
                                    <div class="mb-3">
                                        <label for="region" class="form-label">Région :</label>
                                        <input type="text" name="region"
                                            class="form-control @error('region') is-invalid @enderror" id="region"
                                            value="{{ old('region') ?? ($driver && $driver != null ? $driver->region : null) }}">
                                        @if ($errors->has('region'))
                                            <div class="text-danger">{{ $errors->first('region') }}</div>
                                        @endif
                                    </div>
                                    <div class="mb-3">
                                        <label for="email" class="form-label">Adresse email :</label>
                                        <input type="email" name="email"
                                            class="form-control @error('email') is-invalid @enderror" id="email"
                                            value="{{ old('email') ?? ($driver && $driver != null ? $driver->email : null) }}">
                                        @if ($errors->has('email'))
                                            <div class="text-danger">{{ $errors->first('email') }}</div>
                                        @endif
                                    </div>
                                    <div class="mb-3">
                                        <label for="permis" class="form-label">Numéro permis de conduire :</label>
                                        <input type="text" name="permis"
                                            class="form-control @error('permis') is-invalid @enderror" id="permis"
                                            value="{{ old('permis') ?? ($driver && $driver != null ? $driver->permis : null) }}"permis>
                                        @if ($errors->has('permis'))
                                            <div class="text-danger">{{ $errors->first('permis') }}</div>
                                        @endif
                                    </div>
                                    <div class="mb-3">
                                        <label for="phoneNumber" class="form-label">Téléphone :</label>
                                        <input type="text" name="phoneNumber"
                                            class="form-control @error('phoneNumber') is-invalid @enderror"
                                            id="phoneNumber"
                                            value="{{ old('phoneNumber') ?? ($driver && $driver != null ? $driver->phoneNumber : null) }}">
                                        @if ($errors->has('phoneNumber'))
                                            <div class="text-danger">{{ $errors->first('phoneNumber') }}</div>
                                        @endif
                                    </div>
                                    <div class="mb-3">
                                        <label for="passport" class="form-label">NCI/Passeport :</label>
                                        <input type="text" name="passport"
                                            class="form-control @error('passport') is-invalid @enderror" id="passport"
                                            value="{{ old('passport') ?? ($driver && $driver != null ? $driver->passport : null) }}">
                                        @if ($errors->has('passport'))
                                            <div class="text-danger">{{ $errors->first('passport') }}</div>
                                        @endif
                                    </div>
                                    <div class="mb-3">
                                        <label for="zip" class="form-label">Adresse postale :</label>
                                        <input type="text" name="zip"
                                            class="form-control @error('zip') is-invalid @enderror"
                                            value="{{ old('zip') ?? ($driver && $driver != null ? $driver->zip : null) }}">
                                        @if ($errors->has('zip'))
                                            <div class="text-danger">{{ $errors->first('zip') }}</div>
                                        @endif
                                    </div>
                                    <div class="mb-3">
                                        <label for="nif" class="form-label">NIF :</label>
                                        <input type="text" name="nif"
                                            class="form-control @error('nif') is-invalid @enderror" id="nif"
                                            value="{{ old('nif') ?? ($driver && $driver != null ? $driver->nif : null) }}">
                                        @if ($errors->has('nif'))
                                            <div class="text-danger">{{ $errors->first('nif') }}</div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex justify-content-between mt-3">
                            <span></span>
                            <button type="submit" class="v-driver-btn-outline-primary">Mettre à jour <i
                                    class="fa-solid fa-floppy-disk"></i></button>
                        </div>
                    </form>
                </div>


                <div class="row content mt-5">
                    <div class="row mb-3">
                        <h4 class="text-uppercase"> <i class="fa-solid fa-user-tie"></i> Liste des véhicules
                        </h4>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr class="table-secondary">
                                    <th scope="col">#</th>
                                    <th scope="col">Marque</th>
                                    <th scope="col">Genre</th>
                                    <th scope="col">Type</th>
                                    <th scope="col">Chassis</th>
                                    <th scope="col">Propriétaire</th>
                                    <th scope="col">Contact</th>
                                    <th scope="col">Actions</th>

                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($vehicles as $key => $vehicle)
                                    <tr>
                                        <th scope="row">{{ $key + 1 }}</th>
                                        <td>{{ $vehicle->manufacturer }}</td>
                                        <td>{{ $vehicle->genre }}</td>
                                        <td>{{ $vehicle->type }}</td>
                                        <td>{{ $vehicle->chassis }}</td>
                                        <td>{{ $vehicle->owner->name }}</td>
                                        <td>{{ $vehicle->owner->email }} / {{ $vehicle->owner->phoneNumber }}</td>

                                        <td class="d-flex">

                                            <a href="#" title="modifier" class="btn"><i
                                                    class="fa-solid fa-info-circle"></i></a>
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
    <script>
        document.getElementById('form').scrollIntoView();
    </script>
@endsection
