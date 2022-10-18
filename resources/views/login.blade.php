@extends('master')
@section('content')
<h1>login page</h1>
<form action="login" method="POST">
@csrf
    <label>mail</label><br>
    <input type="text" name="email"><br><br>
    <label>password</label><br>
    <input type="password" name="password"><br><br>

    <input type="submit" name="login">
</form>

