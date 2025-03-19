@extends('layouts.dashboard')
@section('dash')

<div class="container-fluid py-4">
    <div class="row">
      <div class="col-12">
        <div class="card my-4">
          <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
            <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
              <h6 class="text-white text-capitalize ps-3">View All Messages</h6>
            </div>
          </div>
          <div class="card-body px-0 pb-2">
            <div class="table-responsive p-0">
              <table class="table align-items-center mb-0">
                <thead>
                  <tr>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Id</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Name/Email</th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Phone</th>
                    <th class="text-secondary text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 opacity-7">Message</th>
                    <th class="text-secondary text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 opacity-7">Date</th>
                    <th class="text-secondary text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 opacity-7">Action</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($Contact_Admin as $data)
                      <tr>
                            <td>
                                <p>{{ $data->id }}</p>
                            </td>
                          <td>
                          <div class="d-flex px-2 py-1">
                              <div>
                              {{-- <img src="../assets/img/team-2.jpg" class="avatar avatar-sm me-3 border-radius-lg" alt="user1"> --}}
                              </div>
                              <div class="d-flex flex-column justify-content-center">
                              <h6 class="mb-0 text-sm">{{ $data->name }}</h6>
                              <p class="text-xs text-secondary mb-0">{{ $data->email }}</p>
                              </div>
                          </div>
                          </td>
                          <td class="text-center">
                              <p class="text-xs font-weight-bold mb-0">{{ $data->phone }}</p>
                          </td>
                          <td class="">
                            <div style="font-size: 20px;"><p>{{ $data->message }}</p></div>
                          </td>
                          <td >
                            <p class="text-secondary text-xs font-weight-bold">{{ $data->created_at }}</p>
                          </td>
                          <td class="align-middle">
                            <div style="background-color:red; padding:10px; margin-bottom: 2px;">
                                <a href="{{ route('remove.message', $data->id) }}" style="color:white;">Remove</a>
                            </div>
                          </td>
                      </tr>
                  @endforeach


                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>
 


@endsection