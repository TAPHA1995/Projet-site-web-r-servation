@include('header')
<section class="section section_article">

</section>
<div>
<section class="section1 section-blog" >
  <div class="card1section1" id="card1section1">
    <div class="werent"><p>We rent your property</p></div>
    <div class="werentlorem"><p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sapiente, totam?</p></div>
  </div>
</section>
<section class="section5 section5_article">
        <div class="Read_our_blog">
          <p><strong>Read our blog</strong></p>
        </div>
     <div class="swiperA-wrapperA">
      @foreach($ajouter_article_tapha_a_s as $affiche)
          <a href="view_article/{{$affiche->id}}">
            <div class="cardA">
                <div class="cardA_image">
                    <img src="images_article/{{$affiche->photo}}" alt="">
                </div><br>
                <div class="cardA_content">
                  <div class="ctn_text_cardA">
                      <div class="text1_cardA">
                        <p><strong>{{$affiche->titre}}</strong></p>
                        <p><strong>{{$affiche->nom}}</strong></p>
                      </div>
                      <div class="text2_cardA">
                      <p>{{ Illuminate\Support\Str::of($affiche->contenu)->words(5)}}</p><br>
                      </div>
                  </div><br>
                  <div class="footercardA">
                      <div class="icon_cardA">
                        <img src="image/eva_clock-fill.png" alt="">
                      </div>
                      <div class="text_icon_cardA">
                        <p>{{$affiche->created_at}}.</p>
                      </div>
                  </div>
              
              </div>
              <span class="footer_article">
                  @guest
                      @if (Route::has('login'))
                      @endif
                      @if (Route::has('register'))
                        
                      @endifù
                  @else
                      @if(Auth::user()->type_user == 'admin')
                      <a href="edition_article_blog/{{$affiche->id}}" class="btn btn-primary text-light">Editer</a>
                          <form action="article-supprimer/{{$affiche->id}}" method="post">
                                          {{csrf_field()}}
                                          {{method_field('DELETE')}}
                                <button type="submit" class="btn btn-danger">Supprimer </button>
                          </form>
                          @endif
                  @endguest   
              </span>
            </div>
          </a>
          @endforeach
        </div> 
    </section><br><br><br><br>
@include('footer')
<style>
  .section5_article{
    /* position:absolute; */
  }
     .footer_article{
        display:flex;
      justify-content:center;
      gap:10px;
    }
</style>