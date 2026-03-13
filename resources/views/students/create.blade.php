<x-layouts.layout>

    <div class="flex justify-center items-center min-h-full bg-gray-200">

        <form method="POST" action="{{ route('students.store') }}" class="bg-white p-4 rounded-2xl">
            @csrf

            <!-- Name -->
            <div>
                <x-input-label for="name" :value="__('Name')" />
                <x-text-input
                    id="name"
                    class="block mt-1 w-full"
                    type="text"
                    name="name"
                    value="{{ old('name') }}"
                    required
                />
            </div>

            <!-- Phone -->
            <div class="mt-4">
                <x-input-label for="phone" :value="__('Phone')" />
                <x-text-input
                    id="phone"
                    class="block mt-1 w-full"
                    type="text"
                    name="phone"
                    value="{{ old('phone') }}"
                />
            </div>

            <!-- Course -->
            <div class="mt-4">
                <x-input-label for="course" :value="__('Course')" />
                <select name="course">
                    @foreach(['DAW', 'DAM', 'ASIR', 'SMR'] as $course)
                        <option {{ old('course') == $course ? 'selected' : '' }} value="{{ $course }}">{{ $course }}</option>
                    @endforeach
                </select>

                @error('course')
                <div class="text-sm text-red-500">{{ $message }}</div>
                @enderror
            </div>

            <!-- Enrollment Date -->
            <div class="mt-4">
                <x-input-label for="enrollment_date" :value="__('Enrollment Date')" />
                <x-text-input
                    id="enrollment_date"
                    class="block mt-1 w-full"
                    type="date"
                    name="enrollment_date"
                    value="{{ old('enrollment_date') }}"
                />
            </div>

            <!-- Email -->
            <div class="mt-4">
                <x-input-label for="email" :value="__('Email')" />
                <x-text-input
                    id="email"
                    class="block mt-1 w-full"
                    type="text"
                    name="email"
                    value="{{ old('email') }}"
                />
            </div>

            <div class="flex justify-end mt-6">
                <x-primary-button>
                    {{ __('Create Student') }}
                </x-primary-button>
            </div>

        </form>

    </div>

</x-layouts.layout>
