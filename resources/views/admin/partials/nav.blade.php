<!-- Topbar -->
<nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

    <!-- Sidebar Toggle (Topbar) -->
    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
        <i class="fa fa-bars"></i>
    </button>

    <!-- Topbar Search -->
    <!--form
        class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
        <div class="input-group">
            <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                aria-label="Search" aria-describedby="basic-addon2">
            <div class="input-group-append">
                <button class="btn btn-primary" type="button">
                    <i class="fas fa-search fa-sm"></i>
                </button>
            </div>
        </div>
    </form-->
    <livewire:admin-front-search />

    <!-- Topbar Navbar -->
    <ul class="navbar-nav ml-auto">

        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
        <li class="nav-item dropdown no-arrow d-sm-none">
            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-search fa-fw"></i>
            </a>
            <!-- Dropdown - Messages -->
            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                aria-labelledby="searchDropdown">
                <form class="form-inline mr-auto w-100 navbar-search">
                    <div class="input-group">
                        <input type="text" class="form-control bg-light border-0 small"
                            placeholder="Search for..." aria-label="Search"
                            aria-describedby="basic-addon2">
                        <div class="input-group-append">
                            <button class="btn btn-primary" type="button">
                                <i class="fas fa-search fa-sm"></i>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </li>

        <!-- Nav Item - Messages -->
        <li class="nav-item dropdown no-arrow mx-1">
            <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button"
                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-envelope fa-fw"></i>
                <!-- Counter - Messages -->
                <span class="badge badge-danger badge-counter">{{ count($nav_admin_feedbacks_count) + count($nav_admin_ss_count) }}</span>
            </a>
            <!-- Dropdown - Messages -->
            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                aria-labelledby="messagesDropdown">
                <h6 class="dropdown-header">
                    Feedbacks/Suggestions
                </h6>
                @if (count($nav_admin_feedbacks) >= 1 || count($nav_admin_ss) > 1)
                    @foreach ($nav_admin_feedbacks as $feed_admin)
                        <a class="dropdown-item d-flex align-items-center" href="{{ route('product.feedback.show', $feed_admin->id) }}">
                            <div class="font-weight-bold">
                                <div class="text-truncate">{{ $feed_admin->product_name }}</div>
                                <div class="small text-gray-500">By : {{ $feed_admin->username }} · {{ $feed_admin->created_at->diffForHumans() }}</div>
                            </div>
                        </a>
                    @endforeach
                    @foreach ($nav_admin_ss as $ss34343)
                        <a class="dropdown-item d-flex align-items-center" href="{{ route('product.feedback.index') }}">
                            <div class="font-weight-bold">
                                <div class="text-truncate">{{ substr($ss34343->collection, 0,20) }}</div>
                                <div class="small text-gray-500">By : {{ $ss34343->email }}</div>
                            </div>
                        </a>
                    @endforeach
                    <a class="dropdown-item text-center" href="{{ route('product.feedback.index') }}">
                        <b>View All Feedback/Suggestions</b>
                    </a>
                @else
                <a class="dropdown-item text-center" href="#">
                    <b>No Feedbacks Yet!</b>
                </a>
                @endif
                
            </div>
        </li>

        <div class="topbar-divider d-none d-sm-block"></div>

        <!-- Nav Item - User Information -->
        <li class="nav-item dropdown no-arrow">
            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small">{{ Auth::user()->name }}</span>
                <img class="img-profile rounded-circle"
                    src="
                    @if (Auth::user()->image <> NULL)
                        {{ asset(Auth::user()->image) }}
                    @else
                        {{ asset('images/admin/undraw_profile.svg') }}
                    @endif">
            </a>
            <!-- Dropdown - User Information -->
            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                aria-labelledby="userDropdown">
                <a class="dropdown-item" href="{{ route('admin.csv.create') }}">
                    <i class="fas fa-list-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                     Upload CSV
                </a>
                <a class="dropdown-item" href="{{ route('admin_products.create') }}">
                    <i class="fas fa-list-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                     Add New Products
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="{{ route('admin_products.index') }}">
                    <i class="fas fa-list-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                    Hot Wheels Products
                </a>
                <a class="dropdown-item" href="{{ route('lego_minifigures_form.index') }}">
                    <i class="fas fa-list-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                    Lego MiniFigures Products
                </a>
                <a class="dropdown-item" href="{{ route('hotToys.index') }}">
                    <i class="fas fa-list-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                    Hot Toys Products
                </a>
                <a class="dropdown-item" href="{{ route('admin_categories.index') }}">
                    <i class="fas fa-stream fa-sm fa-fw mr-2 text-gray-400"></i>
                    Categories
                </a>
                <a class="dropdown-item" href="{{ route('admin_collections.index') }}">
                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                    Collections
                </a>
                <a class="dropdown-item" href="{{ route('admin_series.index') }}">
                    <i class="fas fa-layer-group fa-sm fa-fw mr-2 text-gray-400"></i>
                    Subseries
                </a>
                <a class="dropdown-item" href="{{ route('admin_themes.index') }}">
                    <i class="far fa-list-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                    Themes
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="{{ route('admin.users.index') }}">
                    <i class="fas fa-users fa-sm fa-fw mr-2 text-gray-400"></i>
                    All Users
                </a>
                <a class="dropdown-item" href="{{ route('admin.user.premium') }}">
                    <i class="fas fa-user-shield fa-sm fa-fw mr-2 text-gray-400"></i>
                    Premium Users
                </a>
                <a class="dropdown-item" href="{{ route('admin.user.standard') }}">
                    <i class="fas fa-user-tie fa-fw mr-2 text-gray-400"></i>
                    Standard Users
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="{{ route('admin.users.create') }}">
                    <i class="fas fa-user-plus fa-fw mr-2 text-gray-400"></i>
                    Add New User
                </a>
                <a class="dropdown-item" href="{{ route('admin.users.admin_users') }}">
                    <i class="fas fa-user-plus fa-fw mr-2 text-gray-400"></i>
                    Users Added By Admin
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="{{ route('admin_about.create') }}">
                    <i class="fas fa-user-tie fa-fw mr-2 text-gray-400"></i>
                    Update About Page
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                    Logout
                </a>
            </div>
        </li>

    </ul>

</nav>
<!-- End of Topbar -->