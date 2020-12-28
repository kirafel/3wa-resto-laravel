@extends('layouts.app')

@section('content')
    <fieldset>
        <legend>New booking</legend>
        <form action="{{ route('booking.store') }}" method="post">
            @csrf
            <div class="row mt-4 mb-3">
                <div class="col">
                    <div class="form-group">
                      <label for="booking_date">Booking Date</label>
                        <input type="date" name="booking_date" value="{{ old('booking_date') }}" id="booking_date" class="form-control" placeholder="" >
                      @error('booking_date')<div class="text-danger">{{ $message }}</div> @enderror
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                      <label for="booking_time">Booking time</label>
                      <input type="time" name="booking_time" value="{{ old('booking_time') }}" id="booking_time" class="form-control" placeholder="" >
                      @error('booking_time')<div class="text-danger">{{ $message }}</div> @enderror
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                      <label for="number_of_seats">Number of seats</label>
                      <input type="number" name="number_of_seats" min="1" max="20" value="{{ old('number_of_seats') }}" id="number_of_seats" class="form-control" placeholder="" >
                      @error('number_of_seats')<div class="text-danger">{{ $message }}</div> @enderror
                    </div>
                </div>
            </div>
           
                <button type="submit" class="btn btn-outline-primary btn-block w-25 m-auto">Book now !</button>
           
        </form>
    </fieldset>
@endsection
