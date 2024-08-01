<div class="sidebar sidebar-style-2">
	<div class="sidebar-wrapper scrollbar scrollbar-inner">
		<div class="sidebar-content">
			<div class="user">
				<div class="avatar-sm float-left mr-2">
					<img src="<?= site_url('assets/atlantis');?>/assets/img/profile.jpg" alt="..." class="avatar-img rounded-circle">
				</div>
				<div class="info">
					<a data-toggle="collapse" href="#collapseExample" aria-expanded="true">
						<span>
						<?= $this->session->userdata('nama');?>
							<span class="user-level"><?= $this->session->userdata('level');?></span>
							<span class="caret"></span>
						</span>
					</a>
					<div class="clearfix"></div>

					<div class="collapse in" id="collapseExample">
						<ul class="nav">
							<li>
								<a href="<?= site_url('auth/logout');?>">
									<span class="link-collapse">Logout</span>
								</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
			<ul class="nav nav-primary">
				<?php $menu = $this->uri->segment(2);?>
				<li class="nav-item <?php if($menu=='home'){ echo "active"; } ?>">
					<a href="<?= site_url('admin/home') ?>" class="menu-link">
						<i class="fas fa-home"></i>
						<p>Dashboard</p>
					</a>
				</li>
				<?php if($this->session->userdata('level')=='Admin'){?>
					<li class="nav-item <?php if($menu=='carausel'){ echo "active"; } ?>">
						<a href="<?= site_url('admin/carausel') ?>" class="menu-link">
							<i class="fas fa-exchange-alt"></i>
							<p>Carausel</p>
						</a>
					</li>
				<?php } ?>
				<?php if($this->session->userdata('level')=='Admin'){?>
					<li class="nav-item <?php if($menu=='kategori'){ echo "active"; } ?>">
						<a href="<?= site_url('admin/kategori') ?>" class="menu-link">
							<i class="fas fa-th"></i>
							<p>Kategori Konten</p>
						</a>
					</li>
				<?php } ?>
				<li class="nav-item <?php if($menu=='konten'){ echo "active"; } ?>">
					<a href="<?= site_url('admin/konten') ?>" class="menu-link">
						<i class="fas fa-newspaper"></i>
						<p>Konten</p>
					</a>
				</li>
				<?php if($this->session->userdata('level')=='Admin'){?>
					<li class="nav-item <?php if($menu=='user'){ echo "active"; } ?>">
						<a href="<?= site_url('admin/user') ?>" class="menu-link">
							<i class="fas fa-user-alt"></i>
							<p>User</p>
						</a>
					</li>
				<?php } ?>
				<?php if($this->session->userdata('level')=='Admin'){?>
					<li class="nav-item <?php if($menu=='konfigurasi'){ echo "active"; } ?>">
						<a href="<?= site_url('admin/konfigurasi') ?>" class="menu-link">
							<i class="fas fa-pen-square"></i>
							<p>Konfigurasi</p>
						</a>
					</li>
				<?php } ?>
				<li class="nav-item <?php if($menu=='galeri'){ echo "active"; } ?>">
					<a href="<?= site_url('admin/galeri') ?>" class="menu-link">
						<i class="fas fa-image"></i>
						<p>Galeri</p>
					</a>
				</li>
				<li class="nav-item <?php if($menu=='saran'){ echo "active"; } ?>">
					<a href="<?= site_url('admin/saran') ?>" class="menu-link">
						<i class="fas fa-envelope"></i>
						<p>Saran</p>
					</a>
				</li>
			</ul>
		</div>
	</div>
</div>