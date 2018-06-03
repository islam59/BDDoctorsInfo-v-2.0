$(document).ready(function() {
	var max_fields      = 10; //maximum input boxes allowed
	var wrapper         = $(".input_fields_wrap"); //Fields wrapper
	var add_button      = $(".add_field_button"); //Add button ID
		    
	var x = 1; //initlal text box count
	$(add_button).click(function(e){ //on add input button click
		e.preventDefault();
		if(x < max_fields){ //max input box allowed
		    x++; //text box increment
		    $(wrapper).append('<div class="form-group input_fields_wrap"><label for="name">Product Name</label> # <input type="text" name="productname[]" class="form-control" id="name" placeholder="Select Product">&nbsp<label for="amount"> Amount</label> # <input type="text" name="amount[]" class="form-control" id="amount" placeholder="Amount">&nbsp<label for="price"> Price</label> # <input type="text" name="price[]" class="form-control" id="price" placeholder="Price">&nbsp <a href="#" class="btn btn-danger remove_field">X</a><br/><br/></div>'); //add input box
		    }
	});
		    
	$(wrapper).on("click",".remove_field", function(e){ //user click on remove text
		e.preventDefault(); $(this).parent('div').remove(); x--;
	})
});