<table class="table w-full">
    <thead>
        <tr>
            <th>Id</th>
            <th>titre</th>
            <th>SousTitre</th>
            <th></th>
            <th></th>
        </tr>
    </thead>
    <tbody id="titre">
        @foreach ($abouts as $about )
        <tr >
            <td>{{ $about->id }}</td>
            <td>{{ $about->titreAbout }}</td>
            <td>{{ $about->titre}}</td>
            <td class="flex">
                <a href="/dashboard/about/{{ $about->id }}/show" class="px-4 py-2 font-medium tracking-wide text-white capitalize transition-colors duration-200 transform bg-blue-600 rounded-md dark:bg-gray-800 hover:bg-blue-500 dark:hover:bg-gray-700 focus:outline-none focus:bg-blue-500 dark:focus:bg-gray-700">SHOW</a>
            </td>
            <td>
                <form action="/dashboard/about/{{ $about->id }}" method="POST">
                    @csrf
                    @method("DELETE")
                    <input type="submit" class="px-4 py-2 font-medium tracking-wide text-white capitalize transition-colors duration-200 transform bg-red-600 rounded-md dark:bg-gray-800 hover:bg-red-500 dark:hover:bg-gray-700 focus:outline-none focus:bg-blue-500 dark:focus:bg-gray-700" value="X">
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
