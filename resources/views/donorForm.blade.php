@extends('base')


@section('content')
    <div class="container mt-2">
        <div class="card col-7 mx-auto">
            <div class="card-body">
                <h5 class="h5">Apply As Donor</h5>
                <hr>
                <form action="" method="POST">
                   <div class="row">
                    <div class="mb-3 col">
                        <label for="">Name</label>
                        <input type="text" placeholder="Enter name" name="name" value="{{ old("name") }}" class="form-control @error('name') is-invalid @enderror">
                        @error('name')
                            <p class="text-danger small">{{ $message }}</p>
                        @enderror
                    </div>
                    
                    <div class="mb-3 col">
                        <label for="">age</label>
                        <input type="text" placeholder="Enter age" name="age" value="{{ old("age") }}" class="form-control @error('gender') is-invalid @enderror">
                        @error('age')
                            <p class="text-danger small">{{ $message }}</p>
                        @enderror
                    </div>
                   </div>
                   <div class="row">
                    <div class="mb-3 col">
                        <label for="">gender</label>
                        <br>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="gender" id="inlineRadio1" value="Male">
                            <label class="form-check-label" for="inlineRadio1">Male</label>
                          </div>
                          <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="gender" id="inlineRadio2" value="Female" checked>
                            <label class="form-check-label" for="inlineRadio2">Female</label>
                          </div>
                          <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="gender" id="inlineRadio2" value="Other">
                            <label class="form-check-label" for="inlineRadio2">Other</label>
                          </div>
                        @error('gender')
                            <p class="text-danger small">{{ $message }}</p>
                        @enderror
                    </div>
                   </div>
                    <div class="mb-3">
                        <label for="">blood Group</label>
                        <br>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="bloodGroup" id="inlineRadio1" value="o+">
                            <label class="form-check-label" for="inlineRadio1">O+</label>
                          </div>
                          <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="bloodGroup" id="inlineRadio2" value="o-" checked>
                            <label class="form-check-label" for="inlineRadio2">O-</label>
                          </div>
                          <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="bloodGroup" id="inlineRadio2" value="A-">
                            <label class="form-check-label" for="inlineRadio2">A-</label>
                          </div>
                          <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="bloodGroup" id="inlineRadio2" value="A+">
                            <label class="form-check-label" for="inlineRadio2">A+</label>
                          </div>
                          <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="bloodGroup" id="inlineRadio2" value="B+">
                            <label class="form-check-label" for="inlineRadio2">B+</label>
                          </div>
                          <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="bloodGroup" id="inlineRadio2" value="B-">
                            <label class="form-check-label" for="inlineRadio2">B-</label>
                          </div>
                          <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="bloodGroup" id="inlineRadio2" value="AB+">
                            <label class="form-check-label" for="inlineRadio2">AB+</label>
                          </div>
                          <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="bloodGroup" id="inlineRadio2" value="AB-">
                            <label class="form-check-label" for="inlineRadio2">AB-</label>
                          </div>
                         

                         @error('bloodGroup')
                            <p class="text-danger small">{{ $message }}</p>
                        @enderror
                    </div>
                   <div class="row">
                    <div class="mb-3 col">
                        <label for="">Covid Positive Date</label>
                        <input type="date" placeholder="Enter covid_positive_date" name="covid_positive_date" value="{{ old("covid_positive_date") }}" class="form-control @error('covid_positive_date') is-invalid @enderror">
                        @error('covid_positive_date')
                            <p class="text-danger small">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mb-3 col">
                        <label for="">Covid Negative Date</label>
                        <input type="date" placeholder="Enter covid_negative_date" name="covid_negative_date" value="{{ old("covid_negative_date") }}" class="form-control @error('covid_negative_date') is-invalid @enderror">
                        @error('covid_negative_date')
                            <p class="text-danger small">{{ $message }}</p>
                        @enderror
                    </div>
                   </div>

                   
                    <div class="mb-3">
                        <label for="">State</label>
                        <select id="state-dd" class="form-select">
                            @foreach ($states as $item)
                                <option value="{{ $item->id }}">{{ $item->name }}</option>
                            @endforeach
                        </select>
                         @error('state_id')
                            <p class="text-danger small">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="">City</label>
                        <select id="city-dd" class="form-select">
                            <option value="" selected disabled>Please select State First</option>
                        </select>
                         @error('city_id')
                            <p class="text-danger small">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="">Phone No</label>
                        <input type="text" placeholder="Enter phone No" name="phone_no" value="{{ old("phone_no") }}" class="form-control @error('phone_no') is-invalid @enderror">
                        @error('phone_no')
                            <p class="text-danger small">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <input type="submit"  name="send" class="btn btn-success w-100">
                        
                    </div>
                </form>
            </div>
        </div>
    </div>


    @section('js')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        $(document).ready(function () {
            
            $('#state-dd').on('change', function () {
                var idState = this.value;
                $("#city-dd").html('');
                $.ajax({
                    url: "{{url('api/fetch-cities')}}",
                    type: "POST",
                    data: {
                        state_id: idState,
                        _token: '{{csrf_token()}}'
                    },
                    dataType: 'json',
                    success: function (res) {
                        $('#city-dd').html('<option value="">Select City</option>');
                        $.each(res.cities, function (key, value) {
                            $("#city-dd").append('<option value="' + value
                                .id + '">' + value.name + '</option>');
                        });
                    }
                });
            });
        });
    </script>
    @endsection
    
@endsection