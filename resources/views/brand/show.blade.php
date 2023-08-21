<x-layouts.site>

    <div class="row">


        <div class="col-12 col-md-12 col-lg-12">

            @csrf
            <div class="card">
                <div class="card-header">
                    <h4>Brand ID - {{$brand->id}}</h4>
                </div>
                <div class="card-body">

                    <div class="table-responsive">

                        <table class="table">

                            <tr>
                                <th>ID</th>  <td>{{$brand->id}}</td>
                            </tr>

                            <tr>
                                <th>Name</th> <td>{{$brand->name}}</td>
                            </tr>

                            <tr>
                                <th>Slug</th>  <td>{{$brand->slug}}</td>
                            </tr>

                        </table>

                        <a href="{{route('brands.index')}}" class="btn btn-warning">Back</a>

                    </div>

                </div>

            </div>
        </div>


</x-layouts.site>

