@extends('frontend/master')
@section('title', 'Bene-exclusive')
@section('header')

@endsection














@section('footer')
<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <div id="index-part1-carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
    <button type="button" data-bs-target="#carouselEcampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
    </div>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <div class="index-part1-carousel-inner">

        <div class="carousel-part1-backgound">
          <img src="{{asset('front/images/5.jpg') }}" class="d-block w-100" alt="...">
        </div>

        <div class="carousel-part1-shader">
          <img src="{{asset('front/images/index-part1-backround.png') }}" alt="">
        </div>
      
        <div class="index-slogan">
           <div class="who-we-are"><p>@lang('front.carousel-fleet')</p></div>
          <div class="slogan-button">
          <button>
            <a href="{{route('frontend.fleet')}}">
            <p>@lang('front.show-more')</p>
            <img src="{{asset('front/images/arrow-right.png') }}" alt="">
            </a>
          </button>
        </div>

      </div>
    </div>
  </div>

    

    <div class="carousel-item">
    <div class="index-part1-carousel-inner">

        <div class="carousel-part1-backgound">
      <img src="{{asset('front/images/1.jpg') }}" class="d-block w-100" alt="...">
        </div>

        <div class="carousel-part1-shader">
      <img src="{{asset('front/images/index-part1-backround.png') }}" alt="">
      </div>
      
      <div class="index-slogan">
         <div class="who-we-are"><p>@lang('front.carousel-academy')</p></div>
        <div class="slogan-button">
          <button>
            <a href="{{route('frontend.academy')}}">
            <p>@lang('front.show-more')</p>
            <img src="{{asset('front/images/arrow-right.png') }}" alt="">
            </a>
        </button>
       </div>

      </div>
      </div>
    </div>

    <div class="carousel-item">
    <div class="index-part1-carousel-inner">

        <div class="carousel-part1-backgound">
      <img src="{{asset('front/images/2.jpg') }}" class="d-block w-100" alt="...">
        </div>

        <div class="carousel-part1-shader">
      <img src="{{asset('front/images/index-part1-backround.png') }}" alt="">
      </div>
      
      <div class="index-slogan">
         <div class="who-we-are"><p>@lang('front.carousel-events')</p></div>
        <div class="slogan-button">
          <button>
            <a href="{{route('frontend.events')}}">
            <p>@lang('front.show-more')</p>
            <img src="{{asset('front/images/arrow-right.png') }}" alt="">
            </a>
        </button>
       </div>

      </div>
      </div>

      


    </div>

    <div class="carousel-item">
      <div class="index-part1-carousel-inner">
        
      <div class="carousel-part1-backgound">
        <img src="{{asset('front/images/4.jpg') }}" class="d-block w-100"alt="">
      </div>

      <div class="carousel-part1-shader">
        <img src="{{asset('front/images/index-part1-backround.png') }}" alt="">
      </div>
      
      <div class="index-slogan">
         <div class="who-we-are"><p>@lang('front.bene-motors')</p></div>
        <div class="slogan-button">
          <button>
            <a href="{{route('frontend.motors')}}">
            <p>@lang('front.show-more')</p>
            <img src="{{asset('front/images/arrow-right.png') }}" alt="">
            </a>
        </button>
       </div>

      </div>

      </div>
    </div>

  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon d-none" aria-hidden="true"></span>
    <span  class="carousel-arrow-icon"><img src="{{asset('front/images/carousel-right.png') }}" alt=""></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon d-none" aria-hidden="true"></span>
    <span class="carousel-arrow-icon"><img src="{{asset('front/images/carousel-left.png') }}" alt=""></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

<div class="index-part-1">
  <div class="part-1-middle">
    <div class="part-1-inner">
        <div class="index-about-us-info">
          <div class="index-about-us-header">

          </div>

          <div class="index-about-us-title">
            <p>@lang('front.index-about')</p>
          </div>

          <div class="index-about-us-text">
             <p>
               @lang('front.index-about-text')
              </p>
          </div>

          <div class="index-about-us-button">
              <button>
              <a href="{{route('frontend.about')}}">
              <p>@lang('front.show-more')</p>
              <img src="{{asset('front/images/arrow-right.png') }}" alt="">
              </a>
              </button>
          </div>
          
        </div>

        <div class="about-us-video">
          <embed src="https://www.youtube.com/embed/W7vWuPWh4-Y?autoplay=1&mute=1" frameborder="0"></embed>
        </div>
    </div>
  </div>
</div>


