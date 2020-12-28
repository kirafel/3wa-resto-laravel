@extends('layouts.app')

@section('content')

@if (session('updateBooking'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
    {{ session('updateBooking') }}
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
@endif


    <h1 class="text-center mb-4">Booking Detail</h1>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th scope="col">Booking Date</th>
                <th scope="col">Booking Time</th>
                <th scope="col">Number Of Seats</th>
                <th scope="col">Edit/Remove</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{$booking->booking_date}}</td>
                <td>{{$booking->booking_time}}</td>
                <td>{{$booking->number_of_seats}}</td>
                <td><a href="{{ route('booking.edit', $booking->id) }}" class="btn btn-sm btn-outline-success mr-2">Edit</a> <a href="#" class="btn btn-outline-danger btn-sm" data-toggle="modal" data-target="#confirmDeleteModal">Remove</a></td>
            </tr>
        </tbody>
    </table>

    <!-- Modal -->
    <div class="modal fade" id="confirmDeleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Delete booking</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-body">
                    Are you sure to delete your booking ?
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-outline-danger" id="c-delete">Confirm delete</button>
                </div>

                <form id="d-book" action="{{ route('booking.destroy', $booking->id) }}" method="POST" style="display: none;">
                    @csrf
                    @method('DELETE')
                </form>
            </div>
        </div>
    </div>

@endsection