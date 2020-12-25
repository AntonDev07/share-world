@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-3 text-center">
                <img src="{{$user->profile->profileImage()}}" alt="" class="logo-profile w-100">
            </div>
            <div class="col-sm-9">
                <div class="d-flex align-items-center mb-1 justify-content-between">
                    <div class="d-flex mr-auto">
                        <h3 class="heading-3  mb-0 mr-4">{{ $user->username }}</h3>
                        <follow-button user-id="{{$user->id}}" follows="{{ $follows }}"></follow-button>
                    </div>

                    @can('update', $user->profile)
                        <a href="{{route('posts.create')}}" class="btn btn-primary">Add new post</a>
                    @endcan


                </div>
                <div>
                    @can('update', $user->profile)
                        <a  href="{{ route('profiles.edit', ['user' => $user->id]) }}">Edit profile</a>
                    @endcan
                </div>

                <div class="d-flex">
                    <p class="pr-5"><b>{{ $postCount }}</b> posts</p>
                    <p class="pr-5"><b>{{ $followersCount }}</b> followers</p>
                    <p class="pr-5"><b>{{ $followingCount }}</b> following</p>

                </div>
                <h4 class="heading-4">{{$user->profile->title}}</h4>
                <p class="profile-text">{{$user->profile->description}}</p>
                <a class="profile-link" href="{{$user->profile->url}}">{{$user->profile->url}}</a>
            </div>
        </div>

        <h4 class="heading-4 text-center mt-5">Posts</h4>
        <hr>
        <div class="row pt-3">
            @if( $user->posts->count() > 0)

                @foreach($user->posts as $post)
                    <div class="col-sm-4 padding-bottom-3">
                        <a href="{{route('posts.show', ['post' => $post->id])}}">
                            <img src="/storage/{{$post->image}}" alt="image 1" class="image-grid w-100">
                        </a>
                    </div>
                @endforeach

            @else
                <div class="col-sm-12">
                    <h4 class="heading-4 text-center">There is no post yet</h4>
                </div>

            @endif



        </div>
    </div>
@endsection
