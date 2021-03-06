<footer class="footer bg-dark">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-sm-6">
                <a href="#"><img src="/assets/img/logo.svg" alt="logo"
                        style="max-width: 70%; max-height: 100%;"></a>
                <p style="color: white;">Guia desarrollada por CeliaCity un grupo de estudiantes del instituto Celia
                    Viñas en el curso de Desarrollo de Aplicaciones Web.</p>
                <ul class="social" style="display:flex; gap:5%;">
                    <li><a href="https://www.linkedin.com/in/abdellah-bukad-duh-rappani/" target="_blank"
                            class="social_1" href="javascript:void(0)"><i class="fab fa-linkedin fa-lg"></i></a></li>
                    <li><a href="https://www.linkedin.com/in/cristian-rosca-b444251b8/" target="_blank" class="social_2"
                            href="javascript:void(0)"><i class="fab fa-linkedin fa-lg"></i></a></li>
                    <li><a href="https://www.linkedin.com/in/francisco-javier-j-309a7611a/" target="_blank"
                            class="social_3" href="javascript:void(0)"><i class="fab fa-linkedin fa-lg"></i></a></li>
                    <li><a href="https://www.linkedin.com/in/jos%C3%A9-david-mart%C3%ADnez-ruiz-574430119/"
                            target="_blank" class="social_4" href="javascript:void(0)"><i
                                class="fab fa-linkedin fa-lg"></i></a></li>
                </ul>
            </div>
            <div class="col-lg-3 col-sm-6">
                <h6 class="mb-3 mt-sm-0 mt-5 text-white">Enlaces de Interés</h6>
                <ul class="list-unstyled footer-list">
                    @foreach ($dataoptions['categories'] as $category)
                        @if ($category->id == 4)
                            <li class="py-2"><a class="fs-15" href="/guide"><span class="icon fs-12 me-2">∎</span>
                                    Historia</a>
                            </li>
                        @else
                            <li class="py-2"><a class="fs-15" href="/categories/{{ $category->id }}"><span
                                        class="icon fs-12 me-2">∎</span>
                                    {{ $category->name }}</a>
                            </li>
                        @endif
                    @endforeach
                    <li class="py-2"><a class="fs-15" href="/team"><span class="icon fs-12 me-2">∎</span>
                            Créditos</a></li>
                    <li class="py-2"><a class="fs-15" href="/contact"><span class="icon fs-12 me-2">∎</span>
                            Contacto</a></li>
                </ul>
            </div>
        </div>
        <!-- end row -->
    </div>
    <!-- end container -->
</footer>
<!-- end footer -->


<script src="/assets/plantilla5/js/bootstrap.bundle.min.js"></script>

<!-- feather icon -->
<script src="/assets/plantilla5/js/feather.js"></script>

<script src="/assets/plantilla5/js/tiny-slider.js"></script>
<script src="/assets/plantilla5/js/tiny.init.js"></script>

<script src="/assets/plantilla5/js/app.js"></script>

</body>

</html>
