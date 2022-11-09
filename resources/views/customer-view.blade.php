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
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($customers as $customer)
            <tr>
                <th>{{$customer->customer_id}}</th>
                <th>{{$customer->name}}</th>
                <th>{{$customer->email}}</th>
                <th>
                  @if($customer->gender == "M")
                  Male
                  @elseif($customer->gender == "F")
                  Female
                  @elseif($customer->gender == "O")
                  Other
                  @else
                  Not Shared
                  @endif
                </th>
                <th>{{$customer->address}}</th>
                <th>{{$customer->dob}}</th>
                <th>
                  @if($customer->status == 1)
                  <span class="badge badge-success">active</span>
                  @else
                  <span class="badge badge-danger">inactive</span>
                  @endif
                </th>
                <th>
                  <!-- <a href="delete/{{$customer->customer_id}}"> -->
                  <a href="{{route('customer.delete',['id'=>$customer->customer_id])}}">
                    <button class="btn btn-danger">Delete</button>
                  </a>
                  <a href="{{route('customer.edit',['id'=>$customer->customer_id])}}">
                    <button class="btn btn-primary">Edit</button>
                  </a>
                </th>
            </tr>
            @endforeach
        </tbody>
    </table>
  </body>
</html>