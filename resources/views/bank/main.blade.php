@php
    $searchValue = request()->query('search');
    $searchOptionValue = request()->query('searchOption');
@endphp

@extends('layouts.layout')
@section('main-content')
    {{-- Add Button And Search Fields --}}
    <div class="add-search">
        <div class="rows">
            <div class="c-3">
                {{-- @if(auth()->user()->hasPermission(284)) --}}
                    <button class="open-modal" data-modal-id="addModal" id="add"><i class="fa-solid fa-plus"></i> Add {{ $name }} </button>
                {{-- @endif --}}
            </div>
            <div class="c-3">
                <select name="selectOption" id="selectOption">
                    <option value="0">All</option>
                    <option value="1">Name</option>
                    <option value="2">Phone</option>
                    <option value="3">Address</option>
                </select>
            </div>
            <div class="c-3">
                <input type="text" id="search" placeholder="Search...">
            </div>
            <div class="c-3" style="padding: 0;">
                {{-- <input type="text" id="globalSearch" placeholder="Search..." /> --}}
            </div>
        </div>
    </div>

    {{-- Datatable Part --}}
    <div class="load-data">
        <table class="data-table" id="data-table">
            <caption>{{ $name }} Details</caption>
            <thead>
                <th>Sl</th>
                <th>name</th>
                <th>Phone</th>
                <th>Address</th>
                <th>Action</th>
            </thead>
            <tbody></tbody>
            <tfoot></tfoot>
        </table>

        <div id="paginate"></div>
    </div>


    {{-- @if (Auth::user()->user_role == 1) --}}
    @include('bank.add')

    @include('bank.edit')
    {{-- @endif --}}

    {{-- @include('common_modals.detailsModal') --}}

    @include('common_modals.delete')

    {{-- @include('common_modals.deleteStatus') --}}


    <!-- ajax part start from here -->
    <script src="{{ asset('js/ajax/bank.js') }}"></script>
    {{-- <script src="{{ asset('js/ajax/search_by_input.js') }}"></script> --}}
@endsection
