

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> 
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
     <!--=============== REMIXICONS ===============-->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/3.5.0/remixicon.css" crossorigin="">

    <!--=============== SWIPER CSS ===============-->
    
    <link rel="stylesheet" href="assets/css/swiper-bundle.min.css">

    <!--=============== CSS ===============-->
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/guest_details.css">
    <link rel="stylesheet" href="assets/css/contact_contact.css">

    <link rel="stylesheet" href="assets/css/style_homepage.css">
<!-- header Bachir -->
<!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous"> -->
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" /> -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.min.css">
    <title>Document</title>
</head>
<style>
.main{
        height:200vh;
    }
     .timeline_section{
        height:250vh;
     }
     /* .timeline_section .container{
      background-color: red;
        position:absolute;
        margin-top:30%;
     } */
.main{
    background-image: url('/img/couple.png');
    background-repeat: no-repeat;
    background-size: cover;
    /* background-position: ; */
    position: absolue; 
   }

.form-box{
    background-color:rgba(255,255,255, 0.8);
    width:556px;
    height:180vh;
    margin-top:20%;
    margin-bottom:10px;
    /* padding: 12px, 10px, 12px, 10px; */
    border-radius: 20px;
    border:1px solid white;
   }

.form-box input{
        border-radius:10px;
   }

.form-box input:focus{
    box-shadow:0 0 0;
    border:1px solid #f6288c;
}

.form-box select{
    border-radius:10px;
}


.div{
    display:flex;
    justify-content:center;
    align-items:center;
}


.button{
    display:flex;
    justify-content:center;
    border-radius:10px;
}




/* The actual timeline (the vertical ruler) */
.main-timeline {
  position: relative;
  margin-top:80%;

}

/* The actual timeline (the vertical ruler) */
.main-timeline::before {
  content: "";
  position: absolute;
  width: 2px;
  background-color: black;
  top: 0;
  bottom: 0;
  left: 50%;

  margin-left: -3px;

}


/* Container around content */
.timeline {
  position: relative;
  background-color: inherit;
  width: 50%;
}

/* The circles on the timeline */
.timeline::after {
  content: "";
  position: absolute;
  width: 25px;
  height: 25px;
  right: -13px;
  background-color: black;
  top: 15px;
  border-radius: 50%;
  z-index: 1;
}



/* Place the container to the left */
.left {
  padding: 0px 40px 20px 0px;
  left: 0;
}

/* Place the container to the right */
.right {
  padding: 0px 0px 20px 40px;
  left: 50%;
}

/* Add arrows to the left container (pointing right) */
.left::before {
  content: " ";
  position: absolute;
  top: 18px;
  z-index: 1;
  right: 30px;
  border: medium  white;
  border-width: 10px 0 10px 10px;
  border-color: transparent transparent transparent white;
}

/* Add arrows to the right container (pointing left) */
.right::before {
  content: " ";
  position: absolute;
  top: 18px;
  z-index: 1;
  left: 30px;
  border: medium  white;
  border-width: 10px 10px 10px 0; */
  border-color: transparent white transparent transparent;
}

/* Fix the circle for containers on the right side */
.right::after {
  left: -12px;
}

/* Media queries - Responsive timeline on screens less than 600px wide */
@media screen and (max-width: 600px) {
  /* Place the timelime to the left */
  .main-timeline::after {
    left: 31px;
  }
  /* .main-timeline {
  position: relative;
  margin-top:100%;

} */
  /* Full-width containers */
  .timeline {
    width: 100%;
    padding-left: 70px;
    padding-right: 25px;
  }

  /* Make sure that all arrows are pointing leftwards */
  .timeline::before {
    left: 60px;
    border: medium solid white;
    border-width: 10px 10px 10px 0;
    border-color: transparent white transparent transparent;
  }

  /* Make sure all circles are at the same spot */
  .left::after,
  .right::after {
    left: 18px;
  }

  .left::before {
    right: auto;
  }

  /* Make all right containers behave like the left ones */
  .right {
    left: 0%;
  }
}

.banner-card{
    background-image: url(img/couple.png);
}
.two .banner-card{
    position: absolute;
}

.two .banner-body{
    position:relative ;
    top:5px;
}

.bon{
    height:700px;
    width:455px;
}
/* responsive */

