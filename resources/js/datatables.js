import DataTable from 'datatables.net-dt';
import 'datatables.net-dt/css/dataTables.dataTables.css';
import language from 'datatables.net-plugins/i18n/pt-BR.mjs';

document.addEventListener('DOMContentLoaded', () => {
    const deputiesTable = new DataTable('#deputiesTable', {
        responsive: true,
        info: false,
        language,
        // ajax: '../mock.json',
        columnDefs: [
            {
                title: 'Id',
                data: 'id',
                width: 12            
            }
        ]
    });

    const expensesTable = new DataTable('#expensesTable', {
        responsive: true,
        info: false,
        paging: false,
        search: false,
        ordering: false,
        searching: false,
        language,
        // ajax: '../mock.json',
        columnDefs: [
            {
                title: 'Id',
                data: 'id',
                width: 12            
            }
        ]
    });
});