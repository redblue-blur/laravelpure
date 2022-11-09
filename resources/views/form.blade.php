<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <style>
      .list-group {
        padding-left: 15px
      }
    </style>
  
  </head>
  <body>
    <form action="{{url('/')}}/register" method="post">
        @csrf
        <!-- <pre>
            @php
                print_r($errors->all())
            @endphp
        </pre> -->
        <div>
            <h1 class="form-group">Registration</h1>
            <div class="container">
                <x-input name="name" type="text" label="Name"/>
                <x-input name="email" type="text" label="Email"/>
                <x-input name="address" type="text" label="Address"/>
                <div class="row">
                  <div class="list-group">
                    <label for="">Gender</label>
                    <select name="gender" class="form-select form-select-lg mb-3 btn border-primary" aria-label=".form-select-lg example">
                      <option disabled selected>select</option>
                      <option value="M">Male</option>
                      <option value="F">Female</option>
                      <option value="O">Other</option>
                    </select>
                  </div>
                  <div class="col">
                  <x-input name="dob" type="date" label="date of birth"/>
                  </div>
                </div>
                <x-input name="password" type="password" label="Password"/>
                <x-input name="password_confirmation" type="password" label="Confirm Password"/>
                <button class="btn btn-primary">Submit</button>
            </div>
        </div>
     <form>
     <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
     <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
