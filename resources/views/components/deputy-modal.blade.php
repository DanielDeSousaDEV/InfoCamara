<div id="deputy-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative p-4 w-full max-w-6xl max-h-full">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow-sm dark:bg-gray-700">
            <!-- Modal header -->
            <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600 border-gray-200">
                <h3 class="text-xl font-semibold text-white">
                    Dados do deputado
                </h3>
                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="deputy-modal">
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
                        <label for="name" class="block mb-2 text-sm font-medium text-white">Nome</label>
                        <p name="name" id="name" class="text-sm rounded-lg border-none block w-full p-2.5 bg-gray-600 text-white focus:ring-primary-500">
                            daniel
                        </p>
                    </div>
                    <div class="col-span-2 sm:col-span-1">
                        <label for="dayOfBirth" class="block mb-2 text-sm font-medium text-white">Data de nascimento</label>
                        <p name="dayOfBirth" id="dayOfBirth" class="text-sm rounded-lg border-none block w-full p-2.5 bg-gray-600 text-white focus:ring-primary-500">
                            daniel
                        </p>
                    </div>
                    <div class="col-span-2 sm:col-span-1">
                        <label for="category" class="block mb-2 text-sm font-medium text-white">Category</label>
                        <select id="category" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                            <option selected="">Select category</option>
                            <option value="TV">TV/Monitors</option>
                            <option value="PC">PC</option>
                            <option value="GA">Gaming/Console</option>
                            <option value="PH">Phones</option>
                        </select>
                    </div>

                    <div class="col-span-2">
                        <h5 class='block text-sm font-medium text-white'>Despesas</h5>

                        <table id='expensesTable' class="display rounded-md overflow-hidden">
                            <thead class='bg-gray-600'>
                                <tr>
                                    <th>id</th>
                                    <th>nome</th>
                                    <th>email</th>
                                </tr>
                            </thead>
                            <tbody class='bg-gray-900/90'>
                                <tr>
                                    <td>1</td>
                                    <td>daniel</td>
                                    <td>daniel@tals</td>
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>daniel</td>
                                    <td>daniel@tals</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- Modal footer -->
            <div class="flex items-center justify-end p-4 md:p-5 border-t border-gray-200 rounded-b dark:border-gray-600">
                <button data-modal-hide="deputy-modal" type="button" class="py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-300 focus:z-10 focus:ring-4 focus:ring-gray-100">Fechar modal</button>
            </div>
        </div>
    </div>
</div>