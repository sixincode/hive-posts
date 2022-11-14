<div>

 <div class="grid space-y-2">
  <div class="flex flex-auto flex-wrap">
    <div class="w-full" x-data="alpineMuliSelect({selected: $wire.categories, elementId:'multSelect'})">
      <select x-cloak class="hidden" id="multSelect">
        @foreach($listsForFields['categories'] as $key => $category)
          <option value="{{$key}}" data-search="{{$category}}">{{$category}}</option>
        @endforeach
      </select>

                                   <!-- Select Options -->


  <div class="w-full grid grid-col max-h-[250px] mx-auto" @keyup.alt="toggle">
  <!-- Selected Teams -->
  <input name="categories[]" type="hidden" x-bind:value="selectedValues()" value=" ">

  <div class="inline-block relative w-full">

   <div class="flex flex-col items-center relative">

   <!-- Selected elements container -->
   <div class="w-full">
       <div class="grid flex-auto flex-wrap" x-on:click="open">
             <!-- Search input-->
             <div class="mt-1 relative rounded-md shadow-sm">
                 <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                     <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                         <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                     </svg>
                 </div>
                 <input type="text" name="search" autocomplete="off" id="search" x-model.debounce.750ms="search" class="focus:ring-indigo-500 focus:border-indigo-500 block w-full pl-10 sm:text-sm border border-indigo-300 rounded-md h-10" placeholder="" @keyup.escape="clear" @keyup.delete="deselect">
                 <div class="absolute inset-y-0 right-0 flex py-1.5 pr-1.5">
                     <kbd class="inline-flex items-center border border-gray-200 rounded px-2 text-sm font-sans font-medium text-gray-400 mr-2" x-on:click="clear">
                         Esc
                     </kbd>
                     <kbd class="inline-flex items-center border border-gray-200 rounded px-2 text-sm font-sans font-medium text-gray-400" x-on:click="deselect">
                         Del
                     </kbd>
                 </div>
             </div>

            </div>
         </div>
         <!-- Dropdown container -->
         <div class="w-full">
             <div x-show.transition.origin.top="isOpen()" x-trap="isOpen()" class="absolute shadow-lg top-100 z-40 w-full lef-0 rounded-lg max-h-80" x-on:click.away="close">
                 <div class="flex flex-col w-full">

                     <!-- Options container -->
                     <ul class="z-10 mt-1 w-full bg-white shadow-lg max-h-80 rounded-md py-0 text-base ring-1 ring-black ring-opacity-5 focus:outline-none  overflow-y-auto sm:text-sm" tabindex="-1" role="listbox" @keyup.delete="deselect">
                         <template x-for="(option,index) in options" :key="option.text">
                             <li class="text-gray-900 cursor-default select-none relative" role="option">
                                 <div class="cursor-pointer w-full border-gray-100 rounded-t border-b hover:bg-slate-100" x-bind:class="option.selected ? 'bg-blue-100' : ''" @click="select(index,$event)">
                                     <div x-bind:class="option.selected ? 'border-indigo-600' : ''" class="flex w-full items-center p-2 pr-4 border-transparent border-l-2 relative">
                                         <div class="w-full items-center flex">
                                             <div class="mx-2 truncate leading-6" x-model="option" x-text="option.text"></div>
                                             <span class="absolute inset-y-0 right-0 flex items-center pr-2 text-indigo-600" x-show="option.selected">

                                                 <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                     <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                                 </svg>
                                             </span>
                                         </div>
                                     </div>
                                 </div>
                             </li>
                         </template>

                     </ul>
                 </div>
             </div>
         </div>


         <div class="">
           <!-- iterating over selected elements -->
           <!-- <template x-for="(option,index) in selectedElms" :key="option.value">
               <div x-show="index < 2" class="inline-flex truncate max-w-sm justify-center items-center m-1 font-medium py-1 px-2 rounded-full text-indigo-700 bg-indigo-100 border border-indigo-300 ">
                   <div class="text-xs font-normal leading-none max-w-full flex-initial" x-model="selectedElms[option]" x-text="option.text"></div>
                   <div class="flex flex-auto flex-row-reverse">
                       <div x-on:click.stop="remove(index,option)">
                           <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 ml-2" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                               <path stroke-linecap="round" stroke-linejoin="round" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                             </svg>
                       </div>
                   </div>
               </div>
           </template> -->
           <!-- More than two items selected -->
           <div x-show="selectedElms.length > 2" class="flex justify-center items-center m-1 font-medium py-1 px-2 rounded-full text-indigo-700 bg-indigo-100 border border-indigo-300 ">
               <div class="text-xs font-normal h-6 flex justify-center items-center leading-none max-w-full flex-initial">
                   <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-sm font-medium bg-indigo-200 text-pink-800 mr-2">
                       <span x-text="selectedElms.length -2">1</span>
                   </span>
                   more selected
               </div>
           </div>
         </div>
     </div>

  </div>
  </div>

  </div>
