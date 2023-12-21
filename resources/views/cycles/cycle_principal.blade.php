@extends('layouts.master1', ['title'=> 'Cycle-organise'])
@section('section')
@include('cycles.tete_cycle')
<div class="content-wrapper">
      <!-- Content area -->
      <div class="content">
      <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
          <div class="row">
        @forelse($cycles as $cycle)
        <div class="col-md-6">
          <a href="{{route('cycle', $cycle->slug)}}" class=""><button type="button" class="btn  btn-block btn-float m-0">
            <i class="icon-stack3 text-orange-300 icon-4x border-3 rounded-round p-3"></i>
          <span class="text-muted">{{$cycle->cycle}}</span>
          </button></a>
          </div>
        @empty
      <div class="col-md-12 text-center">

      <p class="nav-item h3"><a  class="nav-link">Aucun cycle</a></p>
      <p class="nav-item "><a  class="nav-link">Nous vous signalons que votre compte n'est pas configuré.</a></p>
      <p class="nav-item bg-light btn"><a href="{{route('cycle_ecole')}}"  class="nav-link">Cliquer ici</a></p>
        </div>
        @endforelse

         </div>
         </div>
         <div class="col-md-3"></div>
    </div>              <!-- /seamless button group -->
    </div>              <!-- /seamless button group -->
    </div>              <!-- /seamless button group -->
@include('layouts.footer1')
@stop
