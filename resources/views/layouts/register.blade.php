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
            <h4 class="text-uppercase">Information sur le véhicule</h4>
           </div>
           <form action="">
               <div class="row justify-content-between">
                    <div class="col-lg-6">
                        <div class="form-col">
                            <div class="mb-3">
                                <label for="energie" class="form-label">Genre :</label>
                                <input type="text" name="energie" class="form-control" id="energie">
                            </div>
                            <div class="mb-3">
                                <label for="energie" class="form-label">Marque :</label>
                                <input type="text" name="energie" class="form-control" id="energie">
                            </div>
                            <div class="mb-3">
                                <label for="place_assise" class="form-label">Châssis :</label>
                                <input type="text" name="place_assise" class="form-control" id="place_assise">
                            </div>
                            <div class="mb-3">
                                <label for="energie" class="form-label">Carosserie :</label>
                                <input type="text" name="energie" class="form-control" id="energie">
                            </div>
                            <div class="mb-3">
                                <label for="place_assise" class="form-label">Numéro de série :</label>
                                <input type="text" name="place_assise" class="form-control" id="place_assise">
                            </div>
                            <div class="mb-3">
                                <label for="energie" class="form-label">Type :</label>
                                <input type="text" name="energie" class="form-control" id="energie">
                            </div>
                            <div class="mb-3">
                                <label for="place_assise" class="form-label">Couleur carosserie :</label>
                                <input type="text" name="place_assise" class="form-control" id="place_assise">
                            </div>
                            <div class="mb-3">
                                <label for="energie" class="form-label">Energie :</label>
                                <input type="text" name="energie" class="form-control" id="energie">
                            </div>
                            <div class="mb-3">
                                <label for="place_assise" class="form-label">Place assises :</label>
                                <input type="text" name="place_assise" class="form-control" id="place_assise">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 ">
                        <div class="form-col">

                            <div class="mb-3">
                                <label for="energie" class="form-label">Numéro immatriculation :</label>
                                <input type="text" name="energie" class="form-control" id="energie">
                            </div>
                            <div class="mb-3">
                                <label for="energie" class="form-label">Etat véhicule :</label>
                                <input type="text" name="energie" class="form-control" id="energie">
                            </div>
                            <div class="mb-3">
                                <label for="place_assise" class="form-label">Puissance :</label>
                                <input type="text" name="place_assise" class="form-control" id="place_assise">
                            </div>
                            <div class="mb-3">
                                <label for="energie" class="form-label">Date d’immatriculation :</label>
                                <input type="text" name="energie" class="form-control" id="energie">
                            </div>
                            <div class="mb-3">
                                <label for="place_assise" class="form-label">Date première utilisation :</label>
                                <input type="text" name="place_assise" class="form-control" id="place_assise">
                            </div>
                            <div class="mb-3">
                                <label for="energie" class="form-label">Date mise en circulation :</label>
                                <input type="text" name="energie" class="form-control" id="energie">
                            </div>
                            <div class="mb-3">
                                <label for="place_assise" class="form-label">Vitres teintées :</label>
                                <input type="text" name="place_assise" class="form-control" id="place_assise">
                            </div>
                            <div class="mb-3">
                                <label for="energie" class="form-label">Forme avant :</label>
                                <input type="text" name="energie" class="form-control" id="energie">
                            </div>
                            <div class="mb-3">
                                <label for="place_assise" class="form-label">Forme arrière :</label>
                                <input type="text" name="place_assise" class="form-control" id="place_assise">
                            </div>
                        </div>
                    </div>
               </div>
               <div class="d-flex justify-content-end mt-3">
                <a href="{{ route('owner') }}" class="v-driver-btn-outline-primary">Etape suivante</a>
                {{-- <button type="button" href="{{ route('register') }}" class="v-driver-btn-outline-primary">Etape suivante</button> --}}
              </div>
           </form>
          </div>
  
        </div>
      </section><!-- End Form Section -->
  </main><!-- End #main -->

@endsection