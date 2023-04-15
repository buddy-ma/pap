@extends('admin.layouts.master')
@section('css')
@endsection
@section('page-header')
    <!--Page header-->
    <div class="page-header">
        <div class="page-leftheader">
            <h4 class="page-title mb-0">Dashboard</h4>
        </div>
    </div>
    <!--End Page header-->
@endsection
@section('content')
    <div class="card-header">
        <h3 class="card-title">Produits</h3>
    </div>
    <div class="row">
        <div class="col-xl-3 col-lg-6 col-md-6 col-xm-12">
            <div class="card overflow-hidden dash1-card border-0">
                <div class="card-body">
                    <p class=" mb-1">Total Produits </p>
                    <h2 class="mb-1 number-font">{{ $products_count }}</h2>
                </div>
                <div id="spark1"></div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-6 col-md-6 col-xm-12">
            <div class="card overflow-hidden dash1-card border-0">
                <div class="card-body">
                    <p class=" mb-1">Active Produits </p>
                    <h2 class="mb-1 number-font">{{ $active_products_count }}</h2>
                </div>
                <div id="spark2"></div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-6 col-md-6 col-xm-12">
            <div class="card overflow-hidden dash1-card border-0">
                <div class="card-body">
                    <p class=" mb-1">Desactive Produits </p>
                    <h2 class="mb-1 number-font">{{ $desactive_products_count }}</h2>
                </div>
                <div id="spark3"></div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-6 col-md-6 col-xm-12">
            <div class="card overflow-hidden dash1-card border-0">
                <div class="card-body">
                    <p class=" mb-1">Total Vues de Produits </p>
                    <h2 class="mb-1 number-font">{{ $products_vues_count }}</h2>
                </div>
                <div id="spark4"></div>
            </div>
        </div>
    </div>
    <!-- Row-1 -->
    <div class="card-header">
        <h3 class="card-title">Conseils</h3>
    </div>
    <div class="row">
        <div class="col-xl-3 col-lg-6 col-md-6 col-xm-12">
            <div class="card overflow-hidden dash1-card border-0">
                <div class="card-body">
                    <p class=" mb-1 ">Total Blogs</p>
                    <h2 class="mb-1 number-font">{{ $total_conseils }}</h2>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-6 col-md-6 col-xm-12">
            <div class="card overflow-hidden dash1-card border-0">
                <div class="card-body">
                    <p class=" mb-1 ">Nouveaux Blogs</p>
                    <h2 class="mb-1 number-font">{{ $new_conseils }}</h2>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-6 col-md-6 col-xm-12">
            <div class="card overflow-hidden dash1-card border-0">
                <div class="card-body">
                    <p class=" mb-1 ">Désactive Blogs</p>
                    <h2 class="mb-1 number-font">{{ $disabled_conseils }}</h2>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-6 col-md-6 col-xm-12">
            <div class="card overflow-hidden dash1-card border-0">
                <div class="card-body">
                    <p class=" mb-1">Total Vues </p>
                    <h2 class="mb-1 number-font">{{ $total_vues_conseils }}</h2>
                </div>
            </div>
        </div>
    </div>
    <!-- End Row-1 -->

    <div class="card-header">
        <h3 class="card-title">Découvrez le maroc</h3>
    </div>

    <!-- Row-2 -->
    <div class="row">
        <div class="col-xl-3 col-lg-6 col-md-6 col-xm-12">
            <div class="card overflow-hidden dash1-card border-0">
                <div class="card-body">
                    <p class=" mb-1 ">Total Blogs</p>
                    <h2 class="mb-1 number-font">{{ $total_dm }}</h2>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-6 col-md-6 col-xm-12">
            <div class="card overflow-hidden dash1-card border-0">
                <div class="card-body">
                    <p class=" mb-1 ">Nouveaux Blogs</p>
                    <h2 class="mb-1 number-font">{{ $new_dm }}</h2>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-6 col-md-6 col-xm-12">
            <div class="card overflow-hidden dash1-card border-0">
                <div class="card-body">
                    <p class=" mb-1 ">Désactive Blogs</p>
                    <h2 class="mb-1 number-font">{{ $disabled_dm }}</h2>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-6 col-md-6 col-xm-12">
            <div class="card overflow-hidden dash1-card border-0">
                <div class="card-body">
                    <p class=" mb-1">Total Vues</p>
                    <h2 class="mb-1 number-font">{{ $total_vues_dm }}</h2>
                </div>
            </div>
        </div>
    </div>
    <!-- End Row-2 -->

    <div class="row">
        <div class="col-xl-4 col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Top Conseils</h3>
                </div>
                <div class="card-body">
                    @foreach ($top_conseils as $conseil)
                        <div class="list-card">
                            <span class="bg-warning list-bar"></span>
                            <div class="row align-items-center">
                                <div class="col-9 col-sm-9">
                                    <div class="media mt-0">
                                        <span class="avatar brround avatar-md mr-3">
                                            <i class="las la-thumbs-up"></i>
                                        </span>
                                        <div class="media-body">
                                            <div class="d-md-flex align-items-center mt-1">
                                                <h6 class="mb-1">{{ substr($conseil->title, 0, 30) }}...</h6>
                                            </div>
                                            @if ($conseil->status == 1)
                                                <span class="text-success fs-13 font-weight-semibold">Active</span>
                                            @else
                                                <span class="text-danger fs-13 font-weight-semibold">Désactive</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="col-3 col-sm-3">
                                    <div class="text-right">
                                        <span class="font-weight-semibold fs-16 number-font">{{ $conseil->vues }}
                                            vues</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Top Découvrez le maroc</h3>
                </div>
                <div class="card-body">
                    @foreach ($top_dm as $dm)
                        <div class="list-card">
                            <span class="bg-warning list-bar"></span>
                            <div class="row align-items-center">
                                <div class="col-9 col-sm-9">
                                    <div class="media mt-0">
                                        <span class="avatar brround avatar-md mr-3">
                                            <i class="las la-thumbs-up"></i>
                                        </span>
                                        <div class="media-body">
                                            <div class="d-md-flex align-items-center mt-1">
                                                <h6 class="mb-1">{{ substr($dm->title, 0, 30) }}...</h6>
                                            </div>
                                            @if ($dm->status == 1)
                                                <span class="text-success fs-13 font-weight-semibold">Active</span>
                                            @else
                                                <span class="text-danger fs-13 font-weight-semibold">Désactive</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="col-3 col-sm-3">
                                    <div class="text-right">
                                        <span class="font-weight-semibold fs-16 number-font">{{ $dm->vues }}
                                            vues</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="col-xl-4  col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex align-items-end justify-content-between">
                        <div>
                            <p class=" mb-1 fs-14">Total Blogs</p>
                            <h2 class="mb-0"><span class="number-font1">{{ $blogs_count }}</span>
                            </h2>

                        </div>
                        <span class="text-primary fs-35 dash1-iocns bg-primary-transparent border-primary"><i
                                class="las la-thumbs-up"></i></span>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <div class="d-flex align-items-end justify-content-between">
                        <div>
                            <p class=" mb-1 fs-14">Total Vues</p>
                            <h2 class="mb-0"><span class="number-font1">{{ $vues_count }}</span>
                            </h2>
                        </div>
                        <span class="text-info fs-35 dash1-iocns bg-info-transparent border-info"><i
                                class="las la-eye"></i></span>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <div class="d-flex align-items-end justify-content-between">
                        <div>
                            <p class=" mb-1 fs-14">Total Villes</p>
                            <h2 class="mb-0"><span class="number-font1">{{ $villes_count }}</span>
                            </h2>
                        </div>
                        <span class="text-primary fs-35 dash1-iocns bg-primary-transparent border-primary"><i
                                class="las la-map-pin"></i></span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--End row-->

    </div>
    </div>
    <!-- End app-content-->
    </div>
