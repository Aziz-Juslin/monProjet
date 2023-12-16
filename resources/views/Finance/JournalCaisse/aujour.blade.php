<tr class="table-active table-border-double">
                      <td colspan="5">Aujourd'hui</td>
                      <td class="text-right">
                        <span class="progress-meter" id="yesterday-progress" data-progress="65"></span>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="d-flex align-items-center">
                          <div class="mr-3">
                            <a href="#" class="btn bg-pink-400 rounded-round btn-icon btn-sm">
              							<span class="letter-icon"></span>
              							</a>
                          </div>
                          <div>
                            <a href="#" class="text-default font-weight-semibold">Montant perçu en Franc</a>
                            <div class="text-muted font-size-sm">
                              <span class="badge badge-mark border-pink mr-1"></span>
                              {{date('d/m/Y')}}
                            </div>
                          </div>
                        </div>
                      </td>
                      <td><span class="text-muted">{{$nombreElevePayerFranc}}</span></td>
                      <td><span class="text-pink-600"><i class="icon-stats-growth2 mr-2"></i></span></td>
                      <td><h4 class="font-weight-semibold mb-0">{{$fraispayerAujourdhuiEnFranc}} FC</h4></td>
                      <td><span class="badge bg-pink">Franc</span></td>
                      <td class="text-center">
                        <div class="list-icons">
                          <div class="list-icons-item dropdown">
                            <a href="#" class="list-icons-item dropdown-toggle caret-0" data-toggle="dropdown"><i class="icon-menu7"></i></a>
                            <div class="dropdown-menu dropdown-menu-right">
                              <a href="#" class="dropdown-item"><i class="icon-printer"></i> Imprimer</a>
                            </div>
                          </div>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="d-flex align-items-center">
                          <div class="mr-3">
                            <a href="#" class="btn bg-success-400 rounded-round btn-icon btn-sm">
              							<span class="letter-icon"></span>
              							</a>
                          </div>
                          <div>
                            <a href="#" class="text-default font-weight-semibold">Montant perçu en Dollar</a>
                            <div class="text-muted font-size-sm">
                              <span class="badge badge-mark border-success mr-1"></span>
                              {{\Carbon\Carbon::parse('d')->format('d/m/Y')}}
                            </div>
                          </div>
                        </div>
                      </td>
                      <td><span class="text-muted"> {{$nombreElevePayerDollar}}</span></td>
                      <td><span class="text-success-600"><i class="icon-stats-growth2 mr-2"></i> </span></td>
                      <td><h4 class="font-weight-semibold mb-0">{{$fraispayerAujourdhuiEnDollar}} $</h4></td>
                      <td><span class="badge bg-success">Dollar</span></td>
                      <td class="text-center">
                        <div class="list-icons">
                          <div class="list-icons-item dropdown">
                            <a href="#" class="list-icons-item dropdown-toggle caret-0" data-toggle="dropdown"><i class="icon-menu7"></i></a>
                            <div class="dropdown-menu dropdown-menu-right">
                              <a href="#" class="dropdown-item"><i class="icon-printer"></i> Imprimer</a>
                            </div>
                          </div>
                        </div>
                      </td>
                    </tr>