@extends('layouts.admin')

@section('title', 'Admin Dashboard')

@section('main-content')
<div class="container">
    <div class="row">
        <div class="col-12">
            <h2>
                Welcome in your dashboard, {{Auth::user()->name}}
            </h2>
        </div>
    </div>
</div>
@endsection