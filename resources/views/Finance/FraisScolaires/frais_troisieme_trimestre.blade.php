 <table class="table  table-striped text-nowrap table-customers">
            <thead>
              <tr>
                <th>Noms</th>
                <th>Sexe</th>
                <th>Classe</th>
                <th>Trimestre</th>
                <th>Montant</th>
                <th>Date</th>
                <th></th>
                <th></th>
              </tr>
            </thead>
            <tbody>
              @foreach($journalFraisScolaireDuJour as $journal)
              <tr>
                <td>
                  <div class="media">
                  	 <div class="mr-3">
                      <i class="icon-user  mr-2 {{( new DateTime($journal->dat_frais))->format('d/m/Y') == date('d/m/Y')?'text-warning':'text-muted'}}"></i>
                    </div>
                    <div class="media-body align-self-center">
                      <a  class="font-weight-semibold">{{$journal->nom}} {{$journal->post_nom}} {{$journal->prenom}}</a>
                      <div class="text-muted font-size-sm">
                       A payé  {{( new DateTime($journal->dat_frais))->format('d/m/Y') == date('d/m/Y')?"aujourd'hui":TimeToJourJ($journal->dat_frais)}}
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
                <td>{{$journal->trimestre}}</td>
                <td>{{$journal->franc == ''? " $journal->dollar $":"$journal->franc FC"}}</td>
                <td><a>{{( new DateTime($journal->dat_frais))->format('d/m/Y')}}</a></td>
                <td class="text-right">
                  <div class="list-icons">
                    <div class="list-icons-item dropdown">
                      <a  class="list-icons-item" data-toggle="dropdown">
                        <i class="icon-menu7"></i>
                      </a>

                      <div class="dropdown-menu dropdown-menu-right">
                        <a  class="dropdown-item"><i class="icon-pencil7"></i> Modifier</a>
                        <a   class="dropdown-item"><i class="icon-bin"></i> Supprimer</a>
                        <a   class="dropdown-item"><i class="icon-printer"></i> Imprimer</a>
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
