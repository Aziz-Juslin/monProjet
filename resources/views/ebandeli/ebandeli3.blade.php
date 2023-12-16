
                  
                        <!-- User details (with sample pattern) -->
                        <div class="">
                            
                            <div class="card-body bg-indigo text-center card-img-top" style="background-image: url(../../../../global_assets/images/backgrounds/panel_bg.png); background-size: contain;">
                                <div class="card-img-actions d-inline-block mb-3">
                                    @if(! $photoAdmin->isEmpty())
                                    @foreach($photoAdmin as $user)
                                    <img class="img-fluid rounded-circle" src="/Dossier/images_admin/{{$user->photo_user}}" width="170" height="170" alt="">
                                    @endforeach
                                    @else
                                    <img class="img-fluid rounded-circle" src="/img/user.png" width="170" height="170" alt="">
                                    @endif
                                    <div class="card-img-actions-overlay card-img rounded-circle">
                                    @if(! $photoAdmin->isEmpty())
                                    @foreach($photoAdmin as $user)
                                    <a href="/Dossier/images_admin/{{$user->photo_user}}" class="btn btn-outline bg-white text-white border-white border-2 btn-icon rounded-round">
                                    <i class="icon-plus3"></i>
                                    </a>
                                    @endforeach
                                    @else
                                    <a href="/img/user.png" class="btn btn-outline bg-white text-white border-white border-2 btn-icon rounded-round">
                                    <i class="icon-plus3"></i>
                                    </a>
                                    @endif
                                    <a href="{{route('admin_show')}}" class="btn btn-outline bg-white text-white border-white border-2 btn-icon rounded-round ml-2">
                                    <i class="icon-link"></i>
                                    </a>
                                    </div>
                                </div>

                                <h6 class="font-weight-semibold mb-0">{{Auth::user()->name}}</h6>
                                <span class="d-block opacity-75">Administrateur</span>

                                <ul class="list-inline list-inline-condensed mt-3 mb-0">
                                   
                                    <li class="list-inline-item">
                                        <a href="#" class="btn btn-outline bg-white btn-icon text-white border-white border-2 rounded-round">
                                            <i class="icon-twitter"></i>
                                        </a>
                                    </li>
                                    
                                </ul>
                            </div>

                            <div class="card-body border-top-0">
                                <div class="d-sm-flex flex-sm-wrap mb-3">
                                    <div class="font-weight-semibold">Ecole:</div>
                                    <div class="ml-sm-auto mt-2 mt-sm-0">{{Auth::user()->ecole}}</div>
                                </div>
                                <div class="d-sm-flex flex-sm-wrap mb-3">
                                    <div class="font-weight-semibold">Téléphone:</div>
                                    <div class="ml-sm-auto mt-2 mt-sm-0">{{Auth::user()->telephone}}</div>
                                </div>
                                <div class="d-sm-flex flex-sm-wrap mb-3">
                                    <div class="font-weight-semibold">Autre:</div>
                                    <div class="ml-sm-auto mt-2 mt-sm-0"></div>
                                </div> 
                            </div>
                        </div>
                        
                        <!-- /user details (with sample pattern) -->

                        