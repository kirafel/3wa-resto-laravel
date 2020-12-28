@extends('layouts.app')

@section('content')

@if (session('AddBooking'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
    {{ session('AddBooking') }}
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
@endif

@if (session('deleteBooking'))
<div class="alert alert-danger alert-dismissible fade show" role="alert">
    {{ session('deleteBooking') }}
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
@endif

<a href="{{ route('booking.create') }}" class="btn btn-outline-primary btn-lg float-right">Book now !</a>
    <h1 class="text-center mb-5">Bookings List</h1>

    @if(count($bookings) > 0)
         @foreach($bookings as $booking)
            <ul class="list-group mb-3">
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    <a href="{{route('booking.show', $booking->id)}}" class="text-dark">This booking is for the <strong>{{$booking->booking_date}}</strong> at <strong>{{$booking->booking_time}}</strong></a>
                    <span class="badge badge-primary badge-pill">{{$booking->number_of_seats}} persons</span>
                </li>
            </ul>
        @endforeach
    @else
    <div class="alert alert-danger" role="alert">
        You have no bookings yet !
    </div>
    @endif
@endsection