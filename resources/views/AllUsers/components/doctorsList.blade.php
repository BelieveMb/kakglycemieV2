 <section class="bg-gray-700 px-8 py-10  lg:px-40 lg:py-20 ">
  <div class="relative flex-[1_auto] flex flex-col break-words min-w-0 bg-clip-border rounded-[.95rem] border border-dashed border-stone-200 bg-white ">  
    <h3 class="px-2 mb-2 text-[2rem] font-semibold text-gray-700" >Nos médecins </h3>
    <ul class="grid grid-cols-4 gap-2 px-2 py-3">
       @if (!$doctorList->isEmpty() )
                    @foreach ($doctorList as $doctor)
      <li class="flex items-center flex-col cursor-pointer hover:bg-red-200 rounded-lg"  onclick="alert('Inscrivez vous ou connectez pour en savoir plus sur le médecin {{$doctor->name}}');">
        <img src="../images/profil-med.png" alt="profil du medecin" class="rounded-full w-24 h-24 object-cover">
        <h5 class="font-semibold truncate w-40" >{{$doctor->name}}</h5>
      </li>
        @endforeach
            @else
                  <p>ajouter une alert lorsqu'on clique </p>
            @endif
    </ul>
  </div>
</section> 

<!-- modal bloc  -->
  <div class="bg-white rounded-lg modal p-2 w-full shadow-lg transform transition-all duration-300  lg:p-6 lg:w-96"  id="myModal" x-show.transition.opacity="showModal">
      <div class="modal-content" >
          <div class="flex justify-between items-center border-b-2 border-gray-200 pb-4">
              <h2 class="text-2xl font-semibold">Connectez-vous ou inscrivez-vous <i class="bi bi-check-fill"></i></h2>
              <button  class="text-gray-500 hover:text-red-700 focus:outline-none close">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x">
                      <line x1="18" y1="6" x2="6" y2="18"></line>
                      <line x1="6" y1="6" x2="18" y2="18"></line>
                  </svg>
              </button>
          </div>
          
          <div class="mt-6 space-y-4">
              <p class="text-lg text-gray-600">Pour bénéficier de tous les avantages et commencer à prendre le contrôle de votre santé, veuillez vous connecter ou vous inscrire dès maintenant !</p>
              <div class="flex flex-row space-x-4 justify-center text-sm lg:text-xl">
                  <a  href="{{ route('register') }}"  class="flex items-center justify-center gap-2 bg-gray-700 text-gray-100 px-4 py-2 rounded-lg hover:bg-gray-800 transition duration-300"> Inscrivez-vous <i class="bi bi-person-plus-fill"></i> </a>
                  {{-- <a  href="{{ route('login') }}"  class="flex items-center justify-center gap-2 bg-red-500 text-gray-100 px-4 py-2 rounded-lg hover:bg-red-700 transition duration-300"> Connectez-vous <i class="bi bi-box-arrow-in-left"></i> </a> --}}
              </div>
          </div>

          <div class="mt-6 text-sm text-gray-500">
              <p>Prenez le contrôle de votre diabète dès maintenant en vous connectant ou en vous inscrivant sur KaK glycémie !</p>
          </div>
      </div>
  </div>
<!-- modal bloc  -->

  
  


<style>
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 999; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: hidden; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content/Box */
.modal-content {
  background-color: #fefefe;
  margin: 10% 30%; /* 15% from the top and centered */
  padding: 20px;
  border: 1px solid #888;
  width: 40%; 
}

@media (max-width: 854px) {
  .modal-content{
    margin: 2% 5%; /* 15% from the top and centered */
    padding: 8px;
    width: 90%; 

  }
}

/* The Close Button */
.close {
  color: #aaa;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: black;
  text-decoration: none;
  cursor: pointer;
}
</style>

<script>
  var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("choiceDoctor");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on the button, open the modal
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}

  
</script>

