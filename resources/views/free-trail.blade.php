@extends('layouts.frontend.app')
@section('page-css')
    <!-- sweet alert css -->
    <link href="/assets/libs/sweetalert2/sweetalert2.min.css" rel="stylesheet" type="text/css"/>
@stop
@section('content')
    <!-- Hero part-->
    <section class="bg-white highlights image-right" style="background: linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(4,96,198,1) 0%, rgba(9,54,131,1) 100%);position: relative;top: 86px;">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 col-md-6">
                    <div class="row intro">
                        <div class="col-12 p-0">
                            <h3 class="text-white" style="font-weight: 500; line-height: 50px;letter-spacing:.5px;"> <span style="color:#fac344">Free trial: </span> Experience our services </h3>
                            <p class="text-white" style="letter-spacing:.5px;">Experience our retouching excellence and quick turnaround with<br/> a risk-free free trial - no credit card needed!</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <img src="/front-assets/images/home/FreeTrial1.png" class="fit-image" alt="Free trail">
                </div>
            </div>
        </div>
    </section>

    <!-- form -->
    <section id="pricing" class="section-1">
        <div class="container">
            <div class="row">
                <div class="col-6">
                    <h2>Join the <br/>Perfectionist Team: <br/>Excellence awaits</h2>
                    <p>Your editing requirements, executed with excellence.</p>
                    <div>
                        <img src="/front-assets/images/home/FreeTrial2.png" class="fit-image" alt="Free trail">
                    </div>
                </div>
                <div class="col-6">
                    <div style="background: #fff;">
                        <div class="card-title text-center" style="padding: 20px; background: linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(136,3,9,1) 0%, rgba(9,54,131,1) 100%);color: #fff; font-size: 22px; font-weight: 500;">Your Contact Info</div>
                        <div class="card-body" style="padding: 20px">
                            <form class="free-trail-form">
                                <div class="row">
                                    <div class="col-6 py-0 px-1">
                                        <label for="name" class="form-label">Name <span style="color:red">*</span></label>
                                        <input type="text" class="form-control" placeholder="Your Name" required name="name">
                                    </div>
                                    <div class="col-6 p-0">
                                        <label for="email" class="form-label">Email <span style="color:red">*</span></label>
                                        <input type="email" class="form-control" placeholder="your@example.com" required name="email">
                                    </div>
                                    <div class="col-6 py-1 px-1">
                                        <label for="phone" class="form-label">Phone <span style="color:red">*</span></label>
                                        <input type="number" class="form-control" placeholder="Phone" required name="phone">
                                    </div>
                                    <div class="col-6 py-1 px-1">
                                        <label for="image_qty" class="form-label">Image Quantity <span style="color:red">*</span></label>
                                        <input type="number" class="form-control" placeholder="100" required name="image_qty">
                                    </div>
                                    <div class="col-12 py-1 px-1">
                                        <label for="service" class="form-label">Image Quantity <span style="color:red">*</span></label>
                                        <select class="" name="service">
                                            <option>Select Service</option>
                                            @isset($pathServices)
                                                @foreach($pathServices as $pathService)
                                                    <option value="{{$pathService->id}}">{{$pathService->service_name}}</option>
                                                @endforeach
                                            @endisset
                                        </select>
                                    </div>
                                    <div class="col-12 py-1 px-1">
                                        <label for="instruction" class="form-label">Instruction <span style="color:red">*</span></label>
                                        <textarea class="form-control" placeholder="Hi, have a nice day..." required name="instruction"></textarea>
                                    </div>
                                    <div class="col-6 py-1 px-1">
                                        <label for="file" class="form-label">Image</label>
                                        <input type="file" class="form-control" placeholder="100"  name="file">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 p-0 input-group align-self-center">
                                        <button type="button" class="btn primary-button free-trail-submit-btn"><i class="icon-rocket"></i>Submit</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @include('action-blog')
@endsection
@section('page-script')
    <!-- sweet alert -->
    <script src="/assets/libs/sweetalert2/sweetalert2.min.js"></script>
    <script>

        <!-- Free-trail form submit -->
        $('.free-trail-submit-btn').click(function (){
            var formData = $('.free-trail-form').serialize()
            console.log('formData :', formData)
            $.ajax({
                url: "{{ route('free-trail') }}",
                type: "PATCH",
                'Content-Type': 'application/x-www-form-urlencoded;charset=UTF-8',
                data: {
                    _token: "{{csrf_token()}}",
                    data:formData
                },
                cache: false,
                success: function (data) {
                    console.log(data)
                    if(data){
                        swal.fire({
                            title: "Success !!!",
                            text: "Successfully updated order status",
                            type: "success"
                        }).then(function() {
                            window.location.reload();
                        });
                    }
                },
                error: function (reject) {

                }
            });
        })
    </script>
@endsection
