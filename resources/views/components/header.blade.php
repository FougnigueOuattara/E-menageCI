<div class="w-[100%]">
    <!-- Order your soul. Reduce your wants. - Augustine -->
    <header class="w-full h-[16vh] bg-slate-900" x-data="{open:false}">
        <nav class="flex items-center justify-between w-full h-full">
            <div><a href="{{url('/')}}" class="text-white ml-4 font-extrabold text-xl sm:text-3xl"> {{env('APP_NAME')}} {{-- <img class="w-full h-9 hover:cursor-pointer" src="/storage/images/EmenageLogo.svg"> --}} </a></div>
            <button type="button" class="flex flex-col items-center mr-4 lg:hidden justify-around w-8 h-6 cursor-pointer" @click="open =! open">
                <span class="block h-1 bg-white rounded-lg w-7 transition-all duration-500" :class="open ? ['rotate-45','translate-y-2','transition-all','duration-500'] : '' "></span>
                <span class="block h-1 bg-white rounded-lg w-7 transition-all duration-500" :class="open ? ['opacity-0','transition-opacity','duration-500'] : '' "></span>
                <span class="block h-1 bg-white rounded-lg w-7 transition-all duration-500" :class="open ? ['-rotate-45','-translate-y-2','transition-all','duration-500'] : '' "></span>
            </button>
            <div class="w-2/3 lg:flex hidden h-full bg-slate-900">
                <div class="w-full h-full flex items-center justify-evenly">
                    <!-- dropdown pour personnel batiment-->
                    <div>
                        <ul class="flex justify-center items-center w-full list-none">
                            <div class="flex justify-center">
                                <div
                                    x-data="{
                                        open: false,
                                        toggle(){
                                            if (this.open){
                                                return this.close()
                                            }
        
                                            this.$refs.button.focus()
        
                                            this.open = true
                                        },
                                        close(focusAfter){
                                            if (! this.open) return
        
                                            this.open = false
        
                                            focusAfter && focusAfter.focus()
                                        }
                                    }"
                                    x-on:keydown.escape.prevent.stop="close($refs.button)"
                                    x-on:focusin.window="! $refs.panel.contains($event.target) && close()"
                                    x-id="['dropdown-button']"
                                    class="relative"
                                >
                                    <!-- Dropdown -->
                                    <li class="mx-3 cursor-pointer xl:text-xl text-center text-white" x-ref="button"
                                        x-on:click="toggle()"
                                        :aria-expanded="open"
                                        :aria-controls="$id('dropdown-button')">
                                        Personnels bâtiment
                                    </li>
                                    <!-- Panel -->
                                    <div
                                        x-ref="panel"
                                        x-show="open"
                                        x-transition.origin.top.left
                                        x-on:click.outside="close($refs.button)"
                                        :id="$id('dropdown-button')"
                                        style="display: none;"
                                        class="absolute left-0 mt-2 w-40 rounded-md bg-white shadow-md "
                                    >
                                        <a href="{{ url('/personnels/electriciens') }}" class="xl:text-lg flex items-center justify-center gap-2 w-full first-of-type:rounded-t-md last-of-type:rounded-b-md px-4 py-2.5 text-left text-sm hover:bg-gray-50 disabled:text-gray-500">
                                            Electricien
                                        </a>
        
                                        <a href="{{ url('/personnels/ferronniers') }}" class="xl:text-lg flex items-center justify-center gap-2 w-full first-of-type:rounded-t-md last-of-type:rounded-b-md px-4 py-2.5 text-left text-sm hover:bg-gray-50 disabled:text-gray-500">
                                            Ferronnier
                                        </a>
        
                                        <a href="{{ url('/personnels/menuisiers') }}" class="xl:text-lg flex items-center justify-center gap-2 w-full first-of-type:rounded-t-md last-of-type:rounded-b-md px-4 py-2.5 text-left text-sm hover:bg-gray-50 disabled:text-gray-500">
                                            Menuisier
                                        </a>
                                        <a href="{{ url('/personnels/plombiers') }}" class="xl:text-lg flex items-center justify-center gap-2 w-full first-of-type:rounded-t-md last-of-type:rounded-b-md px-4 py-2.5 text-left text-sm hover:bg-gray-50 disabled:text-gray-500">
                                            Plombier
                                        </a>
                                        <a href="{{ url('/personnels/peintres') }}" class="xl:text-lg flex items-center justify-center gap-2 w-full first-of-type:rounded-t-md last-of-type:rounded-b-md px-4 py-2.5 text-left text-sm hover:bg-gray-50 disabled:text-gray-500">
                                            Peintre
                                        </a>
                                        <a href="{{ url('/personnels/vitriers') }}" class="xl:text-lg flex items-center justify-center gap-2 w-full first-of-type:rounded-t-md last-of-type:rounded-b-md px-4 py-2.5 text-left text-sm hover:bg-gray-50 disabled:text-gray-500">
                                            Vitrier
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </ul>
                    </div>
                    <!-- fin dropdown pour personnel batiment-->
                    <div>
                        <ul class="flex justify-center list-none items-center w-full">
                            <!-- dropdown pour personnel maison-->
                            <div class="flex justify-center">
                                <div
                                    x-data="{
                                        open: false,
                                        toggle() {
                                            if (this.open) {
                                                return this.close()
                                            }
        
                                            this.$refs.button.focus()
        
                                            this.open = true
                                        },
                                        close(focusAfter) {
                                            if (! this.open) return
        
                                            this.open = false
        
                                            focusAfter && focusAfter.focus()
                                        }
                                    }"
                                    x-on:keydown.escape.prevent.stop="close($refs.button)"
                                    x-on:focusin.window="! $refs.panel.contains($event.target) && close()"
                                    x-id="['dropdown-button']"
                                    class="relative"
                                >
                                    <!-- Dropdown -->
                                    <li class="mx-3 cursor-pointer text-center xl:text-xl text-white" x-ref="button"
                                        x-on:click="toggle()"
                                        :aria-expanded="open"
                                        :aria-controls="$id('dropdown-button')">
                                        Personnels maison
                                    </li>
                                    <!-- Panel -->
                                    <div
                                        x-ref="panel"
                                        x-show="open"
                                        x-transition.origin.top.left
                                        x-on:click.outside="close($refs.button)"
                                        :id="$id('dropdown-button')"
                                        style="display: none;"
                                        class="absolute left-0 mt-2 w-40 rounded-md bg-white shadow-md"
                                    >
                                        <a href="{{ url('/personnels/cuisiniers') }}" class="xl:text-lg flex items-center justify-center gap-2 w-full first-of-type:rounded-t-md last-of-type:rounded-b-md px-4 py-2.5 text-left text-sm hover:bg-gray-50 disabled:text-gray-500">
                                            Cuisinier
                                        </a>
        
                                        <a href="{{ url('/personnels/menagers') }}" class="xl:text-lg flex items-center justify-center gap-2 w-full first-of-type:rounded-t-md last-of-type:rounded-b-md px-4 py-2.5 text-left text-sm hover:bg-gray-50 disabled:text-gray-500">
                                            Menager
                                        </a>
        
                                        <a href="{{ url('/personnels/nounous') }}" class="xl:text-lg flex items-center justify-center gap-2 w-full first-of-type:rounded-t-md last-of-type:rounded-b-md px-4 py-2.5 text-left text-sm hover:bg-gray-50 disabled:text-gray-500">
                                            Nounou
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <!-- fin dropdown pour personnel batiment-->
                        </ul>
                    </div>
                    @if (!Auth::check())
                    <div>
                        <li class="rounded-2xl border-orange-400 border w-32 h-8 flex justify-center items-center text-white bg-orange-400 hover:bg-transparent hover:text-white transition duration-500 ease-in-out"><a href="{{url('users/login')}}">Se connecter</a></li>
                    </div>
                    @else
                    <div>
                        <ul class="flex justify-center items-center  list-none text-white">
                            <div class="flex justify-center">
                                <div
                                    x-data="{
                                        open: false,
                                        toggle(){
                                            if (this.open){
                                                return this.close()
                                            }
        
                                            this.$refs.button.focus()
        
                                            this.open = true
                                        },
                                        close(focusAfter){
                                            if (! this.open) return
        
                                            this.open = false
        
                                            focusAfter && focusAfter.focus()
                                        }
                                    }"
                                    x-on:keydown.escape.prevent.stop="close($refs.button)"
                                    x-on:focusin.window="! $refs.panel.contains($event.target) && close()"
                                    x-id="['dropdown-button']"
                                    class="relative"
                                >
                                    <!-- Dropdown -->
                                    <li class="mx-3 cursor-pointer text-center" x-ref="button"
                                        x-on:click="toggle()"
                                        :aria-expanded="open"
                                        :aria-controls="$id('dropdown-button')">
                                        <img class="h-9 w-9 ob object-cover rounded-full" src="{{ (asset('storage/'.Auth::user()->photo) == null) ? 'storage/images/pngegg.png' : asset('storage/'.Auth::user()->photo)}}" class="w-5 h-5">
                                    </li>
                                    <!-- Panel -->
                                    <div
                                        x-ref="panel"
                                        x-show="open"
                                        x-transition.origin.top.left
                                        x-on:click.outside="close($refs.button)"
                                        :id="$id('dropdown-button')"
                                        style="display: none;"
                                        class="absolute left-0 mt-2 w-40 rounded-md bg-white shadow-md"
                                    >
                                        <a href="{{url('users/profile')}}" class="flex items-center justify-center gap-2 w-full first-of-type:rounded-t-md last-of-type:rounded-b-md px-4 py-2.5 text-left text-sm hover:bg-gray-50 disabled:text-gray-500">
                                            Mon profil
                                        </a>
                                        <li class="mx-3 rounded border-orange-400 border mb-4 w-32 h-8 flex flex-col justify-center items-center text-white bg-orange-400 hover:bg-transparent hover:text-slate-900 transition duration-500 ease-in-out"><a href="{{url('users/logout')}}">Se déconnecter</a></li>
                                    </div>
                                </div>
                            </div>
                        </ul>
                    </div>
                    @endif
                </div>
            </div>
        </nav>
        <div class="relative border-t border-slate-800 lg:hidden -bottom-0 transition-[height] duration-700 bg-slate-900" :class="open ? ['transition-[height]','duration-700', 'h-[30vh]'] : 'h-[0vh]' ">
            <div class="w-full h-full flex flex-col items-center justify-evenly">
                <!-- dropdown pour personnel batiment-->
                <div>
                    <ul class="justify-center items-center transition-all duration-700 w-full list-none " :class="open ? ['flex','transition-all', 'duration-700'] : ['hidden','transition-all', 'duration-700'] ">
                        <div class="flex justify-center">
                            <div
                                x-data="{
                                    open: false,
                                    toggle(){
                                        if (this.open){
                                            return this.close()
                                        }
    
                                        this.$refs.button.focus()
    
                                        this.open = true
                                    },
                                    close(focusAfter){
                                        if (! this.open) return
    
                                        this.open = false
    
                                        focusAfter && focusAfter.focus()
                                    }
                                }"
                                x-on:keydown.escape.prevent.stop="close($refs.button)"
                                x-on:focusin.window="! $refs.panel.contains($event.target) && close()"
                                x-id="['dropdown-button']"
                                class="relative"
                            >
                                <!-- Dropdown -->
                                <li class="mx-3 cursor-pointer text-center text-white" x-ref="button"
                                    x-on:click="toggle()"
                                    :aria-expanded="open"
                                    :aria-controls="$id('dropdown-button')">
                                    Personnels bâtiment
                                </li>
                                <!-- Panel -->
                                <div
                                    x-ref="panel"
                                    x-show="open"
                                    x-transition.origin.top.left
                                    x-on:click.outside="close($refs.button)"
                                    :id="$id('dropdown-button')"
                                    style="display: none;"
                                    class="absolute left-0 mt-2 w-full rounded-md bg-white z-10 shadow-md"
                                >
                                    <a href="{{ url('/personnels/electriciens') }}" class="flex items-center justify-center gap-2 w-full first-of-type:rounded-t-md last-of-type:rounded-b-md px-4 py-2.5 text-left text-sm hover:bg-gray-50 disabled:text-gray-500">
                                        Electricien
                                    </a>
    
                                    <a href="{{ url('/personnels/ferronniers') }}" class="flex items-center justify-center gap-2 w-full first-of-type:rounded-t-md last-of-type:rounded-b-md px-4 py-2.5 text-left text-sm hover:bg-gray-50 disabled:text-gray-500">
                                        Ferronnier
                                    </a>
    
                                    <a href="{{ url('/personnels/menuisiers') }}" class="flex items-center justify-center gap-2 w-full first-of-type:rounded-t-md last-of-type:rounded-b-md px-4 py-2.5 text-left text-sm hover:bg-gray-50 disabled:text-gray-500">
                                        Menuisier
                                    </a>
                                    <a href="{{ url('/personnels/plombiers') }}" class="flex items-center justify-center gap-2 w-full first-of-type:rounded-t-md last-of-type:rounded-b-md px-4 py-2.5 text-left text-sm hover:bg-gray-50 disabled:text-gray-500">
                                        Plombier
                                    </a>
                                    <a href="{{ url('/personnels/peintres') }}" class="flex items-center justify-center gap-2 w-full first-of-type:rounded-t-md last-of-type:rounded-b-md px-4 py-2.5 text-left text-sm hover:bg-gray-50 disabled:text-gray-500">
                                        Peintre
                                    </a>
                                    <a href="{{ url('/personnels/vitriers') }}" class="flex items-center justify-center gap-2 w-full first-of-type:rounded-t-md last-of-type:rounded-b-md px-4 py-2.5 text-left text-sm hover:bg-gray-50 disabled:text-gray-500">
                                        Vitrier
                                    </a>
                                </div>
                            </div>
                        </div>
                    </ul>
                </div>
                <!-- fin dropdown pour personnel batiment-->
                <div>
                    <ul class="justify- list-none items-center transition-all duration-700 w-full" :class="open ? ['flex','transition-all', 'duration-700'] : ['hidden','transition-all', 'duration-700'] ">
                        <!-- dropdown pour personnel maison-->
                        <div class="flex justify-center">
                            <div
                                x-data="{
                                    open: false,
                                    toggle() {
                                        if (this.open) {
                                            return this.close()
                                        }
    
                                        this.$refs.button.focus()
    
                                        this.open = true
                                    },
                                    close(focusAfter) {
                                        if (! this.open) return
    
                                        this.open = false
    
                                        focusAfter && focusAfter.focus()
                                    }
                                }"
                                x-on:keydown.escape.prevent.stop="close($refs.button)"
                                x-on:focusin.window="! $refs.panel.contains($event.target) && close()"
                                x-id="['dropdown-button']"
                                class="relative"
                            >
                                <!-- Dropdown -->
                                <li class="mx-3 cursor-pointer text-center -z-10 text-white" x-ref="button"
                                    x-on:click="toggle()"
                                    :aria-expanded="open"
                                    :aria-controls="$id('dropdown-button')">
                                    Personnels maison
                                </li>
                                <!-- Panel -->
                                <div
                                    x-ref="panel"
                                    x-show="open"
                                    x-transition.origin.top.left
                                    x-on:click.outside="close($refs.button)"
                                    :id="$id('dropdown-button')"
                                    style="display: none;"
                                    class="absolute left-0 mt-2 w-40 rounded-md bg-white shadow-md"
                                >
                                    <a href="{{ url('/personnels/cuisiniers') }}" class="flex items-center justify-center gap-2 w-full first-of-type:rounded-t-md last-of-type:rounded-b-md px-4 py-2.5 text-left text-sm hover:bg-gray-50 disabled:text-gray-500">
                                        Cuisinier
                                    </a>
    
                                    <a href="{{ url('/personnels/menagers') }}" class="flex items-center justify-center gap-2 w-full first-of-type:rounded-t-md last-of-type:rounded-b-md px-4 py-2.5 text-left text-sm hover:bg-gray-50 disabled:text-gray-500">
                                        Menager
                                    </a>
    
                                    <a href="{{ url('/personnels/nounous') }}" class="flex items-center justify-center gap-2 w-full first-of-type:rounded-t-md last-of-type:rounded-b-md px-4 py-2.5 text-left text-sm hover:bg-gray-50 disabled:text-gray-500">
                                        Nounou
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- fin dropdown pour personnel batiment-->
                    </ul>
                </div>
                @if (!Auth::check())
                <div>
                    <li class="mx-3 list-none text-center rounded-2xl border-orange-400 border flex w-32 h-8 justify-center items-center text-white bg-orange-400 hover:bg-transparent hover:text-white hover:transition hover:duration-500 hover:ease-in-out" x-show="open" x-transition.delay.600ms x-transition.duration.700ms >
                        <a href="{{url('users/login')}}">Se connecter</a>
                    </li>
                </div>
                @else
                <div>
                    <ul class="flex justify-center items-center  list-none text-white">
                        <div class="flex justify-center">
                            <div
                                x-data="{
                                    open: false,
                                    toggle(){
                                        if (this.open){
                                            return this.close()
                                        }
    
                                        this.$refs.button.focus()
    
                                        this.open = true
                                    },
                                    close(focusAfter){
                                        if (! this.open) return
    
                                        this.open = false
    
                                        focusAfter && focusAfter.focus()
                                    }
                                }"
                                x-on:keydown.escape.prevent.stop="close($refs.button)"
                                x-on:focusin.window="! $refs.panel.contains($event.target) && close()"
                                x-id="['dropdown-button']"
                                class="relative"
                            >
                                <!-- Dropdown -->
                                <li class="mx-3 cursor-pointer text-center" x-ref="button"
                                    x-on:click="toggle()"
                                    :aria-expanded="open"
                                    :aria-controls="$id('dropdown-button')">
                                    <img class="h-9 w-9 ob object-cover rounded-full" src="{{ (asset('storage/'.Auth::user()->photo) == null) ? 'storage/images/pngegg.png' : asset('storage/'.Auth::user()->photo)}}" class="w-5 h-5">
                                </li>
                                <!-- Panel -->
                                <div
                                    x-ref="panel"
                                    x-show="open"
                                    x-transition.origin.top.left
                                    x-on:click.outside="close($refs.button)"
                                    :id="$id('dropdown-button')"
                                    style="display: none;"
                                    class="absolute left-0 mt-2 w-40 rounded-md bg-white shadow-md"
                                >
                                    <a href="{{url('users/profile')}}" class="flex items-center justify-center gap-2 w-full first-of-type:rounded-t-md last-of-type:rounded-b-md px-4 py-2.5 text-left text-sm hover:bg-gray-50 disabled:text-gray-500">
                                        Mon profil
                                    </a>
                                    <li class="mx-3 rounded border-orange-400 border mb-4 w-32 h-8 flex justify-center items-center text-white bg-orange-400 hover:bg-transparent hover:text-slate-900 transition duration-500 ease-in-out"><a href="{{url('users/logout')}}">Se déconnecter</a></li>
                                </div>
                            </div>
                        </div>
                    </ul>
                </div>
                @endif
            </div>
        </div>
    </header>
</div>