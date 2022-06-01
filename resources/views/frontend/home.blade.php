@extends('layouts.Frontend')

@section('title','Home')

@section('hero')
    <!-- ======= Hero Section ======= -->
    <section id="hero">
        <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

            <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

            <div class="carousel-inner" role="listbox">

                <!-- Slide 1 -->
                <div class="carousel-item active"
                     style="background-image: url({{ asset('images/7.jpg') }} )">
                    <div class="container">
                        <h2>Welcome to <span>Follow-UP</span></h2>
                        <p>Follow-UP is a follow up management system build by student of HTTTC bambili for fulfillment of
                            DIPET I</p>
                        <a href="#about" class="btn-get-started scrollto">Read More</a>
                    </div>
                </div>

                <!-- Slide 2 -->
                <div class="carousel-item"
                     style="background-image: url({{ asset('images/2.jpg') }})">
                    <div class="container">
                        <h2>Why this system</h2>
                        <p>The main target of this project is to minimize time spend in hospital by patient.</p>
                        <a href="#about" class="btn-get-started scrollto">Read More</a>
                    </div>
                </div>

                <!-- Slide 3 -->
                <div class="carousel-item"
                     style="background-image: url({{ asset('images/6.jpg') }})">
                    <div class="container">
                        <h2>Feature of this project:</h2>

                        <ul class="list-unstyled">
                            <li>Full management of a patient</li>
                            <li>Full follow up of a patient</li>
                            <li>Full time management of a patient</li>
                        </ul>
                        <a href="#about" class="btn-get-started scrollto">Read More</a>
                    </div>
                </div>

            </div>

            <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
                <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
            </a>

            <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
                <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
            </a>

        </div>
    </section><!-- End Hero -->
@endsection

