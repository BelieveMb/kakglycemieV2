@extends('Medecin.layout.dashMed')

@section('dashMedecin')
    <div class="w-full flex justify-center items-center content-center gap-10">
       

        <div class="py-1 px-2 max-w-[90%] lg:max-w-[80%] min-h-auto bg-gray-700 text-gray-100 font-medium rounded-lg border shadow-md sm:p-8 ">
            <div class="flex flex-col gap-4 text-center my-5 lg:my-5">
                <h3 class="text-xl lg:text-3xl text-gray-50 font-semibold">Contactez KaK glycémie</h3>
                <p class="py-1 px-5 ">
                    Vous pouvez contacter l'administration de KaK Glycémie, posez toutes vos questions et préoccuptations. Une équipe de KaK glycémie pourra vous contacter au moment venu.
                </p>

            </div>

            <div class="flex lg:flex-row flex-col-reverse gap-5 justify-between my-6">
                <div class="flex flex-col gap-5 justify-center">
                    <div class="flex gap-2">
                        <span class="text-2xl bg-gray-50 text-gray-700 rounded-full flex items-center px-3">
                            <i class="bi bi-geo-alt"></i>
                        </span>
                        <div class="flex flex-col">
                            <b>Adresse</b>
                            <p> 1 avenue Pierre de courbetin, sens 89100</p>
                        </div>
                    </div>
                    <div class="flex gap-2">
                        <span class="text-2xl bg-gray-50 text-gray-700 rounded-full flex items-center px-3">
                            <i class="bi bi-telephone"></i>
                        </span>
                        <div class="flex flex-col">
                            <b>Téléphone</b>
                            <p> <a href="tel:+33615175061" class="text-gray-50">  +33 615175061 </a></p>
                        </div>
                    </div>

                </div>
                {{-- <div class="flex flex-col gap-5 justify-center items-center py-5 px-10 bg-gray-50 text-gray-700 rounded-xl w-full lg:w-1/2">
                    <form  method="post">
                        <h4 class="text-2xl font-bold mb-5">Laissez nous un message</h4>

                        @csrf
                        @if (Session::has('success'))
                        <div class="bg-gray-900 my-2  rounded-xl flex justify-between p-3 text-gray-100 font-semibold animate-pulse delay-700">
                            {{ Session::get('success') }}
                            <div class="text-gray-50">
                                <i class="bi bi-check-circle"></i>
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
                            <input type="text"  name="nom"   placeholder="Votre nom"
                            class="font-semibold  border-b-4 border-red-500 rounded-2xl px-2 py-1 w-full focus:border-2 outline-none focus:border-red-500" required autocomplete="nom" >
                            <x-input-error class="mt-2" :messages="$errors->get('nom')" />
                        </div>

                        <div class="my-4">
                            <textarea id="message" name="message"   placeholder="Votre message" class="font-semibold  border-b-4 border-red-500 rounded-2xl px-2 py-1 w-full focus:border-2 outline-none focus:border-red-500" required autocomplete="message" ></textarea>
                            <x-input-error class="mt-2" :messages="$errors->get('message')" />
                        </div>

                        <div>
                            <button
                            class="font-semibold border-4 border-red-500 rounded-2xl px-2 py-1 w-full  outline-none hover:text-gray-50 hover:bg-red-500" >Envoyer</button>
                        </div>
                    </form>
                    
                </div> --}}
                <div class="flex flex-col gap-5 justify-center items-center py-5 px-10 bg-gray-50 text-gray-700 rounded-xl w-full lg:w-1/2">
                    <form onsubmit="return sendWhatsAppMessage(event)">
                        <h4 class="text-2xl font-bold mb-5">Laissez nous un message</h4>

                        <div class="my-4">
                            <input type="text" name="nom" id="nom" placeholder="Votre nom"
                                class="font-semibold border-b-4 border-red-500 rounded-2xl px-2 py-1 w-full focus:border-2 outline-none focus:border-red-500"
                                required autocomplete="nom">
                        </div>

                        <div class="my-4">
                            <textarea id="message" name="message" placeholder="Votre message"
                                class="font-semibold border-b-4 border-red-500 rounded-2xl px-2 py-1 w-full focus:border-2 outline-none focus:border-red-500"
                                required autocomplete="message"></textarea>
                        </div>

                        <div>
                            <button
                                class="font-semibold border-4 border-red-500 rounded-2xl px-2 py-1 w-full  outline-none hover:text-gray-50 hover:bg-red-500">
                                Envoyer
                            </button>
                        </div>
                    </form>
                </div>

                <script>
                    function sendWhatsAppMessage(event) {
                        event.preventDefault();

                        const nom = document.getElementById('nom').value.trim();
                        const message = document.getElementById('message').value.trim();

                        if (!nom || !message) {
                            alert("Veuillez remplir tous les champs.");
                            return false;
                        }

                        const fullMessage = `Bonjour, je m'appelle ${nom}. ${message}`;
                        const encodedMessage = encodeURIComponent(fullMessage);
                        const whatsappUrl = `https://wa.me/33615175061?text=${encodedMessage}`;

                        // Rediriger vers WhatsApp
                        window.open(whatsappUrl, '_blank');
                        return false;
                    }
                </script>


            </div>
        </div>



    </div>
@endsection
