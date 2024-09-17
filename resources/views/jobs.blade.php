<x-layout>
    <x-slot:heading>Job Listing</x-slot:heading>

    <div class="space-y-4">
        @foreach ($jobs as $job)
        <a href="/jobs/{{ $job['id'] }}"
            class="block px-4 py-6 border border-gray-300 rounded-lg hover:bg-gray-600 hover:text-white">
            <div class="font-bold text-blue-400">
                {{ $job->employer->name }}
            </div>
            <div>
                <strong>{{ $job['title'] }}</strong>: Pays {{ $job['salary'] }} per year.
            </div>
        </a>
        @endforeach

        <div>
            {{ $jobs->links() }}
        </div>

    </div>

</x-layout>