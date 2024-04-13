    <div class="flex flex-col items-center justify-between mb-4">
        <div class="flex-shrink-0 text-center">
            <span class="text-base font-normal text-gray-500" >Le taux de glycémie du patient<i class="bi bi-heart-pulse-fill"></i></span>
            @if (isset($lastTaux->taux))
                <h3 class="text-2xl sm:text-3xl leading-none font-bold text-gray-900">{{$lastTaux->taux}} mg/dl </h3>
            @endif
        </div>
        <div class="flex items-center justify-end content-end flex-1 flex-col  text-base font-bold">
            @if (isset($lastTaux->taux))
                @php $taux = $lastTaux->taux @endphp                            
                @if ($taux >= 150 && $taux <= 450) 
                    <span class="text-red-500">
                        Urgence
                        <i class=" bi bi-exclamation-circle-fill"></i>
                    </span>
                @elseif ($taux >= 130 && $taux < 150) 
                    <span class="text-yellow-500" >
                        Normal
                        <i class="bi bi-emoji-smile-fill"></i>
                    </span>
                @elseif ($taux >= 90 && $taux < 130)
                    <span class="text-green-600">
                        Très bien
                        <i class=" bi bi-heart-fill"></i>
                    </span>         
                @elseif ($taux >= 0 && $taux < 90)
                    <span class="text-red-500">
                        Urgence
                        <i class=" bi bi-exclamation-circle-fill"></i>
                    </span>
                @else
                    @php $statut = "Rien à signaler" @endphp    
                @endif
            @else
                <div class="flex gap-0  w-[21rem] text-center text-gray-700 animate-pulse delay-600 hover:text-red-400 ">
                    Le patient n'a pas commencé son traitement
                    <i class="lg:flex hidden"> <i class="bi bi-arrow-right "></i></i>
                    <span class="lg:hidden flex"> <i class="bi bi-arrow-down "></i></span>
                </div>
            @endif


            
            
            
        </div>
    </div>

    <div>
        {!! $chart->renderChartJsLibrary() !!}
        {!! $chart->renderHtml() !!}
        {!! $chart->renderJs() !!}
    </div>

    <div class="mt-10 lg:mt-[10rem] px-5 flex flex-col items-baseline justify-end text-gray-600">
        <p>Voici la présentation de la glycémie du patient** :</p>
        <ul class="list-disc px-6">
            <li>La colonne c'est le taux de glycémie du patient</li>
            <li>La ligne c'est le jour de traitement pris par le patient</li>
        </ul>
    </div>
