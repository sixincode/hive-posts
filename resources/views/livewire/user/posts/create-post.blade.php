<div id="create-post" class="">
 <div x-data="addPost">
   <header>
    <x-hive-posts-user-create-post-header />
   </header>

   <x-hive-display-section component='dividedSection' class='p-2 bg-slate-50'>
     <x-slot name="mainSec" class="bg-gray-300">
      <x-hive-display-tabs :tabs='["overview","audience","SEO"]' class='p-4' component='darkyTab'>
        <x-slot name="tabsContent">
          <div x-cloak x-show="activeTab === 'overview' ">
            <x-hive-posts-user-create-post-overview />
          </div>
          <div x-cloak x-show="activeTab === 'audience'">
            <x-hive-posts-user-create-post-audience />
          </div>
          <div x-cloak x-show="activeTab === 'SEO'">
            <x-hive-posts-user-create-post-seo />
          </div>
       </x-slot>
      </x-hive-display-tabs>
     </x-slot>

     <x-slot name="secondSec">
       <div class="space-y-4 p-4">
         <x-hive-posts-user-create-post-taxonomy :categories='$categories' :listsForFields='$listsForFields'/>
       </div>
     </x-slot>

   </x-hive-display-section>
 </div>
</div>
@pushOnce('scripts')
<script type="text/javascript">

    function addPost() {
      return {
        post_title: '',
        post_content: '',
        show_image: true,
        show_links: false,
        show_poll: false,
        show_date: false,
        show_author: false,

        scrollToElement(e) {
          var element = document.getElementById(e);
          element.scrollIntoView(true);
          // element.scrollIntoViewIfNeeded();
          console.log("toggle "+e);
        }

      }
    }
  </script>

@endPushOnce
