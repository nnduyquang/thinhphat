integratedCKEDITOR('description-product',height=600);
integratedCKEDITOR('seo-description-product',height=200);
if ($('#btnBrowseImageSanPham').length) {
    var button1 = document.getElementById('btnBrowseImageSanPham');
    button1.onclick = function () {
        selectFileWithKCFinder('pathImageSanPham','showHinhSanPham');
    }
};