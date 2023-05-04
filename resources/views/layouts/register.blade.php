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
                                <label for="genre" class="form-label">Genre :</label>
                                <input type="text" name="genre" class="form-control" id="genre">
                            </div>
                            <div class="mb-3">
                                <label for="manufacturer" class="form-label">Marque :</label>
                                <input type="text" name="manufacturer" class="form-control" id="manufacturer">
                            </div>
                            <div class="mb-3">
                                <label for="chassis" class="form-label">Châssis :</label>
                                <input type="text" name="chassis" class="form-control" id="chassis">
                            </div>
                            <div class="mb-3">
                                <label for="bodywork" class="form-label">Carosserie :</label>
                                <input type="text" name="bodywork" class="form-control" id="bodywork">
                            </div>
                            <div class="mb-3">
                                <label for="serialNumber" class="form-label">Numéro de série :</label>
                                <input type="text" name="serialNumber" class="form-control" id="serialNumber">
                            </div>
                            <div class="mb-3">
                                <label for="type" class="form-label">Type :</label>
                                <input type="text" name="type" class="form-control" id="type">
                            </div>
                            <div class="mb-3">
                                <label for="bodyworkColor" class="form-label">Couleur carosserie :</label>
                                <input type="text" name="bodyworkColor" class="form-control" id="bodyworkColor">
                            </div>
                            <div class="mb-3">
                                <label for="energy" class="form-label">Energie :</label>
                                <input type="text" name="energy" class="form-control" id="energy">
                            </div>
                            <div class="mb-3">
                                <label for="sitePlace" class="form-label">Place assises :</label>
                                <input type="number" name="sitePlace" class="form-control" id="sitePlace">
                            </div>
                            <div class="mb-3">
                                <label for="airConditioner" class="form-label">Climatisation :</label>
                                <select class="form-select" name="airConditioner" id="airConditioner">
                                    <option disabled selected>Selectionner une réponse</option>
                                    <option value="oui">Oui</option>
                                    <option value="non">Non</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 ">
                        <div class="form-col">
                            <div class="mb-3">
                                <label for="vin" class="form-label">Numéro immatriculation :</label>
                                <input type="text" name="vin" class="form-control" id="vin">
                            </div>
                            <div class="mb-3">
                                <label for="usageState" class="form-label">Etat véhicule :</label>
                                <input type="text" name="usageState" class="form-control" id="usageState">
                            </div>
                            <div class="mb-3">
                                <label for="power" class="form-label">Puissance :</label>
                                <input type="text" name="power" class="form-control" id="power">
                            </div>
                            <div class="mb-3">
                                <label for="registrationDate" class="form-label">Date d’immatriculation :</label>
                                <input type="date" name="registrationDate" class="form-control" id="registrationDate">
                            </div>
                            <div class="mb-3">
                                <label for="firstUseDate" class="form-label">Date première utilisation :</label>
                                <input type="date" name="firstUseDate" class="form-control" id="firstUseDate">
                            </div>
                            <div class="mb-3">
                                <label for="circulationDate" class="form-label">Date mise en circulation :</label>
                                <input type="date" name="circulationDate" class="form-control" id="circulationDate">
                            </div>
                            <div class="mb-3">
                                <label for="glassType" class="form-label">Vitres teintées :</label>
                                <select class="form-select" name="glassType" id="gender">
                                    <option disabled selected>Selectionner une réponse</option>
                                    <option value="oui">Vitres non teintées</option>
                                    <option value="non">Vitres teintées</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="frontShape" class="form-label">Forme avant :</label>
                                <select class="form-select" name="frontShape" id="frontShape">
                                    <option disabled selected>Selectionner une forme</option>
                                    <option value="rectangle">Rectangle</option>
                                    <option value="carre">Carré</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="backShape" class="form-label">Forme arrière :</label>
                                <select class="form-select" name="backShape" id="backShape">
                                    <option disabled selected>Selectionner une forme</option>
                                    <option value="rectangle">Rectangle</option>
                                    <option value="carre">Carré</option>
                                </select>
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