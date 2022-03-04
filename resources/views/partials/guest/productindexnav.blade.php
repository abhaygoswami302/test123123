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
                        <a href="{{ route('welcome') }}"><img src="{{ asset('images/logo123.png') }}" alt="" title="Ultimate Collections Company" /></a>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-9">
                    @auth
                    <!--livewire:front-search /-->
                    @endauth

                    @guest
                    <div class="Header_Bottom_Rt">
                        <div class="search" style=" overflow: visible !important;">
                            <span class="SrchHvr">
                                <input type="text" name="search" wire:model="searchTerm"  class="SrchHdr form-control" placeholder="Search Products Here" />
                            </span>
                        </div>
                    </div>
                    @endguest
                </div>
            </div>
        </div>
    </div>
</header>
<nav class="Nav_Menu">
    <div class="container">
        <div class="row">
            <div class="col-xl-9 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="Nav_Menu_Lft" id="cssmenu">
                    <div id="head-mobile"></div>
                    <div class="button"></div>
                    <ul>
                        @guest
                            <li class="active MnLst"><a href="{{ route('my.guest.collections.route') }}">Collections</a></li>
                            <li class="MnLst"><a href="{{ route('pricing') }}">Categories</a></li>
                            <li class="MnLst"><a href="{{ route('pricing') }}">Products</a></li>
                            <li class="MnLst"><a href="{{ route('forum.index') }}">Forum</a></li>
                            <li class="MnLst"><a href="{{ route('marketplace.index') }}">Marketplace</a></li>
                            <li class="MnLst"><a href="{{ route('guest.coming.soon') }}">Coming Soon</a></li>
                            <div class="DtpNon">
                                <li><a href="{{ route('login') }}">Login</a></li>
                                <li><a href="{{ route('pricing') }}">SignUp</a></li>
                            </div>
                        @else
                            <li class="active MnLst"><a href="{{ route('collection.index') }}">Collections</a></li>
                            <li class="MnLst"><a href="{{ route('category.index') }}">Categories</a></li>
                            <li class="MnLst"><a href="{{ route('product.index') }}">Products</a></li>
                            <li class="MnLst"><a href="{{ route('forum.index') }}">Forum</a></li>
                            <li class="MnLst"><a href="{{ route('marketplace.index') }}">Marketplace</a></li>
                            <li class="MnLst"><a href="{{ route('guest.coming.soon') }}">Coming Soon</a></li>
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
            <div class="col-xl-3 col-lg-12 col-md-12 col-sm-12 col-12">
                @guest
                <div class="Nav_Menu_Rt">
                    <ul>
                        <li><a href="{{ route('login') }}">Login</a></li>
                        <li><a href="{{ route('pricing') }}">SignUp</a></li>
                    </ul>
                </div>
                @else

                <div class="Nav_Menu_Rt" id="cssmenu">
                    <!--div id="head-mobile"></div>
                    <div class="button"></div-->
                    <ul class="mycustomdropdownapp">
                        <li class='active MnLst'><a href="javascript:void(0);">{{ ucfirst(Auth::user()->name) }}</a>
                            <ul >
                                <li>
                                    <a href="{{ route('users.dashboard') }}">
                                        My Panel
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('userproduct.index') }}">
                                        My Products Collection
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('userproduct.create') }}">
                                        Add New Product
                                    </a>
                                </li>
                                <!--
                                <li>
                                    <a href="{{ route('tempIndex') }}">
                                        Upload CSV
                                    </a>
                                </li>
                                -->
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
                    </ul>
                </div>
                
                
              
                
                @endguest
            </div>
            </ul>
            </div>
        </div>
    </div>
</nav>