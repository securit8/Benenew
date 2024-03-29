

<!DOCTYPE html>
<html lang="">
 
  <head>
  <title>Limperatrice </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="msapplication-TleImage" content="http://">
      <meta property="og:bene-exclusive.com" content="Bene Exclusive">
    <meta property="og:image" itemprop="image" content="../front/images/partners-logo.png">
    <meta property="og:type" content="website" />
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="300">
    <meta property="og:image:heihgt" content="300">
    <meta property="og:url" content="http://bene-exclusive.com">  
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../front/css/main.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="icon" type="image/x-icon" href="favicon.ico" /> 
 <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
<link rel="stylesheet"  href="https://unpkg.com/swiper/swiper-bundle.min.css"/>
<!-- ძველი ექსკლუზივის სტილები -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{ asset('../front/assets/css/style.css') }}">
    <link rel="stylesheet"  href="{{ asset('../front/assets/css/fonts.css') }}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
    <link href="{{ asset('../admin/assets/global/plugins/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('../admin/assets/global/plugins/simple-line-icons/simple-line-icons.min.css') }}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="{{ asset('../front/assets/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('../front/assets/css/owl.theme.default.min.css') }}">
<script src="https://kit.fontawesome.com/5c894f6509.js" crossorigin="anonymous"></script>
<!-- ძველი ექსკლუზივის სტილები -->
<div class="about {{Request::is('LImperatrice') ? 'LImperatrice' : ''}}"> <a href="{{route('frontend.blacksea')}}">
<script async src="https://www.googletagmanager.com/gtag/js?id=G-E9CSXFYW6Q"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-E9CSXFYW6Q');
</script>
@if($errors->any())
<h4>{{$errors->first()}}</h4>
@endif

@if (\Session::has('success'))
    <div class="alert alert-success">
        <ul>
            <li>{!! \Session::get('success') !!}</li>
        </ul>
    </div>
@endif
    

  <div class="navigation">
  
  
    

  
<div class="navbar">
<div class="bene_logo"><a href="/"><img src="{{asset('../front/images/header-logo.png') }}" ></a></div>
   
  
    

    <div class="Language-select">

      <div id="langbtn">

          <div class="Ka">
            <a href="/locale/ka">GE</a>
          </div>
          <div class="En">
            <a href="/locale/en">EN</a>
          </div>
          <!-- <div class="Ru">
            <a href="locale/ru">RU</a>
          </div> -->
      </div>

    </div>
  
</div>

<div class="hamburger" id="myhamburger">
  <span class="bar"></span>
  <span class="bar"></span>
  <span class="bar"></span>
</div>
  </div>
</header>

<!-- კონტენტის დასაწყისი -->

<section id="news" >

<img width="100%" src="{{ asset('../front/assets/images/limp.jpeg') }}" >


<div class="container p-0">
  <h3 class = "mt-5 d-block">L'Impératrice</h3><br>
   <h4 class = "mt-4 d-block">@lang('front.abevent')</h4>
        <!--<img class="inner_news_image" src="{{ asset('front/assets/images/shuttle.jpg') }}" width="300"  height="500" >-->
    <div class="row ">
      <div class="col-md-8 pt-3 mt-3 ml-3  border_radius_25" style="border-top:1px solid #c7c7c7;">
      <p>@lang('front.tr-det') </p>
      </div>
      <div class ="row my-5 buy_ticket">
<h2 class="my-5">@lang('front.ticket')</h2>
<p style="padding-bottom:10px;padding-left:30px;font-size:1.5rem;color:green">@lang('front.tbilisi') </p>        
<p style="padding-bottom:20px;padding-left:30px;">@lang('front.ticket-tbilisi')</p>
 
<p style="padding-bottom:10px;padding-left:30px;font-size:1.5rem;color:green">@lang('front.batumi') </p>        
<p style="padding-bottom:20px;padding-left:30px;">@lang('front.ticket-batumi')</p>

</div>

</section>



<Script>

function tb1minus(){
  var t1val=document.getElementById('t1value').value;

  if(t1val==0 || t1val==1  )
  {
   
  }
  else{
    t1val--;
    document.getElementById('t1value').value = t1val;
    document.getElementById('tbili1').value=t1val*60;
  }
}
function tb1plus(){
  var t1val=document.getElementById('t1value').value;
  console.log(t1val);
  if(t1val>=5)
  {
   
  }
  else{
    t1val ++;
    document.getElementById('t1value').value =t1val ;
    document.getElementById('tbili1').value=t1val*60;
  }
}

function tb2minus(){
  var t2val=document.getElementById('t2value').value;

  if(t2val==0 || t2val==1  )
  {
   
  }
  else{
    t2val--;
    document.getElementById('t2value').value = t2val;
    document.getElementById('tbili2').value=t2val*100;
  }
}
function tb2plus(){
  var t2val=document.getElementById('t2value').value;
  
  if(t2val>=5)
  {
   
  }
  else{
    t2val ++;
    document.getElementById('t2value').value =t2val ;
    document.getElementById('tbili2').value=t2val*100;
  }
}
// kutaisi -----------

function ku1minus(){
  var k1val=document.getElementById('k1value').value;

  if(k1val==0 || k1val==1  )
  {
   
  }
  else{
    k1val--;
    document.getElementById('k1value').value = k1val;
    document.getElementById('kutais1').value=k1val*40;
  }
}
function ku1plus(){
  var k1val=document.getElementById('k1value').value;

  if(k1val>=5)
  {
   
  }
  else{
    k1val ++;
    document.getElementById('k1value').value =k1val ;
    document.getElementById('kutais1').value=k1val*40;
  }
}

function ku2minus(){
  var k2val=document.getElementById('k2value').value;

  if(k2val==0 || k2val==1  )
  {
   
  }
  else{
    k2val--;
    document.getElementById('k2value').value = k2val;
    document.getElementById('kutais2').value=k2val*60;
  }
}
function ku2plus(){
  var k2val=document.getElementById('k2value').value;
  
  if(k2val>=5)
  {
   
  }
  else{
    k2val ++;
    document.getElementById('k2value').value =k2val ;
    document.getElementById('kutais2').value=k2val*60;
  }
}

// batumi --------------------

function b1minus(){
  var b1val=document.getElementById('b1value').value;

  if(b1val==0 || b1val==1  )
  {
   
  }
  else{
    b1val--;
    document.getElementById('b1value').value = b1val;
    document.getElementById('batum1').value=b1val*35;
  }
}
function b1plus(){
  var b1val=document.getElementById('b1value').value;
  
  if(b1val>=5)
  {
   
  }
  else{
    b1val ++;
    document.getElementById('b1value').value =b1val ;
    document.getElementById('batum1').value=b1val*35;
  }
}

function b2minus(){
  var b2val=document.getElementById('b2value').value;

  if(b2val==0 || b2val==1  )
  {
   
  }
  else{
    b2val--;
    document.getElementById('b2value').value = b2val;
    document.getElementById('batum2').value=b2val*50;
  }
}
function b2plus(){
  var b2val=document.getElementById('b2value').value;
  
  if(b2val>=5)
  {
   
  }
  else{
    b2val ++;
    document.getElementById('b2value').value =b2val ;
    document.getElementById('batum2').value=b2val*50;
  }
}
   
    function tbil1(){
      document.getElementById('inputT1').style.display="block";
    }
    function tbil2(){
      document.getElementById('inputT2').style.display="block";
    }
    function ku1(){
      document.getElementById('inputT3').style.display="block";
    }
    function ku2(){
      document.getElementById('inputT4').style.display="block";
    }
      function bat1(){
      document.getElementById('inputT5').style.display="block";
    }
    function bat2(){
      document.getElementById('inputT6').style.display="block";
    }
    
  </script>

</body>
















