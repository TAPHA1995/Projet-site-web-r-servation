

<?php
session_start();
?>
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

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.min.css">



    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.css"
/>
<script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>
    <title>Document</title>
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
                    <li class="navbar-item">
                      <ul class="liste_reservation">
                      </ul>
                    </li>
                    <li class="navbar-item"><a class="navbar-link" href="/contact">Contacts</a></li>
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

                          @guest
                          <div class="connexion_inscription" style="margin-top:-9px; display:flex;">
                            @if (Route::has('login'))
                                <li class="nav-item  navbar-item">
                                    <a class="nav-link " href="{{ route('login') }}">{{ __('Connexion') }}</a>
                                </li>
                            @endif
                            @if (Route::has('register'))
                                <li class="nav-item navbar-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Inscription') }}</a>
                                </li>
                          </div>
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
    .ajout_article{
      background-color:#F2F0F2;
      position:absolute;
      margin-top:30px;
      display:flex;
    }
    .liste_reservation{
      background-color:#F2F0F2;
      position:absolute;
      margin-top:20px;
      display:flex;
    }
    </style>

  <script>
        admin  = document.querySelector(".Amdmin_Control");
        admin.addEventListener('mouseover', function (){
          appear = document.querySelector(".Amdmin_Control_container");
          appear.classList.toggle("active");
        });
  </script>
<section class="section_Guest_details">
    <div class="maincontainer_Guest_details">

        <div>
             <div class="title_Guest_Details">
                 <p><strong>Guest details</strong></p>
             </div>

             @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif

            <form action="{{ route('checkoutpageA', $Critere->id) }}" method="get">
                  @csrf
                  <input type="hidden" placeholder="First name" name="property_id" value="{{$Critere->id}}" required>
                  <div class="inputtext_guest_details">
                      <input type="text" placeholder="First name" name="first_name" required>
                  </div><br>
                  <div class="inputtext_guest_details">
                      <input type="text" placeholder="last name" name="last_name" required>
                  </div><br>
                  <div class="inputtext_guest_details">
                      <input type="text"  placeholder="Email" name="email" required>
                  </div><br>
                  <div class="inputtext_guest_details">




                    <div style="display: flex; flex-direction:row; gap:10px;">
                        <input   name="phone" type="text" value="{{ old('telephone') }}" id="phone" placeholder="Phone number" style="width:250px" class="form-control @error('telephone')  is-invalid @enderror" required autocomplete="Telephone" autofocus>
                        <span id="valid-msg" class="hide" style="color:green"></span>
                        <span id="error-msg" class="hide" style="color:red"></span>
                    </div>
                  {{-- <input id="phone" name="phone" type="text" placeholder="Phone" required> --}}
                  </div>
                  <br>
                <div>
                  <div class="Purpose_of_stay">
                      <p><strong>Purpose of stay</strong></p>
                  </div>
                  <div>
                  <span><input type="radio" name="Purpose" value="Business Travel/ Work" required>Business Travel/ Work</span><br>
                  <span><input type="radio" name="Purpose" value="Moving to this city or country" required> Moving to this city or country</span><br>
                  <span><input type="radio" name="Purpose" value="Holiday" required> Holiday</span><br>
                  <span><input type="radio" name="Purpose" value="Other" required> Other</span><br>
                  </div><br>
                  <div class="inputtext_guest_details">
                      <input type="text" placeholder="Name of Employer/ Organisaition" name="Name_of_Employer_Organisaition" required>
                  </div>
              </div><br>
              <div  class="behalf_of_someone">
                  <div>
                    <span><input type="checkbox"  value="I_m_booking_on_behalf_of_someone_else" name="I_m_booking_on_behalf_of_someone_else"id="" > I’m booking on behalf of someone else</span>
                  </div><br>
                  <div class="inputtext_guest_details">
                      <input type="text" placeholder="Name" name="name" >
                  </div><br>
                  <div class="inputtext_guest_details">
                      <input type="text" placeholder="Email of the guest" name="email_of_the_guest">
                  </div>
              </div>
           <!-- </form> -->
        </div>
        <div class="card2_guest_details">
            <div class="image_guest_details">
                <img src="/images_property/<?=$_GET['photo']?>" alt="">
                <input type="hidden" name="photo" id="" value="<?=$_GET['photo']?>">
            </div><br>
            <div class="part1_guest_details">

                <!-- formulaire pour récupérer les données de la bd -->

                <div class="ctn_part1_guest_details">
                        <div>
                            <div>
                                <p>Move in</p>
                                <?php
                                    ?>
                                <span>
                                  <img src="/image/Vector (9).png" alt=""><input type="hidden" placeholder="move out" name="move-in" value="">
                                </span>
                                <?=$_GET['move_in']?>
                                <input type="hidden" name="move_in" id="" value="<?=$_GET['move_in']?>">
                                <br>
                            </div>
                        </div><br>
                        <div>
                            <div>
                                <span><img src="/image/eva_people-fill.png" alt=""> Guests <?=$_GET['guest']?></span>
                                <input type="hidden" name="guest" id="" value="<?=$_GET['guest']?>">
                            </div>
                            <br>
                        </div><br><br>
                         <div>
                            <p>All utilities are included</p>
                        </div>
                  </div>
                    <div>
                        <div>
                            <p>Move out</p>
                            <span>
                                <img src="/image/Vector (9).png" alt="">
                                <input type="hidden" placeholder="move out" name="move-out" value="">
                            </span>
                            <?=$_GET['move_out']?>
                            <input type="hidden" name="move_out" id="" value="<?=$_GET['move_out']?>">
                        </div>
                    </div>
            </div><br>
            <div class="card3_guest_details">
                <div>
                    <div>
                        <p>Average monthy rent</p>
                    </div>
                    <div>
                        <span><strong>Pay upon booking</strong> <img src="/image/Vector (10).png" alt=""></span>
                    </div><br>
                    <div>
                        <div>
                           <span>Total costs <img src="/image/Vector (10).png" alt=""></span>
                        </div>
                          <a href="">Show more</a>
                    </div>
                </div>
                <div class="prices_guest_details">
                    <div>
                        <div>
                            <p>
                            <?php
                            $pourcentage = 8;
                            $paiement_reservation = $pourcentage * $_GET['price'] / 100;
                            echo '£' .$_GET['price'] - $paiement_reservation;
                            ?>
                            <input type="hidden" name="price" id="" value="<?=$_GET['price'] - $paiement_reservation?>">
                            </p>
                        </div>
                        <p>incl. VAT</p>
                    </div>
                    <div>
                        <div>
                            <p><strong>£{{$Critere->price}}</strong></p>
                        </div>
                        <p>incl. VAT</p>
                    </div>
                    <div>
                        <div>
                            <p>
                            <?php
                            $pourcentage_total = 10;
                            $paiement_reservation_total = $pourcentage_total * $_GET['price'] / 100;
                            echo '£' .$_GET['price'] + $paiement_reservation_total;
                            ?>
                              <input type="hidden" name="Pay_upon_booking" id="" value="<?=$_GET['price'] + $paiement_reservation_total?>">
                            </p>
                        </div>
                        <p>incl. VAT</p>
                    </div>
                </div>
            </div>
            <div class="maincontainer_footer_guests">
                <div class="Payment_timeline_guest">
                    <p><strong>Payment timeline</strong></p>
                </div>

                    <div class="footer_guest_detail">
                        <div class="time_line_img_guest">
                            <img src="/image/Timeline.png" alt="">
                        </div>
                        <div class="lastpart_guest_footer">
                            <div class="Reserve_Due_After_Receive">
                                <div>
                                    <div>
                                        <p>Reserve this apaptment</p>
                                    </div>
                                    <p>Due now</p>
                                </div>
                                <div>
                                    <div>
                                        <p>After move-out</p>
                                    </div>
                                    <br>
                                    <span>Receive your
                                    <?php
                                      $pourcentage_reçu = 11;
                                      $paiement_reservation_reçu = $pourcentage_reçu * $_GET['price'] / 100;
                                      echo '£' .$paiement_reservation_reçu;
                                    ?>
                                     <input type="hidden" name="Receive_your" id="" value="<?=$paiement_reservation_reçu?>">
                                  <img src="/image/Vector (10).png" alt=""></span>
                                </div>
                            </div>
                            <div>
                              <p>
                              <?php
                                echo '£' .$_GET['price'] + $paiement_reservation_total;
                                ?>
                                <input type="hidden" name="Total_costs" id="" value="<?=$_GET['price'] + $paiement_reservation_total?>">
                                </p>
                          </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br><br><br>
