<aside class="control-sidebar control-sidebar-dark">
    <div class="card bg-dark">
        <div class="card-body bg-dark box-profile">
            <div class="text-center">
                <img class="profile-user-img img-fluid img-circle" src="{{ asset('images/user4.jpg')  }}" 6603206alt="User profile picture">
            </div>
            <h3 class="profile-username text-center ellipsis">{{ userFullName() }}</h3>
            <p class="text-muted text-center">{{  }}</p>

            <ul class="list-group bg-dark mb-3">
                <li class="list-group-item">
                    <a href="#" class="d-flex align-items-center"><i class="fa fa-lock pr-2 mt-2"></i>
                        <b>Password</b>
                    </a>
                </li>
                <li class="list-group-item mt-2">
                    <a href="#"class="d-flex align-items-center"><i class="fa fa-user pr-2"></i>
                        <b>Profile</b>
                    </a>
                </li>
            </ul>


            <a class="btn btn-primary btn-block" href="{{ route('logout') }}"
               onclick="event.preventDefault();
               document.getElementById('logout-form').submit();">
                Déconnexion
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
        </div>

    </div>
</aside>
