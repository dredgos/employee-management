<section class="flex flex-wrap -mx-1 overflow-hidden">
​
    <section class="my-1 px-1 w-full overflow-hidden sm:w-1/2">
        <img
        class="w-64 h-64 object-cover rounded-full"
        src="//images.unsplash.com/photo-1438761681033-6461ffad8d80?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1650&q=80"
        alt="Avatar Image"
      />
    </section>
  
    <section class="my-1 px-1 w-full overflow-hidden sm:w-1/2">
        <h3>{{$user->fullName()}}</h3>
        <h4>Date of Birth:</h4>
        <p>{{$user->date_of_birth}}</p>
        <h4>Telephone:</h4>
        <p>{{$user->telephone}}</p>
        <h4>Address:</h4>
        <p>{{$user->email}}</p>
    </section>
  
    <section class="my-1 px-1 w-full overflow-hidden sm:w-1/2">
        <h4>Address:</h4>
        <p>{{$user->address_1}}</p>
        <p>{{$user->address_2}}</p>
        <p>{{$user->town}}</p>
        <p>{{$user->postcode}}</p>
    </section>
  
    <section class="my-1 px-1 w-full overflow-hidden sm:w-1/2">
        <p>{{$user->department}}</p>
        <p>{{$user->role}}</p>
        <h4 class="bold">Holiday Allowance Remaining:</h4>
        <p>{{$user->total_holiday_days}}</p>
        <h4>Training Allowance Remaining:</h4>
        <p>{{$user->total_training_days}}</p>
        <h4>Joined Date:</h4>
        <p>{{$user->join_date}}</p>
        <h4>Salary:</h4>
        <p>{{$user->salary}}</p>
    </section>
  
</section>