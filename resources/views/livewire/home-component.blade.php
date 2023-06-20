
<div class="container-xxl bg-light my-5 py-5">
    <div class="container py-5">
        <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
            <h1 class="display-6 mb-5">You Deserves The Opportunity To Learn</h1>
        </div>
        <div class="row g-4 justify-content-center">
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="service-item bg-white text-center h-100 p-4 p-xl-5">
                    <img class="img-fluid mb-4" src="img/icon-1.png" alt="">
                    <h4 class="mb-3">Learn More About Auduino</h4>
                    <p class="mb-4">Tempor ut dolore lorem kasd vero ipsum sit eirmod sit. Ipsum diam justo sed vero dolor duo.</p>
                    <a class="btn btn-outline-primary px-3" href="">
                        Learn More
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="service-item bg-white text-center h-100 p-4 p-xl-5">
                    <img class="img-fluid mb-4" src="img/icon-2.png" alt="">
                    <h4 class="mb-3">Learn More About Basic Electricity</h4>
                    <p class="mb-4">Tempor ut dolore lorem kasd vero ipsum sit eirmod sit. Ipsum diam justo sed vero dolor duo.</p>
                    <a class="btn btn-outline-primary px-3" href="">
                        Learn More
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="service-item bg-white text-center h-100 p-4 p-xl-5">
                    <img class="img-fluid mb-4" src="img/icon-2.png" alt="">
                    <h4 class="mb-3">Learn More About Basic Electricity</h4>
                    <p class="mb-4">Tempor ut dolore lorem kasd vero ipsum sit eirmod sit. Ipsum diam justo sed vero dolor duo.</p>
                    <a class="btn btn-outline-primary px-3" href="">
                        Learn More
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- Team Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
            {{-- <div class="d-inline-block rounded-pill bg-secondary text-primary py-1 px-3 mb-3">Team Members</div> --}}
            <h1 class="display-6 mb-5">Our Executives</h1>
        </div>
        <div class="row g-4">
            @foreach ($executives as $executive)
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="team-item position-relative rounded overflow-hidden">
                        <div class="overflow-hidden">
                            <img class="img-fluid rounded-full" src="{{asset ("storage/".$executive->image)}}" alt="">
                        </div>
                        <div class="team-text bg-white text-center p-4" style="border-top-right-radius: 20px">
                            <h5>{{$executive->name}}</h5>
                            <h6>{{$executive->position}}</h6>
                        </div>
                    </div>
                </div>   
            @endforeach
            
        </div>
        <div class="col-12 pb-1">{{$executives->links('pagination::bootstrap-5')}}</div>
    </div>
</div>
<!-- Team End -->
