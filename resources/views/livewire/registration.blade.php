<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Profile') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-2xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8  dark:bg-gray-800 sm:rounded-lg">
                <div class="max-w-2xl">
                    <livewire:auth.register />
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
