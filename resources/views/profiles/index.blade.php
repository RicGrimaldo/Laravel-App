@extends('layouts.app')

@section('content')
<div class="container text-center pt-4">
    <div class="row row-cols-2">
        <div class="col-3 p-5">
            <img src="{{ $user->profile->profileImage() }}" class="rounded-circle w-100">
        </div>
        <div clas="col-9 pt-5">
            <div class="d-flex justify-content-between align-items-baseline">
                <h1 class="text-start">{{ $user->username }}</h1>

                @can('update',$user->profile)
                    <a href="/p/create" >Add new post</a>    
                @endcan

            </div>
           
            @can('update',$user->profile)
                <a href="/profile/{{ $user->id }}/edit">Edit profile</a>
            @endcan
            
            <div class="d-flex">
                <div class="pe-5"><strong>{{ $user->posts->count() }}</strong> posts</div>
                <div class="pe-5"><strong>2.5</strong> followers</div>
                <div class="pe-5"><strong>212</strong> following</div>
            </div>
            <div class="pt-4 fw-bold text-start">{{ $user->profile->title }}</div>
            <div class="text-start">{{ $user->profile->description }}</div>
            <div class="text-start"><a href="#">{{ $user->profile->url }}</a></div>
        </div>
    </div>

    <div class="row pt-5">
        @foreach($user->posts as $post)
            <div class="col-4 pb-4">
                <a href="/p/{{ $post->id }}">
                    <img src="/storage/{{ $post->image }}" alt="" class="w-100">
                </a>
            </div>
        @endforeach
    </div>


</div>
@endsection
