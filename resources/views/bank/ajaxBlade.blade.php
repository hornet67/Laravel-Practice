@php
    $searchValue = request()->query('search');
    $searchOptionValue = request()->query('searchOption');
@endphp

{{-- Add Button And Search Fields --}}
    <div class="add-search">
        <div class="rows">
            <div class="c-3">
                {{-- @if(auth()->user()->hasPermission(284)) --}}
                    <button class="open-modal" data-modal-id="addModal" id="add"><i class="fa-solid fa-plus"></i> Add {{ $name }} </button>
                {{-- @endif --}}
            </div>
            <div class="c-6">

            </div>
            <div class="c-3" style="padding: 0;">
                <input type="text" id="globalSearch" placeholder="Search..." />
            </div>
        </div>
    </div>

    {{-- Datatable Part --}}
    <div class="load-data">
        <table class="data-table" id="data-table">
            <caption>{{ $name }} Details</caption>
            <thead></thead>
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
    {{-- <script src="{{ asset('js/ajax/admin_setup/bank_info.js') }}"></script> --}}
    {{-- <script src="{{ asset('js/ajax/search_by_input.js') }}"></script> --}}

