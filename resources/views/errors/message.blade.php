
@if(session('faild'))
          <div class="alert alert-danger">{{ session('faild') }}</div>
@endif

@if(session('success'))
          <div class="alert alert-success">{{ session('success') }}</div>
@endif
        

 @if ($errors->any())
              <div class="alert alert-danger">
                <ul>
                        @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                        @endforeach
                </ul>
              </div>
 @endif