<!-- SIDEBAR -->
<section id="sidebar">
    <a href="#" class=" brand">
            <span class="menu-toggle" id="menu-toggle">
                    <svg
                        id="span-1"
                        class="h-6 w-6"
                        width="24"
                        height="24"
                        viewBox="0 0 24 24"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                    >
                        <path
                            d="M20.25 7.5L16 12L20.25 16.5M3.75 12H12M3.75 17.25H16M3.75 6.75H16"
                            stroke="currentColor"
                            stroke-width="2"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                        ></path>
                    </svg>
                    <svg
                        id="span-2"
                        class="w-6 p-2 d-none h-6"
                        xmlns="http://www.w3.org/2000/svg"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke-width="2"
                        stroke="currentColor"
                    >
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5"></path>
                    </svg>
                </span>
        <span id="logo" class="text">Website</span>
    </a>
    <ul id="submenu" class="side-menu border-bottom pb-4 top ps-0">
        <li class="{{ request()->is('admin/dashboard') ? 'active':'' }}">
            <a href="{{ route('admin.dashboard') }}">
                <i class="bx bxs-dashboard"></i>
                <span class="tooltip">ToolTip</span>
                <span class="text">Dashboard</span>
            </a>
        </li>
        <li class="{{ request()->is('admin/all-user') ? 'active':'' }}">
            <a href="{{ route('admin.user.list') }}">
                <i class="bx bxs-dashboard"></i>
                <span class="text">All User</span>
            </a>
        </li>
        <li class="{{ request()->is('admin/dashboard') ? 'active':'' }}">
            <a href="{{ route('admin.dashboard') }}">
                <i class="bx bxs-dashboard"></i>
                <span class="tooltip">ToolTip</span>
                <span class="text">Customer</span>
            </a>
        </li>

        {{--        <li class="{{ request()->is('admin/category-list') ? 'active':'' }}">--}}
        {{--            <a href="{{ route('admin.category') }}">--}}
        {{--                <i class="bx bxs-dashboard"></i>--}}
        {{--                <span class="tooltip">ToolTip</span>--}}
        {{--                <span class="text">Category</span>--}}
        {{--            </a>--}}
        {{--        </li>--}}
        {{--        <li class="{{ request()->is('admin/brand-list') ? 'active':'' }}">--}}
        {{--            <a href="{{ route('admin.brand') }}">--}}
        {{--                <i class="bx bxs-dashboard"></i>--}}
        {{--                <span class="tooltip">ToolTip</span>--}}
        {{--                <span class="text">Brand</span>--}}
        {{--            </a>--}}
        {{--        </li>--}}
    </ul>
    <div>
        <ul>
            <li id="submenu-1" class="d-flex justify-content-between align-items-center px-3">
                <span>Products</span>
                <span><i class="fa-solid fa-chevron-down"></i>  </span>
            </li>
        </ul>
        <ul id="submenu-1-open" class="side-menu border-bottom pb-3 close ps-0 mt-0">
            <li>
                <a href="{{ route('admin.category') }}">
                    <i class="bx bxs-shopping-bag-alt"></i>
                    <span class="tooltip">ToolTip</span>
                    <span class="text">Category</span>
                </a>
            </li>
            <li>
                <a href="{{ route('admin.brand') }}">
                    <i class="bx bxs-doughnut-chart"></i>
                    <span class="tooltip">ToolTip</span>
                    <span class="text ">Brand</span>
                </a>
            </li>
            <li>
                <a href="{{ route('admin.brand') }}">
                    <i class="bx bxs-doughnut-chart"></i>
                    <span class="tooltip">ToolTip</span>
                    <span class="text ">Shipping Cost</span>
                </a>
            </li>

            <li>
                <a href="{{ route('admin.product') }}">
                    <i class="bx bxs-message-dots"></i>
                    <span class="tooltip">ToolTip</span>
                    <span class="text">Products</span>
                </a>
            </li>

        </ul>
    </div>
</section>
<!-- SIDEBAR -->
