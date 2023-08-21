<x-layouts.site>
    <div class="row">
        <div class="col-12 col-md-12 col-lg-12">
            <div class="card">
                @if(session('success'))
                    <div class="alert alert-success alert-dismissible show fade col-lg-6">
                        <div class="alert-body">
                            <button class="close" data-dismiss="alert">
                                <span>×</span>
                            </button>
                            {{session('success')}}
                        </div>
                    </div>
                @endif
                <div class="card-header">
                    <h4>Products</h4>
                    <div class="card-header-form">
                        <a href="{{route('products.create')}}" class="btn btn-primary">Create</a>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-md">
                            <tbody><tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Category</th>
                                <th>Brand</th>
                                <th>Photo</th>
                                <th>Price</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                            @foreach($products as $product)
                                <tr>
                                    <td>{{$product->id}}</td>
                                    <td>{{$product->name}}</td>
                                    <td>{{$product->category->name}}</td>
                                    <td>{{$product->brand->name}}</td>
                                    <td>{{$product->photo}}</td>
                                    <td>{{$product->price}}</td>
                                    <td>{{$product->status}}</td>
                                    <td>
                                        <div class="row">


                                            <form action="{{route('products.destroy' , $product->id)}}" method="POST">
                                                @method('DELETE')
                                                @csrf
                                                <input class="btn btn-danger mr-2 ml-2" type="submit" onclick="return confirm('Confirm deleted !')" value="Delete">
                                            </form>


                                            <a href="{{route('products.edit' , $product->id)}}" class="btn btn-info">Edit</a>
                                            <a href="{{route('products.show' , $product->id)}}" class="btn btn-primary ml-2">View</a>

                                        </div>
                                    </td>

                                </tr>
                            @endforeach


                            </tbody></table>
                    </div>
                </div>
                <div class="card-footer text-right">
                    <nav class="d-inline-block">
                        {{$products -> links()}}
                    </nav>
                </div>
            </div>
        </div>

    </div>
</x-layouts.site>


