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
                    <h4>Users</h4>

                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-md">
                            <tbody><tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Role</th>
                                <th>Action</th>
                            </tr>
                            @foreach($users as $user)
                                <tr>
                                    <td>{{$user->id}}</td>
                                    <td>{{$user->name}}</td>
                                    <td>{{$user->email}}</td>
                                    <td>{{$user->phone}}</td>
                                    <td>{{$user->role->name}}</td>
                                    <td>
                                        <div class="row">

                                            @if($user->id != auth()->id())
                                                <form action="{{route('users.destroy' , $user->id)}}" method="POST">
                                                    @method('DELETE')
                                                    @csrf
                                                    <input class="btn btn-danger mx-2" type="submit" onclick="return confirm('Confirm deleted !')" value="Delete">
                                                </form>
                                            @endif

                                            <a href="{{route('users.edit' , $user->id)}}" class="mx-2 btn btn-info">Edit</a>


                                        </div>
                                    </td>

                                </tr>
                            @endforeach


                            </tbody></table>
                    </div>
                </div>
                <div class="card-footer text-right">
                    <nav class="d-inline-block">
                        {{$users -> links()}}
                    </nav>
                </div>
            </div>
        </div>

    </div>
</x-layouts.site>

