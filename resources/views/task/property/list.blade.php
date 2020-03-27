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
        <a href="{{route('property.create')}}" class="btn btn-primary">Create Property</a>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Suburb</th>
                    <th >State</th>
                    <th >Country</th>
                    <th >Created At</th>
                    <th >Updated At</th>
                    <th >Action</th>
                </tr>
            </thead>
            <tbody>
            @if($properties)
                @foreach($properties as $property)
                <tr>
                    <td>{{$property->id}}</td>
                    <td>{{$property->suburb}}</td>
                    <td>{{$property->state}}</td>
                    <td>{{$property->country}}</td>
                    <td>{{$property->created_at}}</td>
                    <td>{{$property->updated_at}}</td>
                    <td>
                        <a href="{{route('property.show',$property->id)}}" class="btn btn-primary">Show</a>
                        <a href="{{route('property.edit',$property->id)}}" class="btn btn-primary">Edit</a>
                    </td>
                </tr>
                @endforeach
            
            @endif
                
                
            </tbody>
</table>
    </div>
  
</body>
</html>