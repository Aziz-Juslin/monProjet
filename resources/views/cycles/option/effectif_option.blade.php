      
<div class="row">
          <div class="col-lg-3">
            <div class="card">
              <div class="card-body text-center">
              <i class="icon-users2 icon-2x text-slate border-slate border-3 rounded-round p-3 mb-3 mt-1"></i>
                <p class="card-title">Effectif / {{strtoupper($opt)}}</p>
                <a class="btn bg-slate">{{$EffectifParOption->count()}} {{count_number('Elève', $EffectifParOption->count())}}</a>
              </div>
            </div>
          </div>

          <div class="col-lg-3">
            <div class="card">
              <div class="card-body text-center">
                <i class="icon-woman icon-2x text-slate border-slate border-3 rounded-round p-3 mb-3 mt-1"></i>
                <p class="card-title">Fille</p>
                <a  class="btn bg-slate">{{$SexeFemininParOption->count()}} {{count_number('Elève', $SexeFemininParOption->count())}}</a>
              </div>
            </div>
          </div>

          <div class="col-lg-3">
            <div class="card">
              <div class="card-body text-center">
                <i class="icon-man icon-2x text-slate border-slate border-3 rounded-round p-3 mb-3 mt-1"></i>
                <p class="card-title">Garçon</p>
                <a  class="btn bg-slate">{{$SexeMasculinParOption->count()}} {{count_number('Elève', $SexeMasculinParOption->count())}}</a>
              </div>
            </div>
          </div>

          <div class="col-lg-3">
            <div class="card">
              <div class="card-body text-center">
                <i class="icon-user-cancel icon-2x text-slate border-slate border-3 rounded-round p-3 mb-3 mt-1"></i>
                <p class="card-title">Abandon</p>
                <a  class="btn bg-slate">{{$EleveAbandonParOption->count()}} {{count_number('Elève', $EleveAbandonParOption->count())}}</a>
              </div>
            </div>
          </div>
        </div>
        </div>
        <!-- /info blocks -->             
 