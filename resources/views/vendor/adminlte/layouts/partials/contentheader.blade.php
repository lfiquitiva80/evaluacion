<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        @yield('contentheader_title', 'Sistema de Evaluaciones_OCyT')
        <small>@yield('contentheader_description')</small>
	
		
    </h1>

    @include('flash::message')
    

    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> {{ trans('adminlte_lang::message.level') }}</a></li>
        <li class="active"><?php echo url()->current();/*echo url()->full(); echo url()->previous();*/ ?></li>
    </ol>
</section>




<script>
    $('#flash-overlay-modal').modal();
</script>  