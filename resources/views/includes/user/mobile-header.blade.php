<!-- mobile menu -->
<div class="mobile-menu">
    <div class="mobile-menu-top">
        <img src="{{ asset('assets/images/' . $gs->footer_logo) }}" alt="">
        <svg class="close" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
            fill="none">
            <path d="M18 6L6 18M6 6L18 18" stroke="white" stroke-width="2" stroke-linecap="round"
                stroke-linejoin="round" />
        </svg>
    </div>
    <ul class="gs-dashboard-user-sidebar-wrapper">
    <li class="{{ Request::url() == route('user-dashboard') ? 'active' : '' }}">
        <a href="{{ route('user-dashboard') }}">
            <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M19.6483 21.5H13.6017C12.581 21.5 11.75 20.669 11.75 19.6483V12.1017C11.75 11.081 12.581 10.25 13.6017 10.25H19.6483C20.669 10.25 21.5 11.081 21.5 12.1017V19.6483C21.5 20.669 20.669 21.5 19.6483 21.5ZM13.6017 11.75C13.4075 11.75 13.25 11.9075 13.25 12.1017V19.6483C13.25 19.8425 13.4075 20 13.6017 20H19.6483C19.8425 20 20 19.8425 20 19.6483V12.1017C20 11.9075 19.8425 11.75 19.6483 11.75H13.6017Z"
                    fill="#1F0300" />
                <path
                    d="M19.6483 8.75H13.6017C12.581 8.75 11.75 7.919 11.75 6.89825V2.35175C11.75 1.331 12.581 0.5 13.6017 0.5H19.6483C20.669 0.5 21.5 1.331 21.5 2.35175V6.89825C21.5 7.919 20.669 8.75 19.6483 8.75ZM13.6017 2C13.4075 2 13.25 2.1575 13.25 2.35175V6.89825C13.25 7.0925 13.4075 7.25 13.6017 7.25H19.6483C19.8425 7.25 20 7.0925 20 6.89825V2.35175C20 2.1575 19.8425 2 19.6483 2H13.6017Z"
                    fill="#1F0300" />
                <path
                    d="M8.39825 11.75H2.35175C1.331 11.75 0.5 10.919 0.5 9.89825V2.35175C0.5 1.331 1.331 0.5 2.35175 0.5H8.39825C9.419 0.5 10.25 1.331 10.25 2.35175V9.89825C10.25 10.919 9.419 11.75 8.39825 11.75ZM2.35175 2C2.1575 2 2 2.1575 2 2.35175V9.89825C2 10.0925 2.1575 10.25 2.35175 10.25H8.39825C8.5925 10.25 8.75 10.0925 8.75 9.89825V2.35175C8.75 2.1575 8.5925 2 8.39825 2H2.35175Z"
                    fill="#1F0300" />
                <path
                    d="M8.39825 21.5H2.35175C1.331 21.5 0.5 20.669 0.5 19.6483V15.1017C0.5 14.081 1.331 13.25 2.35175 13.25H8.39825C9.419 13.25 10.25 14.081 10.25 15.1017V19.6483C10.25 20.669 9.419 21.5 8.39825 21.5ZM2.35175 14.75C2.1575 14.75 2 14.9075 2 15.1017V19.6483C2 19.8425 2.1575 20 2.35175 20H8.39825C8.5925 20 8.75 19.8425 8.75 19.6483V15.1017C8.75 14.9075 8.5925 14.75 8.39825 14.75H2.35175Z"
                    fill="#1F0300" />
            </svg>
            <span>@lang('Dashboard')</span>
        </a>
    </li>
    
    @if (auth()->check() && auth()->user()->is_vendor == 2)
    <li>
        <a href="{{ route('vendor.dashboard') }}">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M9 12C12.309 12 15 9.309 15 6C15 2.691 12.309 0 9 0C5.691 0 3 2.691 3 6C3 9.309 5.691 12 9 12ZM9 2C11.206 2 13 3.794 13 6C13 8.206 11.206 10 9 10C6.794 10 5 8.206 5 6C5 3.794 6.794 2 9 2ZM21 19H23V24H12V19H14V22H21V19ZM5 14H9.692L8.769 16H5C3.346 16 2 17.346 2 19V24H0V19C0 16.243 2.243 14 5 14ZM24 16C24 17.105 23.169 18 22.143 18H21.524C20.498 18 19.667 17.105 19.667 16C19.667 17.105 18.836 18 17.81 18H17.191C16.165 18 15.334 17.105 15.334 16C15.334 17.105 14.503 18 13.477 18H12.858C11.832 18 11.001 17.105 11.001 16L12.239 13H22.763L24 16Z"
                    fill="#1F0300" />
            </svg>
            <span>@lang('Vendor Panel')</span>
        </a>
    </li>
    @endif
    
    
    <li class="{{ Request::url() == route('user-orders') ? 'active' : '' }}">
        <a href="{{ route('user-orders') }}">
            <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M15.0004 8V5C15.0004 2.79086 13.2095 1 11.0004 1C8.79123 1 7.00037 2.79086 7.00037 5V8M2.59237 9.35196L1.99237 15.752C1.82178 17.5717 1.73648 18.4815 2.03842 19.1843C2.30367 19.8016 2.76849 20.3121 3.35839 20.6338C4.0299 21 4.94374 21 6.77142 21H15.2293C17.057 21 17.9708 21 18.6423 20.6338C19.2322 20.3121 19.6971 19.8016 19.9623 19.1843C20.2643 18.4815 20.179 17.5717 20.0084 15.752L19.4084 9.35197C19.2643 7.81535 19.1923 7.04704 18.8467 6.46616C18.5424 5.95458 18.0927 5.54511 17.555 5.28984C16.9444 5 16.1727 5 14.6293 5L7.37142 5C5.82806 5 5.05638 5 4.44579 5.28984C3.90803 5.54511 3.45838 5.95458 3.15403 6.46616C2.80846 7.04704 2.73643 7.81534 2.59237 9.35196Z"
                    stroke="#1F0300" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
            </svg>
            <span>@lang('Purchased Items')</span>
        </a>
    </li>
    
    <li
        class="{{ Request::url() == route('user-deposit-index') || request()->path() == 'user/deposit/create' ? 'active' : '' }}">
        <a href="{{ route('user-deposit-index') }}">
            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M3 7.00002V15M7.5 7.00002V15M12.5 7.00002V15M17 7.00002V15M1 16.6L1 17.4C1 17.9601 1 18.2401 1.10899 18.454C1.20487 18.6422 1.35785 18.7952 1.54601 18.891C1.75992 19 2.03995 19 2.6 19H17.4C17.9601 19 18.2401 19 18.454 18.891C18.6422 18.7952 18.7951 18.6422 18.891 18.454C19 18.2401 19 17.9601 19 17.4V16.6C19 16.04 19 15.7599 18.891 15.546C18.7951 15.3579 18.6422 15.2049 18.454 15.109C18.2401 15 17.9601 15 17.4 15H2.6C2.03995 15 1.75992 15 1.54601 15.109C1.35785 15.2049 1.20487 15.3579 1.10899 15.546C1 15.7599 1 16.04 1 16.6ZM9.65291 1.07715L2.25291 2.7216C1.80585 2.82094 1.58232 2.87062 1.41546 2.99082C1.26829 3.09685 1.15273 3.24092 1.08115 3.40759C1 3.59654 1 3.82553 1 4.28349L1 5.40002C1 5.96007 1 6.2401 1.10899 6.45401C1.20487 6.64217 1.35785 6.79515 1.54601 6.89103C1.75992 7.00002 2.03995 7.00002 2.6 7.00002H17.4C17.9601 7.00002 18.2401 7.00002 18.454 6.89103C18.6422 6.79515 18.7951 6.64217 18.891 6.45401C19 6.2401 19 5.96007 19 5.40002V4.2835C19 3.82553 19 3.59655 18.9188 3.40759C18.8473 3.24092 18.7317 3.09685 18.5845 2.99082C18.4177 2.87062 18.1942 2.82094 17.7471 2.7216L10.3471 1.07715C10.2176 1.04837 10.1528 1.03398 10.0874 1.02824C10.0292 1.02314 9.97077 1.02314 9.91264 1.02824C9.8472 1.03398 9.78244 1.04837 9.65291 1.07715Z"
                    stroke="#1F0300" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
            </svg>
            <span>@lang('Deposit')</span>
        </a>
    </li>
    
    <li class="{{ Request::url() == route('user-transactions-index') ? 'active' : '' }}">
        <a href="{{ route('user-transactions-index') }}">
            <svg width="20" height="22" viewBox="0 0 20 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M15 1L19 5M19 5L15 9M19 5H5.8C4.11984 5 3.27976 5 2.63803 5.32698C2.07354 5.6146 1.6146 6.07354 1.32698 6.63803C1 7.27976 1 8.11984 1 9.8V10M1 17H14.2C15.8802 17 16.7202 17 17.362 16.673C17.9265 16.3854 18.3854 15.9265 18.673 15.362C19 14.7202 19 13.8802 19 12.2V12M1 17L5 21M1 17L5 13"
                    stroke="#1F0300" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
            </svg>
            <span>@lang('Transactions')</span>
        </a>
    </li>
    
    <li
        class="{{ Request::url() == route('user-reward-index') || request()->path() == 'user/reward/convert' ? 'active' : '' }}">
        <a href="{{ route('user-reward-index') }}">
            <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M11 14C7.68629 14 5 11.3137 5 8V2.44444C5 2.0306 5 1.82367 5.06031 1.65798C5.16141 1.38021 5.38021 1.16141 5.65798 1.06031C5.82367 1 6.0306 1 6.44444 1H15.5556C15.9694 1 16.1763 1 16.342 1.06031C16.6198 1.16141 16.8386 1.38021 16.9397 1.65798C17 1.82367 17 2.0306 17 2.44444V8C17 11.3137 14.3137 14 11 14ZM11 14V17M17 3H19.5C19.9659 3 20.1989 3 20.3827 3.07612C20.6277 3.17761 20.8224 3.37229 20.9239 3.61732C21 3.80109 21 4.03406 21 4.5V5C21 5.92997 21 6.39496 20.8978 6.77646C20.6204 7.81173 19.8117 8.62038 18.7765 8.89778C18.395 9 17.93 9 17 9M5 3H2.5C2.03406 3 1.80109 3 1.61732 3.07612C1.37229 3.17761 1.17761 3.37229 1.07612 3.61732C1 3.80109 1 4.03406 1 4.5V5C1 5.92997 1 6.39496 1.10222 6.77646C1.37962 7.81173 2.18827 8.62038 3.22354 8.89778C3.60504 9 4.07003 9 5 9M6.44444 21H15.5556C15.801 21 16 20.801 16 20.5556C16 18.5919 14.4081 17 12.4444 17H9.55556C7.59188 17 6 18.5919 6 20.5556C6 20.801 6.19898 21 6.44444 21Z"
                    stroke="#1F0300" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
            </svg>
            <span>@lang('Rewards')</span>
        </a>
    </li>
    
    <li class="{{ Request::url() == route('user-affilate-program') ? 'active' : '' }}">
        <a href="{{ route('user-affilate-program') }}">
            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M19 7L19 1M19 1H13M19 1L11 9M8 3H5.8C4.11984 3 3.27976 3 2.63803 3.32698C2.07354 3.6146 1.6146 4.07354 1.32698 4.63803C1 5.27976 1 6.11984 1 7.8V14.2C1 15.8802 1 16.7202 1.32698 17.362C1.6146 17.9265 2.07354 18.3854 2.63803 18.673C3.27976 19 4.11984 19 5.8 19H12.2C13.8802 19 14.7202 19 15.362 18.673C15.9265 18.3854 16.3854 17.9265 16.673 17.362C17 16.7202 17 15.8802 17 14.2V12"
                    stroke="#1F0300" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
            </svg>
            <span>@lang('Affiliate Program')</span>
        </a>
    </li>
    
    <li
        class="{{ Request::url() == route('user-wwt-index') || request()->path() == 'user/affilate/withdraw/create' ? 'active' : '' }}">
        <a href="{{ route('user-wwt-index') }}">
            <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M9.49952 12.5002L19.9995 2.00017M9.6271 12.8282L12.2552 19.5862C12.4867 20.1816 12.6025 20.4793 12.7693 20.5662C12.9139 20.6415 13.0862 20.6416 13.2308 20.5664C13.3977 20.4797 13.5139 20.1822 13.7461 19.5871L20.3364 2.69937C20.5461 2.16219 20.6509 1.8936 20.5935 1.72197C20.5437 1.57292 20.4268 1.45596 20.2777 1.40616C20.1061 1.34883 19.8375 1.45364 19.3003 1.66327L2.41258 8.25361C1.8175 8.48584 1.51997 8.60195 1.43326 8.76886C1.35809 8.91354 1.35819 9.08579 1.43353 9.23039C1.52043 9.39719 1.81811 9.51296 2.41345 9.74448L9.17146 12.3726C9.29231 12.4196 9.35273 12.4431 9.40361 12.4794C9.44871 12.5115 9.48815 12.551 9.52031 12.5961C9.55661 12.647 9.58011 12.7074 9.6271 12.8282Z"
                    stroke="#1F0300" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
            </svg>
            <span>@lang('Withdraw')</span>
        </a>
    </li>
    
    <li class="{{ Request::url() == route('user-order-track') ? 'active' : '' }}">
        <a href="{{ route('user-order-track') }}">
            <svg width="22" height="18" viewBox="0 0 22 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M13 4H15.3373C15.5818 4 15.7041 4 15.8192 4.02763C15.9213 4.05213 16.0188 4.09253 16.1083 4.14736C16.2092 4.2092 16.2957 4.29568 16.4686 4.46863L20.5314 8.53137C20.7043 8.70432 20.7908 8.7908 20.8526 8.89172C20.9075 8.98119 20.9479 9.07873 20.9724 9.18077C21 9.29586 21 9.41815 21 9.66274V12.5C21 12.9659 21 13.1989 20.9239 13.3827C20.8224 13.6277 20.6277 13.8224 20.3827 13.9239C20.1989 14 19.9659 14 19.5 14M14.5 14H13M13 14V4.2C13 3.0799 13 2.51984 12.782 2.09202C12.5903 1.71569 12.2843 1.40973 11.908 1.21799C11.4802 1 10.9201 1 9.8 1H4.2C3.0799 1 2.51984 1 2.09202 1.21799C1.71569 1.40973 1.40973 1.71569 1.21799 2.09202C1 2.51984 1 3.0799 1 4.2V12C1 13.1046 1.89543 14 3 14M13 14H9M9 14C9 15.6569 7.65685 17 6 17C4.34315 17 3 15.6569 3 14M9 14C9 12.3431 7.65685 11 6 11C4.34315 11 3 12.3431 3 14M19.5 14.5C19.5 15.8807 18.3807 17 17 17C15.6193 17 14.5 15.8807 14.5 14.5C14.5 13.1193 15.6193 12 17 12C18.3807 12 19.5 13.1193 19.5 14.5Z"
                    stroke="#1F0300" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
            </svg>
            <span>@lang('Order Tracking')</span>
        </a>
    </li>
    
    <li class="{{ Request::url() == route('user-favorites') ? 'active' : '' }}">
        <a href="{{ route('user-favorites') }}">
            <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M14.5455 8.92543C14.9195 8.26103 15.2313 7.66151 15.4236 7.20521C16.3573 4.98947 15.434 2.44077 13.1769 1.40112C10.9199 0.361478 8.65341 1.4395 7.65871 3.52093C5.75657 2.2157 3.21918 2.40739 1.81989 4.44424C0.420593 6.48108 0.859754 9.14203 2.77629 10.594C3.6461 11.253 5.36636 12.2242 6.98596 13.0884M15.2972 10.7499C14.8751 8.482 12.9454 6.82334 10.5156 7.27415C8.08592 7.72497 6.51488 9.91708 6.84335 12.299C7.10725 14.2127 8.56392 18.7027 9.12641 20.394C9.20316 20.6248 9.24154 20.7402 9.31753 20.8206C9.38372 20.8907 9.47174 20.9416 9.56554 20.9638C9.67322 20.9894 9.79235 20.9649 10.0306 20.916C11.7765 20.5575 16.3933 19.574 18.1826 18.8457C20.4096 17.9392 21.5589 15.4841 20.6981 13.153C19.8372 10.8219 17.4723 9.98151 15.2972 10.7499Z"
                    stroke="#1F0300" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
            </svg>
    
            <span>@lang('Favorite Sellers')</span>
        </a>
    </li>
    
    <li class="{{ Request::url() == route('user-messages') ? 'active' : '' }}">
        <a href="{{ route('user-messages') }}">
            <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M9 14L5.92474 17.1137C5.49579 17.548 5.28131 17.7652 5.09695 17.7805C4.93701 17.7938 4.78042 17.7295 4.67596 17.6076C4.55556 17.4672 4.55556 17.162 4.55556 16.5515V14.9916C4.55556 14.444 4.10707 14.0477 3.5652 13.9683V13.9683C2.25374 13.7762 1.22378 12.7463 1.03168 11.4348C1 11.2186 1 10.9605 1 10.4444V5.8C1 4.11984 1 3.27976 1.32698 2.63803C1.6146 2.07354 2.07354 1.6146 2.63803 1.32698C3.27976 1 4.11984 1 5.8 1H13.2C14.8802 1 15.7202 1 16.362 1.32698C16.9265 1.6146 17.3854 2.07354 17.673 2.63803C18 3.27976 18 4.11984 18 5.8V10M18 21L15.8236 19.4869C15.5177 19.2742 15.3647 19.1678 15.1982 19.0924C15.0504 19.0255 14.8951 18.9768 14.7356 18.9474C14.5558 18.9143 14.3695 18.9143 13.9969 18.9143H12.2C11.0799 18.9143 10.5198 18.9143 10.092 18.6963C9.71569 18.5046 9.40973 18.1986 9.21799 17.8223C9 17.3944 9 16.8344 9 15.7143V13.2C9 12.0799 9 11.5198 9.21799 11.092C9.40973 10.7157 9.71569 10.4097 10.092 10.218C10.5198 10 11.0799 10 12.2 10H17.8C18.9201 10 19.4802 10 19.908 10.218C20.2843 10.4097 20.5903 10.7157 20.782 11.092C21 11.5198 21 12.0799 21 13.2V15.9143C21 16.8462 21 17.3121 20.8478 17.6797C20.6448 18.1697 20.2554 18.5591 19.7654 18.762C19.3978 18.9143 18.9319 18.9143 18 18.9143V21Z"
                    stroke="#1F0300" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
            </svg>
            <span>@lang('Messages')</span>
        </a>
    </li>
    
    <li class="{{ Request::url() == route('user-message-index') ? 'active' : '' }}">
        <a href="{{ route('user-message-index') }}">
            <svg width="22" height="18" viewBox="0 0 22 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M9 5V4M9 9.5V8.5M9 14V13M4.2 1H17.8C18.9201 1 19.4802 1 19.908 1.21799C20.2843 1.40973 20.5903 1.71569 20.782 2.09202C21 2.51984 21 3.0799 21 4.2V5.5C19.067 5.5 17.5 7.067 17.5 9C17.5 10.933 19.067 12.5 21 12.5V13.8C21 14.9201 21 15.4802 20.782 15.908C20.5903 16.2843 20.2843 16.5903 19.908 16.782C19.4802 17 18.9201 17 17.8 17H4.2C3.0799 17 2.51984 17 2.09202 16.782C1.71569 16.5903 1.40973 16.2843 1.21799 15.908C1 15.4802 1 14.9201 1 13.8V12.5C2.933 12.5 4.5 10.933 4.5 9C4.5 7.067 2.933 5.5 1 5.5V4.2C1 3.0799 1 2.51984 1.21799 2.09202C1.40973 1.71569 1.71569 1.40973 2.09202 1.21799C2.51984 1 3.0799 1 4.2 1Z"
                    stroke="#1F0300" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
            </svg>
    
            <span>@lang('Tickets')</span>
        </a>
    </li>
    
    <li class="{{ Request::url() == route('user-dmessage-index') ? 'active' : '' }}">
        <a href="{{ route('user-dmessage-index') }}">
            <svg width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M5 6.5H10M5 10H13M5 16V18.3355C5 18.8684 5 19.1348 5.10923 19.2716C5.20422 19.3906 5.34827 19.4599 5.50054 19.4597C5.67563 19.4595 5.88367 19.2931 6.29976 18.9602L8.68521 17.0518C9.17252 16.662 9.41617 16.4671 9.68749 16.3285C9.9282 16.2055 10.1844 16.1156 10.4492 16.0613C10.7477 16 11.0597 16 11.6837 16H14.2C15.8802 16 16.7202 16 17.362 15.673C17.9265 15.3854 18.3854 14.9265 18.673 14.362C19 13.7202 19 12.8802 19 11.2V5.8C19 4.11984 19 3.27976 18.673 2.63803C18.3854 2.07354 17.9265 1.6146 17.362 1.32698C16.7202 1 15.8802 1 14.2 1H5.8C4.11984 1 3.27976 1 2.63803 1.32698C2.07354 1.6146 1.6146 2.07354 1.32698 2.63803C1 3.27976 1 4.11984 1 5.8V12C1 12.93 1 13.395 1.10222 13.7765C1.37962 14.8117 2.18827 15.6204 3.22354 15.8978C3.60504 16 4.07003 16 5 16Z"
                    stroke="#1F0300" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
            </svg>
    
            <span>@lang('Disputes')</span>
        </a>
    </li>
    
    <li class="{{ Request::url() == route('user-profile') ? 'active' : '' }}">
        <a href="{{ route('user-profile') }}">
            <svg width="23" height="23" viewBox="0 0 23 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M10 4.00023H5.8C4.11984 4.00023 3.27976 4.00023 2.63803 4.32721C2.07354 4.61483 1.6146 5.07377 1.32698 5.63826C1 6.27999 1 7.12007 1 8.80023V17.2002C1 18.8804 1 19.7205 1.32698 20.3622C1.6146 20.9267 2.07354 21.3856 2.63803 21.6732C3.27976 22.0002 4.11984 22.0002 5.8 22.0002H14.2C15.8802 22.0002 16.7202 22.0002 17.362 21.6732C17.9265 21.3856 18.3854 20.9267 18.673 20.3622C19 19.7205 19 18.8804 19 17.2002V13.0002M6.99997 16.0002H8.67452C9.1637 16.0002 9.40829 16.0002 9.63846 15.945C9.84254 15.896 10.0376 15.8152 10.2166 15.7055C10.4184 15.5818 10.5914 15.4089 10.9373 15.063L20.5 5.50023C21.3284 4.6718 21.3284 3.32865 20.5 2.50023C19.6716 1.6718 18.3284 1.6718 17.5 2.50022L7.93723 12.063C7.59133 12.4089 7.41838 12.5818 7.29469 12.7837C7.18504 12.9626 7.10423 13.1577 7.05523 13.3618C6.99997 13.5919 6.99997 13.8365 6.99997 14.3257V16.0002Z"
                    stroke="#1F0300" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
            </svg>
    
            <span>@lang('Edit Profile')</span>
        </a>
    </li>
    
    <li class="{{ Request::url() == route('user-reset') ? 'active' : '' }}">
        <a href="{{ route('user-reset') }}">
            <svg width="18" height="20" viewBox="0 0 18 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M14 8V6C14 3.23858 11.7614 1 9 1C6.23858 1 4 3.23858 4 6V8M9 12.5V14.5M5.8 19H12.2C13.8802 19 14.7202 19 15.362 18.673C15.9265 18.3854 16.3854 17.9265 16.673 17.362C17 16.7202 17 15.8802 17 14.2V12.8C17 11.1198 17 10.2798 16.673 9.63803C16.3854 9.07354 15.9265 8.6146 15.362 8.32698C14.7202 8 13.8802 8 12.2 8H5.8C4.11984 8 3.27976 8 2.63803 8.32698C2.07354 8.6146 1.6146 9.07354 1.32698 9.63803C1 10.2798 1 11.1198 1 12.8V14.2C1 15.8802 1 16.7202 1.32698 17.362C1.6146 17.9265 2.07354 18.3854 2.63803 18.673C3.27976 19 4.11984 19 5.8 19Z"
                    stroke="#1F0300" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
            </svg>
    
            <span>@lang('Reset Password')</span>
        </a>
    </li>
    
    <li class="{{ Request::url() == route('user-package') ? 'active' : '' }}">
        <a href="{{ route('user-package') }}">
            <svg width="18" height="20" viewBox="0 0 18 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M14 8V6C14 3.23858 11.7614 1 9 1C6.23858 1 4 3.23858 4 6V8M9 12.5V14.5M5.8 19H12.2C13.8802 19 14.7202 19 15.362 18.673C15.9265 18.3854 16.3854 17.9265 16.673 17.362C17 16.7202 17 15.8802 17 14.2V12.8C17 11.1198 17 10.2798 16.673 9.63803C16.3854 9.07354 15.9265 8.6146 15.362 8.32698C14.7202 8 13.8802 8 12.2 8H5.8C4.11984 8 3.27976 8 2.63803 8.32698C2.07354 8.6146 1.6146 9.07354 1.32698 9.63803C1 10.2798 1 11.1198 1 12.8V14.2C1 15.8802 1 16.7202 1.32698 17.362C1.6146 17.9265 2.07354 18.3854 2.63803 18.673C3.27976 19 4.11984 19 5.8 19Z"
                    stroke="#1F0300" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
            </svg>
    
            <span>@lang('Pricing Plans')</span>
        </a>
    </li>
    
    <li>
        <a href="{{ route('user-logout') }}">
            <svg width="22" height="20" viewBox="0 0 22 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M17 6L21 10M21 10L17 14M21 10H8M14 2.20404C12.7252 1.43827 11.2452 1 9.66667 1C4.8802 1 1 5.02944 1 10C1 14.9706 4.8802 19 9.66667 19C11.2452 19 12.7252 18.5617 14 17.796"
                    stroke="#1F0300" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
            </svg>
    
            <span>@lang('Logout')</span>
        </a>
    </li>
    </ul>
