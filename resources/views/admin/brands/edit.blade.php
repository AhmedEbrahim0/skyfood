

@include('admin.layouts.sidebar')

<style>
    select{
    width: 100%;
    height: 50px;
    color: black;
    font-weight: bold;
    border: 0.5px solid gray;
    
    }
</style>

		<div class="mobile-menu-overlay"></div>

		<div class="main-container">
			<div class="xs-pd-20-10 pd-ltr-20">
				<div class="title pb-20">
					<h2 class="h3 mb-0"> Edit</h2>
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

                    <form action="/admin/update-brands-section" enctype="multipart/form-data" method="post">
                        @csrf

                        <input type="text" name="id" value="{{$data->id}}" hidden>
                        <div>
                            <textarea class="textarea" name="text1" placeholder="Brand Name ">{{$data->text1}}</textarea>
                        </div>
                        <div>
                            <textarea class="textarea" name="text2" placeholder="Description ">{{$data->text2}}</textarea>
                        </div>
                        <div>
                            <textarea class="textarea" name="detials" placeholder="Detials ">{{$data->detials}}</textarea>
                        </div>


                        <div>
                            <label for="image" class="btn btn-primary"> Change Image </label>
                            <input onchange="preview_image(event)" type="file" id="image" name="background" hidden>
                            <img src="/{{$data->background}}" id="output_image" style="height: 150px; width:150px"  alt="">

                            <label for="logo" class="btn btn-primary"> Change logo </label>
                            <input onchange="preview_image2(event)" type="file" id="logo" name="logo" hidden>
                            <img src="/{{$data->logo}}" id="output_image2" style="height: 150px; width:150px"  alt="">

                            <label for="product_image" class="btn btn-primary"> Change product_image </label>
                            <input onchange="preview_image3(event)" type="file" id="product_image" name="product_image" hidden>
                            <img src="/{{$data->product_image}}" id="output_image3" style="height: 150px; width:150px"  alt="">
                        </div>
                        <div>
                            <button class="btn btn-primary w-100">  Save Changes </button>
                        </div>
                    </form>
					

                </div>
                <script>
                        function preview_image(event) 
                        {

                        var reader = new FileReader();
                        reader.onload = function()
                        {
                        var output = document.getElementById('output_image');
                        output.src = reader.result;
                        }
                        reader.readAsDataURL(event.target.files[0]);
                        }
                        function preview_image2(event) 
                        {

                        var reader = new FileReader();
                        reader.onload = function()
                        {
                        var output = document.getElementById('output_image2');
                        output.src = reader.result;
                        }
                        reader.readAsDataURL(event.target.files[0]);
                        }
                        function preview_image3(event) 
                        {

                        var reader = new FileReader();
                        reader.onload = function()
                        {
                        var output = document.getElementById('output_image3');
                        output.src = reader.result;
                        }
                        reader.readAsDataURL(event.target.files[0]);
                        }


                </script>

			</div>
		</div>

        @include('admin.layouts.footer')
