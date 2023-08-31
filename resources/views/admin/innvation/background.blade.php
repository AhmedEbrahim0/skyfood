

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
					<h2 class="h3 mb-0"> Background of Our Company </h2>
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

					<form method="post" action="/admin/update-innvation" enctype="multipart/form-data" enctype="multipart/form-data">
						@csrf
						<input type="hidden" name="id" value="{{$page1->id}}">
						<div>
							<label for="image" class="btn btn-primary btn-update"> Change Image  </label>

							<button class="btn btn-danger btn-save" type="submit" onclick="alert('Please wait it takes a while to upload');document.querySelector('.loading-icon').style.display='inline'" style="display: none;">
							 Save Changes
							 <img src="/images/loading1.gif" class="loading-icon" style="display: none; height:30px" alt="">
							</button>
							
							<input hidden onchange="preview_image(event)"  name="image" type="file" id="image">
						</div>
						<div>
						@if(pathinfo($page1->image, PATHINFO_EXTENSION) == "jpg" ||pathinfo($page1->image, PATHINFO_EXTENSION) == "png"  )
							<img id="output_image1" style="height: 200px; width:200px" src="/{{$page1->image}}" alt="">
							@else
							<video  muted loop autoplay  id="output_image2"  style="height: 200px; width:200px" src="/{{$page1->image}}"  ></video>
							@endif
						</div>

						<div>
							<textarea  class="textarea" name="text1"  rows="10">{{$page1->text1}}</textarea>
						</div>
						<div>
							<textarea class="textarea"  name="text2"  rows="10">{{$page1->text2}}</textarea>
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
