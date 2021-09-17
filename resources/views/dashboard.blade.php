@extends('main')
@section('title', 'Dashboard')
@section('content')
<main class="dashboard-container">
    <div class="container-fluid">
        <div class="row justify-content-center">
            @guest
            <div class="col-md-8 text-center">
                Welcome user! <br/>Please login to get started.
            </div>
            @else
            <div class="col-md-8 text-center">
                Welcome {{ auth()->user()->name }}!
            </div>
            @endguest
        </div>
    </div>
</main>
@endsection