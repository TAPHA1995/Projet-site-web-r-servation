<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/14b44e0e2e.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

   
        <link rel="stylesheet" href="assets/css/style_homepage.css">
<!-- header Bachir -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

        <style>
            .k{
                padding-left:5px;

            }
            .t{
                padding-left:5px;
            }
            .r{
                padding-left: 5px;
            }
            .s{
                padding-left: 5px;
            }
            /* .property_projet{
                margin-top:80%;
            } */
            .footerproper{
                gap:65px;
            }
        </style>
</head>

<body>
    
<header class="header">
    <div>
      <div>
        <ul class="containerheader">
          <div class="logoimage">
                <a href="/" class="home-link"><img src="image/Logo.png"  alt=""></a>
            </div>
            <div class="menuheadera" >
                <div class="ullia">
                    <li class="navbar-item"><a class="navbar-link" href="/homepage">Home</a></li>
                    <li class="navbar-item"><a class="navbar-link" href="{{route('showlandlord')}}">Landloards</a></li>
                    <!-- <li class="navbar-item"><a class="navbar-link" href="{{route('liste_critere')}}">liste critere</a></li> -->
                    <li class="navbar-item" style="display:flex; justify-content:center;">
                      <a class="navbar-link blog" id="blog"  href="/afficheArticle">Blog <span class="arrow_blog"></span></a>
                    </li>
                    <!-- <li class="navbar-item"><a class="navbar-link" href="/proper">Property</a></li> -->
                    <li class="navbar-item">
                      <!-- <a class="navbar-link" href="/booking">Booking</a> -->
                      <ul class="liste_reservation">
                      </ul>
                    </li>
                    <li class="navbar-item"><a class="navbar-link" href="/contact">Contacts</a></li>
                    <!-- <li class="navbar-item"><a class="navbar-link" href="/Guest_Detail">Guest Detail</a></li> -->
                    @guest
                            @if (Route::has('login'))
                            @endif
                            @if (Route::has('register'))
                             
                            @endif
                        @else
                            @if(Auth::user()->type_user == 'admin')
                    <li class="navbar-item"><a class="navbar-link" href="/message"><i class="fa-solid fa-bell"></i></a></li>
                    <li class="navbar-item">
                         <p class="navbar-link Amdmin_Control" href="">Amdmin Control</p>
                      <ul class="Amdmin_Control_container">
                        <li class="navbar-item"><a class="navbar-link" href="{{route('cities')}}">Add cities</a></li>
                        <li class="navbar-item"><a class="navbar-link" href="{{route('areas')}}">Add areas</a></li>
                        <li class="navbar-item"><a class="navbar-link" href="/liste_reservation" style="list-style:none;">Liste des réservations<a></li>
                         <li class="navbar-item"><a href="/formulaire_ajout_articke"  style="list-style:none;">Ajouter un article</a></li>
                      </ul>
                    </li>
                      @endif
                           
                    @endguest 
                    
                    
                    
                    <!-- <li class="navbar-item"><a class="navbar-link" href="/checkoutpageA">checkout</a></li> -->

                          @guest
                            @if (Route::has('login'))
                                <li class="nav-item  navbar-item">
                                    <a class="nav-link " href="{{ route('login') }}">{{ __('Conexion') }}</a>
                                </li>
                            @endif
                            @if (Route::has('register'))
                                <li class="nav-item navbar-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Inscription') }}</a>
                                </li>
                            @endif
                        @else
                        <li class="nav-item dropdown  navbar-item">
                                                <a href="/logout" class="btn btn-danger">Déconnexion</a>                  
                                    {{ Auth::user()->prenom}}                                     
                            </li>                     
                        @endguest
                </div>
            </div>
            <button type="button" class="nav-toggler togglers" id="togglers">
                  <span></span>
            </button>
        </ul>
      </div>
    </div>
  </header>
    <div class="container-fluid mt-2">
        <div class="row align-items-stretch">
            <div class="col-lg-7 col-md-12">
                <img src="/images_property/{{$Critere->photo}}" alt="" class="img-fluid custom-height" style="height:480px;">
            </div>
            <div class="col-lg-5 col-md-12">
                <div class="row col-xs-6">
                    <div class="col-md-6">
                        <img src="/images_property/{{$Critere->photo}}" alt="" class="img-fluid">
                    </div>
                    <div class="col-md-6">
                        <img src="/images_property/{{$Critere->photo}}" alt="" class="img-fluid">
                    </div>
                </div>
                <div class="row mt-2 col-xs-6">
                    <div class="col-md-6">
                        <img src="/images_property/{{$Critere->photo}}" alt="" class="img-fluid">
                    </div>
                    <div class="col-md-6">
                        <img src="/images_property/{{$Critere->photo}}" alt="" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div>
    <div class="container property_projet">
        <form action="{{ route('Guest_Detail', $Critere->id) }}" method="get">
        @csrf
            <div class="row mt-5 ">
                <div class="col-lg-6">
                    <h1>Rhoncus suspendus</h1>
                    <div class="di">
                        <p>London, Nottling Hill</p>
                        <?php         
                        ?>
                    </div>
                    <div class="d-flex">
                        <div class="k"><img src="{{ asset('assets/imgicone/chambre.png') }}" width="15" alt="" class="img-fluid"></div>
                        <div class="k">{{$Critere->nombre_chambre}} bedroom</div>
                        <div class="k"><img src="{{ asset('assets/imgicone/bath.png') }}" width="15" alt="" class="img-fluid"> 2 bath</div>
                        <div class="k">500 sq ft | {{$Critere->city_view}} | {{$Critere->level}} floor | {{$Critere->elevator}}</div>
                    </div>
                    <div class="mt-2">
                        <h3 class="mb-2">Description</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione numquam deleniti minima
                                labore nam, inventore illo ipsa commodi accusantium ex ducimus corporis est, delectus iusto
                                quos dignissimos molestias provident iste. Lorem ipsum dolor sit amet consectetur
                                adipisicing elit. Ratione numquam deleniti minima labore nam, inventore illo ipsa commodi
                                accusantium ex.
                            </p>
                    </div>
                    <div class="mt-2">
                        <h4 class="mb-2">In sed</h4>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione numquam deleniti minima
                                labore nam, inventore illo ipsa commodi accusantium ex ducimus corporis est, delectus iusto
                                quos dignissimos molestias provident iste.
                            </p>
                    </div>
                    <div class="mt-2">
                        <h4 class="mb-2">Adipiscing risus, fermentum</h4>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione numquam deleniti minima
                                labore nam, inventore illo ipsa commodi accusantium ex ducimus corporis est, delectus iusto
                                quos dignissimos molestias provident iste.
                            </p>
                    </div>
                </div>
                <div class="col-lg-6 bg-light">            
                        <div class="mt-3">
                            <div class="text-center">
                                <h2 class="align-items-center mb-5"><?='£'.$Critere['price'] ?> / Month</h2>
                                <input type="hidden" name="price" id="" value="<?=$Critere['price']?>"> 
                            </div>
                            <div class="row mx-5">
                                <div class="col-lg-6">
                                    <label for="">Move in </label><br>
                                        <img src="{{ asset('assets/imgicone/calendrier.png') }}" alt="" width="20">
                                        <input type="date" name="move_in" id="" required> 
                                    <div class="my-4">
                                        <p><img src="{{ asset('assets/imgicone/guest.png') }}" alt="" width="20"> Guests <input type="number" name="guest" style="width:40px" required></p>
                                    </div>
                                    <p class="my-4">All utilities are included</p>
                                    <p class="my-4">Average monthy rent</p>
                                    <p class="my-4">Pay upon booking</p>
                                    <p class="my-4">total costs</p>
                                    <p class="my-4">Show more</p>
                                </div>
                                <div class="col-lg-6">
                                    <label for="">Move out </label><br>
                                        <img src="{{ asset('assets/imgicone/calendrier.png') }}" alt="" width="20">
                                        <input type="date" name="move_out" id="">  
                                    <div class="mt-5 pl-3">
                                    <div>
                                    <p class="fw-bold">
                                    <?='£'.$Critere['price'] ?>
                            
                                   </p>
                                    <input type="hidden" name="Average_monthy_rent" id="" value="<?='£'.$Critere['price'] ?>"> 
                                    <p>incl.VAT</p>
                                    <div>
                                    <p class="fw-bold">
                                        <?php               
                                        $pourcentage = 8;
                                        $paiement_reservation = $pourcentage * $Critere['price'] / 100;
                                        echo '£' .$Critere['price'] - $paiement_reservation;
                                        ?>  
                                         <input type="hidden" name="Pay_upon_bookings" id="" value="<?=$Critere['price'] - $paiement_reservation?>">
                                         </p>
                                    <p>incl.VAT</p>
                                    </div>
                                    <div>
                                    <p class="fw-bold">
                                             <input type="hidden" name="photo" id="" value="{{$Critere->photo}}">
                                             <?php
                                            $pourcentage_total = 10;
                                            $paiement_reservation_total = $pourcentage_total * $Critere['price'] / 100;
                                            echo '£' .$Critere['price'] + $paiement_reservation_total;
                                            ?>
                                             <input type="hidden" name="Total_costs" id="" value="<?=$Critere['price'] +$paiement_reservation_total?>">
                                            </p>
                                    <p>incl.VAT</p>
                                    </div>
                                    </div>
                                </div>
                            </div>
                            <div class="text-center mt-4">
                                <button type="submit" class="btn btn-success">Continue booking</button>
                            </div>
                        </div>
                        <input type="hidden" name="photo" id="" value="{{$Critere->photo}}"> 
                        <input type="hidden" placehooder="property_id" value="{{$Critere->property_id}}" name="property_id">
                    </form>
                    <div class="row mx-5 text-center">
                        <p>When you book this apartment, your reservation will be confirmed instantly </p>
                    </div>
                </div>
            </div>

            <div class="row  property_projet">
                <div class="text-center">
                    <h1>Amenities</h1>
                </div>
                <div class="row w-100 mt-4 mx-5">
                    <div class="col-lg-4 d-flex">
                    <div class="t">
                        <p>Tv</p>
                        <p>Flatscreen TV</p>
                        <p>Fireplace</p>
                        <p>Phone</p>
                        <p>Work desk</p>
                        <p>With computer</p>
                    </div>
                    <div class="t">
                    <p><img src="{{ asset('assets/imgicone/calendrier.png') }}" alt="" width="20"></p>
                    <p><img src="{{ asset('assets/imgicone/fireplace.png') }}" alt="" width="20"></p>
                    <p><img src="{{ asset('assets/imgicone/calendrier.png') }}" alt="" width="20"></p>
                    <p><img src="{{ asset('assets/imgicone/workdesk.png') }}" alt="" width="20"></p>
                
                        <!--<p><i class="fa-solid fa-tv"></i></p>
                        <p><i class="fa-solid fa-bridge-water"></i></p>
                        <p><i class="fa-solid fa-phone"></i></p>
                        <p><i class="fa-solid fa-desktop"></i></p>-->
                    </div>

                    </div>
                    <div class="col-lg-4 d-flex">
                    <div class="r ">
                        <p>Fridge</p>
                        <p>Kettle</p>
                        <p>Coffee machine</p>
                        <p>Dishes</p>
                    </div>
                    <div class="r">
                    <p><img src="{{ asset('assets/imgicone/fridge.png') }}" alt="" width="20"></p>
                    <p><img src="{{ asset('assets/imgicone/kettle.png') }}" alt="" width="20"></p>
                    <p><img src="{{ asset('assets/imgicone/coffeemachine.png') }}" alt="" width="20"></p>
                    <p><img src="{{ asset('assets/imgicone/dishes.png') }}" alt="" width="20"></p>
                        <!--<p><i class="fa-solid fa-bridge-water"></i></p>
                        <p><i class="fa-solid fa-bridge-water"></i></p>
                        <p><i class="fa-solid fa-mug-hot"></i></p>
                        <p><i class="fa-solid fa-mug-saucer"></i></p>-->
                        
                    </div>

                    </div>
                    
                    <div class="col-lg-4 d-flex">

                    <div class="s">
                        <p>Washing machine</p>
                        <p>Dryer</p>
                        <p>Iron</p>
                        <p>Wardrobe</p>
                    </div>
                    <div class="s">
                    <p><img src="{{ asset('assets/imgicone/washingmachine.png') }}" alt="" width="20"></p>
                    <p><img src="{{ asset('assets/imgicone/dryer.png') }}" alt="" width="20"></p>
                    <p><img src="{{ asset('assets/imgicone/iron.png') }}" alt="" width="20"></p>
                    <p><img src="{{ asset('assets/imgicone/wardrobe.png') }}" alt="" width="20"></p>
                        <!--<p><i class="fa-solid fa-bath"></i></p>
                        <p><i class="fa-solid fa-bath"></i></p>
                        <p><i class="fa-solid fa-bath"></i></p>
                        <p><i class="fa-solid fa-bath"></i></p>-->
                    </div>

                    </div>
                
                
                </div>
            </div>
            <div class="row mt-5 ">
                <div class="text-center my-4">
                    <h1>Neighbourhood</h1>
                </div>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Impedit dolore necessitatibus iusto, qui inventore in totam! Consequuntur quaerat modi suscipit ad architecto consequatur accusamus. Minus hic nulla corrupti dicta. Eos!.
                </p>
                <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi fugiat reprehenderit fugit laboriosam. Vero reiciendis sint enim nihil et amet eius dignissimos neque rerum quisquam labore error, suscipit culpa tempora.
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde ducimus beatae, fugiat nostrum voluptatem iste corrupti dolorum, qui, labore voluptas eveniet eligendi assumenda illum odio. Voluptas debitis illo suscipit id?
                </p>
            </div>
            <div class="row mt-5">
                <div class="text-center my-3">
                    <h1>Location</h1>
                </div>
                <!-- <div id="map" style="height: 400px;"></div> -->
                <img src="{{ asset('assets/imgicone/Map.png') }}" alt="" width="20">

                
            </div>
            <div class="row mt-5">
                <div class="text-center">
                    <h1>Policy detail</h1>
                </div>
                <div class="col-lg-4">
                    <div class="mt-3">
                        <div class="">
                            <h2 class="align-items-center mb-5">House rules</h2>
                        </div>
                        
                        <div>
                            <p><img src="{{ asset('assets/imgicone/chekintime.png') }}" alt="" width="20"> Checkin time</p>
                        </div>
                        <div>
                            <p> <img src="{{ asset('assets/imgicone/chekintime.png') }}" alt="" width="20"> Checkout time</p>
                        </div>
                        <div>
                            <p><img src="{{ asset('assets/imgicone/smoking.png') }}" alt="" width="20"> No smoking</p>
                        </div>
                        <div>
                            <p><img src="{{ asset('assets/imgicone/noped.png') }}" alt="" width="20"> No pets</p>
                        </div>
                        <div>
                            <p><img src="{{ asset('assets/imgicone/party.png') }}" alt="" width="20"> No parties or events</p>
                        </div>

                    
                    

                    </div>
                        
                
                    

                </div>
                <div class="col-lg-4">
                    <div class="mt-3">
                        <div class="">
                            <h2 class="align-items-center mb-5">Cancellation Policy</h2>
                        </div>
                        <div>
                            <p><img src="{{ asset('assets/imgicone/chekintime.png') }}" alt="" width="20"> Free Cancellation up to 24hrs</p>
                            <p>before chekin</p>
                        </div>

                    
                        

                    </div>
                    
                </div>
                <div class="col-lg-4">
                    <div class="mt-3">
                        <div class="">
                            <h2 class="align-items-center mb-5">Health & Safty</h2>
                        </div>

                        <div>
                            <p> <img src="{{ asset('assets/imgicone/chekintime.png') }}" alt="" width="20"> Cleaner in accordance with our</p>
                            <p>COVID safe cleaning policy</p>
                        </div>
                        

                    </div>
                    
                </div>
            </div>
        
        </form>
    </div>
    <br><br><br>
   