<div class="index-part-2">
  <div class="index-part-2-middle">
    <div class="index-part-2-inner">
      <div class="index-news-header">
        <div class="index-news-header-title">
          <p>@lang('front.newsroom')</p>
        </div>

        <div class="see-all-button">
          <button>
            <a href="{{route('frontend.news')}}">
            <p>@lang('front.show-more')</p>
            <img src="{{asset('front/images/blue-short-arrow.png') }}" alt="">
            </a>
          </button>
        </div>


      </div>

      
      <div class="index-news-body">
          <div class="index-news-article">
            <div class="index-news-image">
              <img src="{{asset('front/images/news-1.png') }}" alt="">
            </div>

            <div class="index-news-text">
              <div class="news-date">
              <p>February 4, 2022</p>
              </div>

              <h6>BENE EXCLUSIVE ფარიკაობის მსოფლიო ჩემპიონატის...</h6>

              <p>2022 წლის პირველი მასშტაბური საერთაშორისო ტურნირი ფარიკაობაში საქართველოში ტარდება. მსოფლიო თასის გათამაშება თბილისის ოლიმპიურ სასახლეში 14-17 იანვარს გაიმართება...</p>


              <div class="index-read-more">
                <h5>Read more</h5>
                <img src="{{asset('front/images/news-arrow.png') }}" alt="">
              </div>
            </div>
          </div>


          <div class="index-news-article">
            <div class="index-news-image">
              <img src="{{asset('front/images/news-2.png') }}" alt="">
            </div>

            <div class="index-news-text">
              <div class="news-date">
              <p>February 4, 2022</p>
              </div>

              <h6>BENE EXCLUSIVE ფარიკაობის მსოფლიო ჩემპიონატის...</h6>

              <p>2022 წლის პირველი მასშტაბური საერთაშორისო ტურნირი ფარიკაობაში საქართველოში ტარდება. მსოფლიო თასის გათამაშება თბილისის ოლიმპიურ სასახლეში 14-17 იანვარს გაიმართება...</p>


              <div class="index-read-more">
                <h5>Read more</h5>
                <img src="{{asset('front/images/news-arrow.png') }}" alt="">
              </div>
            </div>
          </div>



          <div class="index-news-article">
            <div class="index-news-image">
              <img src="{{asset('front/images/news-3.png') }}" alt="">
            </div>

            <div class="index-news-text">
              <div class="news-date">
              <p>February 4, 2022</p>
              </div>

              <h6>BENE EXCLUSIVE ფარიკაობის მსოფლიო ჩემპიონატის...</h6>

              <p>2022 წლის პირველი მასშტაბური საერთაშორისო ტურნირი ფარიკაობაში საქართველოში ტარდება. მსოფლიო თასის გათამაშება თბილისის ოლიმპიურ სასახლეში 14-17 იანვარს გაიმართება...</p>


              <div class="index-read-more">
                <h5>Read more</h5>
                <img src="{{asset('front/images/news-arrow.png') }}" alt="">
              </div>
            </div>
          </div>



          <div class="index-news-article">
            <div class="index-news-image">
              <img src="{{asset('front/images/news-4.png') }}" alt="">
            </div>

            <div class="index-news-text">
              <div class="news-date">
              <p>February 4, 2022</p>
              </div>

              <h6>BENE EXCLUSIVE ფარიკაობის მსოფლიო ჩემპიონატის...</h6>

              <p>2022 წლის პირველი მასშტაბური საერთაშორისო ტურნირი ფარიკაობაში საქართველოში ტარდება. მსოფლიო თასის გათამაშება თბილისის ოლიმპიურ სასახლეში 14-17 იანვარს გაიმართება...</p>


              <div class="index-read-more">
                <h5>Read more</h5>
                <img src="{{asset('front/images/news-arrow.png') }}" alt="">
              </div>
            </div>
          </div>



      </div>
    </div>
  </div>
</div>




