<style>
    .btn-danger{
    background-color: #be4f0e;

    color: white;
    }
</style>

<nav class="navbar navbar-expand-lg navbar-dark" style="background-color:  #a5430a; ">
        <div class="container">
            <div class="d-flex align-items-center">
                <img alt="Logo" class="mr-3" height="40" src="{{ asset('Image\mcclog-1.png') }}" width="40" style="margin-right:10px"/>
                <a class="navbar-brand" href="/" style="font-weight: bold; color: #ffffff;">Michie Cars Club</a>
            </div>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="/" style="color: #ffffff;">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/prds" style="color: #ffffff;">Product</a>
                    </li>
                </ul>
                <div class="d-flex align-items-center space-x-4">
                    <button class="btn" style="background-color: #be4f0e; border-radius:12px; margin-right:10px; color: #ffffff;">Event</button>
                    <div class="d-flex align-items-center space-x-2" style="margin-right: 10px;">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/9/9f/Flag_of_Indonesia.svg" alt="Flag of Indonesia" height="20" width="20" style="margin-right:10px;"/>
                        <span style="color:white; margin-right:10px;">IDN</span>
                        <button type="button" class="btn btn-danger position-relative">
                            <a href="/profile"><i class="fa-solid fa-user" style="color:#ffff; height:20px; width:20px;"></i></a></span>
                            <span class="position-absolute top-0 start-100 translate-middle p-2 bg-danger border border-light rounded-circle">
                                <span class="visually-hidden">New alerts</span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </nav>