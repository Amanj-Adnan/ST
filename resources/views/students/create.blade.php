<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('post_student') }}">
        @csrf

        <!-- Name -->
            <div>
                <x-label for="name" :value="__('Name')" />

                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
            </div>

            <div>
                <x-label for="university" :value="__('University')" />

                <x-input id="university" class="block mt-1 w-full" type="text" name="university" :value="old('university')" required autofocus />
            </div>

            <div>
                <x-label for="college" :value="__('College')" />

                <x-input id="college" class="block mt-1 w-full" type="text" name="college" :value="old('college')" required autofocus />
            </div>


            <div>
                <x-label for="department" :value="__('Department')" />

                <x-input id="department" class="block mt-1 w-full" type="text" name="department" :value="old('department')" required autofocus />
            </div>




            <!-- Confirm Password -->


            <div class="flex items-center justify-end mt-4">


                <x-button class="ml-4">
                    {{ __('Create Student') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
