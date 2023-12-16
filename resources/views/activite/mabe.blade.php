@if(session()->get('message'))
<div class="alert alert-danger"> <i class="ti-user"></i> {{ session()->get('message') }}
<button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
</div>
@endif

