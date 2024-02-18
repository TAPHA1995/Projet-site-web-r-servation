@include('header')

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Hello, world!</title>

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
    background-image: url('img/couple.png');
    background-repeat: no-repeat;
    background-size: cover;
    /* background-position: ; */
    position: absolue;
   }

.form-box{
    background-color:rgba(255,255,255, 0.8);
    width:556px;
    height:185vh;
    margin-top:100%;
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

  </head>
  <body>
    <!-- Main_landlord -->
    <section  class="main">
        <div class="container">
            <div class="row col-sm-12 justify-content-end">
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
                        <form action="{{route('store_critere')}}" method="post" enctype="multipart/form-data">
                        @csrf
                            <h2 class="text-center">Earn more from your <br>property,do less</h2>
                            <p class="text-center">Find out if your property meets our criteria</p>
                            <input type="text" name="nom" placeholder="Nom" class="form-control mb-3" required>
                            <input type="text" name="email" placeholder="Email" class="form-control mb-3" required>

                            <div style="display: flex; flex-direction:row; gap:10px;">
                                <input   name="numero_tel" type="text" value="{{ old('telephone') }}" id="phone" placeholder="Phone number" style="width:250px" class="form-control @error('telephone')  is-invalid @enderror" required autocomplete="Telephone" autofocus>
                                <span id="valid-msg" class="hide" style="color:green"></span>
                                <span id="error-msg" class="hide" style="color:red"></span>
                            </div>
                            {{-- <input type="number" name="numero_tel" placeholder="Numero tel" class="form-control mb-3" required>   --}}


                            <h5>Property details</h5>
                            <div class="row">
                                <div class="col">

                                  <label for="citi" class="form-label">City</label>
                                  <select name="city" class="form-select mb-3 text-secondary" id="citi_id" required>
                                    @foreach ($cities as $citi)

                                    <option value="{{ $citi->nomcity }}">{{ $citi->nomcity }}</option>
                                     @endforeach
                                     </select>

                                </div>

                                <div class="col">

                                <label for="area" class="form-label">Area</label>
                                  <select name="area" class="form-select mb-3 text-secondary" id="area_id" required>
                                    @foreach ($areas as $area)

                                    <option value="{{ $area->nomarea}}">{{ $area->nomarea }}</option>
                                     @endforeach
                                     </select>

                                </div>


                            </div>
                            <div class="text">
                                <input type="number" name="nombre_chambre" placeholder="Nombre de chambre" class="form-control mb-3" required>
                            </div>

                            <div class="row">
                                    <span>Property picture</span>
                                    <input type="file" name="photo" class="form-control mb-3" required>
                               <span>Property type </span><br>
                                <input type="text" name="type_property" placeholder="room/appartement/conference room" class="form-control mb-3" required>

                                <div class="col">
                                    <label for="price" class="form-label">Price in £</label>
                                    <input type="number" name="price" value="" placeholder="£......" class="form-control mb-3" required>
                                </div>
                                <div class="col">
                                    <label for="bath" class="form-label">how many Bath</label>
                                    <select name="bath" id=""  class="form-select mb-3 text-secondary" required>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select>
                                </div>

                                 <div class="col">
                                    <label for="wifi" class="form-label">Wifi</label>
                                    <select name="wifi" id="" class="form-select mb-3 text-secondary" required>
                                        <option value="Wifi">Yes</option>
                                        <option value="No wifi">No</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row">

                                 <div class="">
                                    <label for="city_view" class="form-label">City view</label>
                                    <select name="city_view" id="" class="form-select mb-3 text-secondary" required>
                                        <option value="City view">Yes</option>
                                        <option value="No city view">No</option>
                                    </select>
                                </div>

                                 <div class="">
                                    <label for="elevator" class="form-label">Elevator</label>
                                    <select name="elevator" id="" class="form-select mb-3 text-secondary" required>
                                        <option value="Elevator">Yes</option>
                                        <option value="No elevator">No</option>
                                    </select>
                                </div>

                                 <div class="col">
                                    <label for="parking" class="form-label">Parking</label>
                                    <select name="parking" id="" class="form-select mb-3 text-secondary" required>
                                        <option value="Parking">Yes</option>
                                        <option value="No parking">No</option>
                                    </select>
                                </div>
                                <div class="col">
                                    <label for="parking" class="form-label">Floor</label>
                                    <select name="level" id="" class="form-select mb-3 text-secondary" required>
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
                                    <input type="date" value="" name="date_of_availability"class="form-control mb-3" required>
                                </div>
                            </div><br><br>
                            <div class="div col-12">
                                <button type="submit" id="send" class=" button btn btn-success">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
         </div>
    </section>
    <section id="package" class="pt-5 pb-5">
        <div class="container-xl">
            <div class="row">

                <div class="col-lg">
                    <div class="card" style="background-color:#D3D3D3">
                        <div class="card-body">
                            <i class="fa solid fa-lock text-dark fs-1"></i>
                            <h4 class="card-title">Guaranteed rent</h4>
                            <p class="card-text">We do the searching for you</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg">
                    <div class="card" style="background-color:#D3D3D3">
                        <div class="card-body">
                            <i class="fa solid fa-tag text-dark fs-1"></i>
                            <h4 class="card-title">No fees</h4>
                            <p class="card-text">Preferred partner rates</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg">
                    <div class="card" style="background-color:#D3D3D3">
                        <div class="card-body">
                            <i class="bi bi-buildings-fill text-dark fs-2"></i>
                            <h4 class="card-title">No voids</h4>
                            <p class="card-text">Preferred partner rates</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg">
                    <div class="card" style="background-color:#D3D3D3">
                        <div class="card-body">
                            <i class="fa solid fas-access-time-24-filled bg-dark fs-5" style="height:-14px;padding-top:-22px"></i>
                            <img src="img/24.png" alt="">
                            <h4 class="card-title">24/7 Maintenance</h4>
                            <p class="card-text">Extend on short notice</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="timeline_section" style="background-color: #B0F2B6;">
        <div class="container py-5">
            <div class="main-timeline">
                <div class="timeline left">
                    <div class="card">
                    <i class="fa-solid fa-envelope text-dark fs-1 fw-5 text-end px-4"></i>
                    <div class="card-body p-4">
                        <h3 class="text-end">Get in touch</h3>
                        <p class="text-end mb-0">Ut id cras malesuada dolor.Consecteur eget malesuada enim.</p>
                        <p class="text-end">massa viverra mauris</p>
                    </div>
                </div>
            </div>
            <div class="timeline right">
                <div class="card">
                <i class="bi bi-people-fill text-dark fs-1 fw-5 text-start px-4"></i>
                <div class="card-body p-4">
                    <h3>Let's chat</h3>
                    <p class="mb-0">Euismod commodo feugiat purus egetas diam.Facilisi sed</p>
                    <p class="text-start">senectus consequat risus.Porta purus nec dui odio vehicula.</p></p>
                </div>
                </div>
            </div>
            <div class="timeline left">
                <div class="card">
                <i class="bi bi-eye-fill text-dark fs-1 fw-5 text-end px-4"></i>
                <div class="card-body p-4">
                    <h3 class="text-end">Property viewing</h3>
                    <p class="mb-0 text-end"> Sit lectus parturient diam ac congue elementum praesent blandit.
                        Tristique ut ut venenatis tortor,id elementum.Integer tristique
                        viverra enim libero.</p>
                </div>
                </div>
            </div>
            <div class="timeline right">
                <div class="card">
                <i class="fa-solid fa-swatchbook text-dark fs-1 fw-5 text-start px-4"></i>
                <div class="card-body p-4">
                    <h3>Time to decorate</h3>
                    <p class="mb-0">Adipiscing magna ut justo, et.sem
                        pellentesque eu risus euismod et.Sapien est tellus dapidus sed varius lorem tellus, turpis
                        nisl.Elementum scelerisque elit in nibh aliquet phasellus..</p>
                </div>
                </div>
            </div>
            <div class="timeline left">
                <div class="card">
                <i class="bi bi-suitcase-lg-fill text-dark fs-1 fw-5 text-end px-4"></i>
                <div class="card-body p-4">
                    <h3 class="text-end" >Moving in & Moving up!</h3>
                    <p class="text-center mb-0">Ut id cras malesuada dolor.Consecteur eget malesuada enim</p>
                    <p class="text-end">massa viverra mauris</p>
                </div>
                </div>
            </div>
            <div class="timeline right">
                <div class="card">
                <i class="bi bi-brightness-high-fill text-dark fs-1 fw-5 text-start px-4"></i>
                <div class="card-body p-4">
                    <h3>Sit back & Relax</h3>
                    <p class="ext-start mb-0">Ut id cras malesuada dolor.Consecteur eget malesuada enim</p>
                    <p class="text-start">massa viverra mauris</p>
                </div>
                </div>
            </div>
            </div>
        </div>
    </section>

        <h2 class="text-center" style="padding-top:54px">Corporate partnerships</h2>
        <p class="text-center">We work with 100+ companies to meet accommodation needs in London.Offer a dedicated <br>
        booking manager that can help to find poperties for your needs.</p>
       <!-- Modal gallery -->
        <section class="">
        <!-- Section: Images -->
        <section class="container-fluid card2_landlord_container">
            <div class="row card2_landlord">
                <div class="col-lg-6 col-md-12  mb-lg-0">
                    <div class="bg-image hover-overlay ripple shadow-1-strong rounded" data-ripple-color="light">
                        <img src="img/before.png"class=" col-6 w-100"/>
                        <a href="#!" data-mdb-toggle="modal" data-mdb-target="#exampleModal1">
                            <div class="mask" style="background-color: rgba(251, 251, 251, 0.2);"></div>
                        </a>
                    </div>
                </div>

                <div class="col-lg-6 col-md-12 mb-4 mb-lg-0 marginTop_landlord">
                    <div class="bg-image hover-overlay ripple shadow-1-strong rounded" data-ripple-color="light">
                        <img src="img/After.png" class=" col-6 w-100"/>
                        <a href="#!" data-mdb-toggle="modal" data-mdb-target="#exampleModal2">
                            <div class="mask" style="background-color: rgba(251, 251, 251, 0.2);"></div>
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <!-- Section: Images -->

        </section>
        <!-- Modal gallery -->

    <section id="package" class="pt-5 pb-5">
        <div class="container-xl">
            <div class="row">

                <div class="col-lg">
                    <div class="text-center">
                        <div class="text-body">
                            <i class="fa-solid fa-book text-dark fs-1 fw-5 text-start px-4"></i>
                             <h2>Consequat risus</h2>
                             <p class="fw-lato fs-5 text-center ls-0em">Euismod commodo feugiat purus egestas diam. Facilisi sed senectus consequat risus. Porta purus nec dui odio vehicula.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg">
                    <div class="text-center">
                        <div class="text-body">
                            <i class="fa-solid fa-award text-dark fs-1 fw-5 text-start px-4"></i>
                            <h2>Morbi pulvinar</h2>
                            <p class="fw-lato fs-5 text-center ls-0em">Euismod commodo feugiat purus egestas diam. Facilisi sed senectus consequat risus. Porta purus nec dui odio vehicula.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg">
                    <div class="text-center">
                        <div class="text-body">
                            <i class="fa-solid fa-book text-dark fs-1 fw-5 text-start px-4"></i>
                            <h2>Turpis elit</h2>
                            <p class="fw-lato fs-5 text-center ls-0em">Euismod commodo feugiat purus egestas diam. Facilisi sed senectus consequat risus. Porta purus nec dui odio vehicula.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg">
                    <div class="text-center">
                        <div class="text-body">
                             <i class="fa-solid fa-award text-dark fs-1 fw-5 text-start px-4"></i>
                            <h2>Faucibus egestas</h2>
                            <p class="fw-lato fs-5 text-center ls-0em">Euismod commodo feugiat purus egestas diam. Facilisi sed senectus consequat risus. Porta purus nec dui odio vehicula.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="">
        <div class="container py-5">
            <div class="mains d-flex justify-content-center">

                <div class="timelines-left w-50 px-5">
                    <div class="card-tes" style="height:500px">
                        <div class="title text-center" style="background-color: #B0F2B6;padding-top:23px">
                            <h5>High Street Agents</h5>
                            <h1 class="text-center">12%</h1>
                            <h6>management fee</h6>
                        </div>
                        <div class="card-body p-4">
                            <i class="bi bi-check2 text-dark d-flex justify-content-start"><h6>6 to 12 months</h6></i>
                            <i class="bi bi-check2 text-dark d-flex justify-content-start"><h6>No maintenance</h6></i>
                            <i class="bi bi-check2 text-dark d-flex justify-content-start"><h6>No weekly cleaning</h6></i>
                            <i class="bi bi-check2 text-dark d-flex justify-content-start"><h6>No interior design</h6></i>
                            <i class="bi bi-check2 text-dark d-flex justify-content-start"><h6>5% void</h6></i>
                            <i class="bi bi-check2 text-dark d-flex justify-content-start"><h6>£24,900</h6></i>
                        </div>
                    </div>
                </div>
                    <h4 class="text-center py-5">VS</h4>
                <div class="timelines-left w-50 px-5">
                    <div class="card-tes" style="height:500px">
                        <div class="title text-center" style="background-color: #B0F2B6;padding-top:23px">
                            <h5>Flex Living (guaranteed Rental)</h5>
                            <h1 class="text-center">Fixed price</h1>
                            <h6 class="py-1">monthly</h6>
                        </div>
                        <div class="card-body p-4">
                            <i class="bi bi-check2 text-dark d-flex justify-content-start"><h6>3 to 5 years</h6></i>
                            <i class="bi bi-check2 text-dark d-flex justify-content-start"><h6>Free maintenance</h6></i>
                            <i class="bi bi-check2 text-dark d-flex justify-content-start"><h6>Weekly cleaning</h6></i>
                            <i class="bi bi-check2 text-dark d-flex justify-content-start"><h6>Interior design</h6></i>
                            <i class="bi bi-check2 text-dark d-flex justify-content-start"><h6>No void</h6></i>
                            <i class="bi bi-check2 text-dark d-flex justify-content-start"><h6>£30,000</h6></i>
                            <div class="text-center">
                                <a href="#" class="btn btn-success text-center justify-content-center h-25">Get started</a>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    </section>
    <section class="container-fluid">
        <div class="titles text-center">
            <h1>Frequently Asked Questions</h1>
        </div>
        <div class="d-flex">
            <div class="p-2 w-100 fs-3">Integer morbi semper sodales sit facilisi habitant pulvinar sed venenatis?</div>
            <div class="p-2 flex-shrink-1">
                <i class="bi bi-x-lg fs-2 py-5"></i>
            </div>
        </div>

        <div class="d-flex">
            <div class="d-flex flex-column mb-3">
                <div class="p-2 w-100 fs-3">Massa massa nulla rhoncus a quam consectetur sed purus, enim?</div>
                <div class="p-2 w-100 fs-5">Nunc molestie sit in sed sodales. Bibendum pharetra, id viverra
                 suspendisse pharetra ac aenean neque. Sodales ornare penatibus eros consectetur potenti in
                  feugiat purus. Posuere amet, sodales nibh eget. A et, a ante pretium praesent elementum feugiat
                   pharetra congue..</div>
            </div>
            <div class="p-2 flex-shrink-1">
                <i class="bi bi-x-lg fs-2 py-5"></i>
            </div>
        </div>

        <div class="d-flex">
            <div class="p-2 w-100 fs-3">Dignissim congue rutrum pretium nunc sed nibh vitae tortor ut?</div>
            <div class="p-2 flex-shrink-1">
                <i class="bi bi-plus-lg fs-1 py-5"></i>
            </div>
        </div>

        <div class="d-flex">
            <div class="p-2 w-100 fs-3">Vulputate imperdiet fusce vivamus nunc leo morbi scelerisque in?</div>
            <div class="p-2 flex-shrink-1">
                <i class="bi bi-plus-lg fs-1 py-5"></i>
            </div>
        </div>

        <div class="d-flex">
            <div class="p-2 w-100 fs-3">Sit rhoncus rhoncus malesuada massa adipiscing arcu, semper ut in?</div>
            <div class="p-2 flex-shrink-1">
                <i class="bi bi-plus-lg fs-1 py-5"></i>
            </div>
        </div>

        <div class="d-flex">
            <div class="p-2 w-100 fs-3">Vulputate nisl non neque iaculis lacus dui, habitant gravida?</div>
            <div class="p-2 flex-shrink-1">
                <i class="bi bi-plus-lg fs-1 py-5"></i>
            </div>
        </div>

        <div class="d-flex">
            <div class="p-2 w-100 fs-3">Est felis a velit at vitae venenatis rhoncus?</div>
            <div class="p-2 flex-shrink-1">
                <i class="bi bi-plus-lg fs-1 py-5"></i>
            </div>
        </div>

        <div class="d-flex">
            <div class="p-2 w-100 fs-3">Eget nam accumsan elementum accumsan imperdiet eu, cras?</div>
            <div class="p-2 flex-shrink-1">
                <i class="bi bi-plus-lg fs-1 py-5"></i>
            </div>
        </div>

        <div class="d-flex">
            <div class="p-2 w-100 fs-3">Fermentum et semper aliquet justo, facilisis?</div>
            <div class="p-2 flex-shrink-1">
                <i class="bi bi-plus-lg fs-1 py-5"></i>
            </div>
        </div>

        <div class="d-flex">
            <div class="p-2 w-100 fs-3">A vulputate est diam tempus condimentum in?</div>
            <div class="p-2 flex-shrink-1">
                <i class="bi bi-plus-lg fs-1 py-5"></i>
            </div>
        </div>

    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>



    <script>
        var input = document.querySelector('#phone');
        sendMsg = document.querySelector('#send');
        errorMsg = document.querySelector('#error-msg');
        validMsg = document.querySelector('#valid-msg');


        var errorMap = ["Invalid number", "Invalid country code","Too short", "Too long"];


        var iti = window.intlTelInput(input, {
        utilsScript:
        "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js",
    });
        var reset = function() {
            input.classList.remove("error");
            errorMsg.innerHTML = "";
            errorMsg.classList.add("hide");
             validMsg.classList.add("hide");

        }

        input.addEventListener('blur', function(){
            reset();
            if(input.value.trim()){
                if(iti.isValidNumber()){
                    validMsg.classList.remove('hide');
                }else{
                    input.classList.add('error');
                    var errorCode = iti.getValidationError();
                    errorMsg.innerHTML = errorMap[errorCode];
                    errorMsg.classList.remove("hide");

                    // recherche.style.transition = "all, 0.4s ease";
                }
                if (errorMap[errorCode]) {
                    // alert('Veuillez-entrer le bon numéro de téléphone');
                    sendMsg = document.querySelector('#send');
                    sendMsg.style.display = "none";
                    validMsg.style.display="none";
                    }else{
                        sendMsg = document.querySelector('#send');
                        sendMsg.style.display = "flex";
                        validMsg.style.display="block";
                    }
            }

        });

        input.addEventListener('change', reset);
        input.addEventListener("keyup",reset);
    </script>

    <link rel="stylesheet" href="assets/build/css/intlTelInput.css" />
  </body>
</html>
@include('footer')





