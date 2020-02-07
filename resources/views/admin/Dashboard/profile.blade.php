@extends ('admin.master')

@section('title') Dashboard
@endsection
@section('content')
    <div class="row user">
        <div class="col-md-12">
            <div class="profile">
                <div class="info"><img class="user-img" src="{{ asset('uploads/images/'.auth()->user()->image) }}">
                    <h4> {{ auth()->user()->name }}</h4>
                    <p>{{ auth()->user()->email }}</p>
                </div>
                <div class="cover-image"></div>
            </div>
        </div>
        <div class="col-md-3">
            {{--<div class="tile p-0">--}}
                {{--<ul class="nav flex-column nav-tabs user-tabs">--}}
                    {{--<li class="nav-item"><a class="nav-link active" href="#user-timeline" data-toggle="tab">Timeline</a></li>--}}
                    {{--<li class="nav-item"><a class="nav-link" href="#user-settings" data-toggle="tab">Settings</a></li>--}}
                {{--</ul>--}}
            {{--</div>--}}
        </div>
        <div class="col-md-9">
            <div class="tab-content">
                <div class="tab-pane active" id="user-timeline">
                    <div class="timeline-post">
                        <div class="post-media">
                            <div class="content">
                                <h5><a href=""> Mobile No</a></h5>
                            </div>
                        </div>
                        <div class="post-content">
                            <p> {{ auth()->user()->mobile_no }}</p>
                        </div>

                        <div class="content">
                            <h5><a href=""> Detailed Information</a></h5>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
