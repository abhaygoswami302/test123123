@extends('layouts.admin')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 text-center p-4">
                <h3 class="m-0 font-weight-bold text-primary">All Users Added By Admin</h3>
            </div>
            <div class="col-lg-12">
                @include('admin.partials.alert')
                <div class="card shadow mb-4">
                    <div class="table-responsive">
                        <table class="table card-body table-hover table-striped table-bordered">
                            <thead>
                                <tr class="text-primary">
                                    <th>Action</th>
                                    <th>Name</th>
                                    <th>UserName</th>
                                    <th>Email</th>
                                    <th>Membership</th>
                                    <th>Location</th>
                                    <th>Image</th>
                                    <th>Added_At</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($users as $user)
                                <tr>
                                    <td class="text-center">
                                        <form action="{{ route('admin.users.destroy', $user->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="fas fa-trash text-danger" style="border: none" onclick="return confirm('Are you sure you want to delete this User?');"></button>
                                        </form>
                                    </td>
                                    <td>{{ ucfirst($user->name) }}</td>
                                    <td>{{ $user->username ? $user->username : 'N/A' }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>{{ $user->membership }}</td>
                                    <td>{{ $user->location ? $user->location : 'N/A'  }}</td>
                                    <td>{{ $user->image ? $user->image : 'N/A'  }}</td>
                                    <td>{{ $user->created_at->diffForHumans() }}</td>  
                                </tr>
                                @empty
                                    <h3 class="m-0 font-weight-bold text-center">No Users Added By You Yet!</h3>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>     
        </div>
    </div>
@endsection

