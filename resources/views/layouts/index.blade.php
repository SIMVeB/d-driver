@extends('master')
@section('content')
    <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">

    <div class="container">
      <div class="row">
        <div class="col-lg-6 d-flex flex-column justify-content-center pt-5 pt-lg-0 order-2 order-lg-1 text-white" data-aos="fade-up">
          <h2>Recensement des conducteurs de véhicules à quatre (04) 
            roues desservant le parking de l’aéroport international
             <span class="v-driver-fw-bold">AHMED SEKOU TOURE</span> de <span class="v-driver-fw-bold">CONAKRY</span></h2>
          <div class="d-flex justify-content-center justify-content-lg-start">
            <a href="{{ route('register') }}" class="v-driver-btn-secondary scrollto">S'INSCRIRE</a>
          </div>
        </div>
        <div class="col-lg-6 order-1 order-lg-2 hero-img">
          <img src="assets/images/Parking-amico.png" class="img-fluid animated" alt="">
        </div>
      </div>
    </div>
  </section><!-- End Hero -->

  <main id="main">
    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>A PROPOS</h2>
        </div>

        <div class="row content">
          <div class="col">
            <p class="text-center">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum impedit voluptate nisi necessitatibus magni corrupti fuga,
               totam commodi vitae iste dolorem harum rem temporibus placeat aut modi, quasi quae. Accusamus?Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum impedit voluptate nisi necessitatibus magni corrupti fuga,
               totam commodi vitae iste dolorem harum rem temporibus placeat aut modi, quasi quae. Accusamus?Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum impedit voluptate nisi necessitatibus magni corrupti fuga,
               totam commodi vitae iste dolorem harum rem temporibus placeat aut modi, quasi quae. Accusamus?Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum impedit voluptate nisi necessitatibus magni corrupti fuga,
               totam commodi vitae iste dolorem harum rem temporibus placeat aut modi, quasi quae. Accusamus
          </div>
         
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= FAQs Section ======= -->
    <section id="faq" class="faq section-bg">
      <div class="container-fluid" data-aos="fade-up">
        <div class="section-title">
          <h2>FAQs</h2>
        </div>
        <div class="row">
          <div class="col-lg-7 d-flex flex-column justify-content-center align-items-stretch  order-2 order-lg-1">

            <div class="faq-list">
              <ul>
                <li data-aos="fade-up">
                  <i class="fa-solid fa-circle-question icon-help"></i><a data-bs-toggle="collapse" data-bs-target="#faq-list-1" class="collapsed">Question 1 ? <i class="fa-solid fa-chevron-down icon-show"></i><i class="fa-solid fa-chevron-up icon-close"></i></a>
                  <div id="faq-list-1" class="collapse" data-bs-parent=".faq-list">
                    <p>
                      Réponse 1
                    </p>
                  </div>
                </li>
    
                <li data-aos="fade-up">
                  <i class="fa-solid fa-circle-question icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-2" class="collapsed">Question 2 ? <i class="fa-solid fa-chevron-down icon-show"></i><i class="fa-solid fa-chevron-up icon-close"></i></a>
                  <div id="faq-list-2" class="collapse" data-bs-parent=".faq-list">
                    <p>
                      Réponse 2                     
                    </p>
                  </div>
                </li>
    
                <li data-aos="fade-up">
                  <i class="fa-solid fa-circle-question icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-3" class="collapsed">Question 3 ?  <i class="fa-solid fa-chevron-down icon-show"></i><i class="fa-solid fa-chevron-up icon-close"></i></a>
                  <div id="faq-list-3" class="collapse" data-bs-parent=".faq-list">
                    <p>
                      Réponse 3
                    </p>
                  </div>
                </li>
    
                <li data-aos="fade-up">
                  <i class="fa-solid fa-circle-question icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-4" class="collapsed">Question 4 ?  <i class="fa-solid fa-chevron-down icon-show"></i><i class="fa-solid fa-chevron-up icon-close"></i></a>
                  <div id="faq-list-4" class="collapse" data-bs-parent=".faq-list">
                    <p>
                      Réponse 4 
                    </p>
                  </div>
                </li>
  
              </ul>
            </div>

          </div>

          <div class="col-lg-5 align-items-stretch order-1 order-lg-2 img" style='background-image: url("assets/images/Parking-bro.png");'>&nbsp;</div>
        </div>

      </div>
    </section><!-- End FAQs Section -->
    
    <!-- ======= newsletter Section ======= -->
    <section id="newsletter">
      <div class="container">
        <div class="section-title pb-0">
          <h2>Newsletter</h2>
        </div>
        <div class="row justify-content-center">
          <div class="col-lg-6">
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Souscrire">
            </form>
          </div>
        </div>
      </div>
    </section> <!-- End newsletter Section -->
  </main><!-- End #main -->

@endsection