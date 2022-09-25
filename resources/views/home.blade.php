@extends('layouts.app')

@section('content')
<div class="container-sm text-center pt-4">
    <div class="row row-cols-2">
        <div clas="col-3 p-5">
            <img src="https://cdn-icons-png.flaticon.com/512/25/25231.png" class="rounded-circle" style="height: 100px;">
        </div>
        <div clas="col-9 pt-5">
            <div><h1 class="text-start">{{ $user->username }}</h1></div>
            <div class="d-flex">
                <div class="pe-5"><strong>153</strong> posts</div>
                <div class="pe-5"><strong>2.5</strong> followers</div>
                <div class="pe-5"><strong>212</strong> following</div>
            </div>
            <div class="pt-4 fw-bold text-start">{{ $user->profile->title }}</div>
            <div class="text-start">{{ $user->profile->description }}</div>
            <div class="text-start"><a href="#">{{ $user->profile->url }}</a></div>
        </div>
    </div>

    <div class="row pt-5">
        <div class="col-4">
            <img src="https://www.vipinajayakumar.com/post/getting_started_with_javascript/git.png" alt="" class="w-100">
        </div>
        <div class="col-4">
            <img src="https://plugins.jetbrains.com/files/17756/205959/icon/pluginIcon.png" alt="" class="w-100">
        </div>
        <div class="col-4">
            <img src="https://is5-ssl.mzstatic.com/image/thumb/Purple124/v4/19/2c/c1/192cc1e5-3696-dba8-19e7-4c43bf562c14/AppIcon-85-220-4-2x.png/1200x630bb.png" alt="" class="w-100">
        </div>
    </div>


</div>
@endsection
