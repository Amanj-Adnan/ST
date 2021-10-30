@extends('layouts.app')

@section('content')

    <!-- component -->
    <div class="antialiased sans-serif min-h-screen bg-white" style="min-height: 900px">


        <div class="border-t-8 border-gray-700 h-2"></div>
        <div class="container mx-auto py-6 px-4">
            <div class="flex justify-between">
                <h2 class="text-2xl font-bold mb-6 pb-2 tracking-wider uppercase">Invoice</h2>
                <div>
                    <div class="relative mr-4 inline-block">
                        <div class="text-gray-500 cursor-pointer w-10 h-10 rounded-full bg-gray-100 hover:bg-gray-300 inline-flex items-center justify-center" @mouseenter="showTooltip = true" @mouseleave="showTooltip = false" @click="printInvoice()">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-printer" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <rect x="0" y="0" width="24" height="24" stroke="none"></rect>
                                <path d="M17 17h2a2 2 0 0 0 2 -2v-4a2 2 0 0 0 -2 -2h-14a2 2 0 0 0 -2 2v4a2 2 0 0 0 2 2h2" />
                                <path d="M17 9v-4a2 2 0 0 0 -2 -2h-6a2 2 0 0 0 -2 2v4" />
                                <rect x="7" y="13" width="10" height="8" rx="2" />
                            </svg>
                        </div>

                    </div>


                </div>
            </div>

            <div class="flex mb-8 justify-between">
                <div class="w-2/4">
                    <div class="mb-2 md:mb-1 md:flex items-center">
                        <label class="w-32 text-gray-800 block font-bold text-sm uppercase tracking-wide">Invoice No.</label>
                        <span class="mr-4 inline-block hidden md:block">:</span>
                        <div class="flex-1">
                            <input class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-48 py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-blue-500" id="inline-full-name" type="text" placeholder="eg. #INV-100001" x-model="invoiceNumber">
                        </div>
                    </div>

                    <div class="mb-2 md:mb-1 md:flex items-center">
                        <label class="w-32 text-gray-800 block font-bold text-sm uppercase tracking-wide">Invoice Date</label>
                        <span class="mr-4 inline-block hidden md:block">:</span>
                        <div class="flex-1">
                            <input class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-48 py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-blue-500 js-datepicker" type="text" id="datepicker1" placeholder="eg. 17 Feb, 2020" x-model="invoiceDate" x-on:change="invoiceDate = document.getElementById('datepicker1').value" autocomplete="off" readonly>
                        </div>
                    </div>

                    <div class="mb-2 md:mb-1 md:flex items-center">
                        <label class="w-32 text-gray-800 block font-bold text-sm uppercase tracking-wide">Due date</label>
                        <span class="mr-4 inline-block hidden md:block">:</span>
                        <div class="flex-1">
                            <input class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-48 py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-blue-500 js-datepicker-2" id="datepicker2" type="text" placeholder="eg. 17 Mar, 2020" x-model="invoiceDueDate" x-on:change="invoiceDueDate = document.getElementById('datepicker2').value" autocomplete="off" readonly>
                        </div>
                    </div>
                </div>

            </div>

            <div class="flex flex-wrap justify-between mb-8">
                <div class="w-full md:w-1/3 mb-2 md:mb-0">
                    <label class="text-gray-800 block mb-1 font-bold text-sm uppercase tracking-wide">Bill/Ship To:</label>
                    <input class="mb-1 bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-blue-500" id="inline-full-name" type="text" placeholder="Billing company name" x-model="billing.name">
                    <input class="mb-1 bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-blue-500" id="inline-full-name" type="text" placeholder="Billing company address" x-model="billing.address">
                    <input class="mb-1 bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-blue-500" id="inline-full-name" type="text" placeholder="Additional info" x-model="billing.extra">
                </div>
                <div class="w-full md:w-1/3">
                    <label class="text-gray-800 block mb-1 font-bold text-sm uppercase tracking-wide">From:</label>
                    <input class="mb-1 bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-blue-500" id="inline-full-name" type="text" placeholder="Your company name" x-model="from.name">

                    <input class="mb-1 bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-blue-500" id="inline-full-name" type="text" placeholder="Your company address" x-model="from.address">

                    <input class="mb-1 bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-blue-500" id="inline-full-name" type="text" placeholder="Additional info" x-model="from.extra">
                </div>
            </div>

            <div class="flex -mx-1 border-b py-2 items-start">
                <div class="flex-1 px-1">
                    <p class="text-gray-800 uppercase tracking-wide text-sm font-bold">Description</p>
                </div>

                <div class="px-1 w-20 text-right">
                    <p class="text-gray-800 uppercase tracking-wide text-sm font-bold">Units</p>
                </div>

                <div class="px-1 w-32 text-right">
                    <p class="leading-none">
                        <span class="block uppercase tracking-wide text-sm font-bold text-gray-800">Unit Price</span>
                        <span class="font-medium text-xs text-gray-500">(Incl. GST)</span>
                    </p>
                </div>

                <div class="px-1 w-32 text-right">
                    <p class="leading-none">
                        <span class="block uppercase tracking-wide text-sm font-bold text-gray-800">Amount</span>
                        <span class="font-medium text-xs text-gray-500">(Incl. GST)</span>
                    </p>
                </div>

                <div class="px-1 w-20 text-center">
                </div>
            </div>


            <button class="mt-6 bg-white hover:bg-gray-100 text-gray-700 font-semibold py-2 px-4 text-sm border border-gray-300 rounded shadow-sm" x-on:click="openModal = !openModal">
                Add Invoice Items
            </button>





        </div>



    </div>


@endsection
