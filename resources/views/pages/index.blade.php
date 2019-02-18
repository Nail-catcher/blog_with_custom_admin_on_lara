@extends('layout')

@section('content')

<div id="slider" class="slider">
    <ol class="slider__indicators">
      <li class="slider__indicator slider__indicator_active" data-slide-to="0"></li>
      <li class="slider__indicator" data-slide-to="1"></li>
      <li class="slider__indicator" data-slide-to="2"></li>
      
    </ol>
    <div class="slider__items">
      <div class="slider__item slider__item_active">
        <div> <img src="images/Screenshot_3.png" ></div>
      </div>
      <div class="slider__item">
        <div><img src="images/Screenshot_4.png" ></div>
      </div>
     
      <div class="slider__item">
        <div><img src="images/Screenshot_5.png"></div>
      </div>
    </div>
    <a class="slider__control slider__control_prev" href="#" role="button"></a>
    <a class="slider__control slider__control_next" href="#" role="button"></a>
  </div>

<div class="main-info"> <div class="zag-main-info"><h1>АНО АРТ КВАРТАЛ, ЧТО ЭТО?</h1></div>
	<div class="logo-main-info"><img src="{{asset('images/logotip.png')}}"></div>
	<div class="info-main-info"><img src="images/ZNAC1.png"><p>Данный проект создан в 2014 году с основной целью - поддерживать в <br>жителях и гостях города Кургана ту творческую энергию, которая <br>является одним из ресурсов города Кургана.</p></div>
	<div class="info-main-info"><img src="images/ZNAC2.png"><p>Свою задачу мы видим в том, чтобы создавать возможности для <br>трансформации креативного потенциала курганцев в креативный<br> капитал.</p></div>
	<div class="info-main-info"><img src="images/ZNAC3.png"><p>Эффект снергии позволит создать в городе Кургане необыкновенную<br> творческую среду и новые креативные индустрии, что было и остается<br> необходимым условием развития не только города,<br> но и всей Курганской области.</p></div>
	<div class="info-main-info"><img src="images/ZNAC4.png"><p>В 2019 году проект "Арт-квартал" прозодит этап ПЕРЕЗАГРУЗКИ на <br>новое мышление и новые творческие проекты</p></div>
</div>
@include('pages.footer')
@endsection