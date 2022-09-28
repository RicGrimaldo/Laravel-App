@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-8">
            <img src="/storage/{{ $post->image }}" alt="" class="w-100">
        </div>
        <div class="col-4">
            <div class="d-flex align-items-center pb-3" >
                <div class="pe-3">
                    <image src="/storage/{{ $post->user->profile->image }}" 
                           class="rounded-circle w-100" 
                           style="max-width: 40px;">
                </div>
                <div>
                    <div class="fw-bolder">
                        <a href="/profile/{{ $post->user_id}}">
                            <span class="text-dark">{{ $post->user->username }}</span>
                        </a>
                        <a href="" class="ps-3">Follow</a>
                    </div>
                </div>
            </div>

            <p>
                <span class="fw-bolder">
                    <a href="/profile/{{ $post->user_id}}">
                        <span class="text-dark">{{ $post->user->username }}</span>
                    </a>
                </span> {{ $post->caption}} 
            </p>
        </div>
    </div>
</div>
@endsection
