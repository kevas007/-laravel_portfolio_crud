<div class="max-w-2xl mx-auto overflow-hidden bg-white rounded-lg shadow-md dark:bg-gray-800">
    <div class="p-6">
        <div>
            <p class="text-blue-400">{{ $show->id }}</p>
            <p>{{ $show->titre }}</p>
            <p>{{ $show->titrePara }}</p>
            <p>{{ $show->happy}}</p>
            <p>{{ $show->paraHappy}}</p>
            <p>{{ $show->project}}</p>
            <p>{{ $show->paraProjet }}</p>
            <p>{{ $show->support}}</p>
            <p>{{ $show->paraSupp}}</p>
            <p>{{ $show->work }}</p>
            <p>{{ $show->paraWork}}</p>
        </div>
        <div class="mt-5 flex align-center justify-center ">
            <a href="/dashboard/facts/{{ $show->id }}/edit" class="px-4 py-2 mt-5 font-medium tracking-wide text-white capitalize transition-colors duration-200 transform bg-green-600 rounded-md dark:bg-gray-800 hover:bg-green-500 dark:hover:bg-gray-700 focus:outline-none focus:bg-blue-500 dark:focus:bg-gray-700">Editer</a>
        </div>
    </div>
</div>
