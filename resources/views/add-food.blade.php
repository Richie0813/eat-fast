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
            <h4>Food</h4>
            <form action="{{ route('food.upload') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="">Food</label>
                    <input type="text" name="name" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Image</label>
                    <input type="file" name="image"  class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Description</label>
                    <input type="text" name="description"  class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Price</label>
                    <input type="text" name="price"  class="form-control">
                </div>

                <button class="btn btn-info">save</button>

            </form>


        </div>
    </div>
</div>
@endsection
