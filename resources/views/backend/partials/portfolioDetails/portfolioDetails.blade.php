<h1 class="text-center"> Skill statics</h1>
<div class="w-full overflow-hidden bg-white mb-2 rounded-lg shadow-md dark:bg-gray-800 mt-5">

    <div class="p-6">
        <div class="flex flex-col text-center justify-between align-center">
                <h1 class="mt-5">{{ $details[0]->id }}</h1>
                <h1  class='ml-5 mt-5'>{{ $details[0]->titre }}</h1>
                <h1 class="px-20 mt-5">{{ $details[0]->home}}</h1>
                <h1 class="px-20 mt-5">{{ $details[0]->details}}</h1>
                <h1 class="px-20 mt-5">{{ $details[0]->image1}}</h1>
                <h1 class="px-20 mt-5">{{ $details[0]->image2}}</h1>
                <h1 class="px-20 mt-5">{{ $details[0]->image3}}</h1>
                <h1 class="px-20 mt-5">{{ $details[0]->titre2}}</h1>
                <h1 class="px-20 mt-5 mb-5">{{ $details[0]->category}}</h1>
                <h1 class="px-20 mt-5 mb-5">{{ $details[0]->client}}</h1>
                <h1 class="px-20 mt-5 mb-5">{{ $details[0]->porjetDate}}</h1>
                <h1 class="px-20 mt-5 mb-5">{{ $details[0]->porjetUrl}}</h1>
                <h1 class="px-20 mt-5 mb-5">{{ $details[0]->titre3}}</h1>
                <h1 class="px-20 mt-5 mb-5">{{ $details[0]->para}}</h1>
                <div class="flex text-center justify-between align-center">
                    <h1>
                        <a  href="/dashboard/portfolioDetails/{{ $details[0]->id }}/edit"
                            class="px-4 py-2 font-medium tracking-wide text-white capitalize transition-colors duration-200 transform bg-blue-600 rounded-md dark:bg-gray-800 hover:bg-blue-500 dark:hover:bg-gray-700 focus:outline-none focus:bg-blue-500 dark:focus:bg-gray-700">Edit</a>
                    </h1>
                    <h1>
                        <form action="/dashboard/portfolioDetails/{{ $details[0]->id }}" method="POST">
                            @csrf
                            @method("DELETE")
                            <input type="submit" class=" -5 px-4 py-2 font-medium tracking-wide  h-11 ml-5 text-white capitalize transition-colors duration-200 transform bg-red-600 rounded-md dark:bg-gray-800 hover:bg-red-500 dark:hover:bg-gray-700 focus:outline-none focus:bg-blue-500 dark:focus:bg-gray-700" value="X">
                        </form>
                    </h1>
                </div>
        </div>
    </div>
</div>
