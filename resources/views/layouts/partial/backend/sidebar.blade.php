<div class="left side-menu">
   <div class="sidebar-inner slimscrollleft">

       <!-- User -->

       <!-- End User -->

       <!--- Sidemenu -->
       <div id="sidebar-menu">
           <ul>
               <li class="text-muted menu-title">Navigation</li>

               <li>
                   <a href="{{ route('backend.home') }}" class="waves-effect"><i class="mdi mdi-view-dashboard"></i>
                       <span> Dashboard </span> </a>
               </li>
               <li class="has_sub">
                   <a href="javascript:void(0);" class="waves-effect "><i class="mdi mdi-invert-colors"></i> <span>
                           Risk Assessment</span> <span class="menu-arrow"></span></a>
                   <ul class="list-unstyled">
                       <li><a href="{{route('backend.assign-assessment.index')}}">Assign Assessment</a></li>
                       <li><a href="#">Assessment</a></li>
                       <li><a href="#">Review PKA</a></li>
                       <li><a href="#">Review Wakil</a></li>
                       <li><a href="#">Pelaporan</a></li>
                       <li><a href="#">Risk Profile</a></li>
                       {{-- <li><a href="form-wizard.html">Galeries</a></li> --}}

                   </ul>
               </li>
               <li class="has_sub">
                   <a href="javascript:void(0);" class="waves-effect "><i class="mdi mdi-invert-colors"></i> <span>
                           Manajemen Perencanaan</span> <span class="menu-arrow"></span></a>
                   <ul class="list-unstyled">
                       <li><a href="#">RAT</a></li>
                       <li><a href="#">RAP</a></li>
                       <li><a href="#">Pelaporan Perencanaan</a></li>
                   </ul>
               </li>
               <li class="has_sub">
                   <a href="javascript:void(0);" class="waves-effect "><i class="mdi mdi-invert-colors"></i> <span>
                           Manajemen Audit</span> <span class="menu-arrow"></span></a>
                   <ul class="list-unstyled">
                       <li><a href="#">Persiapan Audit</a></li>
                       <li><a href="#">Audit Pendalaman</a></li>
                       <li><a href="#">Pelaksanaan Audit</a></li>
                       <li><a href="#">Pelaporan Audit</a></li>
                   </ul>
               </li>
               <li>

                   <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                   document.getElementById('logout-form').submit();">
                       <i class="fa fa-sign-out"></i><span> Logout </span>
                   </a>


                   <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                       @csrf
                   </form>
               </li>

               {{-- <li class="has_sub">
              <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-texture"></i><span class="badge badge-warning pull-right">7</span><span> Forms </span> </a>
              <ul class="list-unstyled">
                 <li><a href="form-elements.html">Articles</a></li>
                 <li><a href="form-advanced.html">Categories</a></li>
                 <li><a href="form-validation.html">Tags</a></li>
                 <li><a href="form-wizard.html">Galeries</a></li>
              </ul>
           </li> --}}



           </ul>
           <div class="clearfix"></div>
       </div>
       <!-- Sidebar -->
       <div class="clearfix"></div>

   </div>

</div><!-- end navbar-custom -->
