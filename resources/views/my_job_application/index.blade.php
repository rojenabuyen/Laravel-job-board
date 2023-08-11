<x-layout>
    <x-breadcrumbs class="mb-4" :links="['My Job Applications' => '#']"/>
        
    @forelse ($applications as $application)
        <x-job-card :job="$application->job">
            <div class="flex items-center justify-between text-sm text-gray-500">
                <div>
                    <div>
                        Applied {{ $application->created_at->diffForHumans()}}
                    </div>

                    <div>
                        Other {{ Str::plural('applicant', $application->job->job_applications_count - 1)}}
                        {{ $application->job->job_applications_count - 1 }}
                    </div>

                    <div>
                        Your asking salary ${{ number_format($application->expected_salary) }}
                    </div>

                    <div>
                        Average asking salary ${{ number_format($application->job->job_applications_avg_expected_salary)}}
                    </div>
                </div>

                <div>
                    @if(!$application->job->deleted_at)
                    <form action="{{ route('my-job-applications.destroy', $application ) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <x-button>Widthraw Application</x-button>
                    </form>
                    @endif
                </div>
            </div>
        </x-job-card>
    @empty
        <div class="rounded-md border border-dashed border-slate-500 py-8 text-slate-400">
            <div class="text-center font-medium">
            No job application yet
            </div>
            <div class="text-center">
                Go find some jobs 
            <a class="text-slate-200 hover:underline"
                href="{{ route('jobs.index') }}" >here!</a>
            </div>
        </div>
    @endforelse
</x-layout>