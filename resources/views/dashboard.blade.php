<x-layout>
    <x-slot name="header">
        <x-dashboard-header name="header">
        </x-dashboard-header>
    </x-slot>
    <x-slot name="content">
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200">
                        @if (!$user->profile_completed)
                           <x-update-user-form :user="$user">
                            </x-update-user-form>
                            @else
                            <x-user-profile :user="$user">
                            </x-user-profile>
                        @endif                        
                    </div>
                </div>
            </div>
        </div>
    </x-slot>
    
</x-layout>
