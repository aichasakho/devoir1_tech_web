<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>LISTES DES APPRENANTS de la L3GLG2</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
    <div class="container text-center">
        <div class="row">
            <div class="col s12">
                
                <h1><marquee>LISTES DES APPRENANTS de la L3GLG2</marquee></h1>
                <hr>
                    <a href="/ajouter" class=" btn btn-secondary ">Ajouter un etudiant</a>
                    <hr>

                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}

                        </div>
                    @endif

                    <table class="table" style="border: 1px solid blackq
                    ">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Prénom</th>
                                <th>Nom</th>
                                <th>Formations</th>
                                <th>Action</th>  
                            </tr>
                        </thead>
                        <tbody>

                            @php 
                                $ide = 1;
                            @endphp

                            @foreach($afficher as $apprenant) 
                            <tr>
                                <td>{{ $ide }}</td>
                                <td>{{ $apprenant->prenom}}</td>
                                <td>{{ $apprenant->nom}}</td>
                                <td>
                                     @foreach($apprenant->formations as $formation) 
                                     {{$formation->nomFormation}}
                                     @endforeach

                                </td>

                                <td>
                                    <a href="/modifier_apprenant/{{ $apprenant->id}}" class="btn btn-success">Modifier</a>
                                    <a href="/supprimer_apprenant/{{ $apprenant->id}}" class="btn btn-danger">Supprimer</a>

                                </td>
                            </tr>
                            @php 
                                $ide += 1;
                            @endphp
                            @endforeach
                        </tbody>


                    </table>
      
            
            </div>
        </div>
    </div>
    
    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>

























