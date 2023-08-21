<x-layouts.site>
    <div class="row">


        <div class="col-12 col-md-12 col-lg-12">
            <form action="{{route('users.update', $user->id)}}" method="POST">
                @csrf
                @method('PUT')
                <div class="card">
                    <div class="card-header">
                        <h4>Update User</h4>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" value="{{$user->name}}" name="name" class="form-control  @error('name') is-invalid @enderror">
                            @error('name') <div class="invalid-feedback">{{$message}}</div>@enderror
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="text" value="{{$user->email}}" name="email" class="form-control  @error('email') is-invalid @enderror">
                            @error('email') <div class="invalid-feedback">{{$message}}</div>@enderror
                        </div>

                        <div class="form-group">
                            <label>Phone</label>
                            <input type="text" value="{{$user->phone}}" name="phone" class="form-control  @error('phone') is-invalid @enderror">
                            @error('phone') <div class="invalid-feedback">{{$message}}</div>@enderror
                        </div>

                        <div class="form-group">
                            <label>Role</label>
                            <select name="role_id" id="" class="form-control">
                                <option value="">Select Role</option>
                                @foreach ($roles as $role)
                                    <option {{ $user->role_id == $role->id ? 'selected' : '' }}
                                            value="{{ $role->id }}">{{ $role->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="card-footer text-right">
                        <button class="btn btn-primary " type="submit">Update</button>
                    </div>
                </div>
        </div>
        </form>
    </div>
    </div>

</x-layouts.site>


