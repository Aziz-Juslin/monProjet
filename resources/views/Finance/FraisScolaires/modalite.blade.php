
           <div class="card">
              <form class="p-2" action="{{route('store_modalite')}}" method="post">
              @csrf
                  <div class="row">
                    <div class="col-lg-6">
                    <div class="form-group form-group-feedback form-group-feedback-left">
                    <select class="form-control" name="classe" id="exampleSelect1" required="">
                      <option value="1èr">1èr</option>
                      <option value="2ème">2ème</option>
                      <option value="3ème">3ème</option>
                      <option value="4ème">4ème</option>
                      <option value="5ème">5ème</option>
                      <option value="6ème">6ème</option>
                      <option value="7ème">7ème</option>
                      <option value="8ème">8ème</option>
                      </select>
                      <div class="form-control-feedback">
                        <i class="icon-reading text-muted"></i>
                      </div>
                    </div>
                    </div>

                    <div class="col-lg-6">
                    <div class="form-group form-group-feedback form-group-feedback-left">
                     <select class="form-control" name="cycle" required>
                      @foreach($cycles as $cycle)
                      <option value="{{$cycle->cycle}}">{{$cycle->cycle}}</option>
                      @endforeach
                      </select>
                      <div class="form-control-feedback">
                        <i class="icon-pin-alt text-muted"></i>
                      </div>
                    </div>
                    </div>
                    </div>

                    <div class="row">
                    <div class="col-lg-6">
                    <div class="form-group form-group-feedback form-group-feedback-left">
                      <input type="number"  class="form-control" name="franc" placeholder="Montant en CDF">
                      <div class="form-control-feedback">
                        <i class="icon-cash2 text-muted"></i>
                      </div>
                    </div>
                    </div>

                    <div class="col-lg-6">
                    <div class="form-group form-group-feedback form-group-feedback-left">
                      <input type="number"  class="form-control" name="dollar" placeholder="Montant en $">
                      <div class="form-control-feedback">
                        <i class="icon-cash text-muted"></i>
                      </div>
                    </div>
                    </div>
                    </div>

                     <div class="row">
                     <div class="col-lg-12">
                    <div class="form-group form-group-feedback form-group-feedback-left">
                      <input type="text"  class="form-control" name="annee" value="{{AnneeSco()}}">
                      <div class="form-control-feedback">
                        <i class="icon-calendar text-muted"></i>
                      </div>
                    </div>
                    </div>

                    </div>

                    <div class="row">
                     <div class="col-lg-4">
                   <button type="submit" class="btn bg-orange ml-3">Confirmer <i class="icon-paperplane ml-2"></i></button>
                     </div>
                     </div>
                   </form>
                </div>

