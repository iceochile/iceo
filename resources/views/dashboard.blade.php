<x-app-layout>

    <div class="max-w-7xl mx-auto relative bg-white overflow-hidden mt-2">
        <div class="max-w-7xl mx-auto">
          <div class="relative z-10 pb-8 bg-white sm:pb-16 md:pb-20 lg:max-w-2xl lg:w-full lg:pb-28 xl:pb-32">
            <svg class="hidden lg:block absolute right-0 inset-y-0 h-full w-48 text-white transform translate-x-1/2" fill="currentColor" viewBox="0 0 100 100" preserveAspectRatio="none" aria-hidden="true">
              <polygon points="50,0 100,0 50,100 0,100" />
            </svg>
      
         
            <main class="mt-10 mx-auto max-w-7xl px-4 sm:mt-12 sm:px-6 md:mt-16 lg:mt-0 lg:px-8 xl:pt-14">
              <div class="sm:text-center lg:text-left pt-0 md:pt-10">
                <h1 class="text-4xl tracking-tight font-extrabold text-gray-900 sm:text-5xl md:text-6xl">
                  <span class="block xl:inline">Becoming a Project Manager</span>
                  <span class="block text-indigo-600 xl:inline">Controla Tu empresa de Forma Online</span>
                </h1>
                <p class="mt-3 text-base text-gray-500 sm:mt-5 sm:text-lg sm:max-w-xl sm:mx-auto md:mt-5 md:text-xl lg:mx-0">Creamos la realidad virtual que tus proyectos necesitan, desde una simple pagina web con carrito de compras, hasta flexibles soluciones a medida que llevamos a tu propia sucursal u oficina virtual.</p>
                <div class="mt-5 sm:mt-8 sm:flex sm:justify-center lg:justify-start">
                      @auth
                        <div class="rounded-md shadow">
                          <a href="{{ route('login') }}" class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 md:py-4 md:text-lg md:px-10">
                          Intranet
                        </a>
                        </div>
                      @else
                          <div class="rounded-md shadow">
                            <a href="{{ route('login') }}" class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 md:py-4 md:text-lg md:px-10">
                            Ingresar
                          </a>
                        </div>
                      @endauth  
                      
                   
                  <div class="mt-3 sm:mt-0 sm:ml-3">
                    <a href="#" class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-indigo-700 bg-indigo-100 hover:bg-indigo-200 md:py-4 md:text-lg md:px-10"> Ver Productos </a>
                  </div>
                </div>
              </div>
            </main>
          </div>
        </div>
        <div class="lg:absolute lg:inset-y-0 lg:right-0 lg:w-1/2">
          <img class="h-56 w-full object-cover sm:h-72 md:h-96 lg:w-full lg:h-full" src="https://images.unsplash.com/photo-1551434678-e076c223a692?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=2850&q=80" alt="">
        </div>
    </div>

    <div class="max-w-7xl mx-auto relative bg-white pt-16 pb-32 overflow-hidden">
        <div class="">
          <div class="lg:mx-auto lg:max-w-7xl lg:px-8 lg:grid lg:grid-cols-2 lg:grid-flow-col-dense lg:gap-24">
            <div class="px-4 max-w-xl mx-auto sm:px-6 lg:py-32 lg:max-w-none lg:mx-0 lg:px-0 lg:col-start-2">
              <div>
                <div>
                  <span class="h-12 w-12 rounded-md flex items-center justify-center bg-indigo-600">
                    <!-- Heroicon name: outline/sparkles -->
                    <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z" />
                    </svg>
                  </span>
                </div>
                <div class="mt-6">
                  <h2 class="text-3xl font-extrabold tracking-tight text-gray-900">Pagina Web / Carrito de Compras / Intranet</h2>
                  <p class="mt-4 text-lg text-gray-500">Con I-CEO no solo mejorarás la imágen de tu empresa con la mejor presencia web personzalizada rápida y flexible, también podrás simplificar labores de tus trabajadores ó transformar digitalmente tu negocio a través de soluciones a medida que llevamos al diseño y desarrollo de tu propia intranet web y móvil. </p>
                  <div class="flex justify-between mt-6">
                    <a href="#" class="inline-flex px-4 py-2 border border-transparent text-base font-medium rounded-md shadow-sm text-white bg-indigo-600 hover:bg-indigo-700"> Contratar</a>
                    <a href="#" class="inline-flex px-4 py-2 border border-transparent text-base font-medium rounded-md shadow-sm text-white bg-gray-600 hover:bg-gray-700"> Catalogo de Proyectos</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="mt-12 sm:mt-16 lg:mt-0 lg:col-start-1">
              <div class="pr-4 -ml-48 sm:pr-6 md:-ml-16 lg:px-0 lg:m-0 lg:relative lg:h-4/6 h">
                <img class="w-full rounded-xl shadow-xl ring-1 ring-black ring-opacity-5 lg:absolute lg:right-0 lg:h-full lg:w-auto lg:max-w-none" src="https://okhosting.com/resources/uploads/2014/08/tipos-de-paginas-web1.jpg" alt="Customer profile user interface">
              </div>
            </div>
          </div>
        </div>
        <div class="relative">
          <div class="lg:mx-auto lg:max-w-7xl lg:px-8 lg:grid lg:grid-cols-2 lg:grid-flow-col-dense lg:gap-24">
            <div class="px-4 max-w-xl mx-auto sm:px-6 lg:py-16 lg:max-w-none lg:mx-0 lg:px-0">
              <div class="mt-12">
                <div>
                  <span class="h-12 w-12 rounded-md flex items-center justify-center bg-indigo-600">
                    <!-- Heroicon name: outline/inbox -->
                    <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4" />
                    </svg>
                  </span>
                </div>
                <div class="mt-6">
                  <h2 class="text-3xl font-extrabold tracking-tight text-gray-900">Correo / email Corporativo</h2>
                  <p class="mt-4 text-lg text-gray-500">Ofrecemos curabitur ullamcorper posuere nunc sed. Ornare iaculis bibendum malesuada faucibus lacinia porttitor. Pulvinar laoreet sagittis viverra duis. In venenatis sem arcu pretium pharetra at. Lectus viverra dui tellus ornare pharetra.</p>
                  <div class="mt-6">
                    <a href="#" class="inline-flex px-4 py-2 border border-transparent text-base font-medium rounded-md shadow-sm text-white bg-indigo-600 hover:bg-indigo-700">Contratar </a>
                  </div>
                </div>
              </div>
              <div class="mt-8 border-t border-gray-200 pt-6">
                <blockquote>
                  <div>
                    <p class="text-base text-gray-500">&ldquo;Cras velit quis eros eget rhoncus lacus ultrices sed diam. Sit orci risus aenean curabitur donec aliquet. Mi venenatis in euismod ut.&rdquo;</p>
                  </div>
                  <footer class="mt-3">
                    <div class="flex items-center space-x-3">
                      <div class="flex-shrink-0">
                        <img class="h-6 w-6 rounded-full" src="https://images.unsplash.com/photo-1509783236416-c9ad59bae472?ixlib=rb-=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=8&w=1024&h=1024&q=80" alt="">
                      </div>
                      <div class="text-base font-medium text-gray-700">Marcia Hill, Digital Marketing Manager</div>
                    </div>
                  </footer>
                </blockquote>
              </div>
            </div>
            <div class="mt-12 sm:mt-16 lg:mt-0">
              <div class="pl-4 -mr-48 sm:pl-6 md:-mr-16 lg:px-0 lg:m-0 lg:relative lg:h-full">
                <img class="w-full rounded-xl shadow-xl ring-1 ring-black ring-opacity-5 lg:absolute lg:left-0 lg:h-full lg:w-auto lg:max-w-none" src="https://tailwindui.com/img/component-images/inbox-app-screenshot-1.jpg" alt="Inbox user interface">
              </div>
            </div>
          </div>
        </div>
        
    </div>

    <!--
        This example requires Tailwind CSS v2.0+ 
        
        This example requires some changes to your config:
        
        ```
        // tailwind.config.js
        module.exports = {
            // ...
            plugins: [
            // ...
            require('@tailwindcss/forms'),
            ],
        }
        ```
        -->
    <footer class="bg-gray-800" aria-labelledby="footer-heading">
            <h2 id="footer-heading" class="sr-only">Footer</h2>
            <div class="max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:py-16 lg:px-8">
            <div class="pb-8 xl:grid xl:grid-cols-5 xl:gap-8">
                <div class="grid grid-cols-2 gap-8 xl:col-span-4">
                <div class="md:grid md:grid-cols-2 md:gap-8">
                    <div>
                    <h3 class="text-sm font-semibold text-gray-400 tracking-wider uppercase">Soluciones</h3>
                    <ul role="list" class="mt-4 space-y-4">
                        <li>
                        <a href="#" class="text-base text-gray-300 hover:text-white"> Marketing </a>
                        </li>
        
                        <li>
                        <a href="#" class="text-base text-gray-300 hover:text-white"> Analytics </a>
                        </li>
        
                        <li>
                        <a href="#" class="text-base text-gray-300 hover:text-white">E-Commerce </a>
                        </li>
        
                        <li>
                        <a href="#" class="text-base text-gray-300 hover:text-white"> Insights </a>
                        </li>
                    </ul>
                    </div>
                    <div class="mt-12 md:mt-0">
                    <h3 class="text-sm font-semibold text-gray-400 tracking-wider uppercase">Soporte</h3>
                    <ul role="list" class="mt-4 space-y-4">
                        <li>
                        <a href="#" class="text-base text-gray-300 hover:text-white"> Precios </a>
                        </li>
        
                        <li>
                        <a href="#" class="text-base text-gray-300 hover:text-white"> Documentación </a>
                        </li>
        
                        <li>
                        <a href="#" class="text-base text-gray-300 hover:text-white"> Guides </a>
                        </li>
        
                        <li>
                        <a href="#" class="text-base text-gray-300 hover:text-white"> API Status </a>
                        </li>
                    </ul>
                    </div>
                </div>
                <div class="md:grid md:grid-cols-2 md:gap-8">
                    <div>
                    <h3 class="text-sm font-semibold text-gray-400 tracking-wider uppercase">Compañia</h3>
                    <ul role="list" class="mt-4 space-y-4">
                        <li>
                        <a href="#" class="text-base text-gray-300 hover:text-white"> Sobre Nosotros </a>
                        </li>
        
                        <li>
                        <a href="#" class="text-base text-gray-300 hover:text-white"> Blog </a>
                        </li>
        
                        <li>
                        <a href="#" class="text-base text-gray-300 hover:text-white"> Clientes </a>
                        </li>
        
                        <li>
                        <a href="#" class="text-base text-gray-300 hover:text-white"> Press </a>
                        </li>
        
                        <li>
                        <a href="#" class="text-base text-gray-300 hover:text-white"> Partners </a>
                        </li>
                    </ul>
                    </div>
                    <div class="mt-12 md:mt-0">
                    <h3 class="text-sm font-semibold text-gray-400 tracking-wider uppercase">Legalidad</h3>
                    <ul role="list" class="mt-4 space-y-4">
                        <li>
                        <a href="#" class="text-base text-gray-300 hover:text-white"> Claim </a>
                        </li>
        
                        <li>
                        <a href="#" class="text-base text-gray-300 hover:text-white"> Privacidad </a>
                        </li>
        
                        <li>
                        <a href="#" class="text-base text-gray-300 hover:text-white"> Terminos y condiciones </a>
                        </li>
                    </ul>
                    </div>
                </div>
                </div>
                <div class="mt-12 xl:mt-0">
                <h3 class="text-sm font-semibold text-gray-400 tracking-wider uppercase">Idioma &amp; MONEDA</h3>
                <form class="mt-4 sm:max-w-xs">
                    <fieldset class="w-full">
                    <label for="language" class="sr-only">Language</label>
                    <div class="relative">
                        <select id="language" name="language" class="appearance-none block w-full bg-none bg-gray-700 border border-transparent rounded-md py-2 pl-3 pr-10 text-base text-white focus:outline-none focus:ring-white focus:border-white sm:text-sm">
                        <option selected>Español</option>
                        <option>Ingles</option>
                        <option>German</option>
                        <option>Japanese</option>
                        <option>frances</option>
                        </select>
                        <div class="pointer-events-none absolute inset-y-0 right-0 px-2 flex items-center">
                        <!-- Heroicon name: solid/chevron-down -->
                        <svg class="h-4 w-4 text-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                        </svg>
                        </div>
                    </div>
                    </fieldset>
                    <fieldset class="mt-4 w-full">
                    <label for="currency" class="sr-only">MONEDA</label>
                    <div class="mt-1.5 relative">
                        <select id="currency" name="currency" class="appearance-none w-full bg-none bg-gray-700 border border-transparent rounded-md block py-2 pl-3 pr-10 text-base text-white focus:outline-none focus:ring-white focus:border-white sm:text-sm">
                        <option>ARS</option>
                        <option selected>AUD</option>
                        <option>CAD</option>
                        <option>CHF</option>
                        <option>EUR</option>
                        <option>GBP</option>
                        <option>JPY</option>
                        <option>USD</option>
                        </select>
                        <div class="pointer-events-none absolute inset-y-0 right-0 px-2 flex items-center">
                        <!-- Heroicon name: solid/chevron-down -->
                        <svg class="h-4 w-4 text-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                        </svg>
                        </div>
                    </div>
                    </fieldset>
                </form>
                </div>
            </div>
            <div class="border-t border-gray-700 pt-8 lg:flex lg:items-center lg:justify-between xl:mt-0">
                <div>
                <h3 class="text-sm font-semibold text-gray-400 tracking-wider uppercase">Suscribete a nuestras novedades</h3>
                <p class="mt-2 text-base text-gray-300">Continuamente enviamos información y ofertas importantes.</p>
                </div>
                <form class="mt-4 sm:flex sm:max-w-md lg:mt-0">
                <label for="email-address" class="sr-only">Email address</label>
                <input type="email" name="email-address" id="email-address" autocomplete="email" required class="appearance-none min-w-0 w-full bg-white border border-transparent rounded-md py-2 px-4 text-base text-gray-900 placeholder-gray-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-800 focus:ring-white focus:border-white focus:placeholder-gray-400 sm:max-w-xs" placeholder="Ingresa tu email">
                <div class="mt-3 rounded-md sm:mt-0 sm:ml-3 sm:flex-shrink-0">
                    <button type="submit" class="w-full bg-indigo-500 border border-transparent rounded-md py-2 px-4 flex items-center justify-center text-base font-medium text-white hover:bg-indigo-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-800 focus:ring-indigo-500">Subscribirme</button>
                </div>
                </form>
            </div>
            <div class="mt-8 border-t border-gray-700 pt-8 md:flex md:items-center md:justify-between">
                <div class="flex space-x-6 md:order-2">
                <a href="#" class="text-gray-400 hover:text-gray-300">
                    <span class="sr-only">Facebook</span>
                    <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                    <path fill-rule="evenodd" d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z" clip-rule="evenodd" />
                    </svg>
                </a>
        
                <a href="https://www.instagram.com/i_ceo.cl/" class="text-gray-400 hover:text-gray-300">
                    <span class="sr-only">Instagram</span>
                    <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                    <path fill-rule="evenodd" d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z" clip-rule="evenodd" />
                    </svg>
                </a>
        
                <a href="#" class="text-gray-400 hover:text-gray-300">
                    <span class="sr-only">Twitter</span>
                    <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                    <path d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84" />
                    </svg>
                </a>
        
                </div>
                <p class="mt-8 text-base text-gray-400 md:mt-0 md:order-1">&copy; 2022 I-Ceo Chile, Inc.Todos los derechos reservados.</p>
            </div>
            </div>
    </footer>
            
</x-app-layout>
