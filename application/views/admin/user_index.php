<div id="done">
	<?= $this->session->flashdata('alert'); ?>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<form action="<?= site_url('admin/user/simpan') ?>" method="post">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title f-b" id="modalCenterTitle">Tambah User</h5>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="modal-body">
					<div class="row">
						<div class="col mb-3">
							<label for="nameWithTitle" class="form-label">Nama</label>
							<input type="text" id="nameWithTitle" class="form-control" placeholder="Enter Name" name="nama">
						</div>
					</div>
					<div class="row g-2">
						<div class="col mb-0">
							<label for="emailWithTitle" class="form-label">Username</label>
							<input type="text" id="emailWithTitle" class="form-control" placeholder="Username" name="username">
						</div>
						<div class="col mb-0">
							<label for="dobWithTitle" class="form-label">Password</label>
							<input type="password" id="dobWithTitle" class="form-control" placeholder="*******" name="password">
						</div>
					</div>
					<div class="row">
						<div class="col mb-3">
							<label for="nameWithTitle" class="form-label">Level</label>
							<select name="level" class="form-control">
								<option value="Kontributor">Kontributor</option>
								<option value="Admin">Admin</option>
							</select>
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
					<button type="submit" class="btn btn-primary">Simpan</button>
				</div>
			</div>
		</form>
	</div>
</div>

<div class="card">
	<div class="card-header">
		<div class="card-head-row card-tools-still-right">
			<h2 class="card-title fw-b">Data User</h4>
		</div>
		<button type="button" class="btn btn-primary mt-3" data-bs-toggle="modal" data-bs-target="#exampleModal">
			<span class="btn-label">
				<i class="fa fa-plus"></i>
			</span>
			Tambah User
		</button>
	</div>

	<div class="card-body">
		<div class="row">
			<div class="card-body table-responsive">
				<table class="table table-hover">
					<thead>
						<tr>
							<th scope="col">#</th>
							<th scope="col">Username</th>
							<th scope="col">Nama</th>
							<th scope="col">Level</th>
							<th scope="col">Aksi</th>
						</tr>
					</thead>
					<tbody>
						<?php $no = 1;
						foreach ($user as $aa) { ?>
							<tr>
								<td><?= $no; ?></td>
								<td><?= $aa['username'] ?></td>
								<td><?= $aa['nama'] ?></td>
								<td><?= $aa['level'] ?></td>
								<td>
									<a class="btn btn-sm btn-dark" onClick="return confirm('Yakin pengen hapus?')" href="<?= base_url('admin/user/hapus/' . $aa['id_user']) ?>">
										<i class="fas fa-trash-alt"></i>
									</a>
									<a class="btn btn-sm btn-warning" data-bs-toggle="modal" data-bs-target="#Modal2<?= $aa['id_user'] ?>">
										<i class="fas fa-pen"></i>
									</a>
									<div class="modal fade" id="Modal2<?= $aa['id_user'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
										<div class="modal-dialog" role="document">
											<form action="<?= site_url('admin/user/edit') ?>" method="post">
												<input type="hidden" name="id_user" value="<?= $aa['id_user'] ?>">
												<div class="modal-content">
													<div class="modal-header">
														<h5 class="modal-title f-b" id="modalCenterTitle">Edit User</h5>
														<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
													</div>
													<div class="modal-body">
														<div class="row">
															<div class="col mb-3">
																<label for="nameWithTitle" class="form-label">Nama</label>
																<input type="text" id="nameWithTitle" class="form-control" value="<?= $aa['nama'] ?>" name="nama">
															</div>
														</div>
														<div class="row g-2">
															<div class="col mb-0">
																<label for="emailWithTitle" class="form-label">Username</label>
																<input type="text" id="emailWithTitle" class="form-control" disabled value="<?= $aa['username'] ?>" name="username">
															</div>
															<div class="col mb-0">
																<label for="dobWithTitle" class="form-label">Password</label>
																<input type="password" id="dobWithTitle" class="form-control" disabled value="<?= $aa['password'] ?>" name="password">
															</div>
														</div>
													</div>
													<div class="modal-footer">
														<button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
														<button type="submit" class="btn btn-primary">Simpan</button>
													</div>
												</div>
											</form>
										</div>
									</div>
								</td>
							</tr>
						<?php $no++;
						} ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>