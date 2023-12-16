      
<div class="row">
          <div class="col-lg-3">
            <div class="card">
              <div class="card-body text-center">
              <i class="icon-users2 icon-2x text-slate border-slate border-3 rounded-round p-3 mb-3 mt-1"></i>
                <p class="card-title">Effectif / Pesonnel</p>
                <a class="btn bg-slate">{{$Personnels->count()}} </a>
              </div>
            </div>
          </div>

          <div class="col-lg-3">
            <div class="card">
              <div class="card-body text-center">
                <i class="icon-woman icon-2x text-slate border-slate border-3 rounded-round p-3 mb-3 mt-1"></i>
                <p class="card-title">Femme</p>
                <a  class="btn bg-slate">{{$PersonnelFemme->count()}} </a>
              </div>
            </div>
          </div>

          <div class="col-lg-3">
            <div class="card">
              <div class="card-body text-center">
                <i class="icon-man icon-2x text-slate border-slate border-3 rounded-round p-3 mb-3 mt-1"></i>
                <p class="card-title">Homme</p>
                <a  class="btn bg-slate">{{$PersonnelHomme->count()}} </a>
              </div>
            </div>
          </div>

          <div class="col-lg-3">
            <div class="card">
              <div class="card-body text-center">
                <i class="icon-user-cancel icon-2x text-slate border-slate border-3 rounded-round p-3 mb-3 mt-1"></i>
                <p class="card-title">Quitté</p>
                <a  class="btn bg-slate">{{$Personnel_quitte->count()}}</a>
              </div>
            </div>
          </div>
        </div>
        </div>
        <!-- /info blocks -->             
 