<div>
  <x-hive-display-card component="slatt" class="rounded-lg">
    <x-hive-form-accordion name='postOptions' options='["categories","tags"]' active='tags' class="divide-y">
     <x-hive-form-accordion-item name='{{_("Categories")}}' headerClass="rounded-t-lg" id='categories'>
       <x-slot name="header">
           {{_("Categories")}}
       </x-slot>
       <x-slot name="body">
        <x-hive-posts-add-category :categories='$categories' :listsForFields='$listsForFields'/>
      </x-slot>
     </x-hive-form-accordion-item >
     <x-hive-form-accordion-item >
      <x-slot name="header">
        {{_("Tags")}}

      </x-slot>
      <x-slot name="body">
        <x-hive-posts-add-tag />
      </x-slot>
     </x-hive-form-accordion-item >
    </x-hive-form-accordion >
  </x-hive-display-card >
</div>
