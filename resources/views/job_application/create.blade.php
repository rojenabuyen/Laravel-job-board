<x-layout>
        <x-breadcrumbs class="mb-4 "
        :links="['Jobs' => route('jobs.index'), $job->title 
            => route('jobs.show', $job), 
            'Apply' => '#']" />

        <x-job-card :$job/>
        <x-card>
            <h2 class="mb-4 text-lg font-medium text-slate-100">
                More {{ $job->employer->company_name }} Jobs
            </h2>

            <form action="{{ route('job.application.store', $job) }}" method="POST"
            enctype="multipart/form-data">
            @csrf
                <div class="mb-4">
                    <x-label for="expected_salary" :required="true">
                        Expected Salary
                    </x-label>
                    <x-text-input type="number" name="expected_salary"/>
                </div>
                <div class="mb-4">
                    <x-label :required="true" >Upload CV</x-label>
                    <x-text-input type="file" name="cv" class=""/>
                    
    <p class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="file_input_help">PNG (MAX. 2048KB).</p>

                </div>

                <x-button class="w-full">Apply</x-button>
            </form>
        </x-card>
</x-layout>