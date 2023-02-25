<div class="container">

  <h1 class="text-center mt-5 mb-2">Register User</h1>
    <div class="row">
      <div class="col-md-6 mx-auto">
        @if ($error)
          <div class="alert alert-danger">{{$error}}</div>
        @endif
        <form  method="post" wire:submit.prevent="handleSubmit">
          <div class="form-group">
            <label for="">
              Name
            </label>
            <input type="text" value="" class="form-control" wire:model.lazy="name">
            @error ('name')
              <p class="text-danger">{{ $message }}</p>
            @enderror
          </div>
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
              Register
            </button>
          </div>
        </form>
      </div>
    </div>

</div>
