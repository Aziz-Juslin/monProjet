<div id="modal_default" class="modal fade" tabindex="-1">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header bg bg-dark text-default">
								<h5 class="modal-title  bg-block">Paiement de frais scolaires </h5>
								<button type="button" class="close" data-dismiss="modal">&times;</button>
							</div>

							<div class="modal-body">
							          <div class="">
                            <div class="row">
                               @foreach($VoirElevePhoto as $eleve)
                                <div class="col-lg-12">
                                <div class="modal-body text-center p-1">
                                <div class="mr-3">
                                 @if(!$eleve->photo_eleve == '')
                                    <img src="/uploads/image_eleves/{{$eleve->photo_eleve}}" width="100" height="100" class="rounded-circle" alt="">
                                    @else
                                    <img src="/img/user.png" width="100" height="100" class="rounded-circle" alt="">
                                    @endif
                                </div>
                                <h4 class="text-center text-muted m-b-5">{{ucfirst($eleve->nom)}} {{ucfirst($eleve->post_nom)}}</h4>
                                </div>
                                <hr>
                                @if(! $eleve->active == '1')
                               <form action="{{route('dola_frais', $eleve->id)}}" method="post">
                                @csrf
                                @foreach($FraisFixePourEleve as $modalite)
                                @if(! $modalite->montant_dollar == null)
                                <div class="form-group">
                                <label for="exampleInputEmail1">Préciser le montant</label>
                                <input type="number" name="dollar" class="form-control" id="exampleInputEmail1" placeholder="$">
                                </div>
                                @else
                                 <div class="form-group">
                                <label for="exampleInputEmail1">Préciser le montant </label>
                                <input type="number" name="franc" class="form-control" id="exampleInputEmail1" placeholder="CDF">
                                </div>
                                @endif
                                @endforeach
                                <div class="form-group">
                                <select name="trimestre" class="form-control basic-ele-mg-b-10" >
                                <option value="1èr Trimestre">1<sub>èr</sub> Trimestre</option>
                                <option value="2ème Trimestre">2<sub>ème</sub> Trimestre</option>
                                <option value="3ème Trimestre">3<sub>ème</sub> Trimestre</option>
                                </select>
                                </div>
                                <div class="form-group">
                                <label for="exampleInputEmail1">Année scolaire </label>
                                <input type="text" name="annee" class="form-control" id="exampleInputEmail1" value="{{AnneeSco()}}">
                                </div>
                                <button type="submit" class="btn bg-orange-400 form-control font-weight-bold">Confirmer</button>

                                    </form>
                                     @else
                                    <div>
                                    <hr>
                                    <h3 class="text-center text-muted mt-3">L'élève est désactivé</h3>
                                    <p class="text-center mt-3"><i style="font-size: 95px; color: wheat;" class="icon-exclamation"></i></p>
                                    </div>
                                @endif
                                @endforeach
                                </div>
                            </div>
                        </div>
				          </div>
						  </div>
					</div>
		</div>
				<!-- /basic modal -->
