<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenu.e sur KaK</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    @include('AllUsers/components/header')
    <div class="bg-red-800">
    <img src="{{ asset('images/logo_white.png') }}" alt="Logo Kak glycémie" class="w-12 h-12">

    </div>
   
    <section id="bgSection" class="bg-gray-700 bg-blend-multiply">
      <div class="  w-full text-center  ">

        <div class="flex flex-col hidden mySlides fade" style="background-image: url('bg2.jpg');">
          <h1 class="mb-4 text-4xl font-extrabold tracking-tight leading-none
            text-white md:text-5xl lg:text-6xl">Welcome 1 in the world
            potential</h1>
          <p class="mb-8 text-lg font-normal text-gray-300 lg:text-xl sm:px-16 lg:px-48">Here at Flowbite we focus on
            markets where technology, innovation, and capital can unlock long-term value and drive economic growth.</p>

          <div class="flex flex-col space-y-4 sm:flex-row sm:justify-center sm:space-y-0 sm:space-x-4">
            <a href="#"
              class="inline-flex justify-center items-center py-3 px-5 text-base font-medium text-center text-white rounded-lg bg-red-500 hover:bg-red-800 focus:ring-4 focus:ring-red-300 dark:focus:ring-red-900">
              Get started
              <span class="ml-2 -mr-1 text-lg" >
                <i class="bi bi-arrow-right"></i>
              </span>
              
            </a>
            <a href="#"
              class="inline-flex justify-center hover:text-gray-900 items-center py-3 px-5 text-base font-medium text-center text-white rounded-lg border border-white hover:bg-gray-100 focus:ring-4 focus:ring-gray-400">
              Learn more
            </a>
          </div>
        </div>

        <div class="hidden flex flex-col mySlides fade " style="background-image: url('bg1.jpg');">
          <h1 class="mb-4 text-4xl font-extrabold tracking-tight leading-none
              text-white md:text-5xl lg:text-6xl">Message 22 in the world’s
            potential</h1>
          <p class="mb-8 text-lg font-normal text-gray-300 lg:text-xl sm:px-16 lg:px-48">Here at Flowbite we focus on
            markets where technology, innovation, and capital can unlock long-term value and drive economic growth.</p>
          <div class="flex flex-col space-y-4 sm:flex-row sm:justify-center sm:space-y-0 sm:space-x-4">
            <a href="#"
              class="inline-flex justify-center items-center py-3 px-5 text-base font-medium text-center text-white rounded-lg bg-red-500 hover:bg-red-800 focus:ring-4 focus:ring-red-300 dark:focus:ring-red-900">
              Commencez
              <span class="ml-2 -mr-1 text-lg" >
                <i class="bi bi-arrow-right"></i>
              </span>              
            </a>

            <a href="#"
              class="inline-flex justify-center hover:text-gray-900 items-center py-3 px-5 text-base font-medium text-center text-white rounded-lg border border-white hover:bg-gray-100 focus:ring-4 focus:ring-gray-400">
              S'inscrire
            </a>

          </div>
        </div>

      </div>

    </section>



    
    <!--  section banner  -->
    <section class="bg-red-500  px-8 py-10 lg:px-40 lg:py-4 flex flex-col    justify-between gap-6 lg:flex-row">
      <div class="font-bold flex  text-lg leading-5 text-white      opacity-100 lg:text-xl " >
        <h3>Inscrivez ou connectez vous pour profiter pleinement de KaK</h3>

      </div>
      <div>
        <a href="#" class="px-4 py-2  text-sm font-semibold bg-gray-100 text-red-500 rounded-lg     
        hover:text-red-600
        focus:text-gray-900 hover:bg-gray-200  hover:shadow-outline
        focus:bg-gray-200 focus:outline-none"> Commencez </a>
      </div>
      
    </section>

      <!--  section 3 steps  -->
      <section  style="background-image:url('https://www.toptal.com/designers/subtlepatterns/uploads/dot-grid.png');">
      <div class="px-8 py-8 lg:px-40 lg:py-20  border-t border-b  rounded-b-xl  bg-opacity-10">
              <div class=" flex flex-col lg:flex-row group bg-white shadow-2xl shadow-gray-600 border ">

                    <div  class="p-10 flex flex-col items-center text-center group md:lg:xl:border-r md:lg:xl:border-b hover:bg-slate-50 cursor-pointer">
                        <span class="p-5 rounded-full bg-red-500 text-white shadow-lg shadow-red-200"><svg
                                xmlns="http://www.w3.org/2000/svg" class="h-10 w-10" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor" stroke-width="1.5">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                            </svg></span>
                        <h3 class="text-2xl font-medium text-slate-700 mt-3">Mon Profil</h3>
                        <p class="mt-2 text-sm text-slate-500">Team BrainEdge education is a bunch of highly focused,
                            energetic
                            set of people.</p>
                    </div>

                    <div
                        class="p-10 flex flex-col items-center text-center group md:lg:xl:border-r md:lg:xl:border-b hover:bg-slate-50 cursor-pointer">
                        <span class="p-5 rounded-full bg-orange-500 text-white shadow-lg shadow-orange-200"><svg
                                xmlns="http://www.w3.org/2000/svg" class="h-10 w-10" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor" stroke-width="1.5">
                                <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
                                <polyline points="14 2 14 8 20 8"></polyline>
                                <line x1="16" y1="13" x2="8" y2="13"></line>
                                <line x1="16" y1="17" x2="8" y2="17"></line>
                                <polyline points="10 9 9 9 8 9"></polyline>
                            </svg></span>
                        <h3 class="text-2xl font-medium text-slate-700 mt-3">Mon Traitemnt</h3>

                        <p class="mt-2 text-sm text-slate-500">Know where you stand and what next to do to succeed .</p>
                    </div>

                    <div
                        class="p-10 flex flex-col items-center text-center group   md:lg:xl:border-b hover:bg-slate-50 cursor-pointer">
                        <span class="p-5 rounded-full bg-yellow-500 text-white shadow-lg shadow-yellow-200"><svg
                                xmlns="http://www.w3.org/2000/svg" class="h-10 w-10" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor" stroke-width="1.5">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M17 8h2a2 2 0 012 2v6a2 2 0 01-2 2h-2v4l-4-4H9a1.994 1.994 0 01-1.414-.586m0 0L11 14h4a2 2 0 002-2V6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2v4l.586-.586z" />
                            </svg></span>
                        <p class="text-xl font-medium text-slate-700 mt-3">Graphe</p>
                        <p class="mt-2 text-sm text-slate-500">Professional Advice for higher education abroad and
                            select the
                            top institutions worldwide.</p>
                    </div>

              </div>

              <div class="w-full bg-gray-700 shadow-xl shadow-red-100 rounded-b-xl flex items-center
                flex-col gap-4 py-6 px-8 lg:flex-row lg:py-10 lg:px-10 lg:justify-between">
                    <p class=" text-white"> <span class="text-3xl font-medium lg:text-4xl">Still Confused ?</span> <br> <span
                            class="text-lg">Book For Free Career Consultation Today ! </span></p>
                    <button
                        class="px-5 py-3  font-medium text-gray-700 shadow-xl  hover:bg-white duration-150  bg-red-400">BOOK
                        AN APPOINTMENT </button>
              </div>
      </div>
    </section>
    
    <!-- components our doctors  -->
    @include('AllUsers/components/doctors_list')
    <!-- components our doctors  -->

   

    <!-- section your avantages  -->
    <section class="bg-gray-50 px-8  lg:px-40 py-20">
      <div class=" flex flex-wrap">
        <div class="w-full md:w-4/12 ">
          <img alt="image votre avantage sur kak" class="max-w-full h-full rounded-lg shadow-lg" src="img_avantage.jpg">
        </div>
        <!-- <div class="w-full md:w-1/2 ml-auto mr-auto px-4"> -->
        <div class="w-full md:w-1/2 ml-auto mr-auto px-4">
          <div class="">
            <div class="text-red-500 p-3 text-center inline-flex items-center justify-center w-16 h-16 mb-6 shadow-lg rounded-full bg-red-500 mt-8">
              <i class="bi bi-rocket text-xl"></i>
            </div>
            <h3 class="text-3xl font-semibold text-gray-700">A growing company</h3>
            <p class="mt-4 text-lg leading-relaxed text-gray-700">
              The extension comes with three pre-built pages to help you get started faster. You can change the text and images and you're
              good to go.
            </p>
            <ul class="list-none my-2">

              <li class="py-2">
                <div class="flex items-center">
                  <div>
                    <span class="text-xl font-semibold inline-block py-1 px-2 uppercase rounded-full text-gray-50 bg-red-500 mr-3"><i class="bi bi-person"></i></span>
                  </div>
                  <div>
                    <h4 class="text-gray-700 font-semibold">Amazing page examples</h4>
                  </div>
                </div>
              </li>
              <li class="py-2">
                <div class="flex items-center">
                  <div>
                    <span class="text-xl font-semibold inline-block py-1 px-2 uppercase rounded-full text-gray-50 bg-red-500 mr-3"><i class="bi bi-person"></i></span>
                  </div>
                  <div>
                    <h4 class="text-gray-700 font-semibold">Amazing page examples</h4>
                  </div>
                </div>
              </li>
              <li class="py-2">
                <div class="flex items-center">
                  <div>
                    <span class="text-xl font-semibold inline-block py-1 px-2 uppercase rounded-full text-gray-50 bg-red-500 mr-3"><i class="bi bi-person"></i></span>
                  </div>
                  <div>
                    <h4 class="text-gray-700 font-semibold">Amazing page examples</h4>
                  </div>
                </div>
              </li>
             
            </ul>

            <p class=" text-lg leading-relaxed text-gray-700">
              Started faster. You can change the text and images and you're
              good to go.
            </p>
            <div class="mt-8">
              <a href="#" class="px-4 py-2  text-sm font-semibold bg-red-500 text-gray-50 rounded-lg hover:text-gray-600 focus:text-gray-900 hover:bg-red-200  hover:shadow-outline
              focus:bg-red-200 focus:outline-none"> Commencez </a>
            </div>
          
          </div>
        </div>
      </div>
    </section>

    <!-- section our doctors  -->
    <section class="bg-gray-700 px-8  lg:px-40 lg:py-20 " >
      <div class="flex flex-wrap  ">
        <div class="w-full max-w-full ">
          <div class="relative flex-[1_auto] flex flex-col break-words min-w-0 bg-clip-border rounded-[.95rem] border border-dashed border-stone-200 bg-white ">
            <!-- card body  -->
            <div class="flex-auto block py-8 px-9">
              <div>
                <div class="mb-9">
                  <h1 class="mb-2 text-[2rem] font-semibold text-gray-700">Nos Médecins</h1>
                  <span class="text-[1.15rem] font-medium text-red-300"> Meet
                  our talented team, afor  dynamic group of experts drliven by
                  passion and innovation. </span>
                </div>
                <div class="flex flex-wrap flex-col align-center w-full gap-8 lg:flex-row  lg:align-start">
                  <div class="flex flex-col mr-5 text-center mb-11   ">
                    <div class="inline-block mb-4 relative shrink-0 rounded-[.95rem]">
                      <img class="inline-block shrink-0 rounded-[.95rem]
                      w-[150px] h-[150px] shadow-red-200 shadow-lg"
                      src="bg1.jpg" alt="avarat image">
                    </div>
                    <div class="text-center">
                      <a href="javascript:void(0)" class="text-dark font-semibold hover:text-primary text-[1.25rem] transition-colors duration-200 ease-in-out">Samantha Reynolds</a>
                      <span class="block font-medium text-red-300">Marketing Manager</span>
                    </div>
                  </div>

                  <div class="flex flex-col mr-5 text-center mb-11   ">
                    <div class="inline-block mb-4 relative shrink-0 rounded-[.95rem]">
                      <img class="inline-block shrink-0 rounded-[.95rem]
                      w-[150px] h-[150px] shadow-red-200 shadow-lg"
                      src="bg2.jpg" alt="avarat image">
                    </div>
                    <div class="text-center">
                      <a href="javascript:void(0)" class="text-dark font-semibold hover:text-primary text-[1.25rem] transition-colors duration-200 ease-in-out">Samantha Reynolds</a>
                      <span class="block font-medium text-red-300">Marketing Manager</span>
                    </div>
                  </div>

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    </section>

    <!-- section accordion  -->
    <section class="flex gap-20 px-8  lg:px-40 lg:py-20 ">
      <div class="w-1/2">
        <h2 class="text-red-500 text-[4rem] font-bold leading-none">La meilleure solution pour tous</h2>
        <p class="py-10">
          Lorem ipsum dolor sit amet consectetur adipisicing eliv. Earum molestiae fuga expedita sequi sit ipsam harum sapiente pariatur quam hic!
        </p>
        <div >
          <a href="#" class="px-4 py-2  text-sm font-semibold bg-red-500 text-gray-50 rounded-lg hover:text-gray-600 focus:text-gray-900 hover:bg-red-200  hover:shadow-outline
          focus:bg-red-200 focus:outline-none"> Commencez </a>
        </div>
      </div>

      <div class="w-1/2 mx-auto bg-white rounded">

        <div id="accordion-collapse" data-accordion="collapse">
            <h2 id="accordion-collapse-heading-1">
              <button type="button" class="flex items-center focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 justify-between p-5 w-full font-medium text-left border border-gray-200 dark:border-gray-700 border-b-0 text-gray-900 dark:text-white bg-gray-100 dark:bg-gray-800 hover:bg-gray-100 dark:hover:bg-gray-800 rounded-t-xl" data-accordion-target="#accordion-collapse-body-1" aria-expanded="true" aria-controls="accordion-collapse-body-1">
              <span>What is Flowbite?</span>
              <svg data-accordion-icon class="w-6 h-6 shrink-0 rotate-180" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
            </button>
            </h2>
            <div id="accordion-collapse-body-1" aria-labelledby="accordion-collapse-heading-1">
              <div class="p-5 border border-gray-200 dark:border-gray-700 dark:bg-gray-900 border-b-0">
                <p class="mb-2 text-gray-500 dark:text-gray-400">Flowbite is an open-source library of interactive
                  components built on top of Tailwind CSS including buttons, dropdowns, modals, navbars, and more.</p>
                <p class="text-gray-500 dark:text-gray-400">Check out this guide to learn how to <a
                    href="#" target="_blank"
                    class="text-blue-600 dark:text-blue-500 hover:underline">get started</a> and start developing
                  websites even faster with components on top of Tailwind CSS.</p>
              </div>
            </div>
            <h2 id="accordion-collapse-heading-2">
              <button type="button" class="flex items-center focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 justify-between p-5 w-full font-medium border border-gray-200 dark:border-gray-700 border-b-0 text-left text-gray-500 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800" data-accordion-target="#accordion-collapse-body-2" aria-expanded="false" aria-controls="accordion-collapse-body-2">
              <span>Is there a Figma file available?</span>
              <svg data-accordion-icon class="w-6 h-6 shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
            </button>
            </h2>
            <div id="accordion-collapse-body-2" class="hidden" aria-labelledby="accordion-collapse-heading-2">
              <div class="p-5 border border-gray-200 dark:border-gray-700 border-b-0">
                <p class="mb-2 text-gray-500 dark:text-gray-400">Flowbite is first conceptualized and designed using the
                  Figma software so everything you see in the library has a design equivalent in our Figma file.</p>
                <p class="text-gray-500 dark:text-gray-400">Check out the <a href="https://flowbite.com/figma/"
                    target="_blank" class="text-blue-600 dark:text-blue-500 hover:underline">Figma design system</a>
                  based on the utility classes from Tailwind CSS and components from Flowbite.</p>
              </div>
            </div>
            <h2 id="accordion-collapse-heading-3">
              <button type="button" class="flex items-center border focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 border-gray-200 dark:border-gray-700 justify-between p-5 w-full font-medium text-left text-gray-500 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800" data-accordion-target="#accordion-collapse-body-3" aria-expanded="false" aria-controls="accordion-collapse-body-3">
              <span>What are the differences between Flowbite and Tailwind UI?</span>
              <svg data-accordion-icon class="w-6 h-6 shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
            </button>
            </h2>
            <div id="accordion-collapse-body-3" class="hidden" aria-labelledby="accordion-collapse-heading-3">
              <div class="p-5 border border-gray-200 dark:border-gray-700 border-t-0">
                <p class="mb-2 text-gray-500 dark:text-gray-400">The main difference is that the core components from
                  Flowbite are open source under the MIT license, whereas Tailwind UI is a paid product. Another
                  difference is that Flowbite relies on smaller and standalone components, whereas Tailwind UI offers
                  sections of pages.</p>
                <p class="mb-2 text-gray-500 dark:text-gray-400">However, we actually recommend using both Flowbite,
                  Flowbite Pro, and even Tailwind UI as there is no technical reason stopping you from using the best
                  of two worlds.</p>
                <p class="mb-2 text-gray-500 dark:text-gray-400">Learn more about these technologies:</p>
                <ul class="list-disc pl-5 dark:text-gray-400 text-gray-500">
                  <li><a href="https://flowbite.com/pro/" target="_blank"
                      class="text-blue-600 dark:text-blue-500 hover:underline">Flowbite Pro</a></li>
                  <li><a href="https://tailwindui.com/" rel="nofollow" target="_blank"
                      class="text-blue-600 dark:text-blue-500 hover:underline">Tailwind UI</a></li>
                </ul>
              </div>
            </div>
        </div>

          
      </div>
    </section>

    <!-- section compter number  -->
    <section class="bg-red-500  px-8 lg:px-40 lg:py-20 flex flex-col justify-between  lg:flex-row">
      <div class="text-gray-50 ">
        <h3 class="text-7xl font-bold mb-4">+72 <span class="bi bi-person"></span></h3>
        <span class="font-medium">Médecins à votre disposition</span>
      </div>

      <div class="text-gray-50 ">
        <h3 class="text-7xl font-bold mb-4">+72 <span class="bi bi-person"></span></h3>
        <span class="font-medium">Médecins à votre disposition</span>
      </div>

      <div class="text-gray-50 ">
        <h3 class="text-7xl font-bold mb-4">+72 <span class="bi bi-person"></span></h3>
        <span class="font-medium">Médecins à votre disposition</span>
      </div>

    </section>

    <!-- section kak for doctor  -->
    <section class=" px-8 lg:px-40 lg:py-10 ">
      <div class="bg-white relative   flex items-center  n justify-center overflow-hidden z-50 ">
          
          <div class="relative mx-auto h-full   pb-20   md:pb-10 sm:max-w-xl md:max-w-full lg:max-w-screen-xl ">
              <div class="flex flex-col items-center justify-between lg:flex-row ">
                  <div class=" relative ">
                      <div class=" absolute top-0 -left-48 z-0  opacity-50 ">
                          <img src="https://placehold.co/200x100" class="w-36 z-0  h-full    object-fill fill-y text-y   ">
                      </div>
                      <div class="lg:max-w-xl  relative z-40">
                          <p class="flex text-sm uppercase text-g1  ">
                              KaK glycémie pour médecin
                          </p>
                          <h2 class="mb-6 max-w-lg text-5xl font-light leading-snug tracking-tight text-g1 sm:text-7xl sm:leading-snug">
                              KaK pour Médecin 
                              <span class="my-1 inline-block border-b-8 border-g4 bg-white px-4 font-bold text-g4 animate__animated animate__flash">different</span>
                          </h2>
                          <p class="text-base text-gray-700">Sed ut perspiciatis unde omnis iste natus error sit voluptatem
                              accusantium doloremque it.</p>
                          <div class="mt-10 flex flex-col items-center md:flex-row">
                              <a href="/" class="mb-3 inline-flex h-12 w-full items-center justify-center rounded bg-red-500 px-6 font-medium tracking-wide text-white shadow-md transition hover:bg-gray-600 focus:outline-none md:mr-4 md:mb-0 md:w-auto">
                                  View More</a>
                              <a href="/" aria-label="" class="group inline-flex items-center font-semibold text-g1">Watch how
                                  it works
                                  <svg xmlns="http://www.w3.org/2000/svg" class="ml-4 h-6 w-6 transition-transform group-hover:translate-x-2" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                      <path stroke-linecap="round" stroke-linejoin="round" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                                  </svg>
                              </a>
                          </div>
                      </div>
                      
                    
                  </div>
                  <div class="relative hidden lg:ml-32 lg:block lg:w-1/2">
                      <svg xmlns="http://www.w3.org/2000/svg" class="my-6 mx-auto h-10 w-10 animate-bounce rounded-full bg-white p-2 lg:hidden" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                          <path stroke-linecap="round" stroke-linejoin="round" d="M16 17l-4 4m0 0l-4-4m4 4V3"></path>
                      </svg>
                      <div class="abg-orange-400 mx-auto w-fit overflow-hidden rounded-[6rem] rounded-br-none rounded-tl-none">
                          <img src="./img_med.png" class="w-[35rem] h-[20rem]">
                      </div>
                  </div>
              </div>
          </div> 
          <div class="hidden text-9xl varien absolute top-6 left-1/4 text-g/10 z-40    ">
              About Us
          </div>
          <div class=" absolute -bottom-24 left-10 z-0  opacity-10 "> 
              <svg width="800px" height="800px" viewBox="0 0 24 24" class="w-96 z-0  h-full    object-fill fill-gray-300 text-gray-300" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M12 6C12 5.44772 11.5523 5 11 5C10.4477 5 10 5.44772 10 6V16C10 16.5523 10.4477 17 11 17C11.5523 17 12 16.5523 12 16V6ZM9 9C9 8.44772 8.55228 8 8 8C7.44772 8 7 8.44772 7 9V16C7 16.5523 7.44772 17 8 17C8.55228 17 9 16.5523 9 16V9ZM15 9C15 8.44772 14.5523 8 14 8C13.4477 8 13 8.44772 13 9V16C13 16.5523 13.4477 17 14 17C14.5523 17 15 16.5523 15 16V9ZM18 13C18 12.4477 17.5523 12 17 12C16.4477 12 16 12.4477 16 13V16C16 16.5523 16.4477 17 17 17C17.5523 17 18 16.5523 18 16V13ZM6 15C6 14.4477 5.55228 14 5 14C4.44772 14 4 14.4477 4 15V16C4 16.5523 4.44772 17 5 17C5.55228 17 6 16.5523 6 16V15ZM21 15C21 14.4477 20.5523 14 20 14C19.4477 14 19 14.4477 19 15V16C19 16.5523 19.4477 17 20 17C20.5523 17 21 16.5523 21 16V15ZM4 18C3.44772 18 3 18.4477 3 19C3 19.5523 3.44772 20 4 20H21C21.5523 20 22 19.5523 22 19C22 18.4477 21.5523 18 21 18H4Z"></path>
              </svg>
          </div>
          
          <div class=" absolute -bottom-0 left-3/4 z-0  opacity-10 "> 
              <svg width="800px" height="800px" viewBox="0 0 256 256" xmlns="http://www.w3.org/2000/svg" class="w-48 z-0  h-full -rotate-90   object-fill fill-red-300 text-red-300">
                  <path d="M32 225h12.993A4.004 4.004 0 0 0 49 220.997V138.01c0-4.976.724-5.04 1.614-.16l12.167 66.708c.397 2.177 2.516 3.942 4.713 3.942h8.512a3.937 3.937 0 0 0 3.947-4S79 127.5 80 129s14.488 52.67 14.488 52.67c.559 2.115 2.8 3.83 5.008 3.83h8.008a3.993 3.993 0 0 0 3.996-3.995v-43.506c0-4.97 1.82-5.412 4.079-.965l10.608 20.895c1.001 1.972 3.604 3.571 5.806 3.571h9.514a3.999 3.999 0 0 0 3.993-4.001v-19.49c0-4.975 2.751-6.074 6.155-2.443l6.111 6.518c1.51 1.61 4.528 2.916 6.734 2.916h7c2.21 0 5.567-.855 7.52-1.92l9.46-5.16c1.944-1.06 5.309-1.92 7.524-1.92h23.992a4.002 4.002 0 0 0 4.004-3.992v-7.516a3.996 3.996 0 0 0-4.004-3.992h-23.992c-2.211 0-5.601.823-7.564 1.834l-4.932 2.54c-4.423 2.279-12.028 3.858-16.993 3.527l2.97.198c-4.962-.33-10.942-4.12-13.356-8.467l-11.19-20.14c-1.07-1.929-3.733-3.492-5.939-3.492h-7c-2.21 0-4 1.794-4 4.001v19.49c0 4.975-1.14 5.138-2.542.382l-12.827-43.535c-.625-2.12-2.92-3.838-5.127-3.838h-8.008c-2.207 0-3.916 1.784-3.817 4.005l1.92 42.998c.221 4.969-.489 5.068-1.585.224l-15.13-66.825c-.488-2.155-2.681-3.902-4.878-3.902h-8.512a3.937 3.937 0 0 0-3.947 4s.953 77-.047 75.5-13.937-92.072-13.937-92.072C49.252 34.758 47.21 33 45 33H31.999" fill-rule="evenodd"></path>
              </svg>
          </div> 
          <div class=" absolute top-10 left-3/4 z-0  opacity-10 "> 
              
              <svg fill="#000000" width="800px" height="800px" viewBox="0 0 256 256" xmlns="http://www.w3.org/2000/svg" class="w-96 z-0  h-full    object-fill fill-blue-300 text-blue-300">
                  <path d="M230.704 99.2a4.004 4.004 0 0 0-4.01-3.995h-50.981c-2.215 0-5.212-1.327-6.693-2.964L155.289 77.08c-17.795-19.65-41.628-16.256-53.234 7.58l-38.736 79.557C60.42 170.172 52.705 175 46.077 175H29.359a3.996 3.996 0 0 0-3.994 3.995v10.01A4 4 0 0 0 29.372 193h24.7c8.835 0 19.208-6.395 23.174-14.293l43.645-86.914c3.964-7.894 12.233-9.228 18.473-2.974l17.184 17.219c3.123 3.13 9.242 5.667 13.647 5.667H226.7a4.005 4.005 0 0 0 4.004-3.994v-8.512z" fill-rule="evenodd"></path>
              </svg>
          </div> 
      
      </div>
    </section>

    
    <script src="js/home.js"></script>
</body>
</html>