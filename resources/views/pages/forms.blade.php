@extends('layouts.admin')

@section('content')

<main class="bg-white-medium flex-1 p-3 overflow-hidden">

    <div class="flex flex-col">
        <!-- Card Sextion Starts Here -->
        <div class="flex flex-1  flex-col md:flex-row lg:flex-row mx-2">
            <!--Horizontal form-->
            <div class="mb-2 border-solid border-grey-light rounded border shadow-sm w-full md:w-1/2 lg:w-1/2">
                <div class="bg-grey-lighter px-2 py-3 border-solid border-grey-light border-b">
                    Inline Form
                </div>
                <div class="p-3">
                    <form class="w-full">
                        <div class="md:flex md:items-center mb-6">
                            <div class="md:w-1/4">
                                <label class="block text-grey font-regular md:text-right mb-1 md:mb-0 pr-4"
                                        for="inline-full-name">
                                    Full Name
                                </label>
                            </div>
                            <div class="md:w-3/4">
                                <input class="bg-grey-lighter appearance-none border-1 border-grey-lighter rounded w-full py-2 px-4 text-grey-darker leading-tight focus:outline-none focus:bg-white focus:border-purple-light"
                                        id="inline-full-name" type="text" value="Jane Doe">
                            </div>
                        </div>
                        <div class="md:flex md:items-center mb-6">
                            <div class="md:w-1/4">
                                <label class="block text-grey font-regular md:text-right mb-1 md:mb-0 pr-4"
                                        for="inline-username">
                                    Password
                                </label>
                            </div>
                            <div class="md:w-3/4">
                                <input class="bg-grey-lighter appearance-none border-1 border-grey-lighter rounded w-full py-2 px-4 text-grey-darker leading-tight focus:outline-none focus:bg-white focus:border-purple-light"
                                        id="inline-username" type="password"
                                        placeholder="******************">
                            </div>
                        </div>
                        <div class="md:flex md:items-center mb-6">
                            <div class="md:w-1/3"></div>
                            <label class="md:w-2/3 block text-grey font-regular">
                                <input class="mr-2 leading-tight" type="checkbox">
                                <span class="text-sm">
                                    Send me your newsletter!
                                </span>
                            </label>
                        </div>
                        <div class="md:flex md:items-center">
                            <div class="md:w-1/3"></div>
                            <div class="md:w-2/3">
                                <button class="shadow bg-purple hover:bg-purple-light focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded"
                                        type="button">
                                    Sign Up
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!--/Horizontal form-->

            <!--Underline form-->
            <div class="mb-2 md:mx-2 lg:mx-2 border-solid border-grey-light rounded border shadow-sm w-full md:w-1/2 lg:w-1/2">
                <div class="bg-grey-lighter px-2 py-3 border-solid border-grey-light border-b">
                    Underline Form
                </div>
                <div class="p-3">
                    <form class="w-full">
                        <div class="flex items-center border-b border-b-1 border-teal py-2">
                            <input class="appearance-none bg-transparent border-none w-full text-grey-darker mr-3 py-1 px-2 leading-tight focus:outline-none"
                                    type="text" placeholder="Jane Doe" aria-label="Full name">
                            <button class="flex-no-shrink bg-teal hover:bg-teal-dark border-teal hover:border-teal-dark text-sm border-4 text-white py-1 px-2 rounded"
                                    type="button">
                                Sign Up
                            </button>
                            <button class="flex-no-shrink border-transparent border-4 text-teal hover:text-teal-darker text-sm py-1 px-2 rounded"
                                    type="button">
                                Cancel
                            </button>
                        </div>
                        <div class="flex items-center border-b border-b-1 border-red py-2">
                            <input class="appearance-none bg-transparent border-none w-full text-grey-darker mr-3 py-1 px-2 leading-tight focus:outline-none"
                                    type="text" placeholder="Jane Doe" aria-label="Full name">
                            <button class="flex-no-shrink bg-teal hover:bg-teal-dark border-teal hover:border-teal-dark text-sm border-4 text-white py-1 px-2 rounded"
                                    type="button">
                                Sign Up
                            </button>
                            <button class="flex-no-shrink border-transparent border-4 text-teal hover:text-teal-darker text-sm py-1 px-2 rounded"
                                    type="button">
                                Cancel
                            </button>
                        </div>
                        <div class="flex items-center border-b border-b-1 border-info py-2">
                            <input class="appearance-none bg-transparent border-none w-full text-grey-darker mr-3 py-1 px-2 leading-tight focus:outline-none"
                                    type="text" placeholder="Jane Doe" aria-label="Full name">
                            <button class="flex-no-shrink bg-teal hover:bg-teal-dark border-teal hover:border-teal-dark text-sm border-4 text-white py-1 px-2 rounded"
                                    type="button">
                                Sign Up
                            </button>
                            <button class="flex-no-shrink border-transparent border-4 text-teal hover:text-teal-darker text-sm py-1 px-2 rounded"
                                    type="button">
                                Cancel
                            </button>
                        </div>
                    </form>
                </div>
            </div>
            <!--/Underline form-->
        </div>
        <!-- /Cards Section Ends Here -->

        <!--Grid Form-->
        <div class="flex flex-1  flex-col md:flex-row lg:flex-row mx-2">
            <div class="mb-2 border-solid border-grey-light rounded border shadow-sm w-full">
                <div class="bg-grey-lighter px-2 py-3 border-solid border-grey-light border-b">
                    Form Grid
                </div>
                <div class="p-3">
                    <form class="w-full">
                        <div class="flex flex-wrap -mx-3 mb-6">
                            <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                                <label class="block uppercase tracking-wide text-grey-darker text-xs font-light mb-1"
                                        for="grid-first-name">
                                    First Name
                                </label>
                                <input class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-red rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                                        id="grid-first-name" type="text" placeholder="Jane">
                                <p class="text-red text-xs italic">Please fill out this field.</p>
                            </div>
                            <div class="w-full md:w-1/2 px-3">
                                <label class="block uppercase tracking-wide text-grey-darker text-xs font-light mb-1"
                                        for="grid-last-name">
                                    Last Name
                                </label>
                                <input class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-grey"
                                        id="grid-last-name" type="text" placeholder="Doe">
                            </div>
                        </div>
                        <div class="flex flex-wrap -mx-3 mb-6">
                            <div class="w-full px-3">
                                <label class="block uppercase tracking-wide text-grey-darker text-xs font-light mb-1"
                                        for="grid-password">
                                    Password
                                </label>
                                <input class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-grey"
                                        id="grid-password" type="password" placeholder="******************">
                                <p class="text-grey-dark text-xs italic">Make it as long and as crazy as
                                    you'd like</p>
                            </div>
                        </div>
                        <div class="flex flex-wrap -mx-3 mb-2">
                            <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                                <label class="block uppercase tracking-wide text-grey-darker text-xs font-light mb-1"
                                        for="grid-city">
                                    City
                                </label>
                                <input class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-grey"
                                        id="grid-city" type="text" placeholder="Albuquerque">
                            </div>
                            <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                                <label class="block uppercase tracking-wide text-grey-darker text-xs font-light mb-1"
                                        for="grid-state">
                                    State
                                </label>
                                <div class="relative">
                                    <select class="block appearance-none w-full bg-grey-lighter border border-grey-lighter text-grey-darker py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-grey"
                                            id="grid-state">
                                        <option>New Mexico</option>
                                        <option>Missouri</option>
                                        <option>Texas</option>
                                    </select>
                                    <div class="pointer-events-none absolute pin-y pin-r flex items-center px-2 text-grey-darker">
                                        <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg"
                                                viewBox="0 0 20 20">
                                            <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                            <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                                <label class="block uppercase tracking-wide text-grey-darker text-xs font-light mb-1"
                                        for="grid-zip">
                                    Zip
                                </label>
                                <input class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-grey"
                                        id="grid-zip" type="text" placeholder="90210">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!--/Grid Form-->        
    </div>

</main>

@endsection
