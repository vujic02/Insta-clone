@extends('layouts.app')

@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insta-clone | Wall</title>
</head>
<body>
    <div class="w-full flex justify-center items-center flex-col pl-32 pr-32">

    @foreach($posts as $post)
    <a href="posts/{{$post->id}}" class="w-full flex flex-col items-center">
        <div class="w-full flex flex-col items-center">
            <div class="w-2/3 flex flex-col items-center pr-16 pl-16 mb-64">
                <img src={{$post->image}} class="w-full object-cover" />
                <div class="w-full flex justify-between mt-4">
                    <p class="text-xl text-gray-500 font-semibold">{{ $post->user }}</p>
                    <p class="text-base text-gray-600 font-normal">{{$post->description}}</p>
                </div>
            </div>
        </a>
        @endforeach

        </div>

    </div>
</body>
</html>

@endsection