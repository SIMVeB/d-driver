@extends('master')
@section('content')
    <!-- ======= Side Section ======= -->
  <section id="side" class="d-flex align-items-center">
    <div class="container">
      <div class="row">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb justify-content-center">
              <li class="breadcrumb-item"><a href="{{ route('home') }}">ACCUEIL</a></li>
              <li class="breadcrumb-item active text-white" aria-current="page">CONDUCTEURS</li>
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
                <h3>Liste des conducteurs</h3>
            </div>
    
            <div class="row content">
                {{-- <div class="row mb-3">
                    <h4 class="text-uppercase"><i class="fa-solid fa-user-tie"></i> Liste des conducteurs</h4>
                </div> --}}
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                          <tr class="table-secondary">
                            <th scope="col">#</th>
                            <th scope="col">Nom & Prénom</th>
                            <th scope="col">Date de naissance</th>
                            <th scope="col">Lieu de résidence</th>
                            <th scope="col">Numéro permis</th>
                            <th scope="col">Téléphone</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <th scope="row">1</th>
                            <td>Mark DERTA</td>
                            <td>12/02/1993</td>
                            <td>Houéyogbé</td>
                            <td>125896534</td>
                            <td>98562300</td>
                          </tr>
                          <tr>
                            <th scope="row">2</th>
                            <td>Jeanne AZITO</td>
                            <td>02/11/1985</td>
                            <td>Porto-Novo</td>
                            <td>125896534</td>
                            <td>97002200</td>
                          </tr>
                          <tr>
                            <th scope="row">3</th>
                            <td>Pierre SOSSA</td>
                            <td>15/05/11997</td>
                            <td>Brazza</td>
                            <td>125896534</td>
                            <td>65232211</td>
                          </tr>
                          <tr>
                            <th scope="row">4</th>
                            <td>Mark DERTA</td>
                            <td>12/02/1993</td>
                            <td>Houéyogbé</td>
                            <td>125896534</td>
                            <td>98562300</td>
                          </tr>
                          <tr>
                            <th scope="row">5</th>
                            <td>Jeanne AZITO</td>
                            <td>02/11/1985</td>
                            <td>Porto-Novo</td>
                            <td>125896534</td>
                            <td>97002200</td>
                          </tr>
                          <tr>
                            <th scope="row">6</th>
                            <td>Pierre SOSSA</td>
                            <td>15/05/11997</td>
                            <td>Brazza</td>
                            <td>125896534</td>
                            <td>65232211</td>
                          </tr>
                        </tbody>
                      </table>
                </div>
            </div>
  
        </div>
      </section><!-- End Form Section -->
  </main><!-- End #main -->

@endsection