<!-- <div class="index-part-3">
  <div class="index-part-3-middle">
    <div class="index-part-3-inner">


            <div class="index-autopark-header">
            <div class="index-autopark-title">
          <p>AUTOPARK</p>
        </div>

        <div class="see-autopark-all-button">
          <button>
            <p>@lang('front.show-more')</p>
            <img src="{{asset('front/images/blue-short-arrow.png') }}" alt="">
          </button>
        </div>
            </div>



            <div id="carouselExampleIndicators2" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <div id="index-autopark-carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators2" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators2" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators2" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
  </div>
  <div class="carousel-inner">
   <div class="index-autopark-carousel-inner">

        <div class="carousel-item active">
        <div class="index-autopark-carousel-item">
          
        <div class="index-autopark-item-mercedez">
         <img src="{{asset('front/images/autopark-merc.png') }}" class="d-block w-100" alt="...">
         <ul>
           <li><h6>MERCEDES-BENZ</h6></li>
           <li><p>S-class</p></li>
         </ul>
         </div>

            <div class="index-autopark-item-toyota">
         <img src="{{asset('front/images/autopark-land.png') }}" class="d-block w-100" alt="..."> 
         <ul>
           <li><h6>TOYOTA</h6></li>
           <li><p>Land Cuiser</p></li>
         </ul>
         </div>

         <div class="index-autopark-item-toyotaS">
         <img src="{{asset('front/images/autopark-toyota.png') }}" class="d-block w-100" alt="...">
         <ul>
           <li><h6>TOYOTA</h6></li>
           <li><p>Camry</p></li>
         </ul>
         </div>

       </div>
        </div>

        <div class="carousel-item">
        <div class="index-autopark-carousel-item">

        <div class="index-autopark-item-mercedez">
         <img src="{{asset('front/images/autopark-merc.png') }}" class="d-block w-100" alt="...">
         <ul>
           <li><h6>MERCEDES-BENZ</h6></li>
           <li><p>S-class</p></li>
         </ul>
         </div>

         <div class="index-autopark-item-toyota">
         <img src="{{asset('front/images/autopark-land.png') }}" class="d-block w-100" alt="..."> 
         <ul>
           <li><h6>TOYOTA</h6></li>
           <li><p>Land Cruiser</p></li>
         </ul>
         </div>

         <div class="index-autopark-item-toyotaS">
         <img src="{{asset('front/images/autopark-toyota.png') }}" class="d-block w-100" alt="...">
         <ul>
           <li><h6>TOYOTA</h6></li>
           <li><p>Camry</p></li>
         </ul>
         </div>
       </div>
        </div>

        <div class="carousel-item"> 
          <div class="index-autopark-carousel-item">

          <div class="index-autopark-item-mercedez">
         <img src="{{asset('front/images/autopark-merc.png') }}" class="d-block w-100" alt="...">
         <ul>
           <li><h6>MERCEDES-BENZ</h6></li>
           <li><p>S-class</p></li>
         </ul>
         </div>

         <div class="index-autopark-item-toyota">
         <img src="{{asset('front/images/autopark-land.png') }}" class="d-block w-100" alt="..."> 
         <ul>
           <li><h6>TOYOTA</h6></li>
           <li><p>Land Cruiser</p></li>
         </ul>
         </div>

         <div class="index-autopark-item-toyotaS">
         <img src="{{asset('front/images/autopark-toyota.png') }}" class="d-block w-100" alt="...">
         <ul>
           <li><h6>TOYOTA</h6></li>
           <li><p>Camry</p></li>
         </ul>
         </div>
       </div>
       </div>

   </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators2" data-bs-slide="prev">
    <span class="carousel-control-prev-icon d-none" aria-hidden="true"></span>
    <span  class="carousel-arrow-icon"><img src="{{asset('front/images/carousel-right.png') }}" alt=""></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators2" data-bs-slide="next">
    <span class="carousel-control-next-icon d-none" aria-hidden="true"></span>
    <span class="carousel-arrow-icon"><img src="{{asset('front/images/carousel-left.png') }}" alt=""></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
            
    </div>
  </div>
</div> -->






