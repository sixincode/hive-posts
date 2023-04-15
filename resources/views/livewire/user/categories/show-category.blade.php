<div>
  <x-hive-display-section source='sections'>
    <div class="overflow-hidden rounded-b mt-0.5 bg-white shadow-sm border border-slate-150 border-t-4 border-t-red-500">
      <h2 class="sr-only" id="category-overview-title">Category Overview</h2>
      <div class="bg-white p-6">
        <div class="sm:flex sm:items-center sm:justify-between">
          <div class="sm:flex sm:space-x-5">
            <div class="flex-shrink-0">
              <div class="p-8 rounded-full bg-red-500">
              </div>
            </div>
            <div class="mt-4 text-center sm:mt-0 sm:pt-1 sm:text-left">
              <p class="text-xl font-bold text-gray-900 sm:text-2xl">{{$category->name}}</p>
              <p class="text-sm text-gray-500 mt-4">{{$category->description}}</p>
            </div>
          </div>
          <div class="mt-5 flex justify-center sm:mt-0">
              <div class="p-4 rounded-full">
              </div>
          </div>
        </div>
      </div>
      <div class="grid grid-cols-1 divide-y divide-gray-200 border-t border-gray-200 bg-gray-50 sm:grid-cols-3 sm:divide-x sm:divide-y-0">
        <div class="px-6 py-2 text-center text-sm font-medium">
          <span class="text-gray-600">{{__('Latest')}}</span>
        </div>

        <div class="px-6 py-2 text-center text-sm font-medium">
          <span class="text-gray-900">4</span>
          <span class="text-gray-600">Sick days left</span>
        </div>

        <div class="px-6 py-2 text-center text-sm font-medium">
          <span class="text-gray-900">2</span>
          <span class="text-gray-600">Personal days left</span>
        </div>
      </div>
    </div>
    <p>{{$category->color}}</p><br>

    @foreach($category->posts as $post)
    <p>red</p><br>
    @endforeach

  </x-hive-display-section>
</div>
