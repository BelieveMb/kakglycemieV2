<button onclick="topFunction()" id="btnTotop" title="Go to top" class="bg-red-500/70 text-gray-200 hover:bg-gray-700 font-semibold" ><i class="bi bi-arrow-up"></i></button>
<style>
  #btnTotop {
  position: fixed; /* Fixed/sticky position */
  bottom: 20px; /* Place the button at the bottom of the page */
  right: 30px; /* Place the button 30px from the right */
  z-index: 99; /* Make sure it does not overlap */
  border: none; /* Remove borders */
  outline: none; /* Remove outline */
  cursor: pointer; /* Add a mouse pointer on hover */
  padding: 15px; /* Some padding */
  border-radius: 10px; /* Rounded corners */
  font-size: 18px; /* Increase font size */
}



</style>   

<script>
    // Get the button:
    let btnTotop = document.getElementById("btnTotop");l;
    :

    // When the user scrolls down 20px from the top of the document, show the button
    window.onscroll = function() {scrollFunction()};

    function scrollFunction() {
      if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        btnTotop.style.display = "block";
      } else {
        btnTotop.style.display = "none";
      }
    }

    // When the user clicks on the button, scroll to the top of the document
    function topFunction() {
      document.body.scrollTop = 0; // For Safari
      document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
    }
</script>
   <!-- section of footer -->
    <footer class="bg-gray-900 font-sans   px-8 py-10 lg:px-40 lg:py-20 ">
        <div class="container">
            <div class="grid grid-cols-1 gap-6 sm:grid-cols-2 sm:gap-y-10 lg:gap-8       lg:grid-cols-4">
                <div class="flex flex-col  text-gray-50">
                  <div class="flex flex-col lg:flex-row items-center">
                    <img src="{{ asset('images/logo_white.png')}}" alt="logo kak glycémie"class="w-[5rem] h-[5rem]">
                    <h3 class="font-medium text-xl">KaK glycémie</h3>
                  </div>
                  <p>
                    Avec Kak Glycémie, vous pouvez prendre le contrôle de votre santé en suivant votre glycémie avec précision, en analysant les tendances et en communiquant efficacement avec votre médecin. 
                  </p>
                </div>
                <div>
                    <p class="font-semibold text-gray-800 dark:text-white">Accès rapide</p>

                    <div class="flex flex-col items-start mt-5 space-y-2">
                        <p class="text-gray-600 transition-colors duration-300 dark:text-gray-300 dark:hover:text-blue-400 hover:underline hover:cursor-pointer hover:text-blue-500"><a href="{{ route('accueilName')}}">Accueil</a></p>
                        <p class="text-gray-600 transition-colors duration-300                        hover:underline hover:cursor-pointer hover:text-gray-100"><a href="{{ route('patientName')}}">Patient</a> </p>
                        <p class="text-gray-600 transition-colors duration-300 hover:underline hover:cursor-pointer hover:text-gray-100"> <a href="{{ route('doctorName')}}">Médecin</a></p>
                    </div>
                </div>

                <div class="sm:col-span-2">
                  <h3 class="max-w-lg text-xl font-semibold tracking-tight text-gray-800 xl:text-2xl dark:text-white">Laissez nous un message.</h3>

                  <div class="flex flex-col mx-auto mt-6 space-y-3 md:space-y-0 md:flex-row">
                      <input id="email" type="text" class="px-4 py-2 text-gray-700 bg-white border rounded-md dark:bg-gray-900 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 dark:focus:border-blue-300 focus:outline-none focus:ring focus:ring-opacity-40 focus:ring-blue-300" placeholder="Email Address" />
              
                      <button class="w-full px-6 py-2.5 text-sm font-medium tracking-wider text-white transition-colors duration-300 transform md:w-auto md:mx-4 focus:outline-none bg-gray-800 rounded-lg hover:bg-gray-700 focus:ring focus:ring-gray-300 focus:ring-opacity-80">
                          Envoyer
                      </button>
                      
                  </div>
                  <ul class="text-gray-50 text-xl my-4 flex gap-4">
                    <li><a href="tel:+243817723066"><i class="bi bi-phone"></i></a></li>
                    <li><a href="mailto:mbolokobelieve@gmail.com"><i class="bi bi-enveloppe"></i></a></li>
                    <li><a href=""><i class="bi bi-facebook"></i></a></li>
                    <li><a href=""><i class="bi bi-whatsapp"></i></a></li>
                  </ul>
              </div>
            </div>
            
            <hr class="my-6 border-gray-200 md:my-8  h-2" />
            
            <p class="font-sans p-8 text-start md:text-center md:text-lg md:p-4 text-gray-300">© 2023 KaKglycémie. Tous les droits réservés. Développer par
           <a href="" class="text-gray-200 font-semibold">Believe MB</a>.</p>
        </div>
    </footer>