<h3 class="font-bold text-xl mb-4">Friends</h3>
<ul>
   @foreach (current_user()->follows as $user)
   <li class="mb-4">
      <div>
         <a href="{{ route('profile', $user->name)}}" class="flex items-center text-sm">
            <img 
               width="40px"
               src="https://breakthrough.org/wp-content/uploads/2018/10/default-placeholder-image.png" 
               alt="avatar"
               class="rounded-full mr-2"
            >
            {{$user->name}}
         </a>
      </div>
   </li>
   @endforeach
</ul>