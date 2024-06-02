<div class="flex">
   <button wire:click="createuser" class="bg-white text-gray-900 p-2 font-bold px-4 hover:cursor-pointer hover:bg-gray-600 hover:text-white duration-300">
    Add User
   </button>
   <div class="text-gray-900  font-bold bg-white p-2  duration-300  text-center w-[40px] ml-5 pt-5 ">
   {{count($user)}}  
   </div>
   
   <div class="bg-white text-gray-900 px-3 py-2 text-left  w-[250px] ml-5">
   @foreach($user as $user)
   {{$user->created_at}}
   @endforeach
   </div>
</div>
