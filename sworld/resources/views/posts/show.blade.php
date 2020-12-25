@extends('layouts.app')

@section('content')
   <div class="container">
       <div class="row">
            <div class="col-sm-8 text-center">
                <div style="width: 500px; margin: 0 auto;" class="pb-3">
                    <img src="/storage/{{$post->image}}" alt="" class="w-100">
                </div>
            </div>

           <div class="col-sm-4">
               <div class="d-flex align-items-center">
                   <div class="mr-3">
                       <img src="/storage/{{$post->user->profile->image}}" class="rounded-circle w-100" style="max-width: 50px"/>
                   </div>
                   <a class="text-dark" href="{{route('profiles.show', ['user' => $post->user->id])}}"><span class="heading-4 mb-0">{{$post->user->username}}</span></a>
                   <a href="#" class="ml-3 btn btn-outline-primary">Follow</a>
               </div>
               <hr>
               <a class="text-dark" href="{{route('profiles.show', ['user' => $post->user->id])}}"><span class="heading-4 mb-0">{{$post->user->username}}</span></a><span class="pb-3"> {{$post->title}}</span>
           </div>

       </div>
   </div>
@endsection
