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



   <div class="row">
   <div class="col-md-2">
  
   </div>
   <div class="col-md-3 align-self-center">

   <div class="card" style="border-color:none; border-radius: 10%"  >
       <div class="card-body">
          <h5 class="card-title">Digital Puja & <br> Astrology Services </h5>
    
         <p class="card-text">Sacred Moments , Virtual Connection:<br>Experiance Devotion Anywhere with Our <br>Digital Puja Service!</p>
         
         <button style="border-radius:10px;background-color:#F52968;border-color:#F52968;color:white">Explore Online Services</button>
      </div>
   </div>
   </div>


   <div class="col-md-1"></div>
      <div class="col-md-6">
      <img src="{{ asset('images/rightimg.gif') }}" />
   </div>

</div>

<h4 style="text-align:center">Our Online Services</h4><br>
<div class="row">
   
   <div class="col-md-3">
  
   </div>
   <div class="col-md-3">
   <div class="card" style="border-color:none; border-radius: 10%"  >
   <img src="{{ asset('images/puja.gif') }}" class="card-img-top" style="height:220px;width:320px" alt="...">
       <div class="card-body">
          <h5 class="card-title" style="align-self-center">Online Puja </h5>
    
         <p class="card-text">Personalized online puja by esteemed <br>Pandits for abaundance and positivity</p>
         
         <button style="border-radius:10px;background-color:#F52968;border-color:#F52968;color:white">Book Online Puja</button>
      </div>
   </div>
   </div>


   <div class="col-md-3">
   <div class="card" style="border-color:none; border-radius: 10%"  >
   <img src="{{ asset('images/astrology.gif') }}" class="card-img-top"  style="height:220px;width:320px"alt="...">
       <div class="card-body">
          <h5 class="card-title">Astrology</h5>
    
         <p class="card-text">World-class astrology services that ignite your potential ,unlock success</p>
         
         <button style="border-radius:10px;background-color:#F52968;border-color:#F52968;color:white">Astrology Consultation</button>
      </div>
   </div>
  </div>


   
   <div class="col-md-3">
  
   </div>
</div>
  
<br>
    <div >
   
      <img src="{{ asset('images/puja.jpg') }}" style="display: block; margin-left: auto;margin-right: auto; width: 80%;"/>
   </div>

<br>
   <h4 style="text-align:center">How It Works?</h4>
   <p style="text-align:center">Perform online puja led by our esteemed Pandits from anywhere across the world</p>
   <div >
   
      <img src="{{ asset('images/olpuja.jpg') }}" style="display: block; margin-left: auto;margin-right: auto; width: 80%;"/>
   </div>

   
   <br>
   <br>
   <h4 style="text-align:center">Dynaimic team of Astrologers</h4>
   <p style="text-align:center">Ignite your brilliance with revered astrologers, just a click away !</p><br>
   <div class="row">
   <div class="col-md-1">
  
   </div>
   <div class="col-md-5 align-self-center">

   <div class="card" style="border-color:none; border-radius: 10%"  >
       <div class="card-body">
          <h5 class="card-title">Ancent Traditions The Performed Modern Way </h5>
    
         <p class="card-text">Indian puja is a heartwarming journey , where with hands folded and hearts open,
             we offer gratitude seek guidance and find peace in the gentle glow of diyas. Our online 
             Puja & Astrology services online help you perform ancient vedic rituals and seek advice from
             top indian astrologers even while you are far from india 
         </p>
      
         <p class="card-text">
             we offer gratitude seek guidance and find peace in the gentle glow of diyas. Our online 
             Puja & Astrology services online help you perform ancient vedic rituals and seek advice from
             top indian astrologers.
         </p>

         <button style="border-radius:10px;background-color:#F52968;border-color:#F52968;color:white">Explore Online Services</button>
      </div>
   </div>
   </div>


      <div class="col-md-6">
      <img src="{{ asset('images/ancentway.jpg') }}" />
   </div>

</div>
  

</div>

</main>
@endsection