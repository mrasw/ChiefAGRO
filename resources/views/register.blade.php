<link rel="stylesheet" href="<?php echo asset('css/logincss.css')?>" type="text/css"> 
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<div class="sidenav">
         <div class="login-main-text">
            <h2>ChiefAgro<br> Regist Page</h2>
            <p>register from here to access.</p>
         </div>
      </div>
      <div class="main">
         <div class="col-md-6 col-sm-12">
            <div class="login-form">
               <form action="register" method="post">
                   @csrf          

                  <div class="form-group">
                     <label>Nama Anda</label>
                     <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" placeholder="Nama Anda" required value="{{old('name')}}">
                     
                     @error('name')
                     <div class="invalid-feedback"> 
                     {{$message}}
                     Tidak boleh mengandung angka atau karakter spesial seperti !,/?
                     </div>
                     @enderror

                  </div>

                  <div class="form-group">
                     <label>User Name</label>
                     <input type="text" name="username" class="form-control @error('username') is-invalid @enderror" placeholder="User Name" required value="{{old('username')}}">

                     @error('username')
                     <div class="invalid-feedback">
                        {{$message}}
                     </div>
                     @enderror

                  </div>
                  <div class="form-group">
                     <label>Password</label>
                     <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password" required value="{{old('password')}}">

                     @error('password')
                     <div class="invalid-feedback">
                        {{$message}}
                     </div>
                     @enderror

                  </div>
                  <button type="submit" class="btn btn-black">Regist</button>
                  <button type="submit" class="btn btn-secondary"><a href="/login">Login</a></button>
               </form>
            </div>
         </div>
      </div>