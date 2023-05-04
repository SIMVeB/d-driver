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
            <h4 class="text-uppercase">Information sur le conducteur</h4>
           </div>
           <form action="">
               <div class="row justify-content-between">
                    <div class="col-lg-6">
                        <div class="form-col">
                            <div class="mb-3">
                                <label for="energie" class="form-label">Nom et Prénoms :</label>
                                <input type="text" name="energie" class="form-control" id="energie">
                            </div>
                            <div class="mb-3">
                                <label for="place_assise" class="form-label">Sexe :</label>
                                <input type="text" name="place_assise" class="form-control" id="place_assise">
                            </div>
                            <div class="mb-3">
                                <label for="energie" class="form-label">Date de naissance :</label>
                                <input type="text" name="energie" class="form-control" id="energie">
                            </div>
                            <div class="mb-3">
                                <label for="place_assise" class="form-label">Lieu de naissance :</label>
                                <input type="text" name="place_assise" class="form-control" id="place_assise">
                            </div>
                            <div class="mb-3">
                                <label for="energie" class="form-label">Lieu de résidence :</label>
                                <input type="text" name="energie" class="form-control" id="energie">
                            </div>
                            <div class="mb-3">
                                <label for="place_assise" class="form-label">Secteur/District :</label>
                                <input type="text" name="place_assise" class="form-control" id="place_assise">
                            </div>
                            <div class="mb-3">
                                <label for="energie" class="form-label">Sous-préfecture/Quartier :</label>
                                <input type="text" name="energie" class="form-control" id="energie">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 ">
                        <div class="form-col">
                            <div class="mb-3">
                                <label for="energie" class="form-label">Commune/Préfecture :</label>
                                <input type="text" name="energie" class="form-control" id="energie">
                            </div>
                            <div class="mb-3">
                                <label for="place_assise" class="form-label">Région :</label>
                                <input type="text" name="place_assise" class="form-control" id="place_assise">
                            </div>
                            <div class="mb-3">
                                <label for="energie" class="form-label">Adresse email :</label>
                                <input type="text" name="energie" class="form-control" id="energie">
                            </div>
                            <div class="mb-3">
                                <label for="place_assise" class="form-label">Téléphone :</label>
                                <input type="text" name="place_assise" class="form-control" id="place_assise">
                            </div>
                            <div class="mb-3">
                                <label for="energie" class="form-label">NCI/Passeport :</label>
                                <input type="text" name="energie" class="form-control" id="energie">
                            </div>
                            <div class="mb-3">
                                <label for="place_assise" class="form-label">Adresse postale :</label>
                                <input type="text" name="place_assise" class="form-control" id="place_assise">
                            </div>
                            <div class="mb-3">
                                <label for="energie" class="form-label">NIF :</label>
                                <input type="text" name="energie" class="form-control" id="energie">
                            </div>
                        </div>
                    </div>
               </div>
               <div class="d-flex justify-content-between mt-3">
                <a href="{{ route('owner') }}" class="v-driver-btn-outline-primary">Etape précédente</a>
                <button type="submit"  class="v-driver-btn-outline-primary">Sauvegerder</button>
              </div>
           </form>
          </div>
  
        </div>
      </section><!-- End Form Section -->
  </main><!-- End #main -->

@endsection