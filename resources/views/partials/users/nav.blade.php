<header class="custHeader">
    <div class="Header_Top">
        <div class="container">
            <div class="row">
                <div class="col-xl-10 col-lg-10 col-md-10 col-sm-9 col-9">
                    <div class="Header_Top_Lft">
                        <ul>
                            <li><a href="mailto:support@ultimatecollectionscompany.com"><img src="{{ asset('images/mail.svg') }}" alt="" /> <span>support@ultimatecollectionscompany.com</span></a></li>
                            <!--li><a href="tel:+1  888-594-8387"><img src="{{ asset('images/phone.png') }}" alt="" /> <span>+1  888-594-8387</span></a></li-->
                        </ul>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-2 col-md-2 col-sm-3 col-12">
                    <div class="Header_Top_Rt">
                        <ul>
                            <li><a target="_blank" href="https://www.facebook.com/ultimatecollectionscompany"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a target="_blank" href="https://twitter.com/ultimatecollco"><i class="fab fa-twitter"></i></a></li>
                            <li><a target="_blank" href="https://www.instagram.com/ultimate_collections_company/?hl=en"><i class="fab fa-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="Header_Bottom">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-3">
                    <div class="Header_Bottom_Lft">
                        <a href="{{ route('users.dashboard') }}"><img src="{{ asset('images/logo.png') }}" alt="" title="Ultimate Collections Company" /></a>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-9">
                    <!--div class="Header_Bottom_Rt">
                        <div class="search">
                            <span class="SrchHvr">
                                <input type="text" name="search" class="SrchHdr form-control" placeholder="Search Here" />
                                <button type="submit" class="SrcBtn"><img src="{{ asset('images/search.png') }}" alt="" /></button>
                            </span>
                        </div>
                    </div-->
                </div>
            </div>
        </div>
    </div>
</header>
<nav class="Nav_Menu">
    <div class="container">
        <div class="row">
            <div class="col-xl-8 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="Nav_Menu_Lft" id="cssmenu">
                    <div id="head-mobile"></div>
                    <div class="button"></div>
                    <!--ul>
                        <li class="MnLst"><a href='{{ route('welcome') }}'>Home</a></li>
                        <li class="MnLst"><a href='{{ route('product.index') }}'>Products</a></li>
                        <li class="MnLst"><a href='{{ route('category.index') }}'>Categories</a></li>
                        <li class="MnLst"><a href='{{ route('collection.index') }}'>Collections</a></li>
                        
                        <div class="DtpNon">
                            <br><hr>
                            <li class="MnLst"><a href='#'>Settings</a></li>
                            <li class="MnLst">
                                <a href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                            </li>
                        </div>
                    </ul-->
                    <ul>
                        @guest
                            <div class="DtpNon">
                                <li><a href="{{ route('login') }}">Login</a></li>
                                <li><a href="{{ route('pricing') }}">SignUp</a></li>
                            </div>
                        @else
                        <li class="MnLst"><a href='{{ route('welcome') }}'>Home</a></li>
                        <li class="MnLst"><a href='{{ route('product.index') }}'>Products</a></li>
                        <li class="MnLst"><a href='{{ route('category.index') }}'>Categories</a></li>
                        <li class="MnLst"><a href='{{ route('collection.index') }}'>Collections</a></li>
                            <div class="DtpNon">
                                <li class='active MnLst'><a href="javascript:void(0);">{{ ucfirst(Auth::user()->name) }}</a>
                                    <ul>
                                        <li>
                                            <a href="{{ route('users.dashboard') }}">
                                                My Panel
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{ route('userproduct.index') }}">
                                                My Product
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{ route('userproduct.create') }}">
                                                Add New Product
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                            document.getElementById('logout-form').submit();">
                                                {{ __('Logout') }}
                                            </a>
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                @csrf
                                            </form>
                                        </li>
                                    </ul>
                                </li>
                            </div>
                        @endguest
                    </ul>
                </div>
            </div>
            <div class="col-xl-4 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="Nav_Menu_Rt">

                      @guest
                      <ul>
                        <li><a href="{{ route('login') }}">Login</a></li>
                        <li><a href="{{ route('pricing') }}">SignUp</a></li>
                      </ul>
                      @else
                      <ul class="mycustomdropdown">
                        <li>
                            <span class="dropdown">
                                <a  href="javascript:void(0);" class="dropdown-toggle" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Hi, {{ ucfirst(Auth::user()->name) }}
                                </a>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href="{{ route('users.dashboard') }}">My Panel</a>
                                    <a class="dropdown-item" href="{{ route('userproduct.index') }}">My Products Collection</a>
                                    <a class="dropdown-item" href="{{ route('userproduct.create') }}">Add New Product</a>
                                    <!--a class="dropdown-item" href="{{ route('tempIndex') }}">Upload CSV</a-->
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </span>
                        </li>
                    </ul>
                    
                      @endguest
                </div>
            </div>
        </div>
    </div>
</nav>