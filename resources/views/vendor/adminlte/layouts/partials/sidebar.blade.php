<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <!-- Sidebar user panel (optional) -->
        @if (! Auth::guest())
            <div class="user-panel">
                <div class="pull-left image">
                    <img src="{{ Gravatar::get($user->email) }}" class="img-circle" alt="User Image" />
                </div>
                <div class="pull-left info">
                    <p>{{ Auth::user()->name }}</p>
                    <!-- Status -->
                    <a href="#"><i class="fa fa-circle text-success"></i> {{ trans('adminlte_lang::message.online') }}</a>
                </div>
            </div>
        @endif

        <!-- search form (Optional) -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="{{ trans('adminlte_lang::message.search') }}..."/>
              <span class="input-group-btn">
                <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
              </span>
            </div>
        </form>
        <!-- /.search form -->

        <!-- Sidebar Menu -->
        <ul class="sidebar-menu">
            <li class="header">{{ trans('adminlte_lang::message.header') }}</li>
            <!-- Optionally, you can add icons to the links -->

                    <?php  
                    $evaluadores = \App\evaluadores::where('id_users', Auth::user()->id)->first();
                    ?>
            
            @if (Auth::user()->TipoUsers==0)
            
            <li class="active"><a href="{{ url('home') }}"><i class='fa fa-home'></i> <span>{{ trans('adminlte_lang::message.home') }}</span></a></li>
            
            <li class="active"><a href="{{ url('enviarcorreosoporte') }}"><i class="fa fa-envelope-square"></i><span>Soporte</span></a></li>
            <li class="active"><a href="{{ $url = route('usuarios.edit', Auth::user()->id) }}"><i class="fa fa-key" aria-hidden="true"></i><span>Cambio de Contraseña</span></a></li>
            

            @elseif (Auth::user()->TipoUsers==1)
            <li class="active"><a href="{{ url('dashboard') }}"><i class='fa fa-dashboard'></i> <span>Dashboard</span></a></li>
            <li class="active"><a href="{{ url('home') }}"><i class='fa fa-home'></i> <span>{{ trans('adminlte_lang::message.home') }}</span></a></li>

            

             <li class="active"><a href="{{$url = route('evaluadores.edit', $evaluadores->id) }}"><i class='fa fa-address-card'></i> <span>Información Evaluador</span></a></li>



            
            
            <li class="active"><a href="{{ url('usuarios') }}"><i class='fa fa-user-plus'></i> <span>Usuarios</span></a></li>
            <li class="active"><a href="{{ url('evaluadores') }}"><i class='fa fa-coffee'></i> <span>Evaluadores</span></a></li>
            <!--<li class="active"><a href="{{ url('evaluacion_par') }}"><i class='fa fa-certificate'></i> <span>Evaluacion_par</span></a></li>-->
            <li class="active"><a href="{{ url('proyectos_articulos') }}"><i class='fa fa-industry'></i> <span>proyectos_articulos</span></a></li>
            
            <li class="active"><a href="{{ url('criterios_evaluacion') }}"><i class="fa fa-ship"></i> <span>Criterios de Evaluación</span></a></li>
            <li class="active"><a href="{{ url('comunicados') }}"><i class="fa fa-commenting"></i> <span>Comunicados</span></a></li>
            <li class="active"><a href="{{ url('gestion_pago') }}"><i class="fa fa-money" aria-hidden="true"></i><span>Gestión Pago</span></a></li>

            <li class="active"><a href="{{ url('preguntas') }}"><i class="fa fa-question-circle"></i> <span>Sistema de Clonado</span></a></li>
            <li class="active"><a href="{{ url('/logs') }}"><i class="fa fa-cog"></i> <span>Logs del Sistema</span></a></li>
            <li class="active"><a href="{{$url = route('configuracion_global.index')}}"><i class='fa fa-cogs'></i> <span>Configuraciones</span></a></li>
              <li class="active"><a href="{{ url('enviarcorreosoporte') }}"><i class="fa fa-envelope-square"></i><span>Soporte</span></a></li>
             <li class="active"><a href="{{ $url = route('usuarios.edit', Auth::user()->id) }}"><i class="fa fa-key" aria-hidden="true"></i><span>Cambio de Contraseña</span></a></li>
<!--
            <li class="active"><a href="{{ url('departamento') }}"><i class="fa fa-map"></i> <span>Departamento</span></a></li>
            <li class="active"><a href="{{ url('municipios') }}"><i class="fa fa-street-view"></i> <span>Ciudades</span></a></li>-->

                <li class="treeview">

                <a href="#"><i class="fa fa-file-excel-o" aria-hidden="true"></i><span>Reportes</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="{{ $url = route('excel.index') }}">Reporte de Excel</a></li>
                                    </ul>
            </li>

            
            @else

            <li class="active"><a href="{{ url('gestion_pago') }}"><i class="fa fa-money" aria-hidden="true"></i><span>Gestión Pago</span></a></li>
            <li class="active"><a href="{{ url('enviarcorreosoporte') }}"><i class="far fa-envelope-square"></i> <span>Soporte</span></a></li>
          
           
            
        

             @endif
        </ul><!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>
