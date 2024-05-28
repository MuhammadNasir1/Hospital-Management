@extends('layouts.header')

<div class=" justify-center items-center flex">
    <div class="flex justify-center items-center">
        <div class="lg:w-[50%] w-full lg:ml-[190px] h-[660px] ">
            <h1
                class="lg:text-left text-center font-black text-3xl leading-6 mt-[120px] text-transparent bg-clip-text bg-gradient-to-r from-[#21BEFD] to-[#2176FF] lg:ml-[10px]">
                Welcome Back</h1>
            <h6 class="py-3 text-gray-400 font-serif ml-[10px] lg:text-left text-center lg:ml-[10px] ">Create a new account <br> OR Sign in with these credential: <br> Email <span class="font-bold text-gray-600">emaill@example.com</span> <br> Password <span class="font-bold text-gray-600">Secret</span></h6>
            {{-- ///////////// form//////// --}}
            <div class="form justify-center items-center">
                <form action="#" class="w-[420px] ">
                   <div class="myform justify-center flex  flex-col py-3 items-center">
                    <div class="lg:w-[100%] md:w-[100%] ">
                        <label for="email" class="block leading-6 font-semibold text-lg text-gray-400">Email
                            address</label>
                        <div class="mt-2">
                            <input id="email" required name="email" type="email" placeholder="admin@gmail.com"
                                autocomplete="email"
                                class="block w-full rounded-md  py-1.5 border-2 border-gray-1000 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                        </div>
                    </div>
                    <div class="lg:w-[100%] md:w-[100%]">
                        <label for="password" class="block leading-6 font-semibold text-lg text-gray-400">Password
                            </label>
                        <div class="mt-2">
                            <input id="password" required name="password" type="password" placeholder="*********"
                                autocomplete="password"
                                class="block w-full rounded-md  py-1.5 border-2 border-gray-1000 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                        </div>
                    </div>
                   </div>

                    <div class=" pt-4 ">
                        <label class="inline-flex  mb-5 cursor-pointer">
                            <input type="checkbox" required value="" class="sr-only peer">
                            <div class="relative w-12 h-6  bg-[#444B76] peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 dark:peer-focus:ring-blue-800 rounded-full peer dark:bg-gray-700 peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full  lg:block hidden peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-gradient-to-r from-[#21BEFD] to-[#2176FF]"></div>
                            <span class="ms-3 text-lg font-semibold text-gray-900  lg:block hidden dark:text-gray-300">Remember me</span>
                          </label>
                      </div>
                     <div class="button lg:w-[100%] md:w-[100%]">
                        <a href="#"><button type="submit"
                            class=" flex justify-center  text-white w-[100%] h-[50px] mt-[20px] bg-gradient-to-r from-[#21BEFD] to-[#2176FF] p-3  rounded-lg  tracking-wide
                    font-semibold  focus:outline-none focus:shadow-outline hover:bg-indigo-600 shadow-lg cursor-pointer transition ease-in duration-300">
                           Register
                        </button></a>
                     </div>
                </form>
                <p class="lg:text-left text-center font-semibold text-gray-400 lg:ml-[90px]">Forget your password? reset <a href="#" class="text-[#2176FF] font-semibold">here</a></p>
                <p class="lg:text-left text-center font-semibold text-gray-400 lg:ml-[90px]">Don't I have account <a href="{{route('register')}}" class="text-[#2176FF] font-semibold">Register here</a></p>
            </div>
        </div>
        <div class="w-full  lg:block hidden">
            <div class="image mt-[90px] w-[80%] md:w-[95%] lg:w-[80%] ml-[10px] ">
                <img class=" w-full " src="image/img.jpg" alt="image">
            </div>
        </div>
    </div>
</div>
@extends('layouts.footer')
