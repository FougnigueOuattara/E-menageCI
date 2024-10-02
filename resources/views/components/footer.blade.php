<div class="w-full">
    <footer class="w-full min-h-96 bg-slate-900 flex flex-col justify-between">
        <p class="text-white w-full text-center text-3xl my-8">
            About us
        </p>
        <div class="flex flex-col w-full">
            <div class="w-full h-4/5 sm:grid sm:grid-cols-3 gap-x-6 ">
                <div class="h-full flex flex-col justify-between items-center">
                    <div class="w-full h-1/6 text-white font-extrabold text-xl sm:text-3xl text-center my-4">{{env('APP_NAME')}}</div>
                    <p class="w-2/3 h-5/6 text-justify text-gray-200">
                        All In One.
                        Visiter leurs profils, puis demander leurs services en cas de besoin !
                    </p>
                </div>
                <div class="h-full flex flex-col justify-center items-center">
                    <p class="w-full h-1/6 text-white text-center text-xl font-medium my-4">Liens</p>
                    <div class="h-5/6 list-none text-gray-300 flex justify-center">
                        <div class="flex flex-col items-center">
                            <li class="mx-3"><a href="http://">Personnels bâtiment</a></li>
                            <li class="mx-3"><a href="http://">Cuisinier</a></li>
                            <li class="mx-3"><a href="http://">Menagere </a></li>
                            <li class="mx-3"><a href="http://">Nounou</a></li>
                        </div>
                    </div>
                </div>
                <div class="h-full flex flex-col items-center mb-8">
                    <p class="w-full h-1/6 text-white text-center text-xl font-medium my-4">Contact</p>
                    <div class="w-2/3 h-5/6 text-gray-300 flex justify-center">
                       <div>
                        <div class="flex items-center mb-2">
                            <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M7.978 4a2.553 2.553 0 0 0-1.926.877C4.233 6.7 3.699 8.751 4.153 10.814c.44 1.995 1.778 3.893 3.456 5.572 1.68 1.679 3.577 3.018 5.57 3.459 2.062.456 4.115-.073 5.94-1.885a2.556 2.556 0 0 0 .001-3.861l-1.21-1.21a2.689 2.689 0 0 0-3.802 0l-.617.618a.806.806 0 0 1-1.14 0l-1.854-1.855a.807.807 0 0 1 0-1.14l.618-.62a2.692 2.692 0 0 0 0-3.803l-1.21-1.211A2.555 2.555 0 0 0 7.978 4Z"/>
                              </svg>                              
                                <p><a href="tel:+225 0566837675">+225 0566837675</a></p>
                            </div>
                            <div class="flex items-center">
                                <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M2.038 5.61A2.01 2.01 0 0 0 2 6v12a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V6c0-.12-.01-.238-.03-.352l-.866.65-7.89 6.032a2 2 0 0 1-2.429 0L2.884 6.288l-.846-.677Z"/>
                                    <path d="M20.677 4.117A1.996 1.996 0 0 0 20 4H4c-.225 0-.44.037-.642.105l.758.607L12 10.742 19.9 4.7l.777-.583Z"/>
                                  </svg>
                                  
                                <p><a href="mailto:Emenageci@gmail.com">Emenageci@gmail.com</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="w-full h-1/5 flex flex-col items-center justify-end">
            <p class="text-gray-200">{{env('APP_NAME')}} &copy; <?= date('Y')  ?> Copyright </p>
        </div>
    </footer> 
</div>