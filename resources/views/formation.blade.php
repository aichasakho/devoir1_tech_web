<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Listes des Formations proposées par le groupe ISI</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
        <div class="row">
            <div class="col s12">
                
                <h1><marquee>LISTES DES FORMATIONS PROPOSEES PAR LE GROUPE ISI</marquee></h1>
                <hr>
                    
                    
                    <table class="table">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Formations</th>
                                 
                            </tr>
                        </thead>
                        <tbody>

                        @php 
                                $ide = 1;
                            @endphp

                            @foreach($liste as $formation) 
                            <tr>
                                <td>{{ $ide }}</td>
                                <td>{{ $formation->nomFormation}}</td>
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
















































