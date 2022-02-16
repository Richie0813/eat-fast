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
            <h4>Address</h4>
            <form action="{{ route('address-upload') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="">Street</label>
                    <input type="text" name="street" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">City</label>
                    <input type="text" name="city"  class="form-control">
                </div>
                <div class="form-group">
                    <label for="">State</label>
                    <input type="text" name="state"  class="form-control">

                <button class="btn btn-info">save</button>

            </form>


        </div>
    </div>
</div>
@endsection
