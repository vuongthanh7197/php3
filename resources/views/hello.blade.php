<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

        <!-- Styles -->
       
    </head>
    <body>
       

            <div class="content">
                <div class="title m-b-md">
                    <table class="table">
                    	<thead>
                    		<tr>
                    			<th scope="col">
                    				Tieu de
                    			</th>
                    			<th scope="col">
                    				Noi dung
                    			</th>
                    		</tr>
                    	</thead>
                    	<tbody>
                    		<tr>
                    			<th scope="row">
                    				Ten
                    			</th>
                    			<td>{{$ten}}</td>
                    		</tr>
                    		<tr>
                    			<th scope="row">
                    				Dia chi
                    			</th>
                    			<td>{{$diachi}}</td>
                    		</tr>
                    		<tr>
                    			<th scope="row">
                    				Tuoi
                    			</th>
                    			<td>{{$tuoi}}</td>
                    		</tr>
                    		<tr>
                    			<th scope="row">
                    				Lop
                    			</th>
                    			<td>{{$lop}}</td>
                    		</tr>
                    	</tbody>
                    </table>
                </div>
            </div>
        </div>
    </body>
</html>
