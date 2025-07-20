<button class='hidden relative -z-10' data-modal-target="deputy-modal"></button>

<div id="deputy-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative p-4 w-full max-w-6xl max-h-full">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow-sm dark:bg-gray-700">
            <!-- Modal header -->
            <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600 border-gray-200">
                <h3 class="text-xl font-semibold text-white">
                    Dados do deputado
                </h3>
                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" onclick='deputyModal.hide()'>
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <!-- Modal body -->
            <div class="p-4 md:p-5 space-y-4">
                <div class="grid gap-4 mb-4 grid-cols-2">
                    
                    <div class="col-span-2">
                        <span for="name" class="block mb-2 text-sm font-medium text-white">Nome</span>
                        <p name="name" id="name" class="text-sm rounded-lg border-none block w-full p-2.5 bg-gray-600 text-white focus:ring-primary-500">
                            jhon
                        </p>
                    </div>
                    
                    
                    <div class="col-span-2 sm:col-span-1">
                        <span for="email" class="block mb-2 text-sm font-medium text-white">Email</span>
                        <p name="email" id="email" class="text-sm rounded-lg border-none block w-full p-2.5 bg-gray-600 text-white focus:ring-primary-500">
                            jhon@doe
                        </p>
                    </div>

                    <div class='col-span-2 md:col-span-1 md:row-span-3 flex justify-center md:justify-start order-first md:order-none'>
                        <div class='row-span-2 max-h-60 overflow-hidden rounded-md mx-auto'>
                            <img id='photo' class='object-cover object-center w-full max-h-60' src='https://images.unsplash.com/photo-1642364861013-2c33f2dcfbcf?q=80&w=604&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D' alt='foto do deputado' />
                        </div>
                    </div>

                    <div class="col-span-2 sm:col-span-1">
                        <span for="party_acronym" class="block mb-2 text-sm font-medium text-white">Partido</span>
                        <p name="party_acronym" id="party_acronym" class="text-sm rounded-lg border-none block w-full p-2.5 bg-gray-600 text-white focus:ring-primary-500">
                            BRL
                        </p>
                    </div>

                    <div class="col-span-2 md:col-span-1">
                        <span for="state_of_birth" class="block mb-2 text-sm font-medium text-white">Estado que nasceu</span>
                        <p name="state_of_birth" id="state_of_birth" class="text-sm rounded-lg border-none block w-full p-2.5 bg-gray-600 text-white focus:ring-primary-500">
                            CE
                        </p>
                    </div>

                    <div class="col-span-2 hidden md:block">
                        <h5 class='block text-sm font-medium text-white'>Despesas</h5>

                        <div class=''>                        
                            <table id='expensesTable' class="display rounded-md overflow-hidden">
                                <thead class='bg-gray-600'>
                                    <tr>
                                        <th>id</th>
                                        <th>nome</th>
                                        <th>data</th>
                                    </tr>
                                </thead>
                                <tbody class='bg-gray-900/90 max-h-[400px] overflow-y-auto'>
                                    <tr>
                                        <td>1</td>
                                        <td>daniel</td>
                                        <td>{{ now() }}</td>
                                        <td>
                                            <button class='btn-show-deputy-data shrink-0 hover:bg-gray-800/90 transition-colors rounded-sm' title='Ver Detalhes' onclick="window.open('${data.document_url}', '_blank')">
                                                <i data-lucide='file' class='size-8 rounded-md stroke-secondary'></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>daniel</td>
                                        <td>{{ now() }}</td>
                                        <td>
                                            <button class='btn-show-deputy-data shrink-0 hover:bg-gray-800/90 transition-colors rounded-sm' title='Ver Detalhes' onclick="window.open('${data.document_url}', '_blank')">
                                                <i data-lucide='file' class='size-8 rounded-md stroke-secondary'></i>
                                            </button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Modal footer -->
            <div class="flex items-center justify-end p-4 md:p-5 border-t border-gray-200 rounded-b dark:border-gray-600">
                <button onclick='deputyModal.hide()' type="button" class="py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-300 focus:z-10 focus:ring-4 focus:ring-gray-100">Fechar</button>
            </div>
        </div>
    </div>
</div>