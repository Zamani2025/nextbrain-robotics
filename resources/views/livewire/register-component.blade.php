
<div class="container w-full px-5 py-6 mx-auto">
  <form  method="POST" enctype="multipart/form-data" wire:submit.prevent="registerUser">
      @csrf
      <div class="row g-3">
          <div class="col-6">
              <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-password">
                Form Number
              </label>
              <div class="form-floating">
                  <input  type="text" wire:model="formNumber" readonly id="name" value="{{$random, old("formNumber")}}" style="background: white; border: none;">
                  
              </div>
          </div>
          <div class="flex flex-wrap -mx-3 mb-2">
              <div class="w-full px-3">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-password">
                  Your Name
                </label>
                <input wire:model="name" value="{{old("name")}}" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-password" type="text" placeholder="Your Name">
                @error("name")
                    <div class="text-red-600">{{$message}}</div>
                @enderror
              </div>
          </div>
          <div class="flex flex-wrap -mx-3 mb-2">
              <div class="w-full px-3">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-password">
                  Date Of Birth
                </label>
                <input wire:model="date_of_birth" value="{{old("date_of_birth")}}" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-password" type="date">
                @error("date_of_birth")
                    <div class="text-red-600">{{$message}}</div>
                @enderror
              </div>
          </div>
          <div class="flex flex-wrap -mx-3 mb-2">
              <div class="w-full px-3">
                  <span class="uppercase tracking-wide text-gray-700 text-xs font-bold">Gender</span>
                <label class="block mt-1 uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-password">
                  Male <input id="grid-password" value="Male" type="radio" class="mr-2 ml-1" wire:model="gender"> Female <input id="grid-password" value="Female" class="mr-2 ml-1" wire:model="gender" type="radio">

                </label>
                @error("gender")
                  <div class="text-red-600">{{$message}}</div>
                @enderror
              </div>
          </div>
          <div class="flex flex-wrap -mx-3 mb-2">
              <div class="w-full px-3">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-password">
                  MemberShip Status
                </label>
                <select wire:model="status" value="{{old("status")}}" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-password">
                  <option value="" selected >Choose membership status</option>
                  <option value="Student">Student</option>
                  <option value="Alumini">Alumini</option>
                </select>
                @error("status")
                    <div class="text-red-600">{{$message}}</div>
                @enderror
              </div>
          </div>
          <div class="flex flex-wrap -mx-3 mb-2">
              <div class="w-full px-3">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-password">
                  Student Number
                </label>
                <input wire:model="student_number" value="{{old("student_number")}}" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-password" type="text" placeholder="Student Number">
                @error("student_number")
                    <div class="text-red-600">{{$message}}</div>
                @enderror
              </div>
          </div>
          <div class="flex flex-wrap -mx-3 mb-2">
              <div class="w-full px-3">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-password">
                  Course
                </label>
                <input wire:model="course" value="{{old("course")}}" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-password" type="text" placeholder="Course">
                @error("course")
                    <div class="text-red-600">{{$message}}</div>
                @enderror
              </div>
          </div>
          <div class="flex flex-wrap -mx-3 mb-2">
              <div class="w-full px-3">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-password">
                  Passport Picture
                </label>
                <input wire:model="image" value="{{old("image")}}" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500 form-file" id="grid-password" type="file">
                @error("image")
                    <div class="text-red-600">{{$message}}</div>
                @enderror
              </div>
              @if ($image)
                <img src="{{$image->temporaryUrl()}}" width="120" class="mx-3 rounded-lg" style="height: 150px" alt="">
              @endif
          </div>
          <div class="flex flex-wrap -mx-3 mb-2">
              <div class="w-full px-3">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-password">
                  Your Email
                </label>
                <input wire:model="email" value="{{old("email")}}" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-password" type="email" placeholder="Your Email">
                @error("email")
                    <div class="text-red-600">{{$message}}</div>
                @enderror
              </div>
          </div>
          <div class="flex flex-wrap -mx-3 mb-2">
              <div class="w-full px-3">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-password">
                  Phone Number
                </label>
                <input wire:model="telephone" value="{{old("telephone")}}" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-password" type="text" placeholder="Phone Number">
                @error("telephone")
                    <div class="text-red-600">{{$message}}</div>
                @enderror
              </div>
          </div>
          <div class="flex flex-wrap -mx-3 mb-2">
              <div class="w-full px-3">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-password">
                  Residential Address
                </label>
                <input wire:model="address" value="{{old("address")}}" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-password" type="text" placeholder="Residential Address">
                @error("address")
                    <div class="text-red-600">{{$message}}</div>
                @enderror
              </div>
          </div>
          <div class="flex flex-wrap -mx-3">
              <div class="w-full px-3">
                  <span class=" tracking-wide text-gray-700 text-xs font-bold">Do you have any special skill(s) in Technology development?</span>
                <label class=" uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-password">
                  Yes <input id="test-checkbox1" type="radio" value="Yes" wire:model="skills" name="skill" class="mr-2 ml-1 test-input">&nbsp;&nbsp;   No <input id="test-checkbox2" name="skill" class="mr-2 ml-1" value="No" wire:model="skills" type="radio"> 
                </label>
              </div>
          </div>
          <div id="test-show" style="display: none; transition: 0.5s;">
            <div class="flex flex-wrap -mx-3">
                <div class="w-full px-3">
                  <label class="block tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-password">
                    If Yes, Specify:
                  </label>
                </div>
            </div>
            <div class="flex flex-wrap -mx-3">
                <div class="w-full px-3">
                  <span class=" uppercase tracking-wide text-gray-700 text-xs font-bold" for="grid-question">
                    1.
                  </span>
                  <input wire:model="skills" disabled class="disabled appearance-none block w-full text-gray-700 rounded py-2 px-2 mb-3 leading-tight focus:outline-none focus:border-none" id="grid-question" type="text" style="border: none !important; border-bottom: 2px solid gray !important;">
                </div><div class="w-full px-3">
                  <span class=" uppercase tracking-wide text-gray-700 text-xs font-bold" for="grid-question">
                    2.
                  </span>
                  <input wire:model="skills" disabled class="disabled appearance-none block w-full text-gray-700 rounded py-2 px-2 mb-3 leading-tight focus:outline-none focus:border-none" id="grid-question" type="text" style="border: none !important; border-bottom: 2px solid gray !important;">
                </div>
            </div>
          </div>
          <div class="flex flex-wrap -mx-3 mb-2"> 
              <div class="w-full px-3"> 
                  <a href="#" class="rounded hover:bg-red-200" style="height: 40px; background: red; color: white; padding: 18px 25px; cursor: pointer; font-weight: bold;">        
                    <input type="button" value="Pay Dues" name="dues" id="dues" value="Paid" id=""> 
                  </a>
                  @error("dues")
                      <div class="text-red-600">{{$message}}</div>
                  @enderror
              </div>
          </div>
          <div class="flex flex-wrap -mx-3 mb-2">
              <div class="w-full px-3">
                <label class=" tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-password">
                  <input id="grid-password" type="checkbox" class="mr-2 ml-1" value="Accepted" wire:model="accept">I hereby certify that all the information provided above in this form is correct and can therefore be used by the club in all initiatives
                </label>
                @error("accept")
                    <div class="text-red-600">{{$message}}</div>
                @enderror
              </div>
          </div>
          <div class="flex flex-wrap -mx-3 mb-2">
              <div class="w-full px-3">
                <label class=" tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-password">
                  <input id="grid-password" type="checkbox" class="mr-2 ml-1 test-input" value="Agree" wire:model="terms">I agree to the <span class="text-red-600">Terms</span> and <span class="text-red-600">Conditions</span>
                </label>
                @error("terms")
                    <div class="text-red-600">{{$message}}</div>
                @enderror
              </div>
          </div>
          <div class="flex flex-wrap -mx-3 mb-2">
              <div class="w-full px-3">   
                  <button type="submit" class="bg-blue-500 hover:bg-blue-400 text-white font-bold py-2 px-4 border-b-4 border-blue-700 hover:border-blue-500 rounded">
                      Register
                  </button>
              </div>
          </div>
      </div>
  </form>
</div>