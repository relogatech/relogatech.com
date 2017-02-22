			<!-- BEGIN CONTENT-->
			<div id="content">
				<section>
					<div class="section-body">
						<div class="row">
							<!-- BEGIN SITE ACTIVITY -->
							<div class="col-md-12">
								<div class="card ">
									<div class="row">
										<div class="col-md-12">
											<div class="card-head">
												<header>Request a Quote</header>
											</div><!--end .card-head -->
											<div class="card-body height-8">
												<div class="row">
							<div class="col-md-12">
							</div><!--end .col -->
							<div class="col-lg-12">
								<div class="table">
									<table id="datatable1" class="table table-striped table-hover">
										<thead>
											<tr>
												<th>Name</th>
												<th>Email</th>
												<th>Phone</th>
												<th>Skype</th>
												<th>Content</th>
												<th>Send From</th>
												<th>DateTime</th>
												<th>Status</th>
												<th>Action</th>
											</tr>
										</thead>
										<tbody>
										{list_request}
											<tr class="gradeX">
												<td>{fullname}</td>
												<td>{email}</td>
												<td>{contact}</td>
												<td>{skype_id}</td>
												<td>{content}</td>
												<td>{send_from}</td>
												<td>{date}</td>
												<td>{status}</td>
												<td>
													<a><i class="fa fa-search-plus"></i></a>
													<a><i class="fa fa-send"></i></a>
												</td>
										{/list_request}
											</tr>
											
										</tbody>
									</table>
								</div><!--end .table-responsive -->
							</div><!--end .col -->
						</div><!--end .row -->
											</div><!--end .card-body -->
									</div><!--end .row -->
								</div><!--end .card -->
							</div><!--end .col -->
							<!-- END SITE ACTIVITY -->

						</div><!--end .row -->
						
					</div><!--end .section-body -->
				</section>
			</div><!--end #content-->
			<!-- END CONTENT -->