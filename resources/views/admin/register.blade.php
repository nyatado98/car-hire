<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="images/car.jpg" type="text/css">
    <link rel="stylesheet" type="text/css" href="{{asset('DataTables/DataTables-1.13.4/css/jquery.dataTables.css')}}" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/fontawesome.min.css">
    <script type="text/javascript" src="{{asset('DataTables/DataTables-1.13.4/js/jquery.dataTables.js')}}"></script>
        <link rel="stylesheet" href="{{asset('bootstrap/css/bootstrap.min.css')}}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin register</title>
    <style>
        .card-header{
            height: 20vh;
            background: url(../images/car.jpg);
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
        }
    </style>
</head>
<body>
    <div class="container col-md-6 mt-5">
        <div class="card">
            <div class="card-header">
          <h4 class="text-center font-weight-bold mt-5 text-white">REGISTER HERE</h4>
            </div>
          <div class="card-body">
            <form action="{{url('admin/register')}}" method="GET">
            @csrf
            <label for="firstname" class="font-weight-bold">Firstname :</label>
            <input type="text" name="firstname" class="form-control" placeholder="Enter your firstname">
             @if ($errors->has('firstname'))
            <span class="text-danger">{{ $errors->first('firstname') }}</span><br>
            @endif
            <label for="secondname" class="font-weight-bold">Secondname :</label>
            <input type="text" name="secondname" class="form-control" placeholder="Enter your secondname">
             @if ($errors->has('secondname'))
            <span class="text-danger">{{ $errors->first('secondname') }}</span><br>
            @endif
            <label for="id" class="font-weight-bold">Id no :</label>
            <input type="number" name="id_no" class="form-control" placeholder="Enter your Id number">
             @if ($errors->has('id_no'))
            <span class="text-danger">{{ $errors->first('id_no') }}</span><br>
            @endif
            <label for="phone" class="font-weight-bold">Phone no :</label>
            <input type="number" name="phone" class="form-control" placeholder="Enter your phone number">
             @if ($errors->has('phone'))
            <span class="text-danger">{{ $errors->first('phone') }}</span><br>
            @endif
            <label for="password" class="font-weight-bold">Password :</label>
            <input type="password" name="password" class="form-control" placeholder="Enter password">
             @if ($errors->has('password'))
            <span class="text-danger">{{ $errors->first('password') }}</span><br>
            @endif
            <label for="confirm password" class="font-weight-bold">Confirm Password :</label>
            <input type="password" name="re_password" class="form-control" placeholder="Re-Enter password">
             @if ($errors->has('re-password'))
            <span class="text-danger">{{ $errors->first('re-password') }}</span><br>
            @endif
            @if (session()->has('error'))
            <span class="text-danger">{{session()->get('error')}}</span><br>
            @endif
            <input type="submit" value="S I G N I N" class="font-weight-bold btn btn-primary form-control mt-2">
            <p>Already registered ?. <a href="{{url('login')}}">Login Here</a> </p>
            </form>
          </div>
        </div>
    </div>
    
</body>
<script src="{{asset('bootstrap/jquery/jquery-3.5.1.min.js')}}"></script>
    <script src="{{asset('bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('bootstrap/popper/popper.min.js')}}"></script>
</html>