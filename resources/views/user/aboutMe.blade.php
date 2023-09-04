@extends('user.layouts.master')
@section('title')
    {{ $title }}
@endsection
@section('content')
    <div class="mt-10 mb-24 sm:my-24 mx-6 sm:mx-12">
        <div class="flex justify-center">
            <div class="block py-9 sm:py-16 px-6 sm:px-12 w-full sm:w-9/12 bg-white border border-gray-200 rounded-sm ">
                <div class="text-center">
                    <p class="text-4xl sm:text-4xl w-full tracking-tighter leading-tight font-bold text-black pb-6">About Me
                    </p>
                    <div class="flex justify-center items-center pb-6">
                        <span
                            class="self-center text-2xl font-semibold whitespace-nowrap bg-black text-white px-6 py-1 rounded-sm">alifakbar</span>
                    </div>
                    <p class="text-base sm:text-base w-full tracking-tighter leading-tight font-normal pb-3"><span
                            class="bg-yellow-500">
                            Enjoy
                            exploring, creating, and imagining where limitless creative energy is
                            everything.
                        </span>
                    </p>
                    <p class="text-xs sm:text-xs w-full tracking-tighter leading-tight font-normal text-black pb-6">Created
                        At Jun
                        12, 2023 | Made By <a href="{{ route('home.portfolio') }}" class="underline">alifakbarr</a></p>
                    <!-- <hr class="border border-white rounded-lg mt-2 mb-2 w-full"> -->
                </div>

                <div class="mt-10">
                    <p class="text-base sm:text-lg w-full tracking-tight leading-tight font-bold text-black pb-2 ">
                        Welcome
                        to alifakbar!</p>
                    <div class="text-black bg-gray-100 rounded p-6 ">
                        <p class="text-sm sm:text-base w-full tracking-tighter leading-tight font-normal pb-3"><b>Where</b>
                            imagination and creativity unite,
                            Each idea becomes a gem, shining in vibrant light.
                            Explore the ocean of thoughts, find new inspiration,
                            And let the love for art lead your every action.</p>
                        <p class="text-sm sm:text-base w-full tracking-tighter leading-tight font-normal pb-3"><b>In this
                                Cove,</b>
                            we embrace beautiful creations,
                            Believing every innovation builds brighter foundations.
                            Together, let's shape a world full of wonder,
                            In a place where creativity thrives in love and surrender.</p>
                    </div>
                </div>
                <div class="mt-5">
                    <p class="text-base sm:text-lg w-full tracking-tight leading-tight font-bold text-black pb-2 ">
                        Philosophy about alifakbar</p>
                    <div class="text-black bg-gray-100 rounded p-6">
                        <p class="text-sm sm:text-base w-full tracking-tighter leading-tight font-normal pb-3">
                            <b>alifakbar :</b> My website about writing is a place where the power of words converges with
                            the magic of storytelling, radiating inspiration and wisdom. We believe that unexpected
                            creativity can emerge from hidden corners, and we present this space as a container where words
                            become art, building bridges between writers and readers, and enriching souls through diverse
                            stories. In words, we find the power to change the world, enlighten minds, and shape a community
                            that loves literary expression.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
