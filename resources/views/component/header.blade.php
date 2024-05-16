<div class="navbar-header">

                <div class="d-flex align-items-left">
                </div>

                <div class="d-flex align-items-center">

                    <div class="dropdown d-inline-block">
                        <a type="button" class="btn header-item noti-icon waves-effect"
                            id="page-header-notifications-dropdown" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">
                            @if($notif != null)
                                <span class="badge badge-danger badge-pill">{{$notif}}</span>
                            @endif
                            <i class="mdi mdi-bell"></i>
                            
                        </a>
                        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right p-0"
                            aria-labelledby="page-header-notifications-dropdown">
                            <div class="p-3">
                                <div class="row align-items-center">
                                    <div class="col">
                                        <h6 class="m-0"> Notifications </h6>
                                    </div>
                                    <!-- <div class="col-auto">
                                        <a href="#!" class="small"> View All</a>
                                    </div> -->
                                </div>
                            </div>
                            <div data-simplebar style="max-height: 230px;">
                                @foreach($userData2 as $list)
                                <a href="" class="text-reset notification-item">
                                    <div class="media">
                                        <img src="assets/images/users/avatar-3.jpg"
                                            class="mr-3 rounded-circle avatar-xs" alt="user-pic">
                                        <div class="media-body">
                                            <h6 class="mt-0 mb-1">{{ $list->name }}</h6>
                                            <p class="font-size-12 mb-1">{{ $list->email }}</p>
                                            <p class="font-size-12 mb-0 text-muted"><i
                                                    class="mdi mdi-clock-outline"></i> {{ $list->id }} ago</p>
                                        </div>
                                    </div>
                                </a>
                                @endforeach
                                <!-- <a href="" class="text-reset notification-item">
                                    <div class="media">
                                        <div class="avatar-xs mr-3">
                                            <span class="avatar-title bg-success rounded-circle">
                                                <i class="mdi mdi-cloud-download-outline"></i>
                                            </span>
                                        </div>
                                        <div class="media-body">
                                            <h6 class="mt-0 mb-1">Download Available !</h6>
                                            <p class="font-size-12 mb-1">Latest version of admin is now available.
                                                Please download here.</p>
                                            <p class="font-size-12 mb-0 text-muted"><i
                                                    class="mdi mdi-clock-outline"></i> 4 hours ago</p>
                                        </div>
                                    </div>
                                </a>
                                <a href="" class="text-reset notification-item">
                                    <div class="media">
                                        <img src="assets/images/users/avatar-3.jpg"
                                            class="mr-3 rounded-circle avatar-xs" alt="user-pic">
                                        <div class="media-body">
                                            <h6 class="mt-0 mb-1">Victoria Mendis</h6>
                                            <p class="font-size-12 mb-1">Just upgraded to premium account.</p>
                                            <p class="font-size-12 mb-0 text-muted"><i
                                                    class="mdi mdi-clock-outline"></i> 1 day ago</p>
                                        </div>
                                    </div>
                                </a> -->
                            </div>
                            <!-- <div class="p-2 border-top">
                                <a class="btn btn-sm btn-light btn-block text-center" href="javascript:void(0)">
                                    <i class="mdi mdi-arrow-down-circle mr-1"></i> Load More..
                                </a>
                            </div> -->
                        </div>
                    </div>

                    <div class="dropdown d-inline-block ml-2">
                        <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="d-none d-sm-inline-block ml-1">{{$userData->name}}</span>
                            <i class="mdi mdi-chevron-down d-none d-sm-inline-block"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item d-flex align-items-center justify-content-between"
                                href="{{ route('profile.edit')}}">
                                <span>Profile</span>
                                <span>
                                    <span class="badge badge-pill badge-warning">1</span>
                                </span>
                            </a>
                            <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <a href="route('logout')" class="dropdown-item d-flex align-items-center justify-content-between"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </a>
                        </form>
                            <!-- <a class="dropdown-item d-flex align-items-center justify-content-between"
                                href="{{ route('logout') }}">
                                <span>Log Out</span>
                            </a> -->
                        </div>
                    </div>

                </div>
            </div>
