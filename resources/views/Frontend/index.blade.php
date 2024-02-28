@php
$settingData = settings();
@endphp

<!DOCTYPE html>
<html lang="en-US">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>
    <meta charset="UTF-8" />

    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1" />


    <link rel="stylesheet" href="https://nooni-be87.kxcdn.com/nooni-fashion/wp-content/cache/minify/e7801.css"
        media="all" />
    <style id='woocommerce-inline-inline-css' type='text/css'>
    .woocommerce form .form-row .required {
        visibility: visible;
    }

    @media screen and (max-width: 480px) {
        .imageHeight {
            min-height: 20vh !important;
        }

        .card-img-top {
            height: 350px !important;

        }

        .cardProducts {
            width: 40% !important;
            height: 350px !important;
            justify-content: space-between;
            border: none !important;
        }

        .text-xs-center {
            text-align: center;
        }

        .row {
            justify-content: space-evenly;
        }
    }

    @media screen and (min-width: 480px) {

        .imageHeight {
            height: 50vh !important;
        }

        .card-img-top {
            height: 350px !important;
        }

        .cardProducts {
            width: 20% !important;
            height: 350px !important;
            justify-content: space-between;
            border: none !important;
        }

        .addToCardBtn {
            background: #000 !important;
            color: white !important;
        }

        .addToCardBtn:hover {
            background-color: #E33E3C !important;
            color: #E33E3C;
        }
    }
    </style>

    <link rel="stylesheet" href="{{ asset('frontend/css/page.main2.css') }}" media="all" />
    <link rel="stylesheet" href="{{ asset('frontend/css/page.main.css') }}" media="all" />
    <script src="{{ asset('frontend/js/index.page7.js') }}"></script>
</head>

