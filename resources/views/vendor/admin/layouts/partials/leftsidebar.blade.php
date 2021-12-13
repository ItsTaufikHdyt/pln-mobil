<div class="left-side-bar">
	<div class="brand-logo">
		<a href="index.html">
			<img src="{{asset('admin/vendors/images/deskapp-logo.svg')}}" alt="" class="dark-logo">
			<img src="{{asset('admin/vendors/images/deskapp-logo-white.svg')}}" alt="" class="light-logo">
		</a>
		<div class="close-sidebar" data-toggle="left-sidebar-close">
			<i class="ion-close-round"></i>
		</div>
	</div>
	<div class="menu-block customscroll">
		<div class="sidebar-menu">
			@if(Auth::user()->role_id == 1)
			<ul id="accordion-menu">
				<li>
					<a href="#" class="dropdown-toggle no-arrow">
						<span class="micon dw dw-invoice"></span><span class="mtext">Peminjaman</span>
					</a>
				</li>
				<li class="dropdown">
					<a href="javascript:;" class="dropdown-toggle">
						<span class="micon dw dw-house-1"></span><span class="mtext">User</span>
					</a>
					<ul class="submenu">
						<li><a href="{{Route('admin.user')}}">Data Pegawai</a></li>
						<li><a href="{{Route('admin.atasan')}}">Data Atasan</a></li>
						<li><a href="{{Route('admin.supir')}}">Data Supir</a></li>
					</ul>
				</li>
				<li>
					<a href="#" class="dropdown-toggle no-arrow">
						<span class="micon dw dw-invoice"></span><span class="mtext">Mobil</span>
					</a>
				</li>
			</ul>
			@endif
			@if(Auth::user()->role_id == 2)
			<ul id="accordion-menu">
				<li>
					<a href="#" class="dropdown-toggle no-arrow">
						<span class="micon dw dw-invoice"></span><span class="mtext">Peminjaman</span>
					</a>
				</li>
			</ul>
			@endif
		</div>
	</div>
</div>
<div class="mobile-menu-overlay"></div>