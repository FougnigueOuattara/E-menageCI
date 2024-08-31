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
                                <p class="mr-2"><img class="h-5 w-auto" src="/storage/images/phone-call.png" alt="phone icon"></p>
                                <p><a href="tel:+225 0566837675">+225 0566837675</a></p>
                            </div>
                            <div class="flex items-center">
                                <p class="mr-2"><img class="h-5 w-auto" src="/storage/images/envelope.png" alt="phone icon"></p>
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