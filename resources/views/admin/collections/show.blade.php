@extends('layouts.admin')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12 text-center p-4">
            <h3 class="m-0 font-weight-bold text-primary">All Categories in <b>{{ $collection->name }}</b></h3>
        </div>
        <div class="col-lg-12">
            <div class="card shadow mb-4">
                <div class="table-responsive">
                    <table class="table card-body table-hover table-striped table-bordered">
                        <thead>
                            <tr class="text-primary">
                                <th>Name</th>
                                <th>Collection Name</th>
                                <th>Description</th>
                                <th>Image</th>
                                <th>Created At</th>
                            </tr>
                        </thead>
                        <tbody>
                           @foreach ($categories as $category)
                            <tr>
                                <td>
                                    <a href="{{ route('admin.collections.products', $category->id) }}">
                                        {{ $category->name }}
                                    </a>
                                </td>
                                <td>
                                    <a href="{{ route('admin_collections.show', $category->collection_id) }}">
                                        {{ $category->collection_name }}
                                    </a>
                                </td>
                                <td style="word-wrap: break-word;width:350px">{{ substr($category->description, 0, 200) }}...</td>
                                <td>
                                    <img src="
                                    @if ($category->image == null)
                                        {{ asset('images/admin/undraw_posting_photo.svg') }}
                                    @else
                                        {{ asset($category->image) }}
                                    @endif
                                    " alt="Image" style="width:200px;height:200px">
                                </td>
                                <td>{{ $category->created_at->diffForHumans() }}</td>
                            </tr>
                           @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>      
    </div>
</div>
@endsection