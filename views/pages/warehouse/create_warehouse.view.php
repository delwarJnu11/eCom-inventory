<div class="flex flex-col items-center justify-center min-h-[90vh] bg-gray-100">
  <h2 class="text-3xl text-gray-500 font-semibold mb-10">Add Warehouse</h2>
  <form action="" method="post" class="w-1/2 bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
    <div class="mb-4">
      <label class="block text-gray-700 text-sm font-bold mb-2" for="warehouse">
        Warehouse Name
      </label>
      <input
        type="text"
        id="warehouse"
        name="warehouse_name"
        placeholder="Enter warehouse"
        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
      />
    </div>
    <div class="mb-4">
      <label class="block text-gray-700 text-sm font-bold mb-2" for="location">
        Location
      </label>
      <input
        type="text"
        id="location"
        name="location"
        placeholder="Enter location"
        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
      />
    </div>
    <div class="mb-4">
      <label class="block text-gray-700 text-sm font-bold mb-2" for="capacity">
        Comment
      </label>
      <input
        type="number"
        id="capacity"
        name="capacity"
        placeholder="Enter capacity"
        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
      />
    </div>

    <div class="flex items-center justify-between">
      <button
        type="submit"
        class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
        name="add_warehouse"
      >
        Add Warehouse
      </button>
    </div>
  </form>
  <h2 class="text-green-400 text-base font-semibold"><?= isset($message) ? $message : ""; ?></h2>
  <h2 class="text-red-400 text-base font-semibold"><?= isset($error) ? $error : ""; ?></h2>
</div>