<!-- <div class="index-part-4">
  <div class="index-part-4-middle">
    <div class="index-part-4-inner">


            <div class="index-rent-header">
            <div class="index-rent-title">
          <p>CAR RENT</p>
        </div>

        <div class="see-all-button-rent">
          <button>
            <p>@lang('front.show-more')</p>
            <i class="fas fa-arrow-right"></i>
          </button>
        </div>
            </div>



            <div id="carouselExampleIndicators3" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <div id="index-rent-carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators3" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators3" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators3" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
  </div>
  <div class="carousel-inner">
   <div class="index-rent-carousel-inner">

        <div class="carousel-item active">
        <div class="index-rent-carousel-item">
          
        <div class="index-rent-item-mercedez">
         <img src="{{asset('front/images/rent1.png') }}" class="d-block w-100" alt="...">
         <ul>
           <li><h6>HYUNDAI</h6></li>
           <li><p>Corola Automatic</p></li>
         </ul>
         </div>

         <div class="index-rent-item-mercedez">
         <img src="{{asset('front/images/rent2.png') }}" class="d-block w-100" alt="...">
         <ul>
           <li><h6>KIA</h6></li>
           <li><p>Sportage Automatic</p></li>
         </ul>
         </div>

         <div class="index-rent-item-mercedez">
         <img src="{{asset('front/images/rent3.png') }}" class="d-block w-100" alt="...">
         <ul>
           <li><h6>TOYOTA</h6></li>
           <li><p>Santa Fe Automatic</p></li>
         </ul>
         </div>

       </div>
        </div>

        <div class="carousel-item">
        <div class="index-rent-carousel-item">
        <div class="index-rent-item-mercedez">
         <img src="{{asset('front/images/rent1.png') }}" class="d-block w-100" alt="...">
         <ul>
           <li><h6>HYUNDAI</h6></li>
           <li><p>Corola Automatic</p></li>
         </ul>
         </div>

         <div class="index-rent-item-mercedez">
         <img src="{{asset('front/images/rent2.png') }}" class="d-block w-100" alt="...">
         <ul>
           <li><h6>KIA</h6></li>
           <li><p>Sportage Automatic</p></li>
         </ul>
         </div>  

         <div class="index-rent-item-mercedez">
         <img src="{{asset('front/images/rent3.png') }}" class="d-block w-100" alt="...">
         <ul>
           <li><h6>TOYOTA</h6></li>
           <li><p>Santa Fe Automatic</p></li>
         </ul>
         </div>

       </div>
        </div>

        <div class="carousel-item"> 
          <div class="index-rent-carousel-item">
         <div class="index-rent-item-mercedez">
         <img src="{{asset('front/images/rent1.png') }}" class="d-block w-100" alt="...">
         <ul>
           <li><h6>HYUNDAI</h6></li>
           <li><p>Corola Automatic</p></li>
         </ul>
         </div>

         <div class="index-rent-item-toyota">
         <img src="{{asset('front/images/rent2.png') }}" class="d-block w-100" alt="...">
         <ul>
           <li><h6>KIA</h6></li>
           <li><p>Sportage Automatic</p></li>
         </ul>
         </div>   

         <div class="index-rent-item-mercedez">
         <img src="{{asset('front/images/rent3.png') }}" class="d-block w-100" alt="...">
         <ul>
           <li><h6>TOYOTA</h6></li>
           <li><p>Santa Fe Automatic</p></li>
         </ul>
         </div>

       </div>
       </div>

   </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators3" data-bs-slide="prev">
    <span class="carousel-control-prev-icon d-none" aria-hidden="true"></span>
    <span  class="carousel-arrow-icon"><img src="{{asset('front/images/carousel-right.png') }}" alt=""></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators3" data-bs-slide="next">
    <span class="carousel-control-next-icon d-none" aria-hidden="true"></span>
    <span class="carousel-arrow-icon"><img src="{{asset('front/images/carousel-left.png') }}" alt=""></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
            
    </div>
  </div>
</div> -->




<div class="index-part-5">
  <div class="part-5-middle">
    <div class="part-5-inner">
      <div class="index-academy-info">
      
          <div class="academy-image-outer">
            <div class="academy-image">
              <div class="academy-background-image">
              <img src="{{asset('front/images/academy-background.png') }}" alt="">
              </div>

              <div class="academy-logo-image">
              <img src="{{asset('front/images/academy-logo.png') }}" alt="">
              </div>

            </div>
          </div>

              <div class="home-academy-text">

                <div class="index-academy-title">
                  <p>@lang('front.index-academy')</p>
                </div>

                <div class="index-academy-text">
                  <p> @lang('front.academy-part-1')</p>
                </div>

                <div class="index-academy-button">
                    <button>
                      <a href="{{route('frontend.academy')}}">
                      <p>@lang('front.show-more')</p>
                        <img src="{{asset('front/images/arrow-right.png') }}" alt=""> 
                      </a>
                    </button>
                </div>
              </div>
        </div>

       
    </div>
  </div>
</div>




<div class="index-part-6">
  <div class="part-6-middle">
    <div class="part-6-inner">
        <div class="index-taxi-info">
          

          <div class="index-taxi-title">
            <p>@lang('front.front-taxi')</p>
          </div>

          <div class="index-taxi-text">
            <p> @lang('front.index-taxi-text')</p>
          </div>

          <div class="index-taxi-button">
              <button>
                <p>@lang('front.show-more')</p>
                <i class="fas fa-arrow-right"></i>
              </button>
          </div>
          
        </div>

        <div class="index-taxi-image">
          <img src="{{asset('front/images/taxi/taxi.png') }}" alt="">
        </div>
    </div>
  </div>
