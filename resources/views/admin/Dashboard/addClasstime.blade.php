@extends('admin.master')


@section('title') Dashboard
@endsection
@section('content')

    <div class="app-title">

    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="tile">
                <h3 class="tile-title">Add Class Time</h3>
                <div class="tile-body">
                    <form class="form-horizontal"  action="{{ route('time') }}" method="post">
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
                            <label class="control-label">Time Duration</label>
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input class="form-check-input" value="8am-10am" type="radio" name="time">8am - 10am
                                </label>
                            </div>
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input class="form-check-input" value="2pm-4pm" type="radio" name="time">2pm - 4pm
                                </label>
                            </div>
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input class="form-check-input" value="5pm-7pm" type="radio" name="time">5pm - 7pm
                                </label>
                            </div>

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
                                    <button class="btn btn-primary" ><i class="fa fa-fw fa-lg fa-check-circle"></i>Add</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>

            </div>

        </div>


    </div>
@endsection
