<div>
    <div class="row p-4 pt-5">
        <div class="col-12">
            <div class="card">
                <div class="card-header bg-primary">
                    <h3 class="card-title flex-grow-1">
                        <i class="fas fa-users fa-2x"></i>
                         Liste des Utilisateurs
                    </h3>
                    <div class="card-tools d-flex align-items-center">
                        <a href="#" class="btn btn-link text-white mr-4 d-block"><i class="fas fa-user-plus"></i> Nouvel Utilisateur</a>
                        <div class="input-group input-group-md" style="width: 250px;">
                            <input type="text" name="table_search" class="form-control float-right" placeholder="Search">
                            <div class="input-group-append">
                                <button type="submit" class="btn btn-default">
                                    <i class="fas fa-search"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card-body table-responsive p-0" style="height: 300px;">
                    <table class="table table-head-fixed">
                        <thead>
                            <tr>
                                <th style="width: 5%;"></th>
                                <th style="width: 25%;">Utilisateurs</th>
                                <th style="width: 20%;">Roles</th>
                                <th style="width: 20%;">Created</th>
                                <th style="width: 30%;">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($users as $user)
                            <tr>
                                <td>{{ $user->sexe}}</td>
                                <td>{{ $user->prenoms}} {{ $user->nom}}</td>
                                <td></td>
                                <td><span class="tag tag-success">{{ $user->created_at->di}}</span></td>
                                <td>
                                    <button type="submit" class="btn btn-link">
                                        <i class="far fa-edit"></i>
                                    </button>
                                    <button type="submit" class="btn btn-link">
                                        <i class="fas fa-trash-alt"></i>
                                    </button>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
</div>
