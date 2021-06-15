<div class="md:items-center mb-6">
  <h2 class="mb-2 text-2xl">Welcome {{ $user->fullName() }}</h2>
  <p class="mb-4">Please complete the following fields to correctly update your profile</p>
</div>

<form method="POST" action="{{route('dashboard')}}"  class="w-full max-w-xl">
    @csrf
    @method('PATCH')
    <div class="md:flex md:items-center mb-6">
      <div class="md:w-1/3">
        <label class="block text-gray-500 font-bold md:text-left mb-1 md:mb-0 pr-4" for="inline-first_name">
          First Name
        </label>
      </div>
      <div class="md:w-2/3">
        <input class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-blue-500" id="inline-first-name" type="text" placeholder="FirstName">
      </div>
    </div>

    <div class="md:flex md:items-center mb-6">
       <div class="md:w-1/3">
        <label class="block text-gray-500 font-bold md:text-left mb-1 md:mb-0 pr-4" for="inline-last_name">
          Last Name
        </label>
      </div>
      <div class="md:w-2/3">
        <input class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-blue-500" id="inline-last-name" type="text" placeholder="LastName">
      </div>
    </div>

    <div class="md:flex md:items-center mb-6">
      <div class="md:w-1/3">
        <label class="block text-gray-500 font-bold md:text-left mb-1 md:mb-0 pr-4" for="inline-dob">
          Date of Birth
        </label>
      </div>
      <div class="md:w-2/3">
        <input class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-blue-500" id="inline-dob" type="text" placeholder="DD-MM-YYYY">
      </div>
    </div>

    <div class="md:flex md:items-center mb-6">
      <div class="md:w-1/3">
        <label class="block text-gray-500 font-bold md:text-left mb-1 md:mb-0 pr-4" for="inline-telephone">
          Telephone
        </label>
      </div>
      <div class="md:w-2/3">
        <input class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-blue-500" id="inline-telephone" type="text" placeholder="07776887551">
      </div>
    </div>

    <div class="md:flex md:items-center mb-6">
      <div class="md:w-1/3">
        <label class="block text-gray-500 font-bold md:text-left mb-1 md:mb-0 pr-4" for="inline-address_one">
          Address 1
        </label>
      </div>
      <div class="md:w-2/3">
        <input class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-blue-500" id="inline-address_one" type="text" placeholder="1 South Street">
      </div>
    </div>

    <div class="md:flex md:items-center mb-6">
      <div class="md:w-1/3">
        <label class="block text-gray-500 font-bold md:text-left mb-1 md:mb-0 pr-4" for="inline-address_two">
          Address 2
        </label>
      </div>
      <div class="md:w-2/3">
        <input class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-blue-500" id="inline-address_two" type="text" placeholder="The Hollow">
      </div>
    </div>

     <div class="md:flex md:items-center mb-6">
      <div class="md:w-1/3">
        <label class="block text-gray-500 font-bold md:text-left mb-1 md:mb-0 pr-4" for="town">
          Town
        </label>
      </div>
      <div class="md:w-2/3">
        <input class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-blue-500" id="town" type="text" placeholder="Bath">
      </div>
    </div>

    <div class="md:flex md:items-center mb-6">
      <div class="md:w-1/3">
        <label class="block text-gray-500 font-bold md:text-left mb-1 md:mb-0 pr-4" for="post-code">
          Post Code
        </label>
      </div>
      <div class="md:w-2/3">
        <input class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-blue-500" id="post-code" type="text" placeholder="Ba2 5TQ">
      </div>
    </div>
    
    <div class="md:flex md:items-center mb-6">
      <div class="md:w-1/3">
        <label class="block text-gray-500 font-bold md:text-left mb-1 md:mb-0 pr-4" for="email">
          Email
        </label>
      </div>
      <div class="md:w-2/3">
        <input class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-blue-500" id="post-code" type="email" placeholder="email@example.com">
      </div>
    </div>

    <div class="md:flex md:items-center mb-6">
      <input type="submit" class="shadow bg-blue-500 hover:bg-blue-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded"/>
    </div>

    

</form>

