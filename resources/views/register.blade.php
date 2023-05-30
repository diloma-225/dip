<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>GEST-DIP ISTC | Inscription</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Favicon -->
    <link rel="icon" type="image/png" sizes="56x56" href="http://127.0.0.1:8000/storage/images/fav-icon/icon.png">
</head>
<!-- component -->
<body class="font-mono bg-gray-200">
    <!-- Container -->
    <div class="container mx-auto">
        <div class="flex justify-center px-6 my-12">
            <!-- Row -->
            <div class="w-full  xl:w-3/4 lg:w-11/12 flex flex-col items-center">

                <a href="{{route('home')}}">
                    <img src="{{asset('storage/images/logo/logo.png')}}" width="200px" alt="">
                </a>
                <!-- Col -->
                <div class="w-full lg:w-7/12 bg-white p-5 rounded-lg lg:rounded-l-none overflow-hidden">
                    <h3 class="pt-4 text-2xl text-center">Inscrivez vous !</h3>
                    @if (session('success'))
                        <div class="p-3 text-center bg-green-500 text-white rounded">
                            {!! session('success') !!}
                        </div>
                    @endif

                    <form class="px-8 pt-6 pb-8 mb-4 bg-white rounded" action="{{route('graduate.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-4 md:flex md:justify-between">
                            <div class="mb-4 md:mr-2 md:mb-0 w-3/6">
                                <label class="block mb-2 text-sm font-bold text-gray-700" for="firstName">
                                    Nom
                                </label>
                                <input
                                    class="w-full px-3 py-2 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                                    id="firstName"
                                    type="text"
                                    name="nom"
                                    placeholder="Nom"
                                    value="{{old('nom')}}"
                                />
                                @error('nom')
                                    <span class="text-red-500">{{$message}}</span>
                                @enderror

                            </div>
                            <div class="md:ml-2 w-3/6 ">
                                <label class="block mb-2 text-sm font-bold text-gray-700" for="lastName">
                                    Prénoms
                                </label>
                                <input
                                    class="w-full px-3 py-2 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                                    id="lastName"
                                    type="text"
                                    name="prenoms"
                                    placeholder="Prénoms"
                                    value="{{old('prenoms')}}"
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
                                        <option value="{{$sexe->id}}" {{old('sexe')==$sexe->id ? "selected" : ""}}>{{$sexe->libelle}}</option>
                                    @endforeach
                                </select>
                                @error('sexe')
                                    <span class="text-red-500">{{$message}}</span>
                                @enderror

                            </div>
                        </div>
                        <div class="mb-4 md:flex md:justify-between">
                            <div class="mb-4 md:mr-2 w-3/6  md:mb-0">
                                <label class="block mb-2 text-sm font-bold text-gray-700" for="firstName">
                                    Address mail
                                </label>
                                <input
                                    class="w-full px-3 py-2 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                                    type="email"
                                    name="email"
                                    placeholder="Email"
                                    value="{{old('email')}}"
                                />
                                @error('email')
                                    <span class="text-red-500">{{$message}}</span>
                                @enderror
                            </div>
                            <div class="md:ml-2 w-3/6 ">
                                <label class="block mb-2 text-sm font-bold text-gray-700" for="lastName">
                                    Date de naissance
                                </label>
                                <input
                                    class="w-full px-3 py-2 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                                    type="date"
                                    name="date_naissance"
                                    value="{{old('date_naissance')}}"
                                />
                                @error('date_naissance')
                                    <span class="text-red-500">{{$message}}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="mb-4 md:flex md:justify-between">
                            <div class="w-3/6 mb-4 md:mr-2 md:mb-0">
                                <label class="block mb-2 text-sm font-bold text-gray-700" for="password">
                                    Contact tel.
                                </label>
                                <input
                                    class="w-full px-3 py-2 mb-3 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                                    type="text"
                                    name="contacte"
                                    placeholder=""
                                    value="{{old('contacte')}}"
                                />
                                @error('contacte')
                                <span class="text-red-500">{{$message}}</span>
                            @enderror
                            </div>
                            <div class="md:ml-2 w-3/6 ">
                                <label class="block mb-2 text-sm font-bold text-gray-700" for="c_password">
                                    Status
                                </label>
                                <select name="status" id="" >
                                    <option value="Freelance" {{old('status')=="Freelance" ?"selected":""}}>Freelance</option>
                                    <option value="Libre" {{old('status')=="Libre" ?"selected":""}}>Libre</option>
                                    <option value="Occupé" {{old('status')=="Occupé" ?"selected":""}}>Occupé</option>
                                </select>
                                @error('status')
                                <span class="text-red-500">{{$message}}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="mb-4 md:flex md:justify-between">
                            <div class="w-3/6 mb-4 md:mr-2 md:mb-0">
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
                            <div class="md:ml-2 w-3/6 ">
                                <label class="block mb-2 text-sm font-bold text-gray-700" for="c_password">
                                    Confirmer mot de passe
                                </label>
                                <input
                                class="w-full px-3 py-2 mb-3 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                                type="password"
                                name="password_confirmation"/>
                            </div>
                        </div>
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
                                            <option value="{{$diplome->id}}">{{$diplome->lib_dip}}</option>
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
                                            <option value="{{$ecole->id}}">{{$ecole->lib_eco}}</option>
                                        @endif
                                    @endforeach
                                </select>
                                @error('ecole')
                                <span class="text-red-500">{{$message}}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="mb-4">
                            <label class="block mb-2 text-sm font-bold text-gray-700" for="password">
                                Matricule
                            </label>
                            <input
                                class="w-full px-3 py-2 mb-3 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                                name="matricule"
                                type="text"
                                placeholder=""
                                value="{{old('matricule')}}"
                            />
                            @error('matricule')
                            <span class="text-red-500">{{$message}}</span>
                            @enderror
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
                                    <option value="{{$specialite->id}}">{{$specialite->lib_spec}}</option>
                                @endif

                                @endforeach
                            </select>
                            @error('specialite')
                            <span class="text-red-500">{{$message}}</span>
                            @enderror
                        </div>



                        <div class="mb-6 text-center">
                            <button
                                class="w-full px-4 py-2 font-bold text-white bg-blue-500 rounded-full hover:bg-blue-700 focus:outline-none focus:shadow-outline"
                                type="submit"
                            >
                                S'incrire
                            </button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
