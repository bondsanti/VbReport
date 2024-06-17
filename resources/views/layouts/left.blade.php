  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-1 sidebar-dark-lightblue sidebar-gardians">
      <!-- Brand Logo -->
      <a href="{{ route('main') }}" class="brand-link">

          <img src="{{ url('uploads/logo.png') }}" alt="vbeyond" class="brand-image elevation-0" style="opacity: .8">
          <span class="brand-text text-center"> VBEYOND Report</span>

      </a>



      <!-- Sidebar -->
      <div class="sidebar">
          <!-- Sidebar user panel (optional) -->
          <div class="user-panel mt-3 pb-3 mb-3 d-flex">
              <div class="image">

                  <img src="{{ url('uploads/avatar.png') }}" class="img-circle elevation-2" alt="User Image">

              </div>
              <div class="info">
                  <a href="#" class="d-block">คุณ ..........</a>
              </div>
          </div>

          <!-- Sidebar -->
          <nav class="mt-2">
              <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                  data-accordion="false">
                  <li class="nav-item">
                      <a href="{{ route('main') }}" class="nav-link {{ request()->routeIs('main') ? 'active' : '' }}">
                          <i class="nav-icon fas fa-tachometer-alt" ></i>
                          <p>
                              แดชบอร์ด
                          </p>
                      </a>
                  </li>
                  <li class="nav-item">
                      <a style="" href="{{ route('lists') }}" class="nav-link {{ request()->routeIs('lists') ? 'active' : '' }} {{ request()->routeIs('lists.search') ? 'active' : '' }} {{ request()->routeIs('list.show') ? 'active' : '' }} {{ request()->routeIs('lists.edit') ? 'active' : '' }}">
                          <i class="nav-icon fa-solid fa-magnifying-glass" ></i>
                          <p>
                              ค้นหารายการ
                          </p>
                      </a>
                  </li>
                  <li class="nav-item">
                      <a style="" href="{{ route('add') }}" class="nav-link {{ request()->routeIs('add') ? 'active' : '' }}">
                          <i class="nav-icon fa-solid fa-file-circle-plus" ></i>
                          <p>
                              เพิ่มรายการใหม่
                          </p>
                      </a>
                  </li>
                  <li class="nav-item">
                      <a style="" href="{{ route('edit') }}" class="nav-link {{ request()->routeIs('edit') ? 'active' : '' }}">
                          <i class="nav-icon fa-solid fa-file-pen" ></i>
                          <p>
                              เพิ่ม / แก้ไขทีม
                          </p>
                      </a>
                  </li>
                  {{-- <li class="nav-item">
                      <a style="" href="{{ route('agent') }}" class="nav-link {{ request()->routeIs('agent') ? 'active' : '' }}">
                          <i class="nav-icon fa-solid fa-user" ></i>
                          <p>
                              Agent
                          </p>
                      </a>
                  </li> --}}
                  <li class="nav-item">
                      <a style="" href="{{ route('zen') }}" class="nav-link {{ request()->routeIs('zen.search') ? 'active' : '' }} {{ request()->routeIs('zen') ? 'active' : '' }}">
                          <i class="nav-icon fa-solid fa-file-signature" ></i>
                          <p>
                              Report P Zen Team
                          </p>
                      </a>
                  </li>
                  <li class="nav-item">
                      <a style="" href=""
                          class="nav-link {{ request()->routeIs('mortgaged') ? 'active' : '' }} {{ request()->routeIs('mortgaged.search') ? 'active' : '' }} {{ request()->routeIs('yeartarget') ? 'active' : '' }} {{ request()->routeIs('yeartarget.search') ? 'active' : '' }}">
                          <i class="nav-icon fa-regular fa-calendar-check" ></i>
                          <p>
                              Martgaged / Year Target
                              <i class="right fas fa-angle-left"></i>
                          </p>
                      </a>
                      <ul class="nav nav-treeview">
                          <li class="nav-item">
                              <a style="" href="{{ route('mortgaged') }}"
                                  class="nav-link {{ request()->routeIs('mortgaged') ? 'active' : '' }} {{ request()->routeIs('mortgaged.search') ? 'active' : '' }}">
                                  &nbsp;&nbsp;
                                  <i class="nav-icon">
                                    -
                                  </i>
                                  <p>
                                      Mortgaged Report
                                  </p>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a style="" href=" {{ route('yeartarget') }} "
                                  class="nav-link {{ request()->routeIs('yeartarget') ? 'active' : '' }} {{ request()->routeIs('yeartarget.search') ? 'active' : '' }}">
                                  &nbsp;&nbsp;
                                  <i class="nav-icon">
                                    -
                                  </i>
                                  <p>
                                      Year Target Report
                                  </p>
                              </a>
                          </li>
                      </ul>
                  </li>
                  <li class="nav-item">
                      <a style="" href=""
                          class="nav-link {{ request()->routeIs('banking') ? 'active' : '' }} {{ request()->routeIs('bank.search') ? 'active' : '' }} {{ request()->routeIs('jobteam') ? 'active' : '' }} {{ request()->routeIs('jobteam.search') ? 'active' : '' }} {{ request()->routeIs('rejected') ? 'active' : '' }} {{ request()->routeIs('rejected.search') ? 'active' : '' }} {{ request()->routeIs('jobstatus') ? 'active' : '' }} {{ request()->routeIs('jobstatus.search') ? 'active' : '' }} {{ request()->routeIs('report') ? 'active' : '' }} {{ request()->routeIs('report.search') ? 'active' : '' }} {{ request()->routeIs('saleinout') ? 'active' : '' }} {{ request()->routeIs('saleinout.search') ? 'active' : '' }}">
                          <i class="nav-icon fa-solid fa-layer-group" ></i>
                          <p>
                              Report วิเคราะห์
                              <i class="right fas fa-angle-left"></i>
                          </p>
                      </a>
                      <ul class="nav nav-treeview">
                          <li class="nav-item">
                              <a style="" href=" {{ route('banking') }} "
                                  class="nav-link {{ request()->routeIs('banking') ? 'active' : '' }} {{ request()->routeIs('bank.search') ? 'active' : '' }} ">
                                  &nbsp;&nbsp;
                                  <i class="nav-icon">
                                    -
                                  </i>
                                  <p>
                                      กราฟสรุปรายงานส่งเข้าธนาคาร
                                  </p>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a style="" href=" {{ route('jobteam') }} "
                                  class="nav-link {{ request()->routeIs('jobteam') ? 'active' : '' }} {{ request()->routeIs('jobteam.search') ? 'active' : '' }}">
                                  &nbsp;&nbsp;
                                  <i class="nav-icon">
                                    -
                                  </i>
                                  <p>
                                      กราฟรายงานสถานะของทีม
                                  </p>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a style="" href=" {{ route('rejected') }} "
                                  class="nav-link {{ request()->routeIs('rejected') ? 'active' : '' }} {{ request()->routeIs('rejected.search') ? 'active' : '' }}">
                                  &nbsp;&nbsp;
                                  <i class="nav-icon">
                                    -
                                  </i>
                                  <p>
                                      กราฟเหตุผลการ Rejected
                                  </p>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a style="" href=" {{ route('jobstatus') }} "
                                  class="nav-link {{ request()->routeIs('jobstatus') ? 'active' : '' }} {{ request()->routeIs('jobstatus.search') ? 'active' : '' }}">
                                  &nbsp;&nbsp;
                                  <i class="nav-icon">
                                    -
                                  </i>
                                  <p>
                                      กราฟงานเเต่ละสถานะของทีม
                                  </p>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a style="" href=" {{ route('report') }} "
                                  class="nav-link {{ request()->routeIs('report') ? 'active' : '' }} {{ request()->routeIs('report.search') ? 'active' : '' }} ">
                                  &nbsp;&nbsp;
                                  <i class="nav-icon">
                                    -
                                  </i>
                                  <p>
                                      กราฟรายงานทีมวิเคราะห์
                                  </p>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a style="" href=" {{ route('saleinout') }} "
                                  class="nav-link {{ request()->routeIs('saleinout') ? 'active' : '' }} {{ request()->routeIs('saleinout.search') ? 'active' : '' }}">
                                  &nbsp;&nbsp;
                                  <i class="nav-icon">
                                    -
                                  </i>
                                  <p>
                                      กราฟรายงาน salein saleout
                                  </p>
                              </a>
                          </li>
                      </ul>
                  </li>
                  <li class="nav-item">
                      <a href="" class="nav-link " style="">
                          <i class="nav-icon fa-solid fa-chart-simple" ></i>
                          <p>
                              สรุปรายงานวิเคราะห์
                              <i class="right fas fa-angle-left"></i>
                          </p>
                      </a>
                      <ul class="nav nav-treeview">
                          <li class="nav-item">
                              <a style="" href=" " class="nav-link ">
                                  &nbsp;&nbsp;
                                  <i class="nav-icon">
                                    -
                                  </i>
                                  <p>
                                      รายงานวิเคราะห์ (New)
                                  </p>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a style="" href=" " class="nav-link ">
                                  &nbsp;&nbsp;
                                  <i class="nav-icon">
                                     -
                                  </i>
                                  <p>
                                      รายงานวิเคราะห์ (Year)
                                  </p>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a style="" href=" " class="nav-link ">
                                  &nbsp;&nbsp;
                                  <i class="nav-icon">
                                     - 
                                  </i>
                                  <p>
                                      รายงานวิเคราะห์ (Target)
                                  </p>
                              </a>
                          </li>
                      </ul>
                  </li>
              </ul>
          </nav>
          <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
  </aside>
