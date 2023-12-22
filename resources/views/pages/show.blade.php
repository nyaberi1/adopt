<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Adoption Management System</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap Icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic" rel="stylesheet" type="text/css" />
        <!-- SimpleLightbox plugin CSS-->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />

       
    </div>
    <body>
        

          <div class=" container p-2">
            @if (session()->has('message'))
              <div class="alert alert-success">
                {{ session()->get('message') }}
              </div>
              <meta http-equiv="refresh" content="5">
            @endif
        
        
            <div class=" p-2">
              <a href="{{ route('create') }}">
               <button class="btn btn-primary">ADD New</button></a>
            </div>
        
            <table class=" table-auto border-separate border-spacing-1 border  border-slate-400 text-center   ">
        
              <thead>
                <tr>
                  <th class="border border-slate-600 ">ID</th>
                  <th class="border border-slate-600 ">Animal Name</th>
                  <th class="border border-slate-600 ">Name</th>
                  <th class="border border-slate-600 ">Email</th>
                  <th class="border border-slate-600 "> Address</th>
                  <th class="border border-slate-600 ">Phone Number</th>
                  <th class="border border-slate-600 ">Choice </th>
                  <th class="border border-slate-600 ">Description</th>
                  <th class="border border-slate-600">Action</th>
                  <th class="border border-slate-600">Delete</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($pages as $page)
                  <tr>
        
                    <td class="border border-slate-700 ">{{ $page->id }}</td>
                    <td class="border border-slate-700 ">{{ $page->aname }}</td>
                    <td class="border border-slate-700 ">{{ $page->name }}</td>
                    <td class="border border-slate-700 ">{{ $page->email }}</td>
                    <td class="border border-slate-700 ">{{ $page->adddress }}</td>
                    <td class="border border-slate-700 ">{{ $page->pno }}</td>
                    <td class="border border-slate-700 ">{{ $page->choice }}</td>
                    <td class="border border-slate-700 ">{{ $page->textarea }}</td>
                    
                    <td class=""><a
                        href="{{ route('edit', $page->id) }}">Edit</a></td>
        
                    <td class="">
                      <form action="{{ route('delete', $page->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button>Delete</button>
                      </form>
                    </td>
        
                  </tr>
                @endforeach
              </tbody>        
            </table>
            <div class="p-2  text-black hover:text-blue-600">
        
              {{ $pages->links() }}
            </div>    
          </div>
         
    </body>
</html>