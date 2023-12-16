@extends('layouts.master1', ['title'=> $cicles])
@section('section')
@include('cycles.tete_cycle')
@include('cycles.head_cycle')
<div class="content">
      
@include('cycles.effectif_cycle') 
          
</div>
@include('cycles.footer_cycle')
@include('layouts.footer1')
@stop