
<div class=" py-4 px-2 rounded">
    <h2 class="text-xl font-semibold lg:text-2xl lg:hidden mb-4">Statistique Glycémie</h2>

    <div class="max-w-2xl mx-auto my-4">
        <form class="flex items-center" method="POST" action="{{ route('Patient.statistiqueGlycemie') }}">
            @csrf
            <label for="dateTrait" class="sr-only">Trouvez une date</label>
            <div class="relative w-full">
                <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                    <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor"
                        viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                            clip-rule="evenodd"></path>
                    </svg>
                </div>
                <input type="date" id="dateTrait" name="searchDate"
                    class="bg-gray-200 border border-gray-300 text-gray-700 outline-none text-sm rounded-lg hover:border-red-500 focus:ring-red-500 focus:border-red-500 block w-full pl-10 p-2.5  "
                    placeholder="Trouvez une date de traitement..." required>

            </div>
            <button
                class="inline-flex items-center py-2.5 px-3 ml-2 text-sm font-medium text-white bg-red-700 rounded-lg border border-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800">
                <svg class="mr-2 -ml-1 w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                </svg>
                Chercher</button>
        </form>
        <!-- <script src="https://unpkg.com/flowbite@1.4.0/dist/flowbite.js"></script> -->
    </div>

    @error('searchDate')
        <div class="bg-red-500 mb-2  rounded-xl flex justify-between p-3 text-gray-100 font-semibold">
            {{ $message }}
            <div class="text-gray-50">
                <i class="bi bi-info-circle"></i>
            </div>
        </div>
    @enderror

    <div id="accordion-collapse" data-accordion="collapse">

        @foreach ($traitementList as $traitement)
            <h2 id="accordion-collapse-heading-{{ $traitement->idtraitement }}" class="w-full">
                <button type="button"
                    class="flex items-center focus:ring-4 focus:ring-gray-200  justify-between p-5 w-[25rem] lg:w-[30rem] font-medium text-left border border-gray-300  border-b-4 text-gray-900 bg-gray-100 hover:bg-gray-300 hover:text-red-500  rounded-t-xl rounded-b-xl"
                    data-accordion-target="#accordion-collapse-body-{{ $traitement->idtraitement }}"
                    aria-expanded="false"
                    aria-controls="accordion-collapse-body-{{ $traitement->idtraitement }}">
                    <span> <i class="bi bi-calendar-heart"></i> {{ $traitement->datetrait }} <i
                            class="bi bi-clock-history"></i> </span>
                    <svg data-accordion-icon class="w-6 h-6 shrink-0 rotate-180" fill="currentColor"
                        viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                            clip-rule="evenodd"></path>
                    </svg>
                </button>
            </h2>
            <div id="accordion-collapse-body-{{ $traitement->idtraitement }}" class="hidden"
                aria-labelledby="accordion-collapse-heading-{{ $traitement->idtraitement }}">
                <div class="p-5 border border-gray-200 rounded-b-xl border-b-4 w-[25rem] lg:w-[30rem]  ">
                    <p class="mb-2 text-gray-600"><i class="bi bi-heart-pulse-fill"></i> Taux de glycémie :
                        <b>{{ $traitement->taux }}</b> ml/dl</p>
                    <p class="mb-2 text-gray-600"><i class="bi bi-clipboard2-pulse-fill"></i> Traitement :
                        <b>{{ $traitement->traitement }}</b>.</p>
                </div>
            </div>
        @endforeach

    </div>


    <script src="https://unpkg.com/flowbite@1.3.3/dist/flowbite.js"></script>
</div>
