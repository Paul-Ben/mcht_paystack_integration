<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Payments') }}
        </h2>
    </x-slot>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('assets/bootstrap.min.css')}}">
    <title>Callback Page</title>
</head>
<body>
    <div class="container">
        <div class="header col-md-5 bg-secondary text-center m-4 p-3">
        <h1>Payment Reciept</h1>
    </div>
    <div class="col-6 m-5">

        <table class="col-md-6 align-center">
            <tbody>
                <tr><td>Status:</td><td>{{$data->status}}</td></tr>
                <tr><td>Payment ID:</td><td>{{$data->id}}</td></tr>
                <tr><td>Payment Type:</td><td>{{$data->channel}}</td></tr>
                <tr><td>Payment Reference:</td><td>{{$data->reference}}</td></tr>
                <tr><td>Amount:</td><td>NGN {{$data->amount/100}}</td></tr>
                <tr><td>Fees:</td><td>NGN {{$data->fees/100}}</td></tr>
                <tr><td>Email:</td><td>{{$data->customer->email}}</td></tr>
                <tr><td>Customer ID:</td><td>{{$data->customer->id}}</td></tr>
                <tr><td>Status:</td><td>{{$data->customer->first_name}} </td></tr>
                <tr><td>Status:</td><td>{{$data->status}}</td></tr>
            </tbody>
        </table>
    </div>
    </div>
</body>
</html>
</x-app-layout>