    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbar">
            <div class="navbar-nav">

                <a class="nav-item nav-link" id="home" href="/">home</a>
                <a class="nav-item nav-link" id="logout" href="/logout">logout</a>

                @include('users.login')

                @include('users.register')


            </div>
        </div>
    </nav>
