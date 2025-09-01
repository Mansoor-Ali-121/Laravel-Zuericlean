@extends('webtemp')

@section('title', 'Blogs')

@include('links.css')
@section('styles')
    @yield('blogs-styles')
@endsection

@section('main_section')

    @include('partials.commonNav')



    <!-- Blogs page hero section -->
    <section class="latest-blogs-page-hero-section">
        <h6 class="navigation-text">Home > Blog</h6>
        <h1>Latest <span class="txt-background-color bg-white"> Blog</span> Posts</h1>
    </section>

    <section class="latest-blogs-section">
        <div class="letest-blogs-section-left-section">
            <div class="letest-blogs-section-left-section-container">

                <a href="#" class="latest-blogs-card">
                    <img src="{{asset('front/assets/Images/blogs-images/blog1.png')}}" alt="Blog 1" />
                    <h4>
                        Say Goodbye to Dust – and Hello to 20% Off! | ZueriClean...
                    </h4>
                    <p>
                        Book expert cleaning services in Zurich, Zug & nearby areas with
                        ZueriClean. End-of-tenancy, deep cleaning, carpet & office
                        cleaning. Get 20% OFF today – no code needed!
                    </p>
                </a>
                <a href="#" class="latest-blogs-card">
                    <img src="{{asset('front/assets/Images/blogs-images/blog1.png')}}" alt="Blog 1" />
                    <h4>
                        Say Goodbye to Dust – and Hello to 20% Off! | ZueriClean...
                    </h4>
                    <p>
                        Book expert cleaning services in Zurich, Zug & nearby areas with
                        ZueriClean. End-of-tenancy, deep cleaning, carpet & office
                        cleaning. Get 20% OFF today – no code needed!
                    </p>
                </a>
                <a href="#" class="latest-blogs-card">
                    <img src="{{asset('front/assets/Images/blogs-images/blog1.png')}}" alt="Blog 1" />
                    <h4>
                        Say Goodbye to Dust – and Hello to 20% Off! | ZueriClean...
                    </h4>
                    <p>
                        Book expert cleaning services in Zurich, Zug & nearby areas with
                        ZueriClean. End-of-tenancy, deep cleaning, carpet & office
                        cleaning. Get 20% OFF today – no code needed!
                    </p>
                </a>
                <a href="#" class="latest-blogs-card">
                    <img src="{{asset('front/assets/Images/blogs-images/blog1.png')}}" alt="Blog 1" />
                    <h4>
                        Say Goodbye to Dust – and Hello to 20% Off! | ZueriClean...
                    </h4>
                    <p>
                        Book expert cleaning services in Zurich, Zug & nearby areas with
                        ZueriClean. End-of-tenancy, deep cleaning, carpet & office
                        cleaning. Get 20% OFF today – no code needed!
                    </p>
                </a>
                <a href="#" class="latest-blogs-card">
                    <img src="{{asset('front/assets/Images/blogs-images/blog1.png')}}" alt="Blog 1" />
                    <h4>
                        Say Goodbye to Dust – and Hello to 20% Off! | ZueriClean...
                    </h4>
                    <p>
                        Book expert cleaning services in Zurich, Zug & nearby areas with
                        ZueriClean. End-of-tenancy, deep cleaning, carpet & office
                        cleaning. Get 20% OFF today – no code needed!
                    </p>
                </a>
                <a href="#" class="latest-blogs-card">
                    <img src="{{asset('front/assets/Images/blogs-images/blog1.png')}}" alt="Blog 1" />
                    <h4>
                        Say Goodbye to Dust – and Hello to 20% Off! | ZueriClean...
                    </h4>
                    <p>
                        Book expert cleaning services in Zurich, Zug & nearby areas with
                        ZueriClean. End-of-tenancy, deep cleaning, carpet & office
                        cleaning. Get 20% OFF today – no code needed!
                    </p>
                </a>
                <a href="#" class="latest-blogs-card">
                    <img src="{{asset('front/assets/Images/blogs-images/blog1.png')}}" alt="Blog 1" />
                    <h4>
                        Say Goodbye to Dust – and Hello to 20% Off! | ZueriClean...
                    </h4>
                    <p>
                        Book expert cleaning services in Zurich, Zug & nearby areas with
                        ZueriClean. End-of-tenancy, deep cleaning, carpet & office
                        cleaning. Get 20% OFF today – no code needed!
                    </p>
                </a>
                <a href="#" class="latest-blogs-card">
                    <img src="{{asset('front/assets/Images/blogs-images/blog1.png')}}" alt="Blog 1" />
                    <h4>
                        Say Goodbye to Dust – and Hello to 20% Off! | ZueriClean...
                    </h4>
                    <p>
                        Book expert cleaning services in Zurich, Zug & nearby areas with
                        ZueriClean. End-of-tenancy, deep cleaning, carpet & office
                        cleaning. Get 20% OFF today – no code needed!
                    </p>
                </a>
                <a href="#" class="latest-blogs-card">
                    <img src="{{asset('front/assets/Images/blogs-images/blog1.png')}}" alt="Blog 1" />
                    <h4>
                        Say Goodbye to Dust – and Hello to 20% Off! | ZueriClean...
                    </h4>
                    <p>
                        Book expert cleaning services in Zurich, Zug & nearby areas with
                        ZueriClean. End-of-tenancy, deep cleaning, carpet & office
                        cleaning. Get 20% OFF today – no code needed!
                    </p>
                </a>

                <!-- Repeat the same structure for other cards -->
            </div>

        </div>
        <div class="letest-blogs-section-right-section">
            <!-- sidebar popular services-->
            <div class="latest-blogs-section-sidebar">
                <h3 class="txt-background-color">Popular Services</h3>
                <div class="sidebar-card">
                    <ul>
                        <li class="txt-background-color"><a href="#">Office Cleaning</a></li>
                        <li class="txt-background-color"><a href="#">Move-out Cleaning</a></li>
                        <li class="txt-background-color"><a href="#">Mattress Cleaning</a></li>
                        <li class="txt-background-color"><a href="#">Carpet Cleaning</a></li>
                        <li class="txt-background-color"><a href="#">Residential Cleaning</a></li>
                        <li class="txt-background-color"><a href="#">Sofa Cleaning</a></li>
                    </ul>
                </div>
                <h2 class="txt-background-color">Get in Touch</h2>
                <div> <span class="txt-background-color">Email:</span>  info@zuericlean.com</div>
                <div> <span class="txt-background-color">Phone:</span> +41 76 413 6183</div>
            </div>
        </div>
    </section>


@endsection
