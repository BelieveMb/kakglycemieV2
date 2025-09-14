<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<div class="bg-white shadow rounded-lg p-4 sm:p-6 xl:p-8  2xl:col-span-2">
    <div class="flex flex-col items-center justify-between mb-4">
        <div class="flex-shrink-0">
            <span class="text-base font-normal text-gray-500" >Votre taux de glycémie <i class="bi bi-heart-pulse-fill"></i></span>
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
                    Commencez votre traitement dès maintenant 
                    <i class="lg:flex hidden"> <i class="bi bi-arrow-right "></i></i>
                    <span class="lg:hidden flex"> <i class="bi bi-arrow-down "></i></span>
                </div>
            @endif


            
            
            
        </div>
    </div>

    {{-- <div id="main-chart"></div> --}}

    {{-- <div>
        {!! $chart->renderChartJsLibrary() !!}
        {!! $chart->renderHtml() !!}
        {!! $chart->renderJs() !!}
    </div> --}}

    <div>
      <canvas id="myChart" width="400" height="200"></canvas>
    </div>
    <div class="mt-10 lg:mt-[6rem] px-5 flex flex-col items-baseline justify-end text-gray-600">
        <p>Voici la présentation de votre  glycémie** :</p>
        <ul class="list-disc px-6 text-sm lg:text-base">
            <li>La colonne c'est votre taux de glycémie.</li>
            <li>La ligne c'est le jour de votre traitement.</li>
        </ul>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <script>
    const ctx = document.getElementById('myChart');

    new Chart(ctx, {
        type: 'line',
        data: {
            labels: {!! json_encode($jours) !!}, 
            // labels: [1, 2, 3, 4, 5, 6],
            datasets: [{
                label: 'Taux de Glycémie',
                // data: [350, 150, 83, 230],
                data: {!! json_encode($tauxGlycemie) !!}, // Taux récupérés
                borderColor: 'rgba(75, 192, 192, 1)',
                backgroundColor: 'rgba(75, 192, 192, 0.2)',
                borderWidth: 2,
                fill: true,
            }]
        },
    
        options: {
            responsive: true,
            scales: {
                y: {
                    beginAtZero: true,
                    title: {
                        display: true,
                        text: 'Taux'
                    }
                },
                x: {
                    title: {
                        display: true,
                        text: 'Jour'
                    }
                }
            }
        }
    });
    </script>

</div>