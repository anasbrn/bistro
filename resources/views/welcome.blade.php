@extends('layouts.header')

@section('content')
        <nav class="flex justify-between items-center mb-4">
            <a href="./"
                ><img class="w-24" src="images/logo.png" alt="" class="logo"
            /></a>
            <ul class="flex space-x-6 mr-6 text-lg">
                <li>
                    <a href="{{route('register')}}" class="hover:text-[#FFB500]">
                        <i class="fa-solid fa-user-plus"></i> Register</a>
                </li>
                <li>
                    <a href="{{route('login')}}" class="hover:text-[#FFB500]"
                        ><i class="fa-solid fa-arrow-right-to-bracket"></i>
                        Login</a
                    >
                </li>
            </ul>
        </nav>

        <section
            class="relative h-72 bg-[#FFB500] flex flex-col justify-center align-center text-center space-y-4 mb-4"
        >
            <div
                class="absolute top-0 left-0 w-full h-full opacity-10 bg-no-repeat bg-center"
                style="background-image: url('images/foods-bg.png')"
            ></div>

            <div class="z-10">
                <h1 class="text-6xl font-bold uppercase text-white">
                    Good<span class="text-black">Foods</span>
                </h1>
                <p class="text-2xl text-gray-200 font-bold my-4">
                    Welcome to Good Foods bistro 
                </p>
                <div>
                    <a
                        href="/register"
                        class="inline-block border-2 border-white text-white py-2 px-4 rounded-xl uppercase mt-2 hover:text-black hover:border-black"
                        >Sign Up to see all plates</a
                    >
                </div>
            </div>
        </section>

        <h1 class="flex justify-center m-4 rounded-lg font-bold">
            Our plates
        </h1>

        <div class="lg:grid lg:grid-cols-2 gap-4 space-y-4 md:space-y-0 mx-4">
            {{-- catgeory1 --}}
            @foreach ($Plates as $Plate)
            <div class="bg-gray-50 border border-gray-200 rounded p-6">
                <div class="flex">
                    
                    <img
                        class="hidden w-48 mr-6 md:block"
                        src="images/{{$Plate->image}}"
                        alt=""
                    />
                    <div>
                        <h3 class="text-2xl">
                            <a href="show.html">{{$Plate->plateName}}</a>
                        </h3>
                        <div class="text-xl font-bold mb-4">{{$Plate->description}}</div>
                        <ul class="flex">
                            <li class="flex items-center justify-center bg-black text-white rounded-xl py-1 px-3 mr-2 text-xs">
                                <button>{{$Plate->category}}</button>
                            </li>
                        </ul>
                        <div class="text-lg mt-4">
                            <i class="fa-solid fa-location-dot"></i> Youssoufia
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
           
        </div>
@endsection