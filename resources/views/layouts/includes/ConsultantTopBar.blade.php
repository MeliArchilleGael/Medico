<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#sidebar-collapse"><span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span></button>
            <a class="navbar-brand" href="#"><span>Nurse</span> Dashboard</a>
            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown"><a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
                        <em class="fa fa-envelope"></em><span class="label label-danger">{{ $messages->count() }}</span>
                    </a>
                    <ul class="dropdown-menu dropdown-messages">
                        @foreach($messages as $message)
                            <li>
                                <div class="dropdown-messages-box"><a href="" class="pull-left">
                                        <img alt="image" class="img-circle" src="http://placehold.it/40/30a5ff/fff">
                                    </a>
                                    <div class="message-body"><small
                                            class="pull-right">{{ $message->created_at }}</small>
                                        <a href="#"><strong>{{$message->name}}</strong> {{ $message->subject }}.</a>
                                        <br/><small class="text-muted">{{ $message->created_at }}</small></div>
                                </div>
                            </li>
                            <li class="divider"></li>
                        @endforeach
                        <li>
                            <div class="all-button"><a href="#">
                                    <em class="fa fa-inbox"></em> <strong>All Messages</strong>
                                </a></div>
                        </li>
                    </ul>
                </li>
                {{--
                <li class="dropdown">
                    <a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
                        <em class="fa fa-bell"></em><span class="label label-info">5</span>
                    </a>
                    <ul class="dropdown-menu dropdown-alerts">
                        <li><a href="#">
                                <div><em class="fa fa-envelope"></em> 1 New Message
                                    <span class="pull-right text-muted small">3 mins ago</span></div>
                            </a></li>
                        <li class="divider"></li>
                        <li><a href="#">
                                <div><em class="fa fa-heart"></em> 12 New Likes
                                    <span class="pull-right text-muted small">4 mins ago</span></div>
                            </a></li>
                        <li class="divider"></li>
                        <li><a href="#">
                                <div><em class="fa fa-user"></em> 5 New Followers
                                    <span class="pull-right text-muted small">4 mins ago</span></div>
                            </a></li>
                    </ul>
                </li>--}}
            </ul>
        </div>
    </div><!-- /.container-fluid -->
</nav>

<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
    <div class="profile-sidebar">
        <div class="profile-userpic">
            <img src="http://placehold.it/50/30a5ff/fff" class="img-responsive" alt="">
        </div>
        <div class="profile-usertitle">
            <div class="profile-usertitle-name">{{ Auth::user()->name }}</div>
            <div class="profile-usertitle-status"><span class="indicator label-success"></span>Online</div>
        </div>
        <div class="clear"></div>
    </div>
    <div class="divider"></div>
    <form role="search">
        <div class="form-group">
            <input type="text" class="form-control" placeholder="Search">
        </div>
    </form>
    <ul class="nav menu">
        <li class="active"><a href="{{ route('consultants.dashboard') }}"><em class="fa fa-dashboard">&nbsp;</em>
                Dashboard</a></li>

        <li class="parent ">
            <a data-toggle="collapse" href="#sub-item-1">
                <em class="fa fa-users">&nbsp;</em> Patients
                <span data-toggle="collapse" href="#sub-item-1"
                      class="icon pull-right">
                    <em class="fa fa-plus"></em></span>
            </a>
            <ul class="children collapse" id="sub-item-1">
                <li><a class="" href="{{ route('consultants.patients.index') }}">
                        <span class="fa fa-arrow-right">&nbsp;</span> List
                    </a></li>
                <li><a class="" href="{{ route('consultants.patients.create') }}">
                        <span class="fa fa-arrow-right">&nbsp;</span> Register New
                    </a></li>
            </ul>
        </li>
        <li class="parent ">
            <a data-toggle="collapse" href="#sub-item-2">
                <em class="fa fa-user">&nbsp;</em> Profile
                <span data-toggle="collapse" href="#sub-item-2"
                      class="icon pull-right">
                    <em class="fa fa-plus"></em></span>
            </a>
            <ul class="children collapse" id="sub-item-2">
                <li><a href="{{ route('auth.profile.index') }}">
                        <span class="fa fa-arrow-right">&nbsp;</span> Show
                    </a></li>
                <li><a href="{{ route('auth.profile.edit') }}">
                        <span class="fa fa-arrow-right">&nbsp;</span> Edit
                    </a></li>
                <li><a href="{{ route('auth.profile.password') }}">
                        <span class="fa fa-arrow-right">&nbsp;</span> Change Password
                    </a></li>
            </ul>
        </li>
        <li>
            <a title="Dashboard" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="dropdown-item text-danger"><em class="fa fa-power-off"></em> Logout</a>
            <form id="logout-form" hidden method="POST" action="{{ route('logout') }}">
                @csrf
            </form>
        </li>
    </ul>
</div><!--/.sidebar-->
