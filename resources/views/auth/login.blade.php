<x-layout>
    <x-slot:heading>
        Login
    </x-slot:heading>

    <form method="POST" action="/login">
        @csrf
        <div class="space-y-12">
            <div class="border-b border-gray-900/10 pb-12">
                <h2 class="text-base/7 font-semibold text-gray-900">Create a New Job</h2>
                <p class="mt-1 text-sm/6 text-gray-600">We just need.</p>

                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">

                    <x-form-field>
                        <x-form-label for="email"> Email </x-form-label>
                        <div class="mt-2">
                            <x-form-input name="email" id="email" placeholder="emailaddress@gmail.com" required />
                        </div>
                        <x-form-error name="email" />
                    </x-form-field>
                    <x-form-field>
                        <x-form-label for="password"> password </x-form-label>
                        <div class="mt-2">
                            <x-form-input type="password" name="password" id="password" placeholder="******" required />
                        </div>
                        <x-form-error name="password" />
                    </x-form-field>
                </div>
            </div>
        </div>

        <div class="mt-6 flex items-center justify-end gap-x-6">
            <a href="/" class="text-sm font-semibold leading-6 text-gray-900">Cancel</a>
            <x-form-button type="submit">Log In</x-form-button>
        </div>
    </form>

</x-layout>
