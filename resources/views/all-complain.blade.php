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
            <h4> All Complain</h4>
            <table class='table'>
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Tittle</th>
                        <th>Message</th>
                        <th>date</th>



                    </tr>
                </thead>

                <tbody>
                    @foreach($complains as $complain)
                    <tr>
                        <td>{{ $complain->id}}</td>
                        <td>{{ $complain->tittle}}</td>
                        <td>{{ $complain->message}}</td>
                        <td>{{ $complain->created_at}}</td>



                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
