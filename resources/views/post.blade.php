@extends('layouts.app')

@section('content')
<div class="container">
     <div class="row">
        <div class="col-md-10 col-md-offset-2">
            <div class="panel panel-default">
                 <div class="panel-heading">Post</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    Post
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
