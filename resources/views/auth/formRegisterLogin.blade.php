<script>
    document.addEventListener('DOMContentLoaded', function() {
    const buttonA = document.getElementById('showPatientForm');
    const buttonB = document.getElementById('showMedecinForm');
    const viewA = document.getElementById('PatientForm');
    const viewB = document.getElementById('MedecinForm');

    buttonA.addEventListener('click', function() {
        viewA.style.display = 'block';
        viewB.style.display = 'none';
        buttonB.classList.remove("bg-gray-700");
        buttonA.classList.remove("text-red-500");
        buttonA.classList.add("bg-red-500");
        buttonA.classList.add("text-gray-50");
        buttonB.classList.remove("text-gray-100");
        buttonB.classList.add("text-gray-800");
    });

    buttonB.addEventListener('click', function() {
        viewA.style.display = 'none';
        viewB.style.display = 'block';
        buttonA.classList.remove("bg-red-500");
        buttonA.classList.remove("text-gray-50");
        buttonA.classList.add("text-red-500");
        buttonB.classList.add("bg-gray-700");
        buttonB.classList.add("text-gray-100");

    });
});
</script>