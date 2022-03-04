@extends('layouts.admin')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 text-center p-4">
                @include('admin.partials.alert')
                <h3 class="m-0 font-weight-bold text-primary">All Users</h3>
                {{ $users->links() }}
            </div>
            @foreach ($users as $user)
            <div class="col-sm-3">
                <div class="card shadow mb-4 my-card">
                    <a href="#collapseCardExample_{{ $user->id }}" class="d-block card-header py-3" data-toggle="collapse"
                        role="button" aria-expanded="true" aria-controls="collapseCardExample">
                        <h6 class="m-0 font-weight-bold text-primary">
                            {{ ucfirst($user->name) }}
                        </h6>
                    </a>
                    <!-- Card Content - Collapse -->
                    <div class="collapse show" id="collapseCardExample_{{ $user->id }}">
                        <div class="card-body">
                            <div class="text-center">
                                <a href="{{ route('admin.user.show', $user->id) }}">
                                    <img class="img-fluid  mb-4" style="width: 15rem;height:10rem"
                                    src="
                                    @if ($user->image == NULL)
                                    {{ asset('images/admin/undraw_profile.svg') }} 
                                    @else
                                    {{ asset($user->image) }}
                                    @endif "
                                     alt="user image">
                                </a>
                            </div>
                            <div class="row">
                                <div class="col-sm-5" style="color: black">
                                    {{ $user->membership }}
                                </div>
                                <div class="col-sm-7 text-right">
                                    <small>{{ $user->updated_at->diffForHumans() }}</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>                
            @endforeach
        </div>
    </div>
@endsection