@media screen and (max-width: 1200px) {
        .timeline_section{
        height:500vh;
     }
     .main-timeline {
    position: absolute;
    margin-top:120%;

     }
}

@media screen and (max-width: 988px) {
     
    .card2_landlord{
      
    }
    .marginTop_landlord{
        margin-top:20px;
    }
    .card2_landlord_container{
        margin-top:-700px;
        /* gap:10px; */
    }
    body{
        width: 100%;
    }
    .main{
       width: 100%;
       height:200vh;
    }
    .main .container{
        overflow: hidden;
    }
    .form-box{
       width: 100%;
       margin-top:140%;
       height: 350vh;
    } 
    .col-lg-6{
        margin-top:80%;
    }
    .timeline_section{
        height:380vh;
     }
     .main-timeline {
    position: absolute;
    margin-top:160%;

     }
    
}
@media screen and (max-width: 950px) {
    .timeline_section{
        height:380vh;
     }
     .main-timeline {
    position: absolute;
    margin-top:230%;

     }
}
@media screen and (max-width: 790px) {
    .timeline_section{
        height:380vh;
     }
     .main-timeline {
    position: absolute;
    margin-top:230%;

     }
     .form-box{
       width: 100%;
       margin-top:200%;
       height: 450vh;
    } 
    .col-lg-6{
        margin-top:150%;
    }
}

@media screen and (max-width: 767px) {
    .timeline_section{
        height:380vh;
     }
     .main-timeline {
    position: absolute;
    margin-top:230%;

     }
     .form-box{
       width: 100%;
       margin-top:250%;
       height: 460vh;
    } 
    .col-lg-6{
        margin-top:200%;
    }
}
@media screen and (max-width:600px){
    .mains{
        display:flex;
        flex-direction:column;
        justify-content:center;
    }
    .timeline_section{
        height:360vh;
     }
    .card-tes{
        width:400px;
    }
    .bodys{
        display:flex;
        flex-direction:column;
        justify-content:center;
        width:343px;
        margin:23px;
    }
   
}@media screen and (max-width:575px){
    .timeline_section{
        height:300vh;
     }
     .main-timeline {
    position: absolute;
    margin-top:230%;

     }
     .form-box{
       width: 100%;
       margin-top:355%;
       height: 460vh;
    } 
    .col-lg-6{
        margin-top:200%;
    }
   
}
</style>
</style>

  </head>
  <body>
    <!-- Main_landlord -->
    <section  class="main">
        <div class="container">
            <div class="row col-sm-12 justify-content-center ">
                <div class="col-lg-6 col-md-10 col-sm-12">
                    <div class="form-box px-5">
                        <div class="row">
                        @if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

