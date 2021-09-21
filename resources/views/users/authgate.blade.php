@extends('users.layout')


@can('isAdmin')
    <h1 class="text-center text-danger">I am an Admin.</h1>
@elsecan('isUser')
    <h1 class="text-center text-primary">I am an User.</h1>
@elsecan('isManager')
    <h1 class="text-center text-success">I am an Manager.</h1>
@else
    <h1 class="text-center text-warning">I am a Guest.</h1>
@endcan
