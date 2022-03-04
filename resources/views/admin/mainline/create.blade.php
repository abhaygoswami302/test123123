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
                    <h6 class="m-0 font-weight-bold text-primary">Add New Casting</h6>
                </div>
                <div class="card-body">
                    <form action="{{ route('admin_castings.store') }}" method="POST" class="user" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-sm-12">
                              <livewire:admin-casting-form />
                            </div>
                            <div class="form-group col-lg-12">
                                <input type="text" name="name" class="form-control" placeholder="Enter casting Name" required>
                            </div>
                            <div class="form-group col-lg-12">
                                <textarea name="description" id="description" cols="30" rows="4" class="form-control" placeholder="Enter Description" required></textarea>
                            </div>
                            <div class="form-group col-lg-4">
                                <label for="image">Add casting Image</label>
                            </div>
                            <div class="form-group col-sm-8">
                                <input type="file" name="image" id="image" >
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-lg-12">
                                <input type="submit" value="Add New Casting" class="btn btn-primary btn-user btn-block">
                            </div>
                        </div> 
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection