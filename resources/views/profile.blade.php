@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @if ($message = Session::get('success'))

                <div class="alert alert-success alert-block">

                    <button type="button" class="close" data-dismiss="alert">×</button>

                    <strong>{{ $message }}</strong>

                </div>

            @endif

            @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <strong>Whoops!</strong> There were some problems with your input.<br><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        </div>
        <div class="row justify-content-center">
            <div class="profile-header-container">
                <div class="profile-header-img">
                    <img style="width: 150px;height: 150px; border-radius: 50%; float: left; margin-right: 25px" class="rounded-circle" src="/storage/avatars/ {{ $user->avatar }}" />
                    <!-- badge -->
                    <div class="rank-label-container">
                        <h2> {{ $user->name }}'s Profile</h2>
                        <form enctype="multipart/form-data" action="/profile" method="POST"> 
                            <label>Update Profile Image</label>
                            <input type="file" name="avatar">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <input type="submit" name="pull-right btn btn-sm btn-primary">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection