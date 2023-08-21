
<x-layouts.site>

    <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-3 "></div>
                    <div class="col-lg-6">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Create Category</h1>
                            </div>
                            <form action="{{route('brands.store')}}" class="user" method="post">
                                @csrf
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" name="name">
                                </div>
                                <div class="form-group">
                                    <div class="control-label">Status</div>
                                    <label class="custom-switch">
                                        <input type="checkbox" name="status" value="1" class="custom-switch-input">
                                    </label>

                                </div>
                                <div class="form-group">
                                    <button class="btn btn-primary" type="submit">Submit</button>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

</x-layouts.site>

