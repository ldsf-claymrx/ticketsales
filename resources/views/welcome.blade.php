<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        @vite(['resources/css/app.css','resources/js/app.js'])
        <link rel="shortcut icon" type="image/png" href="{{asset('img/favicon.png')}}">
        <title>Impacto Juvenil 2024</title>
    </head>
    <body>        

        <nav class="bg-gray-900 fixed w-full z-20 top-0 start-0 border-b border-gray-600">
            <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
                <a href="https://flowbite.com/" class="flex items-center space-x-3 rtl:space-x-reverse">
                    <img src="{{ asset('img/logo-oficial-transparente-blanco.png') }}" class="h-8" alt="CCA Logo Oficial">
                    <span class="self-center text-2xl font-bold whitespace-nowrap text-white">CCA</span>
                </a>

                <div class="flex md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
                    <button type="button" class="text-white bg-blue-600 hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-blue-800 font-medium rounded-lg text-sm px-4 py-2 text-center">Registrar mis boletos</button>
                    
                    <button data-collapse-toggle="navbar-sticky" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-400 rounded-lg md:hidden hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-gray-600" aria-controls="navbar-sticky" aria-expanded="false">
                        <span class="sr-only">Open main menu</span>
                        <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
                        </svg>
                    </button>
                </div>

                <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-sticky">
                    <ul class="flex flex-col p-4 md:p-0 mt-4 font-medium border  rounded-lg  md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 bg-gray-800 md:bg-gray-900 border-gray-700">
                        <li>
                            <a href="#info" class="block py-2 px-3 text-gray-900 rounded md:hover:bg-transparent md:p-0 md:hover:text-blue-500 text-white hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent border-gray-700">Información</a>
                        </li>
                        <li>
                            <a href="#footer" class="block py-2 px-3 text-gray-900 rounded md:hover:bg-transparent md:p-0 md:hover:text-blue-500 text-white hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent border-gray-700">Contáctanos</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>


        

        <section class="bg-cover bg-no-repeat bg-[url('http://imgfz.com/i/a4jgMh7.png')] bg-gray-700 bg-blend-multiply">
            <div class="px-4 mx-auto max-w-screen-xl text-center py-24 lg:py-56">
                <h1 class="mb-4 pt-9 text-4xl font-extrabold tracking-tight leading-none text-white md:text-5xl lg:text-6xl">Congreso Impacto Juvenil 2024</h1>
                <p class="mb-8 text-lg text-gray-300 lg:text-xl sm:px-16 lg:px-48">
                    ¡Registra tus boletos ahora!
                </p>
                
                <div class="flex flex-col space-y-4 sm:flex-row sm:justify-center sm:space-y-0">
                    <a href="#" class="inline-flex justify-center items-center py-3 px-5 text-base font-medium text-center text-white rounded-lg bg-blue-700 hover:bg-blue-600 focus:ring-4 focus:ring-blue-900">
                        Registrar mis boletos
                        <svg class="w-3.5 h-3.5 ms-2 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                        </svg>
                    </a>
                    <a href="#info" id="info" class="inline-flex justify-center hover:text-gray-900 items-center py-3 px-5 sm:ms-4 text-base font-medium text-center text-white rounded-lg border border-white hover:bg-gray-100 focus:ring-4 focus:ring-gray-400">
                        Más Información
                    </a>  
                </div>
            </div>
        </section>

        <section class="bg-white dark:bg-gray-900">
            <div class="py-8 px-4 mx-auto max-w-screen-xl text-center lg:py-16 lg:px-6">
                <div class="mx-auto mb-8 max-w-screen-sm lg:mb-16">
                    <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white">Impacto Juvenil 2024</h2>
                    <p class="font-light text-gray-500 sm:text-xl dark:text-gray-400">
                        Este 22 & 23 de noviembre 2024, con sede en: Auditorio Municipal de Altamira, Tamaulipas. 
                        Tendremos nuestro Congreso "Impacto Juvenil 2024", que estará dirigido a todos los jóvenes de la zona conurbada de 
                        Altamira, Tampico y Madero. Y a todas las iglesias que deseen acompañarnos.

                        <br><br> ¡Tendremos invitados especiales!
                    </p>
                </div> 
                <div class="grid gap-8 lg:gap-16 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-2">
                    <div class="text-center text-gray-500 dark:text-gray-400">
                        <img class="mx-auto mb-4 w-36 h-36 rounded-full" src="{{ asset('img/conquistandofronteras.png') }}" style="object-fit: cover;" alt="Banda Conquistando Fronteras">
                        <h3 class="mb-1 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Banda Conquistando Fronteras</h3>
                        <p>Alabanza & Adoración</p>
                        <ul class="flex justify-center mt-4 space-x-4">
                            <li>
                                <a href="https://www.facebook.com/MusicaICF" target="_blank" class="text-[#39569C] hover:text-[#0F2F7C]">
                                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path fill-rule="evenodd" d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z" clip-rule="evenodd" /></svg>
                                </a>
                            </li>
                            <li>
                                <a href="https://x.com/BandaCF" target="_blank" class="text-gray-800 hover: text-gray-800">
                                    <svg class="w-6 h-5 mt-0.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24"><path d="M13.795 10.533 20.68 2h-3.073l-5.255 6.517L7.69 2H1l7.806 10.91L1.47 22h3.074l5.705-7.07L15.31 22H22l-8.205-11.467Zm-2.38 2.95L9.97 11.464 4.36 3.627h2.31l4.528 6.317 1.443 2.02 6.018 8.409h-2.31l-4.934-6.89Z"/></svg>      
                                </a>
                            </li>
                            <li>
                                <a href="https://www.instagram.com/musicaicf/" target="_blank" class="text-gray-800 hover: text-gray-800">
                                    <svg class="w-6 h-6" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                        <defs>
                                          <linearGradient id="degradado" x1="0%" y1="0%" x2="100%" y2="0%">
                                            <stop offset="40%" stop-color="#fc2fa8"/>
                                            <stop offset="100%" stop-color="#007bff"/>
                                          </linearGradient>
                                        </defs>
                                        
                                        <path fill="url(#degradado)" fill-rule="evenodd" d="M3 8a5 5 0 0 1 5-5h8a5 5 0 0 1 5 5v8a5 5 0 0 1-5 5H8a5 5 0 0 1-5-5V8Zm5-3a3 3 0 0 0-3 3v8a3 3 0 0 0 3 3h8a3 3 0 0 0 3-3V8a3 3 0 0 0-3-3H8Zm7.597 2.214a1 1 0 0 1 1-1h.01a1 1 0 1 1 0 2h-.01a1 1 0 0 1-1-1ZM12 9a3 3 0 1 0 0 6 3 3 0 0 0 0-6Zm-5 3a5 5 0 1 1 10 0 5 5 0 0 1-10 0Z" clip-rule="evenodd"/>
                                      </svg>                                      
                                </a>
                            </li>
                            <li>
                                <a href="https://www.youtube.com/@BandaCFoficial" target="_blank" class="text-[#FC0F0F] hover:text-[#B40F0F]">
                                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path fill-rule="evenodd" d="M21.7 8.037a4.26 4.26 0 0 0-.789-1.964 2.84 2.84 0 0 0-1.984-.839c-2.767-.2-6.926-.2-6.926-.2s-4.157 0-6.928.2a2.836 2.836 0 0 0-1.983.839 4.225 4.225 0 0 0-.79 1.965 30.146 30.146 0 0 0-.2 3.206v1.5a30.12 30.12 0 0 0 .2 3.206c.094.712.364 1.39.784 1.972.604.536 1.38.837 2.187.848 1.583.151 6.731.2 6.731.2s4.161 0 6.928-.2a2.844 2.844 0 0 0 1.985-.84 4.27 4.27 0 0 0 .787-1.965 30.12 30.12 0 0 0 .2-3.206v-1.516a30.672 30.672 0 0 0-.202-3.206Zm-11.692 6.554v-5.62l5.4 2.819-5.4 2.801Z" clip-rule="evenodd"/></svg>
                                </a>
                            </li>
                        </ul>
                    </div>

                    

                    <div class="text-center text-gray-500 dark:text-gray-400">
                        <img class="mx-auto mb-4 w-36 h-36 rounded-full" src="{{ asset('img/misael.png') }}" style="object-fit: cover;" alt="Banda Conquistando Fronteras">
                        <h3 class="mb-1 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Misael Barrera & Kharis Millán</h3>
                        <p>Portadores de la Palabra de DIOS</p>
                        <ul class="flex justify-center mt-4 space-x-4">
                            <li>
                                <a href="https://www.facebook.com/misael.barrera.7" target="_blank" class="text-[#39569C] hover:text-[#0F2F7C]">
                                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path fill-rule="evenodd" d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z" clip-rule="evenodd" /></svg>
                                </a>
                            </li>
                            <li>
                                <a href="https://x.com/MisaBarrera" target="_blank" class="text-gray-800 hover: text-gray-800">
                                    <svg class="w-6 h-5 mt-0.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24"><path d="M13.795 10.533 20.68 2h-3.073l-5.255 6.517L7.69 2H1l7.806 10.91L1.47 22h3.074l5.705-7.07L15.31 22H22l-8.205-11.467Zm-2.38 2.95L9.97 11.464 4.36 3.627h2.31l4.528 6.317 1.443 2.02 6.018 8.409h-2.31l-4.934-6.89Z"/></svg>      
                                </a>
                            </li>
                            <li>
                                <a href="https://www.instagram.com/icfcdmx/" target="_blank" class="text-gray-800 hover: text-gray-800">
                                    <svg class="w-6 h-6" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                        <defs>
                                          <linearGradient id="degradado" x1="0%" y1="0%" x2="100%" y2="0%">
                                            <stop offset="40%" stop-color="#fc2fa8"/>
                                            <stop offset="100%" stop-color="#007bff"/>
                                          </linearGradient>
                                        </defs>
                                        
                                        <path fill="url(#degradado)" fill-rule="evenodd" d="M3 8a5 5 0 0 1 5-5h8a5 5 0 0 1 5 5v8a5 5 0 0 1-5 5H8a5 5 0 0 1-5-5V8Zm5-3a3 3 0 0 0-3 3v8a3 3 0 0 0 3 3h8a3 3 0 0 0 3-3V8a3 3 0 0 0-3-3H8Zm7.597 2.214a1 1 0 0 1 1-1h.01a1 1 0 1 1 0 2h-.01a1 1 0 0 1-1-1ZM12 9a3 3 0 1 0 0 6 3 3 0 0 0 0-6Zm-5 3a5 5 0 1 1 10 0 5 5 0 0 1-10 0Z" clip-rule="evenodd"/>
                                      </svg>                                      
                                </a>
                            </li>
                            <li>
                                <a href="https://www.youtube.com/@ICFCDMX" target="_blank" class="text-[#FC0F0F] hover:text-[#B40F0F]">
                                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path fill-rule="evenodd" d="M21.7 8.037a4.26 4.26 0 0 0-.789-1.964 2.84 2.84 0 0 0-1.984-.839c-2.767-.2-6.926-.2-6.926-.2s-4.157 0-6.928.2a2.836 2.836 0 0 0-1.983.839 4.225 4.225 0 0 0-.79 1.965 30.146 30.146 0 0 0-.2 3.206v1.5a30.12 30.12 0 0 0 .2 3.206c.094.712.364 1.39.784 1.972.604.536 1.38.837 2.187.848 1.583.151 6.731.2 6.731.2s4.161 0 6.928-.2a2.844 2.844 0 0 0 1.985-.84 4.27 4.27 0 0 0 .787-1.965 30.12 30.12 0 0 0 .2-3.206v-1.516a30.672 30.672 0 0 0-.202-3.206Zm-11.692 6.554v-5.62l5.4 2.819-5.4 2.801Z" clip-rule="evenodd"/></svg>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>  
            </div>
        </section>

        <footer id="footer" class="p-4 bg-gray-800 md:p-8 lg:p-10">
            <div class="mx-auto max-w-screen-xl text-center">
                <a href="https://ccaltamira.com" target="_blank" class="flex justify-center items-center text-2xl font-semibold text-white">
                    <img src="{{ asset('img/logo-oficial-transparente-blanco.png') }}" width="24px" class="mr-2" alt="CCA">
                    Comunidad Cristiana Altamira 
                </a>
                <p class="my-6 text-gray-400">Es un gusto saludarte, te invitamos a visitar nuestra página web, para saber más de nosotros. DIOS te bendiga.</p>
                <ul class="flex flex-wrap justify-center items-center mb-6 text-white">
                    <li>
                        <a href="https://ccaltamira.com" target="_blank" rel="Comunidad Cristina Altamira" class="inline-flex items-center text-blue-500 mr-4 hover:underline md:mr-6">
                            <svg class="w-4 h-4 mr-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                <path fill-rule="evenodd" d="M12.037 21.998a10.313 10.313 0 0 1-7.168-3.049 9.888 9.888 0 0 1-2.868-7.118 9.947 9.947 0 0 1 3.064-6.949A10.37 10.37 0 0 1 12.212 2h.176a9.935 9.935 0 0 1 6.614 2.564L16.457 6.88a6.187 6.187 0 0 0-4.131-1.566 6.9 6.9 0 0 0-4.794 1.913 6.618 6.618 0 0 0-2.045 4.657 6.608 6.608 0 0 0 1.882 4.723 6.891 6.891 0 0 0 4.725 2.07h.143c1.41.072 2.8-.354 3.917-1.2a5.77 5.77 0 0 0 2.172-3.41l.043-.117H12.22v-3.41h9.678c.075.617.109 1.238.1 1.859-.099 5.741-4.017 9.6-9.746 9.6l-.215-.002Z" clip-rule="evenodd"/>
                              </svg>                              
                            Página Web Oficial
                        </a>
                    </li>
                    <li>
                        <a href="https://www.facebook.com/comunidadcristianaaltamira" target="_blank" rel="CCA Facebook" class="inline-flex items-center text-blue-500 mr-4 hover:underline md:mr-6">
                            <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                <path fill-rule="evenodd" d="M13.135 6H15V3h-1.865a4.147 4.147 0 0 0-4.142 4.142V9H7v3h2v9.938h3V12h2.021l.592-3H12V6.591A.6.6 0 0 1 12.592 6h.543Z" clip-rule="evenodd"/>
                              </svg>                              
                            Facebook
                        </a>
                    </li>
                    <li>
                        <a href="https://www.instagram.com/comunidadcristianacca/" target="_blank" rel="CCA Instagram" class="inline-flex items-center text-blue-500 mr-4 hover:underline md:mr-6">
                            <svg class="w-4 h-4 mr-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                <path fill="currentColor" fill-rule="evenodd" d="M3 8a5 5 0 0 1 5-5h8a5 5 0 0 1 5 5v8a5 5 0 0 1-5 5H8a5 5 0 0 1-5-5V8Zm5-3a3 3 0 0 0-3 3v8a3 3 0 0 0 3 3h8a3 3 0 0 0 3-3V8a3 3 0 0 0-3-3H8Zm7.597 2.214a1 1 0 0 1 1-1h.01a1 1 0 1 1 0 2h-.01a1 1 0 0 1-1-1ZM12 9a3 3 0 1 0 0 6 3 3 0 0 0 0-6Zm-5 3a5 5 0 1 1 10 0 5 5 0 0 1-10 0Z" clip-rule="evenodd"/>
                            </svg>                              
                            Instagram
                        </a>
                    </li>
                    <li>
                        <a href="https://www.youtube.com/@ComunidadCristianaAltamira" target="_blank" rel="CCA YouTube" class="inline-flex items-center text-blue-500 mr-4 hover:underline md:mr-6">
                            <svg class="w-4 h-4 mr-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                <path fill-rule="evenodd" d="M21.7 8.037a4.26 4.26 0 0 0-.789-1.964 2.84 2.84 0 0 0-1.984-.839c-2.767-.2-6.926-.2-6.926-.2s-4.157 0-6.928.2a2.836 2.836 0 0 0-1.983.839 4.225 4.225 0 0 0-.79 1.965 30.146 30.146 0 0 0-.2 3.206v1.5a30.12 30.12 0 0 0 .2 3.206c.094.712.364 1.39.784 1.972.604.536 1.38.837 2.187.848 1.583.151 6.731.2 6.731.2s4.161 0 6.928-.2a2.844 2.844 0 0 0 1.985-.84 4.27 4.27 0 0 0 .787-1.965 30.12 30.12 0 0 0 .2-3.206v-1.516a30.672 30.672 0 0 0-.202-3.206Zm-11.692 6.554v-5.62l5.4 2.819-5.4 2.801Z" clip-rule="evenodd"/>
                            </svg>                              
                            YouTube
                        </a>
                    </li>
                </ul>
                <span class="text-sm font-bold text-gray-400 sm:text-center">
                    Create by
                    <a href="https://www.instagram.com/davidclaymrx/" target="_blank" rel="davidclaymrx" class="inline-flex justify-center items-center hover:underline">
                        DavidClayMRX
                        <svg class="w-6 h-6 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                            <path fill-rule="evenodd" d="M12 2c-.791 0-1.55.314-2.11.874l-.893.893a.985.985 0 0 1-.696.288H7.04A2.984 2.984 0 0 0 4.055 7.04v1.262a.986.986 0 0 1-.288.696l-.893.893a2.984 2.984 0 0 0 0 4.22l.893.893a.985.985 0 0 1 .288.696v1.262a2.984 2.984 0 0 0 2.984 2.984h1.262c.261 0 .512.104.696.288l.893.893a2.984 2.984 0 0 0 4.22 0l.893-.893a.985.985 0 0 1 .696-.288h1.262a2.984 2.984 0 0 0 2.984-2.984V15.7c0-.261.104-.512.288-.696l.893-.893a2.984 2.984 0 0 0 0-4.22l-.893-.893a.985.985 0 0 1-.288-.696V7.04a2.984 2.984 0 0 0-2.984-2.984h-1.262a.985.985 0 0 1-.696-.288l-.893-.893A2.984 2.984 0 0 0 12 2Zm3.683 7.73a1 1 0 1 0-1.414-1.413l-4.253 4.253-1.277-1.277a1 1 0 0 0-1.415 1.414l1.985 1.984a1 1 0 0 0 1.414 0l4.96-4.96Z" clip-rule="evenodd"/>
                        </svg>                          
                    </a>
                </span>
            </div>
        </footer>
    </body>
</html>