
    <div class="max-w-2xl mx-auto overflow-hidden bg-white rounded-lg shadow-md dark:bg-gray-800">
        <img class="object-cover w-full h-64" src="{{ asset('assets/img/'.$show->img) }}" alt="Article">

        <div class="p-6">
            <div>
                <p class="text-blue-400">{{ $show->id }}</p>
                <p>{{ $show->titreAbout }}</p>
                <p>{{ $show->para }}</p>
                <p>{{ $show->nom }}</p>
                <p>{{ $show->prenom }}</p>
                <p>{{ $show->titre }}</p>
                <p>{{ $show->paragra }}</p>
                <p>{{ $show->description }}</p>
                <p>{{ $show->birthday}}</p>
                <p>{{ $show->website }}</p>
                <p>{{ $show->phone }}</p>
                <p>{{ $show->city }}</p>
                <p>{{ $show->age }}</p>
                <p>{{ $show->degree }}</p>
                <p>{{ $show->email }}</p>
                <p>{{ $show->freelance }}</p>
                <p>{{ $show->paragraphe }}</p>
            </div>
            <div class="mt-5 flex align-center justify-center ">
                <a href="/dashboard/about/{{ $show->id }}/edit" class="px-4 py-2 mt-5 font-medium tracking-wide text-white capitalize transition-colors duration-200 transform bg-green-600 rounded-md dark:bg-gray-800 hover:bg-green-500 dark:hover:bg-gray-700 focus:outline-none focus:bg-blue-500 dark:focus:bg-gray-700">Editer</a>
            </div>
        </div>
    </div>

