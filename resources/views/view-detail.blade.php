<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Employee Table</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 p-10">


<div>
        <button type="submit"
                class=" bg-blue-600 text-white px-4 py-2 rounded-md hover:bg-blue-700 transition" onclick= "window.location.href='{{url('/form')}}'">
          Register
        </button>
      </div>
  <div class="max-w-6xl mx-auto bg-white shadow-md rounded-lg overflow-hidden">
    <div class="p-6 border-b">
      <h2 class="text-2xl font-semibold text-gray-700">Employee List</h2>
    </div>



   
    <div class="overflow-x-auto">
      <form action="view" method="get" class="flex gap-2 mb-4">
    <input type="text" id="search" name="search" placeholder="Search by name or email"
           class="border border-gray-300 rounded-md px-4 py-2 w-full max-w-xs">
    <input type="submit" value="Search"
           class="bg-blue-600 text-white px-4 py-2 rounded-md hover:bg-blue-700 transition">
  </form>

      <table class="min-w-full text-sm text-left text-gray-600">
        <thead class="bg-gray-200 text-xs uppercase text-gray-700">
          <tr>
            <th class="px-6 py-3">ID</th>
            <th class="px-6 py-3">Name</th>
            <th class="px-6 py-3">Email</th>
            <th class="px-6 py-3">Address</th>
            <th class="px-6 py-3">Status</th>
            <th class="px-6 py-3">Timestamp</th>
            <th class="px-6 py-3">Action</th>
          </tr>
        </thead>
        <tbody class="divide-y divide-gray-200 bg-white">

        @foreach($employe as $key => $val)
          <tr>
            
            <td class="px-6 py-4">{{++$key}}</td>
            <td class="px-6 py-4">{{$val['name']}}</td>
            <td class="px-6 py-4">{{$val['email']}}</td>
            <td class="px-6 py-4">{{$val['address']}}</td>
            <td class="px-6 py-4">{{$val['status']}}</td>
            <td class="px-6 py-4">{{$val['added_on']}}</td>
            <td class="px-6 py-4">
                <a href="{{url('edit',['emp_id' => $val['Id']])}}"  class='bg-blue-500 px-3 py-2 text-white rounded-xl'>Edit</a>
                <a id='btn' href="{{ url('delete', ['Id' => $val['Id']] )}}" class='bg-red-500 px-3 py-2 text-white rounded-xl'>Delete</a>
            </td>
            
          </tr>
          @endforeach
          <!-- Add more rows as needed -->
        </tbody>
      </table>
      
    </div>
    <div>
        {{ $employe->links() }}
        </div>
  </div>

  <script>
    document.addEventListener('DOMContentLoaded', function() {
        const deleteButtons = document.querySelectorAll('#btn');
        deleteButtons.forEach(button => {
            button.addEventListener('click', function(event) {
                event.preventDefault();
                if (confirm('Are you sure you want to delete this record?')) {
                    window.location.href = this.href;
                }
            });
        });
    });
  </script>
</body>
</html>
