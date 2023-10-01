@extends('layout.app-master')

@section('contect')
    
    <div class="bg-light- p-5 rounded">
        <h1>Dashboard</h1>
    </div>

    @if (session('resent'))
        <div class="alert alert-success" role="alert">
            Verification email has been send your email address
        </div>
    @endif

    before procedding, pleace check your email for a verification link. If you not receive the email,
    
    <form action="{{route('verification.resend')}}" method="POST" class="d-inline">
    @csrf
    <button type="submit" class="d-inline btn btn-link p-0"> click here to request another</button>
    </form>



@endsection