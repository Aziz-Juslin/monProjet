@extends('auth.master', ['title'=>'A propos'])
@section('section')
<main id="main">
<!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div id="footer" class="section-title">
          <h2>À propos</h2>
          <p>2-SIX La bonne gérance de vos établissements scolaires</p>
          <h3>Gérer votre Ecole Autrement</h3>
      <p>Nous vous assurons la bonne gestion de votre école, <br>surtout sur la sécurité et la  fiabilité des informations concernant votre établissement scolaires.</p>
        </div>

        <div class="row mt-5">
          <div class="col-lg-4">
            <img style="border-radius: 10px;" width="350" src="/img/pdg.jpg" class="img-fluid" alt="">
          </div>
          <div class="col-lg-8 pt-4 pt-lg-0 content">
            <h3>Aziz Kiala.</h3>
            <p class="fst-italic">
              Le créateur de l'application web 2-six.
            </p>
            <div class="row">
              <div class="col-lg-6">
                <ul>
                  
                  <li><i class="bi bi-chevron-right"></i> <strong>Domaine:</strong> <span>Informaticien</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Métier:</strong> <span>Développeur Web</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Phone:</strong> <span>+243 89 17 95 616</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Ville:</strong> <span>Kinshasa, RDC</span></li>
                </ul>
              </div>
              <div class="col-lg-6">
              <div class="portfolio-details-slider swiper">
              <div class="swiper-wrapper align-items-center">
                <div class="swiper-slide">
                  <img  class="image-fluid" src="/img/ds.png" alt="">
                </div>  
              </div>
              <div class="swiper-pagination"></div>
            </div>
              </div>
            </div>
            <p>
              Nous avons pensé de mieux faire et nous essayons de le faire, surtout là où tous se limitent, nous voulons aller voir là bas.
            </p>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->
  </main>
@include('auth.footer2')
@stop
