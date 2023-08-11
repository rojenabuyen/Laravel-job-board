<x-layout>
    <x-breadcrumbs :links="['My Jobs' => '#']" class="mb-4"/>

    <div class="mb-8 text-right">
        <x-link-button href="{{ route('my-jobs.create' )}}">Add New</x-link-button>
    </div>

    @forelse ($jobs as $job)
        <x-job-card :$job>
            <div class="text-xs text-slate-300">
                @forelse ($job->jobApplications as $application)
                    <div class="mb-4 flex items-center justify-between">
                        <div>
                            <div>{{ $application->user->name }}</div>
                            <div>
                                Applied {{ $application->created_at->diffForHumans() }}
                            </div>
                            <div>
                                Download CV
                            </div>
                        </div>
                        <div>${{ number_format($application->expected_salary)}}</div>
                    </div>
                @empty
                    <div class="rounded-md  p-8">
                        <div class="text-center font-medium">No Applications yet</div>
                    </div>
                @endforelse

                <div class="flex space-x-2">
                    @if(!$job->deleted_at)
                    <x-link-button href="{{ route('my-jobs.edit', $job) }}">Edit</x-link-button>

                    <form action="{{ route('my-jobs.destroy', $job) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <x-button>Close job</x-button> 
                    </form>
                    @endif
                </div>
            </div>
        </x-job-card>
    @empty
    <div class="rounded-md border border-dashed border-slate-300 p-8">
        <div class="text-center font-medium text-slate-100">No Applications yet</div>
        <div class="text-center text-slate-100"></label>Post your first job 
            <a class="text-slate-500 hover:underline" 
            href="{{ route('my-jobs.create') }}">
            here!
            </a>
        </div>
    </div>
    @endforelse
</x-layout>