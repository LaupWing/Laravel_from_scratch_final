<div class="border border-blue-400 rounded-lg px-8 py-6 mb-8">
   <form method="POST" action="/tweets">
      @csrf
      <textarea 
         name="body"
         placeholder="Whats Up"
         class="w-full"
         required
      >
      </textarea>
      <hr class="my-4">
      <footer class="flex justify-between">
         <img 
            width="40px"
            src="https://breakthrough.org/wp-content/uploads/2018/10/default-placeholder-image.png" 
            alt="avatar"
            class="rounded-full mr-2"
         >
         <button 
            type="submit" 
            class="bg-blue-500 rounded-lg shadow py-2 px-2 text-white"
         >
            Tweet-a-roo
         </button>
      </footer>
   </form>
   <div>
      @error('body')
         <p class="text-red-500 text-sm mt-2">{{$message}}</p>
      @enderror

   </div>
</div>