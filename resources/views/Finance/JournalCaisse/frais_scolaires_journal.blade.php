      <!-- Customers -->
        <div class="">
           
          <!-- Dashboard content -->
        <div class="row">
          <div class="col-xl-12">

            <!-- Marketing campaigns -->
            <div class="">
              <div class="card-header header-elements-sm-inline">
                 <h6 class="card-title text-muted font-weight-bold"> Frais Scolaires</h6>
                <div class="header-elements">
                  <span class="badge bg-slate badge-pill">{{AfficheMois(date('m'))}} {{date('Y')}}</span>
                  <div class="list-icons ml-3">
                            
                          </div>
                        </div>
              </div>

              <div class="card-body d-sm-flex align-items-sm-center justify-content-sm-between flex-sm-wrap">
                <div class="d-flex align-items-center mb-3 mb-sm-0">
                  <div ><i class="icon-cash3 icon-2x text-success"></i></div>
                  <div class="ml-3">
                    <h1 class="font-weight-semibold mb-0">{{$fraispayerAujourdhuiEnDollar}} $<span class="text-success font-size-sm font-weight-normal"><i class="icon-arrow-up12"></i> (Dollar)</span></h1>
                    <span class="badge badge-mark border-success mr-1"></span> <span class="text-muted">Aujourd'hui, le {{date('d/m/Y')}}</span>
                  </div>
                </div>

                <div class="d-flex align-items-center mb-3 mb-sm-0">
                  <div > <i class="icon-cash4 icon-2x text-pink"></i></div>
                  <div class="ml-3">
                    <h1 class="font-weight-semibold mb-0">{{$fraispayerAujourdhuiEnFranc}} FC<span class="text-pink font-size-sm font-weight-normal"><i class="icon-arrow-down12"></i> (Franc)</span></h1>
                    <span class="badge badge-mark border-pink mr-1"></span> <span class="text-muted">Aujourd'hui, le {{date('d/m/Y')}}</span>
                  </div>
                </div>

                <div>
                  <a href="{{route('journal_frais')}}" class="btn bg-orange-300"><i class="icon-statistics mr-2"></i> Journal de paiement</a>
                </div>
              </div>

              <div class="table-responsive">
                <table class="table text-nowrap">
                  <thead>
                    <tr>
                      <th>Modalité</th>
                      <th>Nombre d'élèves payer</th>
                      <th>Monétaire</th>
                      <th>Montant journalier</th>
                      <th>Status</th>
                      <th class="text-center" style="width: 20px;"><i class="icon-arrow-down12"></i></th>
                    </tr>
                  </thead>
                  <tbody>
                    @include('Finance.JournalCaisse.aujour')
                    @include('Finance.JournalCaisse.hier')
                    

                  </tbody>
                </table>
              </div>
            </div>
            <!-- /marketing campaigns -->

         </div>
        <!-- /customers -->
     </div>
  </div>