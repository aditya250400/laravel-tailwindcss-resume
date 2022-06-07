<div

  :class="selectedTab == 'all' || categories.includes(selectedTab) ? 'block' : 'hidden' "
  class="w-full md:w-1/2 xl:w-1/3 px-4"
>
  <div class="relative mb-12">
   
      <div class="rounded-lg overflow-hidden ease-in duration-100 hover:scale-105">
        <img
          src="{{ $image }}"
          alt="portfolio"
          class="w-full h-[260px] object-cover"
        />
      </div>
    
    
  </div>
</div>
