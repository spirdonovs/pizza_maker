<div class="container">

  <h1 class="text-center mt-5 mb-2">Login User</h1>
    <div class="row">
      <div class="col-md-6 mx-auto">
        @if (Session::has('success'))
          <div class="alert alert-success">{{Session::get('success')}}</div>
        @endif

        @if ($error)
          <div class="alert alert-danger">{{$error}}</div>
        @endif
        <form  method="post" wire:submit.prevent="handleSubmit">
          <div class="form-group">
            <label for="">
              Email
            </label>
            <input type="email" value="" class="form-control" wire:model.lazy="email">
            @error ('email')
              <p class="text-danger">{{ $message }}</p>
            @enderror
          </div>
          <div class="form-group">
            <label for="">
              Password
            </label>
            <input type="password" value="" class="form-control" wire:model.lazy="password">
            @error ('password')
              <p class="text-danger">{{ $message }}</p>
            @enderror
          </div>
          <div class="form-group">
            <button type="submit" name="button" class="btn btn-primary">
              Login
            </button>
          </div>
        </form>
      </div>
    </div>

</div>
