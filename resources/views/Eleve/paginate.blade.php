				@if($journalFraisScolaireDuJour->hasMorePages())
				<div class="d-flex justify-content-center mt-3 mb-3">
				<ul class="pagination">
				<li class="page-item "><a href="{{$journalFraisScolaireDuJour->nextPageUrl()}}" class="page-link"><i class="icon-arrow-right6"></i></a></li>
				</ul>
				</div>
				@endif
     			<!-- Pagination -->
    			@if($journalFraisScolaireDuJour->previousPageUrl())
				<div class="d-flex justify-content-center mt-3 mb-3">
				<ul class="pagination">
				<li class="page-item "><a href="{{$journalFraisScolaireDuJour->previousPageUrl()}}" class="page-link"><i class="icon-arrow-left52"></i></a></li>
				</ul>
				</div>
				@endif
				<!-- /pagination -->