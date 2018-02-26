@extends('layouts.default')

@section('content')

    <form action="/" method="post">
        {{csrf_field()}}
        <div class="form-group row">
            <label for="name" class="col-sm-2 col-form-label">Name</label>
            <div class="col-sm-5">
                <input type="name" class="form-control" id="name" placeholder="Name">
            </div>
        </div>
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
        <div class="form-group row">
            <label for="inputPassword3" class="col-sm-2 col-form-label">Re-enter Password</label>
            <div class="col-sm-5">
                <input type="password" class="form-control" id="inputPassword3" placeholder="Re-enter Password">
            </div>
        </div>

        <button type="submit" class="btn btn-primary mb-2">Submit</button>

    </form>