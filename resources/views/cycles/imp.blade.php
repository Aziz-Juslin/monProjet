 <!-- Basic modal -->
 <div id="modal_default" class="modal fade" tabindex="-1">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header bg-slate">
								<h5 class="modal-title">{{$cicles}} seléctionner la classe </h5>
								<button type="button" class="close" data-dismiss="modal">&times;</button>
							</div>

							<div class="modal-body">
								<div class="">
           
              <form class="p-2" action="{{route('imprimer', $cicles)}}" method="get">
              @csrf
                 <div class="row">
                    <div class="col-lg-12">
                    <div class="form-group form-group-feedback form-group-feedback-left">
                    <select class="form-control" name="classe" id="exampleSelect1" required="">
                      @if($cicles == 'Maternelle')
                      <option value="1èr">1èr</option>
                      <option value="2ème">2ème</option> 
                      <option value="3ème">3ème</option>
                      @elseif($cicles == 'Primaire')
                      <option value="1èr">1èr</option>
                      <option value="2ème">2ème</option> 
                      <option value="3ème">3ème</option>
                      <option value="4ème">4ème</option>
                      <option value="5ème">5ème</option>
                      <option value="6ème">6ème</option>
                      @elseif($cicles == 'Education-b')
                      <option value="7ème">7ème</option>
                      <option value="8ème">8ème</option>
                      @elseif($cicles == 'Humanite')
                      <option value="1èr">1èr</option>
                      <option value="2ème">2ème</option> 
                      <option value="3ème">3ème</option>
                      <option value="4ème">4ème</option>
                      @else
                      @endif
                      </select>
                      <div class="form-control-feedback">
                        <i class="icon-reading text-muted"></i>
                      </div>
                    </div>
                    </div>

                    <div class="col-lg-12">
                    <div class="form-group form-group-feedback form-group-feedback-left">
                      <select class="form-control" name="local" id="exampleSelect1">
                       <option selected>Local</option> 
                        <option value="Tous">Tous</option> 
                        <option value="A">A</option> 
                        <option value="B">B</option> 
                        <option value="C">C</option> 
                        <option value="D">D</option> 
                        <option value="E">E</option> 
                        <option value="F">F</option>
                        <option value="G">G</option>
                        <option value="1">1</option> 
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                       <option value="9">9</option>
                        <option value="10">10</option>
                        <option value="11">11</option>
                        <option value="12">12</option>
                        <option value="13">13</option>
                        <option value="14">14</option>
                        <option value="15">15</option>
                        <option value="16">16</option>
                        <option value="17">17</option>
                        <option value="18">18</option>
                        <option value="19">19</option>
                        <option value="20">20</option>
                      </select>
                      <div class="form-control-feedback">
                        <i class="icon-pin-alt text-muted"></i>
                      </div>
                    </div>
                    </div>
                    @if($cicles == 'Humanite')
                    <div class="col-lg-12">
                    <div class="form-group form-group-feedback form-group-feedback-left">
                      <select class="form-control" name="option" required="">
                       <option selected="">Option</option>
                       @if($cicles == 'Humanite')
                       @foreach($options as $option)
                      <option value="{{$option->option}}">{{$option->option}}</option>
                       @endforeach
                       @endif
                       </select>
                      <div class="form-control-feedback">
                        <i class="icon-pin-alt text-muted"></i>
                      </div>
                    </div>
                    </div>
                    @else
                    @endif
                     
                     <div class="col-lg-12">
                    <button  type="submit" class="btn bg-indigo form-control">
                      <i class="icon-search4 font-size-base mr-2"></i>
                      Afficher
                    </button>
                     </div>
                     </div>
                   </form>
                </div>
				</div>
						</div>
					</div>
				</div>
				<!-- /basic modal -->

