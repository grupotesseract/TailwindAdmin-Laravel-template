@extends('layouts.admin')

@section('content')

<main class="bg-white-medium flex-1 p-3 overflow-hidden">

    <div class="flex flex-col">
        <!-- Card Sextion Starts Here -->
        <div class="flex flex-1  flex-col md:flex-row lg:flex-row mx-2">
            <!--Outline Buttons form-->
            <div class="mb-2 border-solid border-grey-light rounded border shadow-sm w-full md:w-1/2 lg:w-1/2">
                <div class="bg-grey-lighter px-2 py-3 border-solid border-grey-light border-b">
                    Outline Buttons
                </div>
                <div class="p-3">
                    <button class="bg-transparent hover:bg-blue text-blue-dark font-semibold hover:text-white py-2 px-4 border border-blue hover:border-transparent rounded">
                        Button
                    </button>
                    <button class="bg-transparent hover:bg-green text-green-dark font-semibold hover:text-white py-2 px-4 border border-green hover:border-transparent rounded">
                        Button
                    </button>
                    <button class="bg-transparent hover:bg-orange text-orange-dark font-semibold hover:text-white py-2 px-4 border border-orange hover:border-transparent rounded">
                        Button
                    </button>
                    <button class="bg-transparent hover:bg-red text-red-dark font-semibold hover:text-white py-2 px-4 border border-red hover:border-transparent rounded">
                        Button
                    </button>
                </div>
            </div>
            <!--/Outline Buttons -->

            <!--Solid Buttons-->
            <div class="mb-2 mx-2 border-solid border-grey-light rounded border shadow-sm w-full md:w-1/2 lg:w-1/2">
                <div class="bg-grey-lighter px-2 py-3 border-solid border-grey-light border-b">
                    Solid Buttons
                </div>
                <div class="p-3">
                    <button class="bg-blue hover:bg-blue-dark text-white font-bold py-2 px-4 rounded">
                        Button
                    </button>
                    <button class="bg-green hover:bg-green-dark text-white font-bold py-2 px-4 rounded">
                        Button
                    </button>
                    <button class="bg-orange hover:bg-orange-dark text-white font-bold py-2 px-4 rounded">
                        Button
                    </button>
                    <button class="bg-red hover:bg-red-dark text-white font-bold py-2 px-4 rounded">
                        Button
                    </button>
                </div>
            </div>
            <!--/Solid Buttons-->
        </div>
        <!-- /Cards Section Ends Here -->

        <!--Card Section Starts Here-->
        <div class="flex flex-1  flex-col md:flex-row lg:flex-row mx-2">
            <!--Outline Buttons form-->
            <div class="mb-2 border-solid border-grey-light rounded border shadow-sm w-full md:w-1/2 lg:w-1/2">
                <div class="bg-grey-lighter px-2 py-3 border-solid border-grey-light border-b">
                    Buttons Styles
                </div>
                <div class="p-3">
                    <button class="bg-blue hover:bg-blue-dark text-white font-bold py-2 px-4 rounded-full">
                        Button
                    </button>
                    <button class="bg-green hover:bg-green-dark text-white font-bold py-2 px-4 rounded-full">
                        Button
                    </button>
                    <button class="bg-orange hover:bg-orange-dark text-white font-bold py-2 px-4 rounded-full">
                        Button
                    </button>
                    <button class="bg-red hover:bg-red-dark text-white font-bold py-2 px-4 rounded-full">
                        Button
                    </button>
                </div>
            </div>
            <!--/Outline Buttons -->

            <!--Solid Buttons-->
            <div class="mb-2 mx-2 border-solid border-grey-light rounded border shadow-sm w-full md:w-1/2 lg:w-1/2">
                <div class="bg-grey-lighter px-2 py-3 border-solid border-grey-light border-b">
                    Button Bordered
                </div>
                <div class="p-3">
                    <button class="bg-blue hover:bg-blue-dark text-white font-bold py-2 px-4 border border-blue-darker rounded">
                        Button
                    </button>
                    <button class="bg-green hover:bg-green-dark text-white font-bold py-2 px-4 border border-green-darker rounded">
                        Button
                    </button>
                    <button class="bg-orange hover:bg-orange-dark text-white font-bold py-2 px-4 border border-orange-darker rounded">
                        Button
                    </button>
                    <button class="bg-red hover:bg-red-dark text-white font-bold py-2 px-4 border border-red-darker rounded">
                        Button
                    </button>
                </div>
            </div>
            <!--/Solid Buttons-->
        </div>
        <!--Card Section Ends Here-->
        <!--Card Section Starts Here-->
        <div class="flex flex-1  flex-col md:flex-row lg:flex-row mx-2">
            <!--Outline Buttons form-->
            <div class="mb-2 border-solid border-grey-light rounded border shadow-sm w-full md:w-1/2 lg:w-1/2">
                <div class="bg-grey-lighter px-2 py-3 border-solid border-grey-light border-b">
                    Button Groups
                </div>
                <div class="p-3">
                    <div class="inline-flex">
                        <button class="bg-grey-light hover:bg-grey text-grey-darkest font-bold py-2 px-4 rounded-l">
                            Prev
                        </button>
                        <button class="bg-grey-light hover:bg-grey text-grey-darkest font-bold py-2 px-4 rounded-r">
                            Next
                        </button>
                    </div>

                    <div class="inline-flex">
                        <button class="bg-teal-light hover:bg-teal text-teal-darkest font-bold py-2 px-4 rounded-l">
                            Prev
                        </button>
                        <button class="bg-teal-light hover:bg-teal text-teal-darkest font-bold py-2 px-4 rounded-r">
                            Next
                        </button>
                    </div>


                    <div class="inline-flex">
                        <button class="bg-red-light hover:bg-red text-red-darkest font-bold py-2 px-4 rounded-l">
                            Prev
                        </button>
                        <button class="bg-red-light hover:bg-red text-red-darkest font-bold py-2 px-4 rounded-r">
                            Next
                        </button>
                    </div>
                </div>
            </div>
            <!--/Outline Buttons -->

            <!--Solid Buttons-->
            <div class="mb-2 mx-2 border-solid border-grey-light rounded border shadow-sm w-full md:w-1/2 lg:w-1/2">
                <div class="bg-grey-lighter px-2 py-3 border-solid border-grey-light border-b">
                    Miscellaneous
                </div>
                <div class="p-3">
                    <button class="bg-blue hover:bg-blue-light text-white font-bold py-2 px-4 border-b-4 border-blue-dark hover:border-blue rounded">
                        3D Button
                    </button>
                    <button class="bg-white hover:bg-grey-lightest text-grey-darkest font-semibold py-2 px-4 border border-grey-light rounded shadow">
                        Elevated Button
                    </button>
                    <button class="bg-grey-light hover:bg-grey text-grey-darkest font-bold py-2 px-4 rounded inline-flex items-center">
                        <svg class="fill-current w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 20 20">
                            <path d="M13 8V2H7v6H2l8 8 8-8h-5zM0 18h20v2H0v-2z"/>
                        </svg>
                        <span>Download</span>
                    </button>
                    <button class="bg-blue text-white font-bold py-2 px-4 rounded opacity-50 cursor-not-allowed">
                        Button
                    </button>
                </div>
            </div>
            <!--/Solid Buttons-->
        </div>
        <!--Card Section Ends Here-->
    </div>

</main>

@endsection
