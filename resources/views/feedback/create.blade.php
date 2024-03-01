<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create A New Feedback') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-2xl mx-auto px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h1 class="font-bold text-2xl pb-3">Feedback Form</h1>
                    <form method="POST" action="{{ route('feedback.store') }}" >
                        @csrf
                    <div class="mb-5">
                        <label for="title" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Title <span class="text-red-600 text-base">*</span></label>
                        <input type="title" id="title" name="title" value="{{old('title')}}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" />
                                    <x-input-error :messages="$errors->get('title')" class="mt-2" />

                    </div>
                    <div class="mb-5">
                        <label for="description" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Description <span class="text-red-600 text-base">*</span></label>
                        <input type="description" name="description" id="description" value="{{old('description')}}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" />
                                <x-input-error :messages="$errors->get('description')" class="mt-2" />
                    </div>
                     <div class="mb-5">
                        <label for="category" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Category <span class="text-red-600 text-base">*</span></label>
                        <input type="category" id="category" name="category" value="{{old('category')}}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" />
                                <x-input-error :messages="$errors->get('category')" class="mt-2" />

                    </div>
                                <x-input-error :messages="$errors->get('message')" class="mt-2" />

                            <x-primary-button class="mt-4">{{ __('Submit') }}</x-primary-button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>