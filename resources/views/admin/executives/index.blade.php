<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            @if (session()->has("status"))
                <div class="bg-green-500 text-green-300 p-3 rounded-lg font-bold text-2xl">{{session()->get("status")}}</div>
            @endif
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-5">
                <div class="flex justify-between">
                    <div>
                        <h1 class="font-bold text-lg">All Executives</h1>
                    </div>
                    <div>
                        <a href="{{route("executives.create")}}" class="btn bg-blue-600 text-white font-bold">Add new executive</a>
                    </div>
                </div>
                <div class="mt-6">
                    <table class="table table-striped">
                        <thead>
                            <tr></tr>
                                <th>Name</th>
                                <th>Position</th>
                                <th>Image</th>
                                <th>Date</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($executives as $executive)
                                <tr style="vertical-align: middle">
                                    <td>{{$executive->name}}</td>
                                    <td>{{$executive->position}}</td>
                                    <td><img src="{{asset("storage/".$executive->image)}}" width="50" hieght="50" style="border-radius: 5px;" alt=""></td>
                                    <td>{{$executive->created_at->format("d/m/Y")}}</td>
                                    <td>
                                        <div class="flex justify-around py-3">
                                            <div>
                                                <a href="{{route("executives.edit", ["id" => $executive->id])}}" class="btn bg-blue-300 text-white hover:bg-blue-400">Edit</a>
                                            </div>
                                            <div>
                                                <form action="{{route("executives.destroy", ["id" => $executive->id])}}" method="post" onsubmit="return confirm('Are you sure?')">
                                                    @csrf
                                                    @method("DELETE")
                                                    <button href="" class="btn bg-red-500 text-white hover:bg-red-600">Delete</button>
                                                </form>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>