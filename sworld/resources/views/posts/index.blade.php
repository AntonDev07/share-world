@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="post-wrap">
            @foreach($posts as $post)
                <div class="post">
                    <div class="row">
                        <div class="col-sm-12 text-center">
                            <div class="pb-3">
                                <a href="{{ route('profiles.show', ['user' => $post->user->id]) }}"><img src="/storage/{{$post->image}}" alt="" class="w-100"></a>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12 ">
                            <a class="text-dark" href="{{route('profiles.show', ['user' => $post->user->id])}}"><span class="heading-4 mb-0">{{$post->user->username}}</span></a><span class="pb-3"> {{$post->title}}</span>
                        </div>

                    </div>
                </div>
            @endforeach

        </div>


    </div>
@endsection
