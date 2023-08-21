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
                    <h4>orders</h4>

                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-md">
                            <tbody><tr>
                                <th>#</th>
                                <th>Product</th>
                                <th>price</th>
                                <th>Quentity</th>
                            </tr>
                            @foreach($orders as $order)
                                <tr>
                                    <td>{{$order->id}}</td>
                                    <td>{{$order->product->name}}</td>
                                    <td>{{$order->product->price}}</td>
                                    <td>{{$order->quentity}}</td>
                                </tr>
                            @endforeach


                            </tbody></table>
                    </div>
                </div>
                <div class="card-footer text-right">
                    <nav class="d-inline-block">
                        {{$categories -> links()}}
                    </nav>
                </div>
            </div>
        </div>

    </div>
</x-layouts.site>





