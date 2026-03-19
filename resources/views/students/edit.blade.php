<x-layouts.layout>

    <div class="flex justify-center items-center min-h-full bg-gray-200">

<<<<<<< HEAD
        <form method="POST" onsubmit="return confirm('¿Quieres actualizar este estudiante?')" action="{{ route('students.update', $student->id) }}" class="bg-white p-4 rounded-2xl">
            @csrf
            @method('PATCH')
=======
        <form method="POST" action="{{ route('projects.update',$project->id) }}" class="bg-white p-4 rounded-2xl">

            @csrf
            @method('PUT')
>>>>>>> upstream/crudGenerico

            <!-- Name -->
            <div>
                <x-input-label for="name" :value="__('Name')" />
                <x-text-input
                    id="name"
                    class="block mt-1 w-full"
                    type="text"
                    name="name"
<<<<<<< HEAD
                    :value="$student->name"
=======
                    value="{{$project->name}}"
>>>>>>> upstream/crudGenerico
                    required
                />
            </div>

<<<<<<< HEAD
            <!-- Phone -->
            <div class="mt-4">
                <x-input-label for="phone" :value="__('Phone')" />
                <x-text-input
                    id="phone"
                    class="block mt-1 w-full"
                    type="text"
                    name="phone"
                    :value="$student->phone"
                />
            </div>

            <!-- Course -->
            <div class="mt-4">
                <x-input-label for="course" :value="__('Course')" />
                <select name="course">
                    @foreach(['DAW', 'DAM', 'ASIR', 'SMR'] as $course)
                        <option {{ $student->course == $course ? 'selected' : '' }} value="{{ $course }}">{{ $course }}</option>
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
                    :value="$student->enrollment_date"
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
                    :value="$student->email"
                />
            </div>

            <div class="flex justify-end mt-6 space-x-2">
                <x-primary-button>
                    {{ __('Update Student') }}
                </x-primary-button>
                <x-href-button href="{{ route('students.index') }}">
                    {{ __('Cancelar') }}
                </x-href-button>
=======
            <!-- Description -->
            <div class="mt-4">
                <x-input-label for="description" :value="__('Description')" />
                <textarea
                    id="description"
                    name="description"
                    class="block mt-1 w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500"
                    rows="3"

                >{{$project->description}}</textarea>
            </div>

            <!-- Hours -->
            <div class="mt-4">
                <x-input-label for="hours" :value="__('Hours')" />
                <x-text-input
                    id="hours"
                    class="block mt-1 w-full"
                    type="number"
                    name="hours"
                    min="0"
                    value="{{$project->hours}}"
                />
                @error("hours")
                    <div class="text-xm text-red-200"> {{$message}}</div>
                @enderror
            </div>

            <!-- Start Date -->
            <div class="mt-4">
                <x-input-label for="start_date" :value="__('Start date')" />
                <x-text-input
                    id="start_date"
                    class="block mt-1 w-full"
                    type="date"
                    name="start_date"
                    value="{{$project->start_date}}"
                />
            </div>

            <div class="flex justify-end mt-6">
                <x-primary-button>
                    {{ __('Update Project') }}
                </x-primary-button>
>>>>>>> upstream/crudGenerico
            </div>

        </form>

    </div>

</x-layouts.layout>
