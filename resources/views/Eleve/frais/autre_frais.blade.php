@extends('layouts.master1', ['title'=> 'autres frais'])
@section('section')

  <div class="content-wrapper">
    @include('Eleve.tete')
    @include('Eleve.head1_eleve')
      <!-- Content area -->
      <div class="content">
      <!-- Orders history (datatable) -->
      <div class="row">
         <div class="col-md-3">

            <div data-toggle="modal" data-target="#invoice1" class="btn bg-orange-400 btn-block mt-1">
            <span class="text-uppercase  font-size-sm font-weight-bold"><i class="icon-cart-add mr-2 icon-1x"></i> Payer autre Frais</span>

                </div>



                <div class="card-header bg-transparent header-elements-inline">
                  <span class="text-uppercase font-size-sm font-weight-semibold">Categories</span>
                </div>

                <div class=" border-0 p-0">
                  <ul class="nav nav-sidebar ">
                    @foreach($descriptions as $recu)
                    <li class="nav-item ">
                      <a class="nav-link"><i class="icon-arrow-right13"></i>{{$recu->categorie}}</a>
                    </li>
                    @endforeach
                  </ul>
                </div>
                </div>
              <!-- /categories -->

        <div class="col-md-9">

        <!-- Basic tables title -->
        <div class="mb-3">
          <h6 class="mb-0 font-weight-semibold">
            Tableau Autres Frais
          </h6>

          <span class="text-muted d-block">Année scolaire: <code>{{Anneesco()}}</code></span>
        </div>
          <!-- Table with togglable columns -->
        <div class="">
        <!-- /table with togglable columns -->

          @if(!$moyekolis->isEmpty())
          <table class="table table-striped text-nowrap table-customers">
            <thead>
              <tr>
                <th>Déscription</th>
                <th>Montant</th>
                <th>Trimestre</th>
                <th>Date</th>
                <th>Année scolaire</th>
                <th>Actions</th>
                <th></th>
              </tr>
            </thead>
            <tbody>
              @foreach($moyekolis as $moye)
              <tr>
                <td>
                  <div class="media">
                    <div class="mr-3">
                     <a>
                        <i class="icon-checkmark3 icon-1x text-orange"></i>
                      </a>
                    </div>

                    <div class="media-body align-self-center">
                      <a  class="font-weight-semibold">{{$moye->categorie}}</a>
                      <div class="text-muted font-size-sm">
                      </div>
                    </div>
                  </div>
                </td>

                <td><a>{{$moye->franc == ''? "$moye->dollar $":"$moye->franc FC"}}</a></td>
                <td>
                  <ul class="list-unstyled mb-0">
                    <li>
                      <i class="icon-infinite font-size-base text-warning mr-2"></i>
                      {{$moye->trimestre}}
                    </li>
                  </ul>
                </td>
                <td>{{( new DateTime($moye->date_paye))->format('d/m/Y')}}</td>
                <td><span class="badge badge-warning">{{$moye->anneesco}}</span></td>
                <td class="text-right">
                  <div class="list-icons">
                    <div class="list-icons-item dropdown">
                      <a class="list-icons-item" data-toggle="dropdown">
                        <i class="icon-menu7"></i>
                      </a>
                      <div class="dropdown-menu dropdown-menu-right">
                        <a href="" class="dropdown-item"><i class="icon-users2"></i> Imprimer</a>
                        <a data-id="{{$moye->id}}" class="dropdown-item autrefrais"><i class="icon-bin"></i> Supprimer</a>
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
@include('Finance.AutreFrais.slide_autre_frais')
@include('layouts.footer1')
@stop
