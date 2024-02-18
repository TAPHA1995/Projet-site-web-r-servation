<?php
namespace App\Http\Middleware;
namespace App\Http\Controllers;
session_start();
use App\Models\Critere;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Closure;
use Illuminate\Support\Facades\Route;
use Illuminate\Auth\Middleware\Authenticate as Middleware;

?>
@include('header')



<br><br>
    <form action="/booking" method="get">
            @method('get')
        <div class="barrecherche">
            <div class="selectcity">
                <i class="fa fa-search"></i>
                <select name="city" id="" value="{{ request()->city ?? '' }}" placeholder="Select a City" class="select">
                    <option value="">Select a city</option>
                    <option value="DAKAR">DAKAR</option>
                    <option value="SAINT-LOUIS" >SAINT-LOUIS</option>
                    <option value="KOLDA">KOLDA</option>
                    <option value="ZIGUINCHOR">ZIGUINCHOR</option>
                    <option value="THIES">THIES</option>
                    <option value="KAOLACK">KAOLACK</option>
                    <option value="LOUGA">LOUGA</option>
                </select>
            </div>
            <div class="movements">

                @method('get')
                    <div class="mvin">
                            <span class="move-in">move-in</span><input type="date" name="date" id="" placeholder="move-in" class="inputmi">
                    </div>

            <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
            <div  class="mvout">
                    <span class="move-out">move-out</span><input type="date" name="move-out" id="" class="inputmo">
            </div>
            </div>
            <div class="parti3">
                <div class="guest" style=" display:flex; flex-direction:colunm; gap:3px; align-items:center;">
                    <i class="fa fa-users"></i>
                    <span>Guests</span>
                    <input type="number" name="guest" value="" style="width:40px; display:flex; flex-direction:colunm; justify-content:center; align-items:center;">
                </div>
                <div class="bouttonrecherche">
                <button type="submit" class="btn btn-primary rounded-pill">Search</button>
                </div>
            </div>
        </div>
    <br><br>
    <div class="great_container">
        <div>
            <button class="btn btn-success container_filter rounded-pill " >
                <div>More filters</div>
                    <select name="filter" id="" class="filter bg-success">
                        <option value=""></option>
                        <option value="City view">City view</option>
                        <option value="Parking">Parking</option>
                        <option value="Elevator">Elevator</option>
                        <option value="Wifi">Wifi</option>
                    </select>
            </button>
        </div>
    </form>
    <div class="fliter_items">
    @if(request()->input('filter') == 'City view')
        <div class="fliter_card">
            <i class="fa-solid fa-city"></i>
            <span>City view</span>
            <i class="fa fa-times"></i>
        </div>

    @elseif(request()->input('filter') == 'Parking')
        <div class="fliter_card">
          <img src="/room_images/fa-solid_car-alt.png" alt="">
          <span>Parking</span>
          <i class="fa fa-times"></i>
       </div>
    @elseif(request()->input('filter') == 'Elevator')
       <div class="fliter_card">
          <i class="fa-solid fa-elevator"></i>
          <span>Elevator</span>
          <i class="fa fa-times"></i>
       </div>
   @elseif(request()->input('filter') == 'Wifi')
       <div class="fliter_card">
          <img src="/room_images/Group (4).png" alt="">
          <span>Wifi</span>
          <i class="fa fa-times"></i>
       </div>
       @endif
    </div>
    <div class="search_by" >
       <div class="container_search_by card_property">
            <span><strong>Search by:</strong></span>
            <span class="Availability text-success">Availability</span>
            <select name="" id="" class="filterb">
                @foreach($Critere as $affiches)
                <option value="">{{$affiches->date_of_availability}}</option>
                @endforeach
            </select>
       </div>
    </div>
