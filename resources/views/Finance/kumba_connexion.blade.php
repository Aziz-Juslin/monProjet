

                    <!-- Error title -->
                    <div style="border-radius:10px" class="text-center mb-3 bg-slate-300">
                        <h2 class="error-title">Finance <i class="icon-lock2 icon-2x mr-2"></i></h2>
                        <h5>Accès est sécurisée, tapez le mot de passe de sécurité</h5>
                    </div>
                    <!-- /error title -->


                    <!-- Error content -->
                    <div class="row">
                        <div class="col-xl-4 offset-xl-4 col-md-8 offset-md-2">

                            <!-- Search -->
                            <form action="{{route('kumba_connexion')}}" method="POST">
                                @csrf
                                <div class="input-group mb-3">
                                    <input type="text" name="kumba" required="" class="form-control form-control-lg" placeholder="Tapez le mot de passe">

                                    <div class="input-group-append">
                                        <button type="submit" class="btn bg-info-700 btn-icon btn-lg">CONFIRMER</button>
                                    </div>
                                </div>
                            <!-- /search -->
                            <!-- Buttons -->
                            <div class="row">
                                <div class="col-sm-6">
                                    <button class="btn bg-slate btn-block"><i class="icon-home4 mr-2"></i>  Modifier mot de passe</button>
                                </div>
                                <div class="col-sm-6 mb-3">
                                    <button class="btn bg-slate btn-block"><i class="icon-lock2 mr-2"></i>  Mot de passe oublié</button>
                                </div>
                            </div>
                            <!-- /buttons -->
                           </form>
                        </div>
                    </div>
                    <!-- /error wrapper -->

              