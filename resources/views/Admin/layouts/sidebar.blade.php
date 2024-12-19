<!-- Menu -->

<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="app-brand demo">
        <a href="javascript:void(0)" class="app-brand-link">
            <span class="app-brand-logo demo">
                <svg width="32" height="22" viewBox="0 0 32 22" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M0.00172773 0V6.85398C0.00172773 6.85398 -0.133178 9.01207 1.98092 10.8388L13.6912 21.9964L19.7809 21.9181L18.8042 9.88248L16.4951 7.17289L9.23799 0H0.00172773Z"
                        fill="#7367F0" />
                    <path opacity="0.06" fill-rule="evenodd" clip-rule="evenodd"
                        d="M7.69824 16.4364L12.5199 3.23696L16.5541 7.25596L7.69824 16.4364Z"
                        fill="#161616" />
                    <path opacity="0.06" fill-rule="evenodd" clip-rule="evenodd"
                        d="M8.07751 15.9175L13.9419 4.63989L16.5849 7.28475L8.07751 15.9175Z"
                        fill="#161616" />
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M7.77295 16.3566L23.6563 0H32V6.88383C32 6.88383 31.8262 9.17836 30.6591 10.4057L19.7824 22H13.6938L7.77295 16.3566Z"
                        fill="#7367F0" />
                </svg>
            </span>
            <span class="app-brand-text demo menu-text fw-bold">Albela</span>
        </a>

        <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto">
            <i class="ti menu-toggle-icon d-none d-xl-block align-middle"></i>
            <i class="ti ti-x d-block d-xl-none ti-md align-middle"></i>
        </a>
    </div>

    <div class="menu-inner-shadow"></div>

    <ul class="menu-inner py-1">
        <!-- Dashboards -->
        <li class="menu-item">
            <a class="menu-link {{ Route::is('admin.dashboard') ? 'active bg-gradient-primary' : '' }}"
                href="{{ route('admin.dashboard') }}">
                <i class="menu-icon fas fa-chart-bar"></i>
                <div>Dashboard</div>
            </a>
        </li>
        
        <li class="menu-item">
            <a class="menu-link {{ Route::is('admin.users.index', 'admin.users.create', 'admin.users.edit', 'admin.users.show') ? 'active bg-gradient-primary' : '' }}"
                href="{{ route('admin.users.index') }}">
                <i class="menu-icon fas fa-user"></i>
                <div>Users</div>
            </a>
        </li>

        <li class="menu-item">
            <a class="menu-link {{ Route::is('admin.categories.index', 'admin.categories.create', 'admin.categories.edit', 'admin.categories.show') ? 'active bg-gradient-primary' : '' }}"
                href="{{ route('admin.categories.index') }}">
                <i class="menu-icon fas fa-list"></i>
                <div>Category</div>
            </a>
        </li>

        <li class="menu-item">
            <a class="menu-link {{ Route::is('admin.products.index', 'admin.products.create', 'admin.products.edit', 'admin.products.show') ? 'active bg-gradient-primary' : '' }}"
                href="{{ route('admin.products.index') }}">
                <i class="menu-icon fa-solid fa-store"></i>
                <div>Product</div>
            </a>
        </li>

        <li class="menu-item">
            <a class="menu-link {{ Route::is('admin.orders.index', 'admin.orders.create', 'admin.orders.edit', 'admin.orders.show') ? 'active bg-gradient-primary' : '' }}"
                href="{{ route('admin.orders.index') }}">
                <i class="menu-icon fa-solid fa-bag-shopping"></i>
                <div>Order</div>
            </a>
        </li>

        <!-- Front Pages -->
        <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons ti ti-files"></i>
                <div data-i18n="Front Pages">Front Pages</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item">
                    <a href="../front-pages/landing-page.html" class="menu-link" target="_blank">
                        <div data-i18n="Landing">Landing</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="../front-pages/pricing-page.html" class="menu-link" target="_blank">
                        <div data-i18n="Pricing">Pricing</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="../front-pages/payment-page.html" class="menu-link" target="_blank">
                        <div data-i18n="Payment">Payment</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="../front-pages/checkout-page.html" class="menu-link" target="_blank">
                        <div data-i18n="Checkout">Checkout</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="../front-pages/help-center-landing.html" class="menu-link" target="_blank">
                        <div data-i18n="Help Center">Help Center</div>
                    </a>
                </li>
            </ul>
        </li>

        
    </ul>
</aside>
<!-- / Menu -->