<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>DIP | Profile</title>
    <style>
        :root {
            --main-color: #4a76a8;
        }

        .bg-main-color {
            background-color: var(--main-color);
        }

        .text-main-color {
            color: var(--main-color);
        }

        .border-main-color {
            border-color: var(--main-color);
        }
    </style>
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <link rel="icon" type="image/png" sizes="56x56" href="http://127.0.0.1:8000/storage/images/fav-icon/icon.png">
</head>
<body>





<div class="bg-gray-100">

    <div class="w-full text-white bg-main-color">
        <div x-data="{ open: false }"
            class="flex flex-col max-w-screen-xl px-4 mx-auto md:items-center md:justify-between md:flex-row md:px-6 lg:px-8">
            <div class="p-4 flex flex-row items-center justify-between">
                <a href="{{route('home')}}"
                    class="text-lg font-semibold tracking-widest uppercase rounded-lg focus:outline-none focus:shadow-outline">
                    <img src="{{asset('storage/images/logo/logob.png')}}" width="50px" alt="">
                </a>
                <button class="md:hidden rounded-lg focus:outline-none focus:shadow-outline" @click="open = !open">
                    <svg fill="currentColor" viewBox="0 0 20 20" class="w-6 h-6">
                        <path x-show="!open" fill-rule="evenodd"
                            d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM9 15a1 1 0 011-1h6a1 1 0 110 2h-6a1 1 0 01-1-1z"
                            clip-rule="evenodd"></path>
                        <path x-show="open" fill-rule="evenodd"
                            d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                            clip-rule="evenodd"></path>
                    </svg>
                </button>
            </div>
            <nav :class="{'flex': open, 'hidden': !open}"
                class="flex-col flex-grow pb-4 md:pb-0 hidden md:flex md:justify-end md:flex-row">
                <div @click.away="open = false" class="relative" x-data="{ open: false }">
                    <button @click="open = !open"
                        class="flex flex-row items-center space-x-2 w-full px-4 py-2 mt-2 text-sm font-semibold text-left bg-transparent hover:bg-blue-800 md:w-auto md:inline md:mt-0 md:ml-4 hover:bg-gray-200 focus:bg-blue-800 focus:outline-none focus:shadow-outline">
                        @auth
                            <span>{{Auth::user()->name}}</span>
                        @endauth

                        <img class="inline h-6 rounded-full"
                            src="{{asset('storage/photo/'.Auth::user()->graduate->photo)}}">
                        <svg fill="currentColor" viewBox="0 0 20 20" :class="{'rotate-180': open, 'rotate-0': !open}"
                            class="inline w-4 h-4 transition-transform duration-200 transform">
                            <path fill-rule="evenodd"
                                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </button>
                    <div x-show="open" x-transition:enter="transition ease-out duration-100"
                        x-transition:enter-start="transform opacity-0 scale-95"
                        x-transition:enter-end="transform opacity-100 scale-100"
                        x-transition:leave="transition ease-in duration-75"
                        x-transition:leave-start="transform opacity-100 scale-100"
                        x-transition:leave-end="transform opacity-0 scale-95"
                        class="absolute right-0 w-full mt-2 origin-top-right rounded-md shadow-lg md:w-48">
                        <div class="py-2 bg-white text-blue-800 text-sm rounded-sm border border-main-color shadow-sm">
                            <a class="block px-4 py-2 mt-2 text-sm bg-white md:mt-0 focus:text-gray-900 hover:bg-indigo-100 focus:bg-gray-200 focus:outline-none focus:shadow-outline"
                                href="{{route('user.edit')}}">Modifier mon profile</a>
                            <div class="border-b"></div>
                            <a class="block px-4 py-2 mt-2 text-sm bg-white md:mt-0 focus:text-gray-900 hover:bg-indigo-100 focus:bg-gray-200 focus:outline-none focus:shadow-outline"
                                href="{{route('user.logout')}}">Déconnexion</a>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <!-- End of Navbar -->

    <div class="container mx-auto my-5 p-5">
        <div>
            <a href="{{route('user.profile')}}" class="text-blue-400">Mon profile</a> >> édition
        </div>
        <div class="md:flex no-wrap md:-mx-2">
            <!-- Container -->
            <div class="container mx-auto ">
                <div class="flex justify-center px-6">
                    <!-- Row -->
                    <div class="w-full  xl:w-3/4 lg:w-11/12 flex flex-col items-center">
                        <!-- Col -->
                        <div class="w-full lg:w-7/12 p-5 rounded-lg lg:rounded-l-none overflow-hidden">
                            <h3 class="pt-4 text-2xl text-center">Modifier mon profile</h3>
                            @if (session('success'))
                                <div class="p-3 text-center bg-green-500 text-white rounded">
                                    {!! session('success') !!}
                                </div>
                            @endif

                            @error('password')
                            <span class="text-red-500 mt-3">{{$message}}</span>
                            @enderror

                            @error('cv')
                                <span class="text-red-500">{{$message}}</span>
                            @enderror



                            <form action="{{route('user.update', auth()->user()->id)}}" method="POST" class="px-8 pt-6 pb-8 mb-4 rounded">
                                @csrf
                                <div class="mb-4 md:flex md:justify-between">
                                    <div class="mb-4 md:mr-2 md:mb-0 lg:w-3/6 md:w-full">
                                        <label class="block mb-2 text-sm font-bold text-gray-700" for="firstName">
                                            Nom
                                        </label>
                                        <input
                                            class="w-full px-3 py-2 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                                            id="firstName"
                                            type="text"
                                            name="nom"
                                            placeholder="Nom"
                                            value="{{Auth::user()->name}}"

                                        />
                                        @error('nom')
                                            <span class="text-red-500">{{$message}}</span>
                                        @enderror

                                    </div>
                                    <div class="md:ml-2 lg:w-3/6 md:w-full">
                                        <label class="block mb-2 text-sm font-bold text-gray-700" for="lastName">
                                            Prénoms
                                        </label>
                                        <input
                                            class="w-full px-3 py-2 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                                            id="lastName"
                                            type="text"
                                            name="prenoms"
                                            placeholder="Prénoms"
                                            value="{{old('prenoms') ? old('prenoms') :Auth::user()->prenoms}}"
                                        />
                                        @error('prenoms')
                                            <span class="text-red-500">{{$message}}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="mb-4 md:flex md:justify-between">
                                    <div class="mb-4 md:mr-2 md:mb-0 w-3/6">
                                        <label class="block mb-2 text-sm font-bold text-gray-700" for="firstName">
                                            Sexe
                                        </label>
                                        <select name="sexe" id="">
                                            @foreach ($sexes as $sexe)
                                                <option value="{{$sexe->id}}"
                                                    @if(old('sexe'))
                                                        @if(old('sexe') == $sexe->id)
                                                        selected
                                                        @endif
                                                    @else
                                                        @if(Auth::user()->graduate->sexe->id == $sexe->id)
                                                            selected
                                                        @endif
                                                    @endif
                                                >{{$sexe->libelle}}</option>
                                            @endforeach
                                        </select>
                                        @error('sexe')
                                            <span class="text-red-500">{{$message}}</span>
                                        @enderror

                                    </div>
                                </div>
                                <div class="mb-4 md:flex md:justify-between">
                                    <div class="mb-4 md:mr-2 lg:w-3/6 md:w-full md:mb-0">
                                        <label class="block mb-2 text-sm font-bold text-gray-700" for="firstName">
                                            Address mail
                                        </label>
                                        <input
                                            class="w-full px-3 py-2 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                                            type="email"
                                            name="email"
                                            placeholder="Email"
                                            value="{{old('email') ? old('email'): Auth::user()->email}}"
                                        />
                                        @error('email')
                                            <span class="text-red-500">{{$message}}</span>
                                        @enderror
                                    </div>
                                    <div class="md:ml-2 lg:w-3/6 md:w-full ">
                                        <label class="block mb-2 text-sm font-bold text-gray-700" for="lastName">
                                            Date de naissance
                                        </label>
                                        <input
                                            class="w-full px-3 py-2 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                                            type="date"
                                            name="date_naissance"
                                            value="{{old('date_naissance')?old('date_naissance'):Auth::user()->graduate->dtenaiss_dipl}}"
                                        />
                                        @error('date_naissance')
                                            <span class="text-red-500">{{$message}}</span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="mb-4 md:flex md:justify-between">
                                    <div class="lg:w-3/6 md:w-full mb-4 md:mr-2 md:mb-0">
                                        <label class="block mb-2 text-sm font-bold text-gray-700" for="password">
                                            Contact tel.
                                        </label>
                                        <input
                                            class="w-full px-3 py-2 mb-3 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                                            type="text"
                                            name="contacte"
                                            placeholder=""
                                            value="{{old('contacte') ? old('contacte') : Auth::user()->graduate->contact_dipl}}"
                                        />
                                        @error('contacte')
                                        <span class="text-red-500">{{$message}}</span>
                                    @enderror
                                    </div>
                                    <div class="md:ml-2 lg:w-3/6 md:w-full ">
                                        <label class="block mb-2 text-sm font-bold text-gray-700" for="c_password">
                                            Status
                                        </label>
                                        <select name="status" id="" >
                                            <option value="Freelance"
                                            @if (old('status'))
                                                @if (old('status')=="Freelance")
                                                    selected
                                                @endif
                                            @else
                                                @if (Auth::user()->graduate->statut_dipl=="Freelance")
                                                    selected
                                                @endif
                                            @endif
                                            >Freelance</option>

                                            <option value="Libre"
                                            @if (old('status'))
                                                    @if (old('status')=="Libre")
                                                        selected
                                                    @endif
                                            @else
                                                @if (Auth::user()->graduate->statut_dipl=="Libre")
                                                    selected
                                                @endif
                                            @endif
                                            >Libre</option>
                                            <option value="Occupé" {{old('status')=="Occupé" ?"selected":""}}>Occupé</option>
                                        </select>
                                        @error('status')
                                        <span class="text-red-500">{{$message}}</span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="mb-4 md:flex md:justify-between">
                                    <div class="w-3/6 mb-4 md:mr-2 md:mb-0">
                                        <label class="block mb-2 text-sm font-bold text-gray-700" for="c_password">
                                            Diplome
                                        </label>
                                        <select name="diplome" id="">
                                            @foreach ($diplomes as $diplome)
                                                @if (old('diplome'))
                                                    <option value="{{$diplome->id}}" {{old('diplome')==$diplome->id ?"selected":""}}>{{$diplome->lib_dip}}</option>
                                                @else
                                                    <option value="{{$diplome->id}}" {{$diplome->id == Auth::user()->graduate->graduateLevel->id ? "selected" : ""}}>{{$diplome->lib_dip}}</option>
                                                @endif
                                            @endforeach
                                        </select>
                                        @error('diplome')
                                        <span class="text-red-500">{{$message}}</span>
                                        @enderror
                                    </div>
                                    <div class="md:ml-2 w-3/6 ">
                                        <label class="block mb-2 text-sm font-bold text-gray-700 capitalize" for="c_password">
                                            école
                                        </label>
                                        <select name="ecole" id="">
                                            @foreach ($ecoles as $ecole)
                                                @if (old('ecole'))
                                                    <option value="{{$ecole->id}}" {{old('ecole')==$ecole->id ?"selected":""}}>{{$ecole->lib_eco}}</option>
                                                @else
                                                    <option value="{{$ecole->id}}" {{Auth::user()->graduate->ecole->id == $ecole->id ? "selected" : ""}}>{{$ecole->lib_eco}}</option>
                                                @endif
                                            @endforeach
                                        </select>
                                        @error('ecole')
                                        <span class="text-red-500">{{$message}}</span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="mb-4">
                                    <label class="block mb-2 text-sm font-bold text-gray-700 capitalize" for="c_password">
                                        Spécialité
                                    </label>
                                    <select name="specialite" id="" class="w-3/6">
                                        @foreach ($specialites as $specialite)
                                        @if (old('specialite'))
                                            <option value="{{$specialite->id}}" {{ old('specialite')==$specialite->id ?"selected":""}}>{{$specialite->lib_spec}}</option>
                                        @else
                                            <option value="{{$specialite->id}}" {{Auth::user()->graduate->specialite->id == $specialite->id ? "selected":""}}>{{$specialite->lib_spec}}</option>
                                        @endif

                                        @endforeach
                                    </select>
                                    @error('specialite')
                                    <span class="text-red-500">{{$message}}</span>
                                    @enderror
                                </div>

                                <div class="mb-6 text-center">
                                    <button
                                        class="w-full px-4 py-2 font-bold text-white bg-orange-500 rounded-full hover:bg-orange-700 focus:outline-none focus:shadow-outline"
                                        type="submit"
                                    >
                                        Modifier
                                    </button>
                                </div>

                            </form>

                            <form action="{{route('user.update.password', auth()->user()->id)}}" method="POST">
                                @csrf
                                <h3 class="pt-4 text-2xl text-center">Changer mot de passe</h3>
                                <div class="mb-4 md:flex md:justify-between md:flex-col">

                                    <div class="w-full mb-4 md:mr-2 md:mb-0">
                                        <label class="block mb-2 text-sm font-bold text-gray-700" for="password">
                                            Mot de passe
                                        </label>
                                        <input
                                            class="w-full px-3 py-2 mb-3 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                                            type="password"
                                            name="password"
                                        />
                                        @error('password')
                                        <span class="text-red-500">{{$message}}</span>
                                        @enderror
                                    </div>
                                    <div class="md:ml-2 w-full ">
                                        <label class="block mb-2 text-sm font-bold text-gray-700" for="c_password">
                                            Confirmer mot de passe
                                        </label>
                                        <input
                                        class="w-full px-3 py-2 mb-3 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                                        type="password"
                                        name="password_confirmation"/>
                                    </div>

                                    <div class="mb-6 text-center">
                                        <button
                                            class="w-full px-4 py-2 font-bold text-white bg-orange-500 rounded-full hover:bg-orange-700 focus:outline-none focus:shadow-outline"
                                            type="submit"
                                        >
                                            Modifier
                                        </button>
                                    </div>
                                </div>
                            </form>

                            <form action="{{route('user.update.cv-photo', auth()->user()->id)}}" method="POST" enctype="multipart/form-data" method="post">
                                @csrf
                                <h3 class="pt-4 text-2xl text-center">Changer photo ou cv</h3>
                                <div class="mb-4">
                                    <label class="block mb-2 text-sm font-bold text-gray-700" for="password">
                                        CV
                                    </label>
                                    <input
                                        class="w-full px-3 py-2 mb-3 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                                        name="cv"
                                        type="file"
                                        placeholder=""
                                    />
                                    @error('cv')
                                    <span class="text-red-500">{{$message}}</span>
                                    @enderror
                                </div>
                                <div class="mb-4">
                                    <label class="block mb-2 text-sm font-bold text-gray-700" for="password">
                                        Photo
                                    </label>
                                    <input
                                        class="w-full px-3 py-2 mb-3 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                                        name="photo"
                                        type="file"
                                        placeholder=""
                                    />
                                    @error('photo')
                                    <span class="text-red-500">{{$message}}</span>
                                    @enderror
                                </div>
                                <div class="mb-6 text-center">
                                    <button
                                        class="w-full px-4 py-2 font-bold text-white bg-orange-500 rounded-full hover:bg-orange-700 focus:outline-none focus:shadow-outline"
                                        type="submit"
                                    >
                                        Modifier
                                    </button>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