<div class="row">
<section class="footer ">
       <div class="maincontainer_footer  footerproper">
             <div class="col1_footer">
                  <div class="logo_footer">
                       <a href=""><img src="image/logo.png" alt=""></a>
                  </div>
                  <div class="contact_footer">
                      <div class="tel_footer">
                        <p>Contact number: 02033074477</p>
                      </div>
                      <div class="reseauxfooter">
                          <div>
                              <a href=""><img src="image/Group.png" alt=""></a>
                          </div>
                          <div>
                              <a href=""><img src="image/eva_facebook-fill.png" alt=""></a>
                          </div>
                          <div>
                              <a href=""><img src="image/eva_twitter-fill.png" alt=""></a>
                          </div>
                      </div>
                      <div class="copy_right_footer">
                        <p>© 2021 Flex Living</p>
                      </div>
                  </div>
             </div>
             <div class="col_footer">
                  <div class="title_col2_footer">
                      <div class="title">
                          <p><strong>Company</strong></p>
                      </div>
                  </div>
                  <div class="textcol2_footer">
                      <div >
                          <p><a href="">Home</a></p>
                      </div>
                      <div>
                          <p><a href="">About Us</p></a>
                      </div>
                      <div>
                          <p><a href="">Our Team</p></a>
                      </div>
                  </div>
             </div>
             <div class="col_footer">
                  <div class="title_col3_footer">
                      <div class="title">
                          <p><strong>Guests</strong></p>
                      </div>
                  </div>
                  <div>
                      <div>
                          <p><a href="">Blog</a></p>
                      </div>
                      <div>
                          <p><a href="">FAQ</p></a>
                      </div>
                      <div>
                          <p><a href="">Career</p></a>
                      </div>
                  </div>
             </div>
             <div class="col_footer col4_footer">
                  <div class="title_col4_footer">
                      <div class="title">
                          <p><strong>Provacy</strong></p>
                      </div>
                  </div>
                  <div>
                      <div>
                          <p><a href="">Teams of Service</a></p>
                      </div>
                      <div>
                          <p><a href="">Privacy Policy</p></a>
                      </div>
                  </div>
             </div>
             <div class="col5_footer">
                  <div class="title_col4_footer">
                      <p><strong>Stay up to date</strong></p>
                  </div>
                  <div class="title">
                      <p><a href="">Be the first to know br about our newest apartments</a></p>
                  </div>
                  <div>
                      <input type="text" placeholder="Email address">
                  </div>
                  <div><br>
                     <button type="submit" class="btn btn-success rounded-pill">Subscribe</button>
                  </div>
             </div>
                 <div class="display_none_footer">
                      <div>
                        <p><a href="">Contact number: 02033074477</a></p>
                      </div>
                      <div class="reseau_footer">
                          <div>
                            <a href=""><img src="image/Group.png" alt=""></a>
                          </div>
                          <div>
                            <a href=""><img src="image/eva_facebook-fill.png" alt=""></a>
                          </div>
                          <div>
                              <a href=""><img src="image/eva_twitter-fill.png" alt=""></a>
                          </div>
                      </div>
                      <div class="copyright_footer">
                        <p>© 2021 Flex Living</p>
                      </div>
                 </div>
        </div>
    </section>
