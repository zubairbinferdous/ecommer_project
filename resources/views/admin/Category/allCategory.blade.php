@extends('admin.admin_index')
@section('dashborad_header')
    <div class="main-content mt-8">
        <div class="col-span-12 lg:col-span-6">
            <div class="box">
                <div class="box-header">
                    <h5 class="box-title">All Product Area</h5>
                </div>
                <div class="box-body">
                    <div class="flex flex-col">
                        <div class="-m-1.5 overflow-x-auto">
                            <div class="p-1.5 min-w-full inline-block align-middle">
                                <div class="overflow-auto table-bordered">
                                    <table class="ti-custom-table ti-custom-table-head">
                                        <thead class="">
                                            <tr>

                                                <th scope="col">Category title</th>
                                                <th scope="col">Category url</th>
                                                <th scope="col">Category image</th>
                                                <th scope="col">Category description</th>
                                                <th scope="col">Category Position</th>
                                                <th scope="col">Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($categoryData as $item)
                                                <tr>

                                                    <td>
                                                        {{ $item->category_title }}
                                                    </td>

                                                    <td>
                                                        {{ $item->category_url }}
                                                    </td>

                                                    <td>
                                                        <div class="flex items-center">
                                                            <div class="ltr:mr-2 rtl:ml-2 leading-none">
                                                                <img src="{{ asset($item->category_image) }}" alt=""
                                                                    class="avatar avatar-xs rounded-sm">
                                                            </div>
                                                        </div>
                                                    </td>

                                                    <td>
                                                        {{ $item->category_description }}
                                                    </td>

                                                    <td>
                                                        @if ($item->position)
                                                            {{ $item->position }}
                                                        @else
                                                            {{ 'null' }}
                                                        @endif
                                                    </td>

                                                    <td class="font-medium space-x-2 rtl:space-x-reverse">
                                                        <div class="hs-tooltip ti-main-tooltip">
                                                            <a href="javascript:void(0);"
                                                                class="m-0 hs-tooltip-toggle relative w-8 h-8 ti-btn rounded-full p-0 transition-none focus:outline-none ti-btn-soft-primary">
                                                                <i class="ti ti-eye"></i>
                                                                <span
                                                                    class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700"
                                                                    role="tooltip">
                                                                    View
                                                                </span>
                                                            </a>
                                                        </div>
                                                        <div class="hs-tooltip ti-main-tooltip">
                                                            <a href="javascript:void(0);"
                                                                class="customer-edit m-0 hs-tooltip-toggle relative w-8 h-8 ti-btn rounded-full p-0 transition-none focus:outline-none ti-btn-soft-secondary">
                                                                <i class="ti ti-pencil"></i>
                                                                <span
                                                                    class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700"
                                                                    role="tooltip">
                                                                    Edit
                                                                </span>
                                                            </a>
                                                        </div>
                                                        <div class="hs-tooltip ti-main-tooltip">
                                                            <a href="javascript:void(0);"
                                                                class="m-0 hs-tooltip-toggle relative w-8 h-8 ti-btn rounded-full p-0 transition-none focus:outline-none ti-btn-soft-danger">
                                                                <i class="ti ti-trash"></i>
                                                                <span
                                                                    class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700"
                                                                    role="tooltip">
                                                                    Delete
                                                                </span>
                                                            </a>
                                                        </div>
                                                    </td>
                                                </tr>
                                            @endforeach


                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
