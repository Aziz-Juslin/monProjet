<!-- Main navbar -->
	<div class="navbar navbar-expand-md navbar-dark bg-light fixed-top">
		<div class="navbar-brand">
			<a href="{{route('home')}}" class="d-inline-block">
				<img src="/img/ds.png" alt="">
			</a>
		</div>
		<div class="d-md-none">
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-mobile">
		<i class="icon-tree5"></i>
		</button>
		<button class="navbar-toggler sidebar-mobile-main-toggle" type="button">
		<i class="icon-paragraph-justify3"></i>
		</button>
		</div>
		<div class="collapse navbar-collapse" id="navbar-mobile">
			<span class="badge bg-success ml-md-3 mr-md-auto">En ligne</span>
			<ul class="navbar-nav">
				<li class="nav-item dropdown dropdown-user">
					<a href="#" class="navbar-nav-link d-flex align-items-center dropdown-toggle" data-toggle="dropdown">
						@if(! $photoAdmin->isEmpty())
                        @foreach($photoAdmin as $user)
                        <img src="/Dossier/images_admin/{{$user->photo_user}}" class="rounded-circle mr-2" height="34" alt="">
                         @endforeach
                        @else
                        <img src="/img/user.png" class="rounded-circle mr-2" height="34" alt="">
                        @endif
						<span>{{Auth::user()->name}}</span>
					</a>
					<div class="dropdown-menu dropdown-menu-right">
						<a  class="dropdown-item" href="{{ route('logout') }}"
                         onclick="event.preventDefault();
                         document.getElementById('logout-form').submit();">
                         <i class="icon-switch2"></i>    Se déconnecter
                         <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                          @csrf
                      </form>
                      </a>
					</div>
				</li>
			</ul>
		</div>
	</div>
	<!-- /main navbar -->


