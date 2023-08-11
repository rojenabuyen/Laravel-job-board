
<nav class="bg-[#363D46] fixed w-full z-20 top-0 left-0 border-b border-gray-500 dark:border-gray-600">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
      <a href="{{ route('jobs.index') }}" class="flex items-center">
          <img src="/images/laravel_icon.png" class="h-8 mr-3" alt="Flowbite Logo" />
          <span class="self-center text-2xl font-semibold whitespace-nowrap text-slate-100 dark:text-white">Job Board</span>
      </a>
      @auth 
      <button data-collapse-toggle="navbar-dropdown" type="button" class="inline-flex  items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-dropdown" aria-expanded="false">
        
        <span class="sr-only">Open main menu</span>
          <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
          </svg>
          
      </button>


      <div class="hidden w-full md:block md:w-auto">
        <ul class="flex flex-col font-medium p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-[#363D46] md:flex-row md:space-x-8 md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
          <li>
              <button id="dropdownNavbarLink" data-dropdown-toggle="dropdownNavbar" class="bg-[#363D46] flex items-center justify-between w-full py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-slate-600 md:border-0  md:p-2 md:w-auto ">
                <h1 class="text-white px-4">{{ auth()->user()->name ?? 'Anynomus' }}  </h1>
                <div class="relative w-8 h-8 overflow-hidden bg-gray-100 rounded-full dark:bg-gray-600">
                    <svg class="absolute w-10 h-10 text-gray-400 -left-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd">
                        </path>
                    </svg>
                </div>
                <svg class="w-2.5 h-2.5 ml-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                    <path class="stroke-slate-50" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                  </svg>
            </button>
              <!-- Dropdown menu -->
              <div id="dropdownNavbar" class="z-10 hidden font-normal bg-[#363D46] divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
                  <ul class="py-2 text-sm text-gray-100 dark:text-gray-400" aria-labelledby="dropdownLargeButton">
                    <li>
                      <a href="{{ route('jobs.index') }}" class="block px-4 py-2 hover:bg-gray-600 dark:hover:bg-gray-600 dark:hover:text-white">{{ auth()->user()->name ?? 'Anynomus' }}</a>
                    </li>
                    @if (NULL == auth()->user()->employer) 
                    <li>
                      <a href="{{ route('employer.create') }}" class="block px-4 py-2 hover:bg-gray-600 dark:hover:bg-gray-600 dark:hover:text-white">Register as Employer</a>
                    </li>
                    @else
                    <li>                    
                      <a href="{{ route('my-jobs.index') }}" class="block px-4 py-2 hover:bg-gray-600 dark:hover:bg-gray-600 dark:hover:text-white">My Jobs</a>
                    </li>
                    
                    @endif
                    <li>
                      <a href="{{ route('my-job-applications.index') }}" class="block px-4 py-2 hover:bg-gray-600 dark:hover:bg-gray-600 dark:hover:text-white">My Applications</a>
                    </li>
                  </ul>
                  <div class="py-1">
                    <form action="{{ route('auth.destroy') }}" method="POST">
                        @csrf
                        @method('DELETE')
                               <button class="w-full px-4 py-2 text-slate-300 text-sm text-left hover:bg-slate-600 dark:hover:text-white">
                                Logout
                               </button>
                    </form>
                  </div>
              </div>
          </li>
        </ul>
      </div>



      <div class="lg:hidden hidden w-full md:block md:w-auto" id="navbar-dropdown">
        <ul class="flex flex-col font-medium text-slate-100 bg-[#363D46] p-4 md:p-0 mt-4 border border-gray-100 rounded-lg md:flex-row md:space-x-8 md:mt-0 md:border-0 dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
          <li>
            <a href="{{ route('jobs.index') }}" class="block py-2 pl-3 pr-4 text-gray-100 rounded hover:bg-slate-600 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent" aria-current="page">Home</a>
          </li>
          <li>
            <a href="#" class="block py-2 pl-3 pr-4 text-gray-100 rounded hover:bg-slate-600 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">{{ auth()->user()->name ?? 'Anynomus' }}</a>
          </li>
          @if (NULL == auth()->user()->employer) 
          <li>
            <a href="{{ route('employer.create') }}" class="block py-2 pl-3 pr-4 hover:bg-gray-600 dark:hover:bg-gray-600 dark:hover:text-white">Register as Employer</a>
          </li>
          @else
          <li>                    
            <a href="{{ route('my-jobs.index') }}" class="block py-2 pl-3 pr-4 hover:bg-gray-600 dark:hover:bg-gray-600 dark:hover:text-white">My Jobs</a>
          </li>
          
          @endif
          <li>
            <a href="{{ route('my-job-applications.index') }}" class="block py-2 pl-3 pr-4 text-gray-100 rounded hover:bg-slate-600 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">My Applications</a>
          </li>
          <li>
            <form action="{{ route('auth.destroy') }}" method="POST">
                @csrf
                @method('DELETE')
                       <button class="w-full block py-2 pl-3 pr-4 text-slate-300 text-sm text-left hover:bg-slate-600 dark:hover:text-white">
                        Logout
                       </button>
            </form>   
            </li>
        </ul>
      </div>

      @else
      <ul>
        <li>
            <a class="flex items-center justify-between w-full py-2 pl-3 pr-4 text-slate-100 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-slate-500 md:p-0 md:w-auto dark:text-white md:dark:hover:text-blue-500 dark:focus:text-white dark:border-gray-700 dark:hover:bg-gray-700 md:dark:hover:bg-transparent" href="{{ route('auth.create') }}">Sign in</a>
        </li>
    </ul>

      @endauth
    </div>
  </nav>
  
  


  

  