</div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<!-- Ajouter le script de l'API Google Maps -->
<script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&callback=initMap" async defer></script>
<script src="JStapha/jstapha.js"></script>
<style>
.Amdmin_Control{
      cursor:pointer;
      color:blue;
    }
    .Amdmin_Control_container{
      position:absolute;
      display:none;
      flex-direction:column;
      margin-top:-18px;
      background-color:#F2F0F2;
      padding-right:10px;
      padding-bottom:10px;
    }
    .Amdmin_Control_container.active{
      display:flex;
    }
    .Amdmin_Control_container li:hover{
      background-color:white;
      padding:10px;
      
    }






     /*Liste Reservation */
 .mc_liste_reservation{
  display: flex;
  justify-content: center;
  flex-direction:column;
  align-items: center;
  gap: 100px;
 }
 .card_liste_reservation{
  display: flex;
  justify-content: center;
  flex-direction:row;
  gap: 100px;
  flex-wrap: wrap;
  background-color: #F2F0F2;
  padding: 20px;
  border-radius: 20px;
  box-shadow: -1px 9px 40px -12px rgba(0,0,0,1.75);
  -moz-box-shadow:-1px 9px 40px -12px rgba(0,0,0, 1.75);
  -webkit-box-shadow:-1px 9px 40px -12px rgba(0,0,0,1.75);
  
 }
 pre{
   color: white;
 }
