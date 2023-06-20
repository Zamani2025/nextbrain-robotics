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

<section class="overflow-hidden text-gray-700 ">
    <div class="container px-5 py-2 mx-auto lg:pt-12 lg:px-32">
        <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
            <h1 class="display-6 mb-5">Our Team Members</h1>
        </div>
      <div class="flex flex-wrap -m-1 md:-m-2 mb-1">
        @foreach ($galleries as $gallery)
          <div class="flex flex-wrap w-1/3 wow fadeInUp" data-wow-delay="0.1s">
            <div class="w-full p-1 md:p-2">
              <img alt="gallery" class="block object-cover object-center w-full h-full rounded-lg"
              src="{{asset("storage/gallaries")}}/{{$gallery->image}}">
            </div>
          </div>     
        @endforeach
      </div>
      <div class="col-12 pb-1">{{$galleries->links('pagination::bootstrap-5')}}</div>
    </div>
  </section>