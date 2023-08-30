@extends('layouts.frontend.app')

@section('content')
{{--    @include('layouts.frontend.hero_section')--}}

    <!-- Services -->
    <section class="featured mt-lg-5">
        <div class="overflow-holder">
            <div class="container">
                <div class="row text-center intro">
                    <div class="col-12">
                        <h3 class="mb-0">Get Editing Services Done Effortlessly</h3>
                        <p class="mt-2">Choose photo editing services you are looking for to make your images outstanding and enhance perfection</p>
                    </div>
                </div>
                <div class="row justify-content-center text-center">
                    <!-- Nav tabs -->
                    <div class="">
                        <ul class="nav nav-tabs nav-fill" style="box-shadow: rgb(99 99 99 / 20%) 0px 2px 8px 0px; padding: 0px 10px;">
                            <li class="nav-item">
                                <a class="nav-link active flex" data-bs-toggle="tab" href="#editing">
                                    <i class="icon icon-pencil d-inline-block"></i> Editing
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" href="#retouching"><i class="icon icon-layers d-inline-block"></i> Retouching</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" href="#ecommerce"><i class="icon icon-basket d-inline-block"></i> E-commerce</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" href="#photography"><i class="icon icon-camera d-inline-block"></i> Photography</a>
                            </li>
                        </ul>
                    </div>


                    <!-- Tab panes -->
                    <div class="tab-content mt-5">
                        <div class="tab-pane container active" id="editing">
                            <div class="row justify-content-center text-center items">
                                <div class="col-12 col-md-6 col-lg-4">
                                    <div class="card m-1">
                                        <i class="icon icon-globe"></i>
                                        <h4>Clipping Path</h4>
                                        <p>Cut out the subject with shape by hand-drawn photo clipping service.</p>
                                        <a href="{{route('services.slug','clipping-path')}}"><i class="btn-icon icon-arrow-right-circle"></i></a>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6 col-lg-4">
                                    <div class="card m-1">
                                        <i class="icon icon-basket"></i>
                                        <h4>Background Remove</h4>
                                        <p>Increase your sales with an incredible online store, full of features.</p>
                                        <a href="p{{route('services.slug','background-remove')}}"><i class="btn-icon icon-arrow-right-circle"></i></a>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6 col-lg-4">
                                    <div class="card m-1">
                                        <i class="icon icon-screen-smartphone"></i>
                                        <h4>Shadow Making</h4>
                                        <p>Create shadow to make images more realistic and natural-looking.</p>
                                        <a href="{{route('services.slug','shadow-making')}}"><i class="btn-icon icon-arrow-right-circle"></i></a>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6 col-lg-4">
                                    <div class="card m-1">
                                        <i class="icon icon-layers"></i>
                                        <h4>Image Masking</h4>
                                        <p>Mask hair, fur, fine details of subjects to get clean & sharp images.</p>
                                        <a href="{{route('services.slug','image-masking')}}"><i class="btn-icon icon-arrow-right-circle"></i></a>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6 col-lg-4">
                                    <div class="card m-1">
                                        <i class="icon icon-chart"></i>
                                        <h4>Ghost Mannequin</h4>
                                        <p>Remove mannequin to a tailored fit to catch viewers attention.</p>
                                        <a href="{{route('services.slug','ghost-mannequin')}}"><i class="btn-icon icon-arrow-right-circle"></i></a>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6 col-lg-4">
                                    <div class="card m-1">
                                        <i class="icon icon-bulb"></i>
                                        <h4>Multi Clipping Path</h4>
                                        <p>Extract colors, objects and parts within an image as you need.</p>
                                        <a href="{{route('services.slug','multi-clipping-path')}}"><i class="btn-icon icon-arrow-right-circle"></i></a>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6 col-lg-4">
                                    <div class="card m-1">
                                        <i class="icon icon-bulb"></i>
                                        <h4>Photo Recoloring</h4>
                                        <p>Capture one photo, recolor images in many colors as you want.</p>
                                        <a href="{{route('services.slug','photo-recoloring')}}"><i class="btn-icon icon-arrow-right-circle"></i></a>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6 col-lg-4">
                                    <div class="card m-1">
                                        <i class="icon icon-bulb"></i>
                                        <h4>School Photo Editing</h4>
                                        <p>Retouch portrait or group photos of school student with your style.</p>
                                        <a href="{{route('services.slug','school-photo-editing  ')}}"><i class="btn-icon icon-arrow-right-circle"></i></a>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6 col-lg-4">

                                </div>
                            </div>
                        </div>
                        <div class="tab-pane container fade" id="retouching">
                            <div class="row">
                                <div class="row justify-content-center text-center items">
                                    <div class="col-12 col-md-6 col-lg-4">
                                        <div class="card m-1">
                                            <i class="icon icon-globe"></i>
                                            <h4>Photo Retouching</h4>
                                            <p>Get retouched images by Advanced adjustment as you need.</p>
                                            <a href="{{route('services.slug','photo-retouching')}}"><i class="btn-icon icon-arrow-right-circle"></i></a>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6 col-lg-4">
                                        <div class="card m-1">
                                            <i class="icon icon-basket"></i>
                                            <h4>Jewelry Retouching</h4>
                                            <p>Receive shiny and crisp photos with natural details intact.</p>
                                            <a href="p{{route('services.slug','jewelry-retouch')}}"><i class="btn-icon icon-arrow-right-circle"></i></a>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6 col-lg-4">
                                        <div class="card m-1">
                                            <i class="icon icon-screen-smartphone"></i>
                                            <h4>Product Photo Retouching</h4>
                                            <p>Retouch as you require for stunning look in product photos.</p>
                                            <a href="{{route('services.slug','product-photo-retouching')}}"><i class="btn-icon icon-arrow-right-circle"></i></a>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6 col-lg-4">
                                        <div class="card m-1">
                                            <i class="icon icon-layers"></i>
                                            <h4>Beauty Retouching</h4>
                                            <p>Catch the viewers attention with a glamorous look in images.</p>
                                            <a href="{{route('services.slug','beauty-retouching')}}"><i class="btn-icon icon-arrow-right-circle"></i></a>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6 col-lg-4">
                                        <div class="card m-1">
                                            <i class="icon icon-chart"></i>
                                            <h4>Headshot Retouching</h4>
                                            <p>Get corporate/editorial headshot photos with perfect look.</p>
                                            <a href="{{route('services.slug','headshot-retouching')}}"><i class="btn-icon icon-arrow-right-circle"></i></a>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6 col-lg-4">
                                        <div class="card m-1">
                                            <i class="icon icon-bulb"></i>
                                            <h4>Newborn Baby Photo Editing</h4>
                                            <p>Correct red skin & imperfections for lovely child images.</p>
                                            <a href="{{route('services.slug','newborn-baby-photo-editing')}}"><i class="btn-icon icon-arrow-right-circle"></i></a>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6 col-lg-4">
                                        <div class="card m-1">
                                            <i class="icon icon-bulb"></i>
                                            <h4>Food Photo Retouching</h4>
                                            <p>Bring the appetizing look on food images as you want.</p>
                                            <a href="{{route('services.slug','food-photo-retouching')}}"><i class="btn-icon icon-arrow-right-circle"></i></a>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6 col-lg-4">
                                        <div class="card m-1">
                                            <i class="icon icon-bulb"></i>
                                            <h4>Real Estate Photo Editing</h4>
                                            <p>Represent infrastructures, buildings & interiors attractively.</p>
                                            <a href="{{route('services.slug','real-estate-photo-editing')}}"><i class="btn-icon icon-arrow-right-circle"></i></a>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6 col-lg-4">

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane container fade" id="ecommerce">
                            <div class="row">
                                <div class="row justify-content-center text-center items">
                                    <div class="col-12 col-md-6 col-lg-4">
                                        <div class="card m-1">
                                            <i class="icon icon-globe"></i>
                                            <h4>Essential Editing</h4>
                                            <p>We provided complete e-commerce editing as per your preferences.</p>
                                            <a href="{{route('services.slug','essential-editing')}}"><i class="btn-icon icon-arrow-right-circle"></i></a>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6 col-lg-4">
                                        <div class="card m-1">
                                            <i class="icon icon-basket"></i>
                                            <h4>Amazon, e-Bay, Shopify</h4>
                                            <p>Retouch as the image requirements of eCommerce marketplaces.</p>
                                            <a href="p{{route('services.slug','amazon-e-bay-shopify')}}"><i class="btn-icon icon-arrow-right-circle"></i></a>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6 col-lg-4">
                                        <div class="card m-1">
                                            <i class="icon icon-screen-smartphone"></i>
                                            <h4>E-commerce 360 degree</h4>
                                            <p>Create symmetrical 360 degree product image adjusting.</p>
                                            <a href="{{route('services.slug','ecommerce-360-degree-editing')}}"><i class="btn-icon icon-arrow-right-circle"></i></a>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6 col-lg-4">
                                        <div class="card m-1">
                                            <i class="icon icon-layers"></i>
                                            <h4>Image Optimization</h4>
                                            <p>Get web-ready images as per your customized requirements.</p>
                                            <a href="{{route('services.slug','image-optimization')}}"><i class="btn-icon icon-arrow-right-circle"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane container fade" id="photography">
                            <div class="row">
                                <div class="row justify-content-center text-center items">
                                    <div class="col-12 col-md-6 col-lg-4">
                                        <div class="card m-1">
                                            <i class="icon icon-globe"></i>
                                            <h4>Product Photography</h4>
                                            <p>We capture product photos keeping its color and natural details.</p>
                                            <a href="{{route('services.slug','product-photography')}}"><i class="btn-icon icon-arrow-right-circle"></i></a>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6 col-lg-4">
                                        <div class="card m-1">
                                            <i class="icon icon-basket"></i>
                                            <h4>Apparels Photography</h4>
                                            <p>Need your brand with our professional apparel photography.</p>
                                            <a href="p{{route('services.slug','apparels-photography')}}"><i class="btn-icon icon-arrow-right-circle"></i></a>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6 col-lg-4">
                                        <div class="card m-1">
                                            <i class="icon icon-screen-smartphone"></i>
                                            <h4>Jewelry Photography</h4>
                                            <p>Capture luxurious jewelry ornaments images.</p>
                                            <a href="{{route('services.slug','jewelry-photography')}}"><i class="btn-icon icon-arrow-right-circle"></i></a>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6 col-lg-4">
                                        <div class="card m-1">
                                            <i class="icon icon-layers"></i>
                                            <h4>School Photography</h4>
                                            <p>We shoot portraits or groups for entire school in your preferred style.</p>
                                            <a href="{{route('services.slug','school-photography')}}"><i class="btn-icon icon-arrow-right-circle"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Partners -->
    <section id="partner" class="section-2">
        <div class="overflow-holder">
            <div class="container">
                <div class="row text-center intro">
                    <div class="col-12">
                        <h3 class="mb-0">Our Partners</h3>
                        <p class="mt-2">Choose photo editing services you are looking for to make your images outstanding and enhance perfection</p>
                    </div>
                </div>
                <div class="swiper-container min-slider">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide slide-center item">
                            <img src="/front-assets/images/logo-1.png" class="fit-image w-85" alt="Fit Image">
                        </div>
                        <div class="swiper-slide slide-center item">
                            <img src="/front-assets/images/logo-2.png" class="fit-image w-85" alt="Fit Image">
                        </div>
                        <div class="swiper-slide slide-center item">
                            <img src="/front-assets/images/logo-3.png" class="fit-image w-85" alt="Fit Image">
                        </div>
                        <div class="swiper-slide slide-center item">
                            <img src="/front-assets/images/logo-4.png" class="fit-image w-85" alt="Fit Image">
                        </div>
                        <div class="swiper-slide slide-center item">
                            <img src="/front-assets/images/logo-5.png" class="fit-image w-85" alt="Fit Image">
                        </div>
                        <div class="swiper-slide slide-center item">
                            <img src="/front-assets/images/logo-6.png" class="fit-image w-85" alt="Fit Image">
                        </div>
                        <div class="swiper-slide slide-center item">
                            <img src="/front-assets/images/logo-7.png" class="fit-image w-85" alt="Fit Image">
                        </div>
                        <div class="swiper-slide slide-center item">
                            <img src="/front-assets/images/logo-8.png" class="fit-image w-85" alt="Fit Image">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection

@section('page-script')
    <script>
        $(function (){
            $(document).find('input[value=editing]').parent().click()
        })
    </script>
@endsection
