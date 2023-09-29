<div class="main-menu menu-fixed menu-light menu-accordion    menu-shadow " data-scroll-to-active="true">
    <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">

            <li class="nav-item active"><a href="{{route('dashboard')}}"><i class="la la-mouse-pointer"></i><span
                        class="menu-title" data-i18n="nav.add_on_drag_drop.main">الرئيسية </span></a>
            </li>

            <li class="nav-item @if(Request::is('admin/association*') ) open @endif">
                <a href=""><i class="la la-home"></i>
                    <span class="menu-title" data-i18n="nav.dash.main">عن المطور</span>
                    <span
                        class="badge badge badge-info badge-pill float-right mr-2">{{App\Models\About::count()}}</span>
                </a>
                <ul class="menu-content">
                    <li class="active"><a class="menu-item" href="{{route('admin.about')}}"
                                          data-i18n="nav.dash.ecommerce"> عرض </a>
                    </li>
                    <li><a class="menu-item" href="{{route('admin.about.create')}}" data-i18n="nav.dash.crypto">إضافة
                             </a>
                    </li>
                </ul>
            </li>


            <li class="nav-item"><a href=""><i class="la la-group"></i>
                    <span class="menu-title" data-i18n="nav.dash.main">الخبرات </span>
                    <span
                        class="badge badge badge-danger badge-pill float-right mr-2">{{App\Models\Experience::count()}}</span>
                </a>
                <ul class="menu-content">
                    <li class="active"><a class="menu-item" href="{{route('admin.experience')}}"
                                          data-i18n="nav.dash.ecommerce"> عرض الكل </a>
                    </li>
                    <li><a class="menu-item" href="{{route('admin.experience.create')}}" data-i18n="nav.dash.crypto">إضافة
                             </a>
                    </li>
                </ul>
            </li>

            <li class="nav-item"><a href=""><i class="la la-group"></i>
                    <span class="menu-title" data-i18n="nav.dash.main">معلومات التعليم   </span>
                    <span
                        class="badge badge badge-danger badge-pill float-right mr-2">{{App\Models\Education::count()}}</span>
                </a>
                <ul class="menu-content">
                    <li class="active"><a class="menu-item" href="{{route('admin.education')}}"
                                          data-i18n="nav.dash.ecommerce"> عرض الكل </a>
                    </li>
                    <li><a class="menu-item" href="{{route('admin.education.create')}}" data-i18n="nav.dash.crypto">إضافة
                            </a>
                    </li>
                </ul>
            </li>

            <li class="nav-item"><a href=""><i class="la la-male"></i>
                    <span class="menu-title" data-i18n="nav.dash.main">الاهتمامات  </span>
                    <span
                        class="badge badge badge-success badge-pill float-right mr-2">{{App\Models\Interest::count()}}</span>
                </a>
                <ul class="menu-content">
                    <li class="active"><a class="menu-item" href="{{route('admin.interests')}}"
                                          data-i18n="nav.dash.ecommerce"> عرض الكل </a>
                    </li>
                    <li><a class="menu-item" href="{{route('admin.interests.create')}}" data-i18n="nav.dash.crypto">إضافة
                              </a>
                    </li>
                </ul>
            </li>


            <li class="nav-item"><a href=""><i class="la la-male"></i>
                    <span class="menu-title" data-i18n="nav.dash.main">الانجازات  </span>
                    <span
                        class="badge badge badge-warning  badge-pill float-right mr-2">{{App\Models\Award::count()}}</span>
                </a>
                <ul class="menu-content">
                    <li class="active"><a class="menu-item" href="{{route('admin.awards')}}"
                                          data-i18n="nav.dash.ecommerce"> عرض الكل </a>
                    </li>
                    <li><a class="menu-item" href="{{route('admin.awards.create')}}" data-i18n="nav.dash.crypto">إضافة
                             </a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</div>