.titre_listeR{
  display: flex;
  justify-content: center;
  gap: 260px;
}



 /*  booking*/
.container_filter{
  display: flex;
  gap: 35px;
}
 .filter{
  width: 15px;
  color: #ffff;
 }
 .filterb{
  width: 15px;
 background-color: #ffff;
 }
.great_container{
  display: flex;
  justify-content: center;
  align-items: center;
  gap: 70px;
  flex-wrap: wrap;
}
 .room_card{
  display: flex;
  justify-content: center;
 
 }
 .search_by{
  display: flex;
 
 }
 .alert_search_result{
  display: flex;
  margin-left: 100px;
  margin-top: -30px;
  
 }
 .fa-times{
  cursor: pointer;
 }
 .container_search_by{
  display: flex;
  gap: 10px;
 }
 .fliter_card{
  display: flex;
  align-items: center;
  gap: 10px;
 }
 .fliter_items{
  display: flex;
  gap: 20px;;
 }
 .maincontainer_rooms{
  display: flex;
  flex-direction:row;
  gap: 50px;
  flex-wrap: wrap;

 }
 .group_card{
  display: flex;
  flex-direction: column;
  gap: 15px;
 }
 .maincontainer_room_card{
  display: flex;
  align-items: center;
  flex-direction:row;
  gap: 10px;
  background-color: #F2F0F2;
  height: 31vh;

 }
 .text_conatiner_card{
  width: 350px;
 }
 .text_lineA_card{
  display: flex;
  align-items: center;
  gap: 5px;
 }
.btn_text{
  display: flex;
  align-items: center;
  gap:7px;
}
.bed_bath_wifi{
  display: flex;
  flex-direction:row;
  gap: 10px;
}



 /* FOOTER */

 .display_none_footer{
    display:none;
  }
  .maincontainer_footer a{
    color:black;
    text-decoration: none;
  }
  .col5_footer input{
    width:100%;
    border-radius:10px;
    border:none;
    background: #F2F0F2;
    padding:10px;
  }
 .copy_right_footer p{
  margin-top:10px;
 }
  .maincontainer_footer{
    display: flex;
    justify-content:center;
    gap:80px;
    flex-wrap:wrap;
    margin-bottom:50px;
  }
  .reseauxfooter{
    display: flex;
    justify-content:left;
    align-items:left;
    flex-direction:row;
    gap:10px;
  }
  .footer{
    display: flex;
    justify-content:center;
    align-items:center;
  }
  /* SEECTION7 */
  .section7{
    background-image:url('/image/Image (1).png');
    height:100vh;
    display: flex;
    justify-content:center;
    align-items:center;
  }
  .selectopt_section7{
    background-color:green;
    color:#ffff;
    width:200px;
    height:7vh;
    border-radius:10px;
  }
  .text1_section7 p{
    font-size:30px;
  }
  .maincontainer_section7{
  display: flex;
  justify-content:center;
  flex-direction:column;
  align-items:center;
  width:400px;
  height:35vh;
  background-color:#ffffff;
  padding:20px;
  border-radius:10px;
  }
/* SECTION6 */
.title_section6{
   font-size:30px;
}
.container_section6{
  display: flex;
  justify-content:center;
  gap:100px;
  flex-wrap:wrap;
}
.link_items .fa-arrow-right{
  margin-left:20px;
}
.link_items {
  color:blue;
}
.section6{
  display: flex;
  justify-content:center;
  align-items: center;
}
.maincontainer{
  display: flex;
  justify-content:center;
  align-items: center;
  flex-direction:column;
}

/* CARD1 */
.footercardA{
  display:flex;
}
.Read_our_blog{
  font-size:40px;
}
.Read_our_blog p{
  text-align:center;
}
.cardA{
  width: 230px;
  height:60vh;
  background: #F2F0F2;
  border-radius:10px;
  
}
.footercardA{
  gap:10px;
}
.section5{
  display: flex;
  justify-content: left;
  align-items: center;
  flex-direction:column;
  gap:20px;
  margin-top:-20px;

}
.swiperA-wrapperA{
  display: flex;
  justify-content:center;
  align-items: center;
  flex-direction:row;
  gap:50px;
  flex-wrap:wrap;
 
}
.cardA_image img{
  width: 230px;
}
.text1_cardA p{
  font-size:20px;
}

/* SLIDERCARD1 */
   .swiper-wrapper{
    gap: 300px;
  }
  .imgslider_sectionslider img{
    width: 50px;
    height: 8vh;
  }
  
  .container_imgslider_sectionslider {
    display: flex;
    justify-content: left;
    align-items: center;
    flex-direction: row;
    gap: 20px;
    
  }
  .btnslider img{
    border-radius:30px;
  }
