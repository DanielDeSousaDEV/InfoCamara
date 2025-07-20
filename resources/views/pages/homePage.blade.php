@extends('layouts.homeLayout')

@section('content')
 <div class='max-w-6xl mx-auto pt-4 px-4'>
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
        </tbody>
    </table>
 </div>

 <x-deputy-modal />
@endsection

@push('scripts')
    @vite(['resources/js/datatables.js', 'resources/js/home.js'])
@endpush