</div>



<div class="index-part-7">
  <div class="part-7-middle">
    <div class="part-7-inner">
        <div class="index-event-header"><p>@lang('front.index-events')</p></div>

      <!-- <div id="carouselExampleIndicators4" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <div id="index-event-carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleIndicators4" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators4" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators4" data-bs-slide-to="2" aria-label="Slide 3"></button>
          </div>
        </div>
        <div class="carousel-inner">
        <div class="index-event-carousel-inner">

              <div class="carousel-item active">
              <div class="index-event-carousel-item">
                
              <div class="event-1">
                  <div class="event-1-backrgound">
                    <img src="{{asset('front/images/proeqti2.jpg') }}" class="" alt="...">
                  </div>

                  

                </div>

              <img src="{{asset('front/images/event-2.png') }}" class="d-block w-100" alt="...">   

              <img src="{{asset('front/images/event-3.png') }}" class="d-block w-100" alt="...">

            </div>
              </div>

              <div class="carousel-item">
              <div class="index-event-carousel-item">
                <div class="event-1">
                  <div class="event-1-backrgound">
                    <img src="{{asset('front/images/event-1-background.png') }}" class="" alt="...">
                  </div>

                  <div class="event-1-logo">
                    <img src="{{asset('front/images/event-1-logo.png') }}" class="" alt="...">
                  </div>

                </div>
              <img src="{{asset('front/images/proeqti3.jpg') }}" class="d-block w-100" alt="...">   

              <img src="{{asset('front/images/proeqti4.jpg') }}" class="d-block w-100" alt="...">
            </div>
              </div>

              <div class="carousel-item"> 
                <div class="index-event-carousel-item">
                <div class="event-1">
                  <div class="event-1-backrgound">
                    <img src="{{asset('front/images/event-1-background.png') }}" class="" alt="...">
                  </div>

                  <div class="event-1-logo">
                    <img src="{{asset('front/images/event-1-logo.png') }}" class="" alt="...">
                  </div>

                </div>
              <img src="{{asset('front/images/proeqti5.jpg') }}" class="d-block w-100" alt="...">   

              <img src="{{asset('front/images/event-3.png') }}" class="d-block w-100" alt="...">
            </div>
            </div>

        </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators4" data-bs-slide="prev">
          <span class="carousel-control-prev-icon d-none" aria-hidden="true"></span>
          <span  class="carousel-arrow-icon"><img src="{{asset('front/images/carousel-right.png') }}" alt=""></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators4" data-bs-slide="next">
          <span class="carousel-control-next-icon d-none" aria-hidden="true"></span>
          <span class="carousel-arrow-icon"><img src="{{asset('front/images/carousel-left.png') }}" alt=""></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
                  
          </div>
        </div>
      </div> -->
      
      <div class="swiper mySwiper">
      <div class="swiper-wrapper">
        <div class="swiper-slide"><img src="{{asset('front/images/proeqti1.jpg')}}" alt=""></div>
        <div class="swiper-slide"><img src="{{asset('front/images/proeqti2.jpg')}}" alt=""></div>
        <div class="swiper-slide"><img src="{{asset('front/images/proeqti3.jpg')}}" alt=""></div>
        <div class="swiper-slide"><img src="{{asset('front/images/proeqti4.jpg')}}" alt=""></div>
        <div class="swiper-slide"><img src="{{asset('front/images/proeqti5.jpg')}}" alt=""></div>
       
      </div>
      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>
      <div class="swiper-pagination"></div>
      </div>


    </div>
  </div>
</div>