/* SECTIONTITLE_CARDSLIDER */
.texttitle{
  display:flex;
  justify-content:center;
  align-items:center;
  flex-direction:column;
}
.containertitle_text1 p{
  text-align:center;
  font-size:30px;
}
  /* SECTION3A */
  .bgimg_section3A{
    background-image:url('/image/interieur-maison-salon-sombre-moderne-interieur-mur-vide-noir-maquette-luxe-moderne-ia-generative_891226-1790.AVIF');
    background-repeat:no-repeat;
    height:80vh;
  }
  .card_section3A{
    display:flex;
    justify-content:right;
    align-items:right;
    background: #E2F1E8;
    flex-direction:column;
    padding:10px;
    border-radius:20px;
    width:300px;
  }
  .container_partcard_section3A{
    display:flex;
    justify-content:center;
    align-items:center;
    flex-direction:column;
  }
  .container_textpart_section3A{
    display:flex;
    justify-content:center;
    align-items:center;
    flex-direction:column;
    
  }
  .text1_section3A{
    font-size:30px;
  }
  .container_textpart_section3A p{
    text-align:center;
  }
  .btn_section3A{
    padding:10px;
    width:200px;
  }
  .bgimg_section3A p{
    color:white;
  }
  .text1_bgimg_section3A p{
    font-size:40px;

  }
  .text_btn_section3A{
    position:absolute;
    margin-left:80px;
    margin-top:100px;
  }
  .container_card_section3A{
    display:flex;
    justify-content:center;
    align-items:center;
    flex-direction:row;
    gap:15px;
    flex-wrap:wrap;
  }
/* Part3 OF SECTION2 */
.part3-section2{
display:flex;
justify-content:center;
align-items:center;
}
.text1part3-section2 p{
  font-size:30px;
}
.textimage-part3-section2{
  display:flex;
justify-content:center;
align-items:center;
flex-direction:row;
gap:20px;
flex-wrap:wrap;
}

.containerpart3-section2{
display:flex;
justify-content:center;
align-items:center;
flex-direction:column;
}
.cardimage-part3-section2{
display:flex;
justify-content:center;
align-items:center;
flex-direction:column;
}
/* SECTION3 */
.containercardsection3{
display:flex;
justify-content:center;
align-items:center;
flex-direction:row;
flex-wrap:wrap;
gap:30px;
}
.card1section3{
  display:flex;
justify-content:right;
align-items:right;
flex-direction:column;
width:250px;
background: #E2F1E8;
padding:10px;
border-radius:20px;
}
.card1section3-items{
  margin-left:20px;
}
.section3{
display:flex;
justify-content:center;
align-items:center;

}
.main-container{
display:flex;
justify-content:center;
align-items:center;
flex-direction:column;
flex-wrap:wrap;
}
.conttextsection3 p{
display:flex;
justify-content:center;
align-items:center;
flex-direction:column;
flex-wrap:wrap;
}
.text2section3 p{
  text-align:center;
  flex-wrap:wrap;
}
.text1section3 p{
text-align:center;
font-size:30px;
flex-wrap:wrap;

}
.text1section3{
  width:500px;
  margin-left:100px;
}
.conttextsection3 {
  width:700px;
}
/* SECTION2 */
.section2{
display:flex;
justify-content:center;
align-items:center;
margin-top:80px;
/* margin-left:-10px; */


}
.imagecard2 img{
  width:460px;
  height: 278px;
}
.card2{
display:flex;
justify-content:center;
align-items:center;
flex-direction:row;
flex-wrap:wrap;
/* gap:50px; */

}
.text1card2 p{
  font-size:30px;
}
.textcard2 p{
  margin-left:40px;
}

.textcard2{
display:flex;
justify-content:center;
flex-direction:column;
background-color:rgb(226, 219, 219);
width: 460px;
height: 278px;  


}
 
/* header and navbar */
 .containerheader{
  display:flex;
  position: relative;
  background-color:white;
  justify-content:space-between;
  align-items:center;
  padding:10px;
  z-index: 1;
 }
.ullia{
  display:flex;
  gap:20px;
  margin-right:50px;
}
.ullia .navbar-item{
  list-style:none;
}
.ullia .navbar-item a{
  text-decoration:none;
}
.section1{
  background-image:url('/image/Imagesection1.png');
    background-repeat:no-repeat;
    width: 100%;
    height:100vh;
    margin-top:-20px;
}
.section-blog{
  background-image:url('/assets/img/bus.png');
  background-repeat:no-repeat;
  width: 100%;
  height:100vh;
  margin-top:-20px;
}
  #togglers{
    height: 34px;
    width:44px;
    background-color:gray;
    border-radius:4px;
    cursor:pointer;
    border:none;
    display:block;
    margin-right:15px;
    display:none;
  }
  .nav-toggler:focus{
    outline:none;
    
  }
  .nav-toggler span{
    height:2px;
    width:20px;
    background-color:black;
    display:block;
    margin:auto;
    position:relative;
    transition:all 0.3s ease;
  }
  .nav-toggler.active span{
    background-color:transparent;
  }
