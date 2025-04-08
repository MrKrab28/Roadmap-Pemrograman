<x-admin.layout>
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0 font-size-18">Welcome !</h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li>
                        <li class="breadcrumb-item active">Welcome !</li>
                    </ol>
                </div>

            </div>
        </div>
    </div>
    <!-- end page title -->

    <div class="row">
        <div class="col-xl-3 col-md-6">
            <!-- card -->
            <div class="card card-h-100">
                <!-- card body -->
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div class="flex-grow-1">
                            <span class="text-muted mb-3 lh-1 d-block text-truncate">User</span>
                            <h4 class="mb-3">
                                <span class="counter-value fs-1" data-target="{{ $users }}">0</span>
                            </h4>
                            <div class="text-nowrap">
                                <span class="badge bg-soft-success text-success">Active</span>
                                {{-- <span class="ms-1 text-muted font-size-13">Since last week</span> --}}
                            </div>
                        </div>

                        <div class="flex-shrink-0 text-end dash-widget">
                            <div  class="apex-charts">
                                <i class="bx bx-user" style="font-size: 80px;"></i>
                            </div>
                        </div>
                    </div>
                </div><!-- end card body -->
            </div><!-- end card -->
        </div><!-- end col -->


        <div class="col-xl-3 col-md-6">
            <!-- card -->
            <div class="card card-h-100">
                <!-- card body -->
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div class="flex-grow-1">
                            <span class="text-muted mb-3 lh-1 d-block text-truncate">Roadmaps</span>
                            <h4 class="mb-3">
                                <span class="counter-value fs-1" data-target="{{ $categories }}">0</span>
                            </h4>
                            <div class="text-nowrap">
                                <span class="badge bg-soft-success text-success">Ready</span>
                            </div>
                        </div>
                        <div class="flex-shrink-0 text-end dash-widget">
                            <div  class="apex-charts">
                                <i class="bx bx-network-chart" style="font-size: 80px"></i>
                            </div>
                        </div>
                    </div>
                </div><!-- end card body -->
            </div><!-- end card -->
        </div><!-- end col-->

        <div class="col-xl-3 col-md-6">
            <!-- card -->
            <div class="card card-h-100">
                <!-- card body -->
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div class="flex-grow-1">
                            <span class="text-muted mb-3 lh-1 d-block text-truncate">Courses</span>
                            <h4 class="mb-3">
                                <span class="counter-value fs-1" data-target="{{ $courses }}">0</span>
                            </h4>
                            <div class="text-nowrap">
                                <span class="badge bg-soft-success text-success">Ready</span>
                            </div>
                        </div>
                        <div class="flex-shrink-0 text-end dash-widget">
                            <div  class="apex-charts">
                                <i class="bx bx-book-content" style="font-size: 80px"></i>
                            </div>
                        </div>
                    </div>
                </div><!-- end card body -->
            </div><!-- end card -->
        </div><!-- end col -->

        <div class="col-xl-3 col-md-6">
            <!-- card -->
            <div class="card card-h-100">
                <!-- card body -->
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div class="flex-grow-1">
                            <span class="text-muted mb-3 lh-1 d-block text-truncate">Moduls</span>
                            <h4 class="mb-3">
                                <span class="counter-value fs-1" data-target="{{ $moduls }}">0</span>
                            </h4>
                            <div class="text-nowrap">
                                <span class="badge bg-soft-success text-success">Ready</span>
                            </div>
                        </div>
                        <div class="flex-shrink-0 text-end dash-widget">
                            <div  class="apex-charts">
                                <i class="bx bx-task" style="font-size: 80px"></i>
                            </div>
                        </div>
                    </div>
                </div><!-- end card body -->
            </div><!-- end card -->
        </div><!-- end col -->
    </div><!-- end row-->


    <!-- end row-->

    <div class="row">

        <!-- end col -->


        <!-- end col -->


        <!-- end col -->
    </div>
</x-admin.layout>
