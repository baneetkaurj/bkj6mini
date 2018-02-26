@extends('layouts.default')

@section('content')


    <form action="/viewmessages" method="post">
        {{csrf_field()}}
    <div class="card" style="width: 18rem;">
        <div class="card-header">
            Contact Message
        </div>
        <ul class="list-group list-group-flush">
            <li class="list-group-item">Subject : This is the help page</li>
            <li class="list-group-item">From Email: iambaneetkaur@gmail.com</li>
            <li class="list-group-item">Message: If you are facing any issues, please click below to identify the issue.</li>
            <button type="submit" class="btn btn-primary mb-2">View Issue</button>
        </ul>
    </div>
    </form>