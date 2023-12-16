@extends('layouts.master_imp', ['title'=> 'rapport frais scolaires'])
@section('section')
<div class="content-wrapper">
      <!-- Content area -->
      <div class="content">
				<div class="card">
				<div class="card-body">
					
					<div class="row">
						<div class="col-sm-6">
							<div class="mb-4">
								<h1 class="mb-2 mt-md-2"><b>{{Auth::user()->ecole}}</b></h1>
                
	 							<ul class="list list-unstyled mb-0 h4">
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
									<h4 class="text-primary mb-2 mt-md-2">{{Auth::user()->province}} le, {{date('d/m/Y')}}</h4>
								</div>
							</div>
						</div>
					</div>
					<hr>
					<div class="row">
						<div class="col-md-6 mb-4 mb-md-2 bg-slate">
 			
							<span class="font-weight-semibold h1 ">Rapport de frais scolaires </span>
						
						</div>

						<div class="col-md-6 mb-4 mb-md-2">
 			
							<span class="font-weight-semibold text-float-right h4">Période: {{$mois == ''?'Toutes': AfficheMois($mois)}} / {{$annee}}</span>
						
						</div>
					</div>
				</div>

				<div class="table-responsive">
					
				     <table  class="table table-striped text-nowrap tex-font-weight-bold h4">
				        <thead  style="color:gray;">
				            <tr>
				                <th>Jour</th>
				                <th>Mois</th>
				                <th>Année scolaire</th>
				                <th>Montant en Dollar</th>
				                <th>Montant en Franc</th>
				            </tr>
				        </thead>
				        <tbody>
				        	@forelse($datePaye as $journal)
				            <tr>
				                <td>
				                	<span class="">{{AfficheJour(( new DateTime($journal->date_rapport))->format('D'))}}</span>
				                	<span class="">{{( new DateTime($journal->date_rapport))->format('d/m/Y')}}</span>
			                	</td>
				                <td>{{AfficheMois(( new DateTime($journal->date_rapport))->format('m'))}}</td>
				                <td>{{$journal->annee_rapport}}</td>
				                <td>{{$journal->dollar}} $</td>
				                <td><span class="font-weight-semibold">{{$journal->franc}} CDF</span></td>
				            </tr>
				            @empty
				            <tr>
				            	<td></td>
				            	<td></td>
				            <td><div class="text-center">
				            	<p class="text-center h2"><i class="icon-alert icon-3x mr-2"></i> Vide !</p>
				            </div></td>
				          </tr>
				           @endforelse
				        </tbody>
				    </table>
				</div>
				<hr class="font-weight-bold">
				<div class="card-body">
					<div class="d-md-flex flex-md-wrap">
						<div class="pt-2 mb-3">
							<h6 class="mb-3">Responsable de la caisse</h6>

							<ul class="list-unstyled">
								<li class="h4">{{Auth::user()->name}}</li>
							</ul>
						</div>

						<div class="pt-2 mb-3 wmin-md-400 ml-auto">
							<h6 class="mb-3">Total Général</h6>
							<div class="table-responsive">
								 <table class="table table-striped text-nowrap">
									<tbody>
										<tr>
											<th>En Dollar:</th>
											<td class="text-right"><h1 class="font-weight-semibold">$ {{$somDollar}}</h1></td>
										</tr>
										<tr>
											<th>En Franc:</th>
											<td class="text-right"><h1 class="font-weight-semibold">CDF {{$somFranc}}</h1></td>
										</tr>
										<tr>
											<th></th>
											<td class="text-right text-primary"><h5 class="font-weight-semibold"></h5></td>
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
			</div>
		</div>
	
@include('layouts.footer1')
@stop 