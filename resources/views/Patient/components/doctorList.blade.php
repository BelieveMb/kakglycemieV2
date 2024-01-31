<div class="w-1/3 border hidden flex-col lg:flex">
                  
    <!-- Header -->
    <div class="py-2 px-3  flex flex-row justify-between items-center">
        <div>
            <h3 class="font-semibold text-red-500  text-2xl"> KaK Discussion </h3>
        </div>
        <div class="flex">     
            <div class="text-xl hover:text-red-500">
              <i class="bi bi-chat-left-text"></i>
            </div>
            <div class="ml-4 text-xl hover:text-red-500">
              <i class="bi bi-person-fill-add"></i>
            </div>
        </div>
    </div>

    <!-- Search -->
    <div class="py-2 px-2 bg-grey-lightest">
        <input type="text" class="w-full px-2 py-2 text-sm  rounded-xl outline-none"
        placeholder="Trouvez et parlez à un médecin "/>
    </div>

    <!-- Contacts -->
    <div class="bg-grey-lighter flex-1 overflow-auto">
      @foreach ($doctorList as $doctor) 
       
        <div class="px-3 flex items-center bg-grey-light cursor-pointer hover:bg-red-100/80">
            <div>
                <img class="h-12 w-12 rounded-full"
                    src="https://darrenjameseeley.files.wordpress.com/2014/09/expendables3.jpeg"/>
            </div>
            <div class="ml-4 flex-1 border-b border-grey-lighter py-4 ">
                <div class="flex items-bottom justify-between">
                    <p class="text-red-500 font-semibold">
                        {{$doctor->nomMed}}
                    </p>
                    <p class="text-xs text-red-500">
                        12:45 pm
                    </p>
                </div>
                <p class="text-gray-700 mt-1 text-sm">
                    Get Andrés on this movie ASAP! 
                </p>
            </div>
        </div>
      @endforeach
    </div>

</div>   