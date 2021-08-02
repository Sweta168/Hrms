@extends('master')
@section("content")

<style>
    .container{
        
        background: white;
        max-width:1000px;
        
        margin-left: 350px;

        padding: 70px 150px;
        border-radius: 4px;
    }
    input[type=text]
    {
        display: inline-block;
        width: 100px;
        padding: 1px;
        box-sizing: border-box;
        border-radius: 7px;
        border: 5px solid;
        margin: 10 px 0;


    }
    input[type=submit]
    {
        width: 100%;
        padding: 10 px;
        margin: 10 px 0;
        border-radius: 4 px;
        border: none;
        background:orange;
        font-size: 20 px;
        cursor:pointer;
    }
}
</style>
   
<div class="container">
<h1>Log In</h1>
    <div class="row">
        <div class ="col-sm-4 col-sm-offset=4">
        <form >
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
</div>
</div>
@endsection