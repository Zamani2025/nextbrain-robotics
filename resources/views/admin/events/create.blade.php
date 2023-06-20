<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-5">
                <div class="flex justify-between">
                    <div>
                        <h1 class="font-bold text-lg">Add New Event</h1>
                    </div>
                    <div>
                        <a href="{{route("event.index")}}" class="btn bg-blue-600 text-white font-bold">All Events</a>
                    </div>
                </div>
                <div class="mt-9">
                    <form action="" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-6">
                            <input
                                type="file"
                                name="image"
                                class="bordder-[#E9EDF4] w-full rounded-md border bg-[#FCFDFE] py-3 px-5 text-base text-body-color placeholder-[#ACB6BE] outline-none focus:border-primary focus-visible:shadow-none"
                            />
                            @error("image")
                                <div class="text-red-400">{{$message}}</div>
                            @enderror
                        </div>
                        <div class="mb-6">
                            <button type="submit"
                            class="inline-flex items-center justify-center rounded-md transition  bg-blue-600 py-4 px-10 text-center text-base font-normal text-white hover:bg-opacity-90 lg:px-8 xl:px-10"
                          >
                            Add Event
                          </button>
                        </div>
                    </form>
                </div>
                     
               
            </div>
        </div>
    </div>
</x-app-layout>