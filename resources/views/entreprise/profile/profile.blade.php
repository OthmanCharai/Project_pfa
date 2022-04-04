@extends('entreprise.layouts.app')

@section('content')
            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">
                <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Entreprise / View /</span> Account</h4>
                <div class="row">
                  <!-- User Sidebar -->
                  <div class="col-md-5 col-lg-5 col-xl-4 order-1 order-md-0">
                    <!-- User Card -->
                    <div class="card mb-4">
                      <div class="card-body">
                        <div class="user-avatar-section">
                          <div class="d-flex flex-column align-items-center">
                            <img
                              class="img-fluid rounded my-4"
                              src="{{asset('/img/avatars/10.png')}}"
                              height="110"
                              width="110"
                              alt="User avatar"
                            />
                            <div class="user-info text-center">
                              <h4 class="mb-2">Violet Mendoza</h4>
                              <span class="badge bg-label-secondary">Author</span>
                            </div>
                          </div>
                        </div>
                        <div class="d-flex flex-wrap justify-content-around py-3 my-4">
                          <div class="gap-3 d-flex align-items-start mt-3 me-4">
                            <span class="badge bg-label-primary rounded p-2"><i class="bx bx-check bx-sm"></i></span>
                            <div>
                              <h5 class="mb-0">1.23k</h5>
                              <span>Tasks Done</span>
                            </div>
                          </div>
                          <div class="gap-3 d-flex align-items-start mt-3">
                            <span class="badge bg-label-primary rounded p-2"><i class="bx bx-customize bx-sm"></i></span>
                            <div>
                              <h5 class="mb-0">568</h5>
                              <span>Projects Done</span>
                            </div>
                          </div>
                        </div>
                        <h5 class="border-bottom pb-2 mb-4">Details</h5>
                        <div class="info-container">
                          <ul class="list-unstyled">
                            <li class="mb-3">
                              <span class="fw-bold me-2">Username:</span>
                              <span>violet.dev</span>
                            </li>
                            <li class="mb-3">
                              <span class="fw-bold me-2">Email:</span>
                              <span>vafgot@vultukir.org</span>
                            </li>
                            <li class="mb-3">
                              <span class="fw-bold me-2">Status:</span>
                              <span class="badge bg-label-success">Active</span>
                            </li>
                            <li class="mb-3">
                              <span class="fw-bold me-2">Role:</span>
                              <span>Author</span>
                            </li>
                            <li class="mb-3">
                              <span class="fw-bold me-2">Tax id:</span>
                              <span>Tax-8965</span>
                            </li>
                            <li class="mb-3">
                              <span class="fw-bold me-2">Contact:</span>
                              <span>(123) 456-7890</span>
                            </li>
                            <li class="mb-3">
                              <span class="fw-bold me-2">Languages:</span>
                              <span>French</span>
                            </li>
                            <li class="mb-3">
                              <span class="fw-bold me-2">Country:</span>
                              <span>England</span>
                            </li>
                          </ul>
                          <div class="d-flex justify-content-center pt-3">
                            <a
                              href="javascript:;"
                              class="btn btn-primary me-3"
                              data-bs-target="#editUser"
                              data-bs-toggle="modal"
                              >Edit</a
                            >
                            {{-- <a href="javascript:;" class="btn btn-label-danger suspend-user">Suspended</a> --}}
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- /User Card -->

                  </div>
                  <!--/ User Sidebar -->

                  <!-- User Content -->
                  <div class="col-md-7 col-lg-7 col-xl-8 order-0 order-md-1">
                    <!-- User Pills -->
                    <ul class="nav nav-pills flex-column flex-md-row mb-3">
                      <li class="nav-item">
                        <a class="nav-link  {{ request()->is('entreprises/profile/account') ? 'active' : '' }}" href="{{route('entreprises.profile.account')}}"><i class="bx bx-user me-1"></i>Account</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link  {{ request()->is('entreprises/profile/security') ? 'active' : '' }}" href="{{route('entreprises.profile.security')}}"
                          ><i class="bx bx-lock-alt me-1"></i>Security</a
                        >
                      </li>
                      <li class="nav-item">
                        <a class="nav-link {{ request()->is('entreprises/profile/products') ? 'active' : '' }}" href="{{route('entreprises.profile.products')}}"
                          ><i class="bx bx-detail me-1"></i>Products</a
                        >
                      </li>
                      <li class="nav-item">
                        <a class="nav-link {{ request()->is('influencers/profile/applied_products') ? 'active' : '' }}" href="{{route('entreprises.profile.applied_products')}}"
                          ><i class="bx bx-detail me-1"></i>Applied Products</a
                        >
                      </li>

                    </ul>
                    <!--/ User Pills -->
                     @yield('profileContent')
                  </div>
                  <!--/ User Content -->
                </div>
                <!-- Modal -->
                <!-- Edit User Modal -->
                <div class="modal fade" id="editUser" tabindex="-1" aria-hidden="true">
                  <div class="modal-dialog modal-lg modal-simple modal-edit-user">
                    <div class="modal-content p-3 p-md-5">
                      <div class="modal-body">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        <div class="text-center mb-4">
                          <h3>Edit User Information</h3>
                          <p>Updating user details will receive a privacy audit.</p>
                        </div>
                        <form id="editUserForm" class="row g-3" onsubmit="return false">
                          <div class="col-12 col-md-6">
                            <label class="form-label" for="modalEditUserFirstName">First Name</label>
                            <input
                              type="text"
                              id="modalEditUserFirstName"
                              name="modalEditUserFirstName"
                              class="form-control"
                              placeholder="John"
                            />
                          </div>
                          <div class="col-12 col-md-6">
                            <label class="form-label" for="modalEditUserLastName">Last Name</label>
                            <input
                              type="text"
                              id="modalEditUserLastName"
                              name="modalEditUserLastName"
                              class="form-control"
                              placeholder="Doe"
                            />
                          </div>
                          <div class="col-12">
                            <label class="form-label" for="modalEditUserName">Username</label>
                            <input
                              type="text"
                              id="modalEditUserName"
                              name="modalEditUserName"
                              class="form-control"
                              placeholder="john.doe.007"
                            />
                          </div>
                          <div class="col-12 col-md-6">
                            <label class="form-label" for="modalEditUserEmail">Email</label>
                            <input
                              type="text"
                              id="modalEditUserEmail"
                              name="modalEditUserEmail"
                              class="form-control"
                              placeholder="example@domain.com"
                            />
                          </div>
                          <div class="col-12 col-md-6">
                            <label class="form-label" for="modalEditUserStatus">Status</label>
                            <select
                              id="modalEditUserStatus"
                              name="modalEditUserStatus"
                              class="form-select"
                              aria-label="Default select example"
                            >
                              <option selected>Status</option>
                              <option value="1">Active</option>
                              <option value="2">Inactive</option>
                              <option value="3">Suspended</option>
                            </select>
                          </div>
                          <div class="col-12 col-md-6">
                            <label class="form-label" for="modalEditTaxID">Tax ID</label>
                            <input
                              type="text"
                              id="modalEditTaxID"
                              name="modalEditTaxID"
                              class="form-control modal-edit-tax-id"
                              placeholder="123 456 7890"
                            />
                          </div>
                          <div class="col-12 col-md-6">
                            <label class="form-label" for="modalEditUserPhone">Phone Number</label>
                            <div class="input-group input-group-merge">
                              <span class="input-group-text">+1</span>
                              <input
                                type="text"
                                id="modalEditUserPhone"
                                name="modalEditUserPhone"
                                class="form-control phone-number-mask"
                                placeholder="202 555 0111"
                              />
                            </div>
                          </div>
                          <div class="col-12 col-md-6">
                            <label class="form-label" for="modalEditUserLanguage">Language</label>
                            <select
                              id="modalEditUserLanguage"
                              name="modalEditUserLanguage"
                              class="select2 form-select"
                              multiple
                            >
                              <option value="">Select</option>
                              <option value="english" selected>English</option>
                              <option value="spanish">Spanish</option>
                              <option value="french">French</option>
                              <option value="german">German</option>
                              <option value="dutch">Dutch</option>
                              <option value="hebrew">Hebrew</option>
                              <option value="sanskrit">Sanskrit</option>
                              <option value="hindi">Hindi</option>
                            </select>
                          </div>
                          <div class="col-12 col-md-6">
                            <label class="form-label" for="modalEditUserCountry">Country</label>
                            <select
                              id="modalEditUserCountry"
                              name="modalEditUserCountry"
                              class="select2 form-select"
                              data-allow-clear="true"
                            >
                              <option value="">Select</option>
                              <option value="Australia">Australia</option>
                              <option value="Bangladesh">Bangladesh</option>
                              <option value="Belarus">Belarus</option>
                              <option value="Brazil">Brazil</option>
                              <option value="Canada">Canada</option>
                              <option value="China">China</option>
                              <option value="France">France</option>
                              <option value="Germany">Germany</option>
                              <option value="India">India</option>
                              <option value="Indonesia">Indonesia</option>
                              <option value="Israel">Israel</option>
                              <option value="Italy">Italy</option>
                              <option value="Japan">Japan</option>
                              <option value="Korea">Korea, Republic of</option>
                              <option value="Mexico">Mexico</option>
                              <option value="Philippines">Philippines</option>
                              <option value="Russia">Russian Federation</option>
                              <option value="South Africa">South Africa</option>
                              <option value="Thailand">Thailand</option>
                              <option value="Turkey">Turkey</option>
                              <option value="Ukraine">Ukraine</option>
                              <option value="United Arab Emirates">United Arab Emirates</option>
                              <option value="United Kingdom">United Kingdom</option>
                              <option value="United States">United States</option>
                            </select>
                          </div>
                          <div class="col-12">
                            <label class="switch">
                              <input type="checkbox" class="switch-input" />
                              <span class="switch-toggle-slider">
                                <span class="switch-on"></span>
                                <span class="switch-off"></span>
                              </span>
                              <span class="switch-label">Use as a billing address?</span>
                            </label>
                          </div>
                          <div class="col-12 text-center">
                            <button type="submit" class="btn btn-primary me-1 me-sm-3">Submit</button>
                            <button
                              type="reset"
                              class="btn btn-label-secondary"
                              data-bs-dismiss="modal"
                              aria-label="Close"
                            >
                              Cancel
                            </button>
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
                <!--/ Edit User Modal -->
                @yield('modal')

                <!-- /Modal -->
              </div>
              <!--/ Content -->
@endsection
