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
    <h1 class="titulo">¿quienes somos?</h1>
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
<!-- FINAL ABOUT -->

<!-- LO QUE OFRECEMOS -->
<section class="offers section">
    <h1 class="titulo">Lo que ofrecemos</h1>
    <div class="grid grid-offers">
        <div class="grid-item">
            <div class="imagen">
                <img src="./img/equipos.png">
            </div>
            <h2>Equipos Modernos</h2>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing.</p>
        </div>
        <div class="grid-item">
            <div class="imagen">
                <img src="./img/profesional.png">
            </div>
            <h2>Profesionalismo</h2>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing.</p>
        </div>
        <div class="grid-item">
            <div class="imagen">
                <img src="./img/diagnostico.png">
            </div>
            <h2>Profesionalismo</h2>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing.</p>
        </div>
        <div class="grid-item">
            <div class="imagen">
                <img src="./img/local.png">
            </div>
            <h2>Profesionalismo</h2>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing.</p>
        </div>
        <div class="grid-item">
            <div class="imagen">
                <img src="./img/llamada.png">
            </div>
            <h2>Profesionalismo</h2>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing.</p>
        </div>
        <div class="grid-item">
            <div class="imagen">
                <img src="./img/equipos.png">
            </div>
            <h2>Equipos Modernos</h2>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing.</p>
        </div>
    </div>
</section>
<!-- FINAL LO QUE OFRECEMOS -->

<!-- NUESTROS SERVICIOS -->
<section class="services section">
    <h1 class="titulo">Nuestros servicios</h1>
    <span class="subtitulo">Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae incidunt blanditiis
        fuga magnam, excepturi impedit laboriosam id enim?</span>
    <div class="grid grid-services">
        <div class="grid-item">
            <picture>
                <img src="./img/servicio1.png">
                <a class="boton" href="#">
                    <i class="uil uil-angle-double-right"></i>
                    <span>Limpieza dental</span>
                </a>
            </picture>
        </div>
        <div class="grid-item">
            <picture>
                <img src="./img/servicio2.png">
                <a class="boton" href="#">
                    <i class="uil uil-angle-double-right"></i>
                    <span>Tratamiento de caries dental</span>
                </a>
            </picture>
        </div>
        <div class="grid-item">
            <picture>
                <img src="./img/servicio3.png">
                <a class="boton" href="#">
                    <i class="uil uil-angle-double-right"></i>
                    <span>Extracciones dentales</span>
                </a>
            </picture>
        </div>
        <div class="grid-item">
            <picture>
                <img src="./img/servicio4.png">
                <a class="boton" href="#">
                    <i class="uil uil-angle-double-right"></i>
                    <span>Ortodoncia</span>
                </a>
            </picture>
        </div>
        <div class="grid-item">
            <picture>
                <img src="./img/servicio5.png">
                <a class="boton" href="#">
                    <i class="uil uil-angle-double-right"></i>
                    <span>Blanqueamiento dental</span>
                </a>
            </picture>
        </div>
    </div>
</section>
<!-- FINAL NUESTROS SERVICIOS -->

<!-- PARTNERS -->
<section class="partners section">
    <h1 class="titulo">Partners</h1>
    <!-- PARTNERS CARDS -->
    <div class="slide-container swiper">
        <div class="slide-content">
            <div class="card-wrapper swiper-wrapper">
                <div class="card swiper-slide">
                    <div class="image-content">
                        <span class="overlay no-before"></span>

                        <div class="card-image card-image--size">
                            <img src="./img/partner1.png" alt="" class="card-img card-img--radius">
                        </div>
                    </div>
                </div>
                <div class="card swiper-slide">
                    <div class="image-content">
                        <span class="overlay no-before"></span>

                        <div class="card-image card-image--size">
                            <img src="#" alt="" class="card-img card-img--radius">
                        </div>
                    </div>
                </div>
                <div class="card swiper-slide">
                    <div class="image-content">
                        <span class="overlay no-before"></span>

                        <div class="card-image card-image--size">
                            <img src="#" alt="" class="card-img card-img--radius">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="swiper-button-next swiper-navBtn"></div>
        <div class="swiper-button-prev swiper-navBtn"></div>
        <div class="swiper-pagination"></div>

    </div>
</section>
<!-- FINAL PARTNERS -->

