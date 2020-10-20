<x-app>
   <header class="mb-6 relative">
      <img 
         src="/images/default-profile-banner.jpg" 
         class="mb-2"
         alt=""
      >
      <div class="flex justify-between items-center mb-4">
         <div>
            <h2 class="font-bold text-2xl mb-2">{{$user->name}}</h2>
            <p class="text-sm mb-0">Joined {{$user->created_at->diffForHumans()}}</p>
         </div>
         <div class="flex">
            <a href="" class="rounded-full border border-gray-300 py-2 px-4 text-black text-xs mr-2">Edit Profile</a>
            <form method="POST" action="/profiles/{{$user->name}}/follow">
               @csrf
               <button
                  type="submit"
                  class="bg-blue-500 rounded-full shadow py-2 px-4 text-white text-xs"
               >
                  {{auth()->user()->following($user) ? 'Unfollow me' : 'Follow Me'}}
               </button>
            </form>
         </div>
      </div>
      <p class="text-sm">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab voluptatum, facere numquam, ad veniam quibusdam minus similique aut eum labore quisquam nesciunt a eveniet consectetur mollitia, tempore vel tenetur aliquam.</p>
      <img 
         src="https://breakthrough.org/wp-content/uploads/2018/10/default-placeholder-image.png" 
         alt="avatar"
         class="rounded-full mr-2 absolute"
         style="width: 150px; left: calc(50% - 75px); top: 35%;"
      >
   </header>
   @include('_timeline',[
      'tweets' => $user->tweets
   ])
</x-app>