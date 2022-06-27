@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Add new company</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{route('index') }}">Back</a>
        </div>
    </div>
</div>
@if($errors->any())
    <div class="alert alert-danger">
        <strong>Oops!</strong>There are problems with your input<br><br>
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="/create" method="POST">
    @csrf
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">

                <strong>Company Name </strong>
                <input type="text" name="compname" class="form-control" placeholder="compname">

            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">

                <strong>Email </strong>
                <input type="email" name="email" class="form-control" placeholder="email">

            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">

                <strong>Logo</strong>
                <input type="file" name="logo" class="form-control" placeholder="logo">

            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">

                <strong>Website </strong>
                <input type="text" name="websitw" class="form-control" placeholder="website">

            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-primary"> Submit</button>
            

            
        </div>
    </div>
</form>

@endsection