.nav-toggler span::before,
.nav-toggler span::after{
  content:'';
  position:absolute;
  left:0;
  top:0;
  width:100%;
  height:100%;
  background-color:black;
  transition:all 0.3s ease;

}
.nav-toggler span::before{
  transform:translateY(-6px);
}
.nav-toggler.active span::before{
  transform:rotate(45deg);
}
.nav-toggler span::after{
  transform:translateY(6px);
}
.nav-toggler.active span::after{
  transform:rotate(135deg);
} 
.section{
  display:flex;
  justify-content:center;
}
.card1section1{
  position:absolute;
  display:flex;
  justify-content:left;
  align-items:left;
  flex-direction:column;
   width: 293px;
  height:236px; 
  margin-top:100px;
  background-color:#ffff;
  border-radius:10px;
  padding:20px;
 
}
.werentlorem{
  font-size:15px;
}
.werent{
  font-size:30px;
}
  /* Barre de recherche */

   .inputmi{
    position: absolute;
    margin-left: -50px;
  }
  .inputmo{
    position: absolute;
    margin-left: -55px;
  }
  .barrecherche{
    display:flex;
    justify-content: center;
    align-items:center;
  }
  .movements input{
    cursor: pointer;
    font-size: 20px;
   width:30px;
   opacity:0;
  }
  .movements{
    display:flex;
    align-items: center;
    gap:20px;
    font-size:20px;
    padding-left: 30px;
    padding-right: 30px;
    border-right:3px solid rgb(161, 206, 161) ;
  }
  .selectcity{
    font-size:20px;
    padding-left: 30px;
    padding-right: 30px;
    border-right:3px solid rgb(161, 206, 161) ;
  }
 
  .barrecherche{
    position: relative;
    background-color:#ffff;
    justify-content: center;
    align-items:center;
    display: flex;
    flex-direction:row;
    gap: 20px;
    border: 3px solid green;
    padding: 5px;
    width: 850px;
    border-radius: 30px;
    margin-left:20%;
    margin-top:-30px;
  }
  select{
    border:none;
    font-size: 20px;
    width:200px;
  }
 
  .parti3{
    justify-content: center;
    align-items:center;
    display: flex;
    flex-direction: row;
    gap: 20px;

  }
  @media screen and (max-width:1037px){
    .barrecherche{
    margin-left:5%;
  }
 }
 @media screen and (max-width:1006px){

  .contact_footer{
    display:none;
  }
  .col5_footer{
    display: flex;
    justify-content:center;
    align-items:center;
    flex-direction:column;
  }
  .col5_footer p{
    text-align:center;
  }
  .display_none_footer{
    display:flex;
    justify-content:center;
    align-items:center;
    flex-direction:column;
  }
  .reseau_footer{
    display:flex;
    flex-direction:row;
    gap:20px;
  }

  .col_footer{
    display:flex;
   flex-direction:row;
   gap:30px;
  }
  .copyright_footer{
    margin-top:10px;
  }
  .col5_footer input{
    width:300px;
    border-radius:10px;
    border:none;
    background: #F2F0F2;
    padding:10px;
  }
  .col4_footer{
    margin-left:70px;
  }
  .logo_footer img{
    margin-top:10px;
  }
  .maincontainer_footer{
    display: flex;
    justify-content:center;
     align-items:center;
    flex-wrap:wrap;
    flex-direction:column;
     gap:10px;
  }
  .footer{
    display:flex;
    justify-content:center;
   
  }
  .ullia{
    position:absolute;
  display:flex;
  justify-content:center;
  align-items:center;
  flex-direction:column;
   margin-left:-450px;
  margin-top:-137%;
  background-color:white;
  width:98%;
  height:100vh;
  gap:15px;
  transition:all 0.5s ease;
}
.ullia.activermenu{
  position:absolute;
  display:flex;
  justify-content:center;
  align-items:center;
  flex-direction:column;
   margin-left:-490px;
  margin-top:6%;
  background-color:white;
  width:98%;
  height:130vh;
  gap:15px;
  transition:all 0.5s ease;
}
#togglers{
    height: 34px;
    width:44px;
    background-color:white;
    border-radius:4px;
    cursor:pointer;
    border:none;
    display:block;
    margin-right:15px;
    display:block;
  }
.ullia .navbar-item{
  display:flex;
  justify-content:center;
  align-items:center;
  flex-direction:column;
  margin-top:30px;
  

}

