@if(session()->get('messages'))
<div class="alert alert-success text-center">
 <i style="font-size: 50px" class="fa fa-check-circle"></i><br> <span >{{ session()->get('messages') }}.</span>
</div>
@endif
