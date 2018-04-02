<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        @yield('contentheader_title', 'Sistema de Evaluaciones_OCyT')
        <small>@yield('contentheader_description')</small>
	
		
    </h1>

    
    @include('flash::message')
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">
     
    
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> {{ trans('adminlte_lang::message.level') }}</a></li>
        <li class="active"><?php echo url()->current();/*echo url()->full(); echo url()->previous();*/ ?></li>
    </ol>
</section>



<script>
    $('#flash-overlay-modal').modal();
</script>  

 <!--<div class="center-block" id="spinner">
          <div class="box box-danger">
            <div class="box-header">
              <h3 class="box-title">Loading</h3>
            </div>
            <div class="box-body">
              Espere.....
            </div>
            <!~~ /.box-body ~~>
            <!~~ Loading (remove the following to stop the loading)~~>
            <div class="overlay">
              <i class="fa fa-refresh fa-spin"></i>
            </div>
            <!~~ end loading ~~>
          </div>
          <!~~ /.box ~~>
        </div>
        <!~~ /.col ~~>
      </div>
      <!~~ /.row ~~>-->