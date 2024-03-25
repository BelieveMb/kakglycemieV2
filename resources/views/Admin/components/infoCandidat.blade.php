<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900">
            {{ __('Plus d\'informations ') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600">
            {{ __("Pour en savoir plus sur le candidat qui postule pour devenir docteur sur KaK glycémie.") }}
        </p>
    </header>

    
    @if (Session::has('success'))
        <div class="bg-gray-900 my-2  rounded-xl flex justify-between p-3 text-gray-100 font-semibold">
            {{ Session::get('success') }}
            <div class="text-gray-50">
                <i class="bi bi-info-circle"></i>
            </div>
        </div>
    @elseif (Session::has('fail'))
    <div class="bg-red-500 my-2  rounded-xl flex justify-between p-3 text-gray-50 font-semibold animate-pulse delay-700">
        {{ Session::get('fail') }}
        <div class="text-gray-50">
            <i class="bi bi-close-circle"></i>
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
    <form method="post"  class="mt-6 space-y-6">
        @csrf
        <div class="main flex border rounded-xl overflow-hidden  select-none">
            <div class="py-3  px-5 bg-red-500 text-white text-sm font-semibold mr-3">Valider ce médecin ?</div>
            <label class="flex radio p-2 cursor-pointer">
              <input class="my-auto transform scale-125" type="radio" name="choix" value="non" />
              <div class="title px-2">Non</div>
            </label>
          
            <label class="flex radio p-2 cursor-pointer">
              <input class="my-auto transform scale-125" type="radio" name="choix" value="oui" />
              <div class="title px-2">Oui</div>
            </label>
        </div>

        <div class="flex items-center gap-4">
            <x-primary-button>{{ __('Enregistrer') }}</x-primary-button>
        </div>
    </form>
</section>
