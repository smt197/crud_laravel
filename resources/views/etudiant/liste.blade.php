<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CRUD USER</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>

    <div class="container text-center">
        <div class="row align-items-start">
            <div class="col s12">
                <h1>CRUD USER</h1>
                <a href='/ajouter' class='btn btn-primary'>Ajouter un utilisateur</a>
                @if(session('status'))
                    <div class='alert alert-success'>
                        {{ session('status') }}
                    </div>
                @endif
                <table class="table">
                    <thead>
                        <tr>
                        <th scope="col">#</th>
                        <th scope="col">Prenom</th>
                        <th scope="col">Nom</th>
                        <th scope="col">email</th>
                        <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody class="table-group-divider">
                        @php
                            $ide = 1;
                        @endphp
                        @foreach($etudiants as $etudiant)
                        <tr>
                            <th scope="row">{{$ide}}</th>
                            <td>{{$etudiant->prenom}}</td>
                            <td>{{$etudiant->nom}}</td>
                            <td>{{$etudiant->email}}</td>
                            <td>
                                <a href="/update-etudiant/{{$etudiant->id}}" class="btn btn-primary">Update</a>
                                <a href="/delete-etudiant/{{$etudiant->id}}" class="btn btn-danger">Supprimer</a>
                            </td>
                        </tr>
                        @php
                            $ide++;
                        @endphp
                        @endforeach
                    </tbody>
                </table>
                {{$etudiants->links()}}
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>