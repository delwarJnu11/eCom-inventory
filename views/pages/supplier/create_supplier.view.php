<div class="flex flex-col items-center justify-center min-h-[90vh] bg-gray-100">
  <h2 class="text-3xl text-gray-500 font-semibold mb-10">Add Supplier</h2>
  <form action="" method="post" class="w-1/2 bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
    <div class="mb-4">
      <label class="block text-gray-700 text-sm font-bold mb-2" for="name">
        Supplier Name
      </label>
      <input
        type="text"
        id="name"
        name="name"
        placeholder="Enter name"
        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
      />
    </div>
    <div class="mb-4">
      <label class="block text-gray-700 text-sm font-bold mb-2" for="email">
        Supplier Email
      </label>
      <input
        type="text"
        id="email"
        name="email"
        placeholder="Enter email"
        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
      />
    </div>
    <div class="mb-4">
      <label class="block text-gray-700 text-sm font-bold mb-2" for="phone">
        Supplier Phone
      </label>
      <input
        type="text"
        id="phone"
        name="phone"
        placeholder="Enter Phone"
        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
      />
    </div>
    <div class="mb-4">
      <label class="block text-gray-700 text-sm font-bold mb-2" for="dob">
        Date Of Birth
      </label>
      <input
        type="date"
        id="dob"
        name="dob"
        placeholder="Enter dob"
        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
      />
    </div>
    <div class="mb-4">
      <label class="block text-gray-700 text-sm font-bold mb-2" for="address">
        Address
      </label>
      <input
        type="text"
        id="address"
        name="address"
        placeholder="Enter address"
        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
      />
    </div>

    <div class="flex items-center justify-between">
      <button
        type="submit"
        class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
        name="add_supplier"
      >
        Add Supplier
      </button>
    </div>
  </form>
  <h2 class="text-green-400 text-base font-semibold"><?= isset($message) ? $message : ""; ?></h2>
  <h2 class="text-red-400 text-base font-semibold"><?= isset($error) ? $error : ""; ?></h2>
</div>