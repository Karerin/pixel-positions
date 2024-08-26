@props(['job'])
<x-panel class="flex gap-x-6">
    <div>
        {{-- <img src="http://placehold.it/90/90" alt="" class="rounded-xl"> --}}
        {{-- <img src="http://picsum.photos/seed/8798789/100/100" alt="" class="rounded-xl"> --}}
        {{-- <x-employer-logo></x-employer-logo> --}}
        <x-employer-logo :employer="$job->employer" />
    </div>
    <div class="flex-1 flex flex-col">
        <a href="#" class="self-start text-sm text-gray-400">{{ $job->employer->name }}</a>

        <h3 class="font-blod text-xl mt-3 group-hover:text-blue-600 transition-colors duration-300">
            {{-- target="_blank" to open the url to the new tab --}}
            <a href="{{ $job->url }}" target="_blank">
                {{ $job->title }}
            </a>
        </h3>
        <p class="text-sm text-gray-400 mt-auto">{{ $job->salary }}</p>
    </div>
    <div class="">
        <div>
            @foreach ($job->tags as $tag)
                <x-tag :$tag />
            @endforeach
        </div>
    </div>
</x-panel>
