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
            <h4> All Food</h4>
            <table class='table'>
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Image</th>
                        <th>Price</th>
                        <th>Date</th>
                        <th>description</th>

                    </tr>
                </thead>

                <tbody>
                    @foreach($foods as $food)
                    <tr>
                        <td>{{ $food->id}}</td>
                        <td>{{ $food->name}}</td>
                        <td>
                            <img src="/storage/foods/{{ $food->image}}" width="50px" alt="">
                        </td>

                        <td>{{ $food->price}}</td>
                        <td>{{ $food->created_at}}</td>
                        <td>{{ $food->description}}</td>

                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
