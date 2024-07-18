<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        @vite(['resources/css/app.css','resources/js/app.js'])
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&family=Quicksand:wght@400;700&display=swap" rel="stylesheet">
        <title>Impacto Juvenil 2024</title>
    </head>
    <body>        

        <nav class="bg-gray-900 fixed w-full z-20 top-0 start-0 border-b border-gray-600">
            <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
                <a href="https://flowbite.com/" class="flex items-center space-x-3 rtl:space-x-reverse">
                    <img src="{{ asset('img/logo-oficial-transparente-blanco.png') }}" class="h-8" alt="CCA Logo Oficial">
                    <span class="self-center text-2xl font-semibold whitespace-nowrap text-white">CCA</span>
                </a>

                <div class="flex md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
                    <button type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Comprar boletos</button>
                    
                    <button data-collapse-toggle="navbar-sticky" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-sticky" aria-expanded="false">
                        <span class="sr-only">Open main menu</span>
                        <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
                        </svg>
                    </button>
                </div>

                <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-sticky">
                    <ul class="flex flex-col p-4 md:p-0 mt-4 font-medium border  rounded-lg  md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 bg-gray-800 md:bg-gray-900 border-gray-700">
                        <li>
                            <a href="#" class="block py-2 px-3 text-gray-900 rounded md:hover:bg-transparent md:p-0 md:hover:text-blue-500 text-white hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent border-gray-700">Información</a>
                        </li>
                        <li>
                            <a href="#" class="block py-2 px-3 text-gray-900 rounded md:hover:bg-transparent md:p-0 md:hover:text-blue-500 text-white hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent border-gray-700">Contáctanos</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>


        

        <section class="bg-center bg-no-repeat bg-[url('http://imgfz.com/i/eAbzSjJ.jpeg')] bg-gray-500 bg-blend-multiply">
            <div class="px-4 mx-auto max-w-screen-xl text-center py-24 lg:py-56">
                <h1 class="mb-4 text-4xl font-extrabold tracking-tight leading-none text-white md:text-5xl lg:text-6xl">Congreso Impacto Juvenil 2024</h1>
                <p class="mb-8 text-lg font-quicksand text-gray-300 lg:text-xl sm:px-16 lg:px-48">
                    No pierdas la oportunidad de buscar más de DIOS, regístrate a este congreso, tendremos invitados especiales como: La Banda Conquistando Fronteras, Misael Barrera & Kharis Millán
                </p>
                
                <div class="flex flex-col space-y-4 sm:flex-row sm:justify-center sm:space-y-0">
                    <a href="#" class="font-quicksand inline-flex justify-center items-center py-3 px-5 text-base font-medium text-center text-white rounded-lg bg-blue-700 hover:bg-blue-600 focus:ring-4 focus:ring-blue-900">
                        Comprar boletos
                        <svg class="w-3.5 h-3.5 ms-2 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                        </svg>
                    </a>
                    <a href="#" class="font-quicksand inline-flex justify-center hover:text-gray-900 items-center py-3 px-5 sm:ms-4 text-base font-medium text-center text-white rounded-lg border border-white hover:bg-gray-100 focus:ring-4 focus:ring-gray-400">
                        Más Información
                    </a>  
                </div>
            </div>
        </section>



        <section class="p-10 font-quicksand text-justify">
            <h1 class="text-2xl font-bold">Impacto Juvenil 2024</h1>
            <p class="pt-2 text-gray-500">Deliver great service experiences fast - without the complexity of traditional ITSM solutions.Accelerate critical development work, eliminate toil, and deploy changes with ease, with a complete audit trail for every change.</p>
        </section>
        




    </body>
</html>