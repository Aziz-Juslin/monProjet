@extends('layouts.master1', ['title'=> "$cicle   Modalité de frais scolaires"])
@section('section')

<div class="content-wrapper">
    @include('Finance.tete_finance')
@include('Finance.FraisScolaires.head_frais')
      <!-- Content area -->
      <div class="content">
      <!-- Orders history (datatable) -->
      <div class="row">
        <div class="col-md-12">

          <div class="card-body">

        <!-- Basic tables title -->
        <div class="mb-3">
          <h6 class="mb-0 font-weight-semibold">
            Tableau Modalités de paiement {{$cicle}}

          </h6>

          <span class="text-muted d-block">Année scolaire: <code>{{Anneesco()}}</code></span>
        </div>

          <!-- Table with togglable columns -->
        <div class="">
        <!-- /table with togglable columns -->
          @if(!$ModaFixe->isEmpty())
          <table class="table table-striped text-nowrap table-customers">
            <thead>
              <tr>
                <th>Classe</th>
                <th>Cycle</th>
                <th>Trimestre</th>
                <th>Montant à payer</th>
                <th>Année Scolaire</th>
                <th>Actions</th>
                <th></th>
              </tr>
            </thead>
            <tbody>
               @foreach($ModaFixe as $mode)
              <tr>
                <td>
                  <div class="media">
                    <div class="mr-3">
                     <a>
                        <i class="icon-checkmark3 icon-1x text-warning"></i>
                      </a>
                    </div>

                    <div class="media-body align-self-center">
                      <a  class="font-weight-semibold">{{$mode->classe}}</a>
                      <div class="text-muted font-size-sm">
                      </div>
                    </div>
                  </div>
                </td>

                <td><a>{{$mode->cycles}}</a></td>
                <td>
                  <ul class="list-unstyled mb-0">
                    <li>
                      <i class="icon-infinite font-size-base text-warning mr-2"></i>
                      {{$mode->trimestre}}
                    </li>
                  </ul>
                </td>

                <td><span class="badge badge-warning">{{$mode->montant_franc == ''? "$mode->montant_dollar $": "$mode->montant_franc CDF"}}</span></td>
                <td>{{$mode->annee_modalite}}</td>
                <td class="text-right">
                  <div class="list-icons">
                    <div class="list-icons-item dropdown">
                      <a class="list-icons-item" data-toggle="dropdown">
                        <i class="icon-menu7"></i>
                      </a>
                      <div class="dropdown-menu dropdown-menu-right">
                        <a href="{{route('destroy_moda', $mode->id)}}" class="dropdown-item autrefrais"><i class="icon-bin"></i> Supprimer</a>
                        <div class="dropdown-divider"></div>
                      </div>
                    </div>
                  </div>
                </td>
                <td class="pl-0"></td>
              </tr>
               @endforeach
            </tbody>
          </table>
          @else
          <div class=" text-center mt-3 text-muted">
              <h6 class="card-title">
            <i class="icon-notification2 mr-2 icon-5x text-muted  p-0 mb-2 mt-1 mr-2"></i><br>Aucun frais fixé en {{$cicle}} </h6>
          </div>

          @endif
          <!-- Course widget -->

        <!-- /course widget -->
        </div>
     </div>
  </div>
</div>

</div>
</div>
@include('layouts.footer1')
@stop
