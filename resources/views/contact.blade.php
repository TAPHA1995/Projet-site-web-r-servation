@include('header')
<br><br>
<section class="contacts_contacts">

    <div class="Please_tell">
        @if (session('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
        @endif
        @if (session('fail'))
            <div class="alert alert-danger">
                {{ session('fail') }}
            </div>
        @endif
        <p><strong>Please tell us a little about you</strong></p>
    </div>
    <div class="maincontainer_contactT">
        <div class="right_part_contacts">
            <div>
                <p><strong>What would you like to contact us about?</strong></p>
            </div>
            <form action="/contact-contact" method="post">
                @method('POST')
                @csrf
                <div class="groupe_input_contact">
                    <div class="radio_contact">
                        <!-- value pour l'affichage du profil  -->
                        <div>
                        <span><input type="radio" name="un" id="" value="I'm a Customer"> I'm a Customer</span>
                        </div>
                        <div>
                        <span><input type="radio" name="un" id="" value="I'm a Landlord"> I'm a Landlord</span>
                        </div>
                        <div>
                        <span><input type="radio" name="un" id="" value="Something else"> Something else</span>
                        </div>
                    </div><br>
                    <div class="groupe_input_text">
                        <div>
                            <input type="text" name="nom" id="" placeholder="Name">
                        </div><br>
                        <div>
                            <input type="text" name="email" id="" placeholder="Email">
                        </div><br>
                        <div style="display: flex; flex-direction:row; gap:10px;">
                        <input  name="tel" type="text" value="" id="phone" placeholder="Phone number">
                        <span id="valid-msg" class="hide" style="color:green">valid</span>
                        <span id="error-msg" class="hide" style="color:red"></span>
                        </div><br>
                        <div>
                            <textarea class="message_contact" name="message" id="" cols="30" rows="3" placeholder="Message"></textarea>
                        </div>
                        <button type="submit" id="send" class="btn btn-success">Send</button>
                    </div>
                </div>
            </form>

        </div>
        <div class="left_part_contact">
            <div class="left_part_contact_text">
                <div>
                     <p><strong>Reservations:</strong></p>
                </div><br>
                <div>
                    <p><strong>For Landlords:</strong></p>
                </div><br>
                <div>
                    <p><strong>For Maintenance:</strong></p>
                </div>
            </div>
            <div class="email_phone_contact">
                <div>
                     <p>reservations@theflexliving.com
                        0203 307 4477
                     </p>
                </div>
                <div>
                    <p>supply@theflexliving.com
                        0203 307 4477
                    </p>
                </div>
                <div>
                    <p>maintenance@theflexliving.com
                        0203 307 4477
                    </p>
                </div>
            </div>

        </div>
    </div>
     <!-- media query -->
     <div class="media_left_part_contact_text">
                <div class="Reservations">
                    <div>
                        <p><strong>Reservations:</strong></p>
                    </div>
                    <p class="last_text_contact">reservations@theflexliving.com
                        0203 307 4477
                     </p>
                </div>
                <div class="Reservations">
                    <div>
                        <p><strong>For Landlords:</strong></p>
                    </div>
                    <p class="last_text_contact">supply@theflexliving.com
                        0203 307 4477
                    </p>
                </div>
                <div class="Reservations">
                    <div>
                        <p ><strong>For Maintenance:</strong></p>
                    </div>
                    <p class="last_text_contact">maintenance@theflexliving.com
                        0203 307 4477
                    </p>
                </div>
            </div>
            <!-- media query -->
</section><br><br><br>
<style>
    #send.active{
        display: none;
    }
</style>

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

@include('footer')