</section>
<br><br><br>
    <div class="maincontainer_book">
        <div class="booking_guest_detail">
            <p><strong>Payment method</strong></p>
        </div>
        <div>
          <?php
            ?>
              <select name="paiement" id="" class="inputtext_guest_details" required>
                  <option value="" class="">Payment method</option>
                  <option value="Orange Money" class="">Orange Money</option>
                  <option value="Wave" name="Wave">Wave</option>
                  <option value="Free Money" name="Wave">Free Money</option>
                  <option value="PayPal">PayPal</option>
                  <option value="Master Card">Master Card</option>
                  <option value="Visa">Visa</option>
              </select>
        </div>
        <div><br>
            <p>By clicking "Book" below, I have read and agreed to the <a href="">key contract terms, cancellation policy and apartment & building rules</a> , and to pay the total amount shown.</p>
        </div>
        <button type="submit" id="send" class="btn btn-success">Book</button>
    </div>
    <br><br><br><br>
    </form>

<section class="footer">
       <div class="maincontainer_footer">
             <div class="col1_footer">
                  <div class="logo_footer">
                       <a href=""><img src="/image/logo.png" alt=""></a>
                  </div>
                  <div class="contact_footer">
                      <div class="tel_footer">
                        <p>Contact number: 02033074477</p>
                      </div>
                      <div class="reseauxfooter">
                          <div>
                              <a href=""><img src="/image/Group.png" alt=""></a>
                          </div>
                          <div>
                              <a href=""><img src="/image/eva_facebook-fill.png" alt=""></a>
                          </div>
                          <div>
                              <a href=""><img src="/image/eva_twitter-fill.png" alt=""></a>
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
                            <a href=""><img src="/image/Group.png" alt=""></a>
                          </div>
                          <div>
                            <a href=""><img src="/image/eva_facebook-fill.png" alt=""></a>
                          </div>
                          <div>
                              <a href=""><img src="/image/eva_twitter-fill.png" alt=""></a>
                          </div>
                      </div>
                      <div class="copyright_footer">
                        <p>© 2021 Flex Living</p>
                      </div>
                 </div>
        </div>
    </section>

     <!--=============== SWIPER JS ===============-->
   <script src="/assets/js/swiper-bundle.min.js"></script>

