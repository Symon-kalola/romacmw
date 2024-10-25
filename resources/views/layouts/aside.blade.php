 <!-- ======= Sidebar ======= -->
 <aside id="sidebar" class="sidebar">

     <ul class="sidebar-nav" id="sidebar-nav">

         <li class="nav-item">
             <a class="nav-link " href="/dashboard">
                 <i class="bi bi-grid"></i>
                 <span>Dashboard</span>
             </a>
         </li><!-- End Dashboard Nav -->

         <li class="nav-item">
             <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse"
                 href="admin/gallery/pine">
                 <i class="bi bi-images"></i><span>Gallery</span><i class="bi bi-chevron-down ms-auto"></i>
             </a>
             <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                 <li>
                     <a href="/admin/gallery/pine">
                         <i class="bi bi-circle"></i><span>Pine</span>
                     </a>
                 </li>
                 <li>
                     <a href="/admin/gallery/accacia">
                         <i class="bi bi-circle"></i><span>Acaccia</span>
                     </a>
                 </li>
                 <li>
                     <a href="/admin/gallery/bluegum">
                         <i class="bi bi-circle"></i><span>Blueghum</span>
                     </a>
                 </li>

             </ul>
         </li><!-- End Components Nav -->


         <li class="nav-item">
             <a class="nav-link collapsed" href="/admin/nurseries">
                 <i class="bi bi-tree"></i>
                 <span>Nurseries</span>
             </a>
         </li><!-- End Register Page Nav -->



         <li class="nav-item">
             <a class="nav-link collapsed" href="/admin/messages">
                 <i class="bi bi-chat-dots"></i>
                 <span>Messages</span>
             </a>
         </li><!-- End Blank Page Nav -->
         <li class="nav-item">
             <a class="nav-link collapsed" href="/admin/emails">
                 <i class="bi bi-envelope"></i>
                 <span>Emails</span>
             </a>
         </li><!-- End Contact Page Nav -->

         <li class="nav-item">
             <a class="nav-link collapsed" href="/admin/team">
                 <i class="bi bi-person-gear"></i>
                 <span>Team</span>
             </a>
         </li><!-- End Error 404 Page Nav -->




     </ul>
     <footer class="text-center mt-5">
         <p style="font-size: smaller">&copy; romac@ {{ date('Y') }}. All rights reserved.</p>
     </footer>


 </aside><!-- End Sidebar-->
