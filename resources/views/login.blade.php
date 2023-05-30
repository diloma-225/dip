<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>GEST-DIP ISTC | Connexion</title>
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

                <a href="{{route('home')}}"><img src="{{asset('storage/images/logo/logo.png')}}" width="200px" alt=""></a>
                <!-- Col -->
                <div class="w-full lg:w-7/12 bg-white p-5 rounded-lg lg:rounded-l-none overflow-hidden">
                    <h3 class="pt-4 text-2xl text-center uppercase">Connexion</h3>
                    @if (session('error'))
                        <div class="p-3 text-center bg-red-500 text-white rounded">
                            {!! session('error') !!}
                        </div>
                    @endif

                    <form class="px-8 pt-6 pb-8 mb-4 bg-white rounded" action="{{route('login.auth')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-4 md:flex md:justify-between">
                            <div class="mb-4 md:mr-2 md:mb-0 w-3/6">
                                <label class="block mb-2 text-sm font-bold text-gray-700" for="firstName">
                                    Email
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
                                    Password
                                </label>
                                <input
                                    class="w-full px-3 py-2 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                                    type="password"
                                    name="password"
                                    placeholder="Mot de passe"
                                />
                                @error('password')
                                    <span class="text-red-500">{{$message}}</span>
                                @enderror
                            </div>
                        </div>




                        <div class="mb-6 text-center">
                            <button
                                class="w-full px-4 py-2 font-bold text-white bg-blue-500 rounded-full hover:bg-blue-700 focus:outline-none focus:shadow-outline"
                                type="submit"
                            >
                                Connexion
                            </button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
