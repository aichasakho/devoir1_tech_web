@extends ('layouts.app')
@section('titre','Liste des apprenants')

@section('content')
        <div class="row">
            <div class="col s12">
                
                <h1><marquee>LISTES DES APPRENANTS de la L3GLG2</marquee></h1>
                <hr>
                    <a href="/ajouter" class=" btn btn-secondary ">Ajouter un etudiant</a>
                  <form method="GET">
                    <input type="text" name ="query" placeholder="Rechercher">
                    <button type="submit" class=" btn btn-secondary">Rechercher</button>
                  </form>
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
  @endsection 
























