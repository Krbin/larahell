<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
        crossorigin="anonymous" />
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <title>@yield('title')</title>
</head>

<body style="background-color: #181a1b">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbar">
            <div class="navbar-nav">
                <a class="nav-item nav-link" id="home" href="/">Home</a>
                <a class="nav-item nav-link" id="logout" href="/logout">Logout</a>
                <a class="nav-item nav-link" id="login" href="/login">Login</a>
                <a class="nav-item nav-link" id="signUp" href="/sign-up">Sign Up</a>
            </div>
        </div>
    </nav>

    @if (session()->has('succes'))
        <div x-data="{ show: true }" x-init="setTimeout(() => show = false, 1000)" x-show="show" class="alert alert-success sticky"
            role="alert">
            {{ session('succes') }}
        </div>
    @endif

    @if (session()->has('delete'))
        <div x-data="{ show: true }" x-init="setTimeout(() => show = false, 1000)" x-show="show" class="alert alert-error sticky"
            role="alert">
            {{ session('succes') }}
        </div>
    @endif


    <div class="container-fluid">@yield('content')</div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>


    <script type="text/javascript">
        function deletePayment(paymentId) {
            fetch("/delete-payment", {
                method: "POST",
                body: JSON.stringify({
                    paymentId: paymentId
                }),
            }).then((_res) => {
                window.location.href = "/";
            });
        }
    </script>

</body>
