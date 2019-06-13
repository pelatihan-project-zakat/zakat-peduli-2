<!-- LEFT SIDEBAR -->
<div id="sidebar-nav" class="sidebar">
    <div class="sidebar-scroll">
        <nav>
            <ul class="nav">
                <li><a href="{{ route('admin.index') }}" class="active"><i class="lnr lnr-home"></i> <span>Dashboard</span></a></li>
                <li><a href="{{ route('program.index') }}" class=""><i class="lnr lnr-alarm"></i> <span>Program Yayasan</span></a></li>
                <li><a href="{{ route('mustahiq.index') }}" class=""><i class="lnr lnr-chart-bars"></i> <span>Data Mustahiq</span></a></li>
                <li><a href="{{ route('bank.index') }}" class=""><i class="lnr lnr-chart-bars"></i> <span>Data Metode Bayar Bank</span></a></li>
                <li><a href="{{ route('admin.user.index') }}" class=""><i class="lnr lnr-cog"></i> <span>Data User</span></a></li>
                <li>
                    <a href="#subPages" data-toggle="collapse" class="collapsed"><i class="lnr lnr-file-empty"></i> <span>Data Transaksi</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
                    <div id="subPages" class="collapse ">
                        <ul class="nav">
                            <li><a href="{{ route('transaction.index') }}" class="">Transaksi Belum Diperiksa</a></li>
                            <li><a href="{{ route('admin.transaction.success') }}" class="">Transaksi Sukses</a></li>
                            <li><a href="{{ route('admin.transaction.failed') }}" class="">Transaksi Ditolak</a></li>
                        </ul>
                    </div>
                </li>
                {{--                 
                
                <li><a href="tables.html" class=""><i class="lnr lnr-dice"></i> <span>Tables</span></a></li>
                <li><a href="typography.html" class=""><i class="lnr lnr-text-format"></i> <span>Typography</span></a></li>
                <li><a href="icons.html" class=""><i class="lnr lnr-linearicons"></i> <span>Icons</span></a></li> --}}
            </ul>
        </nav>
    </div>
</div>
<!-- END LEFT SIDEBAR -->