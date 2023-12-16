@extends('layouts.master1', ['title'=> 'Mes personnel'])
@section('section')
@include('personnel.headPersonnel')
 <div class="content">
@include('personnel.effectif_personnel')
</div>
@include('layouts.footer1')
@stop