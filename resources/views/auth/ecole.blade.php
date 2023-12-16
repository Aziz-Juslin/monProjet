@extends('auth.master', ['title'=>'écoles'])
@section('section')
<main style="margin-top: -50px; " id="main">
   <section  id="services" class="services">
      <div class="container" data-aos="fade-up">
       @include('auth.tete')
     </div>
    </section><!-- End Services Section -->
 <div class="content-wrapper">

      <!-- Content area -->
      <div class="content">
    <div class="mb-3">
          <h6 class="mb-0 font-weight-semibold">
            Ecoles
          </h6>
          <span class="text-muted d-block">Etablissements <code>disponibles</code></span>
        </div>

        <div class="row">
          @forelse($ecoles as $ecole)
          <div class="col-xl-3 col-sm-6">
            <div class="card">
              <div class="card-img-actions mx-1 mt-1">
               
                 @if(!$ecole->photo_ecole == '')
                <img src="/Dossier/images_ecole/{{$ecole->photo_ecole}}" class="card-img img-fluid" style="width: 360px; height:300px; border-radius:10px" alt="">
                 @else
                <img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="card-img img-fluid" style="width: 360px; height:300px; border-radius:10px" alt="">
                @endif
                <div class="card-img-actions-overlay card-img">
                @if(!$ecole->photo_ecole == '')
                <a href="/Dossier/images_ecole/{{$ecole->photo_ecole}}" class="btn btn-outline bg-white text-white border-white border-2 btn-icon rounded-round">
                 @else
                 <a href="../../../../global_assets/images/placeholders/placeholder.jpg" class="btn btn-outline bg-white text-white border-white border-2 btn-icon rounded-round">
                @endif
                    <i class="icon-plus3"></i>
                  </a>
                  <a href="{{route('voir_ecole', [$ecole->id, $ecole->ecole])}}" class="btn btn-outline bg-white text-white border-white border-2 btn-icon rounded-round ml-2">
                    <i class="icon-link"></i>
                  </a>
                </div>
              </div>

                <div class="card-body text-center">
                  <h6 class="font-weight-semibold mb-0">{{$ecole->ecole}}</h6>
                  <span class="d-block text-muted">{{$ecole->province}}</span>

                <ul class="list-inline list-inline-condensed mt-3 mb-0">
                 
                  <li class="list-inline-item"><a href="#" class="btn btn-outline bg-info btn-icon text-info border-info border-2 rounded-round">
                    Voir plus</a>
                  </li>
                  
                </ul>
                </div>
              </div>
          </div>
          @empty
            <div class="col-xl-12 col-sm-12">
            <a class="p text-muted"> Aucune école enregistrée</a>
          </div>
        @endforelse

     

       
        </div>
        <!-- /square thumbs -->
      </div>
    </div>
  </main><!-- End #main -->

@include('auth.footer2')
@stop
