<h1 class="text-lg mb-2 text-center uppercase tracking-wide text-indigo-500 hover:text-indigo-600 hover:font-bold">Users</h1>
<ul>
    @foreach (range(1,8) as $index)
        <li class="mb-5">
            <div class="flex">
              <div class="flex items-center text-sm ml-auto mr-2">
                  John Doe
                  <button class="block h-16 w-16 rounded-full overflow-hidden border-2b border-2 border-indigo-600 focus:outline-none focus:border-blue-500">
                      <img class="h-full w-full object-cover" src="{{asset("avatar.png")}}" alt="User Logo">
                  </button>
              </div>
            </div>
        </li>
    @endforeach
</ul>
