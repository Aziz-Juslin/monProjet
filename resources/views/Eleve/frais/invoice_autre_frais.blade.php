<!-- Modal with invoice -->
	<div id="invoice" class="modal fade">
		<div class="modal-dialog modal-full modal-content">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title"><img width="80" src="/img/ds.png"></h5>
					<button type="button" class="close" data-dismiss="modal">&times;</button>
				</div>

				<div class="card-body">
					<div class="row">
						<div class="col-sm-6">
							<div class="mb-4">
								<h2 class="mb-2 mt-md-2"><b>{{Auth::user()->ecole}}</b></h2>
                
	 							<ul class="list list-unstyled mb-0">
	 								@foreach($infoEcole as $ecole)
									<li>{{$ecole->adresse}}</li>
									<li>{{Auth::user()->province}}/{{$ecole->commune}}</li>
									<li>RDC</li>
									@endforeach
								</ul>
							</div>
						</div>

						<div class="col-sm-6">
							<div class="mb-4">
								<div class="text-sm-right">
									<h6 class="text-primary mb-2 mt-md-2">{{Auth::user()->province}} le, {{date('d/m/Y')}}</h6>
								</div>
							</div>
						</div>
					</div>

					<div class="d-md-flex flex-md-wrap">
						<div class="mb-4 mb-md-2">
							<span class="text-muted">Par:</span>
 							<ul class="list list-unstyled mb-0">
								<li><h5 class="my-2">{{$eleve->nom}} {{$eleve->post_nom}} {{$eleve->prenom}}</h5></li>
							<li><span class="font-weight-semibold h4">Tableau de paye</span></li>
							</ul>
						</div>
					</div>
				</div>

				<div class="table-responsive">
				    <table class="table table-lg">
				        <thead>
				            <tr>
				                <th>Description de frais</th>
				                <th>Trimestre</th>
				                <th>Date</th>
				                <th>Montant</th>
				            </tr>
				        </thead>
				        <tbody>
				        	@foreach($moyekolis as $journal)
				            <tr>
				                <td>
				                	<h6 class="mb-0">{{$journal->categorie}}</h6>
				                	<span class="text-muted">A payé  {{( new DateTime($journal->created_at))->format('d/m/Y') == date('d/m/Y')?"aujourd'hui":\Carbon\Carbon::parse($journal->created_at)->diffforhumans()}} | Annéé scolaire : {{$journal->anneesco}}</span>
			                	</td>
				                <td>{{$journal->trimestre}}</td>
				                <td>{{( new DateTime($journal->created_at))->format('d/m/Y')}}</td>
				                <td><span class="font-weight-semibold">{{$journal->franc == ''? "$journal->dollar $":"$journal->franc FC"}}</span></td>
				            </tr>
				           @endforeach
				        </tbody>
				    </table>
				</div>

				<div class="card-body">
					<div class="d-md-flex flex-md-wrap">
						<div class="pt-2 mb-3">
							<h6 class="mb-3">Authorized person</h6>
							<div class="mb-3">
								<img src="../../../../global_assets/images/signature.png" width="150" alt="">
							</div>

							<ul class="list-unstyled text-muted">
								<li>Eugene Kopyov</li>
								<li>2269 Elba Lane</li>
								<li>Paris, France</li>
								<li>888-555-2311</li>
							</ul>
						</div>

						<div class="pt-2 mb-3 wmin-md-400 ml-auto">
							<h6 class="mb-3">Total due</h6>
							<div class="table-responsive">
								<table class="table">
									<tbody>
										<tr>
											<th>Subtotal:</th>
											<td class="text-right">$7,000</td>
										</tr>
										<tr>
											<th>Tax: <span class="font-weight-normal">(25%)</span></th>
											<td class="text-right">$1,750</td>
										</tr>
										<tr>
											<th>Total:</th>
											<td class="text-right text-primary"><h5 class="font-weight-semibold">$8,750</h5></td>
										</tr>
									</tbody>
								</table>
							</div>

							<div class="text-right mt-3">
								<button onclick="window.addEventListener('load', window.print())" class="btn btn-primary btn-labeled btn-labeled-left"><b><i class="icon-printer"></i></b> Imprimer</button>
							</div>
						</div>
					</div>
				</div>

				<div class="card-footer text-center">
	            <span class="text-muted"> <i class="icon-thumbs-up2 mr-2"></i> Merci pour avoir utilisé 2-Six</span>
	          </div>
				<div class="modal-footer bg-transparent">
					<button type="button" class="btn btn-light" data-dismiss="modal">Fermer</button>
				</div>
			</div>
		</div>
	</div>
	<!-- /modal with invoice -->
