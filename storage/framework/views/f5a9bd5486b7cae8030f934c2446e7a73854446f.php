    <aside class="app-sidebar">
        <div class="app-sidebar__logo">
            <a class="header-brand" href="<?php echo e(url('/' . ($page = ''))); ?>">
                <?php if($logo): ?>
                    <img src="<?php echo e(URL::asset("$logo")); ?>" style='height:4rem' class="header-brand-img desktop-lgo"
                        alt="Mypapuci logo">
                    <img src="<?php echo e(URL::asset("$logo")); ?>" class="header-brand-img dark-logo" alt="Mypapuci logo">
                <?php else: ?>
                    <img src="<?php echo e(asset('assets/images/logo.svg')); ?>" style='height:4rem'
                        class="header-brand-img desktop-lgo" alt="Mypapuci logo">
                    <img src="<?php echo e(asset('assets/images/logo.svg')); ?>" class="header-brand-img dark-logo"
                        alt="Mypapuci logo">
                <?php endif; ?>
                <img src="<?php echo e(URL::asset('admin_assets/images/brand/favicon1.png')); ?>"
                    class="header-brand-img mobile-logo" alt="Mypapuci logo">
                <img src="<?php echo e(URL::asset('admin_assets/images/brand/favicon1.png')); ?>"
                    class="header-brand-img darkmobile-logo" alt="Mypapuci logo">
            </a>
        </div>
        <style>
            @media (min-width: 767px) {
                .sidebar-mini.sidenav-toggled .app-sidebar {
                    max-height: 100%;
                }
            }
        </style>
        <div class="app-sidebar__user">
            <div class="dropdown user-pro-body text-center">
                <div class="user-pic">
                    <img src="<?php echo e(URL::asset('admin_assets/images/users/avatar.png')); ?>" alt="user-img"
                        class="avatar-xl rounded-circle mb-1">
                </div>
                <div class="user-info">
                    <h5 class=" mb-1"><?php echo e(Auth::guard('web')->user()->firstname ?? ''); ?>

                        <?php echo e(Auth::guard('web')->user()->lastname ?? ''); ?> <i
                            class="ion-checkmark-circled  text-success fs-12"></i></h5>
                    <span class="text-muted app-sidebar__user-name text-sm"></span>
                </div>
            </div>
        </div>
        <ul class="side-menu app-sidebar3">
            <li class="side-item side-item-category mt-4">Main</li>
            <li class="slide">
                <a class="side-menu__item" href="<?php echo e(url('/admin/dashboard')); ?>">
                    <svg class="side-menu__icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24"
                        width="24">
                        <path d="M0 0h24v24H0V0z" fill="none" />
                        <path
                            d="M19 5v2h-4V5h4M9 5v6H5V5h4m10 8v6h-4v-6h4M9 17v2H5v-2h4M21 3h-8v6h8V3zM11 3H3v10h8V3zm10 8h-8v10h8V11zm-10 4H3v6h8v-6z" />
                    </svg>
                    <span class="side-menu__label">Dashboard</span></a>
            </li>

            <li class="side-item side-item-category mt-4">Orders & Products</li>
            <li class="slide">
                <a class="side-menu__item" href="<?php echo e(url('/admin/products')); ?>">
                    <svg class="side-menu__icon" xmlns="http://www.w3.org/2000/svg" height="24" width="24"
                        viewBox="0 0 24 24">
                        <path
                            d="M14.25 21.4q-.575.575-1.425.575-.85 0-1.425-.575l-8.8-8.8q-.275-.275-.437-.65Q2 11.575 2 11.15V4q0-.825.588-1.413Q3.175 2 4 2h7.15q.425 0 .8.162.375.163.65.438l8.8 8.825q.575.575.575 1.412 0 .838-.575 1.413ZM12.825 20l7.15-7.15L11.15 4H4v7.15ZM6.5 8q.625 0 1.062-.438Q8 7.125 8 6.5t-.438-1.062Q7.125 5 6.5 5t-1.062.438Q5 5.875 5 6.5t.438 1.062Q5.875 8 6.5 8ZM4 4Z" />
                    </svg>
                    <span class="side-menu__label">Products</span>
                </a>
            </li>
            <li class="slide">
                <a class="side-menu__item" href="<?php echo e(url('/admin/orders')); ?>">
                    <svg class="side-menu__icon" xmlns="http://www.w3.org/2000/svg" height="24" width="24"
                        viewBox="0 0 24 24">
                        <path
                            d="M14.25 21.4q-.575.575-1.425.575-.85 0-1.425-.575l-8.8-8.8q-.275-.275-.437-.65Q2 11.575 2 11.15V4q0-.825.588-1.413Q3.175 2 4 2h7.15q.425 0 .8.162.375.163.65.438l8.8 8.825q.575.575.575 1.412 0 .838-.575 1.413ZM12.825 20l7.15-7.15L11.15 4H4v7.15ZM6.5 8q.625 0 1.062-.438Q8 7.125 8 6.5t-.438-1.062Q7.125 5 6.5 5t-1.062.438Q5 5.875 5 6.5t.438 1.062Q5.875 8 6.5 8ZM4 4Z" />
                    </svg>
                    <span class="side-menu__label">Orders</span>
                </a>
            </li>

            <li class="side-item side-item-category mt-4">Landing Page</li>
            <li class="slide">
                <a class="side-menu__item" href="<?php echo e(url('/admin/profile')); ?>">
                    <svg class="side-menu__icon" xmlns="http://www.w3.org/2000/svg" height="24" width="24"
                        viewBox="0 0 24 24">
                        <path
                            d="M12 12q-1.65 0-2.825-1.175Q8 9.65 8 8q0-1.65 1.175-2.825Q10.35 4 12 4q1.65 0 2.825 1.175Q16 6.35 16 8q0 1.65-1.175 2.825Q13.65 12 12 12Zm-8 8v-2.8q0-.85.438-1.563.437-.712 1.162-1.087 1.55-.775 3.15-1.163Q10.35 13 12 13t3.25.387q1.6.388 3.15 1.163.725.375 1.162 1.087Q20 16.35 20 17.2V20Zm2-2h12v-.8q0-.275-.137-.5-.138-.225-.363-.35-1.35-.675-2.725-1.013Q13.4 15 12 15t-2.775.337Q7.85 15.675 6.5 16.35q-.225.125-.362.35-.138.225-.138.5Zm6-8q.825 0 1.413-.588Q14 8.825 14 8t-.587-1.412Q12.825 6 12 6q-.825 0-1.412.588Q10 7.175 10 8t.588 1.412Q11.175 10 12 10Zm0-2Zm0 10Z" />
                    </svg>
                    <span class="side-menu__label">Profile</span>
                </a>
            </li>

            <li class="slide">
                <a class="side-menu__item" href="<?php echo e(url('/admin/headers')); ?>">
                    <svg class="side-menu__icon" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24"
                        height="24px" viewBox="0 0 24 24" width="24px" fill="#000000">
                        <g>
                            <rect fill="none" height="24" width="24" x="0" />
                            <path
                                d="M12,8.89L12.94,12h2.82l-2.27,1.62l0.93,3.01L12,14.79l-2.42,1.84l0.93-3.01L8.24,12h2.82L12,8.89 M12,2l-2.42,8H2 l6.17,4.41L5.83,22L12,17.31L18.18,22l-2.35-7.59L22,10h-7.58L12,2L12,2z" />
                        </g>
                    </svg>
                    <span class="side-menu__label">Header</span>
                </a>
            </li>

            <li class="slide">
                <a class="side-menu__item" href="<?php echo e(url('/admin/services')); ?>">
                    <svg class="side-menu__icon" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24"
                        height="24px" viewBox="0 0 24 24" width="24px" fill="#000000">
                        <g>
                            <rect fill="none" height="24" width="24" x="0" />
                            <path
                                d="M12,8.89L12.94,12h2.82l-2.27,1.62l0.93,3.01L12,14.79l-2.42,1.84l0.93-3.01L8.24,12h2.82L12,8.89 M12,2l-2.42,8H2 l6.17,4.41L5.83,22L12,17.31L18.18,22l-2.35-7.59L22,10h-7.58L12,2L12,2z" />
                        </g>
                    </svg>
                    <span class="side-menu__label">Services</span>
                </a>
            </li>

            <li class="slide">
                <a class="side-menu__item" href="<?php echo e(url('/admin/numbers')); ?>">
                    <svg class="side-menu__icon" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24"
                        height="24px" viewBox="0 0 24 24" width="24px" fill="#000000">
                        <g>
                            <rect fill="none" height="24" width="24" x="0" />
                            <path
                                d="M12,8.89L12.94,12h2.82l-2.27,1.62l0.93,3.01L12,14.79l-2.42,1.84l0.93-3.01L8.24,12h2.82L12,8.89 M12,2l-2.42,8H2 l6.17,4.41L5.83,22L12,17.31L18.18,22l-2.35-7.59L22,10h-7.58L12,2L12,2z" />
                        </g>
                    </svg>
                    <span class="side-menu__label">Numbers</span>
                </a>
            </li>

            <li class="slide">
                <a class="side-menu__item" href="<?php echo e(url('/admin/plans')); ?>">
                    <svg class="side-menu__icon" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24"
                        height="24px" viewBox="0 0 24 24" width="24px" fill="#000000">
                        <g>
                            <rect fill="none" height="24" width="24" x="0" />
                            <path
                                d="M12,8.89L12.94,12h2.82l-2.27,1.62l0.93,3.01L12,14.79l-2.42,1.84l0.93-3.01L8.24,12h2.82L12,8.89 M12,2l-2.42,8H2 l6.17,4.41L5.83,22L12,17.31L18.18,22l-2.35-7.59L22,10h-7.58L12,2L12,2z" />
                        </g>
                    </svg>
                    <span class="side-menu__label">Plans</span>
                </a>
            </li>

            
        </ul>
    </aside>
    <!--aside closed-->
<?php /**PATH C:\Users\ayman\Desktop\Soukaina Artist\portfolio - soukaina\resources\views/admin/layouts/aside-menu.blade.php ENDPATH**/ ?>