<!DOCTYPE html>
<html>
    <head>
        <title>WillHayCode - The Home of The Internet</title>
    
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    </head>
  
    <style>
        
    </style>

    <body>
        <div class="container">
@for($i = 0; $i < count($repos); $i++)
<div class="row">
    <h1>{{$categories[$i]}}</h1>
</div>
            <div class="row">
    @for($n = 0; $n < count($repos[$i]); $n++)
@php
    $repo = $repos[$i][$n];
@endphp
<div class="col-3">
    <div class="card">
        <div class="card-header">
            <h1>{{$repo['name']}}</h1>
        </div>
        <div class="card-body">
            Last Updated: {{$repo['updated']}}
        </div>
    </div>
</div>
    @endfor
            </div>
@endfor
        </div>
    </body>

    <script>
        
    </script>
</html>
