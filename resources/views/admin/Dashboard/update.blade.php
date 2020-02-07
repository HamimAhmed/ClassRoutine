@extends ('admin.master')

@section('title') Dashboard
@endsection
@section('content')

    <div class="app-title">

    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="tile">
                <h3 class="tile-title">Update Your Information</h3>
                <div class="tile-body">
                    <form class="form-horizontal" enctype="multipart/form-data" action="{{ route('processUpdate') }}" method="post">
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
                            <label class="control-label col-md-3">Name</label>
                            <div class="col-md-8">
                                <input class="form-control" name="name" value="{{ auth()->user()->name }}" type="text" placeholder="Update Your Name">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="control-label col-md-3">Password</label>
                            <div class="col-md-8">
                                <input class="form-control col-md-8" name="password" value="" type="password" placeholder="Update Password">
                            </div>
                        </div>


                        <div class="form-group row">
                            <label class="control-label col-md-3">Profile Image</label>
                            <div class="col-md-8">
                                <input class="form-control" type="file" value="{{ auth()->user()->image }}" name="image">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-8 col-md-offset-3">

                            </div>
                        </div>
                        <div class="tile-footer">
                            <div class="row">
                                <div class="col-md-8 col-md-offset-3">
                                    <button class="btn btn-primary" ><i class="fa fa-fw fa-lg fa-check-circle"></i>Save</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
