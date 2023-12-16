
<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/css/toastr.css" rel="stylesheet"/>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/js/toastr.js"></script>
<script>
@if (Session::has('messages'))
    toastr.options={
        "closeButton": true,
        "progressBar": true,
    };
    toastr.success("{{Session::get('messages')}}",'Success !',({timeOut:12000}));
@endif

@if (Session::has('message'))
    toastr.options={
        "closeButton": true,
        "progressBar": true,
    };
    toastr.error("{{Session::get('message')}}",'Erreur !',({timeOut:12000}));
@endif
</script>
