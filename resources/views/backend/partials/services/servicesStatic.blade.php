<h1 class="text-center ml-5"> Services static</h1>


    <div class="w-full overflow-hidden bg-white mt-5 mb-5 rounded-lg shadow-md dark:bg-gray-800">

        <div class="p-6">
            <div class="flex justify-between align-center">
                {{-- {{ dd($) }} --}}

                <h1>{{ $serviceStatics[0]->id }}</h1>
                <h1>{{ $serviceStatics[0]->icon }}</h1>
                <h1>{{ $serviceStatics[0]->titre }}</h1>
                <h1 class="flex">
                    <a  href="/dashboard/serviceStac/{{ $serviceStatics[0]->id }}/edit"
                        class="px-4 py-2 font-medium tracking-wide text-white capitalize transition-colors duration-200 transform bg-blue-600 rounded-md dark:bg-gray-800 hover:bg-blue-500 dark:hover:bg-gray-700 focus:outline-none focus:bg-blue-500 dark:focus:bg-gray-700">Edit</a>
                </h1>
                {{-- <h1 class=" flex align-center justify-center ">
                    <a href="/dashboard/serviceStac/{{ $serviceStatics[0]->id }}/edit" class="px-4 py-2 mt-5 font-medium tracking-wide text-white capitalize transition-colors duration-200 transform bg-green-600 rounded-md dark:bg-gray-800 hover:bg-green-500 dark:hover:bg-gray-700 focus:outline-none focus:bg-blue-500 dark:focus:bg-gray-700">Editer</a>
                </h1> --}}
                <h1>
                    <form action="/dashboard/serviceStac/{{ $serviceStatics[0]->id }}" method="POST">
                        @csrf
                        @method("DELETE")
                        <input type="submit"
                            class="px-4 py-2 font-medium tracking-wide text-white capitalize transition-colors duration-200 transform bg-red-600 rounded-md dark:bg-gray-800 hover:bg-red-500 dark:hover:bg-gray-700 focus:outline-none focus:bg-blue-500 dark:focus:bg-gray-700"
                            value="X">
                    </form>
                </h1>

            </div>
        </div>
    </div>


