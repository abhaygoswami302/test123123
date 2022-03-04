@extends('layouts.admin')

@section('content')
    <div class="container-fluid">
            <!-- Content Row -->
    <div class="row">

        <div class="col-lg-10 mb-4 offset-1">
            @include('admin.partials.alert')

            <!-- Illustrations -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Add New Theme</h6>
                </div>
                <div class="card-body">
                    <form action="{{ route('admin_themes.store') }}" method="POST" class="user" enctype="multipart/form-data">
                        @csrf
                        <div class="row pb-4">
                            <div class="form-group col-lg-12">
                                <label for="">Theme Name</label>
                                <input type="text" name="name" class="form-control" wire:model="name" placeholder="Enter Theme Name" required>
                            </div>
                            <div class="col-sm-12">
                                <label for="">Description</label>
                                <textarea name="description" id="description" cols="30" rows="4" class="form-control" placeholder="Enter Description"></textarea>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-lg-12">
                                <input type="submit" value="Add New Theme" class="btn btn-primary btn-user btn-block">
                            </div>
                        </div> 
                    </form>
                </div>
            </div>

        </div>
    </div>
    </div>
@endsection