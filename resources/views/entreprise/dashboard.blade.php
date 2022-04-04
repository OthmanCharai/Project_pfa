@extends('entreprise.layouts.app')
@section('afterCss')
    <!-- Core CSS -->
    <link rel="stylesheet" href="{{asset('vendor/css/rtl/core.css')}}" class="template-customizer-core-css" />
    <link rel="stylesheet" href="{{asset('vendor/css/rtl/theme-default.css')}}" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="{{asset('css/demo.css')}}" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="{{asset('vendor/libs/perfect-scrollbar/perfect-scrollbar.css')}}" />
    <link rel="stylesheet" href="{{asset('vendor/libs/typeahead-js/typeahead.css')}}" />
    <link rel="stylesheet" href="{{asset('vendor/libs/apex-charts/apex-charts.css')}}" />

    <!-- Page CSS -->
    <link rel="stylesheet" href="{{asset('vendor/css/pages/card-analytics.css')}}" />
    <!-- Helpers -->
    <script src="{{asset('vendor/js/helpers.js')}}"></script>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Template customizer: To hide customizer set displayCustomizer value false in config.js.  -->
    {{-- <script src="{{asset('vendor/js/template-customizer.js')}}"></script> --}}
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="{{asset('js/config.js')}}"></script>
@endsection
@section('coreJs')
   <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    <script src="{{asset('vendor/libs/jquery/jquery.js')}}"></script>
    <script src="{{asset('vendor/libs/popper/popper.js')}}"></script>
    <script src="{{asset('vendor/js/bootstrap.js')}}"></script>
    <script src="{{asset('vendor/libs/perfect-scrollbar/perfect-scrollbar.js')}}"></script>

    <script src="{{asset('vendor/libs/hammer/hammer.js')}}"></script>
    <script src="{{asset('vendor/libs/i18n/i18n.js')}}"></script>
    <script src="{{asset('vendor/libs/typeahead-js/typeahead.js')}}"></script>

    <script src="{{asset('vendor/js/menu.js')}}"></script>
    <!-- endbuild -->

    <!-- Vendors JS -->
    <script src="{{asset('vendor/libs/apex-charts/apexcharts.js')}}"></script>

    <!-- Main JS -->
    <script src="{{asset('js/main.js')}}"></script>

    <!-- Page JS -->
    <script src="{{asset('js/dashboards-ecommerce.js')}}"></script>


