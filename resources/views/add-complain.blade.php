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
            <h4>Complain</h4>
            <form action="{{ route('complain.upload') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="">Tittle</label>
                    <input type="text" name="tittle" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Message</label>
                    <input type="text" name="message"  class="form-control">
                </div>

                <button class="btn btn-success">save</button>

            </form>


        </div>
    </div>
</div>
@endsection
