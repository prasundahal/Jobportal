			{{-- <div class="card">
				<div class="card-header">
					Menu
				</div>
				<div class="card-body">
					<ul class="list-group">
						<li class="list-group-item"><a href="/dashboard">Home</a></li>
						<li class="list-group-item"><a href="/dashboard/create">Create post</a></li>
						<li class="list-group-item"><a href="/dashboard/trash">Trash</a></li>
						<li class="list-group-item"><a href="/testimonial">View Testimonial</a></li>
						<li class="list-group-item"><a href="/testimonial/create">Create Testimonial</a></li>
                        <li class="list-group-item"><a href="/dashboard/jobs">View Jobs</a></li>
                        <li class="list-group-item"><a href="#">Categories</a></li>


					</ul>
				</div>
			</div> --}}
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                  <!-- Add icons to the links using the .nav-icon class
                       with font-awesome or any other icon font library -->


                  <li class="nav-item">
                    <a href="/dashboard" class="nav-link">
                      <i class="nav-icon fas fa-home"></i>
                      <p>
                        HOME
                        {{-- <span class="right badge badge-danger">New</span> --}}
                      </p>
                    </a>
                  </li>

                  <li class="nav-item">
                    <a href="/dashboard/create" class="nav-link">
                      <i class="nav-icon fas fa-plus-square"></i>
                      <p>
                        Create post
                        {{-- <span class="right badge badge-danger">New</span> --}}
                      </p>
                    </a>
                  </li>


                  <li class="nav-item">
                    <a href="/dashboard/trash" class="nav-link">
                      <i class="nav-icon fas fa-trash"></i>
                      <p>
                        Trash
                        {{-- <span class="right badge badge-danger">New</span> --}}
                      </p>
                    </a>
                  </li>


                  <li class="nav-item">
                    <a href="/testimonial" class="nav-link">
                      <i class="nav-icon fas fa-dungeon"></i>
                      <p>
                        View Testimonial
                        {{-- <span class="right badge badge-danger">New</span> --}}
                      </p>
                    </a>
                  </li>

                  <li class="nav-item">
                    <a href="testimonial/create" class="nav-link">
                      <i class="nav-icon fas fa-th"></i>
                      <p>
                        Create Testimonial
                        {{-- <span class="right badge badge-danger">New</span> --}}
                      </p>
                    </a>
                  </li>

                  <li class="nav-item">
                    <a href="/dashboard/jobs" class="nav-link">
                      <i class="nav-icon fas fa-user-md"></i>
                      <p>
                        View Jobs
                        {{-- <span class="right badge badge-danger">New</span> --}}
                      </p>
                    </a>
                  </li>

                   <li class="nav-item">
                    <a href="{{ route('category.index2') }}" class="nav-link">
                      <i class="nav-icon fab fa-product-hunt"></i>

                      <p>
                        Categories

                      </p>
                    </a>
                  </li>

                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      <i class="nav-icon fab fa-product-hunt"></i>

                      <p>
                        Job seekers
                        {{-- <span class="right badge badge-danger">New</span> --}}
                      </p>
                    </a>
                  </li>


                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      <i class="nav-icon fab fa-product-hunt"></i>

                      <p>
                        Roles
                        {{-- <span class="right badge badge-danger">New</span> --}}
                      </p>
                    </a>
                  </li>

                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      <i class="nav-icon fab fa-product-hunt"></i>

                      <p>
                        manage profiles
                        {{-- <span class="right badge badge-danger">New</span> --}}
                      </p>
                    </a>
                  </li>

                  <li class="nav-item">
                    <a href="{{ route('functionareas.index2') }}" class="nav-link">
                      <i class="nav-icon fab fa-product-hunt"></i>

                      <p>
                        Functional Areas

                      </p>
                    </a>
                  </li>

                </ul>
              </nav>