<!-- TESTIMONIOS -->
<section class="testimonials-section section">
    <h1 class="titulo">Testimonios</h1>

    <!-- Owl Carousel Slider Starts -->
    <div class="owl-carousel owl-theme testimonials-container">
        <!-- Item1 Starts -->
        <div class="item testimonial-card">
            <main class="test-card-body">
                <div class="quote">
                    <i class="fa fa-quote-left"></i>
                    <!-- <h2>Awesome Coding</h2> -->
                </div>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                    labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                    laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
                    voluptate velit esse.</p>
                <div class="ratings">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                </div>
            </main>
            <div class="profile">
                <div class="profile-image">
                    <img src="./img/image1.jpg">
                </div>
                <div class="profile-desc">
                    <span>Nombres</span>
                    <span>05/05/2023</span>
                </div>
            </div>
        </div>
        <!-- Item1 Ends -->

        <!-- Item2 Starts -->
        <div class="item testimonial-card">
            <main class="test-card-body">
                <div class="quote">
                    <i class="fa fa-quote-left"></i>
                    <!-- <h2>Awesome Coding</h2> -->
                </div>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                    labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                    laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
                    voluptate velit esse.</p>
                <div class="ratings">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                </div>
            </main>
            <div class="profile">
                <div class="profile-image">
                    <img src="./img/image2.jpg">
                </div>
                <div class="profile-desc">
                    <span>Nombres</span>
                    <span>05/05/2023</span>
                </div>
            </div>
        </div>
        <!-- Item2 Ends -->

        <!-- Item3 Starts -->
        <div class="item testimonial-card">
            <main class="test-card-body">
                <div class="quote">
                    <i class="fa fa-quote-left"></i>
                    <!-- <h2>Awesome Coding</h2> -->
                </div>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                    labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                    laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
                    voluptate velit esse.</p>
                <div class="ratings">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                </div>
            </main>
            <div class="profile">
                <div class="profile-image">
                    <img src="./img/image3.jpg">
                </div>
                <div class="profile-desc">
                    <span>Nombres</span>
                    <span>05/05/2023</span>
                </div>
            </div>
        </div>
        <!-- Item3 Ends -->

        <!-- Item4 Starts -->
        <div class="item testimonial-card">
            <main class="test-card-body">
                <div class="quote">
                    <i class="fa fa-quote-left"></i>
                    <!-- <h2>Awesome Coding</h2> -->
                </div>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                    labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                    laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
                    voluptate velit esse.</p>
                <div class="ratings">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                </div>
            </main>
            <div class="profile">
                <div class="profile-image">
                    <img src="./img/image4.jpg">
                </div>
                <div class="profile-desc">
                    <span>Nombres</span>
                    <span>05/05/2023</span>
                </div>
            </div>
        </div>
        <!-- Item4 Ends -->

        <!-- Item5 Starts -->
        <div class="item testimonial-card">
            <main class="test-card-body">
                <div class="quote">
                    <i class="fa fa-quote-left"></i>
                    <!-- <h2>Awesome Coding</h2> -->
                </div>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                    labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                    laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
                    voluptate velit esse.</p>
                <div class="ratings">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                </div>
            </main>
            <div class="profile">
                <div class="profile-image">
                    <img src="./img/image5.jpg">
                </div>
                <div class="profile-desc">
                    <span>Nombres</span>
                    <span>05/05/2023</span>
                </div>
            </div>
        </div>
        <!-- Item5 Ends -->

        <!-- Item6 Starts -->
        <div class="item testimonial-card">
            <main class="test-card-body">
                <div class="quote">
                    <i class="fa fa-quote-left"></i>
                    <!-- <h2>Awesome Coding</h2> -->
                </div>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                    labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                    laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
                    voluptate velit esse.</p>
                <div class="ratings">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                </div>
            </main>
            <div class="profile">
                <div class="profile-image">
                    <img src="./img/image6.jpg">
                </div>
                <div class="profile-desc">
                    <span>Nombres</span>
                    <span>05/05/2023</span>
                </div>
            </div>
        </div>
        <!-- Item6 Ends -->

    </div>
    <!-- Owl Carousel Slider Ends -->
</section>
<!-- FINAL TESTIMONIOS -->

