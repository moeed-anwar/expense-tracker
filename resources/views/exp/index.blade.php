<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Track Your Transactions') }}
        </h2>
    </x-slot>
    <div class=" max-w-3xl mx-auto mt-8 p-4 bg-white shadow rounded flex items-center">
      <h1 class=" text-3xl font-bold">Total : <span class="font-bold text-3xl text-red-600">₹{{$total}}</span> </h1>
      <!-- <h1 class=" text-center font-bold text-3xl text-red-600"></h1> -->
    </div>
  <main class="max-w-3xl mx-auto mt-8 p-4 bg-white shadow rounded">

    <!-- Add Expense Form -->
    <section class="mb-6">
      <h2 class="text-xl font-bold mb-4 text-center">Add New Transaction</h2>
      <form action="{{route('exp.add')}}" class="grid grid-cols-1 md:grid-cols-3 gap-4" method="POST">
        @csrf
        @method('post')
        <!-- <input type="text" placeholder="Description" name="description" class="p-2 border rounded"  required /> -->
        <select name="type" id="">
          <option value="Expense">Expense</option>
          <option value="Income">Income</option>
         </select>
         <select name="description" id="">
          <option value="Shopping">Shopping</option>
          <option value="Rents">Rents</option>
          <option value="Groceries">Groceries</option>
          <option value="Health">Health</option>
          <option value="Travel">Travel</option>
          <option value="Food">Food</option>
          <option value="Salary">Salary</option>
          <option value="Bonuses & Commissions">Bonuses & Commissions</option>
          <option value="Hourly Wages">Hourly Wages</option>
          <option value="Others">Others</option>
         </select>
        <input type="number" placeholder="Amount" name="amount" class="p-2 border rounded" required />
        <input type="date" name="date" class="p-2 border rounded" required />
        <button type="submit" class="md:col-span-3 bg-blue-600 text-white p-2 rounded hover:bg-blue-700 transition">
          Add New Transaction
        </button>
      </form>
    </section>

    <!-- Expense List -->
    <section>
      <h2 class="text-xl font-bold mb-4">Expense History</h2>
      <table class="w-full table-auto border">
        <thead>
          <tr class="bg-gray-200">
            <th class="p-2 border">Amount</th>
            <th class="p-2 border">Type</th>
            <th class="p-2 border">Description</th>            
            <th class="p-2 border">Date</th>
            <th class="p-2 border">Action</th>
          </tr>
        </thead>
        <tbody>
          <!-- Example row -->
           @foreach($data as $data)
          <tr>
            <td class="p-2 border">₹{{$data->amount}}</td>
            <td class="p-2 border">{{$data->type}}</td>
            <td class="p-2 border">{{$data->description}}</td>
            <td class="p-2 border">{{$data->date}}</td>
            <td class="p-2 border text-center">
              <!-- <button class="bg-red-500 text-white px-2 py-1 rounded hover:bg-red-600">Delete</button> -->
               <form action="{{route('exp.destroy',['data'=> $data])}}" method="POST">
                @csrf 
                @method('delete')
                <input class="bg-red-500 text-white px-2 py-1 rounded hover:bg-red-600" type="submit" value="delete">
               </form>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </section>

  </main>

</x-app-layout>