<section class="pb-10 lg:pt-[120px] lg:pb-20">
    <div class="container">
        <div class="-mx-4 flex flex-wrap justify-center">
            <div class="w-full px-4">
                <div class="mx-auto mb-[60px] max-w-[510px] text-center lg:mb-20">
                    <h2 class="mb-4 text-3xl font-bold text-dark sm:text-4xl md:text-[40px]">
                        Our Recent News
                    </h2>
                </div>
            </div>
        </div>

        <div class="-mx-4 flex flex-wrap">
            @forelse ($response->articles as $data)
                <div class="w-full px-4 md:w-1/2 lg:w-1/3">
                    <div class="mx-auto mb-10 max-w-[370px]">
                        <div class="mb-8 overflow-hidden rounded">
                            <img style="height: 250px"
                                @if ($data->urlToImage === null) src="{{ asset('assets/img/downloads.jfif') }}"
              @else
                src="{{ $data->urlToImage }}" @endif
                                alt="image" class="w-full" />
                        </div>
                        <div>
                            @if ($data->author !== null)
                                <span
                                    class="mb-5 inline-block rounded bg-primary py-1 px-4 text-center text-xs font-semibold leading-loose text-white">
                                    {{ $data->author }}
                                </span>
                            @endif
                            <p>
                                <a href="javascript:void(0)"
                                    class="mb-4 inline-block text-xl text-dark hover:text-primary sm:text-2xl ">
                                    {{ substr(strip_tags($data->title), 0, 200) }}
                              {{ strlen(strip_tags($data->title)) > 50 ? "..." : "" }}
                                </a>
                            </p>
                            <p class="text-base text-body-color">{{ substr(strip_tags($data->description), 0, 300) }}
                              {{ strlen(strip_tags($data->description)) > 50 ? "...ReadMore" : "" }}
                            </p>
                        </div>
                    </div>
                </div>

            @empty
            @endforelse
            {{-- <div class="w-full px-4 md:w-1/2 lg:w-1/3">
          <div class="mx-auto mb-10 max-w-[370px]">
            <div class="mb-8 overflow-hidden rounded">
              <img
              style="height: 350px"
                src="{{asset ("assets/img/patron.jpg")}}"
                alt="image"
                class="w-full"
              />
            </div>
            <div>
              <span
                class="mb-5 inline-block rounded bg-primary py-1 px-4 text-center text-xs font-semibold leading-loose text-white"
              >
                Mar 15, 2023
              </span>
              <h3>
                <a
                  href="javascript:void(0)"
                  class="mb-4 inline-block text-xl font-semibold text-dark hover:text-primary sm:text-2xl lg:text-xl xl:text-2xl"
                >
                  How to earn more money as a wellness coach
                </a>
              </h3>
              <p class="text-base text-description-color">
                Lorem Ipsum is simply dummy text of the printing and
                typesetting industry.
              </p>
            </div>
          </div>
        </div>
        <div class="w-full px-4 md:w-1/2 lg:w-1/3">
          <div class="mx-auto mb-10 max-w-[370px]">
            <div class="mb-8 overflow-hidden rounded">
              <img
              style="height: 350px"
                src="{{asset ("assets/img/patron.jpg")}}"
                alt="image"
                class="w-full"
              />
            </div>
            <div>
              <span
                class="mb-5 inline-block rounded bg-primary py-1 px-4 text-center text-xs font-semibold leading-loose text-white"
              >
                Jan 05, 2023
              </span>
              <h3>
                <a
                  href="javascript:void(0)"
                  class="mb-4 inline-block text-xl font-semibold text-dark hover:text-primary sm:text-2xl lg:text-xl xl:text-2xl"
                >
                  The no-fuss guide to upselling and cross selling
                </a>
              </h3>
              <p class="text-base text-body-color">
                Lorem Ipsum is simply dummy text of the printing and
                typesetting industry.
              </p>
            </div>
          </div>
        </div> --}}
        </div>
    </div>
</section>
