@extends('layouts.admin')
@section('title', 'Falstore')
@section('content')

<body class="body">
    <div id="wrapper">
        <div id="page" class="">
            <div class="layout-wrap">

                <!-- <div id="preload" class="preload-container">
    <div class="preloading">
        <span></span>
    </div>
</div> -->

                <div class="section-menu-left">
                    <div class="box-logo">
                        <a href="{{route('admin')}}" id="site-logo-inner">
                            <img class="" id="logo_header" alt="" src="{{asset('images/admin/logo/logo.png')}}"
                                data-light="images/logo/logo.png" data-dark="images/logo/logo.png">
                        </a>
                        <div class="button-show-hide">
                            <i class="icon-menu-left"></i>
                        </div>
                    </div>
                    <div class="center">
                        <div class="center-item">
                            <div class="center-heading">Main Home</div>
                            <ul class="menu-list">
                                <li class="menu-item">
                                    <a href="{{route('admin')}}" class="">
                                        <div class="icon"><i class="icon-grid"></i></div>
                                        <div class="text">Dashboard</div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="center-item">
                            <ul class="menu-list">
                                <li class="menu-item has-children">
                                    <a href="javascript:void(0);" class="menu-item-button">
                                        <div class="icon"><i class="icon-shopping-cart"></i></div>
                                        <div class="text">Products</div>
                                    </a>
                                    <ul class="sub-menu">
                                        <li class="sub-menu-item">
                                            <a href="{{route('addproduct')}}" class="">
                                                <div class="text">Add Product</div>
                                            </a>
                                        </li>
                                        <li class="sub-menu-item">
                                            <a href="{{route('product')}}" class="">
                                                <div class="text">Products</div>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="menu-item has-children">
                                    <a href="javascript:void(0);" class="menu-item-button">
                                        <div class="icon"><i class="icon-layers"></i></div>
                                        <div class="text">Brand</div>
                                    </a>
                                    <ul class="sub-menu">
                                        <li class="sub-menu-item">
                                            <a href="{{route('addbrand')}}" class="">
                                                <div class="text">New Brand</div>
                                            </a>
                                        </li>
                                        <li class="sub-menu-item">
                                            <a href="{{route('brands')}}" class="">
                                                <div class="text">Brands</div>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="menu-item has-children">
                                    <a href="javascript:void(0);" class="menu-item-button">
                                        <div class="icon"><i class="icon-layers"></i></div>
                                        <div class="text">Category</div>
                                    </a>
                                    <ul class="sub-menu">
                                        <li class="sub-menu-item">
                                            <a href="{{route('addcategory')}}" class="">
                                                <div class="text">New Category</div>
                                            </a>
                                        </li>
                                        <li class="sub-menu-item">
                                            <a href="{{route('categories')}}" class="">
                                                <div class="text">Categories</div>
                                            </a>
                                        </li>
                                    </ul>
                                </li>

                                <li class="menu-item has-children">
                                    <a href="javascript:void(0);" class="menu-item-button">
                                        <div class="icon"><i class="icon-file-plus"></i></div>
                                        <div class="text">Order</div>
                                    </a>
                                    <ul class="sub-menu">
                                        <li class="sub-menu-item">
                                            <a href="{{route('orders')}}" class="">
                                                <div class="text">Orders</div>
                                            </a>
                                        </li>
                                        <li class="sub-menu-item">
                                            <a href="{{route('ordertracking')}}" class="">
                                                <div class="text">Order tracking</div>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="menu-item">
                                    <a href="{{route('slider')}}" class="">
                                        <div class="icon"><i class="icon-image"></i></div>
                                        <div class="text">Slider</div>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a href="{{route('coupon')}}" class="">
                                        <div class="icon"><i class="icon-grid"></i></div>
                                        <div class="text">Coupons</div>
                                    </a>
                                </li>

                                <li class="menu-item">
                                    <a href="{{route('user')}}" class="">
                                        <div class="icon"><i class="icon-user"></i></div>
                                        <div class="text">User</div>
                                    </a>
                                </li>

                                <li class="menu-item">
                                    <a href="{{route('setting')}}" class="">
                                        <div class="icon"><i class="icon-settings"></i></div>
                                        <div class="text">Settings</div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="section-content-right">

                    <div class="header-dashboard">
                        <div class="wrap">
                            <div class="header-left">
                                <a href="index-2.html">
                                    <img class="" id="logo_header_mobile" alt="" src="{{asset('images/admin/logo/logo.png')}}"
                                        data-light="images/logo/logo.png" data-dark="images/logo/logo.png"
                                        data-width="154px" data-height="52px" data-retina="images/logo/logo.png">
                                </a>
                                <div class="button-show-hide">
                                    <i class="icon-menu-left"></i>
                                </div>


                                <form class="form-search flex-grow">
                                    <fieldset class="name">
                                        <input type="text" placeholder="Search here..." class="show-search" name="name"
                                            tabindex="2" value="" aria-required="true" required="">
                                    </fieldset>
                                    <div class="button-submit">
                                        <button class="" type="submit"><i class="icon-search"></i></button>
                                    </div>
                                    <div class="box-content-search" id="box-content-search">
                                        <ul class="mb-24">
                                            <li class="mb-14">
                                                <div class="body-title">Top selling product</div>
                                            </li>
                                            <li class="mb-14">
                                                <div class="divider"></div>
                                            </li>
                                            <li>
                                                <ul>
                                                    <li class="product-item gap14 mb-10">
                                                        <div class="image no-bg">
                                                            <img src="{{asset('images/admin/products/17.png')}}" alt="">
                                                        </div>
                                                        <div class="flex items-center justify-between gap20 flex-grow">
                                                            <div class="name">
                                                                <a href="product-list.html" class="body-text">Dog Food
                                                                    Rachael Ray Nutrish®</a>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="mb-10">
                                                        <div class="divider"></div>
                                                    </li>
                                                    <li class="product-item gap14 mb-10">
                                                        <div class="image no-bg">
                                                            <img src="{{asset('images/admin/products/18.png')}}" alt="">
                                                        </div>
                                                        <div class="flex items-center justify-between gap20 flex-grow">
                                                            <div class="name">
                                                                <a href="product-list.html" class="body-text">Natural
                                                                    Dog Food Healthy Dog Food</a>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="mb-10">
                                                        <div class="divider"></div>
                                                    </li>
                                                    <li class="product-item gap14">
                                                        <div class="image no-bg">
                                                            <img src="{{asset('images/admin/products/19.png')}}" alt="">
                                                        </div>
                                                        <div class="flex items-center justify-between gap20 flex-grow">
                                                            <div class="name">
                                                                <a href="product-list.html" class="body-text">Freshpet
                                                                    Healthy Dog Food and Cat</a>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                        <ul class="">
                                            <li class="mb-14">
                                                <div class="body-title">Order product</div>
                                            </li>
                                            <li class="mb-14">
                                                <div class="divider"></div>
                                            </li>
                                            <li>
                                                <ul>
                                                    <li class="product-item gap14 mb-10">
                                                        <div class="image no-bg">
                                                            <img src="{{asset('images/admin/products/20.png')}}" alt="">
                                                        </div>
                                                        <div class="flex items-center justify-between gap20 flex-grow">
                                                            <div class="name">
                                                                <a href="product-list.html" class="body-text">Sojos
                                                                    Crunchy Natural Grain Free...</a>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="mb-10">
                                                        <div class="divider"></div>
                                                    </li>
                                                    <li class="product-item gap14 mb-10">
                                                        <div class="image no-bg">
                                                            <img src="{{asset('images/admin/products/21.png')}}" alt="">
                                                        </div>
                                                        <div class="flex items-center justify-between gap20 flex-grow">
                                                            <div class="name">
                                                                <a href="product-list.html" class="body-text">Kristin
                                                                    Watson</a>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="mb-10">
                                                        <div class="divider"></div>
                                                    </li>
                                                    <li class="product-item gap14 mb-10">
                                                        <div class="image no-bg">
                                                            <img src="{{asset('images/admin/products/22.png')}}" alt="">
                                                        </div>
                                                        <div class="flex items-center justify-between gap20 flex-grow">
                                                            <div class="name">
                                                                <a href="product-list.html" class="body-text">Mega
                                                                    Pumpkin Bone</a>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="mb-10">
                                                        <div class="divider"></div>
                                                    </li>
                                                    <li class="product-item gap14">
                                                        <div class="image no-bg">
                                                            <img src="{{asset('images/admin/products/23.png')}}" alt="">
                                                        </div>
                                                        <div class="flex items-center justify-between gap20 flex-grow">
                                                            <div class="name">
                                                                <a href="product-list.html" class="body-text">Mega
                                                                    Pumpkin Bone</a>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                </form>

                            </div>
                            <div class="header-grid">

                                <div class="popup-wrap message type-header">
                                    <div class="dropdown">
                                        <button class="btn btn-secondary dropdown-toggle" type="button"
                                            id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-expanded="false">
                                            <span class="header-item">
                                                <span class="text-tiny">1</span>
                                                <i class="icon-bell"></i>
                                            </span>
                                        </button>
                                        <ul class="dropdown-menu dropdown-menu-end has-content"
                                            aria-labelledby="dropdownMenuButton2">
                                            <li>
                                                <h6>Notifications</h6>
                                            </li>
                                            <li>
                                                <div class="message-item item-1">
                                                    <div class="image">
                                                        <i class="icon-noti-1"></i>
                                                    </div>
                                                    <div>
                                                        <div class="body-title-2">Discount available</div>
                                                        <div class="text-tiny">Morbi sapien massa, ultricies at rhoncus
                                                            at, ullamcorper nec diam</div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="message-item item-2">
                                                    <div class="image">
                                                        <i class="icon-noti-2"></i>
                                                    </div>
                                                    <div>
                                                        <div class="body-title-2">Account has been verified</div>
                                                        <div class="text-tiny">Mauris libero ex, iaculis vitae rhoncus
                                                            et</div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="message-item item-3">
                                                    <div class="image">
                                                        <i class="icon-noti-3"></i>
                                                    </div>
                                                    <div>
                                                        <div class="body-title-2">Order shipped successfully</div>
                                                        <div class="text-tiny">Integer aliquam eros nec sollicitudin
                                                            sollicitudin</div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="message-item item-4">
                                                    <div class="image">
                                                        <i class="icon-noti-4"></i>
                                                    </div>
                                                    <div>
                                                        <div class="body-title-2">Order pending: <span>ID 305830</span>
                                                        </div>
                                                        <div class="text-tiny">Ultricies at rhoncus at ullamcorper</div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li><a href="#" class="tf-button w-full">View all</a></li>
                                        </ul>
                                    </div>
                                </div>




                                <div class="popup-wrap user type-header">
                                    <div class="dropdown">
                                        <button class="btn btn-secondary dropdown-toggle" type="button"
                                            id="dropdownMenuButton3" data-bs-toggle="dropdown" aria-expanded="false">
                                            <span class="header-user wg-user">
                                                <span class="image">
                                                    <img src="{{asset('images/admin/avatar/user-1.png')}}" alt="">
                                                </span>
                                                <span class="flex flex-column">
                                                    <span class="body-title mb-2">Kristin Watson</span>
                                                    <span class="text-tiny">Admin</span>
                                                </span>
                                            </span>
                                        </button>
                                        <ul class="dropdown-menu dropdown-menu-end has-content"
                                            aria-labelledby="dropdownMenuButton3">
                                            <li>
                                                <a href="#" class="user-item">
                                                    <div class="icon">
                                                        <i class="icon-user"></i>
                                                    </div>
                                                    <div class="body-title-2">Account</div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="user-item">
                                                    <div class="icon">
                                                        <i class="icon-mail"></i>
                                                    </div>
                                                    <div class="body-title-2">Inbox</div>
                                                    <div class="number">27</div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="user-item">
                                                    <div class="icon">
                                                        <i class="icon-file-text"></i>
                                                    </div>
                                                    <div class="body-title-2">Taskboard</div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="user-item">
                                                    <div class="icon">
                                                        <i class="icon-headphones"></i>
                                                    </div>
                                                    <div class="body-title-2">Support</div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="login.html" class="user-item">
                                                    <div class="icon">
                                                        <i class="icon-log-out"></i>
                                                    </div>
                                                    <div class="body-title-2">Log out</div>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="main-content">

                        <div class="main-content-inner">
                            <div class="main-content-wrap">
                                <div class="flex items-center flex-wrap justify-between gap20 mb-27">
                                    <h3>Coupons</h3>
                                    <ul class="breadcrumbs flex items-center flex-wrap justify-start gap10">
                                        <li>
                                            <a href="{{route('admin')}}">
                                                <div class="text-tiny">Dashboard</div>
                                            </a>
                                        </li>
                                        <li>
                                            <i class="icon-chevron-right"></i>
                                        </li>
                                        <li>
                                            <div class="text-tiny">Coupons</div>
                                        </li>
                                    </ul>
                                </div>

                                <div class="wg-box">
                                    <div class="flex items-center justify-between gap10 flex-wrap">
                                        <div class="wg-filter flex-grow">
                                            <form class="form-search">
                                                <fieldset class="name">
                                                    <input type="text" placeholder="Search here..." class="" name="name"
                                                        tabindex="2" value="" aria-required="true" required="">
                                                </fieldset>
                                                <div class="button-submit">
                                                    <button class="" type="submit"><i class="icon-search"></i></button>
                                                </div>
                                            </form>
                                        </div>
                                        <a class="tf-button style-1 w208" href="add-coupon.html"><i
                                                class="icon-plus"></i>Add new</a>
                                    </div>
                                    <div class="wg-table table-all-user">
                                        <div class="table-responsive">
                                            <table class="table table-striped table-bordered">
                                                <thead>
                                                    <tr>
                                                        <th>#</th>
                                                        <th>Code</th>
                                                        <th>Type</th>
                                                        <th>Value</th>
                                                        <th>Cart Value</th>
                                                        <th>Expiry Date</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>1</td>
                                                        <td>OFF10</td>
                                                        <td>percent</td>
                                                        <td>10.00</td>
                                                        <td>100.00</td>
                                                        <td>2024-07-16</td>
                                                        <td>
                                                            <div class="list-icon-function">
                                                                <a href="#">
                                                                    <div class="item edit">
                                                                        <i class="icon-edit-3"></i>
                                                                    </div>
                                                                </a>
                                                                <form action="#" method="POST">
                                                                    <div class="item text-danger delete">
                                                                        <i class="icon-trash-2"></i>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </td>
                                                    </tr>

                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="divider"></div>
                                    <div class="flex items-center justify-between flex-wrap gap10 wgp-pagination">

                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="bottom-page">
                            <div class="body-text">Copyright © 2024 SurfsideMedia</div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

</body>
