@include('header')
  <link rel="stylesheet" type="text/css" href="{{ asset('css/signin.css') }}">
  <title>Sign In </title>
</head>
<body>
  <!-- <div class="sign-in">
    <div class="title-sign-in">
      <div class="create-your-account">Create your account</div>
      <div class="sign-in2">
        <div class="or-sign-in-with">or sign in with</div>
        <div class="email">Email</div>
        <div class="gmail">Gmail</div>
        <div class="facebook">Facebook</div>
      </div>
    </div>
    <div class="inputs">
      <div class="input-first-name">
        <input type="text" aria-label="First name" class="form-control">
        
      </div>
      <div class="input-last-name">
        <div class="last-name">Last name</div>
      </div>
      <div class="input-email">
        <div class="email2">Email</div>
      </div>
      <div class="input-password">
        <div class="password">Password</div>
      </div>
    </div>
    <div class="_1">
      <div class="checkbox">
        <div class="rectangle-227"></div>
      </div>
      <div
        class="i-want-to-receive-updates-about-offers-news-city-launches-and-exclusive-deals"
      >
        I want to receive updates about offers, news, city launches, and exclusive
        deals
      </div>
    </div>
    <div class="button-create-account">
      <div class="create-account">Create account</div>
    </div>
    <div class="sign-in2">
      <div class="already-have-an-account">Already have an account?</div>
      <div class="log-in">Log in</div>
    </div>
    <div class="sign-in2">
      <div
        class="by-creating-an-account-you-agree-to-our-terms-of-service-and-privacy-policy"
      >
        <span
          ><span
            class="by-creating-an-account-you-agree-to-our-terms-of-service-and-privacy-policy-span"
            >By creating an account you agree to our<br /></span
          ><span
            class="by-creating-an-account-you-agree-to-our-terms-of-service-and-privacy-policy-span2"
            >Terms of Service</span
          ><span
            class="by-creating-an-account-you-agree-to-our-terms-of-service-and-privacy-policy-span3"
          >
            and </span
          ><span
            class="by-creating-an-account-you-agree-to-our-terms-of-service-and-privacy-policy-span4"
            >Privacy Policy</span
          ></span
        >
      </div>
    </div>
  </div> -->

  <div class="container sign-in">
    <div class="row title-sign-in">
          <h2 class="create-your-account">Create your account</h2>
        <div class="sign-in2">
            <p class="or-sign-in-with">or sign in with</p>
            <button type="button" class="btn btn-outline-dark gmail">Gmail</button>
            <button type="button" class="btn btn-outline-primary facebook">Facebook</button>
        </div>
    </div>

    <div class="row inputs" >
        <div class="col-md-6">
            <input type="text" class="input-first-name" id="inputFirstName" aria-label="First name" placeholder="First Name">
        </div>
        <div class="col-md-6">
            <!-- <label for="inputLastName" class="form-label">Last Name</label> -->
            <input type="text" class="input-last-name" id="inputLastName" placeholder="Last Name">
        </div>
        <div class="col-md-6">
            <!-- <label for="inputEmail" class="form-label">Email</label> -->
            <input type="email" class="input-email" id="inputEmail" aria-label="Email" placeholder="Email">
        </div>
        <div class="col-md-6">
            <!-- <label for="inputPassword" class="form-label">Password</label> -->
            <input type="password" class="input-password" id="inputPassword" aria-label="Password" placeholder="Password">
        </div>
    </div>
<!-- <p>I want to receive updates about offers, news, city launches, and exclusive deals</p> -->
                <!-- <label class="form-check-label">
                    I want to receive updates about offers, news, city launches, and exclusive deals
                </label> -->

    <!-- <div class="row _1">
            <div class="form-check checkbox">
                <input class="form-check-input" type="checkbox" id="receiveUpdates">
                <div class="i-want-to-receive-updates-about-offers-news-city-launches-and-exclusive-deals">
                  I want to receive updates about offers, news, city launches, and exclusive
                  deals
                </div>                   
            </div>
    </div> -->
    <div class="row next">
      <input class="form-check-input" type="checkbox" id="receiveUpdates">
                <div class="i-want-to-receive-updates-about-offers-news-city-launches-and-exclusive-deals">
                  I want to receive updates about offers, news, city launches, and exclusive
                  deals
                </div> 
    </div>
                

    <button type="button" class="btn btn-primary button-create-account">Create account</button>

    <div class="row sign-in2">
      <p class="already-have-an-account">Already have an account?</p>
      <a href="#" class="log-in">Log in</a>
    </div>

    <div class="row sign-in2">
      
            <p class="by-creating-an-account-you-agree-to-our-terms-of-service-and-privacy-policy">
                By creating an account you agree to our
                <span class="by-creating-an-account-you-agree-to-our-terms-of-service-and-privacy-policy-span">
                    <a href="#" class="by-creating-an-account-you-agree-to-our-terms-of-service-and-privacy-policy-span2">Terms of Service</a>
                    and
                    <a href="#" class="by-creating-an-account-you-agree-to-our-terms-of-service-and-privacy-policy-span4">Privacy Policy</a>
                </span>
            </p>
    </div>
</div>
<br><br><br><br><br><br>
@include('footer')