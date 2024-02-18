
// Rotation of the togglers bars
  const navToggler = document.querySelector(".nav-toggler");
  navToggler.addEventListener("click", navToggle);
  function navToggle(){
    navToggler.classList.toggle("active");
   
  }
  // dropdown The menu in the media query
  let togglers = document.querySelector(".togglers");
                togglers.onclick = function(){    
                navBar2r = document.querySelector(".ullia");
                navBar2r.classList.toggle("activermenu")
                card = document.querySelector(".card1section1");
                card.classList.toggle("activecard")
              }; 
              
    
    // var input = document.querySelector("#phone");
    // window.intlTelInput(input, {
    //     utilsScript: "assets/build/js/utils.js"
    // });


  
    blog  = document.getElementById("blog");
    blog.onclick= function(){
    appear = document.querySelector(".ajout_article");
    appear.classList.toggle("activeblog");
    appear.transition ="0.10";
    };


