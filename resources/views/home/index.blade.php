@extends('layouts.app-master')

@section('content')
    <section class="home">
        <div class="media-icons">
            <a href="#"><i class="uil uil-facebook-f"></i></a>
            <a href="#"><i class="uil uil-instagram"></i></a>
            <a href="#"><i class="uil uil-twitter"></i></a>
        </div>
        <div class="swiper bg-slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide dark-layer">
                    <img src="{{url('img/fondo1.png')}}" alt="">
                    
                    <div class="text-content">
                        <h2 class="title">Eslogan <span>Texto...</span></h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic possimus totam similique
                            quisquam cupiditate sunt numquam nihil nisi assumenda eveniet.</p>
                        <div class="botones">
                            <a href="#" class="read-more"><i class="uil uil-user-arrows"></i> Nuestros servicios <i class="uil uil-arrow-right arrow"></i></a>
                            <a href="#" class="read-more"><i class="uil uil-envelope-minus"></i> Contáctanos <i class="uil uil-arrow-right arrow"></i></a>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide dark-layer">
                    <img src="{{url('img/fondo2.jpg')}}" alt="">
                    <div class="text-content">
                        <h2 class="title">Eslogan <span>Texto...</span></h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic possimus totam similique
                            quisquam cupiditate sunt numquam nihil nisi assumenda eveniet.</p>
                        <div class="botones">
                            <a href="#" class="read-more"><i class="uil uil-user-arrows"></i> Nuestros servicios <i class="uil uil-arrow-right arrow"></i></a>
                            <a href="#" class="read-more"><i class="uil uil-envelope-minus"></i> Contáctanos <i class="uil uil-arrow-right arrow"></i></a>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide dark-layer">
                    <img src="{{url('img/fondo3.jpg')}}" alt="">
                    <div class="text-content">
                        <h2 class="title">Eslogan <span>Texto...</span></h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic possimus totam similique
                            quisquam cupiditate sunt numquam nihil nisi assumenda eveniet.</p>
                        <div class="botones">
                            <a href="#" class="read-more"><i class="uil uil-user-arrows"></i> Nuestros servicios <i class="uil uil-arrow-right arrow"></i></a>
                            <a href="#" class="read-more"><i class="uil uil-envelope-minus"></i> Contáctanos <i class="uil uil-arrow-right arrow"></i></a>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide dark-layer">
                    <img src="{{url('img/fondo4.jpg')}}" alt="">
                    <div class="text-content">
                        <h2 class="title">Eslogan <span>Texto...</span></h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic possimus totam similique
                            quisquam cupiditate sunt numquam nihil nisi assumenda eveniet.</p>
                        <div class="botones">
                            <a href="#" class="read-more"><i class="uil uil-user-arrows"></i> Nuestros servicios <i class="uil uil-arrow-right arrow"></i></a>
                            <a href="#" class="read-more"><i class="uil uil-envelope-minus"></i> Contáctanos <i class="uil uil-arrow-right arrow"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="bg-slider-thumbs">
            <div class="swiper-wrapper thumbs-container">
                <img src="{{url('img/fondo1.png')}}" class="swiper-slide" alt="">
                <img src="{{url('img/fondo2.jpg')}}" class="swiper-slide" alt="">
                <img src="{{url('img/fondo3.jpg')}}" class="swiper-slide" alt="">
                <img src="{{url('img/fondo4.jpg')}}" class="swiper-slide" alt="">
            </div>
        </div>
    </section>

    <!-- ABOUT -->
    <section class="about section">
        <h1>¿quienes somos?</h1>
        <div class="about-box">
            <div class="box">
                <h2>Somos una empresa con mas de 30 años de experiencia...</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur aut quod ut nihil nostrum
                    tempore earum delectus. Veritatis tempore assumenda nihil necessitatibus possimus nisi officiis
                    quasi, quas tempora laboriosam eos. Voluptas quis sint saepe maxime ut impedit quam nemo iste,
                    tenetur deserunt, aut cupiditate incidunt fuga quisquam hic illo eos?</p>
                <a href="#" class="read-more"><i class="uil uil-users-alt"></i> Conoce mas <i class="uil uil-arrow-right arrow"></i></a>

            </div>
            <img src="./img/nosotros.png" alt="img-about">
        </div>
        <!-- PERSONAL CARDS -->
        <div class="slide-container swiper">
            <div class="slide-content">
                <div class="card-wrapper swiper-wrapper">
                    <div class="card swiper-slide">
                        <div class="image-content">
                            <span class="overlay"></span>

                            <div class="card-image">
                                <img src="img/person1.png" alt="" class="card-img">
                            </div>
                        </div>

                        <div class="card-content">
                            <h2 class="name">Nombre completo</h2>
                            <p class="description">Especialidad <strong>(años) </strong><span>de experiencia</span></p>
                            <a href="#"><i class="uil uil-mobile-android-alt"></i> +51 999999999</a>
                        </div>
                    </div>
                    <div class="card swiper-slide">
                        <div class="image-content">
                            <span class="overlay"></span>

                            <div class="card-image">
                                <img src="img/person2.png" alt="" class="card-img">
                            </div>
                        </div>

                        <div class="card-content">
                            <h2 class="name">Nombre completo</h2>
                            <p class="description">Especialidad <strong>(años) </strong><span>de experiencia</span></p>
                            <a href="#"><i class="uil uil-mobile-android-alt"></i> +51 999999999</a>
                        </div>
                    </div>
                    <div class="card swiper-slide">
                        <div class="image-content">
                            <span class="overlay"></span>

                            <div class="card-image">
                                <img src="img/person3.png" alt="" class="card-img">
                            </div>
                        </div>
                        <div class="card-content">
                            <h2 class="name">Nombre completo</h2>
                            <p class="description">Especialidad <strong>(años) </strong><span>de experiencia</span></p>
                            <a href="#"><i class="uil uil-mobile-android-alt"></i> +51 999999999</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="swiper-button-next swiper-navBtn"></div>
            <div class="swiper-button-prev swiper-navBtn"></div>
            <div class="swiper-pagination"></div>
        </div>
    </section>
@endsection