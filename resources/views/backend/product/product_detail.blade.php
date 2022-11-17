@extends('admin.admin_master')
@section('admin')

  <!-- Content Wrapper. Contains page content -->
	<div class="container-full">
		<!-- Content Header (Page header) -->
		<!-- Main content -->
		<section class="content">
		  <div class="row">		   		 
				<div class="col-12">
          <div class="box">
          <div class="box-header with-border">
            <h4 class="box-title">Description Horizontal</h4>
          </div>
          <!-- /.box-header -->
          <div class="box-body">             
            <dl class="dl-horizontal">
              <dt>Brand</dt>
              <dd>     
                @foreach($brands as $brand)
                <div>{{ $brand->id == $products->brand_id ? $brand->brand_name_en : '' }}</div>	
                @endforeach
              </dd>

              <dt>Category</dt>
              <dd>     
                @foreach($categories as $category)
                <div>{{ $category->id == $products->category_id ? $category->category_name_en: '' }}</div>	
                @endforeach
              </dd>

              <dt>SubCategory</dt>
              <dd>     
                @foreach($subcategory as $sub)
                <div>{{ $sub->id == $products->subcategory_id ? $sub->subcategory_name_en: '' }}</div>	
                @endforeach
              </dd>

              <dt>SubSubCategory</dt>
              <dd>     
                @foreach($subsubcategory as $subsub)
                <div>{{ $subsub->id == $products->subsubcategory_id ? $subsub->subsubcategory_name_en: '' }}</div>	
                @endforeach
              </dd>

              <dt>Product Name En</dt>
              <dd>{{ $products->product_name_en }}</dd>

              <dt>Product Name Hin</dt>
              <dd>{{ $products->product_name_hin }}</dd>

              <dt>Product Code</dt>
              <dd>{{ $products->product_code }}</dd>

              <dt>Product Quantity</dt>
              <dd>{{ $products->product_qty }}</dd>

              <dt>Product Tags En</dt>
              <dd>{{ $products->product_tags_en }}</dd>

              <dt>Product Tags Hin</dt>
              <dd>{{ $products->product_tags_hin }}</dd>

              <dt>Product Size En</dt>
              <dd>{{ $products->product_size_en }}</dd>

              <dt>Product Size Hin</dt>
              <dd>{{ $products->product_size_hin }}</dd>

              <dt>Product Color En</dt>
              <dd>{{ $products->product_color_en }}</dd>

              <dt>Product Color Hin</dt>
              <dd>{{ $products->product_color_hin }}</dd>

              <dt>Product Selling Price</dt>
              <dd>{{ $products->selling_price }}</dd>

              <dt>Product Discount Price</dt>
              <dd>{{ $products->discount_price }}</dd>

              <dt>Short Description English</dt>
              <dd>{!! $products->short_descp_en !!}</dd>

              <dt>Short Description Hindi</dt>
              <dd>{!! $products->short_descp_hin !!}</dd>

              <dt>Long Description English</dt>
              <dd>{!! $products->long_descp_en !!}</dd>

              <dt>Long Description Hindi</dt>
              <dd>{!! $products->long_descp_hin !!}</dd>

              <dt>Hot Deals</dt>
              <dd>{{ $products->hot_deals == 1 ? 'YES': 'NO' }}</dd>

              <dt>Featured</dt>
              <dd>{{ $products->featured == 1 ? 'YES': 'NO' }}</dd>

              <dt>Special Offer</dt>
              <dd>{{ $products->special_offer == 1 ? 'YES': 'NO' }}</dd>

              <dt>Special Deals</dt>
              <dd>{{ $products->special_deals == 1 ? 'YES': 'NO' }}</dd>

              <dt>Product Multiple Image</dt>
              <dd>
                <div class="row row-sm">
                  @foreach($multiImgs as $img)
                  <div class="col-md-3">
                    <div class="">
                      <img src="{{ asset($img->photo_name) }}" class="card-img-top" style="height: 100px; width: 100px;">
                    </div> 						
                  </div><!--  end col md 3		 -->	
                  @endforeach
                </div>
              </dd>

              <dt>Product Thambnail Image</dt>
              <dd>
                <div class="row row-sm">
                  <div class="col-md-3">
                    <div class="">
                      <img src="{{ asset($products->product_thambnail) }}" class="card-img-top" style="height: 100px; width: 100px;">
                    </div> 						
                  </div><!--  end col md 3		 -->					 
                </div>
              </dd>

              <dt></dt>
              <dd></dd>
            </dl>
          </div>
          <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
		 	</div>
		  <!-- /.row -->
		</section>
		<!-- /.content -->
	</div>
  
@endsection