@extends('admin.admin_master')
@section('admin')
    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Dashboard</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Inventory</a></li>
                                <li class="breadcrumb-item active">Dashboard</li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col-xl-3 col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex">
                                <div class="flex-grow-1">
                                    <p class="text-truncate font-size-14 mb-2">Total Sales</p>
                                    <h4 class="mb-2">1452</h4>
                                    <p class="text-muted mb-0"><span class="text-success fw-bold font-size-12 me-2"><i
                                                class="ri-arrow-right-up-line me-1 align-middle"></i>9.23%</span>from
                                        previous period</p>
                                </div>
                                <div class="avatar-sm">
                                    <span class="avatar-title bg-light text-primary rounded-3">
                                        <i class="ri-shopping-cart-2-line font-size-24"></i>
                                    </span>
                                </div>
                            </div>
                        </div><!-- end cardbody -->
                    </div><!-- end card -->
                </div><!-- end col -->
                <div class="col-xl-3 col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex">
                                <div class="flex-grow-1">
                                    <p class="text-truncate font-size-14 mb-2">New Orders</p>
                                    <h4 class="mb-2">938</h4>
                                    <p class="text-muted mb-0"><span class="text-danger fw-bold font-size-12 me-2"><i
                                                class="ri-arrow-right-down-line me-1 align-middle"></i>1.09%</span>from
                                        previous period</p>
                                </div>
                                <div class="avatar-sm">
                                    <span class="avatar-title bg-light text-success rounded-3">
                                        <i class="mdi mdi-currency-usd font-size-24"></i>
                                    </span>
                                </div>
                            </div>
                        </div><!-- end cardbody -->
                    </div><!-- end card -->
                </div><!-- end col -->
                <div class="col-xl-3 col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex">
                                <div class="flex-grow-1">
                                    <p class="text-truncate font-size-14 mb-2">New Users</p>
                                    <h4 class="mb-2">8246</h4>
                                    <p class="text-muted mb-0"><span class="text-success fw-bold font-size-12 me-2"><i
                                                class="ri-arrow-right-up-line me-1 align-middle"></i>16.2%</span>from
                                        previous period</p>
                                </div>
                                <div class="avatar-sm">
                                    <span class="avatar-title bg-light text-primary rounded-3">
                                        <i class="ri-user-3-line font-size-24"></i>
                                    </span>
                                </div>
                            </div>
                        </div><!-- end cardbody -->
                    </div><!-- end card -->
                </div><!-- end col -->
                <div class="col-xl-3 col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex">
                                <div class="flex-grow-1">
                                    <p class="text-truncate font-size-14 mb-2">Unique Visitors</p>
                                    <h4 class="mb-2">29670</h4>
                                    <p class="text-muted mb-0"><span class="text-success fw-bold font-size-12 me-2"><i
                                                class="ri-arrow-right-up-line me-1 align-middle"></i>11.7%</span>from
                                        previous period</p>
                                </div>
                                <div class="avatar-sm">
                                    <span class="avatar-title bg-light text-success rounded-3">
                                        <i class="mdi mdi-currency-btc font-size-24"></i>
                                    </span>
                                </div>
                            </div>
                        </div><!-- end cardbody -->
                    </div><!-- end card -->
                </div><!-- end col -->
            </div><!-- end row -->

            <div class="row">


                <div class="row">
                    <div class="col-xl-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="dropdown float-end">
                                    <a href="#" class="dropdown-toggle arrow-none card-drop" data-bs-toggle="dropdown"
                                        aria-expanded="false">
                                        <i class="mdi mdi-dots-vertical"></i>
                                    </a>

                                </div>

                                <h4 class="card-title mb-4">Latest Transactions</h4>

                                <div class="table-responsive">
                                    <table class="table table-centered mb-0 align-middle table-hover table-nowrap">
                                        <thead class="table-light">
                                            <tr>
                                                <th>Name</th>
                                                <th>Position</th>
                                                <th>Status</th>
                                                <th>Age</th>
                                                <th>Start date</th>
                                                <th style="width: 120px;">Salary</th>
                                            </tr>
                                        </thead><!-- end thead -->
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <h6 class="mb-0">Bruno M</h6>
                                                </td>
                                                <td>Web Developer</td>
                                                <td>
                                                    <div class="font-size-13"><i
                                                            class="ri-checkbox-blank-circle-fill font-size-10 text-success align-middle me-2"></i>Active
                                                    </div>
                                                </td>
                                                <td>
                                                    23
                                                </td>
                                                <td>
                                                    04 April 2021
                                                </td>
                                                <td>Rp. 10.000.00</td>
                                            </tr>
                                            <!-- end -->
                                            <tr>
                                                <td>
                                                    <h6 class="mb-0">Adams Haris</h6>
                                                </td>
                                                <td>Python Developer</td>
                                                <td>
                                                    <div class="font-size-13"><i
                                                            class="ri-checkbox-blank-circle-fill font-size-10 text-warning align-middle me-2"></i>Deactive
                                                    </div>
                                                </td>
                                                <td>
                                                    28
                                                </td>
                                                <td>
                                                    01 Agustus 2021
                                                </td>
                                                <td>Rp. 12.000.00</td>
                                            </tr>
                                            <!-- end -->
                                            <tr>
                                                <td>
                                                    <h6 class="mb-0">Paris K</h6>
                                                </td>
                                                <td>Senior Javascript Developer</td>
                                                <td>
                                                    <div class="font-size-13"><i
                                                            class="ri-checkbox-blank-circle-fill font-size-10 text-success align-middle me-2"></i>Active
                                                    </div>
                                                </td>
                                                <td>
                                                    35
                                                </td>
                                                <td>
                                                    15 Juni 2021
                                                </td>
                                                <td>Rp. 9.750.00</td>
                                            </tr>
                                            <!-- end -->
                                            <tr>
                                                <td>
                                                    <h6 class="mb-0">Ruri T</h6>
                                                </td>
                                                <td>React Developer</td>
                                                <td>
                                                    <div class="font-size-13"><i
                                                            class="ri-checkbox-blank-circle-fill font-size-10 text-success align-middle me-2"></i>Active
                                                    </div>
                                                </td>
                                                <td>
                                                    25
                                                </td>
                                                <td>
                                                    01 Maret 2021
                                                </td>
                                                <td>Rp. 10.500.00</td>
                                            </tr>
                                            <!-- end -->
                                            <tr>
                                                <td>
                                                    <h6 class="mb-0">Julio E</h6>
                                                </td>
                                                <td>Senior Web Designer</td>
                                                <td>
                                                    <div class="font-size-13"><i
                                                            class="ri-checkbox-blank-circle-fill font-size-10 text-success align-middle me-2"></i>Active
                                                    </div>
                                                </td>
                                                <td>
                                                    38
                                                </td>
                                                <td>
                                                    01 Januari 2021
                                                </td>
                                                <td>Rp. 9.000.00</td>
                                            </tr>
                                            <!-- end -->
                                            <tr>
                                                <td>
                                                    <h6 class="mb-0">Dennis B</h6>
                                                </td>
                                                <td>Web Designer</td>
                                                <td>
                                                    <div class="font-size-13"><i
                                                            class="ri-checkbox-blank-circle-fill font-size-10 text-warning align-middle me-2"></i>Deactive
                                                    </div>
                                                </td>
                                                <td>
                                                    21
                                                </td>
                                                <td>
                                                    01 September 2021
                                                </td>
                                                <td>Rp. 17.000.00</td>
                                            </tr>
                                            <!-- end -->
                                            <tr>
                                                <td>
                                                    <h6 class="mb-0">Markus S</h6>
                                                </td>
                                                <td>Senior Laravel Developer</td>
                                                <td>
                                                    <div class="font-size-13"><i
                                                            class="ri-checkbox-blank-circle-fill font-size-10 text-success align-middle me-2"></i>Active
                                                    </div>
                                                </td>
                                                <td>
                                                    32
                                                </td>
                                                <td>
                                                    20 Mei 2021
                                                </td>
                                                <td>Rp. 19.500.00</td>
                                            </tr>
                                            <!-- end -->
                                        </tbody><!-- end tbody -->
                                    </table> <!-- end table -->
                                </div>
                            </div><!-- end card -->
                        </div><!-- end card -->
                    </div>
                    <!-- end col -->



                </div>
                <!-- end row -->
            </div>

        </div>
    @endsection
