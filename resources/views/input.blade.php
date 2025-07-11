<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Basic Form</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">
  <div class="bg-white p-8 rounded-lg shadow-md w-full max-w-md">
    <h2 class="text-2xl font-semibold text-gray-700 mb-6 text-center">Register</h2>
    <form action="{{url(!empty($employe->Id) && $employe->Id ? '/update/'.$employe->Id : '/register')}}" method="POST" class="space-y-5" encrypt="multipart/form-data">

   
      @csrf
      <!-- Name -->
      <div>
        <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
        <input type="text" id="name" name="name"  value="{{ old('name',$employe -> name ?? '' ) }}"
               class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500" />
               
      </div>
      <span class="text-red-500 text-sm">
                @error('name')
            
                  {{ $message }}
                @enderror
               </span>
      

      <!-- Email -->
      <div>
        <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
        <input type="email" id="email" name="email"  value="{{ old('email',$employe -> email ?? '' ) }}"
               class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500" />
      </div>
      <span class="text-red-500 text-sm">
                @error('email')
            
                  {{ $message }}
                @enderror
               </span>

      <!-- Password -->
      <div>
        <label for="address" class="block text-sm font-medium text-gray-700">Address</label>
        <textarea type="text" id="address" name="address"
               class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500" >{{ old('address',$employe -> address  ?? '') }}</textarea>
      </div>
      <span class="text-red-500 text-sm">
                @error('address')
            
                  {{ $message }}
                @enderror
               </span>
               
               <div>
                <label for="file" class="block text-sm font-medium text-gray-700">file</label>
        <input type="file" id="email" name="file"  value="{{ old('file',$employe -> file ?? '' ) }}"
               class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500" />
      </div>
      <span class="text-red-500 text-sm">
                @error('file')
            
                  {{ $message }}
                @enderror
               </span>
                


      <!-- Submit Button -->
      <div>
        <button type="submit"
                class="w-full bg-blue-600 text-white px-4 py-2 rounded-md hover:bg-blue-700 transition">
          Submit
        </button>
      </div>
      
    </form>
  </div>
</body>
</html>
