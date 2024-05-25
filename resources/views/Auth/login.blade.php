@extends('layouts.header')

    <div class="flex  sm:flex-none justify-center items-center mt-8 ml-10  h-[660px] w-[1440px]">
        <div class="w-[450px] ml-[180px] h-[660px] ">
            <h1
                class=" font-black text-3xlleading-6 mt-[80px] text-transparent bg-clip-text bg-gradient-to-r from-[#21BEFD] to-[#2176FF] ml-[5px]">
                Welcome Back</h1>
            <h6 class="py-3 text-[#000000c0] font-medium ml-[10px]">Create a new account <br>
                OR sign in with these credentials: <br> <span class="font-bold"><span class="text-gray-400">Email</span> email@example.com <br> <span class="text-gray-400">Password</span> secret</span>
            </h6>
            {{-- ///////////// form//////// --}}
            <div class="form ml-[10px]">
                <form action="#" class="w-[420px] ml[10px] py-4">
                    <div class="w-[345px]">
                        <label for="email" class="block leading-6 font-semibold text-lg text-gray-400">Email
                            address</label>
                        <div class="mt-2">
                            <input id="email" required name="email" type="email" placeholder="admin@gmail.com"
                                autocomplete="email"
                                class="block w-full rounded-md  py-1.5 border-2 border-gray-1000 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                        </div>
                    </div>
                    <div class="w-[345px]">
                        <label for="fname" class="block mt-4 font-semibold text-lg  leading-6 text-gray-400">Full
                            Name</label>
                        <div class="mt-2">
                            <input id="fname" required name="fname" placeholder="Enter your full name here" type="text"
                                autocomplete="fname"
                                class="block w-full rounded-md  py-1.5 border-2 border-gray-1000 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                        </div>
                    </div>
                    {{-- <div class="md:flex  mt-5 mb-6">

                        <label class="md:w-2/3 block text-gray-500 font-bold">
                          <input class="mr-2 leading-tight rounded-lg" type="checkbox">
                          <span class="text-sm">
                            Remember me
                          </span>
                        </label>
                      </div> --}}
                     <div class="toggle pt-4">
                        <label class="inline-flex items-center mb-5 cursor-pointer">
                            <input type="checkbox" required value="" class="sr-only peer">
                            <div class="relative w-12 h-6  bg-[#444B76] peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 dark:peer-focus:ring-blue-800 rounded-full peer dark:bg-gray-700 peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-gradient-to-r from-[#21BEFD] to-[#2176FF]"></div>
                            <span class="ms-3 text-lg font-semibold text-gray-900 dark:text-gray-300">Remember me</span>
                          </label>
                     </div>
                    <a href="#"><button type="submit"
                            class=" flex justify-center text-white w-[345px] h-[50px] mt-[30px] bg-gradient-to-r from-[#21BEFD] to-[#2176FF] ml-[3px] p-3  rounded-lg  tracking-wide
                    font-semibold  focus:outline-none focus:shadow-outline hover:bg-indigo-600 shadow-lg cursor-pointer transition ease-in duration-300">
                           Sign in
                        </button></a>
                </form>
                <p class="ml-[60px] font-semibold text-gray-400">Forget your password?Reset <a href="#" class="text-[#2176FF] font-semibold">here</a></p>
                <p class="ml-[60px] font-semibold text-gray-400">Dont have account?<a href="#" class="text-[#2176FF] font-semibold">Register here</a></p>
            </div>
        </div>
        <div class="w-[600px]  h-[660px]   justify-center items-center">
            <div class="image mt-[60px] ml-[10px]  w-[550px] h-[550px]">
                <img class=" w-[550px] h-[550px]" src="image/img.jpg" alt="image">
            </div>
        </div>
    </div>
</div>
@extends('layouts.footer')
