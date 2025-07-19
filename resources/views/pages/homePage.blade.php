@extends('layouts.homeLayout')

@section('content')
 <div class='max-w-6xl mx-auto pt-4'>
    <table id='deputiesTable' class="display rounded-md overflow-hidden">
        <thead class='bg-secondary/90'>
            <tr>
                <th>id</th>
                <th>nome</th>
                <th>email</th>
                <th>action</th>
            </tr>
        </thead>
        <tbody class='bg-gray-900/90'>
            <tr>
                <td>1</td>
                <td>daniel</td>
                <td>daniel@tals</td>
                <td>
                    <button class='btn-show-deputy-data hover:bg-gray-800/90 transition-colors rounded-sm' title='Ver Detalhes' data-deputy-id='1' data-modal-target="deputy-modal" data-modal-toggle="deputy-modal"></>
                        <i data-lucide='captions' class='size-8 rounded-md stroke-secondary'></i>
                    </button>
                </td>
            </tr>
            <tr>
                <td>1</td>
                <td>daniel</td>
                <td>daniel@tals</td>
                <td>
                    <button class='btn-show-deputy-data hover:bg-gray-800/90 transition-colors rounded-sm' title='Ver Detalhes' data-deputy-id='2' data-modal-target="deputy-modal" data-modal-toggle="deputy-modal">
                        <i data-lucide='captions' class='size-8 rounded-md stroke-secondary'></i>
                    </button>
                </td>
            </tr>
        </tbody>
    </table>
 </div>

 <x-deputy-modal/>
@endsection

@push('scripts')
    @vite(['resources/js/datatables.js', 'resources/js/home.js'])
@endpush