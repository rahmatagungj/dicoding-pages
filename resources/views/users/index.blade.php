@extends('layouts.main')

@section('title', $user['name'])

@section('content')

<main class="container">
    <div class="row p-3">

        <div class="col-4">
            @include('partials.user-profile-card',[$user])
        </div>


        <div class="col">
            @include('partials.user-nav')

            <div class="content my-4">
                @include('layouts.user-course',[$DATA_COURSE])
            </div>
        </div>


    </div>
</main>
@endsection