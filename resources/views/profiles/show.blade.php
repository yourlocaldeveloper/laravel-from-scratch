@extends('layouts.app')

@section('content')
    <header class="mb-6 relative">
        <img class="mb-2" src="https://www.canva.com/learn/wp-content/uploads/2015/03/beautiful-twitter-banners.jpg" alt="profile banner">

        <div class="flex justify-between item-center mb-4">
            <div>
                <h2 class="font-bold text-2xl mb-0">{{ $user->name }}</h2>
                <p class="test-sm">Joined {{ $user->created_at->diffForHumans() }}</p>
            </div>

            <div>
                <a href="" class="rounded-full border border-gray-500 py-2 px-4 text-black text-xs mr-2">Edit Profile</a>
                <a href="" class="bg-blue-500 rounded-full shadow py-2 px-4 text-white text-xs">Follow Me</a>
            </div>
        </div>


        <p class="text-sm">
            This is a random profile description which entails all the beautiful details about myself. Oh and dont forget to look at some links.
        </p>

        <img
            src="{{ $user->avatar }}"
            alt="avatar"
            class="rounded-full mr-2 absolute"
            style="top: 35%; width: 150px; left: calc(50% - 75px);"
        >
    </header>

    @include ('_timeline', [
        'tweets' => $user->tweets
    ])
@endsection
