<x-card class="mb-4">
    <div class="flex justify-between mb-4 text-slate-400">
      <h2 class="text-lg font-medium">{{ $job->title }}</h2>
      <div class="text-slate-100">
        ${{ number_format($job->salary) }}
      </div>        
    </div>

    <div class="mb-4 flex justify-between text-sm text-slate-100 items-center">
      <div class="flex space-x-4 items-center text-slate-300">
        <div>{{ $job->employer->company_name }}</div>
        <div>{{ $job->location }}</div>
        @if($job->deleted_at)
          <span class="text-xs text-red-500">Closed</span>
        @endif
      </div> 
      <div class="flex space-x-1 txt-xs ">
        <x-tag>
          <a href="{{route('jobs.index', ['experience'=>$job->experience])}}">
            {{ Str::ucfirst($job->experience) }}
          </a>
        </x-tag>
        <x-tag>
          <a href="{{route('jobs.index',['category'=> $job->category])}}">
            {{ $job->category }}
          </a></x-tag>
      </div>
    </div>





    {{ $slot }}
  </x-card>