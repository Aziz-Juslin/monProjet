@extends('auth.master', ['title'=>'élèves'])
@section('section')
 <main style="margin-top: -50px; " id="main">
  <section id="testimonials" class="testimonials section-bg">
      <div class="container" data-aos="fade-up">
       @include('auth.tete')
      </div>
  </section><!-- End Testimonials Section -->


    <!-- Main content -->
    <div class="content-wrapper">

      <!-- Content area -->
      <div class="content">
        <!-- Rounded thumbs -->
        <div class="mb-3 pt-2">
          <h6 class="mb-0 font-weight-semibold">
            Elèves
          </h6>
          <span class="text-muted d-block">Responsive  <code>disponibles</code></span>
        </div>

        <div class="row">
           @foreach($eleves as $eleve)
          <div class="col-xl-3 col-sm-6">
            <div class="card">
              <div class="card-body text-center">
                <div class="card-img-actions d-inline-block mb-3">
                  @if(!$eleve->photo_eleve == '')
                  <img class="img-fluid rounded-circle" src="/uploads/image_eleves/{{$eleve->photo_eleve}}" style="width: 150px; height:150px" alt="">
                  @else
                  <img class="img-fluid rounded-circle" src="/img/user.png" style="width: 150px; height:150px" alt="">
                  @endif
                  
                  <div class="card-img-actions-overlay card-img rounded-circle">
                    @if(!$eleve->photo_eleve == '')
                    <a href="/uploads/image_eleves/{{$eleve->photo_eleve}}" class="btn btn-outline bg-white text-white border-white border-2 btn-icon rounded-round">
                    @else
                    <a href="/img/user.png" class="btn btn-outline bg-white text-white border-white border-2 btn-icon rounded-round">
                    @endif
                      <i class="icon-plus3"></i>
                    </a>
                    <a href="user_pages_profile.html" class="btn btn-outline bg-white text-white border-white border-2 btn-icon rounded-round ml-2">
                      <i class="icon-link"></i>
                    </a>
                  </div>
                </div>

                  <h6 class="font-weight-semibold mb-0">{{ucfirst($eleve->nom)}} {{ucfirst($eleve->post_nom)}} {{ucfirst($eleve->prenom)}}</h6>
                  <span class="d-block text-muted">{{ucfirst($eleve->classe)}} &amp; {{ucfirst($eleve->cycle)}}</span>

                  <div class="list-icons list-icons-extended mt-3">
                  <ul class="list-inline list-inline-condensed mt-3 mb-0">
                 
                  <li class="list-inline-item"><a href="#" class="btn btn-outline bg-info btn-icon text-info border-info border-2 rounded-round">
                    Voir plus</a>
                  </li>
                  
                </ul>
                  </div>
                </div>
              </div>
          </div>
          @endforeach
        </div>  
      </div>
    </div>
  <!-- /content area -->
 </main>
@include('auth.footer2')
@stop
