<div id="create-category" class="">
  <div x-data="addCategory">
    <header>
     <x-hive-posts-user-create-category-header />
    </header>
    <x-hive-display-section component='dividedSection' class='p-2 bg-slate-50'>
      <x-slot name="mainSec" class="bg-gray-300">
       <x-hive-display-tabs :tabs='["overview","SEO"]' class='p-4' component='darkyTab'>
         <x-slot name="tabsContent">
           <div x-cloak x-show="activeTab === 'overview' ">
             <x-hive-posts-user-create-category-overview />
           </div>
           <div x-cloak x-show="activeTab === 'SEO'">
             <x-hive-posts-user-create-category-seo />
           </div>
        </x-slot>
       </x-hive-display-tabs>
      </x-slot>

      <x-slot name="secondSec">
        <div class="space-y-4 p-4">

        </div>
      </x-slot>

    </x-hive-display-section>
  </div>
</div>
@pushOnce('scripts')
<script type="text/javascript">

    function addCategory() {
      return {
        category_name: '',
        category_description: '',
        image: '',
        show_image: true,
       }
    }
  </script>

@endPushOnce
