<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900">
            {{ __('Information du profil') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600">
            {{ __("Vous pouvez ajouter ou modifier vos infos professionnelle pour être valider par l'administration de 
            KaK Glycémie.") }}
            {{-- à continuer demain, formu de medecin --}}
        </p>
    </header>

    <form id="send-verification" method="post" action="{{ route('verification.send') }}">
        @csrf
    </form>
    @if (Session::has('success'))
        <div class="bg-gray-900 my-2  rounded-xl flex justify-between p-3 text-gray-100 font-semibold animate-pulse delay-700">
            {{ Session::get('success') }}
            <div class="text-gray-50">
                <i class="bi bi-check-circle"></i>
            </div>
        </div>
    @elseif (Session::has('fail'))
    <div class="bg-red-500 my-2  rounded-xl flex justify-between p-3 text-gray-50 font-semibold animate-pulse delay-700">
        {{ Session::get('success') }}
        <div class="text-gray-50">
            <i class="bi bi-close-circle"></i>
        </div>
    </div>
    @endif
    <form method="post"  class="mt-6 space-y-6">
        @csrf
        {{-- @method('patch') --}}
        {{-- :value="old('name', $user->name)" --}}
        <div>
            <x-input-label for="ordreMed" :value="__("Notification de l'ordre de médecin (pdf)")" />
            <x-text-input id="ordreMed" name="ordreMed" type="file" class="border-1 border-b-4 border-red-500 rounded-2xl px-4 py-2 w-full focus:border-2 outline-none focus:border-red-500"  required autofocus autocomplete="name" />
            <x-input-error class="mt-2" :messages="$errors->get('ordreMed')" />
        </div>

        <div>
            <x-input-label for="hopital" :value="__('Hôpital ( Institution de prestation) ')" />
            <x-text-input id="hopital" name="hopital" type="text" aria-valuetext="{{ old('hopital') }}" class="border-1 border-b-4 border-red-500 rounded-2xl px-4 py-2 w-full focus:border-2 outline-none focus:border-red-500"  required  autocomplete="hopital" />
            <x-input-error class="mt-2" :messages="$errors->get('hopital')" />
        </div>

        <div>
            <x-input-label for="specialite" :value="__('Votre  Spécialité  ')" />
            <x-text-input id="specialite" name="specialite" type="text"  aria-placeholder="votre domaine de spécialisation" class="border-1 border-b-4 border-red-500 rounded-2xl px-4 py-2 w-full focus:border-2 outline-none focus:border-red-500"  required  autocomplete="specialite" />
            <x-input-error class="mt-2" :messages="$errors->get('specialite')" />
        </div>

        {{-- :value="old('description', $user->email)" --}}
        <div>
            <x-input-label for="description" :value="__('description')" />
            <textarea id="description" name="description"  
            class="border-1 border-b-4 border-red-500 rounded-2xl px-4 py-2 w-full focus:border-2 outline-none focus:border-red-500" required autocomplete="descritpion" >
            {{ old('description') }}
            </textarea>
            <x-input-error class="mt-2" :messages="$errors->get('description')" />

        </div>

        <div class="flex items-center gap-4">
            <x-primary-button>{{ __('Enregistrer') }}</x-primary-button>

            @if (session('success'))
                <p
                    x-data="{ show: true }"
                    x-show="show"
                    x-transition
                    x-init="setTimeout(() => show = false, 2000)"
                    class="text-sm text-gray-600"
                >{{ session('success') }}</p>
            @endif
        </div>
    </form>
</section>
