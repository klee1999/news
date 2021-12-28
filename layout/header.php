<nav class="navbar navbar-inverse navbar-fixed-top fixed-top  header-scrolled" role="navigation">
    <ul class="navbar-header ">
        <li class="nav-item">
            <p class="name">
                <a id="header" href="index.php?page=home" id="name"><span> HƯNG YÊN </span></a>
            </p>
            <p class="credit">
                <a id="header" href="index.php?page=home" id="title"><span> PHÒNG CHỐNG DỊCH COVID-19 </span></a>
            </p>
        </li>

    </ul>

    <ul class="nav navbar-right top-nav" >
        <li class="nav-item " style="cursor: pointer" id="search">
            <svg style=" color: #fff;margin-top: 9px;" xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                fill="currentColor" class="bi bi-search" onClick="hienthiform('box-tim-kiem');" viewBox="0 0 16 16">
                <path
                    d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
            </svg>
        </li>
        <li class="nav-item " id="hotline">

            <a class="nav-link" style="color:#fff;margin-top: 5px;">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                    class="bi bi-telephone-fill test" viewBox="0 0 16 16">
                    <path fill-rule="evenodd"
                        d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z" />
                </svg>
                <span>Hotline</span>
            </a>
        </li>
        <button onclick="copyToClipboard('#p1')" id="btn-hotline">
            <li class="nav-item active">
                <a class="nav-link" href="#" id="hotline">
                    <span class="Hotline">
                        <span class="Hotline-1">Bộ Y tế :</span>
                        <span id="p1" class="Hotline-2" style="font-weight: bold;">19009095</span>
                    </span>
                </a>
            </li>
        </button>
        <button onclick="copyToClipboard('#p2')" id="btn-hotline">
            <li class="nav-item active" onclick="copyToClipboard('#p2')">
                <a class="nav-link" href="#" id="hotline">
                    <span class="Hotline">
                        <span class="Hotline-1">Hưng Yên :</span>
                        <span id="p2" class="Hotline-2" style="font-weight: bold;">19212095</span>
                    </span>
                </a>
            </li>
        </button>
    </ul>
    
</nav>
<div id="box-tim-kiem">
    <form action="index.php?page=search" method="POST">
        <label class="d-none d-lg-block">Nhập tiêu đề bài viết cần tìm:</label>
        <input name="keyw" type="text" id="text-box-tim-kiem" placeholder="Tìm kiếm bài viết..."><br>
        <button name="submit_search" type="submit" id="nut-tim-kiem"><svg xmlns="http://www.w3.org/2000/svg" width="20"
                height="20" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                <path
                    d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
            </svg></button>
        <a onClick="dongform('box-tim-kiem')" id="nut-thoat-tim-kiem" title="Đóng">
            <svg
                xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-x"
                viewBox="0 0 16 16">
                <path
                    d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z" />
            </svg>
    </form>
</div>
