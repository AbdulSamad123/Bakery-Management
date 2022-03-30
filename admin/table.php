<td style="width:70px;"> 1 </td>
<td style="width:70px;">
<div class="row">
<div class="col-sm-12">
<select name="product_name" class="select2 form-control select2-multiple" multiple="multiple" style="width:100px;">
<option value="0">Select Product</option>
<?php $obj->stock();?>
</select>
</div>
</div>
</td>
<td>
<div class="row">
<div class="col-sm-12"> 
<input name="qty" type="text" class="form-control unit_price" id="unit_price" style="width:50px;">
</div>    
</div>
</td>
<td>
<div class="row">
<div class="col-sm-12">
<input name="stock" type="text" class=" form-control unit_price" id="unit_price"style="width:50px;">
</div>
</div>
</td>
<td>
<div class="row">
<div class="col-sm-12">
<input type="rate" class=" form-control unit_price" id="unit_price" style="width:50px;">
</div>
</div>
</td>
<td>
<div class="row">
<div class="col-sm-12">
<input type="unit" class=" form-control unit_price" id="unit_price" style="width:50px;">
</div>
</div>
</td>
<td>
<div class="row">
<div class="col-sm-12">
<input type="perbox" class=" form-control unit_price" id="unit_price" style="width:50px;">
</div>
</div>
</td>
<td>
<div class="row">
<div class="col-sm-12">
<input type="buying" class=" form-control unit_price" id="unit_price" style="width:50px;">
</div>
</div>
</td>
<td>
<div class="row">
<div class="col-sm-12">
<input type="selling" class=" form-control unit_price" id="unit_price" style="width:50px;">
</div>
</div>
</td>
<td>
<div class="row">
<div class="col-sm-12">
<input type="weight" class=" form-control unit_price" id="unit_price" style="width:50px;">
</div>
</div>
</td>
<td>
<div class="row">
<div class="col-sm-12">
<input type="gross" class=" form-control unit_price" id="unit_price" style="width:50px;">
</div>
</div>
</td>
<td>
<div class="row">
<div class="col-sm-12">
<input type="average" class=" form-control unit_price" id="unit_price" style="width:50px;">
</div>
</div>
</td>
<td>
<div class="row">
<div class="col-sm-12">
<input type="frt" class=" form-control unit_price" id="unit_price" style="width:50px;">
</div>
</div>
</td>
<td>
<div class="row">
<div class="col-sm-12">
<input type="tfrt" class=" form-control unit_price" id="unit_price" style="width:50px;">
</div>
</div>
</td>
<td>
<div class="row">
<div class="col-sm-12">
<input type="amount" class=" form-control unit_price" id="unit_price" style="width:50px;">
</div>
</div>
</td>
<td>
<div class="row">
<div class="col-sm-12">
<input type="tpt" class=" form-control unit_price" id="unit_price" style="width:50px;">
</div>
</div>
</td>


function reset_feilds(index = 1) {

var html = "";
html += '<tr id="row' + index + '" data-id="' + index + '" class="dynamic_row">';
html += '<td style="width:70px;"><input type="text" name="index[]" class="form-control index" value="' + index + '" readonly></td>';
html += '<td>';
html += '<div class="row">';
html += '<div class="col-sm-12">';
html += '<input type="number" class=" form-control stock" id="stock' + index + '" name="stock[]" placeholder="stock" min="1" data-id="' + index + '"> <input type="hidden"  name="thisstock[]" class="thisstock" id="thisstock' + index + '">';
html += '</div>';
html += '</div>';
html += '</td>';
html += '<td colspan="2">';
html += '<div class="row ">';
html += '<div class="col-sm-12">';
html += '<input type="number" class=" form-control unit_cost" id="unit_cost' + index + '" name="unit_cost[]" placeholder="unit_cost" min="1" data-id="' + index + '"><input type="hidden"  name="cost[]" class="cost" id="cost' + index + '" data-id="' + index + '" >';
html += '</div>';
html += '</div>';
html += '</td>';
html += '<td colspan="2">';
html += '<div class="row">';
html += '<div class="col-sm-12">';
html += '<input type="number" class=" form-control unit_price" id="unit_price' + index + '" name="unit_price[]" placeholder="unit_price" min="1" data-id="' + index + '" ><input type="hidden"  name="price[]" id="price' + index + '" class="price" data-id="' + index + '" >';
html += '</div>';
html += '</div>';
html += '</td>';
html += '<td>';
html += '<div class="row">';
html += '<div class="col-sm-12">';
html += '<input type="number" class=" form-control total_cost" id="total_cost' + index + '" name="total_cost[]" placeholder="total_cost" data-id="' + index + '" readonly><input type="hidden"  name="total[]" id="total' + index + '"  class="total" data-id="' + index + '" >';
html += '</div>';
html += '</div>';
html += '</td>';
html += ' <td><button id="' + index + '" type="button" class="btn btn-primary btn_addOrder"><i class="glyphicon glyphicon-plus "></i></button></td>';
html += '<tr>';
$(".list").html(html);



var html='';
        html+='<tr>';
        html+='<td><input type="hidden" class="form-control productcode" name="product_code[]" readonly></td>';
        html+='<td><select name="product_name[]" class="select2 form-control product_name" style="width:100px;" required><option value="">--Select Product--</option><?php $obj->stock();?></select></td>';
        html+='<td><input name="qty[]" type="text" class="form-control qty" style="width:50px;" readonly></td>';
        html+='<td><input name="stock[]" type="text" class="form-control stock" style="width:50px;" readonly></td>';
        html+='<td><input name="rate[]" type="text" class="form-control rate" style="width:50px;" readonly></td>';
        html+='<td><input name="unit[]" type="text" class="form-control unit" style="width:50px;" readonly></td>';
        html+='<td><input name="perbox[]" type="text" class="form-control perbox" style="width:50px;" readonly></td>';
        html+='<td><input name="buying[]" type="text" class="form-control buying" style="width:50px;" readonly></td>';
        html+='<td><input name="selling[]" type="text" class="form-control selling" style="width:50px;" readonly></td>';
        html+='<td><input name="weight[]" type="text" class="form-control weight" style="width:50px;" readonly></td>';
        html+='<td><input name="gross[]" type="text" class="form-control gross" style="width:50px;" readonly></td>';
        html+='<td><input name="avg[]" type="text" class="form-control avg" style="width:50px;" readonly></td>';
        html+='<td><input name="frt[]" type="text" class="form-control frt" style="width:50px;" readonly></td>';
        html+='<td><input name="tfrt[]" type="text" class="form-control tfrt" style="width:50px;" readonly></td>';
        html+='<td><input name="amt[]" type="text" class="form-control amt" style="width:50px;" readonly></td>';
        html+='<td><input name="tpt[]" type="text" class="form-control tpt" style="width:50px;" readonly></td>';
        html += ' <td><button name="remove" type="button" class="btn btn-danger removefeilds"><i class="fa fa-remove "></i></button></td>';   
        html+='<td><button type="button" name="remove" class="btn btn-danger btn-sm btn-remove"><i class="fa fa-remove"></i></button></td>'