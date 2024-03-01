<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('All Feedbacks') }}
        </h2>
    </x-slot>

     @foreach ($feedbacks as $feedback)
    <div class="pt-6">
        <div class="max-w-7xl mx-auto px-6">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="relative overflow-x-auto">
                    <a href="{{route('feedback.show', $feedback->id)}}">
                    <div class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                        <h1 class="text-3xl py-6 pl-10 font-bold text-black">{{ $feedback->title }}</h1>
                        <p class="text-base pl-10 font-semibold">{{ $feedback->description }}</p>
                        <div class="flex justify-between px-10">
                        <p class="text-sm italic py-2"><span class="text-sm font-bold pr-3">Category:</span>{{ $feedback->category }}</p>
                        <p class="text-sm italic py-2"><span class="text-sm font-bold pr-3">User:</span>{{ $feedback->user->name }}</p>
                        </div>
                    </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    @endforeach
    <div class="max-w-7xl mx-auto px-6 py-4">
        {{ $feedbacks->links() }}
    </div>
</x-app-layout>
