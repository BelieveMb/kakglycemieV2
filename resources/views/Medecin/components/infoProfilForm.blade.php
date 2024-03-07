<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900">
            {{ __('Information du profil') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600">
            {{ __("Vous pouvez ajouter ou modifier votre information professionnelle pour être valider par l'administration de 
            KaK Glycémie.") }}
        </p>
    </header>

    <form id="send-verification" method="post" action="{{ route('verification.send') }}">
        @csrf
    </form>
    @if (Session::has('status'))
        <div class="bg-gray-900 my-2  rounded-xl flex justify-between p-3 text-gray-100 font-semibold">
            {{ Session::get('status') }}
            <div class="text-gray-50">
                <i class="bi bi-info-circle"></i>
            </div>
        </div>
    @endif
    <form method="post" action="{{ route('profile.update') }}" class="mt-6 space-y-6">
        @csrf
        @method('patch')
        {{-- :value="old('name', $user->name)" --}}
        <div>
            <x-input-label for="name" :value="__('Nom')" />
            <x-text-input id="name" name="name" type="text" class="border-1 border-b-4 border-red-500 rounded-2xl px-4 py-2 w-full focus:border-2 outline-none focus:border-red-500"  required autofocus autocomplete="name" />
            <x-input-error class="mt-2" :messages="$errors->get('name')" />
        </div>

        <div>
            <x-input-label for="telPat" :value="__('Téléphone')" />
            <x-text-input id="telPat" name="telPat" type="tel" class="border-1 border-b-4 border-red-500 rounded-2xl px-4 py-2 w-full focus:border-2 outline-none focus:border-red-500"  required autofocus autocomplete="telPat" />
            <x-input-error class="mt-2" :messages="$errors->get('telPat')" />
        </div>

        {{-- :value="old('email', $user->email)" --}}
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" name="email" type="email" class="border-1 border-b-4 border-red-500 rounded-2xl px-4 py-2 w-full focus:border-2 outline-none focus:border-red-500" required autocomplete="username" />
            <x-input-error class="mt-2" :messages="$errors->get('email')" />

            {{-- @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! $user->hasVerifiedEmail()) --}}
                {{-- <div>
                    <p class="text-sm mt-2 text-gray-800">
                        {{ __('Your email address is unverified.') }}

                        <button form="send-verification" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                            {{ __('Click here to re-send the verification email.') }}
                        </button>
                    </p>

                    @if (session('status') === 'verification-link-sent')
                        <p class="mt-2 font-medium text-sm text-green-600">
                            {{ __('A new verification link has been sent to your email address.') }}
                        </p>
                    @endif
                </div> --}}
            {{-- @endif --}}
        </div>

        <div class="flex items-center gap-4">
            <x-primary-button>{{ __('Enregistrer') }}</x-primary-button>

            @if (session('status') === 'profile-updated')
                <p
                    x-data="{ show: true }"
                    x-show="show"
                    x-transition
                    x-init="setTimeout(() => show = false, 2000)"
                    class="text-sm text-gray-600"
                >{{ __('Saved.') }}</p>
            @endif
        </div>
    </form>
</section>
