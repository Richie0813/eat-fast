@extends('layouts.app')

@section('content')
<div class="container" style="margin-top:200px; margin-bottom:">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card">

                <div class="col-md-4">
                   @include('layouts.sidebar')
                </div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif


                </div>
            </div>
        </div>
        <div class="col-md-8">
            <h4>Hello {{ Auth::user()->name}}</h4>
            <form action="{{ route('update-profile') }}" method="POST">
                @csrf
                <div class="form-group">
                <label for="">Name</label>
                <input type="text" name="name" value= "{{ Auth::user()->name}}"class="form-control">
                </div>
                <div class="form-group">
                <label for="">Email</label>
                <input type="text" name="email" value="{{ Auth::user()->email}}"class="form-control">
                </div>
                <button type="submit" class="btn btn-primary">Save</button>


            </form>

        </div>
    </div>
</div>
@endsection
