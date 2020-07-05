@extends('main')

@section('title','Edulevels')

@section('breadcrumbs')
<div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Edulevels</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li class="#">Edulevels</li>
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
            					<a href="{{ url('edulevels/add') }}" class="btn btn-success btn-sm">
                                    <i class="fa fa-plus"></i> Add</a>
            				</div>
            			</div>
            			<div class="card-body table-responsive">
            				<table class="table table-bordered">
			              	<thead>
			              		<tr class="text-center">
			              			<th>NO</th>
			              			<th>NAMA</th>
			              			<th>DESCRIPTION</th>
			              			<th>ACTION</th>
			              		</tr>
			              	</thead>
			              	<tbody>
			              		@foreach($edulevels as $item)
			              		<tr>
			              			<td class="text-center">{{$loop->iteration}}</td>
			              			<td>{{ $item->nama}}</td>
			              			<td>{{ $item->desc}}</td>
			              			<td class="text-center">
			              				<a href="{{ url('edulevels/edit/'.$item->id) }}" class="btn btn-success btn-sm" ><i class="fa fa-edit"></i></a>
                                        <form action="{{ url ('edulevels/'.$item->id)}}" method="post" onsubmit="return confirm ('yakin mau di hapus!!!')" class="d-inline">
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