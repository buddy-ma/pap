
<?php $__env->startSection('css'); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('page-header'); ?>
    <!--Page header-->
    <div class="page-header">
        <div class="page-leftheader">
            <h4 class="page-title mb-0">Dashboard</h4>
        </div>
    </div>
    <!--End Page header-->
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-xl-4 col-lg-6 col-md-6 col-xm-12">
            <div class="card">
                <div class="card-body">
                    <svg class="card-custom-icon text-success icon-dropshadow-success" x="1008" y="1248"
                        viewBox="0 0 24 24" height="100%" width="100%" preserveAspectRatio="xMidYMid meet"
                        focusable="false">
                        <path opacity=".0"
                            d="M3.31,11 L5.51,19.01 L18.5,19 L20.7,11 L3.31,11 Z M12,17 C10.9,17 10,16.1 10,15 C10,13.9 10.9,13 12,13 C13.1,13 14,13.9 14,15 C14,16.1 13.1,17 12,17 Z">
                        </path>
                        <path
                            d="M22,9 L17.21,9 L12.83,2.44 C12.64,2.16 12.32,2.02 12,2.02 C11.68,2.02 11.36,2.16 11.17,2.45 L6.79,9 L2,9 C1.45,9 1,9.45 1,10 C1,10.09 1.01,10.18 1.04,10.27 L3.58,19.54 C3.81,20.38 4.58,21 5.5,21 L18.5,21 C19.42,21 20.19,20.38 20.43,19.54 L22.97,10.27 L23,10 C23,9.45 22.55,9 22,9 Z M12,4.8 L14.8,9 L9.2,9 L12,4.8 Z M18.5,19 L5.51,19.01 L3.31,11 L20.7,11 L18.5,19 Z M12,13 C10.9,13 10,13.9 10,15 C10,16.1 10.9,17 12,17 C13.1,17 14,16.1 14,15 C14,13.9 13.1,13 12,13 Z">
                        </path>
                    </svg>
                    <p class=" mb-1 ">New Orders</p>
                    <h2 class="mb-1 font-weight-bold"><?php echo e($new_orders); ?></h2>
                    <span class="mb-1 text-muted"><span class="text-danger"><i class="fa fa-caret-down  mr-1"></i>
                            43.2</span> than last month</span>
                    <div class="progress progress-sm mt-3 bg-success-transparent">
                        <div class="progress-bar progress-bar-striped progress-bar-animated bg-success"
                            style="max-width:100%;width: <?php echo e($new_orders * 10); ?>%">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-4 col-lg-6 col-md-6 col-xm-12">
            <div class="card">
                <div class="card-body">
                    <svg class="card-custom-icon text-secondary icon-dropshadow-secondary" x="1008" y="1248"
                        viewBox="0 0 24 24" height="100%" width="100%" preserveAspectRatio="xMidYMid meet"
                        focusable="false">
                        <path opacity=".0"
                            d="M12.07,6.01 C8.2,6.01 5.07,9.14 5.07,13.01 C5.07,16.88 8.2,20.01 12.07,20.01 C15.94,20.01 19.07,16.88 19.07,13.01 C19.07,9.14 15.94,6.01 12.07,6.01 Z M13.07,14.01 L11.07,14.01 L11.07,8.01 L13.07,8.01 L13.07,14.01 Z">
                        </path>
                        <path
                            d="M9.07,1.01 L15.07,1.01 L15.07,3.01 L9.07,3.01 L9.07,1.01 Z M11.07,8.01 L13.07,8.01 L13.07,14.01 L11.07,14.01 L11.07,8.01 Z M19.1,7.39 L20.52,5.97 C20.09,5.46 19.62,4.98 19.11,4.56 L17.69,5.98 C16.14,4.74 14.19,4 12.07,4 C7.1,4 3.07,8.03 3.07,13 C3.07,17.97 7.09,22 12.07,22 C17.05,22 21.07,17.97 21.07,13 C21.07,10.89 20.33,8.93 19.1,7.39 Z M12.07,20.01 C8.2,20.01 5.07,16.88 5.07,13.01 C5.07,9.14 8.2,6.01 12.07,6.01 C15.94,6.01 19.07,9.14 19.07,13.01 C19.07,16.88 15.94,20.01 12.07,20.01 Z">
                        </path>
                    </svg>
                    <p class=" mb-1 ">Total Orders</p>
                    <h2 class="mb-1 font-weight-bold"><?php echo e($all_orders); ?></h2>
                    <span class="mb-1 text-muted"><span class="text-success"><i class="fa fa-caret-up  mr-1"></i>
                            19.8</span> than last month</span>
                    <div class="progress progress-sm mt-3 bg-secondary-transparent">
                        <div class="progress-bar progress-bar-striped progress-bar-animated bg-secondary"
                            style="max-width:100%;width: <?php echo e($all_orders * 10); ?>%"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-lg-6 col-md-6 col-xm-12">
            <div class="card">
                <div class="card-body">
                    <svg class="card-custom-icon text-secondary icon-dropshadow-secondary" x="1008" y="1248"
                        viewBox="0 0 24 24" height="100%" width="100%" preserveAspectRatio="xMidYMid meet"
                        focusable="false">
                        <path opacity=".0"
                            d="M12.07,6.01 C8.2,6.01 5.07,9.14 5.07,13.01 C5.07,16.88 8.2,20.01 12.07,20.01 C15.94,20.01 19.07,16.88 19.07,13.01 C19.07,9.14 15.94,6.01 12.07,6.01 Z M13.07,14.01 L11.07,14.01 L11.07,8.01 L13.07,8.01 L13.07,14.01 Z">
                        </path>
                        <path
                            d="M9.07,1.01 L15.07,1.01 L15.07,3.01 L9.07,3.01 L9.07,1.01 Z M11.07,8.01 L13.07,8.01 L13.07,14.01 L11.07,14.01 L11.07,8.01 Z M19.1,7.39 L20.52,5.97 C20.09,5.46 19.62,4.98 19.11,4.56 L17.69,5.98 C16.14,4.74 14.19,4 12.07,4 C7.1,4 3.07,8.03 3.07,13 C3.07,17.97 7.09,22 12.07,22 C17.05,22 21.07,17.97 21.07,13 C21.07,10.89 20.33,8.93 19.1,7.39 Z M12.07,20.01 C8.2,20.01 5.07,16.88 5.07,13.01 C5.07,9.14 8.2,6.01 12.07,6.01 C15.94,6.01 19.07,9.14 19.07,13.01 C19.07,16.88 15.94,20.01 12.07,20.01 Z">
                        </path>
                    </svg>
                    <p class=" mb-1 ">Finished Orders</p>
                    <h2 class="mb-1 font-weight-bold"><?php echo e($finished_orders); ?></h2>
                    <span class="mb-1 text-muted"><span class="text-success"><i class="fa fa-caret-up  mr-1"></i>
                            19.8</span> than last month</span>
                    <div class="progress progress-sm mt-3 bg-secondary-transparent">
                        <div class="progress-bar progress-bar-striped progress-bar-animated bg-secondary"
                            style="max-width:100%;width: <?php echo e($all_orders * 10); ?>%"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xl-8 col-lg-8 col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Sales Analysis</h3>
                    <div class="card-options">
                        <div class="btn-group p-0">
                            <button class="btn btn-outline-light btn-sm" type="button">Week</button>
                            <button class="btn btn-light btn-sm" type="button">Month</button>
                            <button class="btn btn-outline-light btn-sm" type="button">Year</button>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row mb-3">
                        <div class="col-xl-3 col-6">
                            <p class="mb-1">Total Orders</p>
                            <h3 class="mb-0 fs-20 number-font1"><?php echo e($all_orders); ?></h3>
                        </div>
                        <div class="col-xl-3 col-6 ">
                            <p class=" mb-1">Maximum Orders</p>
                            <h3 class="mb-0 fs-20 number-font1"><?php echo e($all_orders); ?></h3>
                        </div>

                        <div class="col-xl-3 col-6 ">
                            <p class=" mb-1">Minimum Orders</p>
                            <h3 class="mb-0 fs-20 number-font1"><?php echo e($all_orders); ?></h3>
                        </div>
                    </div>
                    <div id="echart1" class="chart-tasks chart-dropshadow text-center"
                        style="-webkit-tap-highlight-color: transparent; user-select: none; position: relative; background: transparent;"
                        _echarts_instance_="ec_1666725326924">
                        <div
                            style="position: relative; overflow: hidden; width: 986px; height: 240px; padding: 0px; margin: 0px; border-width: 0px; cursor: default;">
                            <canvas width="986" height="240" data-zr-dom-id="zr_0"
                                style="position: absolute; left: 0px; top: 0px; width: 986px; height: 240px; user-select: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); padding: 0px; margin: 0px; border-width: 0px;"></canvas>
                        </div>
                        <div
                            style="position: absolute; display: block; border-style: solid; white-space: nowrap; z-index: 9999999; transition: left 0.4s cubic-bezier(0.23, 1, 0.32, 1) 0s, top 0.4s cubic-bezier(0.23, 1, 0.32, 1) 0s; background-color: rgba(50, 50, 50, 0.7); border-width: 0px; border-color: rgb(51, 51, 51); border-radius: 4px; color: rgb(255, 255, 255); font: 14px / 21px &quot;Microsoft YaHei&quot;; padding: 5px; left: 523px; top: 54px;">
                            June<br><span
                                style="display:inline-block;margin-right:5px;border-radius:10px;width:9px;height:9px;background-color:#fd6f82;"></span>Total
                            Units Sold: 8<br><span
                                style="display:inline-block;margin-right:5px;border-radius:10px;width:9px;height:9px;background-color:#705ec8;"></span>Total
                            Sales: 11</div>
                    </div>
                    <div class="text-center mt-2">
                        <span class="mr-4"><span class="dot-label bg-primary"></span>Total Sales</span>
                        <span><span class="dot-label bg-secondary"></span>Total Units Sold</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-lg-4 col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Recent Activity</h3>
                    <div class="card-options">
                        <a href="https://laravel.spruko.com/admitro/Vertical-IconSidedar-Light/#" class="option-dots"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i
                                class="fe fe-more-horizontal fs-20"></i></a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item"
                                href="https://laravel.spruko.com/admitro/Vertical-IconSidedar-Light/#">Today</a>
                            <a class="dropdown-item"
                                href="https://laravel.spruko.com/admitro/Vertical-IconSidedar-Light/#">Last Week</a>
                            <a class="dropdown-item"
                                href="https://laravel.spruko.com/admitro/Vertical-IconSidedar-Light/#">Last Month</a>
                            <a class="dropdown-item"
                                href="https://laravel.spruko.com/admitro/Vertical-IconSidedar-Light/#">Last Year</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="latest-timeline scrollbar3" id="scrollbar3" data-simplebar="init">
                        <div class="simplebar-wrapper" style="margin: 0px;">
                            <div class="simplebar-height-auto-observer-wrapper">
                                <div class="simplebar-height-auto-observer"></div>
                            </div>
                            <div class="simplebar-mask">
                                <div class="simplebar-offset" style="right: 0px; bottom: 0px;">
                                    <div class="simplebar-content-wrapper" style="height: 100%; overflow: hidden scroll;">
                                        <div class="simplebar-content" style="padding: 0px;">
                                            <ul class="timeline mb-0">
                                                <li class="mt-0">
                                                    <div class="d-flex"><span class="time-data">Task Finished</span><span
                                                            class="ml-auto text-muted fs-11">09 June 2020</span></div>
                                                    <p class="text-muted fs-12"><span class="text-info">Joseph
                                                            Ellison</span> finished task on<a
                                                            href="https://laravel.spruko.com/admitro/Vertical-IconSidedar-Light/#"
                                                            class="font-weight-semibold"> Project Management</a></p>
                                                </li>
                                                <li>
                                                    <div class="d-flex"><span class="time-data">New Comment</span><span
                                                            class="ml-auto text-muted fs-11">05 June 2020</span></div>
                                                    <p class="text-muted fs-12"><span class="text-info">Elizabeth
                                                            Scott</span> Product delivered<a
                                                            href="https://laravel.spruko.com/admitro/Vertical-IconSidedar-Light/#"
                                                            class="font-weight-semibold"> Service Management</a></p>
                                                </li>
                                                <li>
                                                    <div class="d-flex"><span class="time-data">Target
                                                            Completed</span><span class="ml-auto text-muted fs-11">01 June
                                                            2020</span></div>
                                                    <p class="text-muted fs-12"><span class="text-info">Sonia
                                                            Peters</span> finished target on<a
                                                            href="https://laravel.spruko.com/admitro/Vertical-IconSidedar-Light/#"
                                                            class="font-weight-semibold"> this month Sales</a></p>
                                                </li>
                                                <li>
                                                    <div class="d-flex"><span class="time-data">Revenue
                                                            Sources</span><span class="ml-auto text-muted fs-11">26 May
                                                            2020</span></div>
                                                    <p class="text-muted fs-12"><span class="text-info">Justin Nash</span>
                                                        source report on<a
                                                            href="https://laravel.spruko.com/admitro/Vertical-IconSidedar-Light/#"
                                                            class="font-weight-semibold"> Generated</a></p>
                                                </li>
                                                <li>
                                                    <div class="d-flex"><span class="time-data">Dispatched
                                                            Order</span><span class="ml-auto text-muted fs-11">22 May
                                                            2020</span></div>
                                                    <p class="text-muted fs-12"><span class="text-info">Ella
                                                            Lambert</span> ontime order delivery <a
                                                            href="https://laravel.spruko.com/admitro/Vertical-IconSidedar-Light/#"
                                                            class="font-weight-semibold">Service Management</a></p>
                                                </li>
                                                <li>
                                                    <div class="d-flex"><span class="time-data">New User Added</span><span
                                                            class="ml-auto text-muted fs-11">19 May 2020</span></div>
                                                    <p class="text-muted fs-12"><span class="text-info">Nicola
                                                            Blake</span> visit the site<a
                                                            href="https://laravel.spruko.com/admitro/Vertical-IconSidedar-Light/#"
                                                            class="font-weight-semibold"> Membership allocated</a></p>
                                                </li>
                                                <li>
                                                    <div class="d-flex"><span class="time-data">Revenue
                                                            Sources</span><span class="ml-auto text-muted fs-11">15 May
                                                            2020</span></div>
                                                    <p class="text-muted fs-12"><span class="text-info">Richard
                                                            Mills</span> source report on<a
                                                            href="https://laravel.spruko.com/admitro/Vertical-IconSidedar-Light/#"
                                                            class="font-weight-semibold"> Generated</a></p>
                                                </li>
                                                <li class="mb-0">
                                                    <div class="d-flex"><span class="time-data">New Order
                                                            Placed</span><span class="ml-auto text-muted fs-11">11 May
                                                            2020</span></div>
                                                    <p class="text-muted fs-12"><span class="text-info">Steven Hart</span>
                                                        is proces the order<a
                                                            href="https://laravel.spruko.com/admitro/Vertical-IconSidedar-Light/#"
                                                            class="font-weight-semibold"> #987</a></p>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="simplebar-placeholder" style="width: auto; height: 464px;"></div>
                        </div>
                        <div class="simplebar-track simplebar-horizontal" style="visibility: hidden;">
                            <div class="simplebar-scrollbar" style="width: 0px; display: none;"></div>
                        </div>
                        <div class="simplebar-track simplebar-vertical" style="visibility: visible;">
                            <div class="simplebar-scrollbar"
                                style="height: 271px; transform: translate3d(0px, 0px, 0px); display: block;"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('js'); ?>
    <!--INTERNAL Peitychart js-->
    <script src="<?php echo e(URL::asset('admin_assets/plugins/peitychart/jquery.peity.min.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('admin_assets/plugins/peitychart/peitychart.init.js')); ?>"></script>

    <!--INTERNAL Apexchart js-->
    <script src="<?php echo e(URL::asset('admin_assets/js/apexcharts.js')); ?>"></script>

    <!--INTERNAL ECharts js-->
    <script src="<?php echo e(URL::asset('admin_assets/plugins/echarts/echarts.js')); ?>"></script>

    <!--INTERNAL Chart js -->
    <script src="<?php echo e(URL::asset('admin_assets/plugins/chart/chart.bundle.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('admin_assets/plugins/chart/utils.js')); ?>"></script>

    <!-- INTERNAL Select2 js -->
    <script src="<?php echo e(URL::asset('admin_assets/plugins/select2/select2.full.min.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('admin_assets/js/select2.js')); ?>"></script>

    <!--INTERNAL Moment js-->
    <script src="<?php echo e(URL::asset('admin_assets/plugins/moment/moment.js')); ?>"></script>

    <!--INTERNAL Index js-->
    <script src="<?php echo e(URL::asset('admin_assets/js/index1.js')); ?>"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\BUDDY\OneDrive\Desktop\soukaina-portfolio\resources\views/admin/mains-admin/statistics/dashboard.blade.php ENDPATH**/ ?>