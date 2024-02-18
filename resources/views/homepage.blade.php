@include('header');
  
<section class="section">

</section>
<div>
<section class="section1" >
  <div class="card1section1" id="card1section1">
    <div class="werent"><p>We rent your property</p></div>
    <div class="werentlorem"><p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sapiente, totam?</p></div>
  </div>
</section>
</div>
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
    </form>
<section class="section2">
<div class="card2">
    <div class="imagecard2">
      <img src="image/Imagessection2.png" alt="">
    </div>
    <div class="textcard2">
        <div class="text1card2">
            <p><strong>The future is flexible</strong></p>
        </div>
        <div class="text2card1">
            <p>We believe in a world where finding a home is just a click away. 
              Whether you’re selling your home, travelling for work or moving to 
              a new city.  Just bring your bags, and we’ll handle the rest.
            </p>
        </div>
    </div>
</div>
</section><br><br><br>
<div class="section3">
<div class="main-container">
   <div class="conttextsection3">
     <div class="text1section3">
         <p><strong>Id aliquam molestie nunc quis turpis imperdiet quis</strong></p>
      </div>
      <div class="text2section3">
          <p>Euismod condimentum tempus quis nibh. Accumsan imperdiet  non vulputate venenatis, lorem amet, purus amet,    sagittis. Cum orci quam enim adipiscing interdum purus.
          </p>
     </div>
  </div>
  <br><br>
  <div class="containercardsection3">
    <div class="card1section3">
      <div class="card1section3-items">
          <div class="card1section3icon">
            <img src="image/Vector.png" alt="">
          </div><br>
          <div class="text1card1section3">
            <p>Flexible living</p>
          </div>
          <div class="text1card1section3">
            <p>Stay as Long or as little as you need with month-to-
                month contracts
            </p>
          </div>
      </div>
    </div>
    <div class="card1section3">
      <div class="card1section3-items">
          <div class="card1section3icon">
            <img src="image/Vector (1).png" alt="">
          </div><br>
          <div class="text1card1section3">
            <p>Move-in ready</p>
          </div>
          <div class="text1card1section3">
            <p>Ready to move in with everything you need
            </p>
         </div>
     </div>
    </div>
    <div class="card1section3">
      <div class="card1section3-items">
          <div class="card1section3icon">
            <img src="image/eva_wifi-fill.png" alt="">
          </div><br>
          <div class="text1card1section3">
            <p>High-speed Wi-Fi</p>
          </div>
          <div class="text1card1section3">
            <p>Best in class internet speeds suitable for working 
                 from home
            </p>
         </div>
     </div>
    </div>
    <div class="card1section3">
      <div class="card1section3-items">
          <div class="card1section3icon">
            <img src="image/Vector (2).png" alt="">
          </div><br>
          <div class="text1card1section3">
            <p>24/7 support</p>
          </div>
          <div class="text1card1section3">
            <p>On hand team for any issues you have
            </p>
         </div>
     </div>
    </div>
    
  </div>
</div>
</div>
 <br><br><br><br>
<div class="part3-section2">
   <div class="containerpart3-section2">
        <div class="text1part3-section2">
          <p><strong>Choose your location</strong></p>
        </div> <br><br>
        <div class="textimage-part3-section2">
            <div class="cardimage-part3-section2">
                <div class="text2part3-section2">
                </div>
                <div class="cardimage1-part3-section2">
                    <img src="image/Frame 7.png" alt="">
                </div> 
            </div>
            <div class="cardimage-part3-section2">
                <div class="text2part3-section2">
                    <p><strong>City of London</strong></p>
                </div>
                <div class="cardimage1-part3-section2">
                    <img src="image/unsplash_YxlZv4sG4Eg.png" alt="">
                </div>  
            </div>
            <div class="cardimage-part3-section2">
                <div class="text2part3-section2">
                </div>
                <div class="cardimage1-part3-section2">
                    <img src="image/Frame 9.png" alt="">
                </div>  
            </div>
            <div class="cardimage-part3-section2">
                <div class="text2part3-section2">
                    <p><strong>Kensington</strong></p>
                </div>
                <div class="cardimage1-part3-section2">
                    <img src="image/unsplash_u3gTIoJLmpg.png" alt="">
                </div>  
            </div>
            <div class="cardimage-part3-section2">
                <div class="text2part3-section2">
                    <p><strong>Kingston-Upon-Thames</strong></p>
                </div>
                <div class="cardimage1-part3-section2">
                    <img src="image/unsplash_19szVauJ7KA.png" alt="">
                </div>  
            </div>
            <div class="cardimage-part3-section2">
                <div class="text2part3-section2">
                    <p><strong>Hammersmith</strong></p>
                </div>
                <div class="cardimage1-part3-section2">
                    <img src="image/unsplash_YxlZv4sG4Eg.png" alt="">
                </div>  
            </div>
            
        </div>
        <br><br>
        <div>
             <a class="btn btn-success rounded-pill">View all spaces</a>
        </div>
   </div> 
