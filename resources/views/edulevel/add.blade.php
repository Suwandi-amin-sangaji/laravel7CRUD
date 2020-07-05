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
                            <li class="active" >Add</i></li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
@endsection

@section('content')

 <div class="content mt-3">
            <div class="animated fadeIn">
            	<div class="card">
            		<div class="card-header">
            			<div class="pull-left">
            				<strong>ADD JENJANG</strong>
            			</div>
            				<div class="text-right">
            					<a href="{{ url ('edulevels') }}" class="btn btn-success btn-sm"><i class="fa fa-undo"></i> Back</a>
            				</div>
            			</div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-4 offset-md-4">
                                    <form action="{{ url('edulevels') }}" method="post">
                                         @csrf
                                        <div class="form-group">
                                            <label>Nama Jenajang</label>
                                            <input type="text" name="nama" value="{{ old('nama') }}" class="form-control @error('nama') is-invalid @enderror" autofocus >
                                            @error('nama')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                         <div class="form-group">
                                            <label>Keterangan</label>
                                            <textarea name="desc" class="form-control @error('desc') is-invalid @enderror" autofocus>{{ old('desc') }}</textarea>
                                            @error('desc')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror 
                                        </div>
                                        <button type="submit" class="btn btn-success">Save</button>
                                    </form>
                                </div>
                            </div>
                            
                        </div>
            		</div>
            	</div>
            </div>
        </div>
@endsection