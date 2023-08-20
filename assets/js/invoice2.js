$(document).ready(function(){
    // selecting all rows
    $(document).on('click', '#checkAll', function() {           
      $(".itemRow").prop("checked", this.checked);
    }); 

    // selecting single row
    $(document).on('click', '.itemRow', function() {    
      if ($('.itemRow:checked').length == $('.itemRow').length) {
        $('#checkAll').prop('checked', true);
      } else {
        $('#checkAll').prop('checked', false);
      }
    });  
    // counting rows
    var count = $(".itemRow").length;

    // adding rows
    $(document).on('click', '#addRows', function(){
      count++;
      var htmlRows = '';
      htmlRows += '<tr id="rows">';
      htmlRows += '<td class="text-center"><input type="checkbox" class="form-control itemRow" style="width: 15px; height: 15px;"></td>';          
      htmlRows += '<td class="p-2"><input type="text" name="title[]" id="title_'+count+'" class="form-control" autocomplete="off"></td>';
      htmlRows += '<td class="p-2"><input type="number" name="amount[]" id="amount_'+count+'" class="form-control rate" autocomplete="off"></td>';          
      htmlRows += '<td class="p-2"><input type="text" name="rate[]" id="rate_'+count+'" class="form-control" autocomplete="off"></td>'; 
      htmlRows += '<td class="p-2"><input type="number" name="total[]" id="total_'+count+'" class="form-control amount" autocomplete="off"></td>';
      htmlRows += '</tr>';
      $('#invoiceItem').append(htmlRows);
    });

    // removing rows
    $(document).on('click', '#removeRows', function(){
      $(".itemRow:checked").each(function() {
        $(this).closest('tr').remove();
      });
      $('#checkAll').prop('checked', false);
      calculateTotal();
    }); 

    // calculating total
    $(document).on('blur', "[id^=total_]", function(){
      calculateTotal();
    });

    $(document).on('blur', "#discount", function(){
      calculateDiscount();

    });

});

  
function calculateTotal(){
  var subTotal = 0; 
  
  $("[id^='total_']").each(function() {
    var id = $(this).attr('id');
    id = id.replace("total_",'');
    var total = $('#total_'+id).val();
    // var quantity = 1;
    // var total = parseInt(amount*quantity);
    subTotal += parseInt(total) ;     
    $('#subTotal').val(parseFloat(subTotal));
    var totalAmount = subTotal;
    $('#totalAmount').val(parseFloat(totalAmount));
  });
}

function calculateDiscount(){
  var subTotal = $('#subTotal').val();
  var discount = $('#discount').val();
  var totalAmount = subTotal - discount;
      $('#totalAmount').val(parseFloat(totalAmount));
}