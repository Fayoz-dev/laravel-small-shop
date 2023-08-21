<x-layouts.site>

    <div class="row">


        <div class="col-12 col-md-12 col-lg-12">

            @csrf
            <div class="card">
                <div class="card-header">
                    <h4>Category ID - {{$category->id}}</h4>
                </div>
                <div class="card-body">

                    <div class="table-responsive">

                        <table class="table">

                            <tr>
                                <th>ID</th>  <td>{{$category->id}}</td>
                            </tr>

                            <tr>
                                <th>Name</th> <td>{{$category->name}}</td>
                            </tr>

                            <tr>
                                <th>Slug</th>  <td>{{$category->slug}}</td>
                            </tr>

                        </table>

                        <a href="{{route('categories.index')}}" class="btn btn-warning">Back</a>

                    </div>

                </div>

            </div>
        </div>


</x-layouts.site>
