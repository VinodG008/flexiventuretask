@extends('layout')
  
@section('content')

<main>
<div class="container-fluide">
    

    <nav class="navbar navbar-expand-lg ">
    <!-- <div class="row" style="margin-top:5px"> -->
    <!--<div class="container">-->
    <a class="navbar-brand" href="#"></a>      
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent1" aria-controls="navbarSupportedContent1" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"> <i class="fa-solid fa-list"></i></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent1">

      <!-- <div class="col-md-3"> -->
      <div class="justify-content-left"style="margin-left:20px"> 
               <i class="fa-solid fa-list"></i> Shop By Department</div>
      
        <!-- <div class="col-md-9"> -->
      
       
         
            <ul class="navbar navbar-collapse nav nav-tabs justify-content-end ">
           
           
             <!--<li class="nav-item">
             <a class="nav-link" href="#">Active</a>
             </li>-->
            <!-- <li class="nav-item">
                <a class="nav-link active" href="#"  style="color:black;">Dashboard</a>
             </li>-->
             
             <li class="nav-item">
                <a class="nav-link  " href="#" style="color:black;">Recipe</a>
             </li>


             <li class="nav-item">
                <a class="nav-link  " href="#" style="color:black;">Student Ambassadar</a>
             </li>

             <li >
                <a class="nav-link  " href="#" style="color:black;">Gift card</a>
             </li>

             <li class="nav-item">
                <a class="nav-link " href="#" style="color:black;">Quiklly Pass</a>
             </li>

             <li class="nav-item">
                <a class="nav-link " href="#" style="color:black;">Refer a Friend</a>
             </li>
            </ul>
        </div>
    </div>

</div>
<!-- </div> -->
</nav>

@if(count($boardMembers) > 0)
    @foreach($boardMembers as $boardMember)
<div class="col-sm-4 my-4">
    <div class="card">
        <img class="card-img-top" src="{{ asset('images/'.$boardMember->service_img.'.gif')}}" style="height:220px;width:320px" >
        <div class="card-body">
            <h2 class="card-title">{{$boardMember->service_name}}</h2>
            <p class="card-text">{{$boardMember->service_price}}</p>
        </div>        
    </div>
</div>
    @endforeach
@else
<p>No Members Found</p>
@endif


</div>

</main>
@endsection