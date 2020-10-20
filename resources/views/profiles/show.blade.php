@extends('layouts.app')

@section('content')
   <header>
      
   </header>
   @include('_timeline',[
      'tweets' => $user->tweets
   ])
@endsection
