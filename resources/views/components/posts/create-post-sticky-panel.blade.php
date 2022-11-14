<div>

  <x-hive-posts-add-image />

 <x-hive-display-card component='pollen' class='mt-4'>
  <x-hive-form-accordion name='postOptions' options='["dateActive","url","author"]' active='dateActive' class="divide-y">

    <x-hive-form-accordion-item name='{{_("Url")}}' headerClass="rounded-t-lg" id='url'>
      <x-slot name="header">
          {{_("Url")}}
      </x-slot>
      <x-slot name="body">
        <x-hive-posts-add-url />

      </x-slot>
    </x-hive-form-accordion-item>
    <x-hive-form-accordion-item name='{{_("Author")}}' headerClass="rounded-b-lg" id='author'>
      <x-slot name="header">
          {{_("Author")}}
      </x-slot>
      <x-slot name="body">
        <x-hive-posts-add-owner />
      </x-slot>

    </x-hive-form-accordion-item>
  </x-hive-form-accordion>
 </x-hive-display-card>
</div>