@if (session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
@endif
</div>
   <form action="/critere/{{$Critere->id}}" method="post" enctype="multipart/form-data">
    @csrf
        <h2 class="text-center">Earn more from your <br>property,do less</h2>
        <p class="text-center">Find out if your property meets our criteria</p>
        <input type="text" name="nom" placeholder="Nom" class="form-control mb-3" required value="{{$Critere->nom}}">     
        <input type="text" name="email" placeholder="Email" class="form-control mb-3" required value="{{$Critere->email}}">    
        <input type="number" name="numero_tel" placeholder="Numero tel" class="form-control mb-3" required value="{{$Critere->numero_tel}}">      
        <h5>Property details</h5>
        <div class="row">
            <div class="col">
            <label for="citi" class="form-label">City</label>
             <input type="text" placeholder="city in capical letter" name="city"  value="{{$Critere->city}}" class="form-control mb-3 text-secondary" required>
            </div>
            <div class="col">
            <label for="area" class="form-label">Area</label>
                <input name="area" class="form-control mb-3 text-secondary" value="{{$Critere->area}}" id="area_id" required placeholder="area in small letter">
            </div>
        </div>
        <div class="text">
            <label for="area" class="form-label">How many rooms</label>
            <input type="number" name="nombre_chambre" placeholder="Nombre de chambre" class="form-control mb-3" required value="{{$Critere->nombre_chambre}}">
        </div>
        
        <div class="row"> 
            <!-- <div class="col">                             -->
                <span>Property picture</span>
                <input type="file" name="photo" value="{{$Critere->photo}}" class="form-control mb-3" required>
            <!-- </div>   -->
            <span>Property type </span><br>
            <input type="text" name="type_property" placeholder="room/appartement/conference room" class="form-control mb-3" required value="{{$Critere->type_property}}">
            <!-- <span>Availability</span><br>
            <input type="text" name="date_of_availability" placeholder="date of availability" class="form-control mb-3"> -->
            <div class="col">     
                <label for="price" class="form-label">Price in £</label>
                <input type="number" name="price" value="{{$Critere->price}}" placeholder="£......" class="form-control mb-3" required>
            </div>
        
            <!-- <span></span> -->
            <div class="col">
                <label for="bath" class="form-label">how many Bath</label>
                <select name="bath" id=""  class="form-select mb-3 text-secondary" required>
                    <option value="{{$Critere->bath}}">{{$Critere->bath}}</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </select>
            </div>
                <!-- <input type="number" name="bath" value="" placeholder="" class="" style="width:40px; border:non;" class="form-control mb-2"> -->
                <!-- <span>Wifi</span> -->
                <!-- <input type="checkbox" name="wifi" value="wifi" placeholder="" class="" style=""> -->
                <div class="col">
                <label for="wifi" class="form-label">Wifi</label>
                <select name="wifi" id="" class="form-select mb-3 text-secondary" required>
                    <option value="{{$Critere->wifi}}">{{$Critere->wifi}}</option>
                    <option value="Wifi">Yes</option>
                    <option value="No wifi">No</option>
                </select>
            </div>
        </div>
        <div class="row">
                <!-- <span>City view</span>
                <input type="checkbox" name="city_view" value="city view" placeholder="" class="" style=""> -->
                <div class="">
                <label for="city_view" class="form-label">City view</label>
                <select name="city_view" id="" class="form-select mb-3 text-secondary" required>
                    <option value="{{$Critere->city_view}}">{{$Critere->city_view}}</option>
                    <option value="City view">Yes</option>
                    <option value="No city view">No</option>
                </select>
            </div>
                <!-- <span>Elevator</span>
                <input type="checkbox" name="elevator" value="elevator" placeholder="" class="" style=""> -->
                <div class="">
                <label for="elevator" class="form-label">Elevator</label>
                <select name="elevator" id="" class="form-select mb-3 text-secondary" required>
                    <option value="{{$Critere->elevator}}">{{$Critere->elevator}}</option>
                    <option value="Elevator">Yes</option>
                    <option value="No elevator">No</option>
                </select>
            </div>
                <!-- <span>Parking</span>
                <input type="checkbox" name="parking" value="parking" placeholder="" class="" style=""> -->
                <div class="col">
                <label for="parking" class="form-label">Parking</label>
                <select name="parking" id="" class="form-select mb-3 text-secondary" required>
                    <option value="{{$Critere->parking}}">{{$Critere->parking}}</option>
                    <option value="Parking">Yes</option>
                    <option value="No parking">No</option>
                </select>
            </div>
            <div class="col">
                <label for="parking" class="form-label">Floor</label>
                <select name="level" id="" class="form-select mb-3 text-secondary" required>
                    <option value="{{$Critere->level}}">{{$Critere->level}}</option>
                    <option value="1st">1st</option>
                    <option value="2nd">2nd</option>
                    <option value="3rd">3rd</option>
                    <option value="4th">4th</option>
                    <option value="5th">5th</option>
                    <option value="6th">6th</option>
                    <option value="7th">7th</option>
                    <option value="8th">8th</option>
                    <option value="9th">9th</option>
                    <option value="10th">10th</option>
                    <option value="11th">11th</option>
                    <option value="12th">12th</option>
                </select>
            </div>
            <div class="col">
                <label for="available" class="form-label">Available</label>
                <input type="date" value="{{$Critere->date_of_availability}}" name="date_of_availability"class="form-control mb-3" required>
            </div>
        </div><br><br>
        <div class="div col-12" style="display:flex; gap:5px; margin-top:-10px;">
            <button type="submit" class=" button btn btn-success">Submit</button>
             <a href="/booking" class="btn btn-danger">Back</a>
        </div> 
    </form>
    </div>
    </div>
</div>
</div>   
</section>
