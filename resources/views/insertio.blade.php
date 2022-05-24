<x-guest-layout>
 
        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />
        @if (Session::get('fail'))
        <div class="alert alert-danger">
            {{ Session::get('fail') }}
        </div>
    @endif

        <form method="POST" action="{{ route('store') }}">
            @csrf

            <!-- Name -->
            <div>
                <x-label for="name" :value="__('Name')" />

                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email"  required />
            </div>

            <div class="mt-4">
                <x-label for="yourself" :value="__('About Yourself')" />

                <x-input id="yourself" class="block mt-1 w-full" type="text" name="yourself" required />
            </div>

            <div class="mt-4">
                <x-label for="school" :value="__('School')" />

                <x-input id="school" class="block mt-1 w-full" type="text" name="school"   />
            </div>
            <!-- Password -->

            <div class="flex items-center justify-end mt-4">
                <x-button class="ml-4">
                    {{ __('Submit') }}
                </x-button>
            </div>
        </form>

</x-guest-layout>
