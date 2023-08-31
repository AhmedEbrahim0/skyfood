

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

                    <form action="/admin/update-innvation-section" enctype="multipart/form-data" method="post">
                        @csrf
                        <input type="hidden" name="id" value="{{$data->id}}">

                        <div style="display: flex; align-items:flex-start;" class="my-2">
                            <textarea class="textarea mx-2" name="text1" style="width: 70%; height:200px" placeholder="Title ">{{$data->text1}}</textarea>
                            <div>
                                <label style="display: block;" for="image" class="btn btn-primary"> Change Side Image </label>
                                <input onchange="preview_image(event)" type="file" id="image" name="image" hidden>
                                <img src="/{{$data->image}}"  id="output_image" style="height: 150px; width:150px"  alt="">
                            </div>
                        </div>
                        <div>
                        <div style="display: flex; align-items:flex-start;" class="my-2">
                            <textarea class="textarea mx-2" name="text2" style="width: 70%; height:200px" placeholder="Card Description ">{{$data->text2}}</textarea>
                            <div>
                                <label style="display: block;" for="card" class="btn btn-primary"> Change Card Image </label>
                                <input onchange="preview_image2(event)" type="file" id="card" name="card" hidden>
                                <img  src="/{{$data->card}}" id="output_image2" style="height: 150px; width:150px"  alt="">
                            </div>
                        </div>
                        <div>

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


                </script>

			</div>
		</div>

        @include('admin.layouts.footer')
