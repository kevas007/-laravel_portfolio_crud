<section class="max-w-4xl p-6 mx-auto bg-white rounded-md shadow-md dark:bg-gray-800">
    <form action="/dashboard/about/{{ $edit->id }}" method="POST">
        @csrf
        @method("PUT")
        <div class="grid grid-cols-1 gap-6 mt-4 sm:grid-cols-2">
            <div>
                <label class="text-gray-700 dark:text-gray-200" for="username">TitreAbout</label>
                <input id="username" type="text" name="titreaAbout" value="{{ $edit->titreAbout }}"class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
            </div>

            <div>
                <label class="text-gray-700 dark:text-gray-200" for="emailAddress">Paragraphe1</label>
                <input id="emailAddress" type="text" name="para"  value="{{ $edit->para }}" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
            </div>
            <div>
                <label class="text-gray-700 dark:text-gray-200" for="emailAddress">Nom</label>
                <input id="emailAddress" type="text" name="nom"  value="{{ $edit->nom }}"  class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
            </div>
            <div>
                <label class="text-gray-700 dark:text-gray-200" for="emailAddress">Prenom</label>
                <input id="emailAddress" type="text" name="prenom"  value="{{ $edit->prenom }}"  class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
            </div>
            <div>
                <label class="text-gray-700 dark:text-gray-200" for="emailAddress">Titre2</label>
                <input id="emailAddress" type="text" name="titre"  value="{{ $edit->titre}}"  class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
            </div>
            <div>
                <label class="text-gray-700 dark:text-gray-200" for="emailAddress">Paragraphe2</label>
                <input id="emailAddress" type="text" name="paragra"  value="{{ $edit->paragra }}"  class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
            </div>
            <div>
                <label class="text-gray-700 dark:text-gray-200" for="emailAddress">Image</label>
                <input id="emailAddress" type="text" name="img" value="{{ $edit->img }}"  class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
            </div>
            <div>
                <label class="text-gray-700 dark:text-gray-200" for="emailAddress">Description</label>
                <input id="emailAddress" type="text" name="description"  value="{{ $edit->description }}"  class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
            </div>
            <div>
                <label class="text-gray-700 dark:text-gray-200" for="emailAddress">Birthday</label>
                <input id="emailAddress" type="text" name="birthday"  value="{{ $edit->birthday }}"  class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
            </div>
            <div>
                <label class="text-gray-700 dark:text-gray-200" for="emailAddress">Website</label>
                <input id="emailAddress" type="text" name="website"  value="{{ $edit->website }}"  class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
            </div>
            <div>
                <label class="text-gray-700 dark:text-gray-200" for="emailAddress">Phone</label>
                <input id="emailAddress" type="text" name="phone"  value="{{ $edit->phone }}"  class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
            </div>
            <div>
                <label class="text-gray-700 dark:text-gray-200" for="emailAddress">City</label>
                <input id="emailAddress" type="text" name="city"  value="{{ $edit->city }}"  class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
            </div>
            <div>
                <label class="text-gray-700 dark:text-gray-200" for="emailAddress">Age</label>
                <input id="emailAddress" type="text" name="age"  value="{{ $edit->age }}"  class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
            </div>
            <div>
                <label class="text-gray-700 dark:text-gray-200" for="emailAddress">Degree</label>
                <input id="emailAddress" type="text" name="degree"  value="{{ $edit->degree }}"  class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
            </div>
            <div>
                <label class="text-gray-700 dark:text-gray-200" for="emailAddress">Email</label>
                <input id="emailAddress" type="text" name="email"  value="{{ $edit->email }}"  class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
            </div>
            <div>
                <label class="text-gray-700 dark:text-gray-200" for="emailAddress">Freelance</label>
                <input id="emailAddress" type="text" name="freelance"  value="{{ $edit->freelance }}"  class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
            </div>
            <div>
                <label class="text-gray-700 dark:text-gray-200" for="emailAddress">Paragraphe3</label>
                <input id="emailAddress" type="text" name="paragraphe"  value="{{ $edit->paragraphe }}"  class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
            </div>


        </div>

        <div class="flex justify-end mt-6">
            <button class="px-6 py-2 leading-5 text-white transition-colors duration-200 transform bg-gray-700 rounded-md hover:bg-gray-600 focus:outline-none focus:bg-gray-600" >save </button>
        </div>
    </form>
</section>
