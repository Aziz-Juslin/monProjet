@extends('layouts.master1', ['title'=> 'Option-organise'])
@section('section')
@include('cycles.option.tete_option')
<div class="content-wrapper">
      <!-- Content area -->
      <div class="content">
      <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
          <div class="row">
        @forelse($options as $option)
        <div class="col-md-4">
          <a href="{{route('option', $option->option)}}" class=""><button type="button" class="btn  btn-block btn-float m-0">
            <i class="icon-align-right text-pink-400 icon-4x border-3 rounded-round p-3"></i>
          <span class="text-muted">{{$option->option}}</span>
          </button></a>
          </div>
        @empty
         <div class="col-md-12 text-center">
        <p class="nav-item h3"><a  class="nav-link">Aucune option organisée</a></p>
      <p class="nav-item "><a  class="nav-link">Nous vous signalons que votre compte n'est pas configuré.</a></p>
      <p class="nav-item bg-light btn"><a href="{{route('option_ecole')}}"  class="nav-link">Cliquer ici</a></p>
        </div>
        @endforelse
                                    
         </div>
         </div>
         <div class="col-md-3"></div>
    </div>              <!-- /seamless button group -->
    </div>              <!-- /seamless button group -->
    </div>    
@include('layouts.footer1')
@stop                   
