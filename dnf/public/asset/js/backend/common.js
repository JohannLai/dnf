/**
 * ajax删除.
 *
 * @param  string url
 * @param  string tableId
 * @param  string notice
 * @access public
 * @return void
 */
function ajaxDelete(url, tableId, id)
{
    bootbox.confirm({
        message: "Are you sure?",
        callback: function(result) {
            if (result) {
                var csrf = $('input[name="_token"]').val();
                $.post(url, {id: id, _token: csrf }, function (data) {
                    console.log(id);
                    console.log(csrf);
                    data = $.parseJSON(data);
                    if (data.status == 'success') {
                        var table = $('#' + tableId).DataTable();
                        table.row($('#'+tableId+'-data-id-' + id)).remove().draw();
                        $('#'+tableId+'_wrapper .table-caption').text('Some header text');
                        $('#'+tableId+'_wrapper .dataTables_filter input').attr('placeholder', 'Search...');
                        $('#'+tableId+'_wrapper .dataTables_empty').text('No data !');
                    } else {
                        bootbox.alert({
                            message: data.message,
                            className: "bootbox-sm"
                        });
                    }
                });
            }
        },
        className: "bootbox-sm"
    });
}
/**
 * ajax改变状态.
 *
 * @param  string url
 * @param  string tableId
 * @param  string notice
 * @access public
 * @return void
 */
function ajaxChange(url, buttonId, id)
{
    bootbox.confirm({
        message: "Are you sure?",
        callback: function(result) {
            if (result) {
                var csrf = $('input[name="_token"]').val();
                $.post(url, {id: id, _token: csrf }, function (data) {
                    console.log(id);
                    console.log(csrf);
                    data = $.parseJSON(data);
                    if (data.status == 'success') {
                        $('#' + buttonId).text(data.data);
                    } else {
                        bootbox.alert({
                            message: data.message,
                            className: "bootbox-sm"
                        });
                    }
                });
            }
        },
        className: "bootbox-sm"
    });
}


/*
 * 权限全选
 */
function selectAllPermission(checker, scope, type)
{
    if(scope) {
        if(type == 'button') {
            $('#' + scope + ' input').each(function() {
                $(this).attr("checked", true)
            });
        }
        else if(type == 'checkbox') {
            $('#' + scope + ' input').each(function() {
                $(this).attr("checked", checker.checked)
            });
         }
    } else {
        if(type == 'button') {
            $('input:checkbox').each(function() {
                $(this).attr("checked", true)
            });
        } else if(type == 'checkbox') {
            $('input:checkbox').each(function() {
                $(this).attr("checked", checker.checked)
            });
        }
    }
}

/**
 * 图片上传，弹出ckfinder
 */
function uploadPic(scope)
{
    if (scope) {
        CKFinder.popup(null, null, null, function (url) {
            SetFileField(scope, url);
        });
    }
}

/**
 * 设置图片路径
 */
function SetFileField(scope, url)
{
    $('#'+scope).attr("src", url);
    $('#'+scope+"-url").value = url;
}