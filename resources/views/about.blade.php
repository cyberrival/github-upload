@extends('layouts.app')

@section('content')
<div class="bg-gray-50">

    <div class="px-4 py-8 md:py-16 max-w-screen-xl mx-auto sm:px-6 lg:px-8">
        <h1 class="text-3xl md:text-5xl font-extrabold text-center text-gray-900 leading-tight">
            About
        </h1>
        <div class="mt-6 items-center flex justify-center">
            <div class="flex-shrink-0">

                <img class="h-10 w-10 rounded-full" src=" {{ asset('images/karlie_profile.jpg') }}" alt="">
            </div>
            <div class="ml-3">
                <p class="text-sm leading-5 font-medium text-gray-500">Karlie</p>



            </div>
        </div>
    </div>

    <div class="max-w-screen-lg py-10 mx-auto px-4 sm:px-6 text-gray-700 text-lg">
        <p>We all have a journey or path that has lead us to where we are today. Each journey is unique
            and important no matter the result. I have always liked to be active whether it be playing netball,
            gym classes, or home fitness. Being active helps me feel good not only in body but in mind. I
            haven’t always stuck to a strict routine as such but I do try and be mindful of my eating. That’s
            not to say I don’t enjoy sweet treats.</p>
        <p class="mt-5">
            I have always struggled with being a confident person and tend to second guess myself a lot! I
            have always pushed myself to be better when I just need to do what is makes me happy
            and that energy will flow onto the others around me. Become a better version of myself.
        </p>
        <p class="mt-5">
            Starting my day at the gym at 5 am helps boost me for the day and ready for what the day may
            bring. For over 12 months I have been attending F45 Training. Participating in cardio and
            resistance HIIT workouts which I love it’s not just the workouts themselves but
            the team atmosphere!
        </p>
        <p class="mt-5">
            In this time I have fluctuated
            in my weight and strength which I'm ok with because at the end of the day I'm learning to be
            happy with my results regardless of the scale! Weight isn’t everything and not the only tool we
            can use to measure our fitness. Working out for me is a package deal, I feel so energised and
            have such a positive mindset after I’ve finished. I have learnt so much about myself. 
        </p>
    </div>

</div>
@endsection