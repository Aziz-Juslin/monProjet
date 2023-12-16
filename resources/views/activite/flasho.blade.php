@if(session()->get('message')) 
<script id="flashy-template" type="text/template">
    <div class="flashy flashy--{{Session::get('message')}}">
         <i style="font-size: 30px" class="far fa-bell"></i>
        <a href="#" class="flashy__body" target="_blank"></a>
    </div>
</script>

<script>
    flashy("{{Session::get('message')}}", "{{Session::get('message')}}");
</script>
@endif