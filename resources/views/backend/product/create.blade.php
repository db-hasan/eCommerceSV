@extends('backend/layouts/layout')

@section('content')
<div class="">
    
    <form method="post" action="{{ url('testproduct/store') }}">
      @csrf
      <select id="country" class="form-control" name="category_name" >
        <option value="">Select Category</option>
        @foreach($country as $list)
          <option value="{{$list->category_id}}">{{$list->category_name}}</option>
        @endforeach
      </select>
      <br/>
      <select id="state" class="form-control" name="subcategory_name">
        <option value="">Select State</option>
      </select>
      <br/>
      
      <select id="city" class="form-control" name="subsubcategory_name">
        <option value="">Select City</option>
      </select>
      <br>

      <input type="text" name="product_name" id="">


      <button type="submit">Submit now</button>
    </form>

</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js" ></script>

		<script>
		jQuery(document).ready(function(){
			jQuery('#country').change(function(){
				let cid=jQuery(this).val();
				jQuery('#city').html('<option value="">Select City</option>')
				jQuery.ajax({
					url:'/subcategory',
					type:'post',
					data:'cid='+cid+'&_token={{csrf_token()}}',
					success:function(result){
						jQuery('#state').html(result)
					}
				});
			});
			
			jQuery('#state').change(function(){
				let sid=jQuery(this).val();
				jQuery.ajax({
					url:'/subsubcategory',
					type:'post',
					data:'sid='+sid+'&_token={{csrf_token()}}',
					success:function(result){
						jQuery('#city').html(result)
					}
				});
			});
			
		});
			
		</script>

@endsection