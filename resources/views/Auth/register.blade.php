@extends('layouts.header')

<div class=" justify-center items-center flex">
    <div class="flex justify-center items-center">
        <div class="lg:w-[50%] w-full lg:ml-[190px] h-[660px] ">
            <h1
                class="lg:text-left text-center font-black text-3xl leading-6 mt-[60px] text-transparent bg-clip-text bg-gradient-to-r from-[#21BEFD] to-[#2176FF] lg:ml-[10px]">
                Welcome Back</h1>
            <h6 class="py-3 text-[#000000c0] font-serif ml-[10px] lg:text-left text-center lg:ml-[10px]">Request for a service</h6>
            {{-- ///////////// form//////// --}}
            <div class="form">
                <form action="#" class="w-[420px] flex justify-center flex-col items-center  py-3">
                    <div class="lg:w-[100%] md:w-[100%]">
                        <label for="email" class="block leading-6 font-semibold text-lg text-gray-400">Email
                            address</label>
                        <div class="mt-2">
                            <input id="email" required name="email" type="email" placeholder="admin@gmail.com"
                                autocomplete="email"
                                class="block w-full rounded-md  py-1.5 border-2 border-gray-1000 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                        </div>
                    </div>
                    <div class="lg:w-[100%]">
                        <label for="fname" class="block mt-4 font-semibold text-lg  leading-6 text-gray-400">Full
                            Name</label>
                        <div class="mt-2">
                            <input id="fname" required name="fname" placeholder="Enter your full name here" type="text"
                                autocomplete="fname"
                                class="block w-full rounded-md  py-1.5 border-2 border-gray-1000 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                        </div>
                    </div>
                    <div class="lg:w-[100%]">
                        <label for="phone"
                            class="block mt-4 font-semibold text-lg  leading-6 text-gray-400">Phone</label>
                        <div class="mt-2">
                            <input id="phone" required name="tel" placeholder="0300-00000-00" type="text"
                                autocomplete="phone"
                                class="block w-full rounded-md  py-1.5 border-2 border-gray-1000 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                        </div>
                    </div>
                    <div class="lg:w-[100%]">
                        <label for="company" class="block mt-4 font-semibold text-lg  leading-6 text-gray-400">Company
                            Name</label>
                        <div class="mt-2">
                            <input id="company" required name="text" placeholder="Enter your Company name " type="text"
                                autocomplete="company"
                                class="block w-full rounded-md  py-1.5 border-2 border-gray-1000 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                        </div>
                    </div>
                    <div class="lg:w-[100%]">
                        <label for="Address"
                            class="block mt-4 font-semibold text-lg  leading-6 text-gray-400">Address</label>
                        <div class="mt-2">
                            <input id="address" required name="address" placeholder="Enter your Address" type="text"
                                autocomplete="address"
                                class="block w-full rounded-md  py-1.5 border-2 border-gray-1000 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                        </div>
                    </div>
                    <a href="#"><button type="submit"
                            class=" flex justify-center text-white lg:w-[100%] md:w-[100%] h-[50px] mt-[20px] bg-gradient-to-r from-[#21BEFD] to-[#2176FF] ml-[3px] p-3  rounded-lg  tracking-wide
                    font-semibold  focus:outline-none focus:shadow-outline hover:bg-indigo-600 shadow-lg cursor-pointer transition ease-in duration-300">
                           Register
                        </button></a>
                </form>
                <p class="lg:text-left text-center font-semibold text-gray-400 lg:ml-[130px]">Have an account? <a href="#" class="text-[#2176FF] font-semibold">Sign In</a></p>
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
