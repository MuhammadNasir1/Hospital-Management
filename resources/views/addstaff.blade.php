@extends('layouts.header')
@extends('layouts.nav')
@section('content')
<h1 class="font-bold text-xl  px-10">Add Staff</h1>
<h1 class="font-bold text-xl  pt-[40px] pb-3 px-10">Personal Information</h1>
<form action="#">
    <div class="main ">
        <div class="lable1 px-10 ">
            <label for="fname" class="font-semibold">First Name</label>
            <input type="text" name="fname"required class="w-[100%] h-[40px] mt-1 rounded-md  border-2 broder-[#5D7081] " placeholder="Enter first name">
        </div>
        <div class="lable1 px-10 ">
            <label for="lname" class="font-semibold">Last Name</label>
            <input type="text" name="lname" required class="w-[100%] h-[40px] mt-1 rounded-md  border-2 broder-[#5D7081]" placeholder="Enter  last name">
        </div>
        <div class="lable1 px-10  ">
            <label for="lname" class="font-semibold">Date of brith</label>
            <input type="date" name="brith" required class="w-[100%] h-[40px] mt-1 rounded-md  border-2 broder-[#5D7081]" placeholder="Date of brith">
        </div>
    </div>
    <div class="main  mt-3">
        <div class="lable1 px-10 ">
            <label for="age" class="font-semibold">Age</label>
            <input type="text" name="age" required class="w-[100%] h-[40px] mt-1 rounded-md  border-2 broder-[#5D7081]" placeholder=" Age Here">
        </div>
        <div class="lable1 px-10 lg:ml-4">
            <label for="lname" class="font-semibold">Gender</label>
            <input type="text" name="lname" required class="w-[100%] h-[40px] mt-1 rounded-md  border-2 broder-[#5D7081]" placeholder="Choose Gender">
        </div>
        <div class="lable1 px-10 lg:ml-5">
            <label for="role"  class="w-[100%] h-[40px]   font-semibold text-gray-900 dark:text-white">Select a Role</label>
  <select name="role" class="w-[100%] h-[40px]  rounded-md  border-2 broder-[#5D7081]  text-gray-500">
    <option selected>Role select her</option>
    <option value="US">Role no 1</option>
    <option value="CA">Roll no 2</option>
    <option value="FR">Roll no 3</option>
    <option value="DE">Roll no 4</option>
  </select>
        </div>
    </div>
    <h1 class="font-bold text-xl pt-[20px]  px-10">Contact Information</h1>
    <div class="main  mt-1">
        <div class="lable1 px-10">
            <label for="phoneno" class="font-semibold">Phone Number</label>
            <input type="tel" name="phoneno"required class="w-[100%] h-[40px] mt-1 rounded-md  border-2 broder-[#5D7081] " placeholder="Enter Phone No">
        </div>
        <div class="lable1 px-10 lg:mr-[70px]">
            <label for="email" class="font-semibold">Email</label>
            <input type="email" name="email" required class="w-[100%] h-[40px] mt-1 rounded-md  border-2 broder-[#5D7081]" placeholder="Enter  last name">
        </div>
        <div class="lable1 px-10  lg:mr-[70px]">
            <label for="city" class="font-semibold">City</label>
            <input type="text" name="brith" required class="w-[100%] h-[40px] mt-1 rounded-md  border-2 broder-[#5D7081]" placeholder="City here">
        </div>
    </div>

    <div class="lable1  pt-2 px-10">
        <label  for="address" class="font-semibold">Address</label> <br>
        <input type="text" name="address" required class="w-[100%] h-[40px] mt-1 rounded-md  border-2 broder-[#5D7081]" placeholder="Enter Address here">
    </div>
    <h1 class="font-bold text-xl pt-[20px]  px-10">Education & Training</h1>
    <div class="main  mt-1">
        <div class="lable1 px-10">
            <label for="mschool" class="font-semibold">Medical School</label>
            <input type="text" name="mschool"required class="w-[100%] h-[40px] mt-1 rounded-md  border-2 broder-[#5D7081] " placeholder="Enter Graduation Year">
        </div>
        <div class="lable1 px-10  lg:mr-[70px]">
            <label for="gyear" class="font-semibold">Graduation Year</label>
            <input type="text" name="gyear" required class="w-[100%] h-[40px] mt-1 rounded-md  border-2 broder-[#5D7081]" placeholder="Enter Graduation Year">
        </div>
        <div class="lable1 px-10  lg:mr-[70px]">
            <label for="residency" class="font-semibold">Residency</label>
            <input type="text" name="residency" required class="w-[100%] h-[40px] mt-1 rounded-md  border-2 broder-[#5D7081]" placeholder="Residency here">
        </div>
    </div>
    <h1 class="font-bold text-xl pt-[20px]  px-10">Additional Notes / Comments</h1>
    <textarea
    class="peer h-[114px] w-[100%] lg:mx-10 mt-2" name="message"
    placeholder="Enter Message here"></textarea>
</div>
<button class="bg-[#1E7C38]  border-10 border-[#1E7C38] hover:border-[#5D7081] float-end text-white font-bold py-2 px-10 mb-5 mr-10 rounded">
    Save
  </button>
</form>
@endsection
@extends('layouts.footer')
