<div class="modal fade mt-5" id="modalLoginForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content bg-dark text-light">


            <form action="/users" method="post">
                @csrf
                <div class="modal-body mx-3 mt-4">
                    <div class="md-form mb-2">
                        <input type="email" id="defaultForm-email"
                            class="form-control bg-dark text-light validate @error('email') border-danger  @enderror"
                            name="email"
                            placeholder="@if ($errors->has('email')) @error('email') {{ $message }} @enderror @else email @endif"
                            value="{{ old('email') }}">

                    </div>
                    <div class="md-form mb-2">
                        <input type="password" id="defaultForm-pass"
                            class="form-control bg-dark text-light validate @error('email') border-danger  @enderror"
                            name="password"
                            placeholder="@if ($errors->has('password')) @error('password') {{ $message }} @enderror @else password @endif">

                    </div>

                    @error('incorrect')
                        <p class="text-danger" style="position: absolute">{{ $message }}</p>
                    @enderror


                </div>
                <div class="modal-footer d-flex justify-content-center">
                    <button class="btn btn-success">login</button>
                    <button type="button" class="btn btn-default text-light btn-outline-secondary" data-dismiss="modal"
                        aria-label="Close">
                        close
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="text-center">
    <a href="" class="nav-item nav-link" data-toggle="modal" data-target="#modalLoginForm"> login</a>
</div>
