<h1 class="text-center ml-5"> Services dynamic</h1>
@foreach ( $services as $item)

    <div class="w-full overflow-hidden bg-white mt-5 mb-5 rounded-lg shadow-md dark:bg-gray-800">

        <div class="p-6">
            <div class="flex justify-between align-center">


                <h1>{{ $item->id }}</h1>
                <h1>{{ $item->icon }}</h1>
                <h1>{{ $item->titre }}</h1>
                <h1 class="flex">
                    <a href="/dashboard/service/{{ $item->id }}"
                        class="px-4 py-2 font-medium tracking-wide text-white capitalize transition-colors duration-200 transform bg-blue-600 rounded-md dark:bg-gray-800 hover:bg-blue-500 dark:hover:bg-gray-700 focus:outline-none focus:bg-blue-500 dark:focus:bg-gray-700">SHOW</a>
                </h1>
                <h1>
                    <form action="/dashboard/service/{{ $item->id }}" method="POST">
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

@endforeach
<a href="/dashboard/service/create" class="px-4 py-2 mb-5  flex align-center justify-center font-medium tracking-wide text-white capitalize transition-colors duration-200 transform bg-blue-600 rounded-md dark:bg-gray-800 hover:bg-blue-500 dark:hover:bg-gray-700 focus:outline-none focus:bg-blue-500 dark:focus:bg-gray-700">Create</a>