@endsection
@section('js')
    <script src="{{ URL::asset('admin_assets/js/index1.js') }}"></script>

    <!--INTERNAL Peitychart js-->
    <script src="{{ URL::asset('admin_assets/plugins/peitychart/jquery.peity.min.js') }}"></script>
    <script src="{{ URL::asset('admin_assets/plugins/peitychart/peitychart.init.js') }}"></script>

    <!--INTERNAL Apexchart js-->
    <script src="{{ URL::asset('admin_assets/js/apexcharts.js') }}"></script>

    <!--INTERNAL ECharts js-->
    <script src="{{ URL::asset('admin_assets/plugins/echarts/echarts.js') }}"></script>

    <!--INTERNAL Chart js -->
    <script src="{{ URL::asset('admin_assets/plugins/chart/chart.bundle.js') }}"></script>
    <script src="{{ URL::asset('admin_assets/plugins/chart/utils.js') }}"></script>

    <!-- INTERNAL Select2 js -->
    <script src="{{ URL::asset('admin_assets/plugins/select2/select2.full.min.js') }}"></script>
    <script src="{{ URL::asset('admin_assets/js/select2.js') }}"></script>

    <!--INTERNAL Moment js-->
    <script src="{{ URL::asset('admin_assets/plugins/moment/moment.js') }}"></script>

    <!--INTERNAL Index js-->
@endsection