@endsection
@section('content')
            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">
                <div class="row">





                  <!-- Total Income -->
                  <div class="col-md-12 col-lg-8 mb-4">
                    <div class="card">
                      <div class="row row-bordered g-0">
                        <div class="col-md-8">
                          <div class="card-header">
                            <h5 class="card-title mb-0">Total Income</h5>
                            <small class="card-subtitle">Yearly report overview</small>
                          </div>
                          <div class="card-body">
                            <div id="totalIncomeChart"></div>
                          </div>
                        </div>
                        <div class="col-md-4">
                          <div class="card-header d-flex justify-content-between">
                            <div>
                              <h5 class="card-title mb-0">Report</h5>
                              <small class="card-subtitle">Monthly Avg. $45.578k</small>
                            </div>
                            <div class="dropdown">
                              <button
                                class="btn p-0"
                                type="button"
                                id="totalIncome"
                                data-bs-toggle="dropdown"
                                aria-haspopup="true"
                                aria-expanded="false"
                              >
                                <i class="bx bx-dots-vertical-rounded"></i>
                              </button>
                              <div class="dropdown-menu dropdown-menu-end" aria-labelledby="totalIncome">
                                <a class="dropdown-item" href="javascript:void(0);">Last 28 Days</a>
                                <a class="dropdown-item" href="javascript:void(0);">Last Month</a>
                                <a class="dropdown-item" href="javascript:void(0);">Last Year</a>
                              </div>
                            </div>
                          </div>
                          <div class="card-body">
                            <div class="report-list">
                              <div class="report-list-item rounded-2 mb-3">
                                <div class="d-flex align-items-start">
                                  <div class="report-list-icon shadow-sm me-2">
                                    <img
                                      src="{{asset('/svg/icons/paypal-icon.svg')}}"
                                      width="22"
                                      height="22"
                                      alt="Paypal"
                                    />
                                  </div>
                                  <div class="gap-2 d-flex flex-wrap justify-content-between align-items-end w-100">
                                    <div class="d-flex flex-column">
                                      <span>Income</span>
                                      <h5 class="mb-0">$42,845</h5>
                                    </div>
                                    <small class="text-success">+2.34k</small>
                                  </div>
                                </div>
                              </div>
                              <div class="report-list-item rounded-2 mb-3">
                                <div class="d-flex align-items-start">
                                  <div class="report-list-icon shadow-sm me-2">
                                    <img
                                      src="{{asset('/svg/icons/shopping-bag-icon.svg')}}"
                                      width="22"
                                      height="22"
                                      alt="Shopping Bag"
                                    />
                                  </div>
                                  <div class="gap-2 d-flex flex-wrap justify-content-between align-items-end w-100">
                                    <div class="d-flex flex-column">
                                      <span>Expense</span>
                                      <h5 class="mb-0">$38,658</h5>
                                    </div>
                                    <small class="text-danger">-1.15k</small>
                                  </div>
                                </div>
                              </div>
                              <div class="report-list-item rounded-2">
                                <div class="d-flex align-items-start">
                                  <div class="report-list-icon shadow-sm me-2">
                                    <img
                                      src="{{asset('/svg/icons/wallet-icon.svg')}}"
                                      width="22"
                                      height="22"
                                      alt="Wallet"
                                    />
                                  </div>
                                  <div class="gap-2 d-flex flex-wrap justify-content-between align-items-end w-100">
                                    <div class="d-flex flex-column">
                                      <span>Profit</span>
                                      <h5 class="mb-0">$18,220</h5>
                                    </div>
                                    <small class="text-success">+1.35k</small>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!--/ Total Income -->
                  </div>
                  <!--/ Total Income -->
                  <!-- Total Balance -->
                  <div class="col-md-12 col-lg-4 pb-4">
                    <div class="card h-100">
                      <div class="card-header d-flex justify-content-between align-items-center">
                        <h5 class="card-title m-0 me-2">Total Balance</h5>
                        <div class="dropdown">
                          <button
                            class="btn p-0"
                            type="button"
                            id="totalBalance"
                            data-bs-toggle="dropdown"
                            aria-haspopup="true"
                            aria-expanded="false"
                          >
                            <i class="bx bx-dots-vertical-rounded"></i>
                          </button>
                          <div class="dropdown-menu dropdown-menu-end" aria-labelledby="totalBalance">
                            <a class="dropdown-item" href="javascript:void(0);">Last 28 Days</a>
                            <a class="dropdown-item" href="javascript:void(0);">Last Month</a>
                            <a class="dropdown-item" href="javascript:void(0);">Last Year</a>
                          </div>
                        </div>
                      </div>
                      <div class="card-body">
                        <div class="d-flex justify-content-start">
                          <div class="d-flex pe-4">
                            <div class="me-3">
                              <span class="badge bg-label-warning p-2"><i class="bx bx-wallet text-warning"></i></span>
                            </div>
                            <div>
                              <h6 class="mb-0">$2.54k</h6>
                              <small>Wallet</small>
                            </div>
                          </div>
                          <div class="d-flex">
                            <div class="me-3">
                              <span class="badge bg-label-secondary p-2"
                                ><i class="bx bx-dollar text-secondary"></i
                              ></span>
                            </div>
                            <div>
                              <h6 class="mb-0">$4.2k</h6>
                              <small>Paypal</small>
                            </div>
                          </div>
                        </div>
                        <div id="totalBalanceChart" class="border-bottom mb-3"></div>

                      </div>
                    </div>
                  </div>
                  <!--/ Total Balance -->
                </div>
                <div class="row">
                    <div class="col-md-12 col-lg-8 mb-4 mb-md-0">
                        <div class="card">
                          <div class="table-responsive text-nowrap">
                            <table class="table text-nowrap">
                              <thead>
                                <tr>
                                  <th>Product</th>
                                  <th>Category</th>
                                  <th>Payment</th>
                                  <th>Order Status</th>
                                  <th>Actions</th>
                                </tr>
                              </thead>
                              <tbody class="table-border-bottom-0">
                                <tr>
                                  <td>
                                    <div class="d-flex align-items-center">
                                      <img
                                        src="{{asset('/img/icons/products/oneplus.png')}}"
                                        alt="Oneplus"
                                        height="32"
                                        width="32"
                                        class="me-2"
                                      />
                                      <div class="d-flex flex-column">
                                        <span class="lh-1 fw-semibold">OnePlus 7Pro</span>
                                        <small class="text-muted">OnePlus</small>
                                      </div>
                                    </div>
                                  </td>
                                  <td>
                                    <span class="badge bg-label-primary rounded-pill badge-center p-3 me-2"
                                      ><i class="bx bx-mobile-alt bx-xs"></i
                                    ></span>
                                    Smart Phone
                                  </td>
                                  <td>
                                    <div class="lh-1 text-muted"><span class="text-primary fw-semibold">$120</span>/499</div>
                                    <small class="text-muted">Partially Paid</small>
                                  </td>
                                  <td><span class="badge bg-label-primary">Confirmed</span></td>
                                  <td>
                                    <div class="dropdown">
                                      <button
                                        type="button"
                                        class="btn dropdown-toggle hide-arrow p-0"
                                        data-bs-toggle="dropdown"
                                      >
                                        <i class="bx bx-dots-vertical-rounded"></i>
                                      </button>
                                      <div class="dropdown-menu">
                                        <a class="dropdown-item" href="javascript:void(0);"
                                          ><i class="bx bx-edit-alt me-1"></i> View Details</a
                                        >
                                        <a class="dropdown-item" href="javascript:void(0);"
                                          ><i class="bx bx-trash me-1"></i> Buy Again</a
                                        >
                                      </div>
                                    </div>
                                  </td>
                                </tr>
                                <tr>
                                  <td>
                                    <div class="d-flex align-items-center">
                                      <img
                                        src="{{asset('/img/icons/products/magic-mouse.png')}}"
                                        alt="Apple"
                                        height="32"
                                        width="32"
                                        class="me-2"
                                      />
                                      <div class="d-flex flex-column">
                                        <span class="lh-1 fw-semibold">Magic Mouse</span>
                                        <small class="text-muted">Apple</small>
                                      </div>
                                    </div>
                                  </td>
                                  <td>
                                    <span class="badge bg-label-warning rounded-pill badge-center p-3 me-2"
                                      ><i class="bx bx-mouse bx-xs"></i
                                    ></span>
                                    Mouse
                                  </td>
                                  <td>
                                    <div class="lh-1"><span class="text-primary fw-semibold">$149</span></div>
                                    <small class="text-muted">Fully Paid</small>
                                  </td>
                                  <td><span class="badge bg-label-success">Completed</span></td>
                                  <td>
                                    <div class="dropdown">
                                      <button
                                        type="button"
                                        class="btn dropdown-toggle hide-arrow p-0"
                                        data-bs-toggle="dropdown"
                                      >
                                        <i class="bx bx-dots-vertical-rounded"></i>
                                      </button>
                                      <div class="dropdown-menu">
                                        <a class="dropdown-item" href="javascript:void(0);"
                                          ><i class="bx bx-edit-alt me-1"></i> View Details</a
                                        >
                                        <a class="dropdown-item" href="javascript:void(0);"
                                          ><i class="bx bx-trash me-1"></i> Buy Again</a
                                        >
                                      </div>
                                    </div>
                                  </td>
                                </tr>
                                <tr>
                                  <td>
                                    <div class="d-flex align-items-center">
                                      <img
                                        src="{{asset('/img/icons/products/imac-pro.png')}}"
                                        alt="Apple"
                                        height="32"
                                        width="32"
                                        class="me-2"
                                      />
                                      <div class="d-flex flex-column">
                                        <span class="lh-1 fw-semibold">iMac Pro</span>
                                        <small class="text-muted">Apple</small>
                                      </div>
                                    </div>
                                  </td>
                                  <td>
                                    <span class="badge bg-label-info rounded-pill badge-center p-3 me-2"
                                      ><i class="bx bx-desktop bx-xs"></i
                                    ></span>
                                    Computer
                                  </td>
                                  <td>
                                    <div class="lh-1 text-muted"><span class="text-primary fw-semibold">$0</span>/899</div>
                                    <small class="text-muted">Unpaid</small>
                                  </td>
                                  <td><span class="badge bg-label-danger">Cancelled</span></td>
                                  <td>
                                    <div class="dropdown">
                                      <button
                                        type="button"
                                        class="btn dropdown-toggle hide-arrow p-0"
                                        data-bs-toggle="dropdown"
                                      >
                                        <i class="bx bx-dots-vertical-rounded"></i>
                                      </button>
                                      <div class="dropdown-menu">
                                        <a class="dropdown-item" href="javascript:void(0);"
                                          ><i class="bx bx-edit-alt me-1"></i> View Details</a
                                        >
                                        <a class="dropdown-item" href="javascript:void(0);"
                                          ><i class="bx bx-trash me-1"></i> Buy Again</a
                                        >
                                      </div>
                                    </div>
                                  </td>
                                </tr>
                                <tr>
                                  <td>
                                    <div class="d-flex align-items-center">
                                      <img
                                        src="{{asset('/img/icons/products/note10.png')}}"
                                        alt="Samsung"
                                        height="32"
                                        width="32"
                                        class="me-2"
                                      />
                                      <div class="d-flex flex-column">
                                        <span class="lh-1 fw-semibold">Note 10</span>
                                        <small class="text-muted">Samsung</small>
                                      </div>
                                    </div>
                                  </td>
                                  <td>
                                    <span class="badge bg-label-primary rounded-pill badge-center p-3 me-2"
                                      ><i class="bx bx-mobile-alt bx-xs"></i
                                    ></span>
                                    Smart Phone
                                  </td>
                                  <td>
                                    <div class="lh-1"><span class="text-primary fw-semibold">$149</span></div>
                                    <small class="text-muted">Fully Paid</small>
                                  </td>
                                  <td><span class="badge bg-label-success">Completed</span></td>
                                  <td>
                                    <div class="dropdown">
                                      <button
                                        type="button"
                                        class="btn dropdown-toggle hide-arrow p-0"
                                        data-bs-toggle="dropdown"
                                      >
                                        <i class="bx bx-dots-vertical-rounded"></i>
                                      </button>
                                      <div class="dropdown-menu">
                                        <a class="dropdown-item" href="javascript:void(0);"
                                          ><i class="bx bx-edit-alt me-1"></i> View Details</a
                                        >
                                        <a class="dropdown-item" href="javascript:void(0);"
                                          ><i class="bx bx-trash me-1"></i> Buy Again</a
                                        >
                                      </div>
                                    </div>
                                  </td>
                                </tr>
                                <tr>
                                  <td>
                                    <div class="d-flex align-items-center">
                                      <img
                                        src="{{asset('/img/icons/products/iphone.png')}}"
                                        alt="Apple"
                                        height="32"
                                        width="32"
                                        class="me-2"
                                      />
                                      <div class="d-flex flex-column">
                                        <span class="lh-1 fw-semibold">iPhone 11 Pro</span>
                                        <small class="text-muted">Apple</small>
                                      </div>
                                    </div>
                                  </td>
                                  <td>
                                    <span class="badge bg-label-primary rounded-pill badge-center p-3 me-2"
                                      ><i class="bx bx-mobile-alt bx-xs"></i
                                    ></span>
                                    Smart Phone
                                  </td>
                                  <td>
                                    <div class="lh-1"><span class="text-primary fw-semibold">$399</span></div>
                                    <small class="text-muted">Fully Paid</small>
                                  </td>
                                  <td><span class="badge bg-label-success">Completed</span></td>
                                  <td>
                                    <div class="dropdown">
                                      <button
                                        type="button"
                                        class="btn dropdown-toggle hide-arrow p-0"
                                        data-bs-toggle="dropdown"
                                      >
                                        <i class="bx bx-dots-vertical-rounded"></i>
                                      </button>
                                      <div class="dropdown-menu">
                                        <a class="dropdown-item" href="javascript:void(0);"
                                          ><i class="bx bx-edit-alt me-1"></i> View Details</a
                                        >
                                        <a class="dropdown-item" href="javascript:void(0);"
                                          ><i class="bx bx-trash me-1"></i> Buy Again</a
                                        >
                                      </div>
                                    </div>
                                  </td>
                                </tr>
                                <tr>
                                  <td>
                                    <div class="d-flex align-items-center">
                                      <img
                                        src="{{asset('/img/icons/products/mi-tv.png')}}"
                                        alt="Xiaomi"
                                        height="32"
                                        width="32"
                                        class="me-2"
                                      />
                                      <div class="d-flex flex-column">
                                        <span class="lh-1 fw-semibold">Mi LED TV 4X</span>
                                        <small class="text-muted">Xiaomi</small>
                                      </div>
                                    </div>
                                  </td>
                                  <td>
                                    <span class="badge bg-label-danger rounded-pill badge-center p-3 me-2"
                                      ><i class="bx bx-tv bx-xs"></i
                                    ></span>
                                    Smart TV
                                  </td>
                                  <td>
                                    <div class="lh-1 text-muted"><span class="text-primary fw-semibold">$349</span>/2499</div>
                                    <small class="text-muted">Partially Paid</small>
                                  </td>
                                  <td><span class="badge bg-label-primary">Confirmed</span></td>
                                  <td>
                                    <div class="dropdown">
                                      <button
                                        type="button"
                                        class="btn dropdown-toggle hide-arrow p-0"
                                        data-bs-toggle="dropdown"
                                      >
                                        <i class="bx bx-dots-vertical-rounded"></i>
                                      </button>
                                      <div class="dropdown-menu">
                                        <a class="dropdown-item" href="javascript:void(0);"
                                          ><i class="bx bx-edit-alt me-1"></i> View Details</a
                                        >
                                        <a class="dropdown-item" href="javascript:void(0);"
                                          ><i class="bx bx-trash me-1"></i> Buy Again</a
                                        >
                                      </div>
                                    </div>
                                  </td>
                                </tr>
                                <tr>
                                  <td>
                                    <div class="d-flex align-items-center">
                                      <img
                                        src="{{asset('/img/icons/products/logitech-mx.png')}}"
                                        alt="Logitech"
                                        height="32"
                                        width="32"
                                        class="me-2"
                                      />
                                      <div class="d-flex flex-column">
                                        <span class="lh-1 fw-semibold">Logitech MX</span>
                                        <small class="text-muted">Logitech</small>
                                      </div>
                                    </div>
                                  </td>
                                  <td>
                                    <span class="badge bg-label-warning rounded-pill badge-center p-3 me-2"
                                      ><i class="bx bx-mouse bx-xs"></i
                                    ></span>
                                    Mouse
                                  </td>
                                  <td>
                                    <div class="lh-1"><span class="text-primary fw-semibold">$89</span></div>
                                    <small class="text-muted">Fully Paid</small>
                                  </td>
                                  <td><span class="badge bg-label-primary">Completed</span></td>
                                  <td>
                                    <div class="dropdown">
                                      <button
                                        type="button"
                                        class="btn dropdown-toggle hide-arrow p-0"
                                        data-bs-toggle="dropdown"
                                      >
                                        <i class="bx bx-dots-vertical-rounded"></i>
                                      </button>
                                      <div class="dropdown-menu">
                                        <a class="dropdown-item" href="javascript:void(0);"
                                          ><i class="bx bx-edit-alt me-1"></i> View Details</a
                                        >
                                        <a class="dropdown-item" href="javascript:void(0);"
                                          ><i class="bx bx-trash me-1"></i> Buy Again</a
                                        >
                                      </div>
                                    </div>
                                  </td>
                                </tr>
                              </tbody>
                            </table>
                          </div>
                        </div>
                      </div>



                  <div class="col-md-12 col-lg-4">
                    <div class="row">
                      <div class="col-12 col-sm-6 col-md-3 col-lg-6 mb-4">
                        <div class="card">
                          <div class="card-body">
                            <div class="card-title d-flex justify-content-between align-items-start">
                              <div class="avatar flex-shrink-0">
                                <img
                                  src="{{asset('/img/icons/unicons/cc-warning.png')}}"
                                  alt="Credit Card"
                                  class="rounded"
                                />
                              </div>
                              <div class="dropdown">
                                <button
                                  class="btn p-0"
                                  type="button"
                                  id="cardOpt5"
                                  data-bs-toggle="dropdown"
                                  aria-haspopup="true"
                                  aria-expanded="false"
                                >
                                  <i class="bx bx-dots-vertical-rounded"></i>
                                </button>
                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt5">
                                  <a class="dropdown-item" href="javascript:void(0);">View More</a>
                                  <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                                </div>
                              </div>
                            </div>
                            <span class="d-block mb-1">Revenue</span>
                            <h3 class="card-title text-nowrap mb-2">$42,389</h3>
                            <small class="text-success fw-semibold"><i class="bx bx-up-arrow-alt"></i> +52.18%</small>
                          </div>
                        </div>
                      </div>
                      <div class="col-12 col-sm-6 col-md-3 col-lg-6 mb-4">
                        <div class="card">
                          <div class="card-body">
                            <span class="d-block fw-semibold">Sales</span>
                            <h3 class="card-title mb-2">482k</h3>
                            <span class="badge bg-label-info mb-3">+34%</span>
                            <small class="d-block text-muted">Sales Target</small>
                            <div class="d-flex align-items-center">
                              <div class="progress w-75 me-2" style="height: 8px">
                                <div
                                  class="progress-bar bg-info"
                                  style="width: 78%"
                                  role="progressbar"
                                  aria-valuenow="78"
                                  aria-valuemin="0"
                                  aria-valuemax="100"
                                ></div>
                              </div>
                              <span>78%</span>
                            </div>
                          </div>
                        </div>
                      </div>

                    </div>
                  </div>


                </div>
              </div>
              <!--/ Content -->
@endsection
