<h1 class="text-center"> Skill statics</h1>
<div class="w-full overflow-hidden bg-white mb-2 rounded-lg shadow-md dark:bg-gray-800 mt-5">

    <div class="p-6">
        <div class="flex justify-between align-center">
                <h1>{{ $portfolioStatiques[0]->id }}</h1>
                <h1  class='ml-5'>{{ $portfolioStatiques[0]->titre }}</h1>
                <h1 class="px-20">{{ $portfolioStatiques[0]->paragraphe}}</h1>
                <h1 class="flex">
                    <a href="/dashboard/potfolioStac/{{ $portfolioStatiques[0]->id }}" class="px-4 h-11 py-2 font-medium tracking-wide text-white capitalize transition-colors duration-200 transform bg-blue-600 rounded-md dark:bg-gray-800 hover:bg-blue-500 dark:hover:bg-gray-700 focus:outline-none focus:bg-blue-500 dark:focus:bg-gray-700">SHOW</a>
                </h1>
                <h1>
                    <form action="/dashboard/potfolioStac/{{ $portfolioStatiques[0]->id }}" method="POST">
                        @csrf
                        @method("DELETE")
                        <input type="submit" class="px-4 py-2 font-medium tracking-wide  h-11 ml-5 text-white capitalize transition-colors duration-200 transform bg-red-600 rounded-md dark:bg-gray-800 hover:bg-red-500 dark:hover:bg-gray-700 focus:outline-none focus:bg-blue-500 dark:focus:bg-gray-700" value="X">
                    </form>
                </h1>

        </div>
    </div>
</div>
