<div>
 <x-hive-display-card component='pollen' class='mt-4'>
  <x-hive-display-accordion name='postOptions' tabs='["dateActive","url","author"]' active='dateActive' class="divide-y">

    <x-hive-display-accordion-item name='{{_("Url")}}' headerClass="rounded-t-lg" id='url'>
      <x-slot name="header">
          {{_("Url")}}
      </x-slot>
      <x-slot name="body">
        <x-hive-form-url name='urls'/>
      </x-slot>
    </x-hive-display-accordion-item>

    <x-hive-display-accordion-item name='{{_("Author")}}' headerClass="rounded-b-lg" id='author'>
      <x-slot name="header">
          {{_("Author")}}
      </x-slot>
      <x-slot name="body">
        <x-hive-form-owner name='owners'/>
      </x-slot>

    </x-hive-display-accordion-item>
  </x-hive-display-accordion>
 </x-hive-display-card>
</div>
