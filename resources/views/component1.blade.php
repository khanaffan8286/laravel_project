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
    @php
    $var = 10;
    @endphp
    <form action="#" method="POST" class="space-y-5">

   
     
      <!-- Name -->
      <div>
        <x-input type="text" name="name" placeholder="name" label="Name" :var=$var/>
               
      </div>
      <div>
        <x-input type="email" name="email" placeholder="email" label="email" />
               
      </div>
      <div>
        <x-input type="password" name="password" placeholder="password" label="password" />
               
      </div>
     
      

   
    </form>
  </div>
</body>
</html>