<!-- CONTACTO -->
<section class="contact">
    <article class="section">
        <h1 class="titulo">Contacto</h1>
        <span class="subtitulo"><strong>Hablar con un Experto en Odontología Digital.</strong><br>Llámanos o dinos el
            mejor momento para que te llamemos.</span>
    </article>
    <article class="contact-box">
        <div class="contact-content">
            <!-- INFORMACION -->
            <article class="box box-info">
                <div class="phone">
                    <i class="fa-solid fa-mobile"></i>
                    <h2>Teléfono y Correo</h2>
                    <div class="group-links">
                        <span>(+51) 999999999</span>
                        <span>(+51) 999999999</span>
                        <span>(+51) 999999999</span>
                    </div>
                    <a href="mailto:info@gmail.com">info@gmail.com</a>
                </div>
                <div class="location">
                    <i class="fa-solid fa-map-location-dot"></i>
                    <h2>Localización</h2>
                    <p>Direccion Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae incidunt
                        blanditiis fuga magnam.</p>
                </div>
            </article>
            <!-- FORMULARIO -->
            <article class="box form">
                <form action="" autocomplete="off">
                    <div class="input-field">
                        <label for="name">Nombres</label>
                        <input type="text" id="name" placeholder="Escribe tu nombre completo" pattern="[a-zA-Zá-úÁ-ÚñÑ]+([ '-][a-zA-Zá-úÁ-ÚñÑ]+)*" required="">
                    </div>
                    <div class="input-field">
                        <label for="email">Correo</label>
                        <input type="email" id="email" placeholder="Escribe tu correo electrónico" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" required="">
                    </div>
                    <div class="input-field">
                        <label for="profession">Profesión/Cargo</label>
                        <select name="" id="profession" required="">
                            <option value="">Seleccionar</option>
                            <option value="">Odontólogo</option>
                        </select>
                    </div>
                    <div class="input-field">
                        <label for="phone">Teléfono</label>
                        <input type="tel" id="phone" placeholder="Escribe tu número de teléfono" pattern="^\+(?:[0-9] ?){6,14}[0-9]$" required="">
                    </div>
                    <div class="input-field">
                        <label for="description">Dinos que necesitas y cuando te viene bien que te llamemos</label>
                        <textarea name="" id="description" pattern="^[a-zA-Z0-9\s.,;:¡!¿?()'\-+]*$" required=""></textarea>
                    </div>
                    <div class="checkbox-test">
                        <div class="checkbox-content">
                            <input type="checkbox" id="logCheck">
                            <label for="logCheck" class="text">He leído y acepto la</label>
                        </div>

                        <a href="#" class="text">política de privacidad</a>
                    </div>
                    <div class="input-field button">
                        <input type="submit" value="Enviar">
                    </div>
                </form>
            </article>
        </div>
    </article>
</section>
<!-- FINAL CONTACTO -->

<!-- FOOTER -->
<picture class="map">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d62444.60923854026!2d-77.09000899676029!3d-11.989160827524062!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9105cfaeef4c292f%3A0xee8dfbf42a8ee7da!2sIndependencia!5e0!3m2!1ses-419!2spe!4v1683231782502!5m2!1ses-419!2spe" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</picture>
<footer>
    <div class="container">
        <div class="sec aboutus">
            <img src="./img/logo.png" alt="logo">
            <ul class="sci">
                <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                <li><a href="#"><i class="fa-brands fa-youtube"></i></a></li>
            </ul>
        </div>
        <div class="sec contact">
            <h2>Contacto</h2>
            <ul class="info--footer">
                <li><span><i class="fa-solid fa-phone"></i></span>
                    <p><a href="tel:+51999999999">+51 999999999</a></p>
                </li>
                <li><span><i class="fa-solid fa-envelope"></i></span>
                    <p><a href="mailto:info@gmail.com">info@gmail.com</a></p>
                </li>
            </ul>
        </div>
        <div class="sec quicklinks">
            <h2>Paginas</h2>
            <ul>
                <li><a href="#"><i class="uil uil-link"></i>Inicio</a></li>
                <li><a href="#"><i class="uil uil-link"></i> Servicios</a></li>
                <li><a href="#"><i class="uil uil-link"></i> Nosotros</a></li>
                <li><a href="#"><i class="uil uil-link"></i> Productos</a></li>
                <li><a href="#"><i class="uil uil-link"></i> Contácto</a></li>
            </ul>
        </div>
    </div>
</footer>
<div class="copyrightText">
    <p>© 2023 Grupo estudiantil SENATI.</p>
</div>
<!-- FINAL FOOTER -->

@endsection