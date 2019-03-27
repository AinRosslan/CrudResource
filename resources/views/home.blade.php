@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>


<div>
  <div class="row justify-content-center">
      <div class="col-md-10">
  <p>
<center>
    <a class="btn btn-lg  btn-primary" href="{{route('posts.create')}}">New Child</a>
    <a class="btn btn-lg btn-primary " href="{{route('posts.create')}}">New Breed</a>
</center>
</p>
</div>
</div>
</div>
</div>
@endsection
