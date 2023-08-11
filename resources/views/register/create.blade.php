<x-layout>

    
    
    <div class="mb-4 grid grid-cols-2 rounded-2-xl">
    <x-card class="rounded-none">
        
        <form action="{{route('register.store')}}" method="POST">
        @csrf
        
           <div class="py-20">
                <h2 class="my-2 text-center text-3xl font-medium text-slate-300 ">Register Now</h2>
                <div class="items-center justify-between p-4 text-gray-500">
                    <div class="m-4">
                        <x-label for="name" :required="true">Name</x-label>
                        <x-text-input name="name" />
                    </div>
                    <div class="m-4">
                        <x-label for="email" :required="true">E-mail</x-label>
                        <x-text-input name="email" />
                    </div>
        
                    <div class="m-4">
                        <x-label for="password" :required="true">Password</x-label>
                        <x-text-input name="password" id="password" type="password"/>
                    </div>

                    <div class="m-4">
                        <x-label for="password_confirmation" :required="true">Confirm Password</x-label>
                        <x-text-input name="password_confirmation" id="password" type="password"/>
                    </div>

                    <div class="flex justify-between text-sm font-medium m-4 p-2">
                        <div >
                            Already registered? 
                            <a href="{{ route('auth.create') }}" class="text-indigo-200 hover:underline ">
                              Login here!
                            </a>
                        </div>
                    </div>
        
                    <x-button class="w-full bg-slate-600 border-slate-500">Register</x-button>
                </div>
            </div>
           
        </form>
    </x-card>
    <div class="h-auto bg-cover opacity-75 bg-gradient-to-br from-slate-700 to-gray-500">
    </div>
</div>



</x-layout>