</div><br><br><br><br>
<section class="section3A">
    <div class="main-container-section3A">
        <div class="bgimg_section3A">
            <div class="text_btn_section3A">
                <div class="text1_bgimg_section3A">
                  <p><strong>Bespoke spaces</strong></p>
                </div>
                <div class="text2_bgimg_section3A">
                  <p>Expertly designed to create extraordinary spaces with the <br> flexible renter in mind</p>
                </div>
                <div class="btn_bgimg_section3A">
                  <a href="booking" class="btn btn-success rounded-pill btn_section3A">Start Booking</a>
                </div>
            </div>
        </div>
        <br><br><br><br>
         <div class="container_partcard_section3A">
              <div class="container_textpart_section3A">
                  <div class="text1_section3A">
                    <p><strong> Corporate Partnerships</strong></p>
                  </div>
                  <div class="text2_section3A">
                    <p>We work with 100+  companies to meet accommodation needs in London. Offer a dedicated booking <br>manager that can help to find properties for your needs.
                    </p>
                  </div>
              </div>
              <br><br>
              <div class="container_card_section3A">
                  <div class="card_section3A">
                        <div class="containerimg_card_section3A">
                            <img src="image/Vector (3).png" alt="">
                        </div><br>
                        <div class="text1_card_section3A">
                            <p><strong> Booking manager</strong></p>
                        </div>
                        <div class="text2_card_section3A">
                          <p>We do the searching for you</p>
                      </div>
                  </div>
                  <div class="card_section3A">
                        <div class="containerimg_card_section3A">
                            <img src="image/eva_person-fill.png" alt="">
                        </div><br>
                        <div class="text1_card_section3A">
                            <p><strong>Account managerr</strong></p>
                        </div>
                        <div class="text2_card_section3A">
                          <p>Preferred partner rates</p>
                      </div>
                  </div>
                  <div class="card_section3A">
                        <div class="containerimg_card_section3A">
                            <img src="image/eva_wifi-fill.png" alt="">
                        </div><br>
                        <div class="text1_card_section3A">
                            <p><strong>Flexible terms</strong></p>
                        </div>
                        <div class="text2_card_section3A">
                          <p>Extend on short notice</p>
                      </div>
                  </div>
                </div>
           </div>
       </div>
   </section>
   <br><br><br>
  <div class="texttitle">
    <div class="containertitle_text1">
         <p><strong>What our partners think</strong></p>
    </div>
    <div class="containertitle_text2">
        <p>See what our partners say about us</p>
    </div>
  </div>

   <section class="container">
         <div class="card__container swiper">
            <div class="card__content">
               <div class="swiper-wrapper">
                  <article class="card__article swiper-slide">
                     <div class="card__data">
                        <div class="container_imgslider_sectionslider">
                           <div class="imgslider_sectionslider">
                              <img src="assets/img/Ellipse 7.png" alt="">
                           </div>
                           <div class="ctner_text_imgslider_sectionslider">
                                 <div class="text1_imgslider_sectionslidert">
                                    <p>Annie</p>
                                 </div>
                                 <div class="text2_imgslider_sectionslidert">
                                    <p>Landlord in SE1</p>
                                 </div>
                            </div>
                         </div>
                        <p class="card__description">
                           Nascetur urna, fusce consectetur massa nulla viverra aenean semper. Dignissim nibh sed condimentum eget ac suspendisse eget amet integer. Mattis etiam sagittis fermentum fames habitasse. Vulputate volutpat sit est, elementum. Accumsan nunc nunc arcu faucibus aliquam.
                        </p>
                      </div>
                  </article>
      
                  <article class="card__article swiper-slide">
                     <div class="card__data">
                        <div class="container_imgslider_sectionslider">
                           <div class="imgslider_sectionslider">
                              <img src="assets/img/Ellipse 7 (3).png" alt="">
                           </div>
                           <div class="ctner_text_imgslider_sectionslider">
                                 <div class="text1_imgslider_sectionslidert">
                                    <p>Gabriel</p>
                                 </div>
                                 <div class="text2_imgslider_sectionslidert">
                                    <p>Landlord in SE1</p>
                                 </div>
                            </div>
                         </div>
                        <p class="card__description">
                           Nascetur urna, fusce consectetur massa nulla viverra aenean semper. Dignissim nibh sed condimentum eget ac suspendisse eget amet integer. Mattis etiam sagittis fermentum fames habitasse. Vulputate volutpat sit est, elementum. Accumsan nunc nunc arcu faucibus aliquam.
                        </p>
                    </div>
                  </article>
                  <article class="card__article swiper-slide">
                     <div class="card__data">
                        <div class="container_imgslider_sectionslider">
                           <div class="imgslider_sectionslider">
                              <img src="assets/img/Ellipse 7.png" alt="">
                           </div>
                           <div class="ctner_text_imgslider_sectionslider">
                                 <div class="text1_imgslider_sectionslidert">
                                    <p>Annie</p>
                                 </div>
                                 <div class="text2_imgslider_sectionslidert">
                                    <p>Landlord in SE1</p>
                                 </div>
                            </div>
                         </div>
                            <p class="card__description">
                              Nascetur urna, fusce consectetur massa nulla viverra aenean semper. Dignissim nibh sed condimentum eget ac suspendisse eget amet integer. Mattis etiam sagittis fermentum fames habitasse. Vulputate volutpat sit est, elementum. Accumsan nunc nunc arcu faucibus aliquam.
                            </p>
                    </div>
                  </article>

                  <article class="card__article swiper-slide">
                     <div class="card__data">
                        <div class="container_imgslider_sectionslider">
                           <div class="imgslider_sectionslider">
                              <img src="assets/img/Ellipse 7.png" alt="">
                           </div>
                           <div class="ctner_text_imgslider_sectionslider">
                                 <div class="text1_imgslider_sectionslidert">
                                    <p>Annie</p>
                                 </div>
                                 <div class="text2_imgslider_sectionslidert">
                                    <p>Landlord in SE1</p>
                                 </div>
                            </div>
                         </div>
                        <p class="card__description">
                           Nascetur urna, fusce consectetur massa nulla viverra aenean semper. Dignissim nibh sed condimentum eget ac suspendisse eget amet integer. Mattis etiam sagittis fermentum fames habitasse. Vulputate volutpat sit est, elementum. Accumsan nunc nunc arcu faucibus aliquam.
                        </p>
                           </div>
                  </article>
               </div>
            </div>
            <br><br><br><br>
            <div class="btnslider">
               <img src="assets/img/Right (1).png" alt="" class="swiper-button-next">
               <img src="assets/img/Left.png" alt="" class="swiper-button-prev">
            </div>
            <!-- Pagination -->
            <div class="swiper-pagination"></div>
         </div>
      </section>
      <section class="section5">
        <div class="Read_our_blog">
          <p><strong>Read our blog</strong></p>
        </div>
     <div class="swiperA-wrapperA">
          <div class="cardA ">
              <div class="cardA_image">
                  <img src="image/unsplash_MP0bgaS_d1c.png" alt="">
              </div><br>
              <div class="cardA_content">
                <div class="ctn_text_cardA">
                    <div class="text1_cardA">
                      <p><strong>Turpis elit in dictum eget eget</strong></p>
                    </div>
                    <div class="text2_cardA">
                      <p>Lorem ipsum dolor sit amet.</p>
                    </div>
                </div><br>
                <div class="footercardA">
                    <div class="icon_cardA">
                      <img src="image/eva_clock-fill.png" alt="">
                    </div>
                    <div class="text_icon_cardA">
                      <p>1 min read.</p>
                    </div>
                </div>
            </div>
          </div>

          <div class="cardA ">
              <div class="cardA_image">
                  <img src="image/unsplash_MP0bgaS_d1c.png" alt="">
              </div><br>
              <div class="cardA_content">
                <div class="ctn_text_cardA">
                    <div class="text1_cardA">
                      <p><strong>Turpis elit in dictum eget eget</strong></p>
                    </div>
                    <div class="text2_cardA">
                      <p>Lorem ipsum dolor sit amet.</p>
                    </div>
                </div><br>
                <div class="footercardA">
                    <div class="icon_cardA">
                      <img src="image/eva_clock-fill.png" alt="">
                    </div>
                    <div class="text_icon_cardA">
                      <p>1 min read.</p>
                    </div>
                </div>
            </div>
          </div>

          <div class="cardA ">
              <div class="cardA_image">
                  <img src="image/unsplash_GnvurwJsKaY.png" alt="">
              </div><br>
              <div class="cardA_content">
                <div class="ctn_text_cardA">
                    <div class="text1_cardA">
                      <p><strong>Turpis elit in dictum eget eget</strong></p>
                    </div>
                    <div class="text2_cardA">
                      <p>Lorem ipsum dolor sit amet.</p>
                    </div>
                </div><br>
                <div class="footercardA">
                    <div class="icon_cardA">
                      <img src="image/eva_clock-fill.png" alt="">
                    </div>
                    <div class="text_icon_cardA">
                      <p>1 min read.</p>
                    </div>
                </div>
            </div>
          </div>

          <div class="cardA ">
              <div class="cardA_image">
                  <img src="image/unsplash_sZYUKEWsDLA.png" alt="">
              </div><br>
              <div class="cardA_content">
                <div class="ctn_text_cardA">
                    <div class="text1_cardA">
                      <p><strong>Turpis elit in dictum eget eget</strong></p>
                    </div>
                    <div class="text2_cardA">
                      <p>Lorem ipsum dolor sit amet.</p>
                    </div>
                </div><br>
                <div class="footercardA">
                    <div class="icon_cardA">
                      <img src="image/eva_clock-fill.png" alt="">
                    </div>
                    <div class="text_icon_cardA">
                      <p>1 min read.</p>
                    </div>
                </div>
            </div>
          </div> 
      </div>
     <div class="Read_more">
      <a class="btn btn-success rounded-pill">Read more</a>
     </div>
    </section><br><br><br><br>
    <section class="section6">
     <div class="maincontainer">
        <div class="title_section6">
          <p><strong>Useful links</strong></p>
        </div><br><br>
          <div class="container_section6">
              <div class="linkcontainer_section6">
                  <div class="link_items">
                    <a href="" class="linksection6 text-seconday text-decoration-none"><p>West London Apartments <span class="ARROWBasic "><i class="fa fa-arrow-right"></i></span></p></a>
                  </div>
                    <div class="link_items">
                        <a href="" class="linksection6 text-seconday text-decoration-none"><p>Riverside Apartments<span class="ARROWBasic "><i class="fa fa-arrow-right"></i></span></p></a>
                    </div>
                    <div class="link_items">
                        <a href="" class="linksection6 text-seconday text-decoration-none"><p>Apartments in Finance Sector City of London<span class="ARROWBasic "><i class="fa fa-arrow-right"></i></span></p></a>
                    </div>
                    <div class="link_items">
                        <a href="" class="linksection6 text-seconday text-decoration-none"><p>Apartments in Soho, Fitrovia<span class="ARROWBasic "><i class="fa fa-arrow-right"></i></span></p></a>
                    </div>
                    <div class="link_items">
                      <a href="" class="linksection6 text-seconday text-decoration-none"><p>East London Aaprtments<span class="ARROWBasic "><i class="fa fa-arrow-right"></i></span></p></a>
                  </div>
              </div>

              <div class="linkcontainer_section6">
                  <div class="link_items">
                    <a href="" class="linksection6 text-seconday text-decoration-none"><p>Suitable for Families or Groups<span class="ARROWBasic "><i class="fa fa-arrow-right"></i></span></p></a>
                  </div>
                  <div class="link_items">
                      <a href="" class="linksection6 text-seconday text-decoration-none"><p>Apartments with Parking<span class="ARROWBasic "><i class="fa fa-arrow-right"></i></span></p></a>
                  </div>
                  <div class="link_items">
                      <a href="" class="linksection6 text-seconday text-decoration-none"><p>Apartments with Elevator<span class="ARROWBasic "><i class="fa fa-arrow-right"></i></span></p></a>
                  </div>
                  <div class="link_items">
                      <a href="" class="linksection6 text-seconday text-decoration-none"><p>Apartments suitable for physical disabilities<span class="ARROWBasic "><i class="fa fa-arrow-right"></i></span></p></a>
                  </div>
              </div>
            </div>
      </div>
    </section><br><br><br>
    <section class="section7">
          <div class="maincontainer_section7">
              <div class="textctn_section6">
                  <div class="text1_section7">
                    <p><strong>Dictum nunc</strong></p>
                  </div>
                  <div class="text2_section7">
                    <p>Vel mattis integer pulvinar morbi quis amet eu. In nunc facilisis proin fermentum, consectetur cursus.</p>
                  </div>
              </div>
              <div class="selectcnt_section7">
                <select name="" id="" class="selectopt_section7">
                  <option value="">Choose city</option>
                  <option value="">Dakar</option>
                  <option value="">Dakar</option>
                  <option value="">Dakar</option>
                  <option value="">Dakar</option>
                </select>
              </div>
          </div>
    </section>
    <br><br><br><br><br><br>
    <!-- Footer -->
    @include('footer');    
</html>
<style>
 
</style>
