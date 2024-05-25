@extends('layouts.header')
@extends('layouts.nav')
@section('content')
    <div class="main">


        <div class="sec1 h-36">
            <div class="heading h-8 mb-3 mx-2 w-80">

                <h1 class="text-3xl font-semibold">Staff</h1>
            </div>
            <div class="flex justify-between">
                <input class="bg-gray-50 border pl-4 border-gray-300 text-gray-900 text-sm rounded-lg w-96" type="text" placeholder="Seach for doctors">
                <a href="" class="bg-blue-700 w-56 text-white rounded-lg h-10 font-bold px-3 py-2 ">+ <span class="px-2 font-thin">Add Staff</span></a>
            </div>



        </div>

    </div>
@endsection
@extends('layouts.footer')
