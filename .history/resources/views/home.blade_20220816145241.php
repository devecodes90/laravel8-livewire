

@extends("layouts.master")

@section('content')
    <div class="row">
       <div class="col-12 p-4">
          <div class="jumbotron">
            <h2 class="display-3">Bienvenue, {{ userFullName() }}</h2>
            <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                 Rerum voluptas facere ?
            </p>
            <hr class="my-4">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Exercitationem nesciunt tempora</p>
                    <p class="lead">
                        <a href="" class="btn btn-primary btn-lg" role="button">Learn More</a>
                    </p>
          </div>
       </div>
    </div>
@endsection
