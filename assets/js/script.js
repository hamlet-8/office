$(document).ready(function() {
	/*$('form').submit(function() {
		return false;
	});*/
	/*$('.sub').click(function() {
		myAjax('functions/send.php', $('#form_id').serialize(), function(e){alert(e)});
	});*/
	


	$('#agree').click(function() {
		if($('#agree').hasClass('active_aggree')) {
			$('#agree').removeClass('active_aggree');
		}else {
			$('#agree').addClass('active_aggree');
		}
	});
	$('.sub').click(function() {
		if($('#name').val().length <= 3 || $('#name').val().length >= 12) {
			$('#name').css({'border-bottom':'1px solid red'});
			$('.name_l').css({'color':'red'});
			return false;
		}else if($('#surname').val() < 3 || $('#surname').val() > 12) {
			$('#surname').css({'border-bottom':'1px solid red'});
			$('.surname_l').css({'color':'red'});
			return false;
		}else if($('#age').val() < 18 || $('#age').val() > 60) {
			$('#age').css({'border-bottom':'1px solid red'});
			$('.age_l').css({'color':'red'});
			return false;
		}
		if($('#agree').hasClass('active_aggree')) {

		}else {
			$('.ag').css({'color':'red'});	
			return false;
		}
				

	});

	
	function myAjax(url,data,success) {
		$.ajax({
			url:url,
			method:'POST',
			data:data,
			success:success
		});
	}


	/*data.php*/

	$('.ac').change(function() {
		if($(this).hasClass('active')) {
			console.log('ynrac chi');
			$(this).removeClass('active');

		}else {
			console.log('yntraca');
			$(this).addClass('active');
		}
	});

/*	$('.download_pdf').click(function() {
		let val = $('.active').parent().parent().text();
		myAjax('functions/pdf.php',{val:val},function(e){console.log(e)});
	});
*/
	// delete.php

	$('.del').click(function() {
		$(this).addClass('delete');	
		let d = $(this).parent().find('#myId').text();
		myAjax('functions/delete.php',{d:d},function() {$('.delete').parent().remove()});
	});

	$('.choose_delete').click(function() {
		for(let i = 0; i < $('.active_user').length; i++) {
			let d = $('.active_user').eq(i).parent().find('#myId').text();
			myAjax('functions/delete.php', {d:d}, function() {$('.active_user').parent().remove()});
		}
	});

	//window 

	$('.send_email').click(function() {
		$('.back').show();
		$('.window_send').show();
	});
	$('.download_pdf').click(function() {
		$('.back').show();
		$('.window_link_pdf').show();
	});
	$('.back').click(function() {
		$('.back').hide();
		$('.window_send').hide();
		$('.window_link_pdf').hide();
		myAjax('functions/delete_pdf.php');
	});
	$('.window_link_pdf_a').click(function() {
		setTimeout(function() {
			myAjax('functions/delete_pdf.php');
		}, 100);
		
	});

	// $(window).on('beforeunload', function(){

	// }


	// choose_user

	$('.choose_user').click(function() {
		if($(this).hasClass('active_user')) {	
			$(this).removeClass('active_user');
			$(this).find('.ac').hide();
			//console.log($(this).parent());
		}else {
			$(this).addClass('active_user');
			$(this).find('.ac').show();
			//console.log($(this).parent().text());
		}
	});

	$('.all_choose_user').click(function() {
		if($('.choose_user').hasClass('active_user')) {
			$('.choose_user').removeClass('active_user').find('.ac').hide();
		}else {
			$('.choose_user').addClass('active_user').find('.ac').show();
		}	
	});

	// send email

	$('.window_sub').click(function() {
		let em = $('.em').val();
		let ch = $('.active_user').parent().text();
		myAjax('functions/send_email.php', {em: em, ch: ch}, function() { alert('vso axperys)')});
	});

	// pdf

	$('.download_pdf').click(function() {
		let c = $('.active_user').parent().text();
		myAjax('functions/pdf.php', {c: c}, function() {console.log('ujex')});
	});



});

