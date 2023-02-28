<button class="m-aside-left-close  m-aside-left-close--skin-dark " id="m_aside_left_close_btn"><i class="la la-close"></i></button>
<div id="m_aside_left" class="m-grid__item	m-aside-left  m-aside-left--skin-dark ">
    <div id="m_ver_menu" class="m-aside-menu  m-aside-menu--skin-dark m-aside-menu--submenu-skin-dark "
         m-menu-vertical="1" m-menu-scrollable="1" m-menu-dropdown-timeout="500" style="position: relative;">
        <ul class="m-menu__nav  m-menu__nav--dropdown-submenu-arrow ">
            <li class="m-menu__item  m-menu__item--active" aria-haspopup="true"><a href="{{ route('home') }}" class="m-menu__link "><i class="m-menu__link-icon flaticon-line-graph"></i><span class="m-menu__link-title"> <span class="m-menu__link-wrap"> <span class="m-menu__link-text">الاحصائيات</span></span></span></a></li>
            <li class="m-menu__section ">
                <h4 class="m-menu__section-text">اللوحة الرئيسية</h4>
                <i class="m-menu__section-icon flaticon-more-v2"></i>
            </li>
            <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true" m-menu-submenu-toggle="hover">
                <a href="javascript:;" class="m-menu__link m-menu__toggle">
                    <i class="m-menu__link-icon flaticon-layers"></i><span
                            class="m-menu__link-text">المنتجات</span><i
                            class="m-menu__ver-arrow la la-angle-right"></i></a>
                <div class="m-menu__submenu "><span class="m-menu__arrow"></span>
                    <ul class="m-menu__subnav">
                        <li class="m-menu__item  m-menu__item--parent" aria-haspopup="true"><span
                                    class="m-menu__link"><span class="m-menu__link-text">المنتجات</span></span>
                        </li>
                        <li class="m-menu__item " aria-haspopup="true"><a href="{{ route('product.index') }}"
                                                                          class="m-menu__link "><i
                                        class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
                                        class="m-menu__link-text">ادارة المنتجات</span></a></li>
                        <li class="m-menu__item " aria-haspopup="true"><a href="{{ route('product.create') }}"
                                                                          class="m-menu__link "><i
                                        class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
                                        class="m-menu__link-text">اضافة منتج</span></a></li>
                    </ul>
                </div>
            </li>
            <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true" m-menu-submenu-toggle="hover">
                <a href="javascript:;" class="m-menu__link m-menu__toggle">
                    <i class="m-menu__link-icon flaticon-layers"></i><span
                            class="m-menu__link-text">التصنيفات</span><i
                            class="m-menu__ver-arrow la la-angle-right"></i></a>
                <div class="m-menu__submenu "><span class="m-menu__arrow"></span>
                    <ul class="m-menu__subnav">
                        <li class="m-menu__item  m-menu__item--parent" aria-haspopup="true"><span
                                    class="m-menu__link"><span class="m-menu__link-text">التصنيفات</span></span>
                        </li>
                        <li class="m-menu__item " aria-haspopup="true"><a href="{{ route('category.index') }}"
                                                                          class="m-menu__link "><i
                                        class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
                                        class="m-menu__link-text">ادارة التصنيفات</span></a></li>
                        <li class="m-menu__item " aria-haspopup="true"><a href="{{ route('category.create') }}"
                                                                          class="m-menu__link "><i
                                        class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
                                        class="m-menu__link-text">اضافة تصنيف</span></a></li>
                    </ul>
                </div>
            </li>
            <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true" m-menu-submenu-toggle="hover">
                <a href="javascript:;" class="m-menu__link m-menu__toggle">
                    <i class="m-menu__link-icon flaticon-layers"></i><span class="m-menu__link-text">المدن</span><i
                            class="m-menu__ver-arrow la la-angle-right"></i></a>
                <div class="m-menu__submenu "><span class="m-menu__arrow"></span>
                    <ul class="m-menu__subnav">
                        <li class="m-menu__item  m-menu__item--parent" aria-haspopup="true"><span
                                    class="m-menu__link"><span class="m-menu__link-text">المدن</span></span></li>
                        <li class="m-menu__item " aria-haspopup="true"><a href="{{ route('city.index') }}"
                                                                          class="m-menu__link "><i
                                        class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
                                        class="m-menu__link-text">ادارة المدن</span></a></li>
                        <li class="m-menu__item " aria-haspopup="true"><a href="{{ route('city.create') }}"
                                                                          class="m-menu__link "><i
                                        class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
                                        class="m-menu__link-text">اضافة مدينة</span></a></li>
                    </ul>
                </div>
            </li>
            <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true" m-menu-submenu-toggle="hover">
                <a href="javascript:;" class="m-menu__link m-menu__toggle">
                    <i class="m-menu__link-icon flaticon-layers"></i><span
                            class="m-menu__link-text">الدول</span><i
                            class="m-menu__ver-arrow la la-angle-right"></i></a>
                <div class="m-menu__submenu "><span class="m-menu__arrow"></span>
                    <ul class="m-menu__subnav">
                        <li class="m-menu__item  m-menu__item--parent" aria-haspopup="true"><span
                                    class="m-menu__link"><span class="m-menu__link-text">الدول</span></span>
                        </li>
                        <li class="m-menu__item " aria-haspopup="true"><a href="{{ route('country.index') }}"
                                                                          class="m-menu__link "><i
                                        class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
                                        class="m-menu__link-text">ادارة الدول</span></a></li>
                        <li class="m-menu__item " aria-haspopup="true"><a href="{{ route('country.create') }}"
                                                                          class="m-menu__link "><i
                                        class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
                                        class="m-menu__link-text">اضافة دولة</span></a></li>
                    </ul>
                </div>
            </li>
            <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true" m-menu-submenu-toggle="hover">
                <a href="javascript:;" class="m-menu__link m-menu__toggle">
                    <i class="m-menu__link-icon flaticon-layers"></i><span
                            class="m-menu__link-text">اراء العملاء</span><i
                            class="m-menu__ver-arrow la la-angle-right"></i></a>
                <div class="m-menu__submenu "><span class="m-menu__arrow"></span>
                    <ul class="m-menu__subnav">
                        <li class="m-menu__item  m-menu__item--parent" aria-haspopup="true"><span
                                    class="m-menu__link"><span class="m-menu__link-text">اراء العملاء</span></span>
                        </li>
                        <li class="m-menu__item " aria-haspopup="true"><a href="{{ route('feedback.index') }}"
                                                                          class="m-menu__link "><i
                                        class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
                                        class="m-menu__link-text">ادارة اراء العملاء</span></a></li>
                    </ul>
                </div>
            </li>
            <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true" m-menu-submenu-toggle="hover">
                <a href="javascript:;" class="m-menu__link m-menu__toggle">
                    <i class="m-menu__link-icon flaticon-layers"></i><span
                            class="m-menu__link-text">الطلبات</span><i
                            class="m-menu__ver-arrow la la-angle-right"></i></a>
                <div class="m-menu__submenu "><span class="m-menu__arrow"></span>
                    <ul class="m-menu__subnav">
                        <li class="m-menu__item  m-menu__item--parent" aria-haspopup="true"><span
                                    class="m-menu__link"><span class="m-menu__link-text">الطلبات</span></span>
                        </li>
                        <li class="m-menu__item " aria-haspopup="true"><a href="{{ route('order.index',['order_status'=>'new']) }}"
                                                                          class="m-menu__link "><i
                                        class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
                                        class="m-menu__link-text">الطلبات الجديدة</span></a></li>
                        <li class="m-menu__item " aria-haspopup="true"><a href="{{ route('order.index',['order_status'=>'accept']) }}"
                                                                          class="m-menu__link "><i
                                        class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
                                        class="m-menu__link-text">الطلبات بانتظار سائق</span></a></li>
                        <li class="m-menu__item " aria-haspopup="true"><a href="{{ route('order.index',['order_status'=>'driver']) }}"
                                                                          class="m-menu__link "><i
                                        class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
                                        class="m-menu__link-text">الطلبات تحت التجهيز</span></a></li>
                        <li class="m-menu__item " aria-haspopup="true"><a href="{{ route('order.index',['order_status'=>'complete']) }}"
                                                                          class="m-menu__link "><i
                                        class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
                                        class="m-menu__link-text">الطلبات مكتملة</span></a></li>
                        <li class="m-menu__item " aria-haspopup="true"><a href="{{ route('order.index',['order_status'=>'reject']) }}"
                                                                          class="m-menu__link "><i
                                        class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
                                        class="m-menu__link-text">الطلبات ملغاه</span></a></li>
                    </ul>
                </div>
            </li>
            <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true" m-menu-submenu-toggle="hover">
                <a href="javascript:;" class="m-menu__link m-menu__toggle">
                    <i class="m-menu__link-icon flaticon-layers"></i><span class="m-menu__link-text">المستخدمين</span><i
                            class="m-menu__ver-arrow la la-angle-right"></i></a>
                <div class="m-menu__submenu "><span class="m-menu__arrow"></span>
                    <ul class="m-menu__subnav">
                        <li class="m-menu__item  m-menu__item--parent" aria-haspopup="true"><span
                                    class="m-menu__link"><span class="m-menu__link-text">المستخدمين</span></span>
                        </li>
                        <li class="m-menu__item " aria-haspopup="true"><a href="{{ route('user.index') }}"
                                                                          class="m-menu__link "><i
                                        class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
                                        class="m-menu__link-text">ادارة المستخدمين</span></a></li>
                        <li class="m-menu__item " aria-haspopup="true"><a href="{{ route('user.create') }}"
                                                                          class="m-menu__link "><i
                                        class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
                                        class="m-menu__link-text">اضافة مستخدم جديد</span></a></li>
                    </ul>
                </div>
            </li>
        </ul>
    </div>
</div>