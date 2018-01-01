integratedCKEDITOR('description-catalogue',height=200);
integratedCKEDITOR('content-catalogue',height=800);
integratedCKEDITOR('seo-description-catalogue',height=200);
if ($('#btnBrowseImageCatalogue').length) {
    var button1 = document.getElementById('btnBrowseImageCatalogue');
    button1.onclick = function () {
        selectFileWithKCFinder('pathImageCatalogue','showHinhCatalogue');
    }
};