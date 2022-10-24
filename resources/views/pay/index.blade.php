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
    <title>Payment Page</title>
</head>
<body>
    <div class="container">
        <div class="row">
    <div class="header bg-secondary text-center m-4 p-3">
        <h1>Payments Page</h1>
    </div>
        </div>
    <div class="row">
        @if (session()->has('error'))
            {{session()->get('error')}}
        @endif
        
        <form action="{{ route('pay')}}" method="post" class="form m-4 p-3">
        @csrf
        <div class="form-group col-md-4">
          <label for="email">Email Address</label>
          <input type="email" name="email" id="" class="form-control" placeholder="Email address" aria-describedby="helpId" required>
          <small id="helpId" class="text-muted">Enter your email address here.</small>
        </div>
        <div class="form-group col-md-4">
            <label for="regNumber">Registration Number</label>
            <input type="text" name="regNumber" id="" class="form-control" placeholder="Registration Number" aria-describedby="helpId" required>
            <small id="helpId" class="text-muted">Enter your Registration Number here.</small>
          </div> 
        <div class="form-group col-md-4">
            <label for="fullname">First Name</label>
            <input type="text" name="fullname" id="" class="form-control" placeholder="First name" aria-describedby="helpId" required>
            <small id="helpId" class="text-muted">Enter your First name here.</small>
          </div>
          <div class="form-group col-md-4">
            <label for="last_name" class="form-label">Last Name</label>
            <input type="text" name="last_name" id="" class="form-control" placeholder="" aria-describedby="helpId" required>
            <small id="helpId" class="text-muted">Enter your last name here.</small>
          </div>
           
          <div class="form-group col-md-4">
            <label for="phone">Phone Number</label>
            <input type="text" name="phone" id="" class="form-control" placeholder="Phone Number" aria-describedby="helpId" required>
            <small id="helpId" class="text-muted">Enter your Phone Number here.</small>
          </div> 
          <div class="form-group col-md-4">
            <label for="">Programe</label>
            <select class="form-control" name="programe" id="" required>
              <option value="">Select a Programe from the list</option>
              <option value="CHEW">CHEW</option>
              <option value="JCHEW">JCHEW</option>
              <option value="MEDICAL LAB">MEDICAL LAB</option>
            </select>
          </div>
          <div class="form-group col-md-4">
            <label for="">Select Fee to be paid.</label>
            <select class="form-control" name="amount" id="" type="number"   required>
              <option value="">Select a Programe from the list</option>
              <option value="20000">CHEW 1 | First Semester</option>
              <option value="15000">CHEW 1 | Second Semester</option>
              <option value="20000">JCHEW 1 | First Semester</option>
              <option value="15000">JCHEW 1 | Second Semester</option>
              <option value="25000">MEDICAL LAB 1 | First Semester</option>
              <option value="20000">MEDICAL LAB 1 | Second Semeste</option>
            </select>
          </div>
        {{-- <label for="email">email</label>
        <input type="email" name="email" placeholder="Email address" required>
            <br><br>
        <label for="amount">Amount</label>
        <input type="number" name="amount" placeholder="Amount to be paid" required> --}}

        <button class="btn btn-primary m-3" type="submit">Submit</button>
        <button class="btn btn-danger m-3" type="reset">Reset</button>

        </form>
    </div>
</div>
</body>
</html>
</x-app-layout>