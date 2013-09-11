$(document).ready(function() {
	$(".gross").on('keyup',updateDatGross);
	$(".thenet").on('keyup',updateDatNet);
});
function updateDatGross() {
	var tr = $(this).parent().parent().prev().find("select").val();
	var value = $(this).val();
	if (tax_rates[tr] > 0) {
	    value = value * ((tax_rates[tr] / 100) + 1);
	 }
	$(this).parent().parent().parent().find('input[type=text].thenet').val(value);
}
function updateDatNet() {
	var tr = $(this).parent().parent().prev().prev().find("select").val();
	var value = $(this).val();
	if (tax_rates[tr] > 0) {
	    value = value / ((tax_rates[tr] / 100) + 1);
	 }
	$(this).parent().parent().parent().find('input[type=text].gross').val(value);
}
function duplicateForm () {
	var count = $(".pform").length;
	var textareaVals = [];
	var origin = $(".pform").last();
	if(count == 1)
	{
		origin.find("input").each(function () {
			var name = $(this).attr("name");
			$(this).attr("name","1-"+name);
		});
		origin.find("textarea").each(function () {
			var name = $(this).attr("name");
			$(this).attr("name","1-"+name);
			textareaVals.push($(this).val());
		});
	}else
	{
		origin.find("textarea").each(function () {
			textareaVals.push($(this).val());
		});
	}

	var myform = $(".pform").last().clone();
		myform.find("input").each(function () {
			var name = $(this).attr("name").split("-");
			$(this).attr("name",(count+1)+"-"+name[1]);				if (name == count + ",products_model"){				ref = $(this).val();			    ref = ref.split("-");				ref_temp = ref[2];				ref_temp = parseFloat(ref_temp) + 1;				ref = ref[0]+'-'+ref[1]+'-'+ref_temp;								$(this).val(ref);			}
		});
		myform.find("textarea").each(function (i) {
			var name = $(this).attr("name").split("-");
			$(this).val(textareaVals[i]);
			$(this).attr("name",(count+1)+"-"+name[1]);
		});		
	$(".pform").last().parent().append("<hr>");
	$(".pform").last().parent().append(myform);
	$(".gross").unbind().on('keyup',updateDatGross);
	$(".thenet").unbind().on('keyup',updateDatNet);

}