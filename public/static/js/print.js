$(document).ready(function(){
  Utils.print = function(){
		function formatPrice(){
	        $('table td,.filter').each(function(e,a){
	            let text = '';
	            if (a.hasAttribute('aria-filter')){
	                let x = this.getAttribute('data-val') ?? '';
									let y = Math.ceil(x.length / 3);
	                x = x.split('').reverse().join('');
	                for (let i = 1; i <= y; i++) text += x.slice((3 * i) - 3, 3 * i).concat(' ');
	                text = text.split('').reverse().join('');
	                $(this).text(text + " FCFA");
	            }
	        });
	    };
		formatPrice();
		const tableTitle = $('#contain').attr('aria-description');
		let otherHeader = `<div class="w-100 my-3 text-center"><h5>${tableTitle.toUpperCase()}</h5></div><div><h6>Date: ${new Date().toLocaleString()}</h6></div></div>`
		let factureHeader = `<div class="my-4">
				<div class="row my-3">
				<div class="col col-6 mx-3 my-3 text-center border overflow-hidden rounded">
						<div class="fw-bold border-bottom">
								<h5 class="fw-bold m-0 py-2">${tableTitle.toUpperCase()}</h4>
						</div>
						<div class="border-top fw-bold">
								<h5 class="fw-bold m-0 py-2">N*002_27/06/22_AY/EL</h4>
						</div>
				</div>
				</div>
				<div class="container-fluid my-3">
						<div class="row row-cols-2">
								<div class="text-center col col-6">
										<h5>${new Date().toDateString()}</h5>
								</div>
								<div class="col col-6">
										<h4 class="text-decoration-underline fw-bold">DESTINATAIRE</h4>
										<p><span class="fw-bold text-decoration-underline fst-italic">Nom : </span>&nbsp;&nbsp; ${$('#id_names').val()}</p>
										<p><span class="fw-bold text-decoration-underline fst-italic">Adresse : </span>&nbsp;&nbsp; Natitingou</p>
										<p><span class="fw-bold text-decoration-underline fst-italic">Tel : </span>&nbsp;&nbsp; ${$('#id_contact').val()}</p>
								</div>
						</div>
				</div>`
		let facturefooter = `<div class="container-fluid position-absolute bottom-0 start-0">
			<div class="row row-cols-2 rounded p-2 border overflow-hidden">
				<div class="col col-6 text-center mx-auto">
					<h5>RCCM RB/NAT/2020-B-627</h5>
					<h5>IFU N* 3202112775973</h5>
					<h5>ECOBANK: N* 111116137001</h5>
				</div>
				<div class="border-start col col-6 text-center mx-auto">
					<h5>BP: 149 Natitingou - BENIN</h5>
					<h5>TEL: +229 60 96 88 88/69 15 88 88</h5>
					<h5>WHATSAPP : +229 97 37 60 87</h5>
				</div>
			</div>
		</div>`
    let header = $('#contain').data('type') === 'facture' ? factureHeader : otherHeader;
		let footer = $('#contain').data('type') === 'facture' ? facturefooter : null;
    const text = `<div id="tablePrint"><div class="my-2"><div class="container-fluid"><div class="row row-cols-2"><div class="col col-6 align-self-center"><img src="/static/img/logo-final.png" class="m-auto" style="height: 90px;width: 80%;"></div>
    <div class="col col-6 text-center"><h5>ELECTRICITE</h5><h5>ENERGIE SOLAIRE</h5><h5>EFFICACITE ENERGETIQUE</h5><h5>BP: 149 Natitingou - BENIN</h5><h5>TEL: +229 60 96 88 88/69 15 88 88</h5><h5>Email: powerdany2012@gmail.com</h5></div>
    </div></div>${header}<div class="table-responsive">${$('#printableTable').html()}</div></div>${footer}`;
	$('#btn-print,.btn-print').click(function(){
	   $('#contain').html(text).find('.noprint').detach();;
	   printJS({printable: 'tablePrint', type: 'html',css: '/static/vendors/bootstrap/bootstrap.min.css',scanStyles: false,documentTitle:"BHT SARL"});
	   setTimeout(()=>{
	   	$('#tablePrint').detach();
	   },5000);
	});
	}
	Utils.print();
})
