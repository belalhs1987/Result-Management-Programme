  
@extends('master.layout')
@section('main_content')
<div class="container" style=" min-height: 500px;">
   <div class="container-login100">
    <div class="wrap-login100  p-t-30 p-b-50 text-center m-4">
      <h3 class="text-danger"> Type your User name and Email to recover your password</h3>
      <form method="post" action="{{ url('inputForRecoverPassword')}}" class="login100-form validate-form">
        {{ csrf_field() }}
        @if($errors->any())
        <div class="alert alert-danger">
                       Invalid Username or Email
            </div>
          @endif
         <table align="center">
           <!-- <tr>
                <div class="wrap-input100">
                      <td align="right"><label for="username"> User Name:</label></td>
                      <td><input type="text" name="username" class="wrap-input100 validate-input m-4" data-validate = "Enter urlsername" placeholder="User Name" required> </td>
                </div>
             </tr> -->
              <!--@if(session()->has('message'))
                       <div class="alert alert-success">
                       Email has been sent. Please check your email to recover password.
                    </div>
                    @endif -->
                    @if(Session::has('message'))
                       <div class="alert alert-success">
                        {{ Session::get('message')}}
                    </div>
                    @endif 
                      
             <tr>
                    <div class="wrap-input100 validate-input mb-4" data-validate="Enter password">
                           <td align="right"><label for="email">Email :  </label></td>
                           <td> <input type="email" class="input100"  name="email" placeholder="Emai" required></td>
                           
                    </div>
                      
                           <br/><br/>
                  </div>
             </tr>
         </table>
                <div class="container-login100-form-btn m-4">
                    <input type="submit" class="login100-form-btn btn-primary" value=" Submit">   
                </div>
      </form>
      
    </div>
   </div>
  
</div>

@endsection
   