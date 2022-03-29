<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mission Plasma</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    
    <div class="navbar navbar-expand-lg navbar-dark bg-danger">
        <div class="container">
            <a href="{{ route("homepage") }}" class="navbar-brand">Mission Plasma</a>

            <ul class="navbar-nav">
                <li class="nav-item"><a href="{{ route("insert.request") }}"  class="btn btn-success mx-2">Request for Plasma</a></li>
                <li class="nav-item"><a href="{{ route("insert.donor") }}" class="btn btn-success mx-2">Apply as Donor</a></li>
            </ul>
        </div>
    </div>

    @section('content')
        
    @show


    @section('js')
        
    @show
</body>
</html>