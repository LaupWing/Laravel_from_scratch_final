<x-app>
   <header class="mb-6 relative">
      <div class="relative">
         <img 
            src="/images/default-profile-banner.jpg" 
            class="mb-2"
            alt=""
         >
         <img 
            src="{{$user->avatar}}" 
            alt="avatar"
            class="rounded-full mr-2 absolute bottom-0 transform -translate-x-1/2 translate-y-1/2"
            style="width: 150px; left: 50%"
         >
      </div>
      <div class="flex justify-between items-center mb-6">
         <div>
            <h2 class="font-bold text-2xl mb-2">{{$user->name}}</h2>
            <p class="text-sm mb-0">Joined {{$user->created_at->diffForHumans()}}</p>
         </div>
         <div class="flex">
            @can ('edit', $user)
               <a 
                  href="{{$user->path('edit')}}" 
                  class="rounded-full border border-gray-300 py-2 px-4 text-black text-xs mr-2"
               >
                  Edit Profile
               </a>
            @endcan
            <x-follow-button :user="$user"></x-follow-button>
         </div>
      </div>
      <p class="text-sm">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab voluptatum, facere numquam, ad veniam quibusdam minus similique aut eum labore quisquam nesciunt a eveniet consectetur mollitia, tempore vel tenetur aliquam.</p>
      
   </header>
   @include('_timeline',[
      'tweets' => $user->tweets
   ])
</x-app>