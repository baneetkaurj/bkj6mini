@extends('layouts.default')

@section('content')

    <div class="container" mt-5">


    <div class="form-group row">
        <label for="email" class="col-sm-2 col-form-label">Email</label>
        <div class="col-sm-5">
            <input type="email" class="form-control" id="email" placeholder="Email">
        </div>
    </div>
    <div class="form-group row">
        <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
        <div class="col-sm-5">
            <input type="password" class="form-control" id="inputPassword3" placeholder="Password">
        </div>
    </div>
    <button type="submit" class="btn btn-primary mb-2">Submit</button><br>
    <a href="/signup">New around here? Sign up</a>