</div>
</div>
@pushOnce('scripts')
<script>
document.addEventListener("alpine:init", () => {
   Alpine.data("alpineMuliSelect", (obj) => ({
       elementId: obj.elementId,
       options: [],
       selected: obj.selected,
       // selectedElms: [],
       selectedElms:  @entangle('categories'),
       show: false,
       search: '',
       open() {
           this.show = true
       },
       close() {
           this.show = false
       },
       toggle() {
           this.show = !this.show
       },
       isOpen() {
           return this.show === true
       },

       // Initializing component
       init() {
           const options = document.getElementById(this.elementId).options;
           for (let i = 0; i < options.length; i++) {

               this.options.push({
                   value: options[i].value,
                   text: options[i].innerText,
                   search: options[i].dataset.search,
                   selected: Object.values(this.selected).includes(options[i].value)
               });

               if (this.options[i].selected) {
                   this.selectedElms.push(this.options[i].value)
               }

           }
           console.log(this.selectedElms)
           console.log(this.options)

           // searching for the given value
           this.$watch("search", (e => {
               this.options = []
               const options = document.getElementById(this.elementId).options;
               Object.values(options).filter((el) => {
                   var reg = new RegExp(this.search, 'gi');
                   return el.dataset.search.match(reg)
               }).forEach((el) => {
                   let newel = {
                       value: el.value,
                       text: el.innerText,
                       search: el.dataset.search,
                       selected: Object.values(this.selected).includes(el.value)
                   }
                   this.options.push(newel);

               })


           }));
       },
       // clear search field
       clear() {
           this.search = ''
       },
       // deselect selected options
       deselect() {
           setTimeout(() => {
               this.selected = []
               this.selectedElms = []
               Object.keys(this.options).forEach((key) => {
                   this.options[key].selected = false;
               })
           }, 100)
       },
       // select given option
       select(index, event) {
           if (!this.options[index].selected) {
               this.options[index].selected = true;
               this.options[index].element = event.target;
               this.selected.push(this.options[index].value);
               this.selectedElms.push(this.options[index].value);
               console.log(this.selectedElms)


           } else {
               this.selected.splice(this.selected.lastIndexOf(index), 1);
               this.options[index].selected = false
               Object.values(this.selectedElms).forEach((key) => {
                   if (this.selectedElms[index] == this.options[index].value) {
                       setTimeout(() => {
                           this.selectedElms.splice(key, 1)
                       }, 100)
                   }
               })
               console.log(this.selectedElms)

           }
       },
       // remove from selected option
       remove(index, option) {
           // this.selectedElms.splice(this.selected.indexOf(index), 1);
           Object.values(this.selectedElms).splice(this.selected.indexOf(index), 1);
           Object.keys(this.options).forEach((key) => {
               if (this.options[key].value == option.value) {
                   this.options[key].selected = false;
                   Object.keys(this.selected).forEach((skey) => {
                       if (this.selected[skey] == option.value) {
                           this.selected.splice(skey, 1);
                       }
                   })
               }
           })
           console.log(this.selectedElms)

       },
       // filter out selected elements
       selectedElements() {
           return this.options.filter(op => op.selected === true)
       },
       // get selected values
       selectedValues() {
           return this.options.filter(op => op.selected === true).map(el => el.value)
       }
   }));
});
</script>
@endPushOnce
@pushOnce('styles')
<style>
[x-cloak] {
  display: none;
}

.svg-icon {
  width: 1em;
  height: 1em;
}

.svg-icon path,
.svg-icon polygon,
.svg-icon rect {
  fill: #333;
}

.svg-icon circle {
  stroke: #4691f6;
  stroke-width: 1;
}
</style>
@endPushOnce

</div>
