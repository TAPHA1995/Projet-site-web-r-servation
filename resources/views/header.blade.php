

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
                    <!-- <li class="navbar-item"><a class="navbar-link" href="/message"><i class="fa-solid fa-bell"></i></a></li> -->
                    <li class="navbar-item"><a class="navbar-link" href="{{route('contacts.contact')}}"><i class="fa-solid fa-bell"></i>
                     <!-- Affichage du nombre de notification -->
                     <div style="margin-top:-30px; margin-left:10px;color:white; background-color:red; border-radius:100%;padding-left:6px;padding-right:6px; font-size:10px;">
                        <strong>{{ $messageCount ? $messageCount : ''}}</strong>
                    </div>
                  </a></li>
                    <li class="navbar-item">
                         <p class="navbar-link Amdmin_Control" href="">Admin Control</p>
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

    .activeblog{
      position:absolute;
      margin-top:30px;
      display:flex;
    }
    .ajout_article li {
      list-style: none;
    }
    .liste_reservation li {
      list-style: none;
    }
    .ajout_article li a{
      margin-left:-30px;
      padding:5px;
    }
    .liste_reservation li a{
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
  </style>

  <script>
        admin  = document.querySelector(".Amdmin_Control");
        admin.addEventListener('mouseover', function (){
          appear = document.querySelector(".Amdmin_Control_container");
          appear.classList.toggle("active");
        });
  </script>
