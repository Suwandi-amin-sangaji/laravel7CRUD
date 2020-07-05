@extends('main')

@section('title','Programs')

@section('breadcrumbs')
<div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Programs</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li class="#">Programs</li>
                            <li class="active" >Data</i></li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
@endsection

@section('content')

 <div class="content mt-3">
    @if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
    @endif
            <div class="animated fadeIn">
            	<div class="card">
            		<div class="card-header">
            			<div class="pull-left">
            				<strong>DATA JENJANG</strong>
            			</div>
            				<div class="text-right">
            					<a href="{{ url('programs/add') }}" class="btn btn-success btn-sm">
                                    <i class="fa fa-plus"></i> Add</a>
            				</div>
            			</div>
            			<div class="card-body table-responsive">
            				<table class="table table-bordered">
			              	<thead>
			              		<tr class="text-center">
			              			<th>NO</th>
                                    <th>NAMA PROGRAM</th>
                                    <th>EDULEVEL</th>
			              			<th>INFO</th>
			              			<th>ACTION</th>
			              		</tr>
			              	</thead>
			              	<tbody>
			              		@foreach($programs as $item)
			              		<tr>
			              			<td class="text-center">{{$loop->iteration}}</td>
                                      <td>{{ $item->name}}</td>
                                      <td>{{ $item->edulevels_id}}</td>
			              			  <td>{{ $item->info}}</td>
			              			<td class="text-center">
			              				<a href="{{ url('programs/edit/'.$item->id) }}" class="btn btn-success btn-sm" ><i class="fa fa-edit"></i></a>
                                        <form action="{{ url ('programs/'.$item->id)}}" method="post" onsubmit="return confirm ('yakin mau di hapus!!!')" class="d-inline">
                                            @method('delete')
                                            @csrf
                                            <button type="submit" class="btn btn-danger btn-sm">
                                                <i class="fa fa-trash"></i>
                                            </button>
                                            
                                        </form>
			              			</td>
			              		</tr>
			              		@endforeach
			              	</tbody>
			              </table>
            		</div>
            	</div>
            </div>
        </div>
@endsection