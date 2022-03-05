@extends('layouts.frontlayout')
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="/assets/js/options.js"></script>

@section('content')
<div id="home" class="header_slider">
    <div class="single_slider bg_cover d-flex align-items-center"
        style="background-image: url(assets/img/purullena.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-8">
                    <div class="slider_content">
                        <h2 class="slider_title wow fadeInLeftBig" data-wow-duration="1.3s"
                            data-wow-delay="0.2s">Bienvenido a <span class="townname">TOWNNAME</span></h2>
                        <p class="wow fadeInLeftBig shortdescription" data-wow-duration="1.3s" data-wow-delay="0.5s">SHORTDESCRIPTION</p>
                        <a href="javascript:void(0)" class="main-btn wow fadeInLeftBig" data-wow-duration="1.3s"
                            data-wow-delay="0.8s">Guía Turística</a>
                    </div> <!-- slider content -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </div> <!-- single slider -->
</div> <!-- header slider -->

 <!--====== ABOUT PART START ======-->

 <section id="about" class="about_area pt-130 pb-50">
    <div class="about_wrapper">
        <div class="about_image bg_cover" style="background-image: url(assets/img/Estatuapurullena.jpeg)"></div>
        <!-- about image -->
        <div class="container">
            <div class="row justify-content-end">
                <div class="col-lg-6">
                    <div class="about_content">
                        <div class="section_title">
                            <h3 class="title">Más información <br> sobre <span class="townname">TOWNNAME</span></h3>
                            <p class="longdescription">LONGDESCRIPTION</p>
                        </div> <!-- section title -->
                        <a href="javascript:void(0)" class="main-btn">Guía Turística</a>
                    </div> <!-- about content -->
                    <!-- about_counter -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </div> <!-- about wrapper -->
</section>

<!--====== ABOUT PART ENDS ======-->

<!--====== BLOG PART START ======-->

<section id="blog" class="blog_area pt-50">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="section_title text-center pb-25">
                    <h3 class="title">Puntos destacados</h3>
                    <p>Aquí tienes los tres puntos más destacados de <span class="townname">TOWNNAME</span>:</p>
                </div> <!-- section title -->
            </div>
        </div> <!-- row -->
        <div class="row">
            <div class="col-lg-6">
                <div class="single_blog mt-30">
                    <div class="blog_image">
                        <img src="assets/img/CuestaNegro.png" alt="blog">
                    </div>
                    <div class="blog_content">

                        <h4 class="blog_title pointname1">POINT1</h4>
                        <p class="pointshorttext1">POINT1 SHORT TEXT</p>
                        <a href="#" class="more pointlink1">Leer más</a>
                    </div>
                </div> <!-- single blog -->
            </div>
            <div class="col-lg-6">
                <div class="single_blog d-sm-flex mt-30">
                    <div class="blog_image" style="height:200px; width:200px;">
                        <img src="assets/img/Iglesia.jpg" style="overflow:hidden; height: 100%;"  alt="blog">
                    </div>
                    <div class="blog_content blog_content_2 media-body">
                        <h4 class="blog_title pointname2">POINT2</h4>
                        <p class="pointshorttext2">POINT2 SHORT TEXT</p>
                        <a href="#" class="more pointlink2">Leer más</a>
                    </div>
                </div> <!-- single blog -->

                <div class="single_blog d-sm-flex mt-30">
                    <div class="blog_image" style="height:200px; width:200px;">
                        <img src="assets/img/CuevaInmaculada.jpg" style="overflow:hidden; height: 100%;" alt="blog">
                    </div>
                    <div class="blog_content blog_content_2 media-body">
                        <h4 class="blog_title pointname3">POINT3</h4>
                        <p class="pointshorttext3">POINT2 SHORT TEXT</p>
                        <a href="#" class="more pointlink3">Leer más</a>
                    </div>
                </div> <!-- single blog -->
            </div>
        </div> <!-- row -->
    </div> <!-- container -->
</section>

<!--====== BLOG PART ENDS ======-->

<!--====== FOOTER PART START =====-->
<section id="footer" class="footer_area">
    <div class="footer_widget pb-20">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 order-md-1 order-lg-1">
                    <div class="footer_about mt-50">
                        <a href="#"><img src="/assets/img/logo.svg" alt="logo"></a>
                        <p>Lorem ipsum dolor sifsddt amet, conse tetur sadipscing elitr, sed diam onumy eirmod
                            tempor invidunt ut labore et dolore magna aliquya.</p>
                        <ul class="social">
                            <li><a href="https://www.linkedin.com/in/abdellah-bukad-duh-rappani/" class="social_1" href="javascript:void(0)"><i
                                        class="fab fa-linkedin fa-lg"></i></a></li>
                            <li><a href="https://www.linkedin.com/in/cristian-rosca-b444251b8/" class="social_2" href="javascript:void(0)"><i
                                        class="fab fa-linkedin fa-lg"></i></a></li>
                            <li><a href="https://www.linkedin.com/in/francisco-javier-j-309a7611a/" class="social_3" href="javascript:void(0)"><i
                                        class="fab fa-linkedin fa-lg"></i></a></li>
                            <li><a  href="https://www.linkedin.com/in/jos%C3%A9-david-mart%C3%ADnez-ruiz-574430119/" class="social_4" href="javascript:void(0)"><i
                                        class="fab fa-linkedin fa-lg"></i></a></li>
                        </ul>
                    </div> <!-- footer about -->
                    <a class="page-scroll" href="/team" style="margin-top:25px;">Créditos</a>
                </div>
                <div class="col-lg-4 col-md-12 order-md-3 order-lg-2">
                    <div class="footer_link_wrapper d-flex flex-wrap">
                        <div class="footer_link mt-45">
                            <h4 class="footer_title">Enlaces de interés</h4>
                            <ul class="link">
                                <li><a href="javascript:void(0)">Guía</a></li>
                                <li><a href="javascript:void(0)">Monumentos</a></li>
                                <li><a href="javascript:void(0)">Hosteleria</a></li>
                                <li><a href="javascript:void(0)">Comercios</a></li>
                                <li><a href="javascript:void(0)">Ocio</a></li>
                            </ul>
                        </div> <!-- footer link -->
                        <div class="footer_link mt-45">
                            <!--
                            <h4 class="footer_title">Créditos</h4>
                            <ul class="link text-light">
                                <li>Abdellah Bukad-duh Rappani</li>
                                <li>Cristian Rosca</li>
                                <li>Francisco Javier Juárez Cruz</li>
                                <li>José David Martínez Ruiz </li>
                            </ul>
                            -->
                        </div> <!-- footer link -->
                    </div> <!-- footer link wrapper -->
                </div>

            </div> <!-- row -->
        </div> <!-- container -->
        <p class="text-center mt-30">Desarrollado por el equipo de CeliaCity</a></p>
    </div> <!-- footer widget -->
<!-- FOOTER END -->
</section>

@endsection
