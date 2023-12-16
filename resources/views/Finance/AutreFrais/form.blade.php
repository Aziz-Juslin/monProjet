							@foreach($moyekoli as $mo)
							<form method="post" action="{{route('autre_frais_store', $mo->id)}}">
							@csrf
							<div class="row">
			                 <div class="col-lg-6">
			                  <div class="form-group form-group-feedback form-group-feedback-left">
			                      <input type="number"  class="form-control" name="franc" placeholder="Montant en CDF">
			                      <div class="form-control-feedback">
			                        <i class="icon-cash2 text-muted"></i>
			                      </div>
			                    </div>
			                    </div>

			                     <div class="col-lg-6">
			                    <div class="form-group form-group-feedback form-group-feedback-left">
			                      <input type="number"  class="form-control" name="dollar" placeholder="Montant en $">
			                      <div class="form-control-feedback">
			                        <i class="icon-cash text-muted"></i>
			                      </div>
			                    </div>
			                    </div>
			                    </div>
			                    <div class="row">
			                 	<div class="col-lg-6">
									<div class="form-group form-group-feedback form-group-feedback-left">
											<input type="text"  class="form-control" name="annee" value="{{AnneeSco()}}">
											<div class="form-control-feedback">
												<i class="icon-calendar text-muted"></i>
											</div>
										</div>
									</div>
									<div class="col-lg-6">
									<div class="form-group form-group-feedback form-group-feedback-left">
											<select required="" name="trimestre" class="form-control basic-ele-mg-b-10" >

			                        <option value="">Aucun</option>
			                        <option value="1èr Trimestre">1<sub>èr</sub> Trimestre</option>
			                                <option value="2ème Trimestre">2<sub>ème</sub> Trimestre</option>
			                                <option value="3ème Trimestre">3<sub>ème</sub> Trimestre</option>
                                </select>
											<div class="form-control-feedback">
												<i class="icon-stats-growth text-muted"></i>
											</div>
										</div>
									</div>
								</div>
									 <div class="form-group form-group-feedback form-group-feedback-left">
											<textarea name="categorie" autofocus="" class="form-control" placeholder="Déscription de frais"></textarea>
											<div class="form-control-feedback">
											<i class="icon-edit text-muted"></i>
											</div>
										</div>
										<div class="form-group">
											<p class="text-muted font-size-sm">Autres déscriptions</p>
											@include('Finance.AutreFrais.sugetionfrais')
										</div>


									@endforeach
