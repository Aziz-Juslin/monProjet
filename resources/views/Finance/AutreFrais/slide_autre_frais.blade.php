<!-- Modal with invoice -->
	<div id="invoice1" class="modal fade">
		<div class="modal-dialog ">
			<div class="modal-content">
				<div class="modal-header  ">
					<h5 class="modal-title">Paiement </h5>
					<button type="button" class="close" data-dismiss="modal">&times;</button>
				</div>
				<div class="card-body">
				@include('Finance.AutreFrais.form')
				</div>

				<div class="modal-footer bg-light">
			<button type="submit" class="btn bg-orange-400">Confirmer</button>
			<button type="button" class="btn btn-light" data-dismiss="modal">Annuler</button>
				</div>
				<form>
			</div>
		</div>
	</div>
	<!-- /modal with invoice -->