<div class="index-part-8">
  <div class="part-8-middle">
    <div class="part-8-inner">
      

      <div class="index-partners-logo">
        <div class="logo-pocket">
          <div class="unhovered-partner-logo"><img src="{{asset('front/images/logo/დაჰოვერებამდე/1.png') }}" alt=""></div>
          <div class="hover-partner-logo"><img src="{{asset('front/images/logo/hovering/1.png') }}" alt=""></div>
        </div>
        
        <div class="logo-pocket">
          <div class="unhovered-partner-logo"><img src="{{asset('front/images/logo/დაჰოვერებამდე/2.png') }}" alt=""></div>
          <div class="hover-partner-logo"><img src="{{asset('front/images/logo/hovering/2.png') }}" alt=""></div>
        </div>

        <div class="logo-pocket">
          <div class="unhovered-partner-logo"><img src="{{asset('front/images/logo/დაჰოვერებამდე/3.png') }}" alt=""></div>
          <div class="hover-partner-logo"><img src="{{asset('front/images/logo/hovering/3.png') }}" alt=""></div>
        </div>

        <div class="logo-pocket">
          <div class="unhovered-partner-logo"><img src="{{asset('front/images/logo/დაჰოვერებამდე/4.png') }}" alt=""></div>
          <div class="hover-partner-logo"><img src="{{asset('front/images/logo/hovering/4.png') }}" alt=""></div>
        </div>

        <div class="logo-pocket">
          <div class="unhovered-partner-logo"><img src="{{asset('front/images/logo/დაჰოვერებამდე/5.png') }}" alt=""></div>  
          <div class="hover-partner-logo"><img src="{{asset('front/images/logo/hovering/5.png') }}" alt=""></div>
        </div>

      </div>

      <div class="index-partners-logo">
        <div class="logo-pocket">
          <div class="unhovered-partner-logo"><img src="{{asset('front/images/logo/დაჰოვერებამდე/6.png') }}" alt=""></div>
          <div class="hover-partner-logo"><img src="{{asset('front/images/logo/hovering/6.png') }}" alt=""></div>
        </div>
        
        <div class="logo-pocket">
          <div class="unhovered-partner-logo"><img src="{{asset('front/images/logo/დაჰოვერებამდე/7.png') }}" alt=""></div>
          <div class="hover-partner-logo"><img src="{{asset('front/images/logo/hovering/7.png') }}" alt=""></div>
        </div>

        <div class="logo-pocket">
          <div class="unhovered-partner-logo"><img src="{{asset('front/images/logo/დაჰოვერებამდე/8.png') }}" alt=""></div>
          <div class="hover-partner-logo"><img src="{{asset('front/images/logo/hovering/8.png') }}" alt=""></div>
        </div>

        <div class="logo-pocket">
          <div class="unhovered-partner-logo"><img src="{{asset('front/images/logo/დაჰოვერებამდე/9.png') }}" alt=""></div>
          <div class="hover-partner-logo"><img src="{{asset('front/images/logo/hovering/9.png') }}" alt=""></div>
        </div>

        <div class="logo-pocket">
          <div class="unhovered-partner-logo"><img src="{{asset('front/images/logo/დაჰოვერებამდე/10.png') }}" alt=""></div>  
          <div class="hover-partner-logo"><img src="{{asset('front/images/logo/hovering/10.png') }}" alt=""></div>
        </div>

      </div>

        <div class="index-partners-logo" id="logo-last-line">
          <div class="logo-pocket">
            <div class="unhovered-partner-logo"><img src="{{asset('front/images/logo/დაჰოვერებამდე/11.png') }}" alt=""></div>        
            <div class="hover-partner-logo"><img src="{{asset('front/images/logo/hovering/11.png') }}" alt=""></div>
          </div>

          <div class="logo-pocket">
            <div class="unhovered-partner-logo"><img src="{{asset('front/images/logo/დაჰოვერებამდე/12.png') }}" alt=""></div>        
            <div class="hover-partner-logo"><img src="{{asset('front/images/logo/hovering/12.png') }}" alt=""></div>
          </div>

          <div class="logo-pocket">
            <div class="unhovered-partner-logo"><img src="{{asset('front/images/logo/დაჰოვერებამდე/13.png') }}" alt=""></div>        
            <div class="hover-partner-logo"><img src="{{asset('front/images/logo/hovering/13.png') }}" alt=""></div>
          </div>

          <div class="logo-pocket">
            <div class="unhovered-partner-logo"><img src="{{asset('front/images/logo/დაჰოვერებამდე/14.png') }}" alt=""></div>        
            <div class="hover-partner-logo"><img src="{{asset('front/images/logo/hovering/14.png') }}" alt=""></div>
          </div>

          <div class="logo-pocket">
            <div class="unhovered-partner-logo"><img src="{{asset('front/images/logo/დაჰოვერებამდე/15.png') }}" alt=""></div>        
            <div class="hover-partner-logo"><img src="{{asset('front/images/logo/hovering/15.png') }}" alt=""></div>
          </div>
      </div>


      

    </div>
  </div>
</div>









@endsection