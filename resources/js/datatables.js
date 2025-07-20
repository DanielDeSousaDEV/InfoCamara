import DataTable from 'datatables.net-dt';
import 'datatables.net-dt/css/dataTables.dataTables.css';
import language from 'datatables.net-plugins/i18n/pt-BR.mjs';
import { format } from 'date-fns';
import { createIcons, icons } from 'lucide';

document.addEventListener('DOMContentLoaded', () => {
    const deputiesTable = new DataTable('#deputiesTable', {
        responsive: true,
        info: false,
        language,
        ajax: '/api/deputies',
        columns: [
            { title: 'Id', data: 'id', width: '15px' },
            { title: 'Nome', data: 'name' },
            { title: 'Email', data: 'email' },
            {
                data: null,
                title: 'Ações',
                orderable: false,
                searchable: false,
                width: '125px',
                render: function (data, type, row) {
                    return `
                        <button class='btn-show-deputy-data shrink-0 hover:bg-gray-800/90 transition-colors rounded-sm' title='Ver Detalhes' data-deputy-id='${data.id}' data-modal-target="deputy-modal" data-modal-toggle="deputy-modal">
                            <i data-lucide='captions' class='size-8 rounded-md stroke-secondary'></i>
                        </button>
                    `;
                }
            }
        ]
    });

    const expensesTable = new DataTable('#expensesTable', {
        responsive: true,
        info: false,
        paging: true,
        pageLength: 3,
        lengthChange: false,
        search: false,
        ordering: false,
        searching: false,
        language,
        // ajax: '/api/deputies/' + window.deputyId + '/expenses',
        columns: [
            { title: 'Id', data: 'id', width: '15px' },
            { title: 'Tipo', data: 'expense_type' },
            { 
                title: 'Data', 
                orderable: false,
                data: null,
                searchable: false,
                render: function (data, type, row, meta) {
                    let parsed
                    try {
                        parsed = format(new Date(data.issue_date), 'PPPP');
                    } catch (error) {
                        parsed = 'N/A'
                    }
                    return parsed;
                }
            },
            {
                title: 'Ações',
                data: null,
                orderable: false,
                searchable: false,
                width: '125px',
                render: function (data, type, row) {
                    return `
                        <button class='btn-show-deputy-data shrink-0 hover:bg-gray-800/90 transition-colors rounded-sm' title='Ver Detalhes' onclick="window.open('${data.document_url}', '_blank')">
                            <i data-lucide='file' class='size-8 rounded-md stroke-secondary'></i>
                        </button>
                    `;
                }
            }
        ]
    });

    deputiesTable.on('draw', () => {
        createIcons({ icons });

        const $modalElement = document.querySelector('#deputy-modal');
        const buttons = document.querySelectorAll('button.btn-show-deputy-data')

        buttons.forEach(btn => btn.addEventListener('click', async () => {
            const deputyId = btn.dataset.deputyId            

            const response = await axios.get('/api/deputies/' + deputyId);

            const data = response.data.data;            

            $modalElement.querySelector('p#name').innerHTML = data.name
            $modalElement.querySelector('p#email').innerHTML = data.email
            $modalElement.querySelector('p#party_acronym').innerHTML = data.party_acronym
            $modalElement.querySelector('img#photo').src = data.photo
            $modalElement.querySelector('p#state_of_birth').innerHTML = data.state_of_birth

            expensesTable.ajax.url(`/api/deputies/${deputyId}/expenses`).load();

            deputyModal.show()

        }))
    });

    expensesTable.on('draw', () => {
        createIcons({ icons });
    });
});