integratedCKEDITOR('description',height=200);
integratedCKEDITOR('seo-description',height=200);
if ($('#btnBrowseImageLoaiSanPham').length) {
    var button1 = document.getElementById('btnBrowseImageLoaiSanPham');
    button1.onclick = function () {
        selectFileWithKCFinder('pathImageLoaiSanPham','showHinhLoaiSanPham');
    }
};