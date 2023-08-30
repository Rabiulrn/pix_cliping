@extends('layouts.frontend.app')

@section('content')

    <!-- Hero part-->
    <section class="bg-white highlights image-right">
        <div class="container">
            <div class="row align-items-center justify-content-center" data-aos="zoom-in" data-aos-delay="500">
                <div class="col-6">
                    <h2 style="font-weight: 500; line-height: 65px; opacity: 0.7">Enhance images with <br/> simplified post-processing</h2>
                    <p style="letter-spacing:.5px;">Tailored to perfection, our process caters to your every need, ensuring a seamless journey from order to delivery.</p>
                </div>
                <div class="col-6">
                    <a href="/front-assets/images/news-1.jpg">
                        <img src="/front-assets/images/home/workflow1.png" class="fit-image rounded" alt="Dedicated to Exceeding Expectation">
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials -->
    <section id="testimonials" class="section-4 carousel">
        <div class="overflow-holder">
            <div class="container overflow-hidden">
                <div class="row text-center justify-content-center">
                    <div class="col-12">
                        <h3 >Why PixClipping?</h3>
                        <p class="text-max-800">Our customers are satisfied with the work we do. <br/>The greatest gratification is to receive recognition for what we have built.<br/> This motivates us to improve even more.</p>
                    </div>
                </div>
                <div class="row justify-content-center text-center items">
                    <div class="col-12 col-md-6 col-lg-3">
                        <div class="card no-hover">
                            <i class="icon icon-pencil"></i>
                            <h5>Easy dashboard</h5>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-3">
                        <div class="card no-hover">
                            <i class="icon icon-menu"></i>
                            <h5>Powerful features</h5>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-3">
                        <div class="card no-hover">
                            <i class="icon icon-rocket"></i>
                            <h5>Excellent design</h5>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-3">
                        <div class="card no-hover">
                            <i class="icon icon-rocket"></i>
                            <h5>Real-time update</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- About [video] -->
    <section id="video" class="section-3 highlights image-left">
        <div class="container">
            <div class="row intro justify-content-center text-center">
                <div class="col-12">
                    <h3 class="featured alt">Effortless photo editing, simplified</h3>
                    <p>Seamless ordering, transparent transactions, and lightning-fast delivery; our <br/> dedicated team is here to ensure an exceptional experience.</p>
                </div>
            </div>
            <div class="row align-items-center">
                <div class="col-12 col-md-6">
                    <a href="/front-assets/images/home/Home3.png">
                        <div class="mask-radius"></div>
                        <img src="/front-assets/images/home/workflow2.png" class="fit-image" alt="Institutional">
                    </a>
                </div>
                <div class="col-12 col-md-6 pl-md-5">
                    <div class="row items align-items-center">
                        <div class="col-12 p-0">
                            <div class="row item">
                                <div class="col-12 col-md-2">
                                    <i class="icon icon-trophy"></i>
                                </div>
                                <div class="col-12 col-md-9">
                                    <h4 style="text-align: left; margin: 0px 0px 0px 0px">Order & Upload:</h4>
                                    <p style="text-align: left; margin: 10px 0px 0px 0px;">Complete form, include order details, provide instructions, and upload images.</p>
                                </div>
                            </div>
                            <div class="row item">
                                <div class="col-12 col-md-2">
                                    <i class="icon icon-diamond"></i>
                                </div>
                                <div class="col-12 col-md-9">
                                    <h4 style="text-align: left; margin: 0px 0px 0px 0px">Invoice & payment:</h4>
                                    <p style="text-align: left; margin: 10px 0px 0px 0px;">Reviewing order details for invoice creation. Payment required to initiate order processing.</p>
                                </div>
                            </div>
                            <div class="row item">
                                <div class="col-12 col-md-2">
                                    <i class="icon icon-cloud-download"></i>
                                </div>
                                <div class="col-12 col-md-9">
                                    <h4 style="text-align: left; margin: 0px 0px 0px 0px">Processing order:</h4>
                                    <p style="text-align: left; margin: 10px 0px 0px 0px;">With payment received, we promptly begin logging and sorting to edit images according to your instructions.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-white highlights image-right">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-6">
                    <h2 style="font-weight: 500; line-height: 65px; opacity: 0.7">Embrace productivity, unlock success."</h2>
                    <p style="letter-spacing:.5px;">Streamline photo editing, boost productivity, and effortlessly complete your Order.</p>
                    <a href="{{route('register')}}" target="_blank" class="btn btn-primary border-1 d-inline-block">Create Account<i class="icon-arrow-right"></i></a>
                </div>
                <div class="col-6">
                    <a href="/front-assets/images/news-1.jpg">
                        <img src="/front-assets/images/home/workflow1.png" class="fit-image rounded" alt="Dedicated to Exceeding Expectation">
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section id="video" class="section-3 highlights image-left">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 col-md-6">
                    <a href="/front-assets/images/home/Home3.png">
                        <div class="mask-radius"></div>
                        <img src="/front-assets/images/home/workflow2.png" class="fit-image" alt="Institutional">
                    </a>
                </div>
                <div class="col-12 col-md-6 pl-md-5">
                    <div class="row items align-items-center">
                        <div class="col-12 p-0">
                            <div class="row item">
                                <div class="col-12 col-md-2">
                                    <i class="icon icon-trophy"></i>
                                </div>
                                <div class="col-12 col-md-9">
                                    <h4 style="text-align: left; margin: 0px 0px 0px 0px">Finalising Output:</h4>
                                    <p style="text-align: left; margin: 10px 0px 0px 0px;">QC management ensures order instructions are met, alerts you of final editing quality.</p>
                                </div>
                            </div>
                            <div class="row item">
                                <div class="col-12 col-md-2">
                                    <i class="icon icon-diamond"></i>
                                </div>
                                <div class="col-12 col-md-9">
                                    <h4 style="text-align: left; margin: 0px 0px 0px 0px">Download & Review:</h4>
                                    <p style="text-align: left; margin: 10px 0px 0px 0px;">Please download the final output and check if it meets your order requirements.</p>
                                </div>
                            </div>
                            <div class="row item">
                                <div class="col-12 col-md-2">
                                    <i class="icon icon-cloud-download"></i>
                                </div>
                                <div class="col-12 col-md-9">
                                    <h4 style="text-align: left; margin: 0px 0px 0px 0px">Feedback / Revisions:</h4>
                                    <p style="text-align: left; margin: 10px 0px 0px 0px;">Share your satisfaction or request a redo.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('action-blog')
@endsection