.barrecherche{
  display:flex;
}
.card1section1{
  position:absolute;
  display:flex;
  justify-content:left;
  align-items:left;
  flex-direction:column;
   width: 293px;
  height:236px; 
  margin-top:100px;
  background-color:#ffff;
  border-radius:10px;
  padding:20px;
 
}
.activecard{
  display:none;
}
.card__content{
    margin-inline: 3rem;
  }

  .swiper-button-prev {
    left: -1rem;
    margin-top:200px;
    margin-left:250px;
  }
  .swiper-button-next {
    right: -1rem;
    margin-top:200px;
    margin-right:250px;

  }
  .swiper-wrapper{
     gap: 100px;
   }
}
@media screen and (max-width:885px){
  .ullia{
    position:absolute;
  display:flex;
  justify-content:center;
  align-items:center;
  flex-direction:column;
  margin-left:-410px;
  margin-top:-137%;
  background-color:white;
  width:98%;
  height:100vh;
  gap:15px;
  transition:all 0.5s ease;
  }
  .ullia.activermenu{
  position:absolute;
  display:flex;
  justify-content:center;
  align-items:center;
  flex-direction:column;
   margin-left:-410px;
  margin-top:6%;
  background-color:white;
  width:98%;
  height:130vh;
  gap:15px;
  transition:all 0.5s ease;
  }
}

  @media screen and (max-width:885px){
 
 
  .barrecherche{
    position: relative;
    background-color:#ffff;
    justify-content: center;
    align-items:center;
    display: flex;
    flex-direction:row;
    gap: 20px;
    border: 3px solid green;
    padding: 5px;
    width: 500px;
    border-radius: 30px;
    margin-left:20%;
    margin-top:-80px;
    flex-wrap:wrap;
  }
  .movements{
    display:flex;
    align-items: center;
    gap:20px;
    font-size:20px;
    padding-left: 30px;
    border-right:none;
    border-bottom:3px solid rgb(161, 206, 161) ;
  }
  .selectcity{
    font-size:20px;
    padding-left: 30px;
    padding-right: 30px;
    border-right:none;
    border-bottom:3px solid rgb(161, 206, 161) ;

  }

 
  }


  @media screen and (max-width:745px){
    .ullia{
      position:absolute;
    display:flex;
    justify-content:center;
    align-items:center;
    flex-direction:column;
    margin-left:-380px;
    margin-top:-137%;
    background-color:white;
    width:98%;
    height:100vh;
    gap:15px;
    transition:all 0.5s ease;
    }
    .ullia.activermenu{
    position:absolute;
    display:flex;
    justify-content:center;
    align-items:center;
    flex-direction:column;
     margin-left:-380px;
    margin-top:6%;
    background-color:white;
    width:98%;
    height:130vh;
    gap:15px;
    transition:all 0.5s ease;
    }
  }
  
  @media screen and (max-width:720px){
    @import url("https://fonts.googleapis.com/css2?family=Bai+Jamjuree:wght@400;500;600&display=swap");
    .barrecherche{
    position: relative;
    background-color:#ffff;
    justify-content: center;
    align-items:center;
    display: flex;
    flex-direction:row;
    gap: 20px;
    border: 3px solid green;
    padding: 5px;
    width: 400px;
    border-radius: 30px;
    margin-left:20%;
    margin-top:-80px;
    flex-wrap:wrap;
  }

  .conttextsection3 p{
    display:flex;
    justify-content:center;
    align-items:center;
    flex-direction:column;
    flex-wrap:wrap;
    width:400PX;
      }
  .text2section3 p{
    text-align:center;
    margin-left:150px;
    flex-wrap:wrap;
}
   .text1section3 p{
    text-align:center;
    margin-left:60px;
    font-size:30px;
    flex-wrap:wrap;

}
    .containercardsection3{
    display:flex;
    justify-content:center;
    align-items:center;
    flex-direction:column;
    flex-wrap:wrap;
    gap:20px;
    }
    .textimage-part3-section2{
    display:flex;
    justify-content:center;
    align-items:center;
    flex-direction:column;
    gap:20px;
    flex-wrap:wrap;
}
.containercardsection3{
display:flex;
justify-content:center;
align-items:center;
flex-direction:column;
flex-wrap:wrap;
gap:30px;
}
.card1section3{
  display:flex;
justify-content:right;
align-items:right;
flex-direction:column;
width:450px;
background: #E2F1E8;
padding:10px;
border-radius:20px;
}
.conttextsection3{
  display:flex;
  justify-content:center;
  align-items:center;
  flex-direction:column;
  width:500px;
  margin-left:-120px;
}
.main-container{
display:flex;
justify-content:center;
align-items:center;
flex-direction:column;
flex-wrap:wrap;
}
.cardimage1-part3-section2 img{
  width:340px;
}
.card_section3A{
    display:flex;
    justify-content:right;
    align-items:right;
    background: #E2F1E8;
    flex-direction:column;
    padding:10px;
    border-radius:20px;
    width:350px;
  }
  .card__content{
    margin-inline: 3rem;
  }

  /* .swiper-button-next,
  .swiper-button-prev {
    display: block;
  } */

  .swiper-button-prev {
    left: -1rem;
    margin-top:200px;
    margin-left:280px;
  }
  .swiper-button-next {
    right: -1rem;
    margin-top:200px;
    margin-right:280px;
  }
  .card__data {
  background: #F2F0F2;
  color: black;
  padding: 1.5rem 2rem;
  border-radius: 1rem;
  text-align:left;
  position: relative;
  width:300px;
  margin-top:100px;
  /* z-index: 10; */
  }
  .swiper-wrapper{
     gap: 100px;
   }
  }
  @media screen and (max-width:686px){
    .ullia{
      position:absolute;
    display:flex;
    justify-content:center;
    align-items:center;
    flex-direction:column;
    margin-left:-350px;
    margin-top:-137%;
    background-color:white;
    width:98%;
    height:100vh;
    gap:15px;
    transition:all 0.5s ease;
    }
    .ullia.activermenu{
    position:absolute;
    display:flex;
    justify-content:center;
    align-items:center;
    flex-direction:column;
     margin-left:-350px;
    margin-top:6%;
    background-color:white;
    width:98%;
    height:130vh;
    gap:15px;
    transition:all 0.5s ease;
    }
  }
  @media screen and (max-width:660px){
    .ullia{
      position:absolute;
    display:flex;
    justify-content:center;
    align-items:center;
    flex-direction:column;
    margin-left:-310px;
    margin-top:-137%;
    background-color:white;
    width:98%;
    height:100vh;
    gap:15px;
    transition:all 0.5s ease;
    }
    .ullia.activermenu{
    position:absolute;
    display:flex;
    justify-content:center;
    align-items:center;
    flex-direction:column;
     margin-left:-310px;
    margin-top:6%;
    background-color:white;
    width:98%;
    height:130vh;
    gap:15px;
    transition:all 0.5s ease;
    }
  }
  @media screen and (max-width:560px){
    .barrecherche{
    position: relative;
    background-color:#ffff;
    justify-content: center;
    align-items:center;
    display: flex;
    flex-direction:row;
    gap: 20px;
    border: 3px solid green;
    padding: 5px;
    width: 300px;
    border-radius: 30px;
    margin-left:20%;
    margin-top:-80px;
    flex-wrap:wrap;
  }

  .movements{
    display:flex;
    align-items: center;
    gap:20px;
    font-size:20px;
    padding-left: 30px;
    border-right:none;
    border-bottom:3px solid rgb(161, 206, 161) ;
  }
  .selectcity{
    font-size:20px;
    padding-left: 30px;
    padding-right: 30px;
    border-right:none;
    border-bottom:3px solid rgb(161, 206, 161) ;

  }
  .card__content{
    margin-inline: 3rem;
  }

  /* .swiper-button-next,
  .swiper-button-prev {
    display: block;
  } */

  .swiper-button-prev {
    left: -1rem;
    margin-top:200px;
    margin-left:280px;
  }
  .swiper-button-next {
    right: -1rem;
    margin-top:200px;
    margin-right:280px;
  }
  .card__data {
  background: #F2F0F2;
  color: black;
  padding: 1.5rem 2rem;
  border-radius: 1rem;
  text-align:left;
  position: relative;
  width:300px;
  margin-top:100px;
  }
  .swiper-wrapper{
     gap: 100px;
   }


   .ullia{
    position:absolute;
  display:flex;
  justify-content:center;
  align-items:center;
  flex-direction:column;
  margin-left:-290px;
  margin-top:-137%;
  background-color:white;
  width:98%;
  height:100vh;
  gap:15px;
  transition:all 0.5s ease;
  }
  .ullia.activermenu{
  position:absolute;
  display:flex;
  justify-content:center;
  align-items:center;
  flex-direction:column;
   margin-left:-290px;
  margin-top:6%;
  background-color:white;
  width:98%;
  height:130vh;
  gap:15px;
  transition:all 0.5s ease;
  }
 }

 @media screen and (max-width:516px){
  .ullia{
    position:absolute;
  display:flex;
  justify-content:center;
  align-items:center;
  flex-direction:column;
  margin-left:-280px;
  margin-top:-137%;
  background-color:white;
  width:98%;
  height:100vh;
  gap:15px;
  transition:all 0.5s ease;
  }
  .ullia.activermenu{
  position:absolute;
  display:flex;
  justify-content:center;
  align-items:center;
  flex-direction:column;
   margin-left:-280px;
  margin-top:6%;
  background-color:white;
  width:98%;
  height:130vh;
  gap:15px;
  transition:all 0.5s ease;
  }
 }
 @media screen and (max-width:500px){
  .ullia{
    position:absolute;
  display:flex;
  justify-content:center;
  align-items:center;
  flex-direction:column;
  margin-left:-270px;
  margin-top:-137%;
  background-color:white;
  width:98%;
  height:100vh;
  gap:15px;
  transition:all 0.5s ease;
  }
  .ullia.activermenu{
  position:absolute;
  display:flex;
  justify-content:center;
  align-items:center;
  flex-direction:column;
   margin-left:-270px;
  margin-top:6%;
  background-color:white;
  width:98%;
  height:130vh;
  gap:15px;
  transition:all 0.5s ease;
  }
 }
 
 
  @media screen and (max-width:412px){
  .ullia{
    position:absolute;
  display:flex;
  justify-content:center;
  align-items:center;
  flex-direction:column;
   margin-left:-225px;
  margin-top:-230%;
  background-color:white;
  width:90%;
  height:80vh;
  gap:15px;
  transition:all 0.5s ease;
}
.ullia.activermenu{
  position:absolute;
  display:flex;
  justify-content:center;
  align-items:center;
  flex-direction:column;
  margin-left:-225px;
  margin-top:7%;
  background-color:white;
  width:90%;
  height:80vh;
  gap:15px;
  transition:all 0.5s ease;
}
#togglers{
    height: 34px;
    width:44px;
    background-color:white;
    border-radius:4px;
    cursor:pointer;
    border:none;
    display:block;
    margin-right:15px;
    display:block;
  }
