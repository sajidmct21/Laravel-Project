<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    
    
    <div class="container">
        <br><br>
        <h1>Project Detail</h1>
        <strong>Suburb:</strong>{{$property->suburb}}<br>
        <strong>State:</strong>{{$property->state}}<br>
        <strong>Country:</strong>{{$property->country}}<br>
        <form action="{{route('property.destroy',$property->id)}}" method = "post">
                @csrf
                @method('DELETE')
                    <button class="btn btn-danger">Delete Property</button>
            </form>

    </div>
  
</body>
</html>