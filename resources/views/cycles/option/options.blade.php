@extends('layouts.master1', ['title'=> $opt])
@section('section')
@include('cycles.option.head_option')
<div class="content">  
@include('cycles.option.effectif_option')
  </div>
@include('layouts.footer1')
@stop