.ullia .navbar-item{
  display:flex;
  justify-content:center;
  align-items:center;
  flex-direction:column;
  margin-top:30px;
  

}
    .barrecherche{
    position: relative;
    background-color:#ffff;
    justify-content: center;
    align-items:center;
    display: flex;
    flex-direction:row;
    gap: 20px;
    border: 3px solid green;
    padding: 5px;
    width: 300px;
    border-radius: 30px;
    margin-left:10%;
    margin-top:-55%;
    flex-wrap:wrap;
  }
  .swiper-wrapper{
     gap: 100px;
   }
  } 

  @media screen and (max-width:360px){
  .ullia{
    position:absolute;
  display:flex;
  justify-content:center;
  align-items:center;
  flex-direction:column;
   margin-left:-200px;
  margin-top:-230%;
  background-color:white;
  width:90%;
  height:80vh;
  gap:15px;
  transition:all 0.5s ease;
}
.ullia.activermenu{
  position:absolute;
  display:flex;
  justify-content:center;
  align-items:center;
  flex-direction:column;
  margin-left:-200px;
  margin-top:7%;
  background-color:white;
  width:90%;
  height:80vh;
  gap:15px;
  transition:all 0.5s ease;
}
#togglers{
    height: 34px;
    width:44px;
    background-color:white;
    border-radius:4px;
    cursor:pointer;
    border:none;
    display:block;
    margin-right:15px;
    display:block;
  }
.ullia .navbar-item{
  display:flex;
  justify-content:center;
  align-items:center;
  flex-direction:column;
  margin-top:30px;
  

}
    .barrecherche{
    position: relative;
    background-color:#ffff;
    justify-content: center;
    align-items:center;
    display: flex;
    flex-direction:row;
    gap: 20px;
    border: 3px solid green;
    padding: 5px;
    width: 300px;
    border-radius: 30px;
    margin-left:10%;
    margin-top:-20%;
    flex-wrap:wrap;
  }
  .card__content{
    margin-inline: 3rem;
  }

  /* .swiper-button-next,
  .swiper-button-prev {
    display: block;
  } */

  .swiper-button-prev {
    left: -1rem;
    margin-top:130px;
    margin-left:220px;
  }
  .swiper-button-next {
    right: -1rem;
    margin-top:130px;
    margin-right:220px;

  }
  } 
  @media screen and (max-width:280px){
  .ullia{
    position:absolute;
  display:flex;
  justify-content:center;
  align-items:center;
  flex-direction:column;
   margin-left:-160px;
  margin-top:-230%;
  background-color:white;
  width:90%;
  height:80vh;
  gap:15px;
  transition:all 0.5s ease;
}
.ullia.activermenu{
  position:absolute;
  display:flex;
  justify-content:center;
  align-items:center;
  flex-direction:column;
  margin-left:-160px;
  margin-top:7%;
  background-color:white;
  width:90%;
  height:80vh;
  gap:15px;
  transition:all 0.5s ease;
}
#togglers{
    height: 34px;
    width:44px;
    background-color:white;
    border-radius:4px;
    cursor:pointer;
    border:none;
    display:block;
    margin-right:15px;
    display:block;
  }
.ullia .navbar-item{
  display:flex;
  justify-content:center;
  align-items:center;
  flex-direction:column;
  margin-top:30px;
  

}
    .barrecherche{
    position: relative;
    background-color:#ffff;
    justify-content: center;
    align-items:center;
    display: flex;
    flex-direction:row;
    gap: 20px;
    border: 3px solid green;
    padding: 5px;
    width: 250px;
    border-radius: 30px;
    margin-left:5%;
    margin-top:-20%;
    flex-wrap:wrap;
  }

  } 
    
  
    </style>
     <script>
        admin  = document.querySelector(".Amdmin_Control");
        admin.addEventListener('mouseover', function (){ 
          appear = document.querySelector(".Amdmin_Control_container");
          appear.classList.toggle("active");
        });        
  </script>
<script>
    // Fonction d'initialisation de la carte
    function initMap() {
        // Coordonnées pour le centrage de la carte (par exemple, le centre de Paris)
        var myLatLng = { lat: 48.8566, lng: 2.3522 };

        // Créer une carte avec le centre défini et le niveau de zoom
        var map = new google.maps.Map(document.getElementById('map'), {
            center: myLatLng,
            zoom: 12 // Ajustez le niveau de zoom selon vos besoins
        });

        // Ajouter un marqueur pour indiquer un emplacement spécifique
        var marker = new google.maps.Marker({
            position: myLatLng,
            map: map,
            title: 'Hello World!'
        });
    }
</script>



