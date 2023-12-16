@extends('layouts.master1', ['title'=> 'Personnel'])
@section('section')
@include('personnel.tete_personnel')
<div class="content-wrapper">
      <!-- Content area -->
        <div class="content">
         <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <div class="row">

            <div class="col-md-6">
            <a href="{{route('ajout_personnel')}}" class=""><button type="button" class="btn  btn-block btn-float m-0">
            <i class="icon-user-plus text-danger-400 icon-4x border-3 rounded-round p-3"></i>
            <span class="text-muted">Ajouter</span>
            </button></a>
            </div>
            <div class="col-md-6">
                <a href="{{route('personnel')}}" class=""><button type="button" class="btn  btn-block btn-float m-0">
                    <i class="icon-user-check text-danger-400 icon-4x border-3 rounded-round p-3"></i>
                    <span class="text-muted text-uppercase">Mes Personnel</span>
            </button></a>
        </div>
         </div>
         </div> 
         <div class="col-md-3"></div>             <!-- /seamless button group -->
    </div>
</div>              <!-- /seamless button group -->
                      <!-- /seamless button group -->
    
@include('layouts.footer1')
@stop                   

       