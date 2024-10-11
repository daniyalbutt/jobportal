@extends('layouts.admin-app')

@section('content')
<!-- row -->
<div class="container-fluid">
    <div class="row">
        <div class="col-xl-6">
            <div class="row">
                <div class="col-xl-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="row separate-row">
                                <div class="col-sm-6">
                                    <div class="job-icon pb-4 d-flex justify-content-between">
                                        <div>
                                            <div class="d-flex align-items-center mb-1">
                                                <h2 class="mb-0 lh-1">342</h2>
                                                <span class="ms-3 badge badge-success light">+0.5%</span>
                                            </div>
                                            <span class="d-block mb-2">Interview Schedules</span>
                                        </div>
                                        <div id="NewCustomers"></div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="job-icon pb-4 pt-4 pt-sm-0 d-flex justify-content-between">
                                        <div>
                                            <div class="d-flex align-items-center mb-1">
                                                <h2 class="mb-0 lh-1">984</h2>
                                            </div>
                                            <span class="d-block mb-2">Application Sent</span>
                                        </div>
                                        <div id="NewCustomers1"></div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="job-icon pt-4 pb-sm-0 pb-4 d-flex justify-content-between">
                                        <div>
                                            <div class="d-flex align-items-center mb-1">
                                                <h2 class="mb-0 lh-1">1,567k</h2>
                                                <span class="ms-3 badge badge-danger light">-2.0%</span>
                                            </div>
                                            <span class="d-block mb-2">Profile Viewed</span>
                                        </div>
                                        <div id="NewCustomers2"></div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="job-icon pt-4  d-flex justify-content-between">
                                        <div>
                                            <div class="d-flex align-items-center mb-1">
                                                <h2 class="mb-0 lh-1">437</h2>
                                            </div>
                                            <span class="d-block mb-2">Unread Messages</span>
                                        </div>
                                        <div id="NewCustomers3"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-6">
            <div class="row">
                <div class="col-xl-12">
                    <div class="card">
                        <div class="card-header border-0 pb-2">
                            <h4 class="card-title mb-0">Recent Activity</h4>
                        </div>
                        <div class="card-body loadmore-content pb-0 pt-3 list-grid-area dlab-scroll height370 recent-activity-wrapper" id="RecentActivityContent">
                            <div class="d-flex recent-activity">
                                <span class="me-3 activity">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 17 17">
                                        <circle  cx="8.5" cy="8.5" r="8.5" fill="var(--primary)"/>
                                    </svg>
                                </span>
                                <div class="d-flex align-items-center list-item-bx">
                                    <div class="icon-img-bx">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="71" height="71" viewBox="0 0 71 71">
                                            <g  transform="translate(-457 -443)">
                                                <rect  width="71" height="71" rx="12" transform="translate(457 443)" fill="#c5c5c5"/>
                                                <g  transform="translate(457 443)">
                                                    <rect  data-name="placeholder" width="71" height="71" rx="12" fill="#2769ee"/>
                                                    <circle  data-name="Ellipse 12" cx="18" cy="18" r="18" transform="translate(15 20)" fill="#fff"/>
                                                    <circle  data-name="Ellipse 11" cx="11" cy="11" r="11" transform="translate(36 15)" fill="#ffe70c" style="mix-blend-mode: multiply;isolation: isolate"/>
                                                </g>
                                            </g>
                                        </svg>
                                    </div>
                                    <div class="ms-3">
                                        <h6 class="mb-1">Bubles Studios have 5 available positions for you</h6>
                                        <p class="mb-0">8min ago</p>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex recent-activity">
                                <span class="me-3 activity">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 17 17">
                                        <circle  cx="8.5" cy="8.5" r="8.5" fill="#d9d9d9"/>
                                    </svg>
                                </span>
                                <div class="d-flex align-items-center list-item-bx">
                                    <div class="icon-img-bx">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="71" height="71" viewBox="0 0 71 71">
                                            <g  transform="translate(-457 -443)">
                                                <rect  width="71" height="71" rx="12" transform="translate(457 443)" fill="#c5c5c5"/>
                                                <g  transform="translate(457 443)">
                                                    <rect  data-name="placeholder" width="71" height="71" rx="12" fill="#eeac27"/>
                                                    <circle  data-name="Ellipse 12" cx="18" cy="18" r="18" transform="translate(15 20)" fill="#fff"/>
                                                    <circle  data-name="Ellipse 11" cx="11" cy="11" r="11" transform="translate(36 15)" fill="#ffe70c" style="mix-blend-mode: multiply;isolation: isolate"/>
                                                </g>
                                            </g>
                                        </svg>
                                    </div>
                                    <div class="ms-3">
                                        <h6 class="mb-1">Elextra Studios has invited you to interview meeting tomorrow</h6>
                                        <p class="mb-0">8min ago</p>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex recent-activity">
                                <span class="me-3 activity">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 17 17">
                                        <circle  cx="8.5" cy="8.5" r="8.5" fill="#d9d9d9"/>
                                    </svg>
                                </span>
                                <div class="d-flex align-items-center list-item-bx">
                                    <div class="icon-img-bx">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="71" height="71" viewBox="0 0 71 71">
                                            <g  transform="translate(-457 -443)">
                                                <rect  width="71" height="71" rx="12" transform="translate(457 443)" fill="#c5c5c5"/>
                                                <g  transform="translate(457 443)">
                                                    <rect  data-name="placeholder" width="71" height="71" rx="12" fill="#22bc32"/>
                                                    <circle  data-name="Ellipse 12" cx="18" cy="18" r="18" transform="translate(15 20)" fill="#fff"/>
                                                    <circle  data-name="Ellipse 11" cx="11" cy="11" r="11" transform="translate(36 15)" fill="#ffe70c" style="mix-blend-mode: multiply;isolation: isolate"/>
                                                </g>
                                            </g>
                                        </svg>
                                    </div>
                                    <div class="ms-3">
                                        <h6 class="mb-1">Highspeed Design Team have 2 available positions for you</h6>
                                        <p class="mb-0">8min ago</p>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex recent-activity">
                                <span class="me-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 17 17">
                                        <circle  cx="8.5" cy="8.5" r="8.5" fill="#d9d9d9"/>
                                    </svg>
                                </span>
                                <div class="d-flex align-items-center list-item-bx">
                                    <div class="icon-img-bx">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="71" height="71" viewBox="0 0 71 71">
                                            <g  transform="translate(-457 -443)">
                                                <rect  width="71" height="71" rx="12" transform="translate(457 443)" fill="#c5c5c5"/>
                                                <g  transform="translate(457 443)">
                                                    <rect  data-name="placeholder" width="71" height="71" rx="12" fill="#9933cb"/>
                                                    <circle  data-name="Ellipse 12" cx="18" cy="18" r="18" transform="translate(15 20)" fill="#fff"/>
                                                    <circle  data-name="Ellipse 11" cx="11" cy="11" r="11" transform="translate(36 15)" fill="#ffe70c" style="mix-blend-mode: multiply;isolation: isolate"/>
                                                </g>
                                            </g>
                                        </svg>
                                    </div>
                                    <div class="ms-3">
                                        <h6 class="mb-1">Kleon Studios have 5 available positions for you</h6>
                                        <p class="mb-0">8min ago</p>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex recent-activity">
                                <span class="me-3 activity">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 17 17">
                                        <circle  cx="8.5" cy="8.5" r="8.5" fill="#d9d9d9"/>
                                    </svg>
                                </span>
                                <div class="d-flex align-items-center list-item-bx">
                                    <div class="icon-img-bx">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="71" height="71" viewBox="0 0 71 71">
                                            <g  transform="translate(-457 -443)">
                                                <rect  width="71" height="71" rx="12" transform="translate(457 443)" fill="#c5c5c5"/>
                                                <g  transform="translate(457 443)">
                                                    <rect  data-name="placeholder" width="71" height="71" rx="12" fill="#eeac27"/>
                                                    <circle  data-name="Ellipse 12" cx="18" cy="18" r="18" transform="translate(15 20)" fill="#fff"/>
                                                    <circle  data-name="Ellipse 11" cx="11" cy="11" r="11" transform="translate(36 15)" fill="#ffe70c" style="mix-blend-mode: multiply;isolation: isolate"/>
                                                </g>
                                            </g>
                                        </svg>
                                    </div>
                                    <div class="ms-3">
                                        <h6 class="mb-1">Elextra Studios has invited you to interview meeting tomorrow</h6>
                                        <p class="mb-0">8min ago</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer border-0 text-center">
                            <a href="javascript:void(0);" class="btn btn-outline-primary m-auto dlab-load-more" id="RecentActivity" rel="">View more</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
