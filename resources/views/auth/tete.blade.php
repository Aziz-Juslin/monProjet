<div id="" class="section-title">
        	<div   class="row">
        	<div class="col-lg-4 mt-4 text-left">
            <a href="{{route('ebandeli')}}">
        	<img width="100" src="/img/ds.png"></a>
        	</div>
          @if(Route::is('register'))
          <div class="col-lg-5 mt-4"></div>
        	@elseif(Route::is('login'))
          <div class="col-lg-5 mt-4"></div>
          @else
        	<div class="col-lg-5 mt-4 text-left">
             <form action="#">
              <fieldset>
              <div class="input-group">
                <input  id="oSaisie" name="q" type="text" class="form-control" aria-label="Saisie de mots clés" placeholder="Recherche..." required="required">
                <div class="input-group-append">
                  <button  class="btn btn-primary" type="submit"><i  class="bx bx-search"></i></button>
                </div>
              </div>
            </fieldset>
            </form>
            </div>
            @endif
            <div class="col-lg-3 mt-4">
              @if(Route::is('ecole'))
              <h2><i class="bx bx-file-blank"></i></h2>
              @elseif(Route::is('login'))
              <h2><i class="bx bx-server"></i></h2>
              @elseif(Route::is('register'))
              <h2><i class="bx bx-server"></i></h2>
              @elseif(Route::is('eleve'))
              <h2 class="text-center"><i class="bx bx-user"></i></h2>
              @else
              @endif
          </div>
            </div>
        </div>