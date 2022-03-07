<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="U-Bolt Admin Dashboard By SIGI">
    <meta name="U-Bolt" content="Sigi,U-Bolt">
    <meta name="author" content="stacks">
     
    <!-- Title -->
    <title>U-Bolt Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</head>

<style>

.form-style input{
	border:0;
	height:50px;
	border-radius:0;
    border-bottom:1px solid #ebebeb;	
}
.form-style input:focus{
    border-bottom:1px solid #007bff;	
    box-shadow:none;
    outline:0;
    background-color:#ebebeb;	
}

</style>
<body style="margin-top:7%;">

<script src="https://use.fontawesome.com/f59bcd8580.js"></script>
<div class="container">
    <div class="row">
        <div class="col-md-6 col-lg-6 d-none d-md-block">
            <img src="https://hawkcouriers.com/sites/default/files/styles/mt_member_photo/public/2019-05/parcel-delivery-service.jpeg?itok=UWeK-33s" class="img-fluid">
        </div>
        <div class="col-md-6 p-5" style="background:rgb(145 164 255 / 52%);">
            <div class="mt-5">
                <div class="authent-logo text-center">
                    <img class="img-fluid" src="{{asset('public/logo.png')}}" alt="U-Bolt" width="80" >
                </div>
                    <h3 class="pb-3">Login Form</h3>
                <div class="form-style">
                    @if(Session::has('message'))
                        <p class="alert alert-danger text-danger">{{ Session::get('message') }}</p>
                    @endif
                    <form method='POST' action="https://devglocal.com/nzcs/login">
                            @csrf
                        <div class="mb-2">
                            <div class="form-floating">
                                <input type="email" name="email" class="form-control" value="admin@gmail.com" id="floatingInput" placeholder="name@example.com">
                                <label for="floatingInput">Email address</label>
                            </div>
                        </div>
                        <div class="mb-2">
                            <div class="form-floating">
                                <input type="password" name="password" value="password" class="form-control" id="floatingPassword" placeholder="Password">
                                <label for="floatingPassword">Password</label>
                            </div>
                        </div>
                        <div class="d-grid">
                            <button  type="submit" class="btn btn-info m-b-xs">Login</button>
                        </div>
                    </form>
                    <div class="pt-4 text-center">
                        Get Members Benefit. <a href="{{route('signup')}}">Sign Up</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Javascripts -->
<script src="assets/plugins/jquery/jquery-3.4.1.min.js"></script>
<script src="https://unpkg.com/@popperjs/core@2"></script>
<script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
<script src="https://unpkg.com/feather-icons"></script>
<script src="assets/plugins/perfectscroll/perfect-scrollbar.min.js"></script>
<script src="assets/js/main.min.js"></script>
</body>
</html>
