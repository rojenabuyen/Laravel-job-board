<x-layout>

    
    
    <div class="mb-4 grid grid-cols-2 rounded-2-xl">
    <x-card class="rounded-none">
        
        <form action="{{route('auth.store')}}" method="POST">
        @csrf
        
           <div class="py-20">
                <h2 class="my-2 text-center text-3xl font-medium text-slate-300 ">Sign in to your account</h2>
                <div class="items-center justify-between p-4 text-gray-500">
                    <div class="m-4">
                        <x-label for="email" :required="true">E-mail</x-label>
                        <x-text-input name="email" />
                    </div>
        
                    <div class="m-4">
                        <x-label for="password" :required="true">Password</x-label>
                        <x-text-input name="password" type="password"/>
                    </div>
        
                    <div class="flex justify-between text-sm font-medium m-4">
                        <div>
                            <div class="flex items-center space-x-2">
                                <input type="checkbox" name="remember" class="rounded-sm border border-slate-200">
                                <label for="remember" class="text-sm text-slate-400">Remember me</label>
                            </div>
                        </div>
                        <div>
                            <a href="#" class="text-indigo-200 hover:underline">
                                Forget Password?
                            </a>
                        </div>
                    </div>
        
                    <x-button class="w-full bg-slate-600 border-slate-500">Login</x-button>
                </div>
            </div>
           
        </form>
    </x-card>
    <div class="h-auto bg-cover opacity-75 bg-gradient-to-br from-slate-700 to-gray-500">
    </div>
</div>


</x-layout>