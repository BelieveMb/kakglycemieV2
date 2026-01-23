<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Kak Glycémie - Maintenance</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(135deg, #f00a0a, #bb5b60);
            color: white;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            text-align: center;
            padding: 20px;
        }
        .container {
            background: rgba(0, 0, 0, 0.7);
            padding: 40px 60px;
            border-radius: 20px;
            max-width: 600px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3);
            backdrop-filter: blur(10px);
        }
        h1 {
            font-size: 2.5rem;
            margin-bottom: 20px;
            font-weight: 600;
        }
        p {
            font-size: 1.2rem;
            margin-bottom: 30px;
            opacity: 0.9;
        }
        .timer {
            font-size: 4rem;
            font-weight: bold;
            color: #ffeb3b;
            margin: 20px 0;
        }
        .note {
            font-size: 0.9rem;
            opacity: 0.8;
            margin-top: 30px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>🔧 Kak Glycémie en Maintenance</h1>
        <p>Nous améliorons votre expérience pour un service encore plus fiable.</p>

        <div class="timer" id="countdown">23:00:00</div>

        <p class="note">
            Le site sera de retour très bientôt.<br>
            Merci pour votre patience.
        </p>
    </div>

    <script>
        // Temps de départ : 23 heures
        let totalSeconds = 23 * 60 * 60;

        function updateTimer() {
            const hours = Math.floor(totalSeconds / 3600);
            const minutes = Math.floor((totalSeconds % 3600) / 60);
            const seconds = totalSeconds % 60;

            document.getElementById('countdown').textContent = 
                `${hours.toString().padStart(2, '0')}:${minutes.toString().padStart(2, '0')}:${seconds.toString().padStart(2, '0')}`;

            if (totalSeconds <= 0) {
                clearInterval(timerInterval);
                document.getElementById('countdown').textContent = "✅ Prêt !";
                location.reload(); // Optionnel : recharge
            } else {
                totalSeconds--;
            }
        }

        // Met à jour chaque seconde
        const timerInterval = setInterval(updateTimer, 1000);
    </script>
</body>
</html>