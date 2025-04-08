<div class="vertical-menu">
    <ul class="bg-bubbles">
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        
    </ul>
    <div data-simplebar class="h-100">

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                @foreach (config('menu') as $menuKey => $menuGroup)
                    <li class="menu-title" data-key="t-{{ Str::slug($menuGroup['title']) }}">{{ $menuGroup['title'] }}</li>

                    @foreach ($menuGroup['items'] as $item)
                        @if (isset($item['submenu']))
                            <li class="mm-@if ($item['route-active'] == request()->segment(2))active @endif">
                                <a href="javascript: void(0);" class="has-arrow">
                                    <i data-feather="{{ $item['icon'] }}"></i>
                                    <span data-key="t-{{ Str::slug($item['label']) }}">{{ $item['label'] }}</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    @foreach ($item['submenu'] as $submenu)
                                        <li  class="mm-@if ($item['route-active'] == request()->segment(2) && $submenu['route-active'] == request()->segment(3))active @endif">
                                            <a href="{{ route($submenu['route-name']) }}"
                                               data-key="t-{{ Str::slug($submenu['label']) }}">{{ $submenu['label'] }}</a>
                                        </li>
                                    @endforeach
                                </ul>
                            </li>
                        @else
                            <li class="mm-@if ($item['route-active'] == request()->segment(2))active @endif">
                                <a href="{{ route($item['route-name']) }}">
                                    <i data-feather="{{ $item['icon'] }}"></i>
                                    <span data-key="t-{{ Str::slug($item['label']) }}">{{ $item['label'] }}</span>
                                </a>
                            </li>
                        @endif
                    @endforeach
                @endforeach
            </ul>

            <div class="card sidebar-alert shadow-none text-center mx-4 mb-0 mt-5">
                <a href="#" style="font-family: Cascadia Code; font-weight: 1000;">
                    @{{ Artisan<span>.</span><span>Compass</span > }}</a>
            </div>
        </div>
        <!-- Sidebar -->
    </div>
</div>
