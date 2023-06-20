<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-5">
                <div class="flex justify-between">
                    <div>
                        <h1 class="font-bold text-lg">All Galleries</h1>
                    </div>
                    <div>
                        <a href="{{route("gallery.create")}}" class="btn bg-blue-600 text-white font-bold">Add new gallery</a>
                    </div>
                </div>
                <div class="mt-6">
                    <table class="table table-striped">
                        <thead>
                            <tr></tr>
                                <th>Image</th>
                                <th>Date</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($galleries as $gallery)
                                <tr style="vertical-align: middle">
                                    <td><img src="{{asset("storage/".$gallery->image)}}" width="50" hieght="50" style="border-radius: 5px;" alt=""></td>
                                    <td>{{$gallery->created_at->format("d/m/Y")}}</td>
                                    <td>
                                        <form action="{{route("gallery.destroy", ["id" => $gallery->id])}}" method="post" onsubmit="return confirm('Are you sure?')">
                                            @csrf
                                            @method("DELETE")
                                            <button href="" class="btn bg-red-500 text-white hover:bg-red-600">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="col-12 mt-2">{{$galleries->links('pagination::bootstrap-5')}}</div>
            </div>
        </div>
    </div>
</x-app-layout>