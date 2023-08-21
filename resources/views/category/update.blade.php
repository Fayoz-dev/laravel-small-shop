<x-layouts.site>
  <div class="row">


    <div class="col-12 col-md-12 col-lg-12">
         <form action="{{route('categories.update', $category->id)}}" method="POST">
        @csrf
       @method('PUT')
<div class="card">
    <div class="card-header">
        <h4>Update category</h4>
    </div>
    <div class="card-body">
        <div class="form-group">
            <label>Name</label>
            <input type="text" value="{{$category->name}}" name="name" class="form-control  @error('name') is-invalid @enderror">
            @error('name') <div class="invalid-feedback">{{$message}}</div>@enderror
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

