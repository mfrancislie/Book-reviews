<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Books Reviews</title>
    <script src="https://cdn.tailwindcss.com"></script>
    
    @yield('styles'
    )
      {{-- blade-formatter-disable --}}
  <style type="text/tailwindcss">
     
     .book-item {
      @apply text-sm rounded-md bg-white p-4 leading-6 text-slate-900 shadow-md shadow-black/5 ring-1 ring-slate-700/10;
    }


    .book-title {
      @apply text-lg font-semibold text-slate-800 hover:text-slate-600;
    }

    .book-author {
      @apply block text-slate-600;
    }

    .book-rating {
      @apply text-sm font-medium text-slate-700;
    }

    .book-review-count {
      @apply text-xs text-slate-500;
    }

    .empty-book-item {
      @apply text-sm rounded-md bg-white py-10 px-4 text-center leading-6 text-slate-900 shadow-md shadow-black/5 ring-1 ring-slate-700/10;
    }

    .empty-text {
      @apply font-medium text-slate-500;
    }

    .btn {
      @apply rounded-md px-2 py-1 text-center font-medium text-slate-700 shadow-sm ring-1 ring-slate-700/10 hover:bg-slate-50
    }

    .input, 
    .textarea {
      @apply rounded-md shadow-sm appearance-none border w-full py-2 px-3 text-slate-700 leading-tight focus:outline-none
    }

    .filter-container {
      @apply mb-4 flex space-x-2 rounded-md bg-slate-200 p-2;
    }

    .filter-item {
      @apply flex w-full items-center justify-center rounded-md px-4 py-2 text-center text-sm font-medium text-slate-500;
    }

    .filter-item-active {
      @apply bg-slate-500 shadow-sm flex w-full items-center justify-center rounded-md px-4 py-2 text-center text-cyan-50 text-sm font-medium;
    }

  </style>
  {{-- blade-formatter-enable --}}

  
</head>
<body class="container mx-auto mt-10 mb-10 w-[70%]">     
    <h1 class="mb-4 text-2xl">@yield('title')</h1>

        @yield('content')
    </div>
</body>
</html>