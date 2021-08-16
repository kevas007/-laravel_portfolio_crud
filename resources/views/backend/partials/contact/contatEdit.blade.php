<section class="max-w-4xl p-6 mx-auto bg-white rounded-md shadow-md dark:bg-gray-800">
    <form action="/dashboard/conatct/{{ $edit->id }}" method="POST">
        @csrf
        @method("PUT")
        <div class="grid grid-cols-1 gap-6 mt-4 sm:grid-cols-2">
            <div>
                <label class="text-gray-700 dark:text-gray-200" for="emailAddress">titre</label>
                <input id="emailAddress" type="text" name="titre"  value="{{ $edit->titre }}" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
            </div>

            <div>
                <label class="text-gray-700 dark:text-gray-200" for="emailAddress">Description</label>
                <input id="emailAddress" type="text" name="description"  value="{{ $edit->description }}"  class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
            </div>
            <div>
                <label class="text-gray-700 dark:text-gray-200" for="emailAddress">LoactionTitre</label>
                <input id="emailAddress" type="text" name="loactionTitre"  value="{{ $edit->loactionTitre}}"  class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
            </div>
            <div>
                <label class="text-gray-700 dark:text-gray-200" for="emailAddress">Loaction</label>
                <input id="emailAddress" type="text" name="loaction"  value="{{ $edit->loaction }}"  class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
            </div>
            <div>
                <label class="text-gray-700 dark:text-gray-200" for="emailAddress">EmailTitre</label>
                <input id="emailAddress" type="text" name="emailTitre"  value="{{ $edit->emailTitre }}"  class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
            </div>
            <div>
                <label class="text-gray-700 dark:text-gray-200" for="emailAddress">PhoneTitre</label>
                <input id="emailAddress" type="text" name="phoneTitre"  value="{{ $edit->phoneTitre }}"  class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
            </div>
            <div>
                <label class="text-gray-700 dark:text-gray-200" for="emailAddress">Phone</label>
                <input id="emailAddress" type="text" name="phone"  value="{{ $edit->phone }}"  class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
            </div>
            <div>
                <label class="text-gray-700 dark:text-gray-200" for="emailAddress">Map</label>
                <input id="emailAddress" type="text" name="map"  value="{{ $edit->map}}"  class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
            </div>
        </div>

        <div class="flex justify-end mt-6">
            <button class="px-6 py-2 leading-5 text-white transition-colors duration-200 transform bg-gray-700 rounded-md hover:bg-gray-600 focus:outline-none focus:bg-gray-600" >save </button>
        </div>
    </form>
</section>
