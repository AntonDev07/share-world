@extends('layouts.app')

@section('content')
<div class="container">

   <div class="row">
       <div class="col-sm-12 text-center">
           <h2>Welcome to ShareWorld</h2>
       </div>
   </div>

    <div class="row">
        <div class="col-sm-12">
           <ul>
               @foreach($users as $user)
                <li><a href="{{route('profiles.show', ['user' => $user->id])}}">{{$user->name}}</a></li>
               @endforeach
           </ul>
        </div>
    </div>


</div>
@endsection
