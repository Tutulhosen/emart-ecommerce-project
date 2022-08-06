<nav class="navbar navbar-fixed-top">
    <div class="container-fluid">
        <div class="navbar-btn">
            <button type="button" class="btn-toggle-offcanvas"><i class="lnr lnr-menu fa fa-bars"></i></button>
        </div>

        {{-- logo  --}}
        <div class="navbar-brand">
            <a href="index.html"><img src="{{asset('admin/assets/images/logo.svg')}}" alt="Lucid Logo" class="img-responsive logo"></a>
        </div>

        {{-- search bar  --}}
        
        <div class="navbar-right">
            <form id="navbar-search" class="navbar-form search-form">
                <input value="" class="form-control" placeholder="Search here..." type="text">
                <button type="button" class="btn btn-default"><i class="fa fa-search"></i></button>
            </form>

            {{-- menu br  --}}
            <div id="navbar-menu">
                <ul class="nav navbar-nav">
                    <li><a href="events.html" class="icon-menu d-none d-sm-block d-md-none d-lg-block"><i class="fa fa-calendar"></i></a></li>
                    <li><a href="app-inbox.html" class="icon-menu d-none d-sm-block"><i class="fa fa-envelope"></i><span class="notification-dot"></span></a></li>
                    <li class="dropdown">
                        <a href="javascript:void(0);" class="dropdown-toggle icon-menu" data-toggle="dropdown">
                            <i class="fa fa-bell"></i>
                            <span class="notification-dot"></span>
                        </a>
                        <ul class="dropdown-menu notifications">
                            <li class="header"><strong>You have 4 new Notifications</strong></li>
                            <li>
                                <a href="javascript:void(0);">
                                    <div class="media">
                                        <div class="media-left">
                                            <i class="fa fa-info text-warning"></i>
                                        </div>
                                        <div class="media-body">
                                            <p class="text">Campaign <strong>Holiday Sale</strong> is nearly reach budget limit.</p>
                                            <span class="timestamp">10:00 AM Today</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0);">
                                    <div class="media">
                                        <div class="media-left">
                                            <i class="fa fa-thumbs-o-up text-success"></i>
                                        </div>
                                        <div class="media-body">
                                            <p class="text">Your New Campaign <strong>Holiday Sale</strong> is approved.</p>
                                            <span class="timestamp">11:30 AM Today</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                             <li>
                                <a href="javascript:void(0);">
                                    <div class="media">
                                        <div class="media-left">
                                            <i class="fa fa-pie-chart text-info"></i>
                                        </div>
                                        <div class="media-body">
                                            <p class="text">Website visits from Twitter is 27% higher than last week.</p>
                                            <span class="timestamp">04:00 PM Today</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0);">
                                    <div class="media">
                                        <div class="media-left">
                                            <i class="fa fa-info text-danger"></i>
                                        </div>
                                        <div class="media-body">
                                            <p class="text">Error on website analytics configurations</p>
                                            <span class="timestamp">Yesterday</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="footer"><a href="javascript:void(0);" class="more">See all notifications</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="javascript:void(0);" class="dropdown-toggle icon-menu" data-toggle="dropdown"><i class="glyphicon glyphicon-equalizer"></i></a>
                        <ul class="dropdown-menu user-menu menu-icon">
                            <li class="menu-heading">ACCOUNT SETTINGS</li>
                            <li><a href="javascript:void(0);"><i class="fa fa-note"></i> <span>Basic</span></a></li>
                            <li><a href="javascript:void(0);"><i class="fa fa-equalizer"></i> <span>Preferences</span></a></li>
                            <li><a href="javascript:void(0);"><i class="fa fa-lock"></i> <span>Privacy</span></a></li>
                            <li><a href="javascript:void(0);"><i class="fa fa-bell"></i> <span>Notifications</span></a></li>
                            <li class="menu-heading">BILLING</li>
                            <li><a href="javascript:void(0);"><i class="fa fa-credit-card"></i> <span>Payments</span></a></li>
                            <li><a href="javascript:void(0);"><i class="fa fa-printer"></i> <span>Invoices</span></a></li>
                            <li><a href="javascript:void(0);"><i class="fa fa-refresh"></i> <span>Renewals</span></a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="page-login.html" class="icon-menu"><i class="fa fa-sign-in" aria-hidden="true"></i></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>