</div>

<!-- search bar -->
<div class="search-bar" id="searchBar">
    <div class="container">
        <div class="row">
            <div class="col">
                <form class="search-form">
                    <div class="input-group input__group">
                        <input type="text" class="form-control form__control"
                            placeholder="@lang('Search Any Product Here')">
                        <div class="input-group-append">
                            <span class="search-separator"></span>
                            <button class="dropdown-toggle btn btn-secondary search-category-dropdown"
                                type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                @lang('All Categories')
                            </button>
                            <ul class="dropdown-menu">
                                <li>
                                    <a class="dropdown-item dropdown__item" href="#">@lang('Electronic')</a>
                                </li>
                                <li>
                                    <a class="dropdown-item dropdown__item" href="#">@lang('Fashion & Beauty')</a>
                                </li>
                                <li>
                                    <a class="dropdown-item dropdown__item" href="#">@lang('Camera & Photo')</a>
                                </li>
                                <li>
                                    <a class="dropdown-item dropdown__item" href="#">@lang('Smart Phone')</a>
                                </li>
                                <li>
                                    <a class="dropdown-item dropdown__item" href="#">@lang('Sports & Outdoor')</a>
                                </li>
                                <li>
                                    <a class="dropdown-item dropdown__item" href="#">@lang('Books & Office')</a>
                                </li>
                            </ul>
                        </div>

                        <div class="input-group-append">
                            <button class="btn btn-primary search-icn" type="button">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none">
                                    <path
                                        d="M21 21L17.5001 17.5M20 11.5C20 16.1944 16.1944 20 11.5 20C6.80558 20 3 16.1944 3 11.5C3 6.80558 6.80558 3 11.5 3C16.1944 3 20 6.80558 20 11.5Z"
                                        stroke="white" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>