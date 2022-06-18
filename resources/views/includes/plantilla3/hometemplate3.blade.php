@extends('layouts.frontlayout')
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="/assets/js/options.js"></script>

@section('content')
    <!-- HOME START-->
    <!--Primera imagen-->
    <section class="bg-half d-table w-100 coverpage" style="background-image:url('images/home/CeliaCityInicio.png')"
        id="home">
        <div class="bg-overlay"></div>
        <div class="home-center">
            <div class="home-desc-center">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8 text-center">
                            <div class="title-heading mt-5 pt-4">
                                <h1 class="heading text-white mb-3 townname">Nombre del pueblo</h1>
                                <p class="para-desc text-white-50 shortdescription">Breve descripcion</p>
                                <div class="mt-4 pt-2">
                                    <a href="javascript:void(0)" class="btn btn-primary rounded-pill mb-2 me-2">Guía</a>

                                </div>
                            </div>
                        </div>
                        <!--end col-->
                    </div>
                    <!--end row-->
                </div>
                <!--end container-->
            </div>
            <!--end home desc center-->
        </div>
        <!--end home center-->
    </section>
    <!--end section-->
    <!-- HOME END-->

    <!-- About Us Start -->
    <section class="section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-7">
                    <div class="about-img ">
                        <img src="{{ $dataoptions['coverpage2'] }}" class="img-fluid " alt="">
                    </div>
                    <!--end img-->
                </div>
                <!--end col-->

                <div class="col-lg-6 col-md-5 mt-4 mt-sm-0 pt-2 pt-sm-0">
                    <!-- Start Accordion -->
                    <div class="faqs mt-4 pt-2">
                        <div class="accordion" id="accordionExample2" role="tablist" aria-multiselectable="true">
                            <div class="border-0 rounded-0">
                                <div class="p-0" id="History">
                                    <h3 class="position-relative mb-0">
                                        <a>Descripción</a>
                                    </h3>
                                </div>

                                <p class="mb-2 mt-3 m-2 longdescription">

                                </p>

                            </div>
                            <!--end card-->


                        </div>
                        <!--end accordion-->
                    </div>
                    <!--end faqs-->
                    <!-- End Accordion -->
                </div>
                <!--end col-->
            </div>
            <!--end row-->
        </div>
        <!--end container-->
    </section>
    <!--end section-->




    <!-- Team Start -->
    <section class="section" id="team">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 text-center">
                    <div class="section-title">
                        <h4 class="title text-uppercase fw-normal mb-4">Puntos <span
                                class="text-primary fw-bold">Destacados</span> </h4>
                        <p class="text-muted mx-auto para-desc mb-0">Aquí tienes los tres puntos más destacados de Macael
                        </p>
                    </div>
                </div>
                <!--end col-->
            </div>
            <!--end row-->

            <div class="row justify-content-around">
                <div class="col-lg-3 col-md-6 col-12 mt-4 pt-2">
                    <div class="team-content position-relative text-center bg-light rounded">
                        <img src="images/team/01.jpg" class="img-fluid rounded-top point1image" alt="">
                        <div class="detail pt-3 pb-3 p-1">
                            <h4 class="mb-0"><a href="javascript:void(0)" class="name text-dark pointname1">Nombre del
                                    punto</a></h4>
                            <small class="posting text-muted pointshorttext1">descripcion del punto</small>
                            <a href="#" class="more pointlink1">Leer más</a>
                        </div>

                    </div>
                    <!--end team content-->
                </div>
                <!--end col-->

                <div class="col-lg-3 col-md-6 col-12 mt-4 pt-2">
                    <div class="team-content position-relative text-center bg-light rounded">
                        <img src="images/team/02.jpg" class="img-fluid rounded-top point2image" alt="">
                        <div class="detail pt-3 pb-3 p-1">
                            <h4 class="mb-0"><a href="javascript:void(0)" class="name text-dark pointname2">Nombre del
                                    punto</a></h4>
                            <small class="posting text-muted pointshorttext2">descripcion del punto</small>
                            <a href="#" class="more pointlink2">Leer más</a>
                        </div>

                    </div>
                    <!--end team content-->
                </div>
                <!--end col-->

                <div class="col-lg-3 col-md-6 col-12 mt-4 pt-2">
                    <div class="team-content position-relative text-center bg-light rounded">
                        <img src="images/team/03.jpg" class="img-fluid rounded-top point3image" alt="">
                        <div class="detail pt-3 pb-3 p-1">
                            <h4 class="mb-0"><a href="javascript:void(0)" class="name text-dark pointname3">Nombre del
                                    punto</a></h4>
                            <small class="posting text-muted pointshorttext3">descripcion del punto</small>
                            <a href="#" class="more pointlink3">Leer más</a>
                        </div>

                    </div>
                    <!--end team content-->
                </div>
                <!--end col-->

                <!--end col-->
            </div>
            <!--end row-->
        </div>
        <!--end container-->
    </section>
    <!--end section-->
    <!-- Team End -->
@endsection
