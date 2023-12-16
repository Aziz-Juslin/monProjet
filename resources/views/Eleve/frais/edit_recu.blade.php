@extends('layouts.master1', ['title'=> 'Modification de Reçu de paiement de frais scolaires'])
@section('section')
@include('Eleve.tete')
@include('Eleve.head1_eleve')
<div class="content">
    @include('ecole.message_ecole')
    <div class="card">
                <div class="row">       
                <div class="col-lg-3"></div>        
                <div class="col-lg-6">
                    @foreach($recuEleves as $recu)
                            <form action="{{route('update_recu', $recu->num_recu)}}" method="post" class="p-4">
                                @csrf 
                                @if(! $recu->dollar == null)            
                                <div class="form-group">
                                <label for="exampleInputEmail1">Montant actuel de reçu</label>
                                <input type="number" name="dollar" value="{{$recu->dollar}}" class="form-control" id="exampleInputEmail1" >
                                </div>              
                                @else
                                 <div class="form-group">
                                <label for="exampleInputEmail1">Montant actuel de reçu </label>
                                <input type="number" name="franc" value="{{$recu->franc}}" class="form-control" id="exampleInputEmail1">
                                </div>
                                @endif
                                <div class="form-group">
                                <select name="trimestre" class="form-control basic-ele-mg-b-10" >
                                <option value="{{$recu->trimestre}}"><span class="">{{$recu->trimestre}}</span></option>
                                <option value="1èr Trimestre">1<sub>èr</sub> Trimestre</option>
                                <option value="2ème Trimestre">2<sub>ème</sub> Trimestre</option>
                                <option value="3ème Trimestre">3<sub>ème</sub> Trimestre</option>                
                                </select> 
                                </div> 
                                <div class="form-group">
                                <label for="exampleInputEmail1">Année scolaire </label>
                                <input type="text" name="annee" class="form-control" id="exampleInputEmail1" value="{{AnneeSco()}}">
                                </div>   
                                <button  type="submit" class="btn bg-info-400 form-control">Confirmer</button>
                                
                                    </form>
                                    @endforeach 
                                </div>
                            </div>
                   
                <div class="col-lg-3"></div>        
                              
                
</div>
</div>
<!-- /content area -->
@include('layouts.footer1')
@stop                   
                <!-- Form validation -->
               
                
   
