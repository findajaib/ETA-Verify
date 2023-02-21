@include('front_main')
<!-- Slide 1 -->
{{-- style="background-image: url(frontend/assets/img/slide/slide-1.jpg);" --}}
<!-- ======= Hero Section ======= -->



<!-- ======= About Us Section ======= -->
<section id="about-us" class="about-us">
    <div class="container" data-aos="fade-up">

        <div class="row content">
            <div class="col-lg-6" data-aos="fade-right"
                style="color:#ffffff; background-image: url(frontend/assets/img/slide/slide-1.jpg);">
                {{-- <p>_____________________________________________________________________________</p> --}}
                <p></p>
                <h2 style="font-family: cursive">ETA-Verify</h2>

                <h3>A platform that allows enrolled employers to confirm the originality of their employees
                    educational documents.
                    <ul>
                        <li style="font-family: cursive"> <span style="background-color: rgb(7, 100, 161)">Confirm
                                Your Documents</span>
                        <li style="font-family: cursive"> <span style="background-color: rgb(7, 100, 161)">Verify,
                                Clarify, Prove</span></li>
                        <li style="font-family: cursive"> <span style="background-color: rgb(7, 100, 161)">Request
                                Verified Official to any address </span></li>
                    </ul>
                </h3>
            </div>
            <div class="col-lg-6 pt-4 pt-lg-0" data-aos="fade-left">

                <div class="card-group">
                    <div class="card p-3">
                        <div class="card-body">
                            @if (session('status'))
                                <div class="alert alert-success alert-dismissible fade show">
                                    {{ session('status') }}
                                </div>
                            @endif
                            @if (\Session::has('message'))
                                <p class="alert alert-info">
                                    {{ \Session::get('message') }}
                                </p>
                            @endif


                            <form method="POST" action="{{ route('login') }}">
                                {{ csrf_field() }}


                                <p class="text-muted">
                                <h5> <b>LOG IN</b> </h5>

                                <hr>
                                </p>
                                <label for="username">Username</label>
                                <div class="input-group mb-3">

                                    <div class="input-group-prepend">


                                    </div>
                                    <input name="email" type="text"
                                        class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" required
                                        autofocus placeholder="{{ trans('global.login_email') }}"
                                        value="{{ old('email', null) }}">
                                    @if ($errors->has('email'))
                                        <div class="invalid-feedback">
                                            {{ $errors->first('email') }}
                                        </div>
                                    @endif
                                </div>

                                <label for="username">Password</label>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">

                                    </div>
                                    <input name="password" type="password"
                                        class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" required
                                        placeholder="{{ trans('global.login_password') }}">
                                    @if ($errors->has('password'))
                                        <div class="invalid-feedback">
                                            {{ $errors->first('password') }}
                                        </div>
                                    @endif
                                </div>

                                <div class="input-group mb-4">
                                    <div class="form-check checkbox">
                                        <input class="form-check-input" name="remember" type="checkbox" id="remember"
                                            style="vertical-align: middle;" />
                                        <label class="form-check-label" for="remember" style="vertical-align: middle;">
                                            {{ trans('global.remember_me') }}
                                        </label>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-6">
                                        <button type="submit" class="btn btn-primary px-4">
                                            {{ trans('global.login') }}
                                        </button>
                                    </div>
                                    <div class="col-6 text-right">
                                        <a class="btn btn-link px-0" class="text-muted">
                                            {{ trans('global.forgot_password') }}
                                        </a>
                                        <a class="btn btn-link px-0" href="" class="text-muted">
                                            SIGN UP
                                        </a>

                                    </div>




                                </div>

                            </form>
                        </div>
                        <hr>
                        <span class="font-17 m-b-5 text-center">

                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section><!-- End About Us Section -->
<!-- ======= Services Section ======= -->


<div class="container d-md-flex py-4">

    <div class="me-md-auto text-center text-md-start">
        <div class="copyright">
            &copy; <strong> {{ date('Y') }}. <span>Jimma University</span></strong>. All Rights Reserved
        </div>
        {{-- <div class="credits">
          <!-- All the links in the footer should remain intact. -->
          <!-- You can delete the links only if you purchased the pro version. -->
          <!-- Licensing information: https://bootstrapmade.com/license/ -->
          <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/company-free-html-bootstrap-template/ -->
          Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
        </div> --}}
    </div>
    <div class="social-links text-center text-md-right pt-3 pt-md-0">
        {{-- <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a> --}}
    </div>
</div>
</footer><!-- End Footer -->

<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
        class="bi bi-arrow-up-short"></i></a>

<!-- Vendor JS Files -->
<script src="frontend/assets/vendor/aos/aos.js"></script>
<script src="frontend/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="frontend/assets/vendor/glightbox/js/glightbox.min.js"></script>
<script src="frontend/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="frontend/assets/vendor/php-email-form/validate.js"></script>
<script src="frontend/assets/vendor/swiper/swiper-bundle.min.js"></script>
<script src="frontend/assets/vendor/waypoints/noframework.waypoints.js"></script>

<!-- Template Main JS File -->
<script src="frontend/assets/js/main.js"></script>

</body>

</html>
