<div>
  <div class="grid space-y-4">
   <x-hive-display-card component='pollen'>
     <div class="grid xl:grid-cols-6 divide-y">
       <x-hive-form-input name="title"   wire:model.lazy="title"  type="transparent" placeholder="{{__('Title')}}" class="p-4" span="xl:col-span-6"/>
       <x-hive-form-text  name="content" wire:model.lazy="content"  type="transparent" placeholder="{{__('Text')}}" class="p-4"  span="xl:col-span-6"/>
     </div>
   </x-hive-display-card>
   @if ($errors->any())
       <div {{ $attributes }}>
           <div class="font-medium text-red-600">{{ __('Whoops! Something went wrong.') }}</div>

           <ul class="mt-3 list-disc list-inside text-sm text-red-600">
               @foreach ($errors->all() as $error)
                   <li>{{ $error }}</li>
               @endforeach
           </ul>
       </div>
   @endif

   <!-- <div class="flex">
       <span class="inline-flex items-center rounded-full bg-indigo-100 px-4 py-2 text-sm font-semibold text-indigo-500">
         <x-hive-form-icon
         path='plus'
         width='6'
         height='6'
         iconWidth='2'
         />
         Private
      </span>
     </div> -->

  </div>
</div>
