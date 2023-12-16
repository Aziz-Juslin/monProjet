@foreach($ImageEcoles as $ecole)
            <!-- Page header -->
            <div class="page-header page-header-light mb-0">
                <div class="page-header-content header-elements-md-inline">
                    <div class="page-title d-flex">
                        <h4><i class="icon-arrow-left52 mr-2"></i> <span class="font-weight-semibold">{{$ecole->ecole}}</span></h4>
                        <a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
                    </div>

                    <div class="header-elements d-none">
                        <div class="d-flex justify-content-center">
                            <a href="#" class=" btn-float text-default"><i class="icon-pin text-primary"></i><span>{{$ecole->province}}</span></a>
                        </div>
                    </div>
                </div>

             
            </div>
            <!-- /page header -->


                <!-- Cover area -->
                <div class="profile-cover">
                    
                    <div class="profile-cover-img" style="background-image: url(/Dossier/images_ecole/{{$ecole->photo_ecole}})"></div>
                    <div class="media align-items-center text-center text-md-left flex-column flex-md-row m-0">
                        <div class="mr-md-3 mb-2 mb-md-0">
                            <a class="profile-thumb">
                                @if(!$ecole->photo_ecole == '')
                                <img src="/Dossier/images_ecole/{{$ecole->photo_ecole}}" class="border-white rounded-circle" width="48" height="48" alt="">
                                @else
                             <img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="border-white rounded-circle" width="48" height="48" alt="">
                             @endif
                            </a>
                        </div>

                        <div class="media-body text-white">
                            <h1 class="mb-0">{{$ecole->ecole}}</h1>
                            <span class="d-block">{{$ecole->province}}</span>
                        </div>

                        <div class="ml-md-3 mt-2 mt-md-0">
                            <ul class="list-inline list-inline-condensed mb-0">
                                
                                <li class="list-inline-item"><a href="#" class="btn btn-light border-transparent"><i class="icon-thumbs-up2 mr-2"></i> 0</a></li>
                            </ul>
                        </div>
                    </div>
                    @endforeach
                </div>
                <!-- /cover area -->


                <!-- Profile navigation -->
                <div class="navbar navbar-expand-lg navbar-light bg-light">
                    <div class="text-center d-lg-none w-100">
                        <button type="button" class="navbar-toggler dropdown-toggle" data-toggle="collapse" data-target="#navbar-second">
                            <i class="icon-menu7 mr-2"></i>
                            Options
                        </button>
                    </div>

                    <div class="navbar-collapse collapse" id="navbar-second">
                        <ul class="nav navbar-nav">
                            <li class="nav-item">
                                <a href="#activity" class="navbar-nav-link active" data-toggle="tab">
                                    <i class="icon-menu7 mr-2"></i>
                                    Information
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#schedule" class="navbar-nav-link" data-toggle="tab">
                                    <i class="icon-calendar3 mr-2"></i>
                                    Schedule
                                    <span class="badge badge-pill bg-success position-static ml-auto ml-lg-2">32</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#settings" class="navbar-nav-link" data-toggle="tab">
                                    <i class="icon-cog3 mr-2"></i>
                                    Settings
                                </a>
                            </li>
                        </ul>

                        <ul class="navbar-nav ml-lg-auto">
                            <li class="nav-item">
                                <a href="#" class="navbar-nav-link">
                                    <i class="icon-stack-text mr-2"></i>
                                    Notes
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="navbar-nav-link">
                                    <i class="icon-collaboration mr-2"></i>
                                    Friends
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="navbar-nav-link">
                                    <i class="icon-images3 mr-2"></i>
                                    Photos
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="navbar-nav-link dropdown-toggle" data-toggle="dropdown">
                                    <i class="icon-gear"></i>
                                    <span class="d-lg-none ml-2">Settings</span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right">
                                    <a href="#" class="dropdown-item"><i class="icon-image2"></i> Update cover</a>
                                    <a href="#" class="dropdown-item"><i class="icon-clippy"></i> Update info</a>
                                    <a href="#" class="dropdown-item"><i class="icon-make-group"></i> Manage sections</a>
                                    <div class="dropdown-divider"></div>
                                    <a href="#" class="dropdown-item"><i class="icon-three-bars"></i> Activity log</a>
                                    <a href="#" class="dropdown-item"><i class="icon-cog5"></i> Profile settings</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- /profile navigation -->
