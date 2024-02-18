<?php
session_start();
?>
@include('header')
<br><br>
<section class="mc_liste_reservation">
@foreach($reservation_finales as $affiches)
    <div class="card_liste_reservation">
        <div>
            <p><strong>Costumer Informations ID: {{$affiches->id}} </strong></p>
            <span><strong>First name</strong>: {{$affiches->first_name}}</span><br>
            <span><strong>Last name</strong>: {{$affiches->last_name}}</span><br>
            <span><strong>Email</strong>: {{$affiches->email}}</span><br>
            <span><strong>Phone</strong>: {{$affiches->phone}}</span><br>
            <span><strong>Purpose</strong>: {{$affiches->Purpose}}</span><br>
            <span><strong>Name of Employer/Organisaition</strong>:</span><br> {{$affiches->Name_of_Employer_Organisaition}}<br>
            <span>{{$affiches->I_m_booking_on_behalf_of_someone_else}}</span><br>
            <span><strong>Name</strong>: {{$affiches->name}}</span><br>
            <span><strong>Email of the guest</strong>: {{$affiches->email_of_the_guest}}</span>
        </div>
        <div>
            <p class="" style=""><strong>Payment Details</strong></p>
            <span><strong>Rent per month</strong>: £{{$affiches->Rent_per_month}}</span><br>
            <span><strong>Utilities per month</strong>: £{{$affiches->Utilities_per_month}}</span><br>
            <span><strong>Monthly subtotal</strong>: £{{$affiches->Monthly_subtotal}}</span><br>
            <span><strong>One time cleaning fee</strong>: £{{$affiches->One_time_cleaning_fee}}</span><br>
            <span><strong>Total charges</strong>: £{{$affiches->Total_charges}}</span><br>
            <span><strong>Total</strong>: <strong class="bg-danger">£{{$affiches->Total}}</strong></span><br>
            <span><strong>Method paiement</strong>: {{$affiches->method_paiement}}</span><br>
            <span><strong>Numero transaction</strong>: </span><br>
            {{$affiches->numero_transaction}}
        </div>
        <div>
            <p><strong>Rented Property</strong></p>
            <span><strong>Property id</strong>: {{$affiches->property_id}}</span><br>
            <span><strong>Move in</strong>: <strong class="text-success">{{$affiches->move_in}}</strong></span><br>
            <span><strong>Move out</strong>: <strong class="text-danger">{{$affiches->move_out}}</strong></span>
        </div>
    </div>
    @endforeach
</section>
<br><br><br>
@include('footer')