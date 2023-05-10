<?php
if (!isset($vehicle)) {
    $vehicle = Session::get('vehicle');
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
                    <h3>Détail véhicule</h3>
                </div>

                <div class="row content">
                    <div class="row mb-3">
                        <h4 class="text-uppercase"> <i class="fa-solid fa-car-rear"></i> Information sur le véhicule
                        </h4>
                    </div>
                    <form method="POST" action="{{ route('vehicle-modify', $vehicle->id) }}">
                        @csrf
                        <div class="row justify-content-between">
                            <div class="col-lg-6">
                                <div class="form-col">
                                    <div class="mb-3">
                                        <label for="genre" class="form-label">Genre :</label>
                                        <input type="text" name="genre"
                                            class="form-control  @error('genre') is-invalid @enderror" id="genre"
                                            value="{{ old('genre') ?? ($vehicle ? $vehicle->genre : null) }}">
                                        @if ($errors->has('genre'))
                                            <div class="text-danger">{{ $errors->first('genre') }}</div>
                                        @endif
                                    </div>
                                    <div class="mb-3">
                                        <label for="manufacturer" class="form-label">Marque :</label>
                                        <input type="text" name="manufacturer"
                                            class="form-control  @error('manufacturer') is-invalid @enderror"
                                            id="manufacturer"
                                            value="{{ old('manufacturer') ?? ($vehicle ? $vehicle->manufacturer : null) }}">
                                        @if ($errors->has('manufacturer'))
                                            <div class="text-danger">{{ $errors->first('manufacturer') }}</div>
                                        @endif
                                    </div>
                                    <div class="mb-3">
                                        <label for="chassis" class="form-label">Châssis :</label>
                                        <input type="text" name="chassis"
                                            class="form-control @error('chassis') is-invalid @enderror" id="chassis"
                                            value="{{ old('chassis') ?? ($vehicle ? $vehicle->chassis : null) }}">
                                        @if ($errors->has('chassis'))
                                            <div class="text-danger">{{ $errors->first('chassis') }}</div>
                                        @endif
                                    </div>
                                    <div class="mb-3">
                                        <label for="bodywork" class="form-label">Carosserie :</label>
                                        <input type="text" name="bodywork"
                                            class="form-control @error('bodywork') is-invalid @enderror" id="bodywork"
                                            value="{{ old('bodywork') ?? ($vehicle ? $vehicle->bodywork : null) }}">
                                        @if ($errors->has('bodywork'))
                                            <div class="text-danger">{{ $errors->first('bodywork') }}</div>
                                        @endif
                                    </div>
                                    <div class="mb-3">
                                        <label for="serialNumber" class="form-label">Numéro de série :</label>
                                        <input type="text" name="serialNumber"
                                            class="form-control @error('serialNumber') is-invalid @enderror"
                                            id="serialNumber"
                                            value="{{ old('serialNumber') ?? ($vehicle ? $vehicle->serialNumber : null) }}">
                                        @if ($errors->has('serialNumber'))
                                            <div class="text-danger">{{ $errors->first('serialNumber') }}</div>
                                        @endif
                                    </div>
                                    <div class="mb-3">
                                        <label for="type" class="form-label">Type :</label>
                                        <input type="text" name="type"
                                            class="form-control @error('type') is-invalid @enderror" id="type"
                                            value="{{ old('type') ?? ($vehicle ? $vehicle->genre : null) }}">
                                        @if ($errors->has('type'))
                                            <div class="text-danger">{{ $errors->first('type') }}</div>
                                        @endif
                                    </div>
                                    <div class="mb-3">
                                        <label for="bodyworkColor" class="form-label">Couleur carosserie :</label>
                                        <select class="form-select @error('bodyworkColor') is-invalid @enderror"
                                            name="bodyworkColor" id="bodyworkColor">
                                            <option disabled selected>Selectionner une couleur de la carosserie</option>
                                            <option value="Gris"
                                                {{ old('bodyworkColor') == 'Gris' ? 'selected' : ($vehicle ? ($vehicle->bodyworkColor == 'Gris' ? 'selected' : null) : null) }}>
                                                Gris</option>
                                            <option value="Jaune"
                                                {{ old('bodyworkColor') == 'Jaune' ? 'selected' : ($vehicle ? ($vehicle->bodyworkColor == 'Jaune' ? 'selected' : null) : null) }}>
                                                Jaune</option>
                                            <option value="Vert"
                                                {{ old('bodyworkColor') == 'Vert' ? 'selected' : ($vehicle ? ($vehicle->bodyworkColor == 'Vert' ? 'selected' : null) : null) }}>
                                                Vert</option>
                                            <option value="Rouge"
                                                {{ old('bodyworkColor') == 'Rouge' ? 'selected' : ($vehicle ? ($vehicle->bodyworkColor == 'Rouge' ? 'selected' : null) : null) }}>
                                                Rouge</option>
                                            <option value="Bleu"
                                                {{ old('bodyworkColor') == 'Bleu' ? 'selected' : ($vehicle ? ($vehicle->bodyworkColor == 'Bleu' ? 'selected' : null) : null) }}>
                                                Bleu</option>
                                            <option value="Noir"
                                                {{ old('bodyworkColor') == 'Noir' ? 'selected' : ($vehicle ? ($vehicle->bodyworkColor == 'Noir' ? 'selected' : null) : null) }}>
                                                Noir</option>
                                            <option value="Multicolor"
                                                {{ old('bodyworkColor') == 'Multicolor' ? 'selected' : ($vehicle ? ($vehicle->bodyworkColor == 'Multicolor' ? 'selected' : null) : null) }}>
                                                Multicolor
                                            </option>
                                            <option value="Blanc"
                                                {{ old('bodyworkColor') == 'Blanc' ? 'selected' : ($vehicle ? ($vehicle->bodyworkColor == 'Blanc' ? 'selected' : null) : null) }}>
                                                Blanc</option>
                                            <option value="Autre"
                                                {{ old('bodyworkColor') == 'Autre' ? 'selected' : ($vehicle ? ($vehicle->bodyworkColor == 'Autre' ? 'selected' : null) : null) }}>
                                                Autre</option>
                                        </select>
                                        @if ($errors->has('bodyworkColor'))
                                            <div class="text-danger">{{ $errors->first('bodyworkColor') }}</div>
                                        @endif
                                    </div>
                                    <div class="mb-3">
                                        <label for="energy" class="form-label">Energie :</label>
                                        <select class="form-select @error('energy') is-invalid @enderror" name="energy"
                                            id="energy">
                                            <option disabled selected>Selectionner une énergie</option>
                                            <option value="Essence"
                                                {{ old('energy') == 'Essence' ? 'selected' : ($vehicle ? ($vehicle->energy == 'Essence' ? 'selected' : null) : null) }}>
                                                Essence
                                            </option>
                                            <option value="Hybride"
                                                {{ old('energy') == 'Hybride' ? 'selected' : ($vehicle ? ($vehicle->energy == 'Hybride' ? 'selected' : null) : null) }}>
                                                Hybride
                                            </option>
                                            <option value="Gazole"
                                                {{ old('energy') == 'Gazole' ? 'selected' : ($vehicle ? ($vehicle->energy == 'Gazole' ? 'selected' : null) : null) }}>
                                                Gazole
                                            </option>
                                            <option value="Electricité"
                                                {{ old('energy') == 'Electricité' ? 'selected' : ($vehicle ? ($vehicle->energy == 'Electricité' ? 'selected' : null) : null) }}>
                                                Electricité</option>
                                            <option value="Biocarburant"
                                                {{ old('energy') == 'Biocarburant' ? 'selected' : ($vehicle ? ($vehicle->energy == 'Biocarburant' ? 'selected' : null) : null) }}>
                                                Biocarburant</option>
                                            <option value="Solaire"
                                                {{ old('energy') == 'Solaire' ? 'selected' : ($vehicle ? ($vehicle->energy == 'Solaire' ? 'selected' : null) : null) }}>
                                                Solaire
                                            </option>
                                            <option value="Autre"
                                                {{ old('energy') == 'Autre' ? 'selected' : ($vehicle ? ($vehicle->energy == 'Autre' ? 'selected' : null) : null) }}>
                                                Autre
                                            </option>
                                        </select>
                                        @if ($errors->has('energy'))
                                            <div class="text-danger">{{ $errors->first('energy') }}</div>
                                        @endif
                                    </div>
                                    <div class="mb-3">
                                        <label for="sitePlace" class="form-label">Place assises :</label>
                                        <input type="number" name="sitePlace"
                                            class="form-control @error('sitePlace') is-invalid @enderror" id="sitePlace"
                                            value="{{ old('sitePlace') ?? ($vehicle ? $vehicle->sitePlace : null) }}">
                                        @if ($errors->has('sitePlace'))
                                            <div class="text-danger">{{ $errors->first('sitePlace') }}</div>
                                        @endif
                                    </div>
                                    <div class="mb-3">
                                        <label for="airConditioner" class="form-label">Climatisation :</label>
                                        <select class="form-select @error('airConditioner') is-invalid @enderror"
                                            name="airConditioner" id="airConditioner">
                                            <option disabled selected>Selectionner une réponse</option>
                                            <option value="oui"
                                                {{ old('airConditioner') == 'oui' ? 'selected' : ($vehicle ? ($vehicle->airConditioner == 'oui' ? 'selected' : null) : null) }}>
                                                Oui
                                            </option>
                                            <option value="non"
                                                {{ old('airConditioner') == 'non' ? 'selected' : ($vehicle ? ($vehicle->airConditioner == 'non' ? 'selected' : null) : null) }}>
                                                Non
                                            </option>
                                        </select>
                                        @if ($errors->has('airConditioner'))
                                            <div class="text-danger">{{ $errors->first('airConditioner') }}</div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 ">
                                <div class="form-col">
                                    <div class="mb-3">
                                        <label for="vin" class="form-label">Numéro immatriculation :</label>
                                        <input type="text" name="vin"
                                            class="form-control @error('vin') is-invalid @enderror" id="vin"
                                            value="{{ old('vin') ?? ($vehicle ? $vehicle->vin : null) }}">
                                        @if ($errors->has('vin'))
                                            <div class="text-danger">{{ $errors->first('vin') }}</div>
                                        @endif
                                    </div>
                                    <div class="mb-3">
                                        <label for="usageState" class="form-label">Etat véhicule :</label>
                                        <select class="form-select  @error('usageState') is-invalid @enderror"
                                            name="usageState" id="usageState">
                                            <option disabled selected>Selectionner l'état du véhicule</option>
                                            <option value="new"
                                                {{ old('usageState') == 'new' ? 'selected' : ($vehicle ? ($vehicle->usageState == 'new' ? 'selected' : null) : null) }}>
                                                Neuf
                                            </option>
                                            <option value="old"
                                                {{ old('usageState') == 'old' ? 'selected' : ($vehicle ? ($vehicle->usageState == 'old' ? 'selected' : null) : null) }}>
                                                Vieux
                                            </option>
                                        </select>
                                        @if ($errors->has('usageState'))
                                            <div class="text-danger">{{ $errors->first('usageState') }}</div>
                                        @endif
                                    </div>
                                    <div class="mb-3">
                                        <label for="power" class="form-label">Puissance :</label>
                                        <input type="text" name="power"
                                            class="form-control @error('power') is-invalid @enderror" id="power"
                                            value="{{ old('power') ?? ($vehicle ? $vehicle->power : null) }}">
                                        @if ($errors->has('power'))
                                            <div class="text-danger">{{ $errors->first('power') }}</div>
                                        @endif
                                    </div>
                                    <div class="mb-3">
                                        <label for="registrationDate" class="form-label">Date d’immatriculation
                                            :</label>
                                        <input type="date" name="registrationDate"
                                            class="form-control @error('registrationDate') is-invalid @enderror"
                                            id="registrationDate"
                                            value="{{ old('registrationDate') ?? ($vehicle ? $vehicle->registrationDate : null) }}">
                                        @if ($errors->has('registrationDate'))
                                            <div class="text-danger">{{ $errors->first('registrationDate') }}</div>
                                        @endif
                                    </div>
                                    <div class="mb-3">
                                        <label for="firstUseDate" class="form-label">Date première utilisation
                                            :</label>
                                        <input type="date" name="firstUseDate"
                                            class="form-control @error('firstUseDate') is-invalid @enderror"
                                            id="firstUseDate"
                                            value="{{ old('firstUseDate') ?? ($vehicle ? $vehicle->firstUseDate : null) }}">
                                        @if ($errors->has('firstUseDate'))
                                            <div class="text-danger">{{ $errors->first('firstUseDate') }}</div>
                                        @endif
                                    </div>
                                    <div class="mb-3">
                                        <label for="circulationDate" class="form-label">Date mise en circulation
                                            :</label>
                                        <input type="date" name="circulationDate"
                                            class="form-control @error('circulationDate') is-invalid @enderror "
                                            id="circulationDate"
                                            value="{{ old('circulationDate') ?? ($vehicle ? $vehicle->circulationDate : null) }}">
                                        @if ($errors->has('circulationDate'))
                                            <div class="text-danger">{{ $errors->first('circulationDate') }}</div>
                                        @endif
                                    </div>
                                    <div class="mb-3">
                                        <label for="glassType" class="form-label">Vitres teintées :</label>
                                        <select class="form-select  @error('glassType') is-invalid @enderror "
                                            name="glassType" id="gender">
                                            <option disabled selected>Selectionner une réponse</option>
                                            <option value="oui"
                                                {{ old('glassType') == 'oui' ? 'selected' : ($vehicle ? ($vehicle->glassType == 'oui' ? 'selected' : null) : null) }}>
                                                Vitres non teintées</option>
                                            <option value="non"
                                                {{ old('glassType') == 'non' ? 'selected' : ($vehicle ? ($vehicle->glassType == 'non' ? 'selected' : null) : null) }}>
                                                Vitres teintées</option>
                                        </select>
                                        @if ($errors->has('glassType'))
                                            <div class="text-danger">{{ $errors->first('glassType') }}</div>
                                        @endif
                                    </div>
                                    <div class="mb-3">
                                        <label for="frontShape" class="form-label">Forme avant :</label>
                                        <select class="form-select @error('frontShape') is-invalid @enderror"
                                            name="frontShape" id="frontShape">
                                            <option disabled selected>Selectionner une forme</option>
                                            <option value="rectangle"
                                                {{ old('frontShape') == 'rectangle' ? 'selected' : ($vehicle ? ($vehicle->frontShape == 'rectangle' ? 'selected' : null) : null) }}>
                                                Rectangle</option>
                                            <option value="carre"
                                                {{ old('frontShape') == 'carre' ? 'selected' : ($vehicle ? ($vehicle->frontShape == 'carre' ? 'selected' : null) : null) }}>
                                                Carré</option>
                                        </select>
                                        @if ($errors->has('frontShape'))
                                            <div class="text-danger">{{ $errors->first('frontShape') }}</div>
                                        @endif
                                    </div>
                                    <div class="mb-3">
                                        <label for="backShape" class="form-label">Forme arrière :</label>
                                        <select class="form-select @error('backShape') is-invalid @enderror "
                                            name="backShape" id="backShape">
                                            <option disabled selected>Selectionner une forme</option>
                                            <option value="rectangle"
                                                {{ old('backShape') == 'rectangle' ? 'selected' : ($vehicle ? ($vehicle->backShape == 'rectangle' ? 'selected' : null) : null) }}>
                                                Rectangle</option>
                                            <option value="carre"
                                                {{ old('backShape') == 'carre' ? 'selected' : ($vehicle ? ($vehicle->backShape == 'carre' ? 'selected' : null) : null) }}>
                                                Carré
                                            </option>
                                        </select>
                                        @if ($errors->has('chassis'))
                                            <div class="text-danger">{{ $errors->first('chassis') }}</div>
                                        @endif
                                    </div>

                                    <div class="mb-3">
                                        <label for="owner_id" class="form-label">Propritaire :</label>
                                        <input type="text" name="owner_id"
                                            class="form-control @error('owner_id') is-invalid @enderror" id="owner_id"
                                            value="{{ old('owner_id') ?? ($vehicle ? $vehicle->owner_id : null) }}">
                                        @if ($errors->has('owner_id'))
                                            <div class="text-danger">{{ $errors->first('owner_id') }}</div>
                                        @endif
                                    </div>

                                    <div class="mb-3">
                                        <label for="driver_id" class="form-label">Conducteur :</label>
                                        <input type="text" name="driver_id"
                                            class="form-control @error('driver_id') is-invalid @enderror" id="driver_id"
                                            value="{{ old('driver_id') ?? ($vehicle ? $vehicle->driver_id : null) }}">
                                        @if ($errors->has('driver_id'))
                                            <div class="text-danger">{{ $errors->first('driver_id') }}</div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex justify-content-end mt-3">
                            <button type="submit" class="v-driver-btn-outline-primary">Mettre à jour <i
                                    class="fa-solid fa-arrow-right-long"></i></button>
                        </div>
                    </form>
                </div>

            </div>
        </section><!-- End Form Section -->
    </main><!-- End #main -->
@endsection
