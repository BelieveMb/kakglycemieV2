<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900">
            {{ __('Plus d\'informations ') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600">
            {{ __("Pour en savoir plus sur le candidat qui postule pour devenir docteur sur KaK glycémie.") }}
        </p>
    </header>

    
    @if (Session::has('status'))
        <div class="bg-gray-900 my-2  rounded-xl flex justify-between p-3 text-gray-100 font-semibold">
            {{ Session::get('status') }}
            <div class="text-gray-50">
                <i class="bi bi-info-circle"></i>
            </div>
        </div>
    @endif
    <div class="my-4">
        <p class="mb-2 text-gray-600 font-semibold">La description du docteur</p>
        <p>{{$candidatDetails->description}} </p>
    </div>
    <div >
        <p class="mb-2 text-gray-600 font-semibold"> L'ordre de médecin</p>
        <p>{{$candidatDetails->ordreMed}} afficher le pdf</p>
    </div>
    <form method="post" action="{{ route('profile.update') }}" class="mt-6 space-y-6">
        @csrf
        @method('patch')
        <div class="main flex border rounded-xl overflow-hidden  select-none">
            <div class="py-3  px-5 bg-red-500 text-white text-sm font-semibold mr-3">Valider ce médecin ?</div>
            <label class="flex radio p-2 cursor-pointer">
              <input class="my-auto transform scale-125" type="radio" name="sfg" />
              <div class="title px-2">Non</div>
            </label>
          
            <label class="flex radio p-2 cursor-pointer">
              <input class="my-auto transform scale-125" type="radio" name="sfg" />
              <div class="title px-2">Oui</div>
            </label>
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
