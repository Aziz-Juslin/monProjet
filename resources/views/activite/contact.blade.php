@extends('layouts.master2')
@section('content')
  
<main>
    <div class="trending-area fix pt-25 gray-bg">
        <div  class="container">
    
      <div  class="card">
        <div   class="card-body row">
          <div class="col-lg-5 text-center d-flex align-items-center justify-content-center mb-5">
            <div class="">
              <img height="300" width="400" src="/img/pg1.jpg">
              <h2>Contact</h2>
              <p class="lead mb-5">123 Avenue de la Science, Kinshasa, 9876 NA<br>
                <i class="fas fa-phone"></i>  +243 89 17 95 616
              </p>
            </div>
          </div>
          <div class="col-lg-7 mb-5">
            <div class="form-group">
              <label for="inputName">Votre nom</label>
              <input type="text" id="inputName" class="form-control" />
            </div>
            <div class="form-group">
              <label for="inputEmail">Votre e-mail</label>
              <input type="email" id="inputEmail" class="form-control" />
            </div>
            
            <div class="form-group">
              <label for="inputMessage">Message</label>
              <textarea id="inputMessage" class="form-control" rows="4"></textarea>
            </div>
            <div class="form-group">
              <input type="submit" class="btn btn-primary" value="Envoyer">
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>

</div>
</div>
</main>
@include('layouts.footer2')
@stop