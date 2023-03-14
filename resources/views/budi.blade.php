@extends('template')

@section('title', "Budi's Profile")

@section('image')
    <img src="{{url('/image/Budi.jpg')}}" class="rounded-4 shadow profile-image" alt="Budi Setiawan" style="max-width: 70%;">
@endsection

@section('name', 'Budi Setiawan')

@section('email', 'budi.setiawan@binus.ac.id')

@section('birthday', '27th November 2001')

@section('course', 'Web Programming')

@section('hobbies', 'Playing Games')

@section('description', "I'm Budi, a student majoring in Computer Science and
                        Statistics in Binus University. As a student, I enrolled in various courses such as
                        game programming, web programming, video editing, and more to improve my hard-skills.
                        I also participate in several organizations in my university in order to get new experiences
                        and improve my soft-skills, such as negotiation, public speaking, critical thinking,
                        creative and innovative thinking, and problem solving.")
