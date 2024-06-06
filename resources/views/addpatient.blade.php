@extends('layouts.header')
@extends('layouts.nav')
@section('content')
<h1 class="font-bold text-xl  px-10">Patient Registration</h1>
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
            <label for="brith" class="font-semibold">Date of brith</label>
            <input type="date" name="brith" required class="w-[100%] h-[40px] mt-1 rounded-md  border-2 broder-[#5D7081]" placeholder="Date of brith">
        </div>
    </div>
    <div class="main  mt-3">
        <div class="lable1 px-10 ">
            <label for="age" class="font-semibold">Age</label>
            <input type="text" name="age" required class="xl:w-[100%] w-[100%] h-[40px] mt-1 rounded-md  border-2 broder-[#5D7081]" placeholder=" Age Here">
        </div>
        <div class="lable1 px-10 ">
            <label for="gender" class="font-semibold">Gender</label>
            <input type="text" name="gender" required class="w-[100%] h-[40px] mt-1 rounded-md  border-2 broder-[#5D7081]" placeholder="Choose Gender">
        </div>
        <div class="lable1 px-10 ">
            <label for="cnic" class="font-semibold">CNIC NO</label>
            <input type="text" name="cnic" required class="xl:w-[100%] w-[100%] h-[40px] mt-1 rounded-md  border-2 broder-[#5D7081]" placeholder="CNIC Here">
        </div>
        <div class="lable1 px-10 ">
            <label for="role"  class="w-[100%] h-[40px]   font-semibold text-gray-900 dark:text-white">Material Status</label>
  <select name="role" class="w-[100%] h-[40px]  rounded-md  border-2 broder-[#5D7081]  text-gray-500">
    <option selected>Material</option>
    <option value="US">Material 1</option>
    <option value="CA">Material 2</option>
    <option value="FR">Material 3</option>
    <option value="DE">Material 4</option>
  </select>
        </div>
    </div>
    <div class="main mt-5">

  <div class="lable1 px-10 lg:w-[50%]">
    <label for="role"  class="w-[100%] h-[40px]   font-semibold text-gray-900 dark:text-white">Relation</label>
    <select name="relation" class="w-[100%] h-[40px]  rounded-md  border-2 broder-[#5D7081]  text-gray-500">
        <option selected>Relation</option>
        <option value="US">Relation 1</option>
        <option value="CA">Relation 2</option>
        <option value="FR">Relation 3</option>
        <option value="DE">Relation 4</option>
      </select>

        </div>
        <div class="lable1 px-9 ">
            <label for="hfname" class="font-semibold">Husband/Father Name</label>
            <input type="text" name="hfn" required class="w-[100%] h-[40px] mt-1 rounded-md  border-2 broder-[#5D7081]" placeholder="Enter H/F name">
        </div>
        <div class="lable1 px-10  lg:w-[50%]">
            <label for="brith" class="font-semibold">Billing Group</label>
            <select name="blood" class="w-[100%] h-[40px]  rounded-md  border-2 broder-[#5D7081]  text-gray-500" >
                <option selected>Billing Group</option>
        <option value="US">Relation 1</option>
        <option value="CA">Relation 2</option>
        <option value="FR">Relation 3</option>
        <option value="DE">Relation 4</option>
            </select>
        </div>
    </div>
    <h1 class="font-bold text-xl pt-[20px]  px-10">Contact Information</h1>
    <div class="main  mt-1">
        <div class="lable1 px-10">
            <label for="phoneno" class="font-semibold">Phone Number</label>
            <input type="tel" name="phoneno"required class="w-[100%] h-[40px] mt-1 rounded-md  border-2 broder-[#5D7081] " placeholder="Enter Phone No">
        </div>
        <div class="lable1  px-10">
            <label for="email" class="font-semibold">Email</label>
            <input type="email" name="email" required class="w-[100%] h-[40px] mt-1 rounded-md  border-2 broder-[#5D7081]" placeholder="Enter Email">
        </div>
        <div class="lable1 px-10">
            <label for="city" class="font-semibold">City</label>
            <input type="text" name="brith" required class="w-[100%] h-[40px] mt-1 rounded-md  border-2 broder-[#5D7081]" placeholder="City here">
        </div>
    </div>

    <div class="lable1  pt-2 px-10">
        <label  for="address" class="font-semibold">Address</label> <br>
        <input type="text" name="address" required class="w-[100%] h-[40px] mt-1 rounded-md  border-2 broder-[#5D7081]" placeholder="Enter Address here">
    </div>
    <button class="bg-[#1E7C38] mt-8  border-10 border-[#1E7C38] hover:border-[#5D7081] float-end text-white font-bold py-2 px-10 mb-5 mr-10 rounded">
        Register
      </button>
<button class="bg-[#6581EF] mt-8  border-10 border-[#6581EF] hover:border-[#5D7081] float-end text-white font-bold py-2 px-10 mb-5 mr-10 rounded">
    Register & Token
  </button>
</form>
@endsection
@extends('layouts.footer')
