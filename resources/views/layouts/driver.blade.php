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
            <h4 class="text-uppercase">Information sur le conducteur <i class="fa-solid fa-user-tie"></i></h4>
           </div>
           <form method="POST" action="{{ route('driver-store') }}">
               <div class="row justify-content-between">
                    <div class="col-lg-6">
                        <div class="form-col">
                            <div class="mb-3">
                                <label for="name" class="form-label">Nom et Prénoms :</label>
                                <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name" value="{{ old('name') }}" id="name">
                                @if ($errors->has('name'))
                                    <div class="text-danger">{{ $errors->first('name') }}</div>
                                @endif
                            </div>
                            <div class="mb-3">
                                <label for="gender" class="form-label">Sexe :</label>
                                <select class="form-select @error('gender') is-invalid @enderror" id="gender" value="{{ old('gender') }}"  id="gender">
                                    <option disabled selected>Selectionner votre sexe</option>
                                    <option value="masculin" {{ old('gender') == 'masculin' ? 'selected' : '' }}>Masculin</option>
                                    <option value="feminin" {{ old('gender') == 'feminin' ? 'selected' : '' }}>Féminin</option>
                                </select>
                                @if ($errors->has('gender'))
                                    <div class="text-danger">{{ $errors->first('gender') }}</div>
                                @endif
                            </div>
                            <div class="mb-3">
                                <label for="birthDate" class="form-label">Date de naissance :</label>
                                <input type="date" name="birthDate" class="form-control @error('birthDate') is-invalid @enderror" id="birthDate"  value="{{ old('birthDate') }}" id="birthDate">
                                @if ($errors->has('birthDate'))
                                    <div class="text-danger">{{ $errors->first('birthDate') }}</div>
                                @endif
                            </div>
                            <div class="mb-3">
                                <label for="birthPlace" class="form-label">Lieu de naissance :</label>
                                <input type="text" name="birthPlace" class="form-control @error('birthPlace') is-invalid @enderror" id="birthPlace" value="{{ old('birthPlace') }}" id="birthPlace">
                                @if ($errors->has('birthPlace'))
                                    <div class="text-danger">{{ $errors->first('birthPlace') }}</div>
                                @endif
                            </div>
                            <div class="mb-3">
                                <label for="address" class="form-label">Lieu de résidence :</label>
                                <input type="text" name="address" class="form-control @error('address') is-invalid @enderror" id="address" value="{{ old('address') }}" id="address">
                                @if ($errors->has('address'))
                                    <div class="text-danger">{{ $errors->first('address') }}</div>
                                @endif
                            </div>
                            <div class="mb-3">
                                <label for="distric" class="form-label">Secteur/District :</label>
                                <input type="text" name="distric" class="form-control @error('distric') is-invalid @enderror" id="distric" value="{{ old('distric') }}" id="distric">
                                @if ($errors->has('distric'))
                                    <div class="text-danger">{{ $errors->first('distric') }}</div>
                                @endif
                            </div>
                            <div class="mb-3">
                                <label for="commune" class="form-label">Commune/Préfecture :</label>
                                <input type="text" name="commune" class="form-control @error('commune') is-invalid @enderror" value="{{ old('commune') }}" id="commune">
                                @if ($errors->has('commune'))
                                    <div class="text-danger">{{ $errors->first('commune') }}</div>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 ">
                        <div class="form-col">
                            <div class="mb-3">
                                <label for="region" class="form-label">Région :</label>
                                <input type="text" name="region" class="form-control @error('region') is-invalid @enderror" id="region" value="{{ old('region') }}">
                                @if ($errors->has('region'))
                                    <div class="text-danger">{{ $errors->first('region') }}</div>
                                @endif
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Adresse email :</label>
                                <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" value="{{ old('email') }}">
                                @if ($errors->has('email'))
                                    <div class="text-danger">{{ $errors->first('email') }}</div>
                                @endif
                            </div>
                            <div class="mb-3">
                                <label for="permis" class="form-label">Numéro permis de conduire :</label>
                                <input type="text" name="permis" class="form-control @error('permis') is-invalid @enderror" id="permis" value="{{ old('permis') }}"permis>
                                @if ($errors->has('permis'))
                                    <div class="text-danger">{{ $errors->first('permis') }}</div>
                                @endif
                            </div>
                            <div class="mb-3">
                                <label for="phoneNumber" class="form-label">Téléphone :</label>
                                <input type="text" name="phoneNumber" class="form-control @error('phoneNumber') is-invalid @enderror" id="phoneNumber" value="{{ old('phoneNumber') }}" >
                                @if ($errors->has('phoneNumber'))
                                    <div class="text-danger">{{ $errors->first('phoneNumber') }}</div>
                                @endif
                            </div>
                            <div class="mb-3">
                                <label for="passport" class="form-label">NCI/Passeport :</label>
                                <input type="text" name="passport" class="form-control @error('passport') is-invalid @enderror" id="passport" value="{{ old('passport') }}" >
                                @if ($errors->has('passport'))
                                    <div class="text-danger">{{ $errors->first('passport') }}</div>
                                @endif
                            </div>
                            <div class="mb-3">
                                <label for="zip" class="form-label">Adresse postale :</label>
                                <input type="text" name="zip" class="form-control @error('zip') is-invalid @enderror" value="{{ old('zip') }}" >
                                @if ($errors->has('zip'))
                                    <div class="text-danger">{{ $errors->first('zip') }}</div>
                                @endif
                            </div>
                            <div class="mb-3">
                                <label for="nif" class="form-label">NIF :</label>
                                <input type="text" name="nif" class="form-control @error('nif') is-invalid @enderror" id="nif" value="{{ old('nif') }}" >
                                @if ($errors->has('nif'))
                                    <div class="text-danger">{{ $errors->first('nif') }}</div>
                                @endif
                            </div>
                    </div>
                    </div>
               </div>
               <div class="d-flex justify-content-between mt-3">
                <a href="{{ route('owner') }}" class="v-driver-btn-outline-primary"><i class="fa-solid fa-arrow-left-long"></i> Etape précédente</a>
                <button type="submit"  class="v-driver-btn-outline-primary">Sauvegerder <i class="fa-solid fa-floppy-disk"></i></button>
              </div>
           </form>
          </div>
  
        </div>
      </section><!-- End Form Section -->
  </main><!-- End #main -->

@endsection