<!--=============== MAIN JS ===============-->
<script src="/assets/js/main.js"></script>
<script src="/JStapha/jstapha.js"></script>
<script>
  var input = document.getElementById("phone");
    window.intlTelInput(input, {
        utilsScript: "/js/utils.js"
    });
</script>
<link rel="stylesheet" href="/css/intlTelInput.css" />
<script src="/js/intlTelInput.js"></script>




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

    <style>
      /* Guest_detail */


      .Total_charges{
    margin-top: 8px;
    }
.price_checkout{
    line-height: 15px;
    margin-top:10px;
}
.footer_checkout{
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
}
.Booking_review p{
   font-size: 30px;
}
.RUM_checkout{
    display: flex;
    gap: 200px;
}
.maincontaier_checkout{
    display: flex;
    flex-direction: column;
}
.booking_guest_detail p{
    font-size: 30px;
}
.maincontainer_book{
    width: 400px;
    margin-left: 200px;
}
.section_Guest_details{
    display: flex;
    justify-content: center;
    margin-top: 40px;
}
.maincontainer_Guest_details{
    display: flex;
    flex-direction:row;
    flex-wrap: wrap-reverse;
    gap: 250px;
}
.image_guest_details img{
    width: 400px;
}
.inputtext_guest_details input
{
background: #F2F0F2;
width: 300px;
padding-left: 15px;
border-radius: 10px;
border: none;
padding: 10px;
}
.title_Guest_Details{
    font-size: 30px;
}
.part1_guest_details{
    display: flex;
    justify-content:center;
    gap: 100px;
    line-height: 7px;

}
.ctn_part1_guest_details{
    display: flex;
    flex-direction:column;
}
.card2_guest_details{
    background: #F2F0F2;

}
.card3_guest_details{
    display: flex;
    justify-content: center;
    gap: 140px;
}
.prices_guest_details{
    line-height: 9px;
}
.footer_guest_detail{
    display: flex;
    flex-direction: row;
    justify-content: center;
    align-items: center;
    gap: 15px;
}
.maincontainer_footer_guests{
    display: flex;
    flex-direction: column;
    justify-content: center;

}
.lastpart_guest_footer{
    display: flex;
    justify-content: center;
    gap: 100px;

}
.Reserve_Due_After_Receive{
    line-height: 20px;
}
.time_line_img_guest{
    margin-top: -40px;
}
.Payment_timeline_guest{
    margin-left: 15px;
}
@media screen and (max-width:500px) {
    .maincontainer_Guest_details{
        display: flex;
        justify-content: center;
        flex-direction:row;
        flex-wrap: wrap-reverse;
        gap: 100px;
    }
    .RUM_checkout{
        gap: 100px;
    }
}
@media screen and (max-width:360px) {
    .maincontainer_Guest_details{
        display: flex;
        justify-content: center;
        flex-direction:row;
        flex-wrap: wrap-reverse;

    }
    .maincontainer_Guest_details{
        display: flex;
        flex-direction:row;
        flex-wrap: wrap-reverse;
        /* width: 100px; */
    }
    .card3_guest_details{
        gap: 100px;
    }
    .part1_guest_details{
        gap: 60px;
    }
    .lastpart_guest_footer{
        gap: 50px;

    }
    .Payment_timeline_guest{
        margin-left: 20px;
    }
}

      /* menu_dropdown */
    .ajout_article{
      background-color:#F2F0F2;
      position:absolute;
      margin-top:30px;
      display:flex;
    }
    .activeblog{
      position:absolute;
      margin-top:30px;
      display:flex;
    }
    .ajout_article li {
      list-style: none;
    }
    .ajout_article li a{
      margin-left:-30px;
      padding:5px;
    }

     #blog{
      cursor:pointer;
    }
    .Active_arrow_blog{
        display:flex;
        margin-left: 35px;
        margin-top:-17px;
        transform: rotate(90deg);
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
        blog  = document.getElementById("blog");
        blog.onclick= function(){
        appear = document.querySelector(".ajout_article");
        appear.classList.toggle("activeblog");
        appear = document.querySelector(".arrow_blog");
        appear.classList.toggle("Active_arrow_blog");
        appear.transition ="0.10";
        };
  </script>


