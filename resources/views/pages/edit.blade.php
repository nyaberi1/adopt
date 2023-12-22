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
        <nav class="navbar justify-content-end navbar-light bg-light p-4 space">
           
              <a class="navbar-brand  hover:bg-blue-200 p-2" href="/"><button class="btn btn-primary">Home</button></a></div>
             
                <a class="navbar-brand  hover:bg-blue-s200" href="/login">Login</a>
                <a class="navbar-brand  hover:bg-blue-s200" href="/register">Register</a>
                <a class="navbar-brand  hover:bg-blue-s200" href="/admin">Admin</a>
           
             
          </nav>
          
          <div class="container bg-gray-600 p">
            <form action="{{ route('update', $page->id) }}" method="POST">
               @csrf
               @method('PUT')
                
                    <div class="mb-6 p-3">
                    <label for="exampleInputEmail1" class="form-label">Name of the animal you want  to adopt</label>
                    <input type="text" name="name" class="form-control" placeholder="name of the animal" id="name"value="{{ $page->name }}" >
                    <span class="text-red-500">
                      @error('name')
                        {{ $message }}
                      @enderror
                    </span>
                   
                  </div>
                  <div class="mb-6 p-3">
                    <label for="exampleInputEmail1" class="form-label">Adopter`s Name</label>
                    <input type="text" name="aname" class="form-control" placeholder="adoter's name" id="aname" value="{{ $page->aname }}">
                    <span class="text-red-500">
                      @error('aname')
                        {{ $message }}
                      @enderror
                    </span>
                    
                  </div>
                  <div class="mb-6 p-3">
                    <label for="exampleInputEmail1" class="form-label">Address</label>
                    <input type="text" name="address" class="form-control" placeholder="street address" id="address" value="{{ $page->address }}" >
                    <span class="text-red-500">
                      @error('address')
                        {{ $message }}
                      @enderror
                    </span>
                    
                  </div>
                  <div class="mb-6 p-3">
                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                    <input  name="email" type="email" placeholder="Email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"  value="{{ $page->email }}">>
                    <span class="text-red-500">
                      @error('email')
                        {{ $message }}
                      @enderror
                    </span>
                
                  </div>
                  <div class="mb-6 p-3">
                    <label for="exampleInputEmail1" class="form-label">Phone Number</label>
                    <input type="text" name="pno" class="form-control" placeholder="phone number" id="pno" value="{{ $page->pno }}"> >
                    <span class="text-red-500">
                      @error('pno')
                        {{ $message }}
                      @enderror
                    </span>
                    
                  </div>
                  
                  <div class="mb-6 p-3">
                    <label for="choice" class="form-label">Do you have any pets?</label>
                    <div class="form-check">
                        <input class="form-check-input" name="choice" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                        <label class="form-check-label" for="flexRadioDefault1">
                          Yes
                        </label>
                      </div>  
                      <div class="form-check">
                        <input class="form-check-input" name="choice" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                        <label class="form-check-label" for="flexRadioDefault1">
                         No
                        </label>
                      </div>  
                      <span class="text-red-500">
                        @error('choice')
                          {{ $message }}
                        @enderror
                      </span>           
                  </div>
                  
                  <div class="mb-3 p-3">
                    <label for="textarea" class="form-label">If you have pets, please list them below</label>
                    <label for="exampleFormControlTextarea1" class="form-label"></label>
                    <textarea class="form-control" name="textarea" id="exampleFormControlTextarea1" rows="3">value="{{ $page->textarea }}"></textarea>
                    <span class="text-red-500">
                      @error('textarea')
                        {{ $message }}
                      @enderror
                    </span>
                  </div>
                  


               
                
                <div class="mb-3 form-check ">
                  
                </div>
                <button type="submit" class="btn btn-primary ">Submit</button>
               </fieldset>
              </form>
          </div>
    </body>
</html>