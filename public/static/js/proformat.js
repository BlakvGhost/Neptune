!function(t) {
    "use strict"
    var o = function() {};
    o.prototype.init = function() {
    	let fieldContainer = t('.fieldToPrint');
    	o.prototype.init.proformatPreview = function(row){
    		t('#voirFacureBtn').click(function(){
    			t('#modalClientName').text(t('#id_names').val());
    			t('#modalClientContact').text(t('#id_contact').val());
    			t('#proformatGroup').html(null);
    			let ttu = 0;
    			t(row).each(function(p,e){
    				let text = t('#proformatGroup').html(),fill = t(this).find('.suggests');
    				let totalUnit = t(fill).data('bht-price')*t(this).find("input[type='number']").val();
    				ttu += totalUnit;
    				t('#proformatGroup').html(text + `<tr>
                            <td>${p+1}</td>
                            <td>${t(this).find("input[type='text']").val()}</td>
                            <td>${t(fill).data('bht-unit')}</td>
                            <td>${t(this).find("input[type='number']").val()}</td>
                            <td aria-filter data-val="${t(fill).data('bht-price')}"></td>
                            <td aria-filter data-val="${totalUnit}"></td>
                    </tr>`);
    			});
          t('#displayTotalPrice').attr('data-val',ttu);
          Utils.print();
    		});
    	};
    	o.prototype.init.field = function(){
    		const text = $('#fieldsContainer').html();
    		function deleteRow(row){t(row).each(function(p,e){t(this).find('button').click(function(){t(e).remove();o.prototype.init.proformatPreview(t('.fieldToPrint'));});});};
		    function numberedField(DeletedRow){t("#fieldsContainer input:text").each(function(p,e){t(this).attr('placeholder',`Entrer le nom du produit ${p+1}`);});deleteRow(DeletedRow);};
		    t('.card').each(function(e,k){
		    	$(this).find('#creatMoreField').click(function(){
			    	let div = document.createElement('div');
			    	t(div).html(t(k).find(fieldContainer).html()).addClass('row my-3 fv-m-0 row-cols-2 fieldToPrint');
			        $(k).find('#fieldsContainer').append(t(div));
			        numberedField(div);
			        o.prototype.init.proformatPreview(t('.fieldToPrint'));
			        Utils.asy.prototype.init.suggestion();
		    	});
		    })
			return 0;
    	}();
    	o.prototype.init.proformatPreview(t('.fieldToPrint'))
    },
    o.prototype.init();
	Utils.prototype.proformat = o.prototype.init;
}(window.jQuery)
