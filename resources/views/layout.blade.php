<!DOCTYPE html>
<html>
<head>
    <title>Demo</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
     <link rel="stylesheet" src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
     <script src="https://kit.fontawesome.com/b767388630.js" crossorigin="anonymous"></script>
     <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" rel="stylesheet" />
<script src="https://kit.fontawesome.com/e05828f02a.js" crossorigin="anonymous"></script>
    <style type="text/css">
         
  
  
        
    </style>
</head>
<body style="">
    
<nav class="navbar navbar-expand-lg ">
    <!--<div class="container">-->
        <a class="navbar-brand" href="#"><img src="{{ asset('images/tasklogo.gif') }}" alt="" title=""></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"> <i class="fa-solid fa-list"></i></span>
        </button>

       
        
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        
     
            <ul class="navbar-nav  mr-auto ml-auto">
            
            
          
                 
            
                <div class="justify-content-md-center">
                    <form class="form-inline "style="margin-top:5px">
                  <li class="nav-item">Shooping in </li>
                    <li class="nav-item dropdown">       
           
           
           <span class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            60016 
            </span>
            
                 <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                     <a class="dropdown-item" href="#">Action</a>
                     <a class="dropdown-item" href="#">Another action</a>
                     <div class="dropdown-divider"></div>
                     <a class="dropdown-item" href="#">Something else here</a>
                </div>
</li>
                        <input class="form-control btn-sm" type="text" placeholder="search for products" aria-label="Search" style="width: 550px;align-self: center;height: fit-content;margin-left:10px;margin-right:10px;">
                     
                        <button class="btn btn-light btn-sm" type="submit" style="align-self: center;height: fit-content;margin-left:10px;margin-right:10px;"><i class="fa-solid fa-magnifying-glass"></i></button>
                    </form>
                </div>
            
                    

                    <button type="button" class="btn btn-light btn-sm" style="align-self: center;height: fit-content;margin-left:10px;margin-right:10px;"><i class="fa-solid fa-user"></i> Log in</button>

                    <button type="button" class="btn btn-light btn-sm" style="align-self: center;height: fit-content;margin-left:10px;margin-right:10px;">Sign-up</button>
                    <button type="button" class="btn btn-success btn-sm" style="align-self: center;height: fit-content;margin-left:10px;margin-right:10px;"><i class="fa-solid fa-cart-shopping"></i> Cart 0</button>

                
            </ul>
  
        </div>
    <!--</div>-->
</nav>





@yield('content')
     
</body>
</html>