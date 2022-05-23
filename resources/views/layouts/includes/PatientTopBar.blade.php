<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#sidebar-collapse"><span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span></button>
            <a class="navbar-brand" href="#"><span>Patient</span> Dashboard</a>
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
            </ul>
        </div>
    </div><!-- /.container-fluid -->
</nav>

<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
    <div class="profile-sidebar">
        <div class="profile-userpic">
            <img src="{{ asset('storage/'.Auth::user()->profile) }}" class="img-responsive" alt="">
        </div>
        <div class="profile-usertitle">
            <div class="profile-usertitle-name">{{ Auth::user()->name }}</div>
            <div class="profile-usertitle-status"><span class="indicator label-success"></span>Online</div>
        </div>
        <div class="clear"></div>
    </div>
    <div class="divider"></div>

    <ul class="nav menu">
        <li class="active"><a href="{{ route('patients.dashboard') }}"><em class="fa fa-dashboard">&nbsp;</em>
                Dashboard</a></li>

        <li class="parent ">
            <a data-toggle="collapse" href="#sub-item-1">
                <em class="fa fa-folder-open">&nbsp;</em> My Consultation
                <span data-toggle="collapse" href="#sub-item-1"
                      class="icon pull-right">
                    <em class="fa fa-plus"></em></span>
            </a>
            <ul class="children collapse" id="sub-item-1">
                <li>
                    <a class="" href="{{ route('patients.consultation.index') }}">
                        <span class="fa fa-arrow-right">&nbsp;</span> All
                    </a>
                </li>
                <li>
                    <a class="" href="{{ route('patients.consultation.done') }}">
                        <span class="fa fa-arrow-right">&nbsp;</span> Done
                    </a>
                </li>
                <li>
                    <a class="" href="{{ route('patients.consultation.waiting') }}">
                        <span class="fa fa-arrow-right">&nbsp;</span> Waiting
                    </a>
                </li>
            </ul>
        </li>
        <li class=" ">
            <a href="{{ route('patients.medical-book.index') }}">
                <em class="fa fa-book">&nbsp;</em> My Medical Book
            </a>
        </li>
        <li class="parent ">
            <a data-toggle="collapse" href="#sub-item-11">
                <em class="fa fa-users">&nbsp;</em> My Appointment
                <span data-toggle="collapse" href="#sub-item-11"
                      class="icon pull-right">
                    <em class="fa fa-plus"></em></span>
            </a>
            <ul class="children collapse" id="sub-item-11">
                <li>
                    <a class="" href="{{ route('patients.appointment.index') }}">
                        <span class="fa fa-arrow-right">&nbsp;</span> All
                    </a>
                </li>
                <li>
                    <a class="" href="{{ route('patients.appointment.create') }}">
                        <span class="fa fa-arrow-right">&nbsp;</span> New
                    </a>
                </li>
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
