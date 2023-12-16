<div id="ajout" class="modal fade">
		<div class="modal-dialog modal-full">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title"><i class="icon-user-plus mr-2"></i>Formulaire</h5>
					<button type="button" class="close" data-dismiss="modal">&times;</button>
				</div>
				<div class="card-body">
				@if(!$cycles->isEmpty())
				 @include('Eleve.form_slide')
				 <div class="modal-footer bg-dark">
				<button type="submit" class="btn bg-warning-400">Ajouter </button>
				<button type="button" class="btn btn-light" data-dismiss="modal">Annuler</button>
				</div>
				<form>
				@else
				<div class="row">
				<div class="col-md-12">
				@include('ebandeli.ebandeli2')           <!-- Left aligned buttons -->
				<div class="card">
				<div class="text-center text-muted p-5">
				<i style="font-size: 50px" class="icon-notification2"></i><br>
				<h4>Impossible d'ajouter l'élève, aucun cycle n'est séléctioné.</h4>
				</div> 
				</div>
				</div>
				</div>
				@endif
			</div>
		</div>
	</div>
</div>