            <header class="home w-full lg:max-w-screen-lg bg-gradient-to-r from-white to-amber-300 z-50">
                <!-- <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8"> -->
                     <nav class="fixed top-0 left-0 flex invisible md:visible w-full items-center justify-left shadow-2xl bg-gradient-to-r from-white to-amber-300">
                        <div id="logo" class="flex items-center text-blue-500 px-2">
                            <a href="{{ route('welcome.index') }}" class="flex">
                                <h1 class="text-4xl md:text-5xl invisible md:visible">Good&nbsp;Zone</h1></a>
                        </div>
                        <div class="w-full flex-1 mx-2">
                            <a class="flex items-center mx-1 text-gray-600 hover:text-blue-500 transition-all rounded" href="{{ route('welcome.photo') }}">
                                <svg class="flex h-8 w-8"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round">  <path d="M23 19a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h4l2-3h6l2 3h4a2 2 0 0 1 2 2z" />  <circle cx="12" cy="13" r="4" /></svg>
                                <span class="flex mx-1 invisible md:visible">Фотогалерея</span>
                            </a>
                        </div>
                        <div class="w-full flex-1 mx-2 text-gray-600">
                            <a class="flex items-center mx-1 hover:text-amber-600 transition-all rounded" href="tel:+79148767422">
                                <svg class="flex h-8 w-8"  width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">  <path stroke="none" d="M0 0h24v24H0z"/>  <path d="M5 4h4l2 5l-2.5 1.5a11 11 0 0 0 5 5l1.5 -2.5l5 2v4a2 2 0 0 1 -2 2a16 16 0 0 1 -15 -15a2 2 0 0 1 2 -2" />  <path d="M15 7a2 2 0 0 1 2 2" />  <path d="M15 3a6 6 0 0 1 6 6" /></svg>
                                <span class="flex mx-1 invisible md:visible">+79148767422</span>
                            </a>
                        </div>
                        <div class="w-full flex-1 items-center mx-2 text-gray-600 hover:text-blue-800">
                                    <a class="flex items-center mx-1 transition-all rounded" href="https://vk.com/uigoodzone"><x-icon-vk />
                                    </a>
                            
                        </div> 
                        <div class="w-full flex-1 items-center mx-2 text-gray-600">
                                <a class="flex items-center hover:text-amber-600 transition-all rounded" href="mailto:hectkova@yandex.ru">
                                    <svg class="flex h-8 w-8 text-gray-600 hover:text-red-600"  width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">  <path stroke="none" d="M0 0h24v24H0z"/>  <circle cx="12" cy="12" r="4" />  <path d="M16 12v1.5a2.5 2.5 0 0 0 5 0v-1.5a9 9 0 1 0 -5.5 8.28" /></svg>
                                </a>
                        </div>                        
                         <div class="w-full flex-1 items-center mx-2 text-gray-600">
                                г. Усть-Илимск
                        </div>
                        <div class="fixed bottom-0 right-0 w-10 block items-center mx-2 text-gray-600">
                        @if(Route::is('welcome.index'))
                        <a href="{{ route('news.dashboard') }}" >
                        @endif
                        @if(Route::is('welcome.photo'))
                        <a href="{{ route('images.dashboard') }}" >
                        @endif
                            <svg class="h-8 w-8 text-gray-500 hover:text-blue-700"  fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"/>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                            </svg></a>
                    </div> 
                    </nav>   
                    <nav class="fixed bottom-0 flex w-full items-center justify-left shadow-2xl visible md:invisible bg-gradient-to-r from-white to-amber-300 py-1 text-gray-600">
                        <div class="flex-1 text-center">
                            <a class="transition-all rounded h-10 w-10" href="https://vk.com/uigoodzone"><x-icon-vk /></a>
                        </div> 
                        <div class="flex-1 text-center">
                                <a class="hover:text-amber-600 transition-all rounded" href="mailto:hectkova@yandex.ru">
                                    <svg class="mx-auto h-10 w-10 hover:text-red-600"  width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">  <path stroke="none" d="M0 0h24v24H0z"/>  <circle cx="12" cy="12" r="4" />  <path d="M16 12v1.5a2.5 2.5 0 0 0 5 0v-1.5a9 9 0 1 0 -5.5 8.28" /></svg>
                                </a>
                        </div>                        
                        <div class="flex-1 text-center">
                            <a class="hover:text-blue-500 transition-all rounded" href="{{ route('welcome.photo') }}">
                                <svg class="h-10 w-10 mx-auto"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round">  <path d="M23 19a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h4l2-3h6l2 3h4a2 2 0 0 1 2 2z" />  <circle cx="12" cy="13" r="4" /></svg>
                            </a>
                        </div>
                        <div class="flex-1 text-center">
                            <a href="{{ route('welcome.index') }}">
                                <svg class="h-10 w-10 hover:text-blue-600 mx-auto"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round">  <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z" />  <polyline points="9 22 9 12 15 12 15 22" /></svg>
                            </a>
                        </div>
                        <div class="flex-1 text-center">
                            <a class="hover:text-amber-600 transition-all rounded" href="tel:+79148767422">
                                <svg class="h-10 w-10 mx-auto"  width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">  <path stroke="none" d="M0 0h24v24H0z"/>  <path d="M5 4h4l2 5l-2.5 1.5a11 11 0 0 0 5 5l1.5 -2.5l5 2v4a2 2 0 0 1 -2 2a16 16 0 0 1 -15 -15a2 2 0 0 1 2 -2" />  <path d="M15 7a2 2 0 0 1 2 2" />  <path d="M15 3a6 6 0 0 1 6 6" /></svg>
                            </a>
                        </div>
                        <div class="flex-1 text-center">
                            @if(Route::is('welcome.index'))
                            <a href="{{ route('news.dashboard') }}" >
                            @endif
                            @if(Route::is('welcome.photo'))
                            <a href="{{ route('images.dashboard') }}" >
                            @endif
                                <svg class="mx-auto h-10 w-10 text-gray-500 hover:text-blue-700"  fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"/>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                                </svg></a>
                        </div>
                    </nav>               

                <!-- </div> -->
            </header>
