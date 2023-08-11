<x-layout>
    <x-breadcrumbs class="mb-4 "
    :links="['Jobs' => route('jobs.index'), $job->title => '#']" />
    <x-job-card :$job>
        <p class="txt-sm text-slate-100 mb-4">
            {!! nl2br(e($job->description)) !!}
          </p>


          @can('apply', $job)
            <x-link-button :href="route('job.application.create', $job)">Apply Now</x-link-button>
            @else

            @auth
            <div class="text-center text-medium font-medium text-slate-400">
                You already applied to this job.
            </div>
                @else
                <div class="text-center text-medium font-medium text-slate-400">
                    Please <a class="text-slate-200" href="{{ route('auth.create')}}">Sign In</a> to apply for this job.
                </div>
            @endauth
           
          @endcan
    </x-job-card>

    <x-card class="mg-4 text-slate-100">
        <h2 class="mb-4 text-lg font-medium">
            More {{ $job->employer->company_name }} Jobs
        </h2>

        <div class="text-small text-slate-200">
            @foreach ($job->employer->jobs as $otherJob)
                <div class="mb-4 flex justify-between">
                    <div>
                        <div class="text-slate-400">
                            <a href="{{ route('jobs.show', $otherJob) }}">
                                {{ $otherJob->title }}
                            </a>
                        </div>
                        <div class="text-xs">
                            {{ $otherJob->created_at->diffForHumans()}}
                        </div>
                    </div>
                    <div class="text-xs">
                        ${{number_format($otherJob->salary)}}
                    </div>
                </div>
            @endforeach
        </div>
    </x-card>
</x-layout>