@extends('layouts.header')
@extends('layouts.nav')
@section('content')
    <div class="relative  overflow-x-auto shadow-md sm:rounded-lg">
        <table class="w-full h-full text-lg border broder-2 border-white text-center rtl:text-right  bg-white dark:text-blue-100">
            <thead class="text-lg text-black uppercase  border-gray-800 dark:text-green">
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
                    <tr class="table-auto border  broder-2 border-white text-black hover:text-white hover:bg-gray-600">
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
