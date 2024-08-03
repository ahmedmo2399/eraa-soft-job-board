<x-layout>
    <x-breadcrumbs class="mb-4" :links="['jobs' => route('jobs.index')]" />

    @foreach ($jobs as $job)
        <x-job-card class="mb-4" :$job>
            <div>
                <x-Link-Button :href="route('jobs.show', $job)">Show</x-Link-Button>
            </div>
        </x-job-card>
    @endforeach
</x-layout>
