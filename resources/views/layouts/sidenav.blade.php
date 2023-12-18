<nav id="sidebarMenu" class="sidebar d-lg-block bg-gray-800 text-white collapse" data-simplebar>
    <div class="sidebar-inner px-2 pt-3">

        <ul class="nav flex-column pt-3 pt-md-0">

            <li class="nav-item">
                <a href="/dashboard" class="nav-link">
                    <span class="sidebar-icon">
                        <i class="fas fa-home"></i>
                    </span>

                    <span class="sidebar-text">Dashboard </span>
                </a>
            </li>
            <li class="nav-item">
                <span class="nav-link collapsed d-flex justify-content-between align-items-center"
                    data-bs-toggle="collapse" data-bs-target="#orders">
                    <span>
                        <span class="sidebar-icon">
                            <i class="fas fa-shopping-cart"></i>
                        </span>

                        <span class="sidebar-text">Orders</span>
                    </span>
                    <span class="link-arrow">
                        <svg class="icon icon-sm" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                clip-rule="evenodd">
                            </path>
                        </svg>
                    </span>
                </span>
                <div class="multi-level collapse" role="list" id="orders" aria-expanded="false">
                    <ul class="flex-column nav">
                        <li class="nav-item">
                            <a class="nav-link" href="/orders">
                                <span class="sidebar-text">Orders</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/dispatch">
                                <span class="sidebar-text">Dispatch</span>
                            </a>
                        </li>
                        <li class="nav-item">

                            <a class="nav-link" href="/deliveries">
                                <span class="sidebar-text">Deliveries</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/modals">
                                <span class="sidebar-text">Returns</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="nav-item">

                <div class="multi-level collapse" role="list" id="orders" aria-expanded="false">
                    <ul class="flex-column nav">
                        <li class="nav-item">
                            <span class="nav-link collapsed d-flex justify-content-between align-items-center"
                                data-bs-toggle="collapse" data-bs-target="#services">
                                <span>
                                    <span class="sidebar-icon">
                                        <i class="fas fa-scroll"></i>
                                    </span>

                                    <span class="sidebar-text">Services</span>
                                </span>
                            </span>
                            <div class="multi-level collapse" role="list" id="services" aria-expanded="false">
                                <ul class="flex-column nav">
                                    <li class="nav-item">
                                        <a class="nav-link" href="/buttons">
                                            <span class="sidebar-text">Buttons</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="/notifications">
                                            <span class="sidebar-text">Notifications</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="/forms">
                                            <span class="sidebar-text">Forms</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="/modals">
                                            <span class="sidebar-text">Modals</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="/typography">
                                            <span class="sidebar-text">Typography</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="nav-item">
                <a href="/dialer" class="nav-link d-flex justify-content-between">
                    <span>
                        <span class="sidebar-icon">
                            <i class="fas fa-phone"></i>
                        </span>

                        <span class="sidebar-text">Dialer</span>
                    </span>
                </a>
            </li>
            <li class="nav-item">
                <span class="nav-link collapsed d-flex justify-content-between align-items-center"
                    data-bs-toggle="collapse" data-bs-target="#inventory">
                    <span>
                        <span class="sidebar-icon">
                            <i class="fas fa-box"></i>
                        </span>

                        <span class="sidebar-text">Inventory</span>

                    </span>
                    <span class="link-arrow"><svg class="icon icon-sm" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                clip-rule="evenodd"></path>
                        </svg></span>
                </span>
                <div class="multi-level collapse" role="list" id="inventory" aria-expanded="false">
                    <ul class="flex-column nav">
                        <li class="nav-item">
                            <a class="nav-link" href="/products">
                                <span class="sidebar-text">Products</span>
                            </a>
                        </li>


                    </ul>
                </div>
            </li>
            <li class="nav-item">
                <a href="/warehouse" class="nav-link d-flex justify-content-between">
                    <span>
                        <span class="sidebar-icon">
                            <i class="fas fa-users"></i>
                        </span>

                        <span class="sidebar-text">Customers</span>
                    </span>
                </a>
            </li>
            <li class="nav-item">
                <span class="nav-link d-flex justify-content-between align-items-center" data-bs-toggle="collapse"
                    data-bs-target="#warehouse">
                    <span>
                        <span class="sidebar-icon">
                            <i class="fas fa-warehouse"></i>
                        </span>
                        <span class="sidebar-text">Warehouse</span>
                    </span>

                </span>
                <div class="multi-level collapse" role="list" id="warehouse" aria-expanded="false">
                    <ul class="flex-column nav">
                        <li class="nav-item">
                            <a class="nav-link" href="/inventory/receiving">
                                <span class="sidebar-text">Receiving</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/inventory/transfer">
                                <span class="sidebar-text">Transfer</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="nav-item">
                <span class="nav-link collapsed d-flex justify-content-between align-items-center"
                    data-bs-toggle="collapse" data-bs-target="#users">
                    <span>
                        <span class="sidebar-icon">
                            <i class="fas fa-user-shield"></i>
                        </span>

                        <span class="sidebar-text">Users</span>

                    </span>
                    <span class="link-arrow"><svg class="icon icon-sm" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                clip-rule="evenodd"></path>
                        </svg></span>
                </span>
                <div class="multi-level collapse" role="list" id="users" aria-expanded="false">
                    <ul class="flex-column nav">
                        <li class="nav-item">
                            <a class="nav-link" href="/users">
                                <span class="sidebar-text">Admins</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/riders">
                                <span class="sidebar-text">Riders</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/merchants">
                                <span class="sidebar-text">Merchants</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="nav-item">
                <span class="nav-link collapsed d-flex justify-content-between align-items-center"
                    data-bs-toggle="collapse" data-bs-target="#company">
                    <span>
                        <span class="sidebar-icon">
                            <i class="fas fa-shop"></i>
                        </span>

                        <span class="sidebar-text">Company</span>
                    </span>


                </span>
                <div class="multi-level collapse" role="list" id="company" aria-expanded="false">
                    <ul class="flex-column nav">
                        <li class="nav-item">
                            <a class="nav-link" href="/buttons">
                                <span class="sidebar-text">Buttons</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/notifications">
                                <span class="sidebar-text">Notifications</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/forms">
                                <span class="sidebar-text">Forms</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/modals">
                                <span class="sidebar-text">Modals</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/typography">
                                <span class="sidebar-text">Typography</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="nav-item">
                <span class="nav-link collapsed d-flex justify-content-between align-items-center"
                    data-bs-toggle="collapse" data-bs-target="#settings">
                    <span>
                        <span class="sidebar-icon">
                            <i class="fas fa-cog"></i>
                        </span>

                        <span class="sidebar-text">Settings</span>
                    </span>
                    <span class="link-arrow"><svg class="icon icon-sm" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                clip-rule="evenodd"></path>
                        </svg></span>
                </span>
                <div class="multi-level collapse" role="list" id="settings" aria-expanded="false">
                    <ul class="flex-column nav">
                        <li class="nav-item">
                            <a class="nav-link" href="/buttons">
                                <span class="sidebar-text">Buttons</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/notifications">
                                <span class="sidebar-text">Notifications</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/forms">
                                <span class="sidebar-text">Forms</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/modals">
                                <span class="sidebar-text">Modals</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/typography">
                                <span class="sidebar-text">Typography</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="nav-item">
                <span class="nav-link collapsed d-flex justify-content-between align-items-center"
                    data-bs-toggle="collapse" data-bs-target="#hub">
                    <span>
                        <span class="sidebar-icon">
                            <i class="fas fa-link"></i>
                        </span>

                        <span class="sidebar-text">Integration Hub</span>
                    </span>
                    <span class="link-arrow"><svg class="icon icon-sm" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                clip-rule="evenodd"></path>
                        </svg></span>
                </span>
                <div class="multi-level collapse" role="list" id="hub" aria-expanded="false">
                    <ul class="flex-column nav">
                        <li class="nav-item">
                            <a class="nav-link" href="/googlesheets">
                                <span class="sidebar-text">Google Sheets</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/shopify">
                                <span class="sidebar-text">Shopify</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/woocommerce">
                                <span class="sidebar-text">Woocommerce</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/Wordpress">
                                <span class="sidebar-text">Wordpress</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="nav-item">
                <span class="nav-link collapsed d-flex justify-content-between align-items-center"
                    data-bs-toggle="collapse" data-bs-target="#services">
                    <span>
                        <span class="sidebar-icon">
                            <i class="fas fa-dollar"></i>
                        </span>

                        <span class="sidebar-text">Services</span>

                    </span>
                    <span class="link-arrow">
                        <svg class="icon icon-sm" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                clip-rule="evenodd">
                            </path>
                        </svg>
                    </span>
                </span>
                <div class="multi-level collapse" role="list" id="services" aria-expanded="false">
                    <ul class="flex-column nav">
                        <li class="nav-item">
                            <a class="nav-link" href="/buttons">
                                <span class="sidebar-text">Buttons</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/notifications">
                                <span class="sidebar-text">Notifications</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/forms">
                                <span class="sidebar-text">Forms</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/modals">
                                <span class="sidebar-text">Modals</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/typography">
                                <span class="sidebar-text">Typography</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="nav-item">
                <span class="nav-link collapsed d-flex justify-content-between align-items-center"
                    data-bs-toggle="collapse" data-bs-target="#reports">
                    <span>
                        <span class="sidebar-icon">
                            <i class="fas fa-file-excel"></i>
                        </span>
                        <span class="sidebar-text">Reports</span>
                    </span>

                    <span class="link-arrow">
                        <svg class="icon icon-sm" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                clip-rule="evenodd">
                            </path>
                        </svg>
                    </span>
                </span>
                <div class="multi-level collapse" role="list" id="reports" aria-expanded="false">
                    <ul class="flex-column nav">
                        <li class="nav-item">
                            <a class="nav-link" href="/buttons">
                                <span class="sidebar-text">Buttons</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/notifications">
                                <span class="sidebar-text">Notifications</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/forms">
                                <span class="sidebar-text">Forms</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/modals">
                                <span class="sidebar-text">Modals</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/typography">
                                <span class="sidebar-text">Typography</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link d-flex justify-content-between">
                    <span>
                        <span class="sidebar-icon">
                            <i class="fas fa-receipt"></i>
                        </span>

                        <span class="sidebar-text">Waybills</span>
                    </span>
                </a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link d-flex justify-content-between">
                    <span>
                        <span class="sidebar-icon">
                            <i class="fas fa-wifi"></i>
                        </span>
                        <span class="sidebar-text">Telematics</span>
                    </span>
                </a>
            </li>
            <li class="nav-item">
                <span class="nav-link collapsed d-flex justify-content-between align-items-center"
                    data-bs-toggle="collapse" data-bs-target="#alerts">
                    <span>
                        <span class="sidebar-icon">
                            <i class="fas fa-bell"></i>
                        </span>
                        <span class="sidebar-text">Alerts</span>
                    </span>

                    <span class="link-arrow">
                        <svg class="icon icon-sm" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                clip-rule="evenodd">
                            </path>
                        </svg>
                    </span>
                </span>
                <div class="multi-level collapse" role="list" id="alerts" aria-expanded="false">
                    <ul class="flex-column nav">
                        <li class="nav-item">
                            <a class="nav-link" href="/alerts/telegram">
                                <span class="sidebar-text">Telegram</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/alerts/whatsapp">
                                <span class="sidebar-text">Whatsapp</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/alerts/email">
                                <span class="sidebar-text">Email</span>
                            </a>
                        </li>

                    </ul>
                </div>
            </li>


        </ul>
    </div>
</nav>
