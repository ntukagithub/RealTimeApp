<div>
    


<!-- displaying the data from the database using livewire -->
@if (session('success'))
   <div class="bg-green-600 text-white py-2 px-2 w-[370px] mx-auto text-center rounded">{{session('success')}}</div>
       
   @endif
<div class="flex mt-5 max-w-[370px] mx-auto border">
  
   <div class="  font-bold bg-white text-gray-900 p-2   duration-300  text-center w-[150px]  pt-8 ">
   {{count($user)}}  
   </div>
   
   <div class="bg-gray-900 text-white px-3 py-2 text-left  w-[27npm run dev 0px]   ">
   @foreach($user as $user)
   {{$user->email}}
   @endforeach
   </div>
</div>


<form wire:submit="submit" action="" class="max-w-[370px] mt-5 mx-auto border border-gray-600 px-5 rounded-lg">

                <div class="text-2xl font-bold pt-10 pb-10 text-center font-sarif">
                      LIVEWIRE 
                </div>
        <label class="input input-bordered flex items-center gap-2 mt-5">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor" class="w-4 h-4 opacity-70"><path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6ZM12.735 14c.618 0 1.093-.561.872-1.139a6.002 6.002 0 0 0-11.215 0c-.22.578.254 1.139.872 1.139h9.47Z" /></svg>
        <input type="text" wire:model="name" class="w-full border-none" placeholder="Username" />
        
        </label>
        @error('name')
            <span class="text-sm text-red-500 mt-2  w-full ml-2">{{$message}}</span>
        @enderror

        <label class="input input-bordered flex items-center gap-2 mt-5 ">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor" class="w-4 h-4 opacity-70"><path d="M2.5 3A1.5 1.5 0 0 0 1 4.5v.793c.026.009.051.02.076.032L7.674 8.51c.206.1.446.1.652 0l6.598-3.185A.755.755 0 0 1 15 5.293V4.5A1.5 1.5 0 0 0 13.5 3h-11Z" /><path d="M15 6.954 8.978 9.86a2.25 2.25 0 0 1-1.956 0L1 6.954V11.5A1.5 1.5 0 0 0 2.5 13h11a1.5 1.5 0 0 0 1.5-1.5V6.954Z" /></svg>
            <input type="text" wire:model="email" class="grow focus:outline-none border-none " placeholder="Email"  />
        </label>
        @error('email')
            <span class="text-sm text-red-500 mt-2  w-full ml-2">{{$message}}</span>
        @enderror

        <label class="input input-bordered flex items-center  mt-5">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor" class="w-4 h-4 opacity-70"><path fill-rule="evenodd" d="M14 6a4 4 0 0 1-4.899 3.899l-1.955 1.955a.5.5 0 0 1-.353.146H5v1.5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1-.5-.5v-2.293a.5.5 0 0 1 .146-.353l3.955-3.955A4 4 0 1 1 14 6Zm-4-2a.75.75 0 0 0 0 1.5.5.5 0 0 1 .5.5.75.75 0 0 0 1.5 0 2 2 0 0 0-2-2Z" clip-rule="evenodd" /></svg>
            <input type="password" wire:model="password" class="grow border-none focus:grow-none" placeholder="password" />
        </label>
        @error('password')
                <span class="text-sm text-red-500 mt-2 w-full ml-2">{{$message}}</span>
        @enderror

        <button   class="btn-primary py-2 rounded-lg bg-white text-gray-900 w-full mt-5 border duration-300 font-bold border-gray-600 mb-8 hover:text-white hover:bg-gray-400">Primary</button>
</form>

</div>


