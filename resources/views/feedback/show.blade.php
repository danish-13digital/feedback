<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('View Feedback') }}
        </h2>
    </x-slot>

    <div class="pt-6">
        <div class="max-w-7xl mx-auto px-6">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="relative overflow-x-auto">
                    <div class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                        <h1 class="text-3xl py-6 pl-10 font-bold text-black">{{ $feedback->title }}</h1>
                        <p class="text-base pl-10 font-semibold">{{ $feedback->description }}</p>
                        <div class="flex justify-between px-10">
                        <p class="text-sm italic py-2"><span class="text-sm font-bold pr-3">Category:</span>{{ $feedback->category }}</p>
                        <p class="text-sm italic py-2"><span class="text-sm font-bold pr-3">User:</span>{{ $feedback->user->name }}</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="pl-10 py-4 mb-10">
                <form method="POST" action="{{ route('comment.store') }}">
                    @csrf
                    <textarea
                        name="comment"
                        placeholder="{{ __('Leave Comment') }}"
                        class="block w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm"
                    >{{ old('comment') }}</textarea>
                    <input type="hidden" name="feedback_id" value="{{ $feedback->id }}">
                    <x-input-error :messages="$errors->get('comment')" class="mt-2" />
                    <x-primary-button class="mt-4">{{ __('submit') }}</x-primary-button>
                </form>
            </div>
             
            <div class="py-4">
                <h1 class="text-3xl font-bold text-black mb-3">Comments</h1>
                @foreach ($comments as $comment)
                <div class="mb-3 ml-4 bg-white shadow-sm rounded-lg">

                    <div class="p-6 flex space-x-2">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-600 -scale-x-100" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z" />
                        </svg>
                        <div class="flex-1">
                            <div class="flex justify-between items-center">
                                <div>
                                    <span class="text-gray-800">{{ $comment->user->name }}</span>
                                    <small class="ml-2 text-sm text-gray-600">{{ $comment->created_at->format('j M Y, g:i a') }}</small>
                                </div>
                            </div>
                            <p class="mt-4 text-lg text-gray-900">{{ $comment->comment }}</p>
                        </div>
                    </div>
                </div>
                 @endforeach
            </div>  
        </div>
    </div>

</x-app-layout>