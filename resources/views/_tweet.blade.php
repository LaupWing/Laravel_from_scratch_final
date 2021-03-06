<div class="flex p-4 {{$loop->last ? '' : 'border-b border-b-grey-400'}}">
   <div class="mr-2 flex-shrink-0">
      <a href="{{ route('profile', $tweet->user->name)}}">
         <img 
            width="50px"
            src="https://breakthrough.org/wp-content/uploads/2018/10/default-placeholder-image.png" 
            alt="avatar"
            class="rounded-full mr-2"
         >
      </a>
   </div>
   <div>
      <h5 class="font-bold mb-4">
         <a href="{{ route('profile', $tweet->user->name)}}">
            {{$tweet->user->name}}
         </a>
      </h5>
      <p class="text-sm">
         {{$tweet->body}}
      </p>
   </div>   
</div>