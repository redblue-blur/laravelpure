<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
    <table class="table">
        <thead>
            <tr>
                <th>Customer_id</th>
                <th>Name</th>
                <th>Email</th>
                <th>Gender</th>
                <th>Address</th>
                <th>Date of birth</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            @foreach($customers as $customer)
            <tr>
                <th>{{$custoer->customer_id}}</th>
                <th>{{$custoer->name}}</th>
                <th>{{$custoer->email}}</th>
                <th>{{$custoer->gender}}</th>
                <th>{{$custoer->address}}</th>
                <th>{{$custoer->dob}}</th>
                <th>{{$custoer->status}}</th>
            </tr>
            @endforeach
        </tbody>
    </table>
  </body>
</html>