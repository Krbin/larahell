<div class="modal fade mt-5" id="modalSignUpForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content bg-dark text-light">


            <form action="/users" method="post">
                @csrf
                <div class="modal-body mx-3 mt-4">
                    <div class="md-form mb-2">
                        <input type="email" id="defaultForm-email" class="form-control bg-dark text-light validate"
                            name="email" placeholder="email">
                        @error('email')
                            <p class="text-danger" style="position: absolute">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="md-form mb-2">
                        <input type="text" id="defaultForm-username" class="form-control bg-dark text-light validate"
                            name="username" placeholder="username">
                        @error('username')
                            <p class="text-danger" style="position: absolute">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="md-form mb-2">
                        <input type="password" id="defaultForm-pass" class="form-control bg-dark text-light validate"
                            name="password" placeholder="password">
                        @error('password')
                            <p class="text-danger" style="position: absolute">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="md-form">
                        <input type="password" id="defaultForm-pass" class="form-control bg-dark text-light validate"
                            name="password_confirmation" placeholder="confirm password">
                        @error('password_confirmation')
                            <p class="text-danger" style="position: absolute">{{ $message }}</p>
                        @enderror
                    </div>


                </div>
                <div class="modal-footer d-flex justify-content-center">
                    <button class="btn btn-success">sign up</button>
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
    <a href="" class="nav-item nav-link" data-toggle="modal" data-target="#modalSignUpForm"> sign up</a>
</div>
