<x-layout>
    <x-slot:heading>Job</x-slot:heading>

    <h1 class="font-bold text-lg">{{$job -> title}}</h1>

    <h2>This job pays {{$job -> salary}} annually.</h2>

    <p class="mt-6">
        <x-button href="/jobs/{{ $job -> id }}/edit">Edit Job</x-button>
    </p>

</x-layout>