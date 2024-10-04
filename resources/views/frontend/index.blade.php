<x-front-layout title="Shezo Computers Store">


    <x-slot:slot>
        @include('frontend.home.slider')

        @include('frontend.home.sell')

        @include('frontend.home.hote-deals')

        @include('frontend.home.weekly-best-item')
        @include('frontend.home.services')
        @include('frontend.home.blog')
    </x-slot:slot>

</x-front-layout>