</div>
<br><br>
<section>
    <div class="alert_search_result" style="display:flex; flex-direction:column;">
        <div style="display:flex; flex-direction:;">
        @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
        @endif
        @if (session('fail'))
            <div class="alert alert-danger">
                {{ session('fail') }}
            </div>
        @endif
         <?php
         $rooms=Critere::where('city', 'like', "%request()->input('city')%")
        ?>
        @if(request()->input('city') == $rooms)
                <p>vjjssjsjsjjsjjsj</p>
        @endif
        @if(request()->input('city'))
            <div class="alert"><strong>{{$Critere->total() }}  result for : "City : {{request()->input('city')}}" </strong></div>
        @endif
        @if(request()->input('date'))
            <div class="alert"><strong>"Available: {{request()->input('date')}}"</strong> </div>
        @endif
        @if(request()->input('guest'))
        <div class="alert"><strong>"{{request()->input('guest')}} guest"</strong></div>
       @endif
       @if(request()->input('filter'))
        <div class="alert"><strong>"{{request()->input('filter')}}"</strong></div>
        @endif
        </div>
        <div>
            <?php

            ?>
        </div>
    </div>
        <?php
         GLOBAL $move_out;
         if (isset($_GET['move-out'])) {
            $move_out=$_GET['move-out'];

        $_SESSION['move-out_guest'] =
        [
          "move-out"=>$_GET["move-out"],
        ];
         }
        ?>
        <div class="room_card">
            <div class="maincontainer_rooms">
                <div class="group_card">
                @foreach($Critere as $affiches)
                <a href="rol_proper/{{$affiches->id}}" class="card_property">
                        <div class="maincontainer_room_card">
                        <div class="image_chambre">
                            <img src="/images_property/{{$affiches->photo}}" alt="">
                        </div>
                        <div class="text_conatiner_card">
                            <div class="" style="display:flex; align-items:center; ">
                                <div><strong>{{$affiches->type_property}}</strong></div>
                            </div>
                            <div>
                                <p><strong>{{$affiches->city}}: {{$affiches->area }}</strong></p>
                            </div>
                                <div class="bed_bath_wifi">
                                    <div class="text_lineA_card">
                                        <img src="/room_images/fluent_bed-24-filled.png" alt="">
                                        <div>{{$affiches->nombre_chambre}} bedroom</div>
                                    </div>
                                    <div class="text_lineA_card">
                                        <img src="/room_images/Vector (24).png" alt="">
                                        <div>{{$affiches->bath}} bath</div>
                                    </div>
                                    <div class="text_lineA_card">
                                        <img src="/room_images/Group (4).png" alt="">
                                        <div>{{$affiches->wifi}}</div>
                                    </div>
                                </div>
                            <div class="">
                                <p>{{$affiches->city_view}} {{$affiches->level}} {{$affiches->elevator}}  {{$affiches->parking}}  </p>
                            </div>
                            <div class="btn_text">
                            <button class="btn btn-success rounded-pill" style="width:300px">Available {{$affiches->date_of_availability}}</button>
                            <div><strong>£{{$affiches->price}}</strong>/month</div>
                            </div>
                        </div>
                        <div>
                    </div>
                    </div>
                       @guest

                       @if (Route::has('login'))
                            @endif
                            @if (Route::has('register'))

                            @endif
                        @else
                            @if(Auth::user()->type_user == 'admin')
                    <p class="owner bg-danger text-light mt-3">The owner: {{$affiches->nom}}; {{$affiches->email}}; {{$affiches->numero_tel}}</p>
                    </a>
                    <div class="edit_suppimer" style="display:flex; gap:5px; margin-top:-10px;">
                        <a href="edite_property_rol/{{$affiches->id}}" class="btn btn-primary">Editer</a>
                        <form method="POST" action="{{ route('critere.supprimer', $affiches->id) }}">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger"   onclick="return confirm('Voulez-vous vraiment supprimer cette Proprieté ?')">Supprimer</button>
                        </form>
                    </div>

                    @endif
                    @endguest
                    <br>
                    @endforeach
                </div>
                <div class="room_map">
                <div>
                    <img src="/room_images/Map_card.png" alt="">
                </div>
                </div>
            </div>
        </div>
</section>
<style>
.condition{
    display:none;
}
.condition.activealert{
    display:block;
}
.image_chambre img{
    height: 240px;
    width: 300px;
}
</style>

<br><br><br>
    <script>
    const ddd = document.querySelector(".card_property");
    const condition = document.querySelector('.condition');
    ddd.addEventListener('click', ()=> {
        condition.classList.add('activealert');

    });
    </script>
@include('footer')
