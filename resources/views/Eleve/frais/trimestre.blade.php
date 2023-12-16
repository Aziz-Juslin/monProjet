 <div class="content-wrapper">
      <!-- Content area -->
      <div class="content">
      <!-- Orders history (datatable) -->
      <div class="row">
         <div class="col-md-3">
          <div data-toggle="modal" data-target="#modal_default" class="btn bg-blue btn-block mt-1">
            <span class="text-uppercase  font-size-sm font-weight-semibold">{{AnneeScolaire()}}</span>
            </div>
                <div class="mt-2">
               @foreach($VoirEleve as $eleve)
            <form action="{{route('frais_eleve', [$eleve->id, $eleve->slug, $eleve->post_nom, $eleve->prenom])}}" method="get">
            @csrf
              @endforeach
              <div class="input-group mb-3">
                <div class="form-group-feedback form-group-feedback-right">
                  <select type="text" name="moda" class="form-control form-control-lg">
                    @foreach($AnneeModalite as $moda)
                    <option value="{{$moda->annee_modalite}}"> 
                    {{$moda->annee_modalite}}</option>
                    @endforeach
                  </select>
                  <div class="form-control-feedback form-control-feedback-lg">
                     <button style="background: non;" type="submit" class="btn btn-light"><i class="icon-search4 text-muted"></i></button>
                  </div>
                </div>
              </div>
                  </form>
                </div>
                <div class="card-header bg-transparent header-elements-inline">
                  <span class="text-uppercase font-size-sm font-weight-semibold">Categories par année</span>
                </div>
                <div class=" border-0 p-0">
                  <ul class="nav nav-sidebar ">
                    <li class="nav-item ">
                      <a  class="nav-link"><i class="icon-arrow-right13"></i>{{$modas}}</a>
                    </li>
                  </ul>
                </div>
                </div>
              <!-- /categories -->

              <div class="col-md-9">
        <div class="">
        <div class="card-header bg-slate header-elements-inline">
        <span class="text-uppercase  font-size-sm font-weight-semibold">Paiement Trimestriel</span>
      </div>
       <div class="card-body">
              <div class="d-md-flex align-items-md-center flex-md-wrap text-center text-md-left">
                <ul class="list-inline mb-0 ml-md-auto">
                  <li class="list-inline-item dropdown">
                    <a href="{{route('eleve_show', [$eleve->id, $eleve->slug, $eleve->post_nom, $eleve->prenom])}}" class="btn btn-link text-default">
                      <i class="icon-display mr-2"></i>
                      {{$eleve->nom}} {{$eleve->post_nom}} {{$eleve->prenom}}
                    </a>
                  </li>
                </ul>
              </div>
          </div>
      <div class="row">
        <div class="col-sm-6 col-lg-4">
        @include('Eleve.frais.fraisPTerminer')
        </div>
        <div class="col-sm-6 col-lg-4">
          @include('Eleve.frais.fraisDTerminer')
        </div> 
        <div class="col-sm-6 col-lg-4">
        @include('Eleve.frais.fraisTTerminer')
        </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>



















