@extends('template')

@section('title', "Mary's Profile")

@section('image')
    <img src="{{url('/image/Mary.jpg')}}" class="rounded-4 shadow profile-image" alt="Mary Regina Ang" style="max-width: 70%;">
@endsection

@section('name', 'Mary Regina Ang')

@section('email', 'mary.ang@binus.ac.id')

@section('birthday', '13th October 2002')

@section('course', 'Web Programming')

@section('hobbies', 'Watching Youtube')

@section('description', "I'm Mary, a student majoring in Computer Science and
                        Statistics in Binus University. As a student, I enrolled in various courses such as
                        design, digital marketing, chinese metaphysics, programming, and more to improve my hard-skills.
                        During my second year, I participate in several organizations in my university in
                        order to get new experiences and improve my soft-skills, such as negotiation, public
                        speaking, critical thinking, creative and innovative thinking, and problem solving.")
