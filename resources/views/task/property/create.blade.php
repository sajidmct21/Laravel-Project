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
        <form action="{{Route('property.store')}}" method="post">
        @csrf
            <div class="form-group">
                <label for="suburb">Suburb</label>
                <input type="text" class="form-control" name="suburb" placeholder="Enter Suburb">
            </div>
            <div class="form-group">
                <label for="state">State</label>
                <input type="text" class="form-control" name="state" placeholder="Enter State">
            </div>
            <div class="form-group">
                <label for="country">Country</label>
                <input type="text" class="form-control" name="country" placeholder="Enter Country">
            </div>
            
            <button type="submit" class="btn btn-primary">Submit Property </button>
        </form>
    </div>
  
</body>
</html>