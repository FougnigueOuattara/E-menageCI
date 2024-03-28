<div>
    <!-- Order your soul. Reduce your wants. - Augustine -->
    <header class="max-w-full h-14 px-44">
        <nav class="flex items-center justify-between w-full h-full ">
            <div><a href="{{url('/')}}"><img class="w-full h-9 hover:cursor-pointer" src="/storage/images/EmenageLogo.svg"></a></div>
            {{-- <button type="button" class="flex flex-col items-center lg:hidden justify-around w-8 h-6 cursor-pointer" x-data="{open:true}" @click="open =! open">
                <span class="block h-1 bg-orange-400 rounded-lg w-7" :class="open ? '' : ['rotate-45','translate-y-2','transition-all','duration-500'] "></span>
                <span class="block h-1 bg-orange-400 rounded-lg w-7" :class="open ? '' : ['opacity-0','transition-opacity','duration-500']"></span>
                <span class="block h-1 bg-orange-400 rounded-lg w-7" :class="open ? '' : ['-rotate-45','-translate-y-2','transition-all','duration-500'] "></span>
            </button> --}}
            <div class="w-2/4 flex items-center justify-evenly">
                <!-- dropdown pour personnel batiment-->
                <ul class="flex justify-center items-center w-1/3 list-none text-slate-900">
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
                                class="absolute left-0 mt-2 w-40 rounded-md bg-white shadow-md"
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
                <!-- fin dropdown pour personnel batiment-->
                <ul class="flex justify-center list-none items-center w-1/3 text-slate-900">
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
                            <li class="mx-3 cursor-pointer text-center" x-ref="button"
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
                @if (!Auth::check())
                <li class="mx-3 rounded-2xl border-orange-400 border w-32 h-8 flex justify-center items-center text-white bg-orange-400 hover:bg-transparent hover:text-slate-900 transition duration-500 ease-in-out"><a href="{{url('users/login')}}">Se connecter</a></li>
                @else
                <ul class="flex justify-center items-center  list-none text-slate-900">
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
                @endif
            </div>
        </nav>
    </header>
</div>