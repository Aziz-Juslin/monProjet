@extends('layouts.master1', ['title'=> 'reçu de paiement de frais scolaires'])
@section('section')
@include('Eleve.tete') 
<div class="content-wrapper">
@include('Eleve.head1_eleve')
@include('Eleve.frais.recu')
</div>                          
</div>                                                  
@include('Eleve.aside_eleve')
@include('layouts.footer1')
@stop                   
       