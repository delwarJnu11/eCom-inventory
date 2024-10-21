<div class="flex flex-col items-center justify-center min-h-[90vh] bg-gray-100">
  <h2 class="text-3xl text-gray-500 font-semibold mb-10">Add Transaction Type</h2>
  <form action="" method="post" class="w-1/2 bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
    <div class="mb-4">
      <label class="block text-gray-700 text-sm font-bold mb-2" for="category">
        Transaction Type
      </label>
      <input
        type="text"
        id="transaction"
        name="transaction"
        placeholder="Enter transaction"
        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
      />
    </div>
    <div class="mb-4">
      <label class="block text-gray-700 text-sm font-bold mb-2" for="category">
        Factor
      </label>
      <input
        type="number"
        id="factor"
        name="factor"
        placeholder="Enter factor"
        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
      />
    </div>
    <div class="mb-4">
      <label class="block text-gray-700 text-sm font-bold mb-2" for="category">
        Comment
      </label>
      <input
        type="text"
        id="comment"
        name="comment"
        placeholder="Enter comment"
        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
      />
    </div>

    <div class="flex items-center justify-between">
      <button
        type="submit"
        class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
        name="add_transaction"
      >
        Add Transaction Type
      </button>
    </div>
  </form>
  <h2 class="text-green-400 text-base font-semibold"><?= isset($message) ? $message : ""; ?></h2>
  <h2 class="text-red-400 text-base font-semibold"><?= isset($error) ? $error : ""; ?></h2>
</div>