<body
    class="home page-template-default page page-id-5327 theme-nooni woocommerce-no-js wide header-v4 product-label-rectangle product-hover-vertical-style ts_desktop e-lazyload elementor-default elementor-kit-12 elementor-page elementor-page-5327">

    <div id="page" class="hfeed site">


        <!-- Page Slider -->


        @include('Frontend.layouts.header')


        <div id="main" class="wrapper">
            <!-- Page slider -->

            <div class="">

                <!-- Left Sidebar -->


                <!-- Main Content -->
                <div id="main-content">
                    <div id="primary" class="site-content">

                        <div data-elementor-type="wp-page" data-elementor-id="5327" class="elementor elementor-5327">
                            
                           <!-- slider section start -->
                            <div class="main-slider">
                                <div id="carouselExampleIndicators2" class="carousel slide">
                                    <div class="carousel-indicators indicatorCarousel">
                                        <button type="button" data-bs-target="#carouselExampleIndicators2"
                                            data-bs-slide-to="0" class="active" aria-current="true"
                                            aria-label="Slide 1"></button>
                                        <button type="button" data-bs-target="#carouselExampleIndicators2"
                                            data-bs-slide-to="1" aria-label="Slide 2"></button>
                                        <button type="button" data-bs-target="#carouselExampleIndicators2"
                                            data-bs-slide-to="2" aria-label="Slide 3"></button>
                                    </div>
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <img src="{{asset('slider/1.jpg')}}" class="main-slider w-100">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="{{asset('slider/2.jpg')}}" class="main-slider w-100">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="{{asset('slider/3.jpg')}}" class="main-slider w-100">
                                        </div>
                                    </div>
                                    <button class="carousel-control-prev" type="button"
                                        data-bs-target="#carouselExampleIndicators2" data-bs-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Previous</span>
                                    </button>
                                    <button class="carousel-control-next" type="button"
                                        data-bs-target="#carouselExampleIndicators2" data-bs-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Next</span>
                                    </button>
                                </div>
                            </div>
                            <!-- slider section End -->
                        </div>



                        <div class="container">
                            <div class="row py-5">
                                <d class="flex text-md-left text-xs-center mt-5 mb-3">
                                    <h4><u>OUR PRODUCTS</u></h4>
                                </d>
                                @foreach ($productList as $product)
                                @php
                                $images = json_decode($product->image);
                                @endphp
                                <div class="row">
                                    <div class="col-lg-3 col-md-6 col-sm-6 col-6">
                                        <div class="card cardProducts ">
                                            <img class="card-img-top" src="{{ $images[0] }}" alt="Card image cap">
                                            <div class="addButton text-center">
                                                <a style="border-radius: 0px !important;"
                                                    onclick="addTocart({{ $product->productOne->id ?? null }})"
                                                    class="btn addToCardBtn">Add to cart</a>
                                            </div>
                                            <div class="cardContent">
                                                <h6 class="card-title">Card title</h6>
                                                <div class="productPrice">
                                                    <span class="spanPrice">$259 - $269</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-6 col-6">
                                        <div class="card cardProducts ">
                                            <img class="card-img-top" src="{{ $images[0] }}" alt="Card image cap">
                                            <div class="addButton text-center">
                                                <a style="border-radius: 0px !important;"
                                                    onclick="addTocart({{ $product->productOne->id ?? null }})"
                                                    class="btn addToCardBtn">Add to cart</a>
                                            </div>
                                            <div class="cardContent">
                                                <h6 class="card-title">Card title</h6>
                                                <div class="productPrice">
                                                    <span class="spanPrice">$259 - $269</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-6 col-6">
                                        <div class="card cardProducts ">
                                            <img class="card-img-top" src="{{ $images[0] }}" alt="Card image cap">
                                            <div class="addButton text-center">
                                                <a style="border-radius: 0px !important;"
                                                    onclick="addTocart({{ $product->productOne->id ?? null }})"
                                                    class="btn addToCardBtn">Add to cart</a>
                                            </div>
                                            <div class="cardContent">
                                                <h6 class="card-title">Card title</h6>
                                                <div class="productPrice">
                                                    <span class="spanPrice">$259 - $269</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-6 col-6">
                                        <div class="card cardProducts ">
                                            <img class="card-img-top" src="{{ $images[0] }}" alt="Card image cap">
                                            <div class="addButton text-center">
                                                <a style="border-radius: 0px !important;"
                                                    onclick="addTocart({{ $product->productOne->id ?? null }})"
                                                    class="btn addToCardBtn">Add to cart</a>
                                            </div>
                                            <div class="cardContent">
                                                <h6 class="card-title">Card title</h6>
                                                <div class="productPrice">
                                                    <span class="spanPrice">$259 - $269</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>



                                @endforeach


                            </div>
                        </div>
                        <section class="contactFormSection">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-12 mt-4">
                                        <d class="flex text-md-left text-xs-center mt-5 mb-3">
                                            <h4><u>CONTACT US</u></h4>
                                        </d>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-lg-8 col-md-12 col-sm-12">
                                        <div class="contactForm">
                                            <form>
                                                <div class="row mb-3">
                                                    <div class="col-sm-6">
                                                        <input type="text" class="form-control inputForm" id="inputName"
                                                            placeholder="Enter Your Name">
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <input type="number" class="form-control inputForm"
                                                            id="inputNumber" placeholder="Phone Number">
                                                    </div>
                                                </div>
                                                <div class="row mb-3">
                                                    <div class="col-sm-6">
                                                        <input type="email" class="form-control inputForm"
                                                            id="inputEmail" placeholder="Enter Your Email">
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <input type="text" class="form-control inputForm"
                                                            id="inputCompanyname" placeholder="Company Name">
                                                    </div>
                                                    <div class="col-sm-12">
                                                        <div class="form-floating">
                                                            <textarea class="form-control inputForm"
                                                                placeholder="Your message here" id="floatingTextarea2"
                                                                style="height: 100px"></textarea>
                                                        </div>
                                                    </div>
                                                </div>



                                                <button type="submit"
                                                    class="btn btn-primary submitBtn mb-5">Submit</button>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-12 col-sm-12 contactFlex">
                                        <div class="contactAddress">
                                            <div class="headingContent">
                                                <h3>Address</h3>
                                            </div>
                                            <div class="addressText">
                                                <p><span class="spanAddIcon"><i class="fas fa-map mr-3"></i></span> New
                                                    York, NY 10012, US</p>
                                            </div>
                                            <div class="addressText">
                                                <p><span class="spanAddIcon"><i class="fas fa-phone mr-3"></i></span>
                                                    (571)209-8364</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>

                        <section class="aboutSection py-5">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-6 col-md-12 col-sm-12">
                                        <div class="aboutContact">
                                            <h2>About us</h2>
                                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. In, id vel nobis
                                                facilis cum fuga eaque obcaecati neque, quo accusantium alias quos,
                                                excepturi atque pariatur iure laudantium sed voluptate officiis ea
                                                incidunt voluptatem molestias corrupti! Odit officiis unde debitis
                                                voluptatem in voluptate quaerat similique? Cupiditate, sunt
                                                voluptatibus. Maxime cupiditate dolores perspiciatis fuga ducimus harum
                                                nulla saepe rerum. Repudiandae molestias impedit ut tenetur nostrum
                                                labore minus optio nulla enim. Voluptatem, quia!</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-12 col-sm-12">
                                        <div class="imageAbout">
                                            <img src="http://127.0.0.1:8000/slider/1709025825fireSlide02%20(1).jpg"
                                                class="aboutImage" alt="">
                                        </div>
                                    </div>
                                </div>
                                <div class="row py-4">

                                    <div class="col-lg-6 col-md-12 col-sm-12">
                                        <div class="imageAbout">
                                            <img src="http://127.0.0.1:8000/slider/1709025825fireSlide02%20(1).jpg"
                                                class="aboutImage" alt="">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-12 col-sm-12">
                                        <div class="aboutContact">
                                            <h2>Our Mission</h2>
                                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. In, id vel nobis
                                                facilis cum fuga eaque obcaecati neque, quo accusantium alias quos,
                                                excepturi atque pariatur iure laudantium sed voluptate officiis ea
                                                incidunt voluptatem molestias corrupti! Odit officiis unde debitis
                                                voluptatem in voluptate quaerat similique? Cupiditate, sunt
                                                voluptatibus. Maxime cupiditate dolores perspiciatis fuga ducimus harum
                                                nulla saepe rerum. Repudiandae molestias impedit ut tenetur nostrum
                                                labore minus optio nulla enim. Voluptatem, quia!</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>



                        <div class="elementor-element elementor-element-08e4d0a e-flex e-con-boxed e-con e-parent"
                            data-id="08e4d0a" data-element_type="container"
                            data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;content_width&quot;:&quot;boxed&quot;}"
                            data-core-v316-plus="true">
                            <div class="e-con-inner">
                                <div class="elementor-element elementor-element-4478ab7 elementor-widget elementor-widget-spacer"
                                    data-id="4478ab7" data-element_type="widget" data-widget_type="spacer.default">
                                    <div class="elementor-widget-container">
                                        <div class="elementor-spacer">
                                            <div class="elementor-spacer-inner"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="elementor-element elementor-element-1c3f41a elementor-widget elementor-widget-heading"
                                    data-id="1c3f41a" data-element_type="widget" data-widget_type="heading.default">
                                    <div class="elementor-widget-container">
                                        <h4 class="elementor-heading-title elementor-size-default">OUR
                                            REVIEWS
                                        </h4>
                                    </div>
                                </div>
                                <div class="elementor-element elementor-element-1767599 elementor-widget elementor-widget-ts-testimonial"
                                    data-id="1767599" data-element_type="widget"
                                    data-widget_type="ts-testimonial.default">
                                    <div class="elementor-widget-container">
                                        <div class="ts-testimonial-wrapper ts-shortcode columns-2 text-default ts-slider show-dots"
                                            data-columns="2" data-nav="0" data-dots="1" data-autoplay="">

                                            <div class="items loading">
                                                <div class="item">
                                                    <blockquote>
                                                        <div class="image">
                                                            <img loading="lazy" decoding="async" width="180"
                                                                height="180"
                                                                src="data:image/jpeg;base64,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"
                                                                class="attachment-180x180 size-180x180 wp-post-image"
                                                                alt=""
                                                                srcset="data:image/jpeg;base64,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 80w"
                                                                sizes="(max-width: 180px) 100vw, 180px" />
                                                        </div>

                                                        <div class="quote-content-meta">

                                                            <div class="rating" title="Rated 5 out of 5">
                                                                <span style="width: 100%">Rated 5 out of
                                                                    5</span>
                                                            </div>

                                                            <div class="content">

                                                                Lorem ipsum dolor sit amet consectetur
                                                                adipisicing elit.
                                                                Ipsam quidem adipisci dolorum
                                                                non, perspiciatis
                                                                amet natus aliquam in hic harum, similique .
                                                            </div>

                                                            <div class="author-role">
                                                                <span class="author">
                                                                    <a href="#" target="_blank">Name</a>
                                                                </span>


                                                            </div>

                                                        </div>

                                                    </blockquote>
                                                </div>
                                                <div class="item">
                                                    <blockquote>
                                                        <div class="image">
                                                            <img loading="lazy" decoding="async" width="180"
                                                                height="180"
                                                                src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAkGBwgHBgkIBwgKCgkLDRYPDQwMDRsUFRAWIB0iIiAdHx8kKDQsJCYxJx8fLT0tMTU3Ojo6Iys/RD84QzQ5OjcBCgoKDQwNGg8PGjclHyU3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3N//AABEIAJQAsAMBIgACEQEDEQH/xAAbAAEAAgMBAQAAAAAAAAAAAAAABAUCAwYBB//EAD0QAAEDAwIEAgYGCQUBAAAAAAEAAgMEBRESIRMxQVEigQYUMnGRsVJhYnKh8BUjMzQ1QkTB0SRkc7LxFv/EABQBAQAAAAAAAAAAAAAAAAAAAAD/xAAUEQEAAAAAAAAAAAAAAAAAAAAA/9oADAMBAAIRAxEAPwD66iIgIiICIiAiIgIiICIvUHiIiAiIgIiICIiAiIgIiICIiAiIgIi9QAszKympnzvHsjb/AAtT3Bgy84Cj3qUNoI2D+dw8wg0i9vJ8VOwt7ZOVuZdqR3twvYe43UWx0UdW+R0zS5keABnGSVZyWOkd7GtnuOUGLKqjk9moaD2dkLcI9Yyx7Xe4qBL6PuBzFO33Paor7TXw7sZq+uN+EFwYnt5tPluscHsqb1i40vtmZjR1eM/NbYb3OCOKxkjevQoLNFuJZLAyVg2cAR7itKAiIgIiICIiAiIgIih18r2PDGOLQRkoJEs8cftO37BRJa1x/ZDSPr3Kiogy8UkjQ4lxccLO/PAlijH8rSVlQt1VTB28Sg3iXVcJR9DA/BBe+jkemhc/6byVbqHaY+HbqdpG+gE+amICIiDGTTw3awC3G+VwriDkgbHkF2F1l4NuqH5A8BHmVyNCzi1kEfd4yg6rTwaWGL6LQFrW2oOXgLUgIiICIiAiIgIiICj10euHUB4m/JSExnbGc9EFP714s5WcORzOx2WCCba2jU97uTQqB5NRWOxzkk+ZV9G/gWqomPMtOD+CpLRpNzpw8gDX15Z/9QdbWXKkt8YbI/LgMBjdyo9ovHr88kT4wwjdmDzCpaqz3ESvkdFxNTi7LHZ5/UobDU0E7ZdDons38TSg7tz2taXOIAHMkqqrL/SQ5EJ4z/s+yPNczVVtTWO1TzOcOg5D4LQMZygua+4TVdpe+UNaJJg1jQOgGT+K0+jrOJcmnoxpJ/PmtNyzFQ0FP14ZlP15Kn+ikf7zN02aPz8EFvIcvKwXp3JXiAiIgIiICIiAiIgIiIIlwjy0PHTYqCeWyt3tD2OaeTuaqXjS4tPTmg3Xg8KxtaOTi0Hz3XNZ7jBHVdXHVRyUxhqoy5pGDtzUb9B0U4zBLLFnodx+KCmguVbCBwqqUDoNWQPJTovSOuaMSiKUdQ5q2zejE4BMFTE/7w0qFNZLjF/Tl4+wcoJf6Wt8/wC9WtoPV0Tsf4Qtsk48FTNAfoyNyFSyRTRHEsUjD9ppCwyO/wAEE+71cdXWufCDwmtaxm3MALofR5nCs4f1kcXf2XH5PQLuqaPgWylhxgtY3V78boCIiAiIgIiICIiAiIgIiICj1FKJZNYdpzz2UhEGiKlij3wHHuVvREHvXK9D3DkViiDZx34w7Dh2IWiWkop/2tJGT3Awti8QRorRa45hKIHZHJpcSB5KbK8PIwOS1r1B4iIgIiICIiAiIgIiIChXevNupeOI+J4g3TqxzU1VXpIcUUB/3MfzQbqi5xx2k18I4rcAgZxzOEq7kYZIqenhdPVSM1hgOA0dyVT+kFPJb4agQNzR1TgSOkcmc/AqY6ZlBePWarLaeogY1smNmEdCUEuC4yGqbTV1M6nleP1ZDg5r/ce63XOsNBRvqQwPLCNicdcKvqqmK6XCihoncUQy8WSVvJoxyz3W70m/gs+eeW/9gg9qrw2mucNHJFhsjWkyZ9nOwXt3uwtr4WCLiPk3I1YAHLKhV9KK68S055uoQWfeyMKBNxqq2z3GqGJXyRxMB6BpGfxQdFdK71GBr2xmWR7gxkfIklewXCGW3CuedEQYXOHPSRzHxVZWVE098YaWA1LKJuC0PAGt3X4KJoqH09xtjoOFK8ioiiLgdtQJA+CC0FzrXR8eO1vdTEZHjGsjvpW2tuUkMlJHTU3FfUtLg17tJG2VAqrpTzUrJYri6lkYzBhDPEXdsKNVSFxs77hUSQOdG4ySZ0uBQX1HNVyud63SCAAZaRJqypXnlVlnfSufL6rcJas6RqD36tP5/srNAREQEREBERAREQFjIWNbmUsDe7iAPxWSpbxw62vp7dI9rYWgyzHIH1NCC4kdHhvEcwtfs3URgnpjuvZCwMPELQwe0X8sLnmNfW+j8kJIdVUL/CRv4m7jHvC219T+lKWgpYzn1wh0mOjW+0guQYYIwQ6KON3IggArJ5ZoJkLdHMlx2VHdI46+4st5e2OGnhLnZOPGR4QtdRVeteiUheQZIwI3+8EBB0GqMvwDHxCNgMZwssDGNII7EKpjA/8Ao4tv6IfMKReqo0lumez9o4aGfeOwQTI3xnJicxwz4tJB38lgZqcSEuliDxtu4ZCprTHHbLm2ijka+OohDshwP6wc1GhZE6tuJfan1p9YPiaB4fq3QdE4QAid3C3xiQ4+azeIy3MjWkDq7ouYxj0djAfn/WN8HWPxeyuhuX8Pqv8Ahd8igyZPSj2ZqcE9nN3W8rmLZHD6rTB1jfIdIzNhuD9pdMgIiICIiAiIgIiICrm2enfVVFRWNbUOlIIDm7MHYKxRBBo7bFR1ks1PhkUrQDCBsCOoK12+0R0NXJO2Vz9QIYwj2ATk4VkiCtis1NxJpatjamSR5cXPbyHQLXLY4zFWQwymKGo0kRgbMI7K2RBXVVtllrG1NPWGB7YuHswHI81jLan1PAFbUmobE4uc0xgB+eWcdlZogrZrLSl0MlKxtNLE8PD2N546FYC1VMU88lLcXwiaTW5oiB381aogqn2Vpt/qrah4eZhM6UjJLvctzKKrLJmVNwdMySMswYmjBPXZT0QVdPba6nZHFHdHiNmwbwW8uytSvEQEREBERAREQEREBERAREQEREBERAREQEREBERAREQEREH/2Q=="
                                                                class="attachment-180x180 size-180x180 wp-post-image"
                                                                alt=""
                                                                srcset="data:image/jpeg;base64,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 80w"
                                                                sizes="(max-width: 180px) 100vw, 180px" />
                                                        </div>

                                                        <div class="quote-content-meta">

                                                            <div class="rating" title="Rated 5 out of 5">
                                                                <span style="width: 100%">Rated 5 out of
                                                                    5</span>
                                                            </div>

                                                            <div class="content">

                                                                Lorem ipsum dolor sit amet consectetur
                                                                adipisicing elit.
                                                                Ipsam quidem adipisci dolorum
                                                                non, perspiciatis
                                                                amet natus aliquam in hic harum, similique .
                                                            </div>

                                                            <div class="author-role">
                                                                <span class="author">
                                                                    <a href="#" target="_blank">Name</a>
                                                                </span>


                                                            </div>

                                                        </div>

                                                    </blockquote>
                                                </div>
                                                <div class="item">
                                                    <blockquote>
                                                        <div class="image">
                                                            <img loading="lazy" decoding="async" width="180"
                                                                height="180"
                                                                src="data:image/jpeg;base64,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"
                                                                class="attachment-180x180 size-180x180 wp-post-image"
                                                                alt=""
                                                                srcset="data:image/jpeg;base64,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 80w"
                                                                sizes="(max-width: 180px) 100vw, 180px" />
                                                        </div>

                                                        <div class="quote-content-meta">

                                                            <div class="rating" title="Rated 5 out of 5">
                                                                <span style="width: 100%">Rated 5 out of
                                                                    5</span>
                                                            </div>

                                                            <div class="content">

                                                                Lorem ipsum dolor sit amet consectetur
                                                                adipisicing elit.
                                                                Ipsam quidem adipisci dolorum
                                                                non, perspiciatis
                                                                amet natus aliquam in hic harum, similique .
                                                            </div>

                                                            <div class="author-role">
                                                                <span class="author">
                                                                    <a href="#" target="_blank">Name</a>
                                                                </span>


                                                            </div>

                                                        </div>

                                                    </blockquote>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="elementor-element elementor-element-d97c7b7 elementor-widget elementor-widget-spacer"
                                    data-id="d97c7b7" data-element_type="widget" data-widget_type="spacer.default">
                                    <div class="elementor-widget-container">
                                        <div class="elementor-spacer">
                                            <div class="elementor-spacer-inner"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>

                </div>
            </div>

            <!-- Right Sidebar -->

        </div>

    </div>
    <!-- #main .wrapper -->
    @include('Frontend.layouts.footer')
    </div><!-- #page -->




    @include('Frontend.layouts.sidebar')




    <div id="to-top" class="scroll-button">
        <a class="scroll-button" href="javascript:void(0)" title="Back to Top">Back to Top</a>
    </div>


    <div id="ts-add-to-cart-popup-modal" class="ts-popup-modal">
        <div class="overlay"></div>
        <div class="add-to-cart-popup-container popup-container">
            <span class="close"></span>
            <div class="add-to-cart-popup-content"></div>
        </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="{{ asset('frontend/css/index.page.css') }}" media="all" />
    <link rel="stylesheet" href="{{ asset('frontend/css/index.innline.css') }}">
    <script src="{{ asset('frontend/js/index.page.js') }}"></script>
    <script src="{{ asset('frontend/js/index.page2.js') }}"></script>
    <script src="{{ asset('frontend/js/index.page3.js') }}"></script>
    <script src="{{ asset('frontend/js/index.page4.js') }}"></script>
    <script src="{{ asset('frontend/js/index.page5.js') }}"></script>
    <script src="{{ asset('frontend/js/index.other.js') }}"></script>

    <script>
    var nooni_params = null;
    var yith_wcwl_l10n = null;

    function addTocart(pId) {
        var url = "{{ route('addCart', ':id') }}";
        url1 = url.replace(':id', pId);
        $.ajax({
            cache: false,
            contentType: false,
            processData: false,
            url: url1,
            method: "get",
            dataType: "json",
            success: function(response) {
                if (response.responseCode == 200) {
                    toastr.success(response.responseMessage);
                    $('#selectSize').removeClass('show');
                    removeBackDrop();
                } else {
                    toastr.error(response.responseMessage);
                }
            }
        });
    }
    </script>
</body>

</html>