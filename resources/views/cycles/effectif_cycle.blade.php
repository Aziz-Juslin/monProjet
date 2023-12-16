   
<div class="row">

          <div class="col-lg-3">
            <div class="card">
              <div class="card-body text-center">
              <i class="icon-users2 icon-2x text-slate border-slate border-3 rounded-round p-3 mb-3 mt-1"></i>
                <p class="card-title">Effectif {{ucfirst($cicles)}}</p>
                <a class="text-slate">{{$EffectifParCycle->count()}} {{count_number('Elève', $EffectifParCycle->count())}}</a>
              </div>
            </div>
          </div>

          <div class="col-lg-3">
            <div class="card">
              <div class="card-body text-center">
                <i class="icon-woman icon-2x text-slate border-slate border-3 rounded-round p-3 mb-3 mt-1"></i>
                <p class="card-title">Fille</p>
                <a  class="text-slate">{{$SexeFeminin->count()}} {{count_number('Elève', $SexeFeminin->count())}}</a>
              </div>
            </div>
          </div>

          <div class="col-lg-3">
            <div class="card">
              <div class="card-body text-center">
                <i class="icon-man icon-2x text-slate border-slate border-3 rounded-round p-3 mb-3 mt-1"></i>
                <p class="card-title">Garçon</p>
                <a  class="text-slate">{{$SexeMasculin->count()}} {{count_number('Elève', $SexeMasculin->count())}}</a>
              </div>
            </div>
          </div>

          <div class="col-lg-3">
            <div class="card">
              <div class="card-body text-center">
                <i class="icon-user-cancel icon-2x text-slate border-slate border-3 rounded-round p-3 mb-3 mt-1"></i>
                <p class="card-title">Abandon</p>
                <a  class="text-slate">{{$EleveAbandon->count()}} {{count_number('Elève', $EleveAbandon->count())}}</a>
              </div>
            </div>
          </div>
        </div>
        <!-- /info blocks -->             
 