@extends('layouts.dashboard')
@section('dash')
    <div class="container-fluid py-4">
      <div class="row min-vh-80">
        <div class="col-12">
          <div class="card mt-4">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
              <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                <h6 class="text-white text-capitalize ps-3">View Pending Emails</h6>
                </p>
              </div>
            </div>
            <div class="card-body px-5">
                <p style="color: green; text-align: center">{{ session('mssg') }}</p>
            <br><br>
            <div>
                @foreach ($EmailTemplate as $emailData)
                <form action="{{ route('save.update.template', $emailData->id) }}" method="GET">
                    @csrf
                    {{-- <div>
                        <input type="hidden" name="status" value="Approved">
                    </div> --}}

                    {{-- <div>
                        <input type="hidden" name="email_status" id="Approved" value="Sent" required>
                    </div> --}}

                    <div>
                        <label for="username">Name </label>
                        <input type="text" name="greeting" id="" value="{{ $emailData->greeting }}"  required>
                        <br>
                        <span style="color: red">@error('greeting'){{ $message }} @enderror </span>
                   </div>
                   <br>
                   <div>
                        <label for="username">Body</label>
                        <textarea name="body" id="" cols="30" rows="10" required>
{{ $emailData->body }}
                        </textarea>
                        <br>
                        <span style="color: red">@error('body'){{ $message }} @enderror </span>
                   </div>
                   <br>
                   <div>
                        <label for="username">Action text</label>
                        <input type="text" name="actiontext" id="" value="{{ $emailData->action_text }}" required>
                        <br>
                        <span style="color: red">@error('actiontext'){{ $message }} @enderror </span>
                   </div>
                   <br>
                   <div>
                        <label for="username">Action url</label>
                        <input type="text" name="actionurl" id="" value="{{ $emailData->action_url }}" required>
                        <br>
                        <span style="color: red">@error('actionurl'){{ $message }} @enderror </span>
                   </div>
                   <br>
                   <div>
                        <label for="username">End text</label>
                        <input type="text" name="endtext" id="" value="{{ $emailData->end_text }}" required>
                        <br>
                        <span style="color: red">@error('endtext'){{ $message }} @enderror </span>
                   </div>
                   <br>
                   {{-- <div>
                        <input type="submit"value="Send Email" style="background-color: green; padding:10px; width:100%">
                   </div> --}}

                    <input type="submit" value="Update Email Template" style="padding:10px; background-color: lightgreen">
                </form> &nbsp;
                @endforeach
            </div>

            </div>
          </div>
        </div>
      </div>
   
    </div>

  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script>
@endsection
