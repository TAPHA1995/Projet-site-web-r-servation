@include('header')
<br><br><br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Insription') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="prenom" class="col-md-4 col-form-label text-md-end">{{ __('Prenom') }}</label>

                            <div class="col-md-6">
                                <input id="prenom" type="text" class="form-control @error('prenom') is-invalid @enderror" name="prenom" value="{{ old('prenom') }}" required autocomplete="prenom" autofocus>

                                @error('prenom')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="nom" class="col-md-4 col-form-label text-md-end">{{ __('Nom') }}</label>

                            <div class="col-md-6">
                                <input id="nom" type="text" class="form-control @error('nom') is-invalid @enderror" name="nom" value="{{ old('nom') }}" required autocomplete="Nom" autofocus>

                                @error('nom')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="telephone" class="col-md-4 col-form-label text-md-end">{{ __('Téléphone') }}</label>

                            <div class="col-md-6">
                                <div style="display: flex; flex-direction:row; gap:10px;">
                                    <input   name="telephone" type="text" value="{{ old('telephone') }}" id="phone" placeholder="Phone number" style="width:220px" class="form-control @error('telephone')  is-invalid @enderror" required autocomplete="Telephone" autofocus>
                                    <span id="valid-msg" class="hide" style="color:green"></span>
                                    <span id="error-msg" class="hide" style="color:red"></span>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-3" >
                            <div class="col-md-6">
                                <input id="type_user" type="hidden" class="form-control @error('type_user') is-invalid @enderror" name="type_user" value="Client" required autocomplete="type_user" autofocus>

                                @error('type_user')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="Email" autofocus>

                                @error('Email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" id="send" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<br><br><br>


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
<style>
    .card{
        width:500px;
    }
    .container{
        margin-top:-100px;
    }


.card-header {
    background-color: white;
    padding: 0.5rem 1rem;
    margin-bottom: 0;
    border-bottom: 0px;
}

</style>
