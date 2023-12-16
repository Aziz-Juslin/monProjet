@extends('layouts.master1', ['title'=> 'Personnel'])
@section('section')
@include('personnel.head_personnel')
          <!-- Left content -->
    		
         <div class="row">
          <div class="col-md-4">
              <!-- Course details -->
              <div class="card">
              	 @foreach($VoirPersonnel as $personnel)
                <div class="card-header bg-transparent header-elements-inline">
                  <span class="text-uppercase font-size-sm font-weight-semibold">{{$personnel->nom}} {{$personnel->post_nom}} {{$personnel->prenom}}</span>
                  <div class="header-elements">
                    <div class="list-icons">
                      <a class="list-icons-item" data-action="collapse"></a>
                    </div>
                    </div>
                </div>
                <div class="card-body pb-0">
                  <a class="btn bg-teal-400 btn-block mb-2">Détails</a>
                </div>
                <table class="table table-borderless table-responsive table-xs border-top-0 my-2">
                  <tbody>
                    <tr>
                      <td class="font-weight-semibold">Etat civil:</td>
                      <td class="text-right">{{$personnel->etat_civil}} </td>
                    </tr>
                    <tr>
                      <td class="font-weight-semibold">Qualification:</td>
                      <td class="text-right">
                        <span class="badge bg-primary">{{$personnel->qualification}}</span>
                      </td>
                    </tr>
                    <tr>
                      <td class="font-weight-semibold">Fonction:</td>
                      <td class="text-right">{{$personnel->fonction}}</td>
                    </tr>
                    <tr>
                      <td class="font-weight-semibold">{{$personnel->sexe == 'M'?'Né ':'Née '}}:</td>
                      <td class="text-right">{{(new DateTime($personnel->date_ne))->format('d/m/Y')}}</td>
                    </tr>
                    <tr>
                      <td class="font-weight-semibold">Adresse:</td>
                      <td class="text-right">{{$personnel->adresse}}</td>
                    </tr>
                    <tr>
                      <td class="font-weight-semibold">Téléphone:</td>
                      <td class="text-right"><a href="#">{{$personnel->phone}}</a></td>
                    </tr>
                    <tr>
                      <td class="text-right text-muted">
                        <i class="icon-star-full2 font-size-base text-warning-300"></i>
                        <i class="icon-star-full2 font-size-base text-warning-300"></i>
                      </td>
                    </tr>
                  </tbody>
                </table>
                @endforeach
              </div>
              
              <!-- /course details -->
             </div>
            <div class="col-md-8">
            With DataTables you can alter the ordering characteristics of the table at initialisation time. Using the <code>order</code> initialisation parameter, you can set the table to display the data in exactly the order that you want. The <code>order</code> parameter is an array of arrays where the first value of the inner array is the column to order on, and the second is <code>'asc'</code> or <code>'desc'</code> as required. The table below is ordered (descending) by the <code>DOB</code> column.
          </div>
      </div>
<!-- /dashboard content -->
@include('personnel.foot_perso')
@include('layouts.footer1')
@stop          