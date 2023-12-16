@extends('auth.master', ['title'=>'Création de compte'])
@section('section')
  <!-- Page content -->
  <div class="page-content">
    <!-- Main content -->
    <div class="content-wrapper">
      <!-- Content area -->
      <div style="background-image: url(/img/3.jpg)" class="content d-flex justify-content-center align-items-center">
        <!-- Registration form -->
        <form action="{{route('register')}}" method="POST" class="flex-fill">
          @csrf
          <div class="row">
            <div class="col-lg-6 offset-lg-3">
              <div class="card mb-0">
                <div class="card-body">
                  <div class="text-center mb-3">

                    <h4 class="mb-0 text-muted"><b>Créer votre compte de gestion</b></h4>
                    <span class="d-block text-muted">Gérer  votre Ecole <br>Autrement avec sécurité. (2-Six)</span>
                  </div>
                <div class="form-group form-group-feedback form-group-feedback-right">
                    <input type="text" name="ecole" class="form-control" placeholder="Nom de l'établissement">
                     @error('ecole')
                     <span class="text-left text-muted">
                      <span style="color: darkred;" ><m>{{ $message }}</m></span>
                    </span>
                    @enderror
                    <div class="form-control-feedback">
                      <i class="icon-office text-muted"></i>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group form-group-feedback form-group-feedback-right">
                        <input type="text" name="name" class="form-control" placeholder="Nom d'administrateur">
                        @error('name')
                         <span class="text-left text-muted">
                          <span style="color: darkred;" ><m>{{ $message }}</m></span>
                        </span>
                        @enderror
                        <div class="form-control-feedback">
                          <i class="icon-user-check text-muted"></i>
                        </div>
                      </div>
                    </div>

                    <div class="col-md-6">
                      <div class="form-group form-group-feedback form-group-feedback-right">
                        <input type="number" name="telephone" class="form-control" placeholder="Téléphone">
                        @error('telephone')
                       <span class="text-left text-muted">
                       <span style="color: darkred;" ><m>{{ $message }}</m></span>
                      </span>
                       @enderror
                        <div class="form-control-feedback">
                          <i class="icon-phone text-muted"></i>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group form-group-feedback form-group-feedback-right">
                        <input type="password" name="password" class="form-control" placeholder="Mot de passe">
                        @error('password')
                     <span class="text-left text-muted">
                      <span style="color: darkred;" ><m>{{ $message }}</m></span>
                    </span>
                    @enderror
                        <div class="form-control-feedback">
                          <i class="icon-user-lock text-muted"></i>
                        </div>
                      </div>
                    </div>

                    <div class="col-md-6">
                      <div class="form-group form-group-feedback form-group-feedback-right">
                        <input type="password" name="password_confirmation" class="form-control" placeholder="Confirmer mot de passe">
                        @error('confirme_password')
                     <span class="text-left text-muted">
                      <span style="color: darkred;" ><m>{{ $message }}</m></span>
                    </span>
                    @enderror
                        <div class="form-control-feedback">
                          <i class="icon-user-lock text-muted"></i>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group form-group-feedback form-group-feedback-right">
                        <select name="province" class="form-control">
                        <option value="Kinshasa">Kinshasa</option>
                        <option value="Matadi">Matadi</option>
                        <option value="Lubumbashi">Lubumbashi</option>
                        <option value="Maniema">Maniema</option>
                        <option value="Kisantu">Kisantu</option>
                        <option value="Luwozi">Luwozi</option>
                        <option value="Mbanza-Ngungu">Mbanza-Ngungu</option>
                        <option value="Kolwezi">Kolwezi</option>
                        <option value="Goma">Goma</option>
                        <option value="Mbuji-mayi">Mbuji-mayi</option>
                        <option value="Kenge">Kenge</option>
                        <option value="Kikwiti">Kikwiti</option>
                        <option value="Nord-Kivu">Nord-Kivu</option>
                        <option value="Sud-Kivu">Sud-Kivu</option>
                        <option value="Boma">Boma</option>
                        <option value="Popo">Popo</option>
                        <option value="Muanda">Muanda</option>
                        </select>
                      </div>
                    </div>
                  </div>
                  <button type="submit" class="btn bg-orange-400 btn-labeled "> Confirmer</button>
                  <a href="{{route('login')}}" class="btn btn-light btn-labeled "> J'ai un compte</a>
                </div>
              </div>
            </div>
          </div>
        </form>
        <!-- /registration form -->
      </div>
    </div>
</div>
</div>
<!-- /content area -->
@include('auth.footer')
@stop
