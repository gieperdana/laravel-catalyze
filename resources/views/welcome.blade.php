@extends('layouts.welcome')

@section('content')
    <div class="title m-b-md">
        {{ config('app.name') }}
    </div>
    <div class="description m-b-md">
        Sample users:<br/><br/>
        Admin user: admin@catalyze.com / password: admin
    </div>
@endsection
