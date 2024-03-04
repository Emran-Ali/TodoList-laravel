<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet"/>
    @vite('resources/css/app.css')
</head>
<body class="antialiased">
<div
    class=" sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">
    <div class="dark:text-white bg-blue-300 ">
        <div class="bg-blue-300 p-3">


        <p class="text-xl">Todo List App</p>
        <hr>
        @foreach($listItems as $listItem)
            <div class="flex sm:justify-between mt-6">
                <p>{{$listItem->name}}</p>
                <form action="{{route('markDone',$listItem->id)}}" method="post" accept-charset="UTF-8">
                    {{csrf_field()}}
                    <button
                        class=" px-5 text-center bg-violet-500 text-white font-semibold rounded-full shadow-md hover:bg-violet-700 focus:outline-none focus:ring focus:ring-violet-400 focus:ring-opacity-75">
                        Done
                    </button>
                </form>
            </div>
        @endforeach


        <form action="{{route('saveItem')}}" method="post" accept-charset="UTF-8">
            {{csrf_field()}}

            <lebel for="listItem">Input your task</lebel>
            <br>
            <input type="text" name="listItem" class="border-amber-400 text-red-500 h-10 w-6/12 ">
            <button
                class="py-1 px-5 bg-violet-500 text-white font-semibold rounded-full shadow-md hover:bg-violet-700 focus:outline-none focus:ring focus:ring-violet-400 focus:ring-opacity-75"
                type="submit">add
            </button>

        </form>
        </div>
    </div>
</div>
</body>
</html>
