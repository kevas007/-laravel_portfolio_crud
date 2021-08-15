
<div class="w-full overflow-hidden bg-white rounded-lg shadow-md dark:bg-gray-800">

    <div class="p-6">
        <div class="flex justify-between align-center">
            @foreach ($facts as $fact )

                <h1>{{ $fact->id }}</h1>
                <h1>{{ $fact->titre }}</h1>
                <h1 class="flex">
                    <a href="/dashboard/facts/{{ $fact->id }}" class="px-4 py-2 font-medium tracking-wide text-white capitalize transition-colors duration-200 transform bg-blue-600 rounded-md dark:bg-gray-800 hover:bg-blue-500 dark:hover:bg-gray-700 focus:outline-none focus:bg-blue-500 dark:focus:bg-gray-700">SHOW</a>
                </h1>
                <h1>
                    <form action="/dashboard/facts/{{ $fact->id }}" method="POST">
                        @csrf
                        @method("DELETE")
                        <input type="submit" class="px-4 py-2 font-medium tracking-wide text-white capitalize transition-colors duration-200 transform bg-red-600 rounded-md dark:bg-gray-800 hover:bg-red-500 dark:hover:bg-gray-700 focus:outline-none focus:bg-blue-500 dark:focus:bg-gray-700" value="X">
                    </form>
                </h1>
            @endforeach
        </div>
    </div>
</div>
