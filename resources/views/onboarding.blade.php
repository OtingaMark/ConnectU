<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Onboarding
        </h2>
    </x-slot>

    <div class="py-10">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white shadow rounded-lg p-8">
                <h1 class="text-2xl font-bold mb-2">What are you looking for?</h1>

                <p class="text-gray-600 mb-6">
                    Choose what you want to use ConnectU for. You can add or remove modules later.
                </p>

                <form method="POST" action="{{ route('onboarding.save') }}">
                    @csrf

                    <label class="flex items-start gap-3 p-4 border rounded-lg hover:bg-gray-50 cursor-pointer">
                        <input type="checkbox" name="modules[]" value="study" class="mt-1 rounded" checked>
                        <div>
                            <div class="font-semibold">Study partners & groups</div>
                            <div class="text-sm text-gray-600">Match by university, course, unit, and availability.</div>
                        </div>
                    </label>

                    <label class="flex items-start gap-3 p-4 border rounded-lg hover:bg-gray-50 cursor-pointer">
                        <input type="checkbox" name="modules[]" value="faith" class="mt-1 rounded" checked>
                        <div>
                            <div class="font-semibold">Faith & Bible discussions</div>
                            <div class="text-sm text-gray-600">Join Bible study groups, mentorship, and faith community.</div>
                        </div>
                    </label>

                    <label class="flex items-start gap-3 p-4 border rounded-lg hover:bg-gray-50 cursor-pointer">
                        <input type="checkbox" name="modules[]" value="projects" class="mt-1 rounded">
                        <div>
                            <div class="font-semibold">Projects & career growth</div>
                            <div class="text-sm text-gray-600">Find teammates, build projects, and grow your career.</div>
                        </div>
                    </label>

                    <div class="pt-2 flex items-center gap-4">
                        <button type="submit"
                            class="inline-flex items-center px-6 py-2 bg-blue-600 border border-transparent rounded-md font-semibold text-white hover:bg-blue-700">
                            Continue
                        </button>

                        <a href="{{ route('dashboard') }}"
                           class="inline-flex items-center px-4 py-2 border rounded-md text-gray-700 hover:bg-gray-100">
                            Skip for now
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
