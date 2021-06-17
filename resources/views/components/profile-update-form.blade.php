  <section class="md:items-center mb-6">
    <h2 class="mb-2 text-2xl">Welcome</h2>
    <p class="mb-4">Please complete the following fields to correctly update your profile</p>
  </section>

  <form method="POST" action="{{route('employees.update', ['id' => Auth::id()])}}"  class="w-full max-w-xl">
      @csrf
      @method('PATCH')
      <div class="md:flex md:items-center mb-6">
        <div class="md:w-1/3">
          <label class="block text-gray-500 font-bold md:text-left mb-1 md:mb-0 pr-4" for="inline-first_name">
            First Name
          </label>
        </div>
  
          <div class="md:w-2/3">
          <input name="first_name"
            class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-blue-500"
            id="inline-first-name"
            type="text"
            placeholder="First Name"
            @error('first_name') is-invalid @enderror value="{{old('first_name')}}"
          />
  
          @error('first_name')
            <p class="invalid-feedback font-semibold text-red-600"mb-2 font-semibold ">{{$message}}</p>
          @enderror
        </div>
      </div>
  
      <div class="md:flex md:items-center mb-6">
         <div class="md:w-1/3">
          <label class="block text-gray-500 font-bold md:text-left mb-1 md:mb-0 pr-4" for="inline-last_name">
            Last Name
          </label>
        </div>
        <div class="md:w-2/3">
          <input
            name="last_name"
            class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-blue-500"
            id="inline-last-name"
            type="text"
            placeholder="Last Name"
            @error('last_name') is-invalid @enderror value="{{old('last_name')}}"
          />
  
          @error('last_name')
            <p class="invalid-feedback font-semibold text-red-600"mb-2 font-semibold">{{$message}}</p>
          @enderror
        </div>
      </div>
  
      <div class="md:flex md:items-center mb-6">
        <div class="md:w-1/3">
          <label class="block text-gray-500 font-bold md:text-left mb-1 md:mb-0 pr-4" for="inline-dob">
            Date of Birth
          </label>
        </div>
        <div class="md:w-2/3">
          <input
          name="date_of_birth"
          class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-blue-500"
          id="inline-dob"
          type="text"
          placeholder="YYYY-MM-DD"
           @error('date_of_birth') is-invalid @enderror value="{{old('date_of_birth')}}"
          />
  
          @error('date_of_birth')
            <p class="invalid-feedback font-semibold text-red-600">{{$message}}</p>
          @enderror
        </div>
      </div>
  
      <div class="md:flex md:items-center mb-6">
        <div class="md:w-1/3">
          <label class="block text-gray-500 font-bold md:text-left mb-1 md:mb-0 pr-4" for="inline-telephone">
            Telephone
          </label>
        </div>
        <div class="md:w-2/3">
          <input
            name="telephone"
            class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-blue-500"
            id="inline-telephone"
            type="text"
            placeholder="07776887551"
            @error('telephone') is-invalid @enderror value="{{old('telephone')}}"
          />
  
          @error('telephone')
            <p class="invalid-feedback font-semibold text-red-600">{{$message}}</p>
          @enderror
        </div>
      </div>
  
      <div class="md:flex md:items-center mb-6">
        <div class="md:w-1/3">
          <label class="block text-gray-500 font-bold md:text-left mb-1 md:mb-0 pr-4" for="inline-address_one">
            Address 1
          </label>
        </div>
        <div class="md:w-2/3">
          <input
            name="address_1"
            class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-blue-500"
            id="inline-address_one"
            type="text"
            placeholder="1 South Street"
            @error('telephone') is-invalid @enderror value="{{old('telephone')}}"
          />
  
          @error('telephone')
            <p class="invalid-feedback font-semibold text-red-600">{{$message}}</p>
          @enderror
        </div>
      </div>
  
      <div class="md:flex md:items-center mb-6">
        <div class="md:w-1/3">
          <label class="block text-gray-500 font-bold md:text-left mb-1 md:mb-0 pr-4" for="inline-address_two">
            Address 2
          </label>
        </div>
        <div class="md:w-2/3">
          <input
            name="address_2"
            class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-blue-500"
            id="inline-address_two"
            type="text"
            placeholder="The Hollow"
            @error('address_2') is-invalid @enderror value="{{old('address_2')}}"
          />
  
            @error('address_2')
              <p class="invalid-feedback font-semibold text-red-600">{{$message}}</p>
            @enderror
        </div>
      </div>
  
       <div class="md:flex md:items-center mb-6">
        <div class="md:w-1/3">
          <label class="block text-gray-500 font-bold md:text-left mb-1 md:mb-0 pr-4" for="town">
            Town
          </label>
        </div>
        <div class="md:w-2/3">
          <input
            name="town"
            class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-blue-500"
            id="town"
            type="text"
            placeholder="Bath"
            @error('town') is-invalid @enderror value="{{old('town')}}"
          />
  
            @error('town')
              <p class="invalid-feedback font-semibold text-red-600">{{$message}}</p>
            @enderror
        </div>
      </div>
  
      <div class="md:flex md:items-center mb-6">
        <div class="md:w-1/3">
          <label class="block text-gray-500 font-bold md:text-left mb-1 md:mb-0 pr-4" for="post-code">
            Post Code
          </label>
        </div>
        <div class="md:w-2/3">
          <input
            name="postcode"
            class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-blue-500"
            id="post-code"
            type="text"
            placeholder="Ba2 5TQ"
            @error('postcode') is-invalid @enderror value="{{old('postcode')}}"
          />
  
            @error('postcode')
              <p class="invalid-feedback font-semibold text-red-600">{{$message}}</p>
            @enderror
        </div>
      </div>
  
      <div class="md:flex md:items-center mb-6">
        <div class="md:w-1/3">
          <label class="block text-gray-500 font-bold md:text-left mb-1 md:mb-0 pr-4" for="email">
            Email
          </label>
        </div>
        <div class="md:w-2/3">
          <input
            name="email"
            class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-blue-500"
            id="post-code"
            type="email"
            placeholder="email@example.com"
            @error('email') is-invalid @enderror value="{{old('email')}}"
          />
  
            @error('email')
              <p class="invalid-feedback mb-2 font-semibold text-red-600">{{$message}}</p>
            @enderror
        </div>
      </div>
  
      <div class="md:flex md:items-center mb-6">
        <input type="submit" class="shadow bg-blue-500 hover:bg-blue-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded"/>
      </div>
  </form>
  

