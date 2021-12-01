<link rel="stylesheet" href="https://demos.creative-tim.com/notus-js/assets/styles/tailwind.css">
<link rel="stylesheet" href="https://demos.creative-tim.com/notus-js/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css">
<link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>

<body>
  @php
   $listKategory = App\Models\category::all();
  @endphp
  <div class="w-full text-gray-700 bg-white dark-mode:text-gray-200 dark-mode:bg-gray-800">
    <div x-data="{ open: false }" class="flex flex-col max-w-screen-xl px-4 mx-auto md:items-center md:justify-between md:flex-row md:px-6 lg:px-8">
      <div class="p-4 flex flex-row items-center justify-between">
        <p text-xl class="text-lg text-xl font-semibold tracking-widest text-gray-900 uppercase rounded-lg dark-mode:text-white focus:outline-none focus:shadow-outline">Syafrizal Kurniadin</p>
      </div>
      <nav :class="{'flex': open, 'hidden': !open}" class="flex-col flex-grow pb-4 md:pb-0 hidden md:flex md:justify-end md:flex-row">
        <a class="px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 md:ml-4 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline text-xl" href="/">Home</a>
        <div @click.away="open = false" class="relative" x-data="{ open: false }">
          <button @click="open = !open" class="flex flex-row items-center w-full text-xl px-4 py-2 mt-2 text-sm font-semibold text-left bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:focus:bg-gray-600 dark-mode:hover:bg-gray-600 md:w-auto md:inline md:mt-0 md:ml-4 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline">
            <span>Categories</span>
            <svg fill="currentColor" viewBox="0 0 20 20" :class="{'rotate-180': open, 'rotate-0': !open}" class="inline w-4 h-4 mt-1 ml-1 transition-transform duration-200 transform md:-mt-1"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
          </button>
          <div x-show="open" x-transition:enter="transition ease-out duration-100" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-75" x-transition:leave-start="transform opacity-100 scale-100" x-transition:leave-end="transform opacity-0 scale-95" class="absolute right-0 w-full mt-2 origin-top-right rounded-md shadow-lg md:w-48">
            <div class="px-2 py-2 bg-white rounded-md shadow dark-mode:bg-gray-800">
              <a class="block px-4 py-2 mt-2 text-xl text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent 
              dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white 
              dark-mode:text-gray-200 md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 
              focus:outline-none focus:shadow-outline" href="{{ route('home') }}">All</a>
              @foreach ($listKategory as $kate)
                <a class="block px-4 py-2 mt-2 text-xl text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent 
                dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white 
                dark-mode:text-gray-200 md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 
                focus:outline-none focus:shadow-outline" href="{{ route('home', ['kategori' => $kate->id]) }}">{{ $kate->category }}</a>
                @endforeach
            </div>
          </div>
        <a class="px-4 py-2 mt-2 text-sm text-xl font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 md:ml-4 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="/contact">Contact</a>
        </div>    
      </nav>
    </div>
  </div>

  <div class="container  min-h-screen px-5 mx-auto">
    <div class="md:flex space-y-5 md:space-y-0 md:space-x-5 mt-10">
      <div class="w-full md:w-3/4">

        @yield('content')
        
      </div>
      <div class="w-full md:w-1/4">
          <div class="bg-green-500 justify-center p-4 ">
            <h1 class="text-3xl text-black-800">Category</h1>
          </div>
          <div class="bg-green-200 justify-center">
                <div class="bg-grey shadow-xl rounded-lg">
                  @foreach ($listKategory as $kate)
                      <ul class="divide-y divide-gray-300">
                        <li class="p-4 hover:bg-green-900 cursor-pointer"><a href="{{ route('home', ['kategori' => $kate->id]) }}">{{ $kate->category }}</a></li>
                      </ul>
                  @endforeach
                </div>
          </div>
      </div>
    </div>
</body>


<footer class="footer bg-white relative pt-1 flex border-blue-700">
  <div class="container mx-auto px-6">
      <div class="mt-16 border-t-2  items-center">
          <div class="text-center py-6">
              <p class="text-2xl text-black-700 font-bold mb-2">
                  © 2021 by Syafrizal Kurniadin
              </p>
          </div>
      </div>
  </div>
</footer>
<!-- Create Navbar Menu -->