@section('content')
    <main id="main">


        <main class="py-4">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        @if(session()->has('message'))
                            @if(session()->has('error'))
                                <div class="alert alert-danger" role="alert">
                                    {{ session()->get('message') }}
                                </div>
                            @else
                                <div class="alert alert-success" role="alert">
                                    {{ session()->get('message') }}
                                </div>
                            @endif
                        @endif
                    </div>
                </div>
            </div>
        </main>

        <!-- ======= About Us Section ======= -->
        <section id="about" class="about">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>About Us</h2>
                    <p>Who are we ?</p>
                </div>

                <div class="row">
                    <div class="col-lg-6" data-aos="fade-right">
                        <img src="{{ asset('images/3.jpg') }}" class="img-fluid" alt="">
                    </div>
                    <div class="col-lg-6 pt-4 pt-lg-0 content" data-aos="fade-left">
                        <h3 class="text-center">HTTTC BAMBILI</h3>
                        <p class="fst-italic">
                            our feaure are:
                        </p>
                        <ul>
                            <li><i class="bi bi-check-circle"></i> Full management of a patient
                            </li>
                            <li><i class="bi bi-check-circle"></i> Full Follow up of the patient
                            </li>
                            <li><i class="bi bi-check-circle"></i> Follow up your self too using our dashboard
                            </li>
                            <li><i class="bi bi-check-circle"></i> Make and appointment from anywhere you are
                            </li>
                        </ul>
                        <p>
                            A part of those feature we are also make a quit information to all ours patient
                        </p>
                    </div>
                </div>

            </div>
        </section><!-- End About Us Section -->

        <!-- ======= Counts Section ======= -->
        <section id="counts" class="counts">
            <div class="container" data-aos="fade-up">

                <div class="row no-gutters">

                    <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
                        <div class="count-box">
                            <i class="fas fa-user-md"></i>
                            <span data-purecounter-start="0" data-purecounter-end="85" data-purecounter-duration="1"
                                  class="purecounter"></span>

                            <p><strong>Doctors</strong></p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
                        <div class="count-box">
                            <i class="far fa-hospital"></i>
                            <span data-purecounter-start="0" data-purecounter-end="10" data-purecounter-duration="1"
                                  class="purecounter"></span>
                            <p><strong>Departments</strong></p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
                        <div class="count-box">
                            <i class="fas fa-flask"></i>
                            <span data-purecounter-start="0" data-purecounter-end="14" data-purecounter-duration="1"
                                  class="purecounter"></span>
                            <p><strong>Research Lab</strong></p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
                        <div class="count-box">
                            <i class="fas fa-award"></i>
                            <span data-purecounter-start="100" data-purecounter-end="5" data-purecounter-duration="1"
                                  class="purecounter"></span>
                            <p><strong>Awards</strong> receive</p>
                        </div>
                    </div>

                </div>

            </div>
        </section><!-- End Counts Section -->

        <!-- ======= Appointment Section ======= -->


        <!-- ======= Departments Section ======= -->
        <section id="departments" class="departments">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Departments</h2>
                    <p>Here are some department available</p>
                </div>

                <div class="row" data-aos="fade-up" data-aos-delay="100">
                    <div class="col-lg-4 mb-5 mb-lg-0">
                        <ul class="nav nav-tabs flex-column">
                            <li class="nav-item">
                                <a class="nav-link active show" data-bs-toggle="tab" data-bs-target="#tab-1">
                                    <h4>Cardiology</h4>
                                    <p>Quis excepturi porro totam sint earum quo nulla perspiciatis eius.</p>
                                </a>
                            </li>
                            <li class="nav-item mt-2">
                                <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-2">
                                    <h4>Neurology</h4>
                                    <p>Voluptas vel esse repudiandae quo excepturi.</p>
                                </a>
                            </li>
                            <li class="nav-item mt-2">
                                <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-3">
                                    <h4>Hepatology</h4>
                                    <p>Velit veniam ipsa sit nihil blanditiis mollitia natus.</p>
                                </a>
                            </li>
                            <li class="nav-item mt-2">
                                <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-4">
                                    <h4>Pediatrics</h4>
                                    <p>Ratione hic sapiente nostrum doloremque illum nulla praesentium id</p>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-8">
                        <div class="tab-content">
                            <div class="tab-pane active show" id="tab-1">
                                <h3>Cardiology</h3>
                                <p class="fst-italic">Qui laudantium consequatur laborum sit qui ad sapiente dila parde
                                    sonata raqer a videna mareta paulona marka</p>
                                <img src="{{ asset('assets/frontend/img/departments-1.jpg') }}" alt=""
                                     class="img-fluid">
                                <p>Et nobis maiores eius. Voluptatibus ut enim blanditiis atque harum sint. Laborum eos
                                    ipsum ipsa odit magni. Incidunt hic ut molestiae aut qui. Est repellat minima
                                    eveniet eius et quis magni nihil. Consequatur dolorem quaerat quos qui similique
                                    accusamus nostrum rem vero</p>
                            </div>
                            <div class="tab-pane" id="tab-2">
                                <h3>Neurology</h3>
                                <p class="fst-italic">Qui laudantium consequatur laborum sit qui ad sapiente dila parde
                                    sonata raqer a videna mareta paulona marka</p>
                                <img src="{{ asset('assets/frontend/img/departments-2.jpg') }}" alt=""
                                     class="img-fluid">
                                <p>Et nobis maiores eius. Voluptatibus ut enim blanditiis atque harum sint. Laborum eos
                                    ipsum ipsa odit magni. Incidunt hic ut molestiae aut qui. Est repellat minima
                                    eveniet eius et quis magni nihil. Consequatur dolorem quaerat quos qui similique
                                    accusamus nostrum rem vero</p>
                            </div>
                            <div class="tab-pane" id="tab-3">
                                <h3>Hepatology</h3>
                                <p class="fst-italic">Qui laudantium consequatur laborum sit qui ad sapiente dila parde
                                    sonata raqer a videna mareta paulona marka</p>
                                <img src="{{ asset('assets/frontend/img/departments-3.jpg') }}" alt=""
                                     class="img-fluid">
                                <p>Et nobis maiores eius. Voluptatibus ut enim blanditiis atque harum sint. Laborum eos
                                    ipsum ipsa odit magni. Incidunt hic ut molestiae aut qui. Est repellat minima
                                    eveniet eius et quis magni nihil. Consequatur dolorem quaerat quos qui similique
                                    accusamus nostrum rem vero</p>
                            </div>
                            <div class="tab-pane" id="tab-4">
                                <h3>Pediatrics</h3>
                                <p class="fst-italic">Qui laudantium consequatur laborum sit qui ad sapiente dila parde
                                    sonata raqer a videna mareta paulona marka</p>
                                <img src="{{ asset('assets/frontend/img/departments-4.jpg') }}" alt=""
                                     class="img-fluid">
                                <p>Et nobis maiores eius. Voluptatibus ut enim blanditiis atque harum sint. Laborum eos
                                    ipsum ipsa odit magni. Incidunt hic ut molestiae aut qui. Est repellat minima
                                    eveniet eius et quis magni nihil. Consequatur dolorem quaerat quos qui similique
                                    accusamus nostrum rem vero</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section><!-- End Departments Section -->


        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact">
            <div class="container">

                <div class="section-title">
                    <h2>Contact</h2>
                    <p>Get in touch with us.</p>
                </div>

            </div>

            <div>
                <iframe style="border:0; width: 100%; height: 350px;"
                        src="https://maps.google.com/maps?q=bamenda,%20htttc&t=&z=13&ie=UTF8&iwloc=&output=embed"
                        frameborder="0" allowfullscreen></iframe>
            </div>

            <div class="container">

                <div class="row mt-5">

                    <div class="col-lg-6">

                        <div class="row">
                            <div class="col-md-12">
                                <div class="info-box">
                                    <i class="bx bx-map"></i>
                                    <h3>Our Address</h3>
                                    <p>Bamenda, North West Cameroon</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="info-box mt-4">
                                    <i class="bx bx-envelope"></i>
                                    <h3>Email Us</h3>
                                    <p>info@example.com<br>contact@example.com</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="info-box mt-4">
                                    <i class="bx bx-phone-call"></i>
                                    <h3>Call Us</h3>
                                    <p>+237 698 481 560<br>+237 695 450 152</p>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="col-lg-6">
                        <form action="{{ route('message.store') }}" method="post" role="form" >
                            @csrf
                            <div class="row">
                                <div class="col form-group">
                                    <label for="name">Your Name</label><span style="color: red">  *</span>
                                    <input type="text" name="name_ct"
                                           class="form-control @error('name_ct') is-invalid @enderror" id="name"
                                           value="{{ old('name_ct') }}"
                                           placeholder="Your Name">

                                    @error('name_ct')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="col form-group">
                                    <label for="email">Your Email</label>
                                    <input type="email" class="form-control @error('email_ct') is-invalid @enderror"
                                           name="email_ct" id="email"
                                           value="{{ old('email_ct') }}"
                                           placeholder="Your Email">

                                    @error('email_ct')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row">
                                <div class="col form-group mt-3">
                                    <label for="phone">Your Phone Number</label><span style="color: red">  *</span>
                                    <input type="tel" name="phone_ct"
                                           class="form-control @error('phone_ct') is-invalid @enderror" id="phone"
                                           placeholder="Your Phone Number"
                                           value="{{ old('phone_ct') }}"
                                    >
                                    @error('phone_ct')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group mt-3">
                                <label for="subject">Subject of this message</label><span style="color: red">  *</span>
                                <input type="text" class="form-control @error('subject') is-invalid @enderror"
                                       name="subject" id="subject"
                                       value="{{ old('subject') }}"
                                       placeholder="Subject">
                                @error('subject')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group mt-3">
                                <label for="message">Enter your Message for we here</label><span
                                    style="color: red">  *</span>
                                <textarea id="message" class="form-control" name="message_ct" rows="5"
                                          placeholder="Message"
                                          value="{{ old('message') }}"
                                          required></textarea>
                                @error('message_ct')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="text-center pt-2">
                                <button class="btn btn-primary" type="submit">Send Message</button>
                            </div>
                        </form>
                    </div>

                </div>

            </div>
        </section><!-- End Contact Section -->

        <!-- ======= Appointment Section ======= -->
        <section id="login" class="appointment section-bg">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Login</h2>
                    <p>Log in the system to access your personal dashboard</p>
                </div>

                <form action="{{ route('login') }}" method="post" role="form" class="form" data-aos="fade-up"
                      data-aos-delay="100">
                    @csrf
                    <div class=" d-flex justify-content-center">
                        <div>
                            <div class="col-md-12 form-group mt-3 mt-md-0">
                                <label for="email">Email</label><span style="color: red">  *</span>
                                <input type="email" class="form-control @error('email') is-invalid @enderror"
                                       name="email" id="email"
                                       value="{{ old('email') }}"
                                       placeholder="Your Email">

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="col-md-12 form-group mt-3">
                                <label for="password">Enter your password</label><span style="color: red">  *</span>
                                <input class="form-control @error('password') is-invalid @enderror" id="password"
                                       type="password"
                                       name="password"
                                       placeholder="Enter your password here">
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="text-center pt-3">
                        <button type="submit" class=" btn btn-warning">Login</button>
                    </div>

                </form>

            </div>
        </section><!-- End Appointment Section -->

    </main><!-- End #main -->

@endsection
