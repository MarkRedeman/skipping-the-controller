<?php
// We receive a request and map it to a response

// impose CQRS: get requests are queries, POST, PUT and DELETE are commands
Route::get('users/{id}', 'Acme/Users/RetrieveUsers/RetrieveUsersQuery');
Route::post('users',     'Acme/Users/RegisterUser/RegisterUserCommand');