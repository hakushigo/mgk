<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Anni Octavia Simorangkir - UI/UX Designer</title>
      <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/aos.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/line-awesome.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" />

  </head>

  <body data-bs-spy="scroll" data-bs-target=".navbar">
    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
      <div class="container flex-lg-column">
        <a class="navbar-brand mx-lg-auto mb-lg-4" href="#">
          <span class="h3 fw-bold d-block d-lg-none"
            >Anni Octavia Simorangkir</span
          >
          <img
            src="{{ asset('images/person.jpg') }}"
            class="d-none d-lg-block rounded-circle"
            alt=""
          />
        </a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarNav"
          aria-controls="navbarNav"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto flex-lg-column text-lg-center">
            <li class="nav-item">
              <a class="nav-link" href="#home">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#services">Services</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#work">Work</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#about">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#reviews">Reviews</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#blog">Blog</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#contact">Contact</a>
            </li>
            <li
            @if(auth()->check())
            <form action="{{ route('logout') }}" method="post">
             @csrf
             <a href="{{route('logout')}}" class="btn btn-brand me-3">Logout</a>
            </li>
            </form>
           @endif
          </ul>
        </div>
      </div>
    </nav>
    <!-- //NAVBAR -->

    <!-- CONTENT WRAPPER -->
    <div id="content-wrapper">
      <!-- HOME -->
      <section id="home" class="full-height px-lg-5">
        <div class="container">
          <div class="row">
            <div class="col-lg-10">
              <h1 class="display-4 fw-bold" data-aos="fade-up">
                I'M AN <span class="text-brand">UNDERGRADUATE STUDENT</span> FROM
                DEL INSTITUTE OF TECHNOLOGY
              </h1>
              <p class="lead mt-2 mb-4" data-aos="fade-up" data-aos-delay="300">
                I am Anni Octavia, And I craft high-performing and delightful
                experiences tailored and conversion-focused
              </p>
              <div data-aos="fade-up" data-aos-delay="600">
                <a href="#work" class="btn btn-brand me-3">Explore My Work</a>
                <a
                  href="https://drive.google.com/file/d/1HuF-GOgMBJ25SvvYX39ior0el7g1xJ9m/view?usp=drive_link"
                  target="_blank"
                  class="btn btn-brand me-3"
                  >My Resume</a
                >
                <a href="#" class="link-custom">Call: (233) 3454 2342</a>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- //HOME -->

      <!-- SERVICES -->
      <section id="services" class="full-height px-lg-5">
        <div class="container">
          <div class="row pb-4" data-aos="fade-up">
            <div class="col-lg-8">
              <h6 class="text-brand">SERVICES</h6>
              <h1>Services That I Provide</h1>
            </div>
          </div>

          <div class="row gy-4">
            <div class="col-md-4" data-aos="fade-up">
              <div class="service p-4 bg-base rounded-4 shadow-effect">
                <div class="iconbox rounded-4">
                  <i class="las la-feather"></i>
                </div>
                <h5 class="mt-4 mb-2">UX Design</h5>
                <p>
                  I craft high-performing and delightful experiences tailored
                  and conversion-focused
                </p>
                <a href="#" class="link-custom">Read More</a>
              </div>
            </div>

            <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
              <div class="service p-4 bg-base rounded-4 shadow-effect">
                <div class="iconbox rounded-4">
                  <i class="las la-pencil-ruler"></i>
                </div>
                <h5 class="mt-4 mb-2">Branding</h5>
                <p>
                  I craft high-performing and delightful experiences tailored
                  and conversion-focused
                </p>
                <a href="#" class="link-custom">Read More</a>
              </div>
            </div>

            <div class="col-md-4" data-aos="fade-up" data-aos-delay="600">
              <div class="service p-4 bg-base rounded-4 shadow-effect">
                <div class="iconbox rounded-4">
                  <i class="las la-laptop-code"></i>
                </div>
                <h5 class="mt-4 mb-2">Web Designing</h5>
                <p>
                  I craft high-performing and delightful experiences tailored
                  and conversion-focused
                </p>
                <a href="#" class="link-custom">Read More</a>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- SERVICES -->

      <!-- WORK -->
      <section id="work" class="full-height px-lg-5">
        <div class="container">
          <div class="row pb-4" data-aos="fade-up">
            <div class="col-lg-8">
              <h6 class="text-brand">WORK</h6>
              <h1>My Recent Projects</h1>
            </div>
          </div>

          <div class="row gy-4">
            <div class="col-md-6" data-aos="fade-up">
              <div class="card-custom rounded-4 bg-base shadow-effect">
                <div class="card-custom-image rounded-4">
                  <img
                    class="rounded-4"
                    src="{{asset('images/project-1.jpg')}}"
                    alt=""
                  />
                </div>
                <div class="card-custom-content p-4">
                  <h4>Startup Landing Page</h4>
                  <p>
                    Innovation that exceeds expectations. Astra is a true
                    template equiqed with all the elements you could ever need
                    to put together
                  </p>
                  <a href="#" class="link-custom">Read More</a>
                </div>
              </div>
            </div>

            <div class="col-md-6" data-aos="fade-up" data-aos-delay="300">
              <div class="card-custom rounded-4 bg-base shadow-effect">
                <div class="card-custom-image rounded-4">
                  <img
                    class="rounded-4"
                    src="{{asset('images/project-2.png')}}"
                    alt=""
                  />
                </div>
                <div class="card-custom-content p-4">
                  <h4>Startup Landing Page</h4>
                  <p>
                    Innovation that exceeds expectations. Astra is a true
                    template equiqed with all the elements you could ever need
                    to put together
                  </p>
                  <a href="#" class="link-custom">Read More</a>
                </div>
              </div>
            </div>

            <div class="col-md-6" data-aos="fade-up">
              <div class="card-custom rounded-4 bg-base shadow-effect">
                <div class="card-custom-image rounded-4">
                  <img
                    class="rounded-4"
                    src="{{asset('images/project-3.png')}}"
                    alt=""
                  />
                </div>
                <div class="card-custom-content p-4">
                  <h4>Startup Landing Page</h4>
                  <p>
                    Innovation that exceeds expectations. Astra is a true
                    template equiqed with all the elements you could ever need
                    to put together
                  </p>
                  <a href="#" class="link-custom">Read More</a>
                </div>
              </div>
            </div>

            <div class="col-md-6" data-aos="fade-up" data-aos-delay="300">
              <div class="card-custom rounded-4 bg-base shadow-effect">
                <div class="card-custom-image rounded-4">
                  <img
                    class="rounded-4"
                    src="{{asset('images/project-4.png')}}"
                    alt=""
                  />
                </div>
                <div class="card-custom-content p-4">
                  <h4>Startup Landing Page</h4>
                  <p>
                    Innovation that exceeds expectations. Astra is a true
                    template equiqed with all the elements you could ever need
                    to put together
                  </p>
                  <a href="#" class="link-custom">Read More</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- //WORK -->

      <!-- ABOUT -->
      <section id="about" class="full-height px-lg-5">
        <div class="container">
          <div class="text-end">
            @if(auth()->check())
            <a href="{{ route('posts.create') }}" class="btn btn-primary">Create</a>
            @endif
          </div>
            
          <div class="row pb-4" data-aos="fade-up">
            <div class="col-lg-8">
              <h6 class="text-brand">ABOUT</h6>
              <h1>My Education & Experience</h1>
            </div>
          </div>

          <div class="row gy-5">
            <div class="col-lg-6">
              <h3 class="mb-4" data-aos="fade-up" data-aos-delay="300">
                Education
              </h3>
              <div class="row gy-4">
                <div class="col-12" data-aos="fade-up" data-aos-delay="600">
                  <div class="bg-base p-4 rounded-4 shadow-effect">
                    <h4>Master of Software Engineering</h4>
                    <p class="text-brand mb-2">
                      De Mars University Venston Bay (2015 - 2020)
                    </p>
                    <p class="mb-0">
                      All we are more and design lorem ipsum dolor creativity
                      sit amet consectetur adipisicing elit
                    </p>
                  </div>
                </div>

                <div class="col-12" data-aos="fade-up" data-aos-delay="600">
                  <div class="bg-base p-4 rounded-4 shadow-effect">
                    <h4>Master of Software Engineering</h4>
                    <p class="text-brand mb-2">
                      De Mars University Venston Bay (2015 - 2020)
                    </p>
                    <p class="mb-0">
                      All we are more and design lorem ipsum dolor creativity
                      sit amet consectetur adipisicing elit
                    </p>
                  </div>
                </div>

                <div class="col-12" data-aos="fade-up" data-aos-delay="600">
                  <div class="bg-base p-4 rounded-4 shadow-effect">
                    <h4>Master of Software Engineering</h4>
                    <p class="text-brand mb-2">
                      De Mars University Venston Bay (2015 - 2020)
                    </p>
                    <p class="mb-0">
                      All we are more and design lorem ipsum dolor creativity
                      sit amet consectetur adipisicing elit
                    </p>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-6">
              <h3 class="mb-4" data-aos="fade-up" data-aos-delay="300">
                Experience
              </h3>
              <div class="row gy-4">
                <div class="col-12" data-aos="fade-up" data-aos-delay="600">
                  <div class="bg-base p-4 rounded-4 shadow-effect">
                    <h4>Applications developer</h4>
                    <p class="text-brand mb-2">Twitter (2018 - 2020)</p>
                    <p class="mb-0">
                      All we are more and design lorem ipsum dolor creativity
                      sit amet consectetur adipisicing elit
                    </p>
                  </div>
                </div>

                <div class="col-12" data-aos="fade-up" data-aos-delay="600">
                  <div class="bg-base p-4 rounded-4 shadow-effect">
                    <h4>Applications developer</h4>
                    <p class="text-brand mb-2">Twitter (2018 - 2020)</p>
                    <p class="mb-0">
                      All we are more and design lorem ipsum dolor creativity
                      sit amet consectetur adipisicing elit
                    </p>
                  </div>
                </div>

                <div class="col-12" data-aos="fade-up" data-aos-delay="600">
                  <div class="bg-base p-4 rounded-4 shadow-effect">
                    <h4>Applications developer</h4>
                    <p class="text-brand mb-2">Twitter (2018 - 2020)</p>
                    <p class="mb-0">
                      All we are more and design lorem ipsum dolor creativity
                      sit amet consectetur adipisicing elit
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- //ABOUT -->

      <!-- REVIEWS -->
      <section id="reviews" class="full-height px-lg-5">
        <div class="container">
          <div class="row pb-4" data-aos="fade-up">
            <div class="col-lg-8">
              <h6 class="text-brand">REVIEWS</h6>
              <h1>What our subscribers say</h1>
            </div>
          </div>

          <div class="row gy-4">
            <div class="col-md-4" data-aos="fade-up">
              <div class="review shadow-effect bg-base p-4 rounded-4">
                <div class="text-brand h5">
                  <i class="las la-star"></i>
                  <i class="las la-star"></i>
                  <i class="las la-star"></i>
                  <i class="las la-star"></i>
                  <i class="las la-star"></i>
                </div>
                <p class="my-3">
                  Lorem ipsum dolor sit amet consectetur, adipisicing elit. Vel
                  quae facilis fugiat molestias ab illum excepturi, qui optio
                  modi asperiores, delectus maiores!
                </p>
                <div class="person">
                  <h5 class="mb-0">Anni Simorangkir</h5>
                  <p class="mb-0">Twitter</p>
                </div>
              </div>
            </div>

            <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
              <div class="review shadow-effect bg-base p-4 rounded-4">
                <div class="text-brand h5">
                  <i class="las la-star"></i>
                  <i class="las la-star"></i>
                  <i class="las la-star"></i>
                  <i class="las la-star"></i>
                  <i class="las la-star"></i>
                </div>
                <p class="my-3">
                  Lorem ipsum dolor sit amet consectetur, adipisicing elit. Vel
                  quae facilis fugiat molestias ab illum excepturi, qui optio
                  modi asperiores, delectus maiores!
                </p>
                <div class="person">
                  <h5 class="mb-0">Anni Simorangkir</h5>
                  <p class="mb-0">Twitter</p>
                </div>
              </div>
            </div>

            <div class="col-md-4" data-aos="fade-up" data-aos-delay="600">
              <div class="review shadow-effect bg-base p-4 rounded-4">
                <div class="text-brand h5">
                  <i class="las la-star"></i>
                  <i class="las la-star"></i>
                  <i class="las la-star"></i>
                  <i class="las la-star"></i>
                  <i class="las la-star"></i>
                </div>
                <p class="my-3">
                  Lorem ipsum dolor sit amet consectetur, adipisicing elit. Vel
                  quae facilis fugiat molestias ab illum excepturi, qui optio
                  modi asperiores, delectus maiores!
                </p>
                <div class="person">
                  <h5 class="mb-0">Anni Simorangkir</h5>
                  <p class="mb-0">Twitter</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- //REVIEWS -->

      <!-- BLOG -->
      <section id="blog" class="full-height px-lg-5">
        <div class="container">
          <div class="row pb-4" data-aos="fade-up">
            <div class="col-lg-8">
              <h6 class="text-brand">BLOG</h6>
              <h1>My BLog Posts</h1>
            </div>
          </div>

          <div class="row gy-4">
            <div class="col-md-4" data-aos="fade-up">
              <div class="card-custom rounded-4 bg-base shadow-effect">
                <div class="card-custom-image rounded-4">
                  <img
                    class="rounded-4"
                    src="{{asset('images/blog-post-1.jpg')}}"
                    alt=""
                  />
                </div>
                <div class="card-custom-content p-4">
                  <p class="text-brand mb-2">20 Dec, 2022</p>
                  <h5 class="mb-4">
                    Design a creative landing page using Bootstrap 5
                  </h5>
                  <a href="#" class="link-custom">Read More</a>
                </div>
              </div>
            </div>

            <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
              <div class="card-custom rounded-4 bg-base shadow-effect">
                <div class="card-custom-image rounded-4">
                  <img
                    class="rounded-4"
                    src="{{asset('images/blog-post-2.jpg')}}"
                    alt=""
                  />
                </div>
                <div class="card-custom-content p-4">
                  <p class="text-brand mb-2">20 Dec, 2022</p>
                  <h5 class="mb-4">
                    Design a creative landing page using Bootstrap 5
                  </h5>
                  <a href="#" class="link-custom">Read More</a>
                </div>
              </div>
            </div>

            <div class="col-md-4" data-aos="fade-up" data-aos-delay="600">
              <div class="card-custom rounded-4 bg-base shadow-effect">
                <div class="card-custom-image rounded-4">
                  <img
                    class="rounded-4"
                    src="{{asset('images/blog-post-3.jpg')}}"
                    alt=""
                  />
                </div>
                <div class="card-custom-content p-4">
                  <p class="text-brand mb-2">20 Dec, 2022</p>
                  <h5 class="mb-4">
                    Design a creative landing page using Bootstrap 5
                  </h5>
                  <a href="#" class="link-custom">Read More</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- //BLOG -->

      <!-- CONTACT -->
      <section id="contact" class="full-height px-lg-5">
        <div class="container">
          <div class="row justify-content-center text-center">
            <div class="col-lg-8 pb-4" data-aos="fade-up">
              <h6 class="text-brand">CONTACT</h6>
              <h1>Interested in working together? Let's talk</h1>
            </div>

            <div class="col-lg-8" data-aos="fade-up" data-aos-delay="300">
              <form action="#" class="row g-lg-3 gy-3">
                <div class="form-group col-md-6">
                  <input
                    type="text"
                    class="form-control"
                    placeholder="Enter your name"
                  />
                </div>
                <div class="form-group col-md-6">
                  <input
                    type="email"
                    class="form-control"
                    placeholder="Enter your email"
                  />
                </div>
                <div class="form-group col-12">
                  <input
                    type="text"
                    class="form-control"
                    placeholder="Enter subject"
                  />
                </div>
                <div class="form-group col-12">
                  <textarea
                    name=""
                    rows="4"
                    class="form-control"
                    placeholder="Enter your message"
                  ></textarea>
                </div>
                <div class="form-group col-12 d-grid">
                  <button type="submit" class="btn btn-brand">
                    Contact me
                  </button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </section>
      <!-- //CONTACT -->

      <!-- FOOTER -->
      <footer class="py-5 px-lg-5">
        <div class="container">
          <div class="row gy-4 justify-content-between">
            <div class="col-auto">
              <p class="mb-0">
                Designed by <a href="#" class="fw-bold">Anni Octavia</a>
              </p>
            </div>
            <div class="col-auto">
              <div class="social-icons">
                <a href="#"><i class="lab la-twitter"></i></a>
                <a href="#"><i class="lab la-instagram"></i></a>
                <a href="#"><i class="lab la-dribbble"></i></a>
                <a href="#"><i class="lab la-github"></i></a>
              </div>
            </div>
          </div>
        </div>
      </footer>
      <!-- //FOOTER -->
    </div>
    <!-- //CONTENT WRAPPER -->

    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('js/aos.js') }}"></script>
    <script src="{{ asset('js/main.js')}}"></script>
  </body>
</html>