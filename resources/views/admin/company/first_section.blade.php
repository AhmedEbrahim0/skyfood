

@include('admin.layouts.sidebar')

<style>
	.textarea{
		width: 100%;
		height: 100px;
	}
</style>

		<div class="mobile-menu-overlay"></div>

		<div class="main-container">
			<div class="xs-pd-20-10 pd-ltr-20">
				<div class="title pb-20">
					<h2 class="h3 mb-0"> Update First Section</h2>
				</div>

                <div class="bg-white p-2">

					@if(Session::has('success'))
						<p  style="background: green; color:white;padding: 10px;">{{ Session::get('success') }}</p>
					@endif
					@if(Session::has('error'))
						<p  style="background: red; color:white;padding: 10px;">{{ Session::get('error') }}</p>
					@endif
					@if($errors->any())
						@foreach ($errors->all() as $error)
							<div style="background-color: red; color:white; margin: 10px 0;padding: 10px;"> {{$error}}</div>
						@endforeach
					@endif

					<form method="post"  action='/admin/update-company-firstSection' enctype="multipart/form-data" enctype="multipart/form-data">
						@csrf


						<div>
							<textarea  class="textarea" name="text2"  rows="10">{{$data->text2}}</textarea>
						</div>

						<div>
							<button type="submit" class="btn btn-primary w-100"> Save Changes </button>
						</div>
						
					</form>

                </div>

                <script>
                        function preview_image(event) 
                        {
                          document.querySelector(".btn-update").style.display="none";
                          document.querySelector(".btn-save").style.display="block";
                        var reader = new FileReader();
                        reader.onload = function()
                        {
							var output1 = document.getElementById('output_image1');
                        var output2 = document.getElementById('output_image2');
                        output1.src = reader.result;
                        output2.src = reader.result;
                        }
                        reader.readAsDataURL(event.target.files[0]);
                        }


                </script>


			</div>
		</div>

        @include('admin.layouts.footer')
