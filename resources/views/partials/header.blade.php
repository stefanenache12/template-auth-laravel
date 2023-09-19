<div class="container pt-4 pb-4">
    <div class="row align-items-center">
        <div class="logo col-8">
            <a href="/">
                <h1>
                    LOGO
                </h1>
            </a>
        </div>
        <div class="nav-links col-4">
            <ul class="d-flex align-items-center">
                @auth
                    <li>
                        <a href="{{ route('admin.dashboard') }}">Dashboard</a>
                    </li>
                    <li>
                        <a href="/">Home</a>
                    </li>
                    <div>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
    
                            <button type="submit" class="btn btn-outline-danger">
                                Log Out
                            </button>
                        </form>
                    </div>
                @else
                    <li>
                        <a href="{{ route('login') }}">Login</a>
                    </li>
                    <li>
                        <a href="{{ route('register') }}">Register</a>
                    </li>
                @endauth
            </ul>
        </div>
    </div>
    
</div>