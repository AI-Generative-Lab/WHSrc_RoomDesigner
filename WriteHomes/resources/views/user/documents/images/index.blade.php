@extends('layouts.app')
@section('css')
	<!-- Data Table CSS -->
	<link href="{{URL::asset('plugins/datatable/datatables.min.css')}}" rel="stylesheet" />
	<!-- Sweet Alert CSS -->
	<link href="{{URL::asset('plugins/sweetalert/sweetalert2.min.css')}}" rel="stylesheet" />
	<link href="{{URL::asset('plugins/photoviewer/photoviewer.min.css')}}" rel="stylesheet" />
@endsection
@section('page-header')
<div>
          
<iframe src="{{ env('DESIGNER_SRC') }}" style="position:fixed; top:0; left:0; bottom:0; right:0; width:100%; height:100%; border:none; margin:0; padding:0; overflow:hidden;" name="search_iframe"></iframe>
<!-- partial -->
		<div class="max-w-3xl w-full mx-auto z-10">
		<div class="flex flex-col">
			
		</div>
		
		
						</div>
					</div>
@endsection