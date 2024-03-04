@extends('user')
@section('userList')
    <div class="col-6">
        <div class="border rounded-xl m-2 p-2">
            <form action="{{route('store')}}" method="post" accept-charset="UTF-8">
                {{csrf_field()}}

                <lebel for="name">Name</lebel>
                <br>
                <input type="text" name="name" class="m-3 p-2 border-amber-400 text-red-500 h-10 w-6/12 ">
                <br>
                <lebel for="name">Age</lebel>
                <br>
                <input type="number" name="age" class="m-3 p-2 border-amber-400 text-red-500 h-10 w-6/12 ">
                <button
                    class="py-1 px-5 bg-violet-500 text-white font-semibold rounded-full shadow-md hover:bg-violet-700 focus:outline-none focus:ring focus:ring-violet-400 focus:ring-opacity-75"
                    type="submit">Add User
                </button>
            </form>
        </div>
    </div>
    <div class="col-6 md:columns-12">
        <div class="border rounded-xl m-2 p-2">
            <div class="text-center text-3xl text-orange-600">User To Test Midleware </div>
            <hr>
            <div>
                @foreach($users as $user)

                    <div class="flex flex-nowrap justify-around p-1.5">
                        <div class="text-xl ">Name : {{$user->name}}</div>
                        <div>
                            <form action="">
                                {{csrf_field(check)}}
                                <button
                                    class="py-1 px-5 bg-violet-500 text-white font-semibold rounded-full shadow-md hover:bg-violet-700 focus:outline-none focus:ring focus:ring-violet-400 focus:ring-opacity-75"
                                    type="submit">Check
                                </button>
                            </form>
                        </div>

                    </div>

                @endforeach
            </div>
        </div>
    </div>

@stop
