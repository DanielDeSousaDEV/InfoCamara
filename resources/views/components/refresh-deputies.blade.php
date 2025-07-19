<div class='p-2 bg-warning rounded-lg flex flex-col items-center gap-1 text-zinc-900'>
    <i data-lucide="rotate-ccw" class="cursor-pointer" data-modal-target="refresh-deputies-modal" data-modal-toggle="refresh-deputies-modal"></i>
    <div>
        <p class='text-xs text-center'>Ultima vez carregado:</p>
        <p class='text-xs text-center'>
            {{ \Carbon\Carbon::parse(now())->diffForHumans() }}
        </p>
    </div>
</div>

<!-- Main modal -->
<div id="refresh-deputies-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative p-4 w-full max-w-2xl max-h-full">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow-sm dark:bg-gray-700">
            <!-- Modal header -->
            <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600 border-gray-200">
                <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                    Cuidado
                </h3>
                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="refresh-deputies-modal">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <!-- Modal body -->
            <div class="p-4 md:p-5 space-y-4">
                <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400">
                    Esta ação irá apagar todos os dados do que o sistema possui atualmente e subitiulos por dados recem atualizado da API da câmara.
                    A operação pode levar alguns minutos para ser completamente processada.
                </p>
                <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400">
                    Esta ação é irreversível. Deseja continuar?.
                </p>
            </div>
            <!-- Modal footer -->
            <div class="flex items-center justify-end p-4 md:p-5 border-t border-gray-200 rounded-b dark:border-gray-600">
                <button data-modal-hide="refresh-deputies-modal" type="button" class="text-white bg-danger hover:bg-danger/80 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Sim, limpar o banco</button>
                <button data-modal-hide="refresh-deputies-modal" type="button" class="py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-300 focus:z-10 focus:ring-4 focus:ring-gray-100">Cancelar</button>
            </div>
        </div>
    </div>
</div>