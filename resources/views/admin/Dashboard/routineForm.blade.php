@extends ('admin.master')

@section('title') Dashboard
@endsection
@section('content')


    <div class="app-title">

    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="tile">
                <h3 class="tile-title">Make Class Schedule</h3>
                <div class="tile-body">
                    <form class="form-horizontal" action="" method="post">
                        @csrf

                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        @if (session()->has('message'))
                            <div class="alert alert-{{session('type')}}">
                                {{session('message')}}
                            </div>
                        @endif



                        <div class="form-group">
                            <label for="exampleSelect1">Select Subject</label>
                            <select class="form-control" id="exampleSelect1" name="subject">

                                @foreach($subjects as $subject)
                                <option value="{{ $subject->id }}">{{ $subject->subject_name }}</option>
                                    @endforeach
                            </select>
                        </div>


                        <div class="form-group">
                            <label for="exampleSelect1"> Select Class Time</label>

                            <select class="form-control" id="exampleSelect1" name="time">

                                @foreach($classtimes as $classtime)
                                <option value="{{ $classtime->id }}"> {{ $classtime->time_duration }}</option>
                                    @endforeach
                            </select>
                        </div>


                        <div class="form-group">
                            <label for="exampleSelect1"> Select Class Day</label>
                            <select class="form-control" id="exampleSelect1" name="day">
                                <option value="SunDay">SunDay</option>
                                <option value="MonDay">MonDay</option>
                                <option value="TuesDay">TuesDay</option>
                                <option value="Wednesday">WednesDay</option>

                            </select>
                        </div>

                        <div class="form-group">
                            <label class="control-label">Status</label>
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input class="form-check-input" value="1" type="radio" name="status">Active
                                </label>
                            </div>
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input class="form-check-input" value="0" type="radio" name="status">Inactive
                                </label>
                            </div>
                        </div>





                        <div class="form-group row">
                            <div class="col-md-8 col-md-offset-3">

                            </div>
                        </div>
                        <div class="tile-footer">
                            <div class="row">
                                <div class="col-md-8 col-md-offset-3">
                                    <button class="btn btn-primary" ><i class="fa fa-fw fa-lg fa-check-circle"></i>Create</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
