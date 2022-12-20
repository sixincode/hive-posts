<div>


<div class="col-6 mx-auto" x-data='addUrls()' x-init="init()">
             <template x-for="(url, i) in urls" :key="i">
              <div class="mt-2">
                 <x-hive-form-input
                name='url.title'
                id='url.title'
                wire:model.lazy='url.title'
                class='block text-sm font-semibold text-gray-700 p-0'
                component='transparent'
                x-model="url.title"
                placeholder="{{__('Title')}}"/>

                <div class="sm:flex justify-between items-center space-x-2">
                   <div class="relative rounded-md flex-1">
                    <div class="pointer-events-none absolute inset-y-0 left-0 flex items-center text-sm">
                      <span class="text-gray-500">https://</span>
                    </div>
                      <x-hive-form-input
                      name='url'
                      id='url'
                      wire:model.lazy='url'
                      class='pl-12 border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm'
                      component='transparent'
                      x-model="url.link"
                      placeholder=" www.example.com"/>
                    </div>
                    <button
                      type="button"
                      @click.prevent="removeUrl(i)"
                      class="inline-flex w-full items-center justify-center px-4 py-1.5 text-red-600 hover:bg-red-100 rounded-md font-semibold focus:outline-none sm:w-auto"
                      >
                      <x-hive-form-icon
                        path='remove'
                        width='4'
                        height='4'
                        iconWidth='2'
                        />
                      </button>

                  </div>
              </div>
            </template>
          <div>
           <button type="button" @click.prevent="addUrl()" class="text-blue-600 hover:text-blue-700 font-semibold mt-2">Add url</button>
          </div>
      </div>
    </div>

@pushOnce('scripts')
<script>
 class Url {
  constructor() {
    this.title = '';
    this.url = '';
    this.type = '';
    }
  }

 function addUrls() {
  return {
    urls: [],
    init() {
      //do init stuff here
    },
    UrlsCount() {
      return this.urls.length;
    },
    addUrl() {
      console.log('Add');
      this.urls.push(new Url());
      console.debug(urls);

    },
    removeUrl(index) {
      this.urls.splice(index, 1);
    },
  }
}
  </script>
@endPushOnce
