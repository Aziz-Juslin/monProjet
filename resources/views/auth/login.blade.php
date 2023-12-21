@extends('auth.master', ['title'=>'Connexion'])
@section('section')
    <!-- Page content -->
    <div class="page-content">
        <!-- Main content -->
        <div class="content-wrapper">

            <!-- Content area style="background-image: url(/img/ban.jpg)"-->
                <div style="background-image: url(/img/1.jpg)" class="content d-flex justify-content-center align-items-center">
                <!-- Login card -->
                <div class="row">

                  <div class="col-md-3">
                    <div class="login-form">
                    <img class="text-center text-muted mt-5" src="/img/d6.png">
                   <h1 class="mt-1 text-white">Avec 2-Six vous avez la possibilité de gérer  votre Ecole  Autrement avec sécurité et fiabilité.</h1>
                   </div>
                </div>
                <div class="col-md-4">
                </div>
                <div class="col-lg-5 ">
                <form class="login-form mt-1" method="POST" action="{{route('login')}}">
                 @csrf
                    <div class="card  mb-0">
                        <div class="card-body">
                        <div class="text-center mb-2">
                            <h4 class="text-muted"><b>Se connecter</b></h4>
                            </div>
                            <div class="form-group form-group-feedback form-group-feedback-left">
                                <input type="text" name="telephone" class="form-control" placeholder="Numéro mobile">
                                @error('telephone')
                                 <span class="text-left text-muted">
                                  <span style="color: darkred;" >{{ $message }}</span>
                                </span>
                                @enderror
                                <div class="form-control-feedback">
                                    <i class="icon-user text-muted"></i>
                                </div>
                            </div>

                            <div class="form-group form-group-feedback form-group-feedback-left">
                                <input  type="password" name="password" class="form-control" placeholder="Mot de passe">
                                @error('password')
                                 <span class="text-left text-muted">
                                  <span style="color: darkred;" >{{ $message }}</span>
                                </span>
                                @enderror
                                <div class="form-control-feedback">
                                    <i class="icon-lock2 text-muted"></i>
                                </div>
                            </div>

                            <div class="form-group d-flex align-items-center">

                                <a href="" class="ml-auto">Mot de passe oublié ?</a>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn bg-orange-400 btn-block">Connexion <i class="icon-circle-right2 ml-2"></i></button>
                            </div>
                            <div class="form-group text-center text-muted content-divider">
                                <span class="px-2">Vous n'avez pas un compte ?</span>
                            </div>

                            <div class="form-group">
                                <a href="{{url('register')}}" class="btn btn-danger btn-block">Créer compte</a>
                            </div>
                        </div>
                    </div>

                </form>
                <!-- /login card -->
            </div>

            </div>
        </div>

            <!-- /content area -->

        </div>
        <!-- /main content -->

    </div>
    <!-- /page content -->


@include('auth.footer')
@stop
