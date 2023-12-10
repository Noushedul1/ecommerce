<!-- START SIDEBAR-->
<nav class="page-sidebar" id="sidebar">
    <div id="sidebar-collapse">
        <div class="admin-block d-flex">
            <div>
                <img src="{{ asset('admin') }}/assets/img/admin-avatar.png" width="45px" />
            </div>
            <div class="admin-info">
                <div class="font-strong">James Brown</div><small>Administrator</small></div>
        </div>
        <ul class="side-menu metismenu">
            <li>
                <a class="active" href="{{ route('admin.dashboard') }}"><i class="sidebar-item-icon fa fa-th-large"></i>
                    <span class="nav-label">Dashboard</span>
                </a>
            </li>
            <li class="heading">FEATURES</li>
            <li>
                <a href="javascript:;"><i class="sidebar-item-icon fa fa-bookmark"></i>
                    <span class="nav-label">Category</span><i class="fa fa-angle-left arrow"></i></a>
                    <ul class="nav-2-level collapse">
                        @if (Route::has('admin.category.create'))
                        <li>
                            <a href="{{ route('admin.category.create') }}">Store</a>
                        </li>
                        @endif
                        @if (Route::has('admin.category.index'))
                        <li>
                            <a href="{{ route('admin.category.index') }}">Manage</a>
                        </li>
                        @endif
                    </ul>
            </li>
            <li>
                <a href="javascript:;"><i class="sidebar-item-icon fa fa-bookmark"></i>
                    <span class="nav-label">Sub Category</span><i class="fa fa-angle-left arrow"></i></a>
                    <ul class="nav-2-level collapse">
                        @if (Route::has('admin.subcategory.create'))
                        <li>
                            <a href="{{ route('admin.subcategory.create') }}">Store</a>
                        </li>
                        @endif
                        @if (Route::has('admin.subcategory.index'))
                        <li>
                            <a href="{{ route('admin.subcategory.index') }}">Manage</a>
                        </li>
                        @endif
                    </ul>
            </li>
            <li>
                <a href="javascript:;"><i class="sidebar-item-icon fa fa-bookmark"></i>
                    <span class="nav-label">Brand</span><i class="fa fa-angle-left arrow"></i></a>
                    <ul class="nav-2-level collapse">
                        @if (Route::has('admin.brand.create'))
                        <li>
                            <a href="{{ route('admin.brand.create') }}">Store</a>
                        </li>
                        @endif
                        @if (Route::has('admin.brand.index'))
                        <li>
                            <a href="{{ route('admin.brand.index') }}">Manage</a>
                        </li>
                        @endif
                    </ul>
            </li>
            <li>
                <a href="javascript:;"><i class="sidebar-item-icon fa fa-bookmark"></i>
                    <span class="nav-label">Product</span><i class="fa fa-angle-left arrow"></i></a>
                    <ul class="nav-2-level collapse">
                        @if (Route::has('admin.product.create'))
                        <li>
                            <a href="{{ route('admin.product.create') }}">Store</a>
                        </li>
                        @endif
                        @if (Route::has('admin.product.index'))
                        <li>
                            <a href="{{ route('admin.product.index') }}">Manage</a>
                        </li>
                        @endif
                    </ul>
            </li>
            <li>
                <a href="javascript:;"><i class="sidebar-item-icon fa fa-bookmark"></i>
                    <span class="nav-label">Unit</span><i class="fa fa-angle-left arrow"></i></a>
                    <ul class="nav-2-level collapse">
                        @if (Route::has('admin.unit.create'))
                        <li>
                            <a href="{{ route('admin.unit.create') }}">Store</a>
                        </li>
                        @endif
                        @if (Route::has('admin.unit.index'))
                        <li>
                            <a href="{{ route('admin.unit.index') }}">Manage</a>
                        </li>
                        @endif
                    </ul>
            </li>
            <li>
                <a href="javascript:;"><i class="sidebar-item-icon fa fa-bookmark"></i>
                    <span class="nav-label">Order</span><i class="fa fa-angle-left arrow"></i></a>
                    <ul class="nav-2-level collapse">
                        @if (Route::has('admin.order.index'))
                        <li>
                            <a href="{{ route('admin.order.index') }}">Manage</a>
                        </li>
                        @endif
                    </ul>
            </li>
        </ul>
    </div>
</nav>
<!-- END SIDEBAR-->
