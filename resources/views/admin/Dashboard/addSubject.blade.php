@extends('admin.master')


@section('title') Dashboard
@endsection
@section('content')

    <div class="app-title">

    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="tile">
                <h3 class="tile-title">Add Subject</h3>
                <div class="tile-body">
                    <form class="form-horizontal"  action="{{ route('addSubject') }}" method="post">
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

                        <div class="form-group row">
                            <label class="control-label col-md-3">Subject Name</label>
                            <div class="col-md-8">
                                <input class="form-control" name="name"  type="text" placeholder="Enter Subject Name">
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



    <div class="row">
        <div class="col-md-12">
            <div class="tile">
                <div class="tile-body">
                    <table class="table table-hover table-bordered" id="sampleTable">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Subject Name</th>
                            <th>Status</th>
                        </tr>
                        </thead>
                        <tbody>

                        @foreach( $subjects as $subject)
                        <tr>
                            <td>{{ $subject->id }}</td>
                            <td>{{ $subject->subject_name }}</td>
                            <td>{{ $subject->status == 1 ? 'active': 'inactive'}}</td>
                        </tr>

                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
