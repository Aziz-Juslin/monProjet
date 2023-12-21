<div class="row">
<div class="col-md-6">
<div class=" card">
<div data-toggle="modal" data-target="#modal_default" class="btn bg-orange-400">
    <div class="">
    <i class="icon-cart-add mr-2 icon-1x"></i> Payer le frais scolaire
    </div>
</div>
</div>
</div>
<div class="col-md-6">
<div class="page-header ">
                <div class="page-header-content header-elements-md-inline">
                    <div class="d-flex p-2">
                        <h6><i class="icon-calendar mr-2"></i>  Année scolaire</h6>
                        <a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
                    </div>
                    <div class="header-elements d-none text-center text-md-left mb-3 mb-md-0">
                     <div class="btn-group">
                    @foreach($VoirEleve as $eleve)
                    <form action="{{route('eleve_show', [$eleve->id, $eleve->slug, $eleve->post_nom, $eleve->prenom])}}" method="get">
                    @csrf
                    <div class="form-group-feedback form-group-feedback-left">

                        <select class="form-control form-control-lg "  name="moda" autofocus="">
                            @foreach($AnneeModalite as $moda)
                            <option value="{{$moda->annee_modalite}}"><i class="icon-stack2 mr-2"></i> {{$moda->annee_modalite}}</option>
                            @endforeach
                            </select>
                        <button type="submit" style="border: none" class="form-control-feedback form-control-feedback-lg">
                            <i class="icon-search4 text-muted" ></i>
                        </button>
                    </div>
                           </form>
                           @endforeach
                        </div>
                    </div>
                </div>
                </div>
            </div>
            </div>
            <!-- Simple text stats with icons -->
