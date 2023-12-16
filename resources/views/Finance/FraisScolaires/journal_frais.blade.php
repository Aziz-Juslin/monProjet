@extends('layouts.master1', ['title'=> 'Journal de paiement frais scolaires'])
@section('section')

<div class="content-wrapper">
    @include('Finance.tete_finance')
@include('Finance.FraisScolaires.head_frais')
      <!-- Content area -->
      <div class="content">
      <!-- Orders history (datatable) -->
      <div class="row">
        <!-- /categories -->
        <div class="col-md-12">
        <div class="card-body">
        <!-- Basic tables title -->
        <div class="mb-3">
          <h6 class="mb-0 font-weight-semibold">
            Journal de paiement
          </h6>
          <span class="text-muted d-block">Année scolaire: <code>{{Anneesco()}}</code></span>
        </div>
        <!-- Table with togglable columns -->
        <div class="">
        <!-- /table with togglable columns -->
          @if(!$journalFraisScolaireDuJour->isEmpty())
        <table class="table table-striped text-nowrap table-customers">
            <thead>
              <tr>
                <th>Noms</th>
                <th>Sexe</th>
                <th>Classe</th>
                <th>Montant</th>
                <th>Date</th>
                <th>Actions</th>
                <th></th>
              </tr>
            </thead>
            <tbody>
            @foreach($journalFraisScolaireDuJour as $journal)
              <tr>
                <td>
                  <div class="media">
                    <div class="mr-3">
                     <a>
                        <i class="icon-checkmark4 icon-1x   mr-2 {{$journal->dat_frais == date('d/m/Y')?'text-success':'text-muted'}}"></i>
                      </a>
                    </div>

                    <div class="media-body align-self-center">
                    <a class="font-weight-semibold">{{$journal->nom}} {{$journal->post_nom}} {{$journal->prenom}}</a>
                    <div class="text-muted font-size-sm">
                      <span class="{{$journal->dat_frais == date('d/m/Y')?'badge badge-mark bg-success border-success':'badge badge-mark bg-secondary border-secondary'}} mr-1"></span>
                      A payé  {{$journal->dat_frais == date('d/m/Y')?"aujourd'hui":\Carbon\Carbon::parse($journal->created_at)->diffforhumans()}}
                    </div>
                    </div>
                  </div>
                </td>
                <td><a>{{$journal->sexe}}</a></td>
                <td>
                  <ul class="list-unstyled mb-0">
                    <li>
                      <i class="icon-infinite font-size-base text-warning mr-2"></i>
                      {{$journal->classe}}
                    </li>

                    <li>
                      <i class="icon-checkmark3 font-size-base text-success mr-2"></i>
                      {{$journal->cycle}}
                    </li>
                  </ul>
                </td>
                <td><span class="badge badge-warning">{{$journal->franc == ''? "$journal->dollar $":"$journal->franc FC"}}</span></td>
                <td>{{$journal->dat_frais}}</td>
                <td class="text-right">
                  <div class="list-icons">
                    <div class="list-icons-item dropdown">
                      <a class="list-icons-item" data-toggle="dropdown">
                        <i class="icon-menu7"></i>
                      </a>
                      <div class="dropdown-menu dropdown-menu-right">
                        <a href="" class="dropdown-item"><i class="icon-printer"></i> Imprimer</a>
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
            <i class="icon-notification2 mr-2 icon-5x text-muted  p-0 mb-2 mt-1 mr-2"></i><br>Pas encore payer</h6>
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
