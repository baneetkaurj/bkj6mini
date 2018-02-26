@extends('layouts.default')

@section('content')


    <div class="container" mt-5">

    <table class="table table-striped">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Message</th>
            <th scope="col">Action</th>
        </tr>
        </thead>
        <tbody>
        <a>
            <th scope="row">1</th>
            <td><a href="/messages">Forgot password</td></a>
            <td><button type="submit" class="btn btn-primary mb-2">Delete</button>
        </tr>
        <tr>
            <th scope="row">2</th>
            <td><a href="/messages">Unable to connect</td></a>
            <td><button type="submit" class="btn btn-primary mb-2">Delete</button>
        </tr>
        <tr>
            <th scope="row">3</th></a>
            <td><a href="/messages">Unable to load contacts</td>
            <td><button type="submit" class="btn btn-primary mb-2">Delete</button>
        </tr>
        </tbody>
    </table>