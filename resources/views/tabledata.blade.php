@extends('layouts.header')
@extends('layouts.nav')
@section('content')
    <div class="relative  overflow-x-auto shadow-md sm:rounded-lg">
        <table class="w-full h-[300px]  text-lg text-center rtl:text-right border-collapse  bg-[#212529] dark:text-blue-100">
            <thead class="text-xs text-white uppercase   border-gray-800 dark:text-green">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        #
                    </th>
                    <th scope="col" class="px-6 py-3">
                        EMAIL
                    </th>
                    <th scope="col" class="px-6 py-3">
                        NAME
                    </th>
                    <th scope="col" class="px-6 py-3">
                        TEL
                    </th>
                    <th scope="col" class="px-6 py-3 ">
                        COMPANY
                    </th>
                    <th scope="col" class="px-6 py-3 ">
                        ADDRESS
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($fetch as $fetch)
                    <tr class=" border-b border-white-400 text-white">
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $fetch->email }}</td>
                        <td>{{ $fetch->fname }}</td>
                        <td>{{ $fetch->tel }}</td>
                        <td>{{ $fetch->company }}</td>
                        <td>{{ $fetch->address  }}</td>
                    </tr>
                @endforeach



            </tbody>
        </table>
    </div>
@endsection
@extends('layouts.footer')
