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
                     style="background-image: url({{ asset('assets/frontend/img/slide/slide-1.jpg') }} )">
                    <div class="container">
                        <h2>Welcome to <span>Medico</span></h2>
                        <p>Medico is a follow up management system build by student of HTTTC bambili for fulfillment of
                            DIPET I</p>
                        <a href="#about" class="btn-get-started scrollto">Read More</a>
                    </div>
                </div>

                <!-- Slide 2 -->
                <div class="carousel-item"
                     style="background-image: url({{ asset('assets/frontend/img/slide/slide-2.jpg') }})">
                    <div class="container">
                        <h2>Why this system</h2>
                        <p>The main target of this project is to minimize time spend in hospital by patient.</p>
                        <a href="#about" class="btn-get-started scrollto">Read More</a>
                    </div>
                </div>

                <!-- Slide 3 -->
                <div class="carousel-item"
                     style="background-image: url({{ asset('assets/frontend/img/slide/slide-3.jpg') }})">
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

        <!-- ======= Cta Section ======= -->
        <section id="cta" class="cta">
            <div class="container" data-aos="zoom-in">

                <div class="text-center">
                    <h3>In an emergency? Need help now?</h3>
                    <p> Click and fill the form to make a quit appointment with one of ours thousand doctors</p>
                    <a class="cta-btn scrollto" href="#appointment">Make an Appointment</a>
                </div>

            </div>
        </section><!-- End Cta Section -->

        <!-- ======= About Us Section ======= -->
        <section id="about" class="about">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>About Us</h2>
                    <p>Who are we ?</p>
                </div>

                <div class="row">
                    <div class="col-lg-6" data-aos="fade-right">
                        <img src="{{ asset('assets/frontend/img/about.jpg') }}" class="img-fluid" alt="">
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
        <section id="appointment" class="appointment section-bg">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Make an Appointment</h2>
                    <p>Fill the form to make an appointment with one of ours thousand specialist doctor.</p>
                </div>

                <form action="" method="post" role="form" class="form" data-aos="fade-up"
                      data-aos-delay="100">
                    @csrf
                    <div class="row">
                        <div class="col-md-4 form-group">
                            <label for="name">Name:</label><span style="color: red">  *</span>
                            <input type="text" name="name" class="form-control" id="name" value="{{ old('name') }}"
                                   placeholder="Your Name">
                        </div>
                        <div class="col-md-4 form-group mt-3 mt-md-0">
                            <label for="email">Email</label><span style="color: red">  *</span>
                            <input type="email" class="form-control" name="email" id="email" value="{{ old('email') }}"
                                   placeholder="Your Email">
                        </div>
                        <div class="col-md-4 form-group mt-3 mt-md-0">
                            <label for="phone">Phone Number</label><span style="color: red">  *</span>
                            <input type="tel" class="form-control" name="phone" value="{{ old('phone') }}" id="phone"
                                   placeholder="Your Phone">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 form-group mt-3">
                            <label for="date">Date and time</label><span style="color: red">  *</span>
                            <input type="datetime-local" name="date" class="form-control datepicker" id="date"
                                   value="{{ old('date') }}" placeholder="Appointment Date">
                        </div>

                        <div class="col-md-4 form-group mt-3">
                            <label for="doctor">Select the doctor</label><span style="color: red">  *</span>
                            <select name="doctor" id="doctor" class="form-select">
                                <option value="">Select Doctor</option>
                                <option value="Doctor 1">Doctor 1</option>
                                <option value="Doctor 2">Doctor 2</option>
                                <option value="Doctor 3">Doctor 3</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group mt-3">
                        <textarea class="form-control" name="message" rows="5"
                                  placeholder="Message (Optional)">{{ old('message') }}</textarea>
                    </div>

                    <div class="text-center pt-3">
                        <button type="submit" class=" btn btn-warning">Make an Appointment</button>
                    </div>
                </form>

            </div>
        </section><!-- End Appointment Section -->

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

        <!-- ======= Doctors Section ======= -->
        <section id="doctors" class="doctors section-bg">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Doctors</h2>
                    <p>Some of ours Doctors</p>
                </div>

                <div class="row">

                    <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                        <div class="member" data-aos="fade-up" data-aos-delay="100">
                            <div class="member-img">
                                <img src="{{ asset('assets/frontend/img/doctors/doctors-1.jpg') }}" class="img-fluid"
                                     alt="">
                                <div class="social">
                                    <a href=""><i class="bi bi-twitter"></i></a>
                                    <a href=""><i class="bi bi-facebook"></i></a>
                                    <a href=""><i class="bi bi-instagram"></i></a>
                                    <a href=""><i class="bi bi-linkedin"></i></a>
                                </div>
                            </div>
                            <div class="member-info">
                                <h4>Walter White</h4>
                                <span>Chief Medical Officer</span>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                        <div class="member" data-aos="fade-up" data-aos-delay="200">
                            <div class="member-img">
                                <img src="{{ asset('assets/frontend/img/doctors/doctors-2.jpg') }}" class="img-fluid"
                                     alt="">
                                <div class="social">
                                    <a href=""><i class="bi bi-twitter"></i></a>
                                    <a href=""><i class="bi bi-facebook"></i></a>
                                    <a href=""><i class="bi bi-instagram"></i></a>
                                    <a href=""><i class="bi bi-linkedin"></i></a>
                                </div>
                            </div>
                            <div class="member-info">
                                <h4>Sarah Jhonson</h4>
                                <span>Anesthesiologist</span>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                        <div class="member" data-aos="fade-up" data-aos-delay="300">
                            <div class="member-img">
                                <img src="{{ asset('assets/frontend/img/doctors/doctors-3.jpg') }}" class="img-fluid"
                                     alt="">
                                <div class="social">
                                    <a href=""><i class="bi bi-twitter"></i></a>
                                    <a href=""><i class="bi bi-facebook"></i></a>
                                    <a href=""><i class="bi bi-instagram"></i></a>
                                    <a href=""><i class="bi bi-linkedin"></i></a>
                                </div>
                            </div>
                            <div class="member-info">
                                <h4>William Anderson</h4>
                                <span>Cardiology</span>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                        <div class="member" data-aos="fade-up" data-aos-delay="400">
                            <div class="member-img">
                                <img src="{{ asset('assets/frontend/img/doctors/doctors-4.jpg') }}" class="img-fluid"
                                     alt="">
                                <div class="social">
                                    <a href=""><i class="bi bi-twitter"></i></a>
                                    <a href=""><i class="bi bi-facebook"></i></a>
                                    <a href=""><i class="bi bi-instagram"></i></a>
                                    <a href=""><i class="bi bi-linkedin"></i></a>
                                </div>
                            </div>
                            <div class="member-info">
                                <h4>Amanda Jepson</h4>
                                <span>Neurosurgeon</span>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </section><!-- End Doctors Section -->

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
                        <form action="" method="post" role="form" class="php-email-form">
                            @csrf
                            <div class="row">
                                <div class="col form-group">
                                    <input type="text" name="name" class="form-control" id="name"
                                           placeholder="Your Name">
                                </div>
                                <div class="col form-group mt-3">
                                    <input type="email" class="form-control" name="email" id="email"
                                           placeholder="Your Email">
                                </div>
                            </div>
                            <div class="form-group mt-3">
                                <input type="text" class="form-control" name="subject" id="subject"
                                       placeholder="Subject">
                            </div>
                            <div class="form-group mt-3">
                                <textarea class="form-control" name="message" rows="5" placeholder="Message"
                                          required></textarea>
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
