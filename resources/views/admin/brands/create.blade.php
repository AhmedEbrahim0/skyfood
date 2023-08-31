

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
					<h2 class="h3 mb-0"> Add Section</h2>
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

                    <form action="/admin/store-brands" enctype="multipart/form-data" method="post">
                        @csrf

                        <div>
                            <textarea class="textarea" name="text1" placeholder="Brand Name "></textarea>
                        </div>
                        <div>
                            <textarea class="textarea" name="text2" placeholder="Description "></textarea>
                        </div>
                        <div>
                            <textarea class="textarea" name="detials" placeholder="Detials "></textarea>
                        </div>

                        <div>
                            <label for="background" class="btn btn-primary"> Upload Background Image </label>
                            <input onchange="preview_image(event)" type="file" id="background" name="background" hidden>
                            <img  id="output_image" style="height: 150px; width:150px"  alt="">

                            <label for="logo" class="btn btn-primary"> Upload Logo  </label>
                            <input onchange="preview_image2(event)" type="file" id="logo" name="logo" hidden>
                            <img  id="output_image2" style="height: 150px; width:150px"  alt="">

                            <label for="product_image" class="btn btn-primary"> Upload Product Image </label>
                            <input onchange="preview_image3(event)" type="file" id="product_image" name="product_image" hidden>
                            <img  id="output_image3" style="height: 150px; width:150px"  alt="">


                        </div>


                        <div>
                            <button class="btn btn-primary w-100">Add </button>
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
