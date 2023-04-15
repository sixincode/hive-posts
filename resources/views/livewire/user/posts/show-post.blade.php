<div>
  <x-hive-display-section source='sections' component='boxedSection'>
    <x-hive-display-section component='dividedSection' class='py-8 xl:py-10'>
      <x-slot name="mainSec">
        <div class="">
     <div class="xl:col-span-2 xl:border-r xl:border-gray-200 px-4 xl:px-10">
      <div>
        <div>
          <div class="md:flex md:items-center md:justify-between md:space-x-4 xl:border-b xl:pb-6">
            <div>
              <h1 class="text-2xl font-bold text-gray-900">{{$post->title}}</h1>
              <p class="mt-2 text-sm text-gray-500">
                #400 opened by
                <a href="#" class="font-medium text-gray-900">Hilary Mahy</a>
                in
                <a href="#" class="font-medium text-gray-900">Customer Portal</a>
              </p>
            </div>
            <div class="mt-4 flex space-x-3 md:mt-0">
              <button type="button" class="inline-flex justify-center rounded-md border border-gray-300 bg-white px-4 py-2 text-sm font-medium text-gray-700 shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-gray-900 focus:ring-offset-2">
                <!-- Heroicon name: mini/pencil -->
                <svg class="-ml-1 mr-2 h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                  <path d="M2.695 14.763l-1.262 3.154a.5.5 0 00.65.65l3.155-1.262a4 4 0 001.343-.885L17.5 5.5a2.121 2.121 0 00-3-3L3.58 13.42a4 4 0 00-.885 1.343z" />
                </svg>
                <span>Edit</span>
              </button>
              <button type="button" class="inline-flex justify-center rounded-md border border-gray-300 bg-white px-4 py-2 text-sm font-medium text-gray-700 shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-gray-900 focus:ring-offset-2">
                <!-- Heroicon name: mini/bell -->
                <svg class="-ml-1 mr-2 h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                  <path fill-rule="evenodd" d="M10 2a6 6 0 00-6 6c0 1.887-.454 3.665-1.257 5.234a.75.75 0 00.515 1.076 32.91 32.91 0 003.256.508 3.5 3.5 0 006.972 0 32.903 32.903 0 003.256-.508.75.75 0 00.515-1.076A11.448 11.448 0 0116 8a6 6 0 00-6-6zM8.05 14.943a33.54 33.54 0 003.9 0 2 2 0 01-3.9 0z" clip-rule="evenodd" />
                </svg>
                <span>Subscribe</span>
              </button>
            </div>
          </div>

          <div class="py-3 xl:pt-6 xl:pb-0">
            <h2 class="sr-only">Description</h2>
            <div class="prose max-w-none">
              {{$post->content}}
            </div>
          </div>
        </div>
      </div>

          </div>
      </div>
     </x-slot>
     <x-slot name="secondSec">
       <div class="px-4 xl:px-10">
         <h2 class="sr-only">Details</h2>
         <div class="space-y-5">
           <div class="flex items-center space-x-2">
             <!-- Heroicon name: mini/lock-open -->
             <svg class="h-5 w-5 text-green-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
               <path fill-rule="evenodd" d="M14.5 1A4.5 4.5 0 0010 5.5V9H3a2 2 0 00-2 2v6a2 2 0 002 2h10a2 2 0 002-2v-6a2 2 0 00-2-2h-1.5V5.5a3 3 0 116 0v2.75a.75.75 0 001.5 0V5.5A4.5 4.5 0 0014.5 1z" clip-rule="evenodd" />
             </svg>
             <span class="text-sm font-medium text-green-700">Open Issue</span>
           </div>
           <div class="flex items-center space-x-2">
             <!-- Heroicon name: mini/chat-bubble-left-ellipsis -->
             <svg class="h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
               <path fill-rule="evenodd" d="M10 2c-2.236 0-4.43.18-6.57.524C1.993 2.755 1 4.014 1 5.426v5.148c0 1.413.993 2.67 2.43 2.902.848.137 1.705.248 2.57.331v3.443a.75.75 0 001.28.53l3.58-3.579a.78.78 0 01.527-.224 41.202 41.202 0 005.183-.5c1.437-.232 2.43-1.49 2.43-2.903V5.426c0-1.413-.993-2.67-2.43-2.902A41.289 41.289 0 0010 2zm0 7a1 1 0 100-2 1 1 0 000 2zM8 8a1 1 0 11-2 0 1 1 0 012 0zm5 1a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd" />
             </svg>
             <span class="text-sm font-medium text-gray-900">4 comments</span>
           </div>
           <div class="flex items-center space-x-2">
             <!-- Heroicon name: mini/calendar -->
             <svg class="h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
               <path fill-rule="evenodd" d="M5.75 2a.75.75 0 01.75.75V4h7V2.75a.75.75 0 011.5 0V4h.25A2.75 2.75 0 0118 6.75v8.5A2.75 2.75 0 0115.25 18H4.75A2.75 2.75 0 012 15.25v-8.5A2.75 2.75 0 014.75 4H5V2.75A.75.75 0 015.75 2zm-1 5.5c-.69 0-1.25.56-1.25 1.25v6.5c0 .69.56 1.25 1.25 1.25h10.5c.69 0 1.25-.56 1.25-1.25v-6.5c0-.69-.56-1.25-1.25-1.25H4.75z" clip-rule="evenodd" />
             </svg>
             <span class="text-sm font-medium text-gray-900">Created on <time datetime="2020-12-02">Dec 2, 2020</time></span>
           </div>
         </div>
         <div class="mt-6 space-y-8 border-t border-b border-gray-200 py-6">
           <div>
             <h2 class="text-sm font-medium text-gray-500">Author</h2>
             <ul role="list" class="mt-3 space-y-3">
               <li class="flex justify-start">
                 <a href="#" class="flex items-center space-x-3">
                   <div class="flex-shrink-0">
                     <img class="h-5 w-5 rounded-full" src="https://images.unsplash.com/photo-1520785643438-5bf77931f493?ixlib=rb-=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=8&w=256&h=256&q=80" alt="">
                   </div>
                   <div class="text-sm font-medium text-gray-900">Eduardo Benz</div>
                 </a>
               </li>
             </ul>
           </div>
           <div>
             <h2 class="text-sm font-medium text-gray-500">Categories</h2>
             <ul role="list" class="mt-2 leading-8">
               @foreach($post->categories as $category)
               <li class="inline">
                 <a href="{{route('user.categories.show', $category->slug)}}" class="relative inline-flex items-center rounded-full border border-gray-300 px-3 py-0.5">
                   <div class="absolute flex flex-shrink-0 items-center justify-center">
                     <span class="h-1.5 w-1.5 rounded-full bg-rose-500" aria-hidden="true"></span>
                   </div>
                   <div class="ml-3.5 text-sm font-medium text-gray-900">{{$category->name}}</div>
                 </a>
               </li>
               @endforeach
             </ul>
           </div>
           <div>
             <h2 class="text-sm font-medium text-gray-500">Tags</h2>
             <ul role="list" class="mt-2 leading-8">
               @foreach($post->tags as $tag)
               <li class="inline">
                 <a href="#" class="relative inline-flex items-center rounded-full border border-gray-300 px-3 py-0.5">
                   <div class="absolute flex flex-shrink-0 items-center justify-center">
                     <span class="h-1.5 w-1.5 rounded-full bg-rose-500" aria-hidden="true"></span>
                   </div>
                   <div class="ml-3.5 text-sm font-medium text-gray-900">{{$tag->name}}</div>
                 </a>
               </li>
               @endforeach
             </ul>
           </div>
         </div>
       </div>
     </x-slot>
    </x-hive-display-section>
  </x-hive-display-section>
</div>
