@extends('layouts.admin')

@section('content')
    <div class="container-fluid">
            <!-- Content Row -->
    <div class="row">

        <div class="col-lg-8 mb-4 offset-2">
            @include('admin.partials.alert')

            <!-- Illustrations -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Edit Collection</h6>
                </div>
                <div class="card-body">
                    <form action="{{ route('admin_collections.update', $collection->id) }}" method="POST" class="user" enctype="multipart/form-data">
                        @csrf
                        @method('PATCH')
                        <div class="row">
                            <div class="form-group col-lg-12">
                                <input type="text" name="name" class="form-control" placeholder="Enter Collection Name" value="{{ $collection->name }}" readonly required>
                            </div>
                            <div class="form-group col-lg-12">
                                <textarea name="description" id="description" cols="30" rows="4" class="form-control" placeholder="Enter Description"  required>{{ $collection->description }}</textarea>
                            </div>
                            <div class="form-group col-lg-4">
                                <label for="image">Add Collection Image</label>
                            </div>
                            <div class="form-group col-sm-8">
                                <input type="file" name="image" id="image" >
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-lg-12">
                                <input type="submit" value="Edit Collection" class="btn btn-primary btn-user btn-block">
                            </div>
                        </div> 
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection