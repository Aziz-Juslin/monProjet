
         <div class="">
          <div class="card-header bg-slate text-center ">
             <h6 class="card-title bg-slate-400  text-center"><i class="icon-search4-check  mr-2 m-2 icon-2x   p-1 mb-3 mt-1 mr-2"></i> Rapport / frais scolaires</h6>
            </div>
            <div class="header-elements pr-1">
              <div class="list-icons">
              <form class="" action="">
              <div class="input-group p-2">
                <div class="form-group-feedback form-group-feedback-right">
                  <input type="text" class="form-control form-control-lg" placeholder="Recherche...">
                  <div class="form-control-feedback form-control-feedback-lg">
                     <button  type="submit" class="btn btn-link"><i class="icon-search4 text-muted"></i></button>
                  </div>
                </div>
              </div>
            </form>
              </div>
            </div>
          
          <div class="row">
            @foreach($datePaye as $journal)
              <div class="col-lg-6">
                <div class="card border-left-3 border-left-danger rounded-left-0">
                  <div class="card-body">
                    <div class="d-sm-flex align-item-sm-center flex-sm-nowrap">
                      <div>
                        <h6 class="font-weight-semibold">{{Auth::user()->name}}</h6>
                        <ul class="list list-unstyled mb-0">
                          <li>Rapport journalier de finance : <b>Frais scolaire</b></li>
                          <li>Mois : <span class="font-weight-semibold">{{( new DateTime($journal->date_rapport))->format('F, Y')}}</span></li>
                        </ul>
                      </div>

                      <div class="text-sm-right mb-0 mt-3 mt-sm-0 ml-auto">
                        <h3 class="font-weight-semibold bg-primary btn">$ {{$journal->dollar}}</h3>
                        <h3 class="font-weight-semibold bg-success btn h3">CDF {{$journal->franc}}</h3>
                        <ul class="list list-unstyled mb-0">
                          <li>Année scolaire: <span class="font-weight-semibold">{{$journal->annee_rapport}}</span></li>
                        </ul>
                      </div>
                    </div>
                  </div>

                  <div class="card-footer d-sm-flex justify-content-sm-between align-items-sm-center">
                    <span>
                      <span class="badge badge-mark border-danger mr-2"></span>
                      Date :
                      <span class="font-weight-semibold">{{( new DateTime($journal->date_rapport))->format('d/m/Y')}}</span>
                    </span>

                    <ul class="list-inline list-inline-condensed mb-0 mt-2 mt-sm-0">
                      <li class="list-inline-item">
                        <a href="#" class="text-default" data-toggle="modal" data-target="#invoice"><i class="icon-eye8"></i></a>
                      </li>
                      <li class="list-inline-item dropdown">
                        <a href="#" class="text-default dropdown-toggle" data-toggle="dropdown"><i class="icon-menu7"></i></a>

                        <div class="dropdown-menu dropdown-menu-right">
                          <a href="#" class="dropdown-item"><i class="icon-printer"></i> Print invoice</a>
                        </div>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
              @endforeach
              
          </div>
          </div>


          