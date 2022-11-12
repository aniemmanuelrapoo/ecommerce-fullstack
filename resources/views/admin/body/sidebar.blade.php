@php
  $prefix = Request::route()->getPrefix();
  $route = Route::current()->getName();
@endphp

<aside class="main-sidebar">
  <!-- sidebar-->
  <section class="sidebar">	
  
      <div class="user-profile">
    <div class="ulogo">
       <a href="index.html">
        <!-- logo for regular state and mobile devices -->
         <div class="d-flex align-items-center justify-content-center">					 	
            <img src="{{ asset('backend//images/logo-dark.png') }}" alt="">
            <h3><b>Rapoo</b> Shop</h3>
         </div>
      </a>
    </div>
      </div>
    
    <!-- sidebar menu-->
    <ul class="sidebar-menu" data-widget="tree">  
    
      <li class="{{ ($route == 'dashboard')? 'active':'' }}">
        <a href="{{ url('admin/dashboard') }}">
          <i data-feather="pie-chart"></i>
    <span>Dashboard</span>
        </a>
      </li> 

      @php
      $brand = (auth()->guard('admin')->user()->brand == 1);
      $category = (auth()->guard('admin')->user()->category == 1);
      // $product = (auth()->guard('admin')->user()->product == 1);
      // $slider = (auth()->guard('admin')->user()->slider == 1);
      // $coupons = (auth()->guard('admin')->user()->coupons == 1);
      // $shipping = (auth()->guard('admin')->user()->shipping == 1);
      // $blog = (auth()->guard('admin')->user()->blog == 1);
      // $setting = (auth()->guard('admin')->user()->setting == 1);
      // $returnorder = (auth()->guard('admin')->user()->returnorder == 1);
      // $review = (auth()->guard('admin')->user()->review == 1);
      // $orders = (auth()->guard('admin')->user()->orders == 1);
      // $stock = (auth()->guard('admin')->user()->stock == 1);
      // $reports = (auth()->guard('admin')->user()->reports == 1);
      // $alluser = (auth()->guard('admin')->user()->alluser == 1);
      // $adminuserrole = (auth()->guard('admin')->user()->adminuserrole == 1);

      @endphp
  
      {{-- @if($brand == true)  --}}
        <li class="treeview {{ ($prefix == '/brand')?'active':'' }}  ">
          <a href="#">
            <i data-feather="message-circle"></i>
            <span>Brands</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="{{ ($route == 'all.brand')? 'active':'' }}"><a href="{{ route('all.brand') }}"><i class="ti-more"></i>All Brand</a></li>
            
          </ul>
        </li> 
        {{-- @else --}}
        {{-- @endif  --}}

        {{-- @if($category == true) --}}
        <li class="treeview {{ ($prefix == '/category')?'active':'' }}  ">
          <a href="#">
            <i data-feather="mail"></i> <span>Category </span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
         <li class="{{ ($route == 'all.category')? 'active':'' }}"><a href="{{ route('all.category') }}"><i class="ti-more"></i>All Category</a></li>
         <li class="{{ ($route == 'all.subcategory')? 'active':'' }}"><a href="{{ route('all.subcategory') }}"><i class="ti-more"></i>All SubCategory</a></li>
        <li class="{{ ($route == 'all.subsubcategory')? 'active':'' }}"><a href="{{ route('all.subsubcategory') }}"><i class="ti-more"></i>All Sub->SubCategory</a></li>


          </ul>
        </li>

        {{-- @else --}}
        {{-- @endif --}}
    
      <li class="treeview">
        <a href="#">
          <i data-feather="mail"></i> <span>Mailbox</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-right pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="mailbox_inbox.html"><i class="ti-more"></i>Inbox</a></li>
          <li><a href="mailbox_compose.html"><i class="ti-more"></i>Compose</a></li>
          <li><a href="mailbox_read_mail.html"><i class="ti-more"></i>Read</a></li>
        </ul>
      </li>
  
      <li class="treeview">
        <a href="#">
          <i data-feather="file"></i>
          <span>Pages</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-right pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="profile.html"><i class="ti-more"></i>Profile</a></li>
          <li><a href="invoice.html"><i class="ti-more"></i>Invoice</a></li>
          <li><a href="gallery.html"><i class="ti-more"></i>Gallery</a></li>
          <li><a href="faq.html"><i class="ti-more"></i>FAQs</a></li>
          <li><a href="timeline.html"><i class="ti-more"></i>Timeline</a></li>
        </ul>
      </li> 		  
   
      <li class="header nav-small-cap">User Interface</li>
    
      <li class="treeview">
        <a href="#">
          <i data-feather="grid"></i>
          <span>Components</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-right pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="components_alerts.html"><i class="ti-more"></i>Alerts</a></li>
          <li><a href="components_badges.html"><i class="ti-more"></i>Badge</a></li>
          <li><a href="components_buttons.html"><i class="ti-more"></i>Buttons</a></li>
        </ul>
      </li>
  
  <li class="treeview">
        <a href="#">
          <i data-feather="credit-card"></i>
          <span>Cards</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-right pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
    <li><a href="card_advanced.html"><i class="ti-more"></i>Advanced Cards</a></li>
    <li><a href="card_basic.html"><i class="ti-more"></i>Basic Cards</a></li>
    <li><a href="card_color.html"><i class="ti-more"></i>Cards Color</a></li>
    </ul>
      </li>  
    
    </ul>
  </section>

<div class="sidebar-footer">
  <!-- item-->
  <a href="javascript:void(0)" class="link" data-toggle="tooltip" title="" data-original-title="Settings" aria-describedby="tooltip92529"><i class="ti-settings"></i></a>
  <!-- item-->
  <a href="mailbox_inbox.html" class="link" data-toggle="tooltip" title="" data-original-title="Email"><i class="ti-email"></i></a>
  <!-- item-->
  <a href="javascript:void(0)" class="link" data-toggle="tooltip" title="" data-original-title="Logout"><i class="ti-lock"></i></a>
</div>
</aside>