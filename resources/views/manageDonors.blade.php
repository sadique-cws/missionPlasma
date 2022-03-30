@extends('base')


@section('content')
    <div class="container mt-3">
       <div class="row">
           <div class="col-9">
               <div class="row">
                   <div class="col-8"><h5>Manage Donors</h5></div>
                   <table class="table table-bordered table-hover">
                      <thead>
                        <tr>
                            <th>Name</th>
                            <th>Gender</th>
                            <th>Blood Group</th>
                            <th>Covid Positive</th>
                            <th>Covid Negative</th>
                            <th>State</th>
                            <th>City</th>
                            <th>Phone No</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($donors as $donor)
                        <tr>
                            <td>{{ $donor->name }}</td>
                            <td>{{ $donor->gender }}</td>
                            <td>{{ $donor->bloodGroup }}</td>
                            <td>{{ $donor->covid_positive_date }}</td>
                            <td>{{ $donor->covid_negative_date }}</td>
                            <td>{{ $donor->state->name }}</td>
                            <td>{{ $donor->city->name }}</td>
                            <td>{{ $donor->phone_no }}</td>
                        </tr>
                    @endforeach
                      </tbody>
                   </table>
               </div>
           </div>
           <div class="col-3">
                <div class="card mt-4">
                    <div class="card-footer">Filter Results</div>
                    <div class="card-body">
                        <form action="">
                            <div class="mb-3">
                                <label for="">Select State</label>
                                <select class="form-select">
                                    @foreach ($states as $item)
                                        <option value="{{ $item->id }}">{{ $item->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="">Blood Group</label>
                                <select class="form-select">
                                    <option>O+</option>
                                    <option>O-</option>
                                    <option>A+</option>
                                    <option>A-</option>
                                    <option>B+</option>
                                    <option>B-</option>
                                    <option>AB+</option>
                                    <option>AB-</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <input type="submit" value="Filter" class="btn btn-success w-100">
                            </div>
                        </form>
                    </div>
                </div>
           </div>
       </div>
    </div>
    
@endsection