@extends('layouts.dashboard')
@section('dash')
    <div class="container-fluid py-4">
      <div class="row">
        <div class="col-12">
          <div class="card my-4">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
              <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                <h6 class="text-white text-capitalize ps-3">View All Publications</h6>
              </div>
            </div>
            <div class="card-body px-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table align-items-center mb-0">
                  <thead>
                    <tr>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Author</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">View</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Status</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Posted</th>
                      <th class="text-secondary text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 opacity-7">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($Journal_submission as $post)
                        <tr>
                            <td>
                            <div class="d-flex px-2 py-1">
                                <div>
                                {{-- <img src="../assets/img/team-2.jpg" class="avatar avatar-sm me-3 border-radius-lg" alt="user1"> --}}
                                </div>
                                <div class="d-flex flex-column justify-content-center">
                                <h6 class="mb-0 text-sm">{{ $post->author_name }}</h6>
                                <p class="text-xs text-secondary mb-0">{{ $post->email }}</p>
                                </div>
                            </div>
                            </td>
                            <td>
                                <a href="/post/{{ $post->file }}" target="_blank">
                                    <p class="text-xs font-weight-bold mb-0">{{ $post->title }}</p>
                                    <!--<p class="text-xs text-secondary mb-0">{{ $post->abstract }}</p>-->
                                </a>
                            </td>
                            <td class="align-middle text-center text-sm">
                            <span class="badge badge-sm bg-gradient-success">{{ $post->status }}</span>
                            </td>
                            <td class="align-middle text-center">
                            <span class="text-secondary text-xs font-weight-bold">{{ $post->created_at }}</span>
                            </td>
                            <td class="align-middle">
                                @if($post->status === "Pending")
                                    {{-- <form action="{{ url('update_status', $post->id) }}" method="POST">
                                        @csrf
                                        <input type="hidden" name="status" value="Approve">
                                        <input type="submit" value="Approve Journal" style="padding:10px; background-color: lightgreen">
                                    </form> &nbsp;
                                    |  &nbsp; --}}
                                    <form action="{{ route('update.journalStatus', $post->id) }}" method="POST">
                                        @csrf
                                        <input type="hidden" name="status" value="Rejected">
                                        <input type="submit" value="Reject Journal" style="padding:10px; background-color: red">
                                    </form>
                                @endif
                                @if($post->status === "Approved")
                                <form action="{{ route('update.journalStatus', $post->id) }}" method="POST">
                                    @csrf
                                    <input type="hidden" name="status" value="Pending">
                                    <input type="submit" value="Send to Pending" style="padding:10px; background-color: lightgreen">
                                </form> &nbsp;
                                <form action="{{ route('update.journalStatus', $post->id) }}" method="POST">
                                    @csrf
                                    <input type="hidden" name="status" value="Rejected">
                                    <input type="submit" value="Reject Journal" style="padding:10px; background-color: red">
                                </form>
                                @endif
                                @if($post->status === "Rejected")
                                    {{-- <form action="{{ url('update_status', $post->id) }}" method="POST">
                                        @csrf
                                        <input type="hidden" name="status" value="Pending">
                                        <input type="hidden" value="Send to Pending" style="padding:10px; background-color: lightgreen">
                                    </form> &nbsp;
                                    |  &nbsp; --}}
                                    <form action="{{ route('update.journalStatus', $post->id) }}" method="POST">
                                        @csrf
                                        <input type="hidden" name="status" value="Rejected">
                                        <input type="hidden" value="Reject Journal" style="padding:10px; background-color: red">
                                    </form>
                                @endif
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
     @endsection