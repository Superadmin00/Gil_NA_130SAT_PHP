<x-layout>
    <x-slot:heading>Job</x-slot:heading>

    <h1 class="font-bold text-lg">{{$job['title']}}</h1>

    <h2>This job pays {{$job['salary']}} annually.</h2>

</x-layout>