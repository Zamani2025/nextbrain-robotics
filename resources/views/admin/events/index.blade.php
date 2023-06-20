<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            @if (session()->has("status"))
                <div class="bg-green-500 text-green-300 p-3 rounded-lg font-bold text-2xl">{{session()->get("status")}}</div>
            @endif
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-5">
                <div class="flex justify-between">
                    <div>
                        <h1 class="font-bold text-lg">All Events</h1>
                    </div>
                    <div>
                        <a href="{{route("event.create")}}" class="btn bg-blue-600 text-white font-bold">Add new event</a>
                    </div>
                </div>
                <div class="mt-6">
                   
                </div>
                
            </div>
        </div>
    </div>
</x-app-layout>