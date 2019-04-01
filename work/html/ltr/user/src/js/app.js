


var SmartMultiFiled = (function(){
    var rowcount, html, addBtn, tableBody;

    addBtn = $("#addNew");
    rowcount = $("#autocomplete_table tbody tr").length+1;
    tableBody = $("#autocomplete_table tbody");


    function formHtml() {
        html = '<tr id="row_'+rowcount+'">';
        html += '<th id="delete_'+rowcount+'" scope="row" class="delete_row"><img src="./src/images/minus.svg" alt=""></th>';
        html += '<td>';
        html += '<input type="text" data-type="sparename" name="sparename[]" id="sparename_'+rowcount+'" class="form-control autocomplete_txt" autocomplete="off">';
        html += '</td>';
        html += '<td>';
        html += '<input type="text" data-type="spareno" name="spareno[]" id="spareno_'+rowcount+'" class="form-control autocomplete_txt" autocomplete="off">';
        html += '</td>';
        html += '<td>';
        html += '<input type="text" data-type="gstin" name="gstin[]" id="gstin_'+rowcount+'" class="form-control autocomplete_txt" autocomplete="off">';
        html += '</td>';

        html += '<td>';
        html += '<input type="text" data-type="hsn" name="hsn[]" id="hsn_'+rowcount+'" class="form-control autocomplete_txt" autocomplete="off">';
        html += '</td>';
        html += '<td>';
        html += '<input type="text" data-type="spareamount" name="spareamount[]" id="spareamount_'+rowcount+'" class="form-control autocomplete_txt" autocomplete="off">';
        html += '</td>';
        html += '</tr>';
        rowcount++;
        return html;
    }
    function getFieldNo(type){
        var fieldNo;
        switch (type) {
            case 'sparename':
                fieldNo = 0;
                break;
            case 'spareno':
                fieldNo = 1;
                break;
            case 'gstin':
                fieldNo = 2;
                break;
            case 'hsn':
                fieldNo = 3;
                break;
            case 'spareamount':
                fieldNo = 3;
                break;
            default:
                break;
        }
        return fieldNo;
    }

    function handleAutocomplete() {
        var type, fieldNo, currentEle; 
        type = $(this).data('type');
        fieldNo = getFieldNo(type);
        currentEle = $(this);

        if(typeof fieldNo === 'undefined') {
            return false;
        }

        $(this).autocomplete({
            source: function( data, cb ) {	 
                $.ajax({
                    url:'ajax.php',
                    method: 'GET',
                    dataType: 'json',
                    data: {
                        name:  data.term,
                        fieldNo: fieldNo
                    },
                    success: function(res){
                        var result;
                        result = [
                            {
                                label: 'There is matching record found for '+data.term,
                                value: ''
                            }
                        ];

                        if (res.length) {
                            result = $.map(res, function(obj){
                                var arr = obj.split("|");
                                return {
                                    label: arr[fieldNo],
                                    value: arr[fieldNo],
                                    data : obj
                                };
                            });
                        }
                        cb(result);
                    }
                });
            },
            autoFocus: true,	      	
            minLength: 1,
            select: function( event, ui ) {
                var resArr, rowNo;
                
                
                rowNo = getId(currentEle);
                resArr = ui.item.data.split("|");	
                
            
                $('#sparename_'+rowNo).val(resArr[0]);
                $('#spareno_'+rowNo).val(resArr[1]);
                $('#gstin_'+rowNo).val(resArr[2]);
                $('#hsn_'+rowNo).val(resArr[3]);
                $('#spareamount_'+rowNo).val(resArr[4]);
            }		      	
        });
    }

    function getId(element){
        var id, idArr;
        id = element.attr('id');
        idArr = id.split("_");
        return idArr[idArr.length - 1];
    }

    function addNewRow() { 
        tableBody.append( formHtml() );
    }

    function deleteRow() { 
        var currentEle, rowNo;
        currentEle = $(this);
        rowNo = getId(currentEle);
        $("#row_"+rowNo).remove();
    }

    function registerEvents() {
        addBtn.on("click", addNewRow);
        $(document).on('click', '.delete_row', deleteRow);
        $(document).on('focus','.autocomplete_txt', handleAutocomplete);
    }
    function init() {
        registerEvents();
    }

    return {
        init: init
    };
})();



$(document).ready(function(){
    SmartMultiFiled.init();
});