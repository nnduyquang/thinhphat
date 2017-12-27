var token = $('meta[name="csrf-token"]').attr('content');
function getBaseURL() {
    var url = location.href;  // entire url including querystring - also: window.location.href;
    var baseURL = url.substring(0, url.indexOf('/', 14));
    if (baseURL.indexOf('http://localhost') != -1) {
        // Base Url for localhost
        var url = location.href;  // window.location.href;
        var pathname = location.pathname;  // window.location.pathname;
        var index1 = url.indexOf(pathname);
        var index2 = url.indexOf("/", index1 + 1);
        var baseLocalUrl = url.substr(0, index2);
        return baseLocalUrl + "/";
    }
    else {
        // Root Url for domain name
        return baseURL + "/";
    }
}

function selectFileWithKCFinder(elementPath, showHinhId) {
    window.KCFinder = {
        callBack: function (url) {
            var output = document.getElementById(elementPath);
            output.value = url;
            $('#' + showHinhId).show();
            $('#' + showHinhId).fadeIn("fast").attr('src', url);
            window.KCFinder = null;
        }
    };
    window.open(getBaseURL() + 'js/kcfinder/browse.php?type=images', 'kcfinder_textbox',
        'status=0, toolbar=0, location=0, menubar=0, directories=0, ' +
        'resizable=1, scrollbars=0, width=800, height=600'
    );
    if ($('#' + elementPath).val() == '')
        $('#' + showHinhId).hide();
    else
        $('#' + showHinhId).show();
}

function integratedCKEDITOR(elementID, height) {
    if ($('#' + elementID).length) {
        CKEDITOR.replace(elementID, {
            height: height,
            language: 'vi',
            format_tags: 'p;h1;h2;h3;pre',
            filebrowserBrowseUrl: '../../js/kcfinder/browse.php?type=files',
            filebrowserImageBrowseUrl: '../../js/kcfinder/browse.php?type=images',
            filebrowserFlashBrowseUrl: '../../js/kcfinder/browse.php?type=flash',
            filebrowserUploadUrl: '../../js/kcfinder/upload.php?type=files',
            filebrowserImageUploadUrl: '../../js/kcfinder/upload.php?type=images',
            filebrowserFlashUploadUrl: '../../js/kcfinder/upload.php?type=flash'
        });
    }
}