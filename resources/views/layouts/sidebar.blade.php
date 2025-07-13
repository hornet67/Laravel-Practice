<aside id="mySidenav" class="sidenav">
    {{-- <a href="{{ route('show.profile', auth()->user()->id) }}"> --}}
        <div class="user-details">
            <div class="user-image">
                {{-- <img src="{{ rtrim(env('API_URL'), '/api') }}/storage/{{ auth()->user()->image != null ? auth()->user()->image : (auth()->user()->gender == 'female' ? 'female.png' : 'male.png') }}" alt=""> --}}
            </div>
            <div class="user-name">
                {{-- <strong>{{ auth()->user()->user_name }}</strong> <br> --}}
                {{-- <strong style="color:#00aaffcf;">{{ auth()->user()->role->name }}</strong> --}}
            </div>
        </div>
    {{-- </a> --}}
    <hr>
    <!-- Sidebar menue starts -->
    <ul class="sidebar-menu">
        <li class="menu-item">
            <div class="menu-title" >
                <p>
                    <i class="fa-solid fa-house"></i>
                    ADMINISTRATOR
                </p>
                <i class="fas fa-angle-right"></i>
            </div>
            <ul class="sub-menu">
                <li class="sub-menu-item">
                    <div class="menu-title">
                        <p>
                            <i class="fa-solid fa-building"></i>
                            Company
                        </p>
                        <i class="fas fa-angle-right"></i>
                    </div>
                    <ul class="sub-menu1">
                        {{-- <li class="sub-menu1-item" data-url="{{route('show.companytype')}}"> --}}
                        <li class="sub-menu1-item" >
                            <div class="menu-title">
                                <p>
                                    <i class="fa-solid fa-house-circle-exclamation"></i>
                                    Types
                                </p>
                            </div>
                        </li>

                        {{-- <li class="sub-menu1-item" data-url="{{route('show.companies')}}"> --}}
                        <li class="sub-menu1-item" >
                            <div class="menu-title">
                                <p>
                                    <i class="fa-solid fa-house-user"></i>
                                    Details
                                </p>
                            </div>
                        </li>
                    </ul>
                </li>
            </ul>
        </li>
    </ul>
</aside>