 <!-- Footer Start -->
 <footer class="footer py-5 bg-dark ">
     <div class="container ">
         <div class="row justify-content-around">
             <div class="col-lg-4 col-md-12">
                 <p class="footer-logo townname"></p>
                 <p class="text-foot mt-3">Guia desarrollada por CeliaCity un grupo de estudiantes del instituto Celia
                     Viñas en el curso de Desarrollo de Aplicaciones Web.</p>
                 <ul class="list-unstyled social-icon social mb-0">

                     <li class="list-inline-item"><a href="https://www.linkedin.com/in/francisco-javier-j-309a7611a/"
                             target="_blank"><i class="mdi mdi-linkedin" title="linkedin"></i></a></li>
                     <li class="list-inline-item"><a href="https://www.linkedin.com/in/abdellah-bukad-duh-rappani/"
                             target="_blank"><i class="mdi mdi-linkedin" title="linkedin"></i></a></li>
                     <li class="list-inline-item"><a href="https://www.linkedin.com/in/francisco-javier-j-309a7611a/"
                             target="_blank"><i class="mdi mdi-linkedin" title="linkedin"></i></a></li>
                     <li class="list-inline-item"><a
                             href="https://www.linkedin.com/in/jos%C3%A9-david-mart%C3%ADnez-ruiz-574430119/"
                             target="_blank"><i class="mdi mdi-linkedin" title="linkedin"></i></a></li>

                 </ul>
             </div>
             <!--end col-->

             <div class="col-lg-2 col-md-4 mt-4 pt-2 mt-lg-0 pt-lg-0">
                 <h4 class="text-light text-uppercase footer-head">Enlaces de Interés</h4>
                 <ul class="list-unstyled footer-list mt-4 mb-0">
                     @foreach ($dataoptions['categories'] as $category)
                         @if ($category->id == 4)
                             <li class="mt-2"><a href="/guide" class="text-foot"><i
                                         class="mdi mdi-chevron-right me-2"></i>
                                     {{ $category->name }}</a></li>
                         @else
                             <li class="mt-2"><a href="/categories/{{ $category->id }}" class="text-foot"><i
                                         class="mdi mdi-chevron-right me-2"></i>
                                     {{ $category->name }}</a></li>
                         @endif
                     @endforeach
                     <li class="mt-2"><a href="/contact" class="text-foot"><i class="mdi mdi-chevron-right me-2"></i>
                             Contacto</a></li>
                     <li class="mt-2"><a href="/team" class="text-foot"><i class="mdi mdi-chevron-right me-2"></i>
                             Créditos</a></li>
                 </ul>
             </div>
             <!--end col-->



         </div>
         <!--end row-->
     </div>
     <!--end container-->

     <!-- Back to top -->
     <a href="#" class="back-to-top" id="back-to-top" title="Back to home">
         <i class="mdi mdi-chevron-up"> </i>
     </a>
     <!-- Back to top -->
 </footer>
 <footer class="footer bg-dark footer-bar py-4">
     <div class="container text-foot text-center">
         <p class="mb-0">©
             <script>
                 document.write(new Date().getFullYear())
             </script> Design with <i class="mdi mdi-heart text-danger"></i> by <a
                 href="http://www.Themesdesign.in" target="_blank" class="text-reset">CeliaCity</a>.
         </p>
     </div>
     <!--end container-->
 </footer>
 <!--end footer-->
 <!-- Footer End -->
 </div>

 <!-- Scripts -->


 </body>
