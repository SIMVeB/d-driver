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
           <form action="">
               <div class="row justify-content-between">
                    <div class="col-lg-6">
                        <div class="form-col">
                            <div class="mb-3">
                                <label for="name" class="form-label">Nom et Prénoms :</label>
                                <input type="text" name="name" class="form-control" id="name">
                            </div>
                            <div class="mb-3">
                                <label for="gender" class="form-label">Sexe :</label>
                                <select class="form-select" id="gender">
                                    <option disabled selected>Selectionner votre sexe</option>
                                    <option value="masculin">Masculin</option>
                                    <option value="feminin">Féminin</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="birthDate" class="form-label">Date de naissance :</label>
                                <input type="date" name="birthDate" class="form-control" id="birthDate">
                            </div>
                            <div class="mb-3">
                                <label for="birthPlace" class="form-label">Lieu de naissance :</label>
                                <input type="text" name="birthPlace" class="form-control" id="birthPlace">
                            </div>
                            <div class="mb-3">
                                <label for="address" class="form-label">Lieu de résidence :</label>
                                <input type="text" name="address" class="form-control" id="address">
                            </div>
                            <div class="mb-3">
                                <label for="distric" class="form-label">Secteur/District :</label>
                                <input type="text" name="distric" class="form-control" id="distric">
                            </div>
                            <div class="mb-3">
                                <label for="commune" class="form-label">Commune/Préfecture :</label>
                                <input type="text" name="commune" class="form-control" id="commune">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 ">
                        <div class="form-col">
                            <div class="mb-3">
                                <label for="region" class="form-label">Région :</label>
                                <input type="text" name="region" class="form-control" id="region">
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Adresse email :</label>
                                <input type="email" name="email" class="form-control" id="email">
                            </div>
                            <div class="mb-3">
                                <label for="permis" class="form-label">Numéro permis de conduire :</label>
                                <input type="text" name="permis" class="form-control" id="permis">
                            </div>
                            <div class="mb-3">
                                <label for="phoneNumber" class="form-label">Téléphone :</label>
                                <input type="text" name="phoneNumber" class="form-control" id="phoneNumber">
                            </div>
                            <div class="mb-3">
                                <label for="passport" class="form-label">NCI/Passeport :</label>
                                <input type="text" name="passport" class="form-control" id="passport">
                            </div>
                            <div class="mb-3">
                                <label for="zip" class="form-label">Adresse postale :</label>
                                <input type="text" name="zip" class="form-control" id="zip">
                            </div>
                            <div class="mb-3">
                                <label for="nif" class="form-label">NIF :</label>
                                <input type="text" name="nif" class="form-control" id="nif">
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