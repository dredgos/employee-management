@inject("currentUser", "App\Contracts\IModel\UserInterface")

<h2>Welcome {{ $currentUser->fullName() }}</h2>

<form method=POST class="w-full max-w-sm">
    @csrf
    <div class="md:flex md:items-center mb-6">
      <div class="md:w-1/3">
        <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="inline-first_name">
          First Name
        </label>
      </div>
      <div class="md:w-2/3">
        <input class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" id="inline-first-name" type="text" value="Jane">
      </div>
    </div>
</form>

