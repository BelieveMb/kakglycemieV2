<div class="bg-white shadow rounded-lg p-4 sm:p-6 xl:p-8  2xl:col-span-2">
    <div class="flex items-center justify-between mb-4">
        <div class="flex-shrink-0">
            <span class="text-base font-normal text-gray-500" >Votre taux de glycémie <i class="bi bi-heart-pulse-fill"></i></span>
            <h3 class="text-2xl sm:text-3xl leading-none font-bold text-gray-900">{{$lastTaux->taux}} dl/ml </h3>
        </div>
        <div class="flex items-center justify-end flex-1 flex-col text-green-500 text-base font-bold">
            <span class="text-red-500">
                Urgence
                <i class=" bi bi-exclamation-circle-fill"></i>
            </span>
            <span class="text-yellow-500" >
                Normal
                <i class="bi bi-emoji-smile-fill"></i>
            </span>
            <span class="text-green-600">
                Très bien
                <i class=" bi bi-heart-fill"></i>
            </span>
        </div>
    </div>
    {{-- <div id="main-chart"></div> --}}

    <div>
        {!! $chart->renderChartJsLibrary() !!}
        {!! $chart->renderHtml() !!}
        {!! $chart->renderJs() !!}
    </div>
</div>