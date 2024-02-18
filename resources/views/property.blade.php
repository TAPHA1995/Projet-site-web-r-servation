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
            .property_projet{
                margin-top:80%;
            }
        </style>
</head>

<body>
@include('header')
    <div class="container-fluid mt-2">
        <div class="row align-items-stretch">
            <div class="col-lg-7 col-md-12">
                <img src="{{ asset('assets/img/im1.png') }}" alt="" class="img-fluid custom-height" style="height:480px;">
            </div>
            <div class="col-lg-5 col-md-12">
                <div class="row col-xs-6">
                    <div class="col-md-6">
                        <img src="{{ asset('assets/img/im2.png') }}" alt="" class="img-fluid">
                    </div>
                    <div class="col-md-6">
                        <img src="{{ asset('assets/img/im3.png') }}" alt="" class="img-fluid">
                    </div>
                </div>
                <div class="row mt-2 col-xs-6">
                    <div class="col-md-6">
                        <img src="{{ asset('assets/img/im4.png') }}" alt="" class="img-fluid">
                    </div>
                    <div class="col-md-6">
                        <img src="{{ asset('assets/img/im5.png') }}" alt="" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container property_projet">
        <div class="row mt-5 ">
            <div class="col-lg-6">
                <h1>Rhoncus suspendus</h1>
                <div class="di">
                    <p>London, Nottling Hill</p>
                </div>
                <div class="d-flex">
                    <div class="k"><img src="{{ asset('assets/imgicone/chambre.png') }}" width="15" alt="" class="img-fluid"></div>
                    <div class="k">2 bedroom</div>
                    <div class="k"><img src="{{ asset('assets/imgicone/bath.png') }}" width="15" alt="" class="img-fluid"> 2 bath</div>
                    <div class="k">500 sq ft | City view| 3rd floor | Elevator</div>
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
                        <h2 class="align-items-center mb-5">E3990 / Month</h2>
                    </div>

                    <div class="row mx-5">
                        <div class="col-lg-6">

                            <p>Move in</p>
                            
                            <button class="bg-white w-10 border-0 rounded-top rounded-bottom"><img src="{{ asset('assets/imgicone/calendrier.png') }}" alt="" width="20"> 31.12.2021</button>
                            <div class="my-4">
                                <p><img src="{{ asset('assets/imgicone/guest.png') }}" alt="" width="20"> Guests + 1 -</p>

                            </div>
                            <p class="my-4">All utilities are included</p>
                            <p class="my-4">Average monthy rent</p>
                            <p class="my-4">Pay upon booking</p>
                            <p class="my-4">total costs</p>
                            <p class="my-4">Show more</p>
                        </div>
                        <div class="col-lg-6">
                            <p>Move out</p>
                            <!--<p class="bg-white" style="border-radius: 26%;"><img src="{{ asset('assets/imgicone/calendrier.png') }}" alt="" width="20"></p>-->
                            <button class="bg-white w-10 border-0 rounded-top rounded-bottom"><img src="{{ asset('assets/imgicone/calendrier.png') }}" alt="" width="20">31.02.2022</button>

                            <div class="mt-5 pl-3">
                            <div>
                            <p class="fw-bold">E3700</p>
                            <p>incl.VAT</p>
                            
                            <div>
                            <p class="fw-bold">E3989.23</p>
                            <p>incl.VAT</p>
                            </div>
                            <div>
                            <p class="fw-bold">E4001.70</p>
                            <p>incl.VAT</p>
                            </div>

                            </div>
                          
                            

                            
                            
                        </div>
                    </div>
                    <div class="text-center mt-4">

                        <button type="submit" class="btn btn-success">Continue booking</button>

                    </div>

                </div>
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
            <div id="map" style="height: 400px;"></div>
            
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
        <div class="container-fluid">
        @include('footer')
         </div>
    
    </div>
   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<!-- Ajouter le script de l'API Google Maps -->
<script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&callback=initMap" async defer></script>

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



