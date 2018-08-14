<ul>
        <li>
            <a href="">
                <i data-feather="menu"></i>
            </a>
        </li>
        <li>
                <a href="{{ route('dashboard') }}">
                    <i data-feather="home"></i>
                </a>
            </li>
        <li>
            <a href="{{ route('donors.index') }}">
                <i data-feather="users"></i>
            </a>
        </li>
        <li>
            <a href="{{ route('donations', ['donor' => 'all']) }}">
                <i data-feather="zap"></i>
            </a>
        </li>       
        <li>
            <a href="">
                <i data-feather="settings"></i>
            </a>
        </li>
    </ul>