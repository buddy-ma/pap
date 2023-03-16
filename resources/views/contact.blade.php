@extends('layouts.app')
@section('title', 'Welcome')
@section('css')
    @php $ar = App::getLocale() == 'ar' ? '_ar' : ''; @endphp
    <link href="../assets/css/inner-page.css" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/css/buddy'.$ar.'.css') }}" rel="stylesheet" type="text/css">
    <style>
        .mobile-screen{
            --animate-delay: 7s;
            /* animation-duration: 7s; */
        }
        .animate__slideInUp{
            --animate-duration: 12s;
        }


    </style>
@endsection
@section('content')
    <footer class="event contact set-relative bg bg-img bg-about p-b-0 event-gradient" id="contact">
        @livewire('contact-livewire')
    </footer>
@endsection
@section('js')
    <script src="{{ asset('assets/js/script6.js') }}"></script>
    <script src="{{ asset('assets/js/script2.js') }}"></script>
@endsection
