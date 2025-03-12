        <!--************
            Nav header start
        *************-->
        <div class="nav-header">
            <a onclick="window.location.href='<?= base_url('Home/') ?>'" class="brand-logo">
                <img class="logo-abbr" src="<?= base_url('assets/mophy/images/sta.jpg')?>" alt="">
                <img class="logo-compact" src="<?= base_url('assets/mophy/images/logocompleto.png')?>" alt="">
                <img class="brand-title" src="<?= base_url('assets/mophy/images/logocompleto.png')?>" alt="">
            </a>

            <div class="nav-control">
                <div class="hamburger">
                    <span class="line"></span><span class="line"></span><span class="line"></span>
                </div>
            </div>
        </div>
        <!--************
            Nav header end
        *************-->
		
				<!--************
            Header start
        *************-->
        <div class="header">
            <div class="header-content">
                <nav class="navbar navbar-expand">
                    <div class="collapse navbar-collapse justify-content-between">
                        <div class="header-left">
                            <div class="dashboard_bar">
															<div class="input-group search-area d-lg-inline-flex d-none">
																<div class="input-group-append">
																</div>
															</div>
														</div>
												</div>
												<ul class="navbar-nav header-right">
													<li class="nav-item">
														<div class="d-flex weather-detail">
															<span><i class="las la-cloud"></i>21</span>
															Medan, IDN
														</div>
													</li>
													<li class="nav-item dropdown notification_dropdown">
															<a class="nav-link bell dz-theme-mode" href="javascript:void(0);">
																<i id="icon-light" class="fas fa-sun"></i>
																<i id="icon-dark" class="fas fa-moon"></i>	
															</a>
													</li>
													<li class="nav-item dropdown notification_dropdown">
																				<a class="nav-link  ai-icon" href="javascript:void(0)" role="button" data-bs-toggle="dropdown">
																						<svg width="20" height="20" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
																<path fill-rule="evenodd" clip-rule="evenodd" d="M12.6001 4.3008V1.4C12.6001 0.627199 13.2273 0 14.0001 0C14.7715 0 15.4001 0.627199 15.4001 1.4V4.3008C17.4805 4.6004 19.4251 5.56639 20.9287 7.06999C22.7669 8.90819 23.8001 11.4016 23.8001 14V19.2696L24.9327 21.5348C25.4745 22.6198 25.4171 23.9078 24.7787 24.9396C24.1417 25.9714 23.0147 26.6 21.8023 26.6H15.4001C15.4001 27.3728 14.7715 28 14.0001 28C13.2273 28 12.6001 27.3728 12.6001 26.6H6.19791C4.98411 26.6 3.85714 25.9714 3.22014 24.9396C2.58174 23.9078 2.52433 22.6198 3.06753 21.5348L4.20011 19.2696V14C4.20011 11.4016 5.23194 8.90819 7.07013 7.06999C8.57513 5.56639 10.5183 4.6004 12.6001 4.3008ZM14.0001 6.99998C12.1423 6.99998 10.3629 7.73779 9.04973 9.05099C7.73653 10.3628 7.00011 12.1436 7.00011 14V19.6C7.00011 19.817 6.94833 20.0312 6.85173 20.2258C6.85173 20.2258 6.22871 21.4718 5.57072 22.7864C5.46292 23.0034 5.47412 23.2624 5.60152 23.4682C5.72892 23.674 5.95431 23.8 6.19791 23.8H21.8023C22.0445 23.8 22.2699 23.674 22.3973 23.4682C22.5247 23.2624 22.5359 23.0034 22.4281 22.7864C21.7701 21.4718 21.1471 20.2258 21.1471 20.2258C21.0505 20.0312 21.0001 19.817 21.0001 19.6V14C21.0001 12.1436 20.2623 10.3628 18.9491 9.05099C17.6359 7.73779 15.8565 6.99998 14.0001 6.99998Z" fill="#3E4954"></path>
															</svg>
															<span class="badge light text-white bg-primary rounded-circle">12</span>
																				</a>
																				<div class="dropdown-menu dropdown-menu-end">
																						<div id="DZ_W_Notification1" class="widget-media dz-scroll p-3 height380">
																<ul class="timeline">
																	<li>
																		<div class="timeline-panel">
																			<div class="media me-2">
																				<img alt="image" width="50" src="https://mophy.dexignzone.com/codeigniter/demo/public/assets/images/avatar/1.jpg">
																			</div>
																			<div class="media-body">
																				<h6 class="mb-1">Dr sultads Send you Photo</h6>
																				<small class="d-block">29 July 2020 - 02:26 PM</small>
																			</div>
																		</div>
																	</li>
																	<li>
																		<div class="timeline-panel">
																			<div class="media me-2 media-info">
																				KG
																			</div>
																			<div class="media-body">
																				<h6 class="mb-1">Resport created successfully</h6>
																				<small class="d-block">29 July 2020 - 02:26 PM</small>
																			</div>
																		</div>
																	</li>
																	<li>
																		<div class="timeline-panel">
																			<div class="media me-2 media-success">
																				<i class="fa fa-home"></i>
																			</div>
																			<div class="media-body">
																				<h6 class="mb-1">Reminder : Treatment Time!</h6>
																				<small class="d-block">29 July 2020 - 02:26 PM</small>
																			</div>
																		</div>
																	</li>
																	<li>
																		<div class="timeline-panel">
																			<div class="media me-2">
																				<img alt="image" width="50" src="https://mophy.dexignzone.com/codeigniter/demo/public/assets/images/avatar/1.jpg">
																			</div>
																			<div class="media-body">
																				<h6 class="mb-1">Dr sultads Send you Photo</h6>
																				<small class="d-block">29 July 2020 - 02:26 PM</small>
																			</div>
																		</div>
																	</li>
																	<li>
																		<div class="timeline-panel">
																			<div class="media me-2 media-danger">
																				KG
																			</div>
																			<div class="media-body">
																				<h6 class="mb-1">Resport created successfully</h6>
																				<small class="d-block">29 July 2020 - 02:26 PM</small>
																			</div>
																		</div>
																	</li>
																	<li>
																		<div class="timeline-panel">
																			<div class="media me-2 media-primary">
																				<i class="fa fa-home"></i>
																			</div>
																			<div class="media-body">
																				<h6 class="mb-1">Reminder : Treatment Time!</h6>
																				<small class="d-block">29 July 2020 - 02:26 PM</small>
																			</div>
																		</div>
																	</li>
																</ul>
															</div>
																						<a class="all-notification" href="javascript:void(0)">See all notifications <i class="ti-arrow-right"></i></a>
																				</div>
																		</li>
													<li class="nav-item dropdown notification_dropdown">
																				<a class="nav-link bell bell-link" href="javascript:void(0)">
																						<svg width="20" height="20" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
																<path fill-rule="evenodd" clip-rule="evenodd" d="M25.6666 8.16666C25.6666 5.5895 23.5771 3.5 21 3.5C17.1161 3.5 10.8838 3.5 6.99998 3.5C4.42281 3.5 2.33331 5.5895 2.33331 8.16666V23.3333C2.33331 23.8058 2.61798 24.2305 3.05315 24.4113C3.48948 24.5922 3.99115 24.4918 4.32481 24.1582C4.32481 24.1582 6.59281 21.8902 7.96714 20.517C8.40464 20.0795 8.99733 19.8333 9.61683 19.8333H21C23.5771 19.8333 25.6666 17.7438 25.6666 15.1667V8.16666ZM23.3333 8.16666C23.3333 6.87866 22.2891 5.83333 21 5.83333C17.1161 5.83333 10.8838 5.83333 6.99998 5.83333C5.71198 5.83333 4.66665 6.87866 4.66665 8.16666V20.517L6.31631 18.8673C7.19132 17.9923 8.37899 17.5 9.61683 17.5H21C22.2891 17.5 23.3333 16.4558 23.3333 15.1667V8.16666ZM8.16665 15.1667H17.5C18.144 15.1667 18.6666 14.644 18.6666 14C18.6666 13.356 18.144 12.8333 17.5 12.8333H8.16665C7.52265 12.8333 6.99998 13.356 6.99998 14C6.99998 14.644 7.52265 15.1667 8.16665 15.1667ZM8.16665 10.5H19.8333C20.4773 10.5 21 9.97733 21 9.33333C21 8.68933 20.4773 8.16666 19.8333 8.16666H8.16665C7.52265 8.16666 6.99998 8.68933 6.99998 9.33333C6.99998 9.97733 7.52265 10.5 8.16665 10.5Z" fill="#3E4954"></path>
															</svg>
															<span class="badge light text-white bg-primary rounded-circle">5</span>
																				</a>
													</li>
													<li class="nav-item dropdown header-profile">
															<a class="nav-link" href="javascript:void(0)" role="button" data-bs-toggle="dropdown">
																<div class="header-info">
																		<!-- Mostrar el nombre del usuario -->
																		<span class="text-black">Hola,<strong><?= session()->get('user'); ?></strong></span>
																		<p class="fs-12 mb-0">Admin</p>
																</div>
																<img src="https://mophy.dexignzone.com/codeigniter/demo/public/assets/images/profile/17.jpg" width="20" alt="">
															</a>
															<div class="dropdown-menu dropdown-menu-end">
																	<a href="https://mophy.dexignzone.com/codeigniter/demo/admin/page_login" class="dropdown-item ai-icon">
																			<svg id="icon-logout" xmlns="http://www.w3.org/2000/svg" class="text-danger" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path><polyline points="16 17 21 12 16 7"></polyline><line x1="21" y1="12" x2="9" y2="12"></line></svg>
																			<span class="ms-2">Logout </span>
																	</a>
															</div>
													</li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <!--************
            Header end ti-comment-alt
        *************-->

        <!--************
            Sidebar start
        *************-->
        <div class="deznav">
            <div class="deznav-scroll">
							<div id="stand-form" class="card">

									<div class="card-header bg-primary text-white">
											<h3>Stand Information</h3>
									</div>
									<div class="card-body">
											<form id="_sts_standForm">
													<div class="row mb-3">
															<div class="col-md-6">
																	<label for="_sts_id" class="form-label">ID</label>
																	<input type="number" class="form-control" id="_sts_id" name="_sts_id" value="-1" min="-1" step="1" required>
																	<div class="invalid-feedback">Please enter a valid integer number.</div>
															</div>
															<div class="col-md-6">
																	<label for="_sts_type" class="form-label">Type</label>
																	<select class="form-select" id="_sts_type" name="_sts_type" required>
																			<!-- Options will be populated by JavaScript -->
																	</select>
																	<div class="invalid-feedback">Please select a type.</div>
															</div>
													</div>

													<div class="row mb-3">
															<div class="col-md-6">
																	<label for="_sts_x" class="form-label">X Position</label>
																	<input type="number" class="form-control" id="_sts_x" name="_sts_x" min="0" step="0.01" required>
																	<div class="invalid-feedback">Please enter a valid number greater than or equal to 0.</div>
															</div>
															<div class="col-md-6">
																	<label for="_sts_y" class="form-label">Y Position</label>
																	<input type="number" class="form-control" id="_sts_y" name="_sts_y" min="0" step="0.01" required>
																	<div class="invalid-feedback">Please enter a valid number greater than or equal to 0.</div>
															</div>
													</div>

													<div class="row mb-3">
															<div class="col-md-4">
																	<label for="_sts_width" class="form-label">Width</label>
																	<input type="number" class="form-control" id="_sts_width" name="_sts_width" min="0" max="999" step="1" required>
																	<div class="invalid-feedback">Please enter a valid integer between 0 and 999.</div>
															</div>
															<div class="col-md-4">
																	<label for="_sts_height" class="form-label">Height</label>
																	<input type="number" class="form-control" id="_sts_height" name="_sts_height" min="0" max="999" step="1" required>
																	<div class="invalid-feedback">Please enter a valid integer between 0 and 999.</div>
															</div>
															<div class="col-md-4">
																	<label for="_sts_radius" class="form-label">Radius</label>
																	<input type="number" class="form-control" id="_sts_radius" name="_sts_radius" min="0" max="999" step="1">
																	<div class="invalid-feedback">Please enter a valid integer between 0 and 999.</div>
															</div>
													</div>

													<div class="row mb-3">
															<div class="col-md-6">
																	<label for="_sts_stroke_width" class="form-label">Stroke Width</label>
																	<input type="number" class="form-control" id="_sts_stroke_width" name="_sts_stroke_width" min="0" max="100" step="1" required>
																	<div class="invalid-feedback">Please enter a valid integer between 0 and 100.</div>
															</div>
															<div class="col-md-6">
																	<label for="_sts_numero" class="form-label">Number</label>
																	<input type="text" class="form-control" id="_sts_numero" name="_sts_numero" maxlength="200" required>
																	<div class="invalid-feedback">This field is required (max 200 characters).</div>
															</div>
													</div>

													<div class="mb-3">
															<label for="_sts_nombre" class="form-label">Name</label>
															<input type="text" class="form-control" id="_sts_nombre" name="_sts_nombre" maxlength="200" required>
															<div class="invalid-feedback">This field is required (max 200 characters).</div>
													</div>

													<div class="mb-3">
															<label for="_sts_contacto" class="form-label">Contact</label>
															<input type="text" class="form-control" id="_sts_contacto" name="_sts_contacto" maxlength="300">
															<div class="form-text">Optional, max 300 characters.</div>
													</div>

													<div class="mb-3 form-check">
															<input type="checkbox" class="form-check-input" id="_sts_status" name="_sts_status">
															<label class="form-check-label" for="_sts_status">Active Status</label>
													</div>

													<input type="hidden" id="_sts_id_evento" name="_sts_id_evento" value="-1">

													<div class="d-grid gap-2 d-md-flex justify-content-md-end">
															<button type="button" class="btn btn-secondary me-md-2" id="_sts_resetBtn">Reset</button>
															<button type="button" class="btn btn-primary" id="_sts_submitBtn">Submit</button>
													</div>
											</form>
									</div>

							</div>
						</div>
        </div>
        <!--************
            Sidebar end
        *************-->