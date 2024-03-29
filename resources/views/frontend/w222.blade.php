
@extends('frontend/master')

@section('title', 'S-class')
@section('content')


@endsection

@section('footer')

<div class="vehicle-specifics-outer">
  <div class="vehicle-specifics-middle">
    <div class="vehicle-specifics-inner">


    <div id="carouselExampleIndicators-specs" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <div class="spec-carousel-sliders">
      <button type="button" data-bs-target="#carouselExampleIndicators-specs" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators-specs" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators-specs" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
  </div>


  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="{{asset('front/images/spec-carousel-1.png')}}" class="" alt="...">
    </div>


    <div class="carousel-item">
      <img src="{{asset('front/images/spec-carousel-1.png')}}" class="" alt="...">
    </div>


    <div class="carousel-item">
      <img src="{{asset('front/images/spec-carousel-1.png')}}" class="" alt="...">
    </div>


  </div>

    <div class="spec-carousel-buttons">
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators-specs" data-bs-slide="prev">
    <span class="carousel-control-prev-icon d-none" aria-hidden="true"></span>
    <span  class="carousel-arrow-icon"><img src="{{asset('front/images/carousel-right.png') }}" alt=""></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators-specs" data-bs-slide="next">
    <span class="carousel-control-next-icon d-none" aria-hidden="true"></span>
    <span class="carousel-arrow-icon"><img src="{{asset('front/images/carousel-left.png') }}" alt=""></span>
    <span class="visually-hidden">Next</span>
  </button>
  </div>
  
</div>



      <div class="vehicle-spec-body-outer">
        <div class="vehicle-spec-body-middle">
          <div class="vehicle-spec-body-inner">
            <div class="vehicle-spec-body-info">
              <div class="vehicle-spec-body-info-inner">

                <div class="vehicle-spec-body-text">
                  <div class="vehicle-spec-body-title">
                    <p>MERCEDES-BENZ</p>
                    <img src="{{asset('front/images/fleet-logo4.png')}}" alt="">
                  </div>

                  <div class="vehicle-spec-body-tags">
                    <p>S-class</p>
                    <p>Sedan</p>
                    <p>2020-2021</p>
                  </div>

                  <div class="vehicle-spec-body-info-text">
                    <p>ჩვენი ავტოპაკის კიდევ ერთი დახვეწილი მოდელი არის Mercedes-Benz S-Class W222
                      ავტომობილი წარმოებულია 2019 წელს და წარმოადგენს S-Class-ის მე-6 თაობას.
                      ავტომობილი ხასიათდება Mercedes-Benz-ის ერთ-ერთ საუკეთესო მოდელად, რომლის
                      სრულყოფილება თითოეულ დეტალში იგრძნობა.</p>
                    </div>
                  </div>

                  <div class="vehicle-spec-body-image">
                    <img src="{{asset('front/images/vehicle-spec-image.png') }}" alt="">
                  </div>
                </div>



                <div class="spec-sheet-lines" id="spec-sheet">
                      <div class="sheet-line-1">

                        <p class="sheet-part-1">მწარმოებელი</p> 
                        
                        <p class="sheet-part-2">Mercedes-Benz</p>
                      </div>

                      <div class="sheet-line-2">

                        <p class="sheet-part-1">მოდელი</p> 
                        
                        <p class="sheet-part-2">S-Class 4Matic AMG Line 450 W222</p>
                      </div>

                      <div class="sheet-line-3">

                        <p class="sheet-part-1">ფერი</p> 
                        
                        <p class="sheet-part-2">შავი მეტალიკი</p>
                      </div>

                      <div class="sheet-line-4">

                        <p class="sheet-part-1">კატეგორია</p> 
                        
                        <p class="sheet-part-2">სედანი</p>
                      </div>

                      <div class="sheet-line-5">

                        <p class="sheet-part-1">გამოშვების წელი</p> 
                        
                        <p class="sheet-part-2">2019</p>
                      </div>

                      <div class="sheet-line-6">

                        <p class="sheet-part-1">ძრავის მოცულობა</p> 
                        
                        <p class="sheet-part-2">3.0 </p>
                      </div>

                      <div class="sheet-line-7">

                        <p class="sheet-part-1">საწვავის ტიპი</p> 
                        
                        <p class="sheet-part-2">ბენზინი </p>
                      </div>

                      <div class="sheet-line-8">

                        <p class="sheet-part-1">სალონის ტიპი</p> 
                        
                        <p class="sheet-part-2">ტყავი</p>
                      </div>

                      <div class="sheet-line-9">

                        <p class="sheet-part-1">მგზავრების რაოდენობა</p> 
                        
                        <p class="sheet-part-2">3</p>
                      </div>


                      <div class="sheet-line-10">

                        <p class="sheet-part-1">ბარგის მოცულობა</p> 
                        
                        <p class="sheet-part-2">2/3 მოზრდილი ჩემოდანი</p>
                      </div>

                    </div>
                </div>

                


              </div>

          <div class="book-button">
            <button>
              <p>@lang('front.book-car')</p>
              <img src="{{asset('front/images/arrow-right.png') }}" alt="">
            </button>
          </div>

          </div>
        </div>
      </div>

    </div>
  </div>
</div>







@endsection















