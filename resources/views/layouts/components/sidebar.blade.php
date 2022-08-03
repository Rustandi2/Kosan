<aside class="left-sidebar">
     <!-- Sidebar scroll-->
     <div class="scroll-sidebar">
          <nav class="sidebar-nav">
               <ul id="sidebarnav" class="mt-3">
                    <li class="dashboard">
                         <a class="waves-effect" href="{{ route('home') }}" aria-expanded="true">
                              <i class="mdi mdi-gauge"></i>
                              <span class="hide-menu">Dashboard </span>
                         </a>
                    </li>
                    <li>
                         <a class="has-arrow waves-effect" href="#" aria-expanded="false">
                              <i class="mdi mdi-dropbox"></i>
                              <span class="hide-menu">Referensi </span>
                         </a>
                         <ul aria-expanded="false" class="collapse">
                              <li><a href="{{ route('provinsi') }}">Provinsi </a></li>
                         </ul>
                    </li>
               </ul>
          </nav>
          <!-- End Sidebar navigation -->
     </div>
     <!-- End Sidebar scroll-->
</aside>