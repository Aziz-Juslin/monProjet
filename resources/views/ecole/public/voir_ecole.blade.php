@extends('auth.master', ['title'=>'école'])
@section('section')
 <main id="main">

    <!-- ======= Portfolio Details Section ======= -->
    <section id="portfolio-details" class="portfolio-details">
      <div class="container">
       @foreach($ImageEcoles as $ecole)
        <div class="row gy-4">

          <div class="col-lg-8 text-center">
            @if(!$ecole->photo_ecole == '')
             <div class="portfolio-info">
            <img style="border-radius: 10px" width="500" src="/Dossier/images_ecole/{{$ecole->photo_ecole}}" class="img-fluid"  alt="">
            @else
            <img style="border-radius: 10px" width="500" src="../../../../global_assets/images/placeholders/placeholder.jpg" class="img-fluid" alt="">
            @endif
          
          </div>
            @endforeach
          <div class="social-links">
          <a href="" class="twitter"><i class="bx bxl-twitter"></i></a>
          <a href="" class="facebook"><i class="bx bxl-facebook"></i></a>
          <a href="" class="instagram"><i class="bx bxl-instagram"></i></a>
          </div>
          </div>

          <div class="col-lg-4">
            @foreach($infoEcoles as $ecole)
            <div class="portfolio-info">
              <h3>{{$ecole->ecole}}</h3>
              <ul>
                <li><strong>Adresse</strong>: {{$ecole->adresse}}, C/{{$ecole->commune}}</li>
                <li><strong>Ville</strong>: {{$ecole->province}}</li>
                <li><strong>District</strong>: {{$ecole->district}}</li>
                <li><strong>Régime</strong>: {{$ecole->regime}}</li>
                <li><strong>Project URL</strong>: <a href="#">www.example.com</a></li>
              </ul>
            </div>
            <div class="portfolio-description">
              <h2>Dévise de l'école:</h2>
              <p>
                {{ucfirst($ecole->devise)}}
              </p>
            </div>
            @endforeach
          </div>

        </div>
        
      </div>
    </section><!-- End Portfolio Details Section -->

  </main><!-- End #main -->
@include('auth.footer')

@stop
