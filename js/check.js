// JavaScript Document
$(function(){
	x=101;
	
	login=function(e){
		e.preventDefault();
		var pwd=$('#pwd').val(),
		usr=$('#usr').val(),
		url=$(this).closest('form').attr('action');
		$('#feedback').html('<center><img src="../images/r.gif" width="20px"></center>');
		$.post(url,{'usr':usr,'pwd':pwd},function(data){
			if(data==x){
				window.location=e.data.referer;
			}else{
				$('div #feedback').html(data);
				}
			});
		
		}
	
	addbud=function(event){
		event.preventDefault();
		var bdt=$('#bdt').val(),
		tel=$('#tel').val(),
		charge=$('#charge').val(),
		addr=$('#addr').val(),
		url=$(this).closest('form').attr('action');
		//alert(name);
		
		$('#feedback').html('<center><img src="../images/r.gif" width="20px">	Creating Account...</center>');
		$.post(url,{'addid':1,'bdt':bdt,'tel':tel,'charge':charge,'addr':addr},function(data){
			
				$('#feedback').html(data);
						
			});
		}
	
	memberpassport=function(event){
			event.preventDefault();
			var fdta=new FormData($('form:file')[0]);
			$.each($('#pfile')[0].files,function(i,file){
				fdta.append('file',file);
				});
				//fdta.serialize();
			
				$.ajax({
					url: '../process/uaskl.php',
           			type: 'POST',
            		data: fdta,
					contentType:false,
					processData:false,
					cache:false,
					beforeSend:function(evt){
						
							
								$('#feedback').html('<center><img src="../images/r.gif" width="20px"></center>');
								
						},
					error:function(){
						alert('An Error Occured, Try Again');
						},
            		success: function (data) {
						if(data==x){
							$('#feedback').empty().html('<b><img src="../images/r.gif" width="20px">&nbsp;<span style="color:green;">File Ready</span>:Waiting For Other Fields For Submission.</b>');
							
						}else{
							$('#feedback').html(data);
							}
					}
        			});
			}
	
	additem=function(event){
		event.preventDefault();
		
		var title=$('#title').val(),
		isbn=$('#isbn').val(),
		author=$('#author').val(),
		pbyr=$('#pbyr').val(),
		pbby=$('#pbby').val(),
		cls=$('#class').val(),
		sbcls=$('#sbclass').val(),
		url=$(this).closest('form').attr('action');
		//alert(name);
		if(typeof(sbcls)=='undefined'){
			$('#feedback').html('<center><img src="../images/cancel.png" width="14px">	Cannot Proceed, No Subclass Defined!</center>');
			}else{
		$('#feedback').html('<center><img src="../images/r.gif" width="20px">	Adding To Library...</center>');
			$.post(url,{'title':title,'isbn':isbn,'author':author,'pbyr':pbyr,'pbby':pbby,'class':cls,'subclass':sbcls},function(data){
					$('#feedback').html(data);
					setTimeout(function(){
						window.location='addtolibrary.php';
						},5000);		
				});
			}
		}
	
	verifycard=function(event){
		event.preventDefault();
		
		var cdr=$('#cdr').val(),
		url=$(this).closest('form').attr('action');
		
		$('#feedback').html('<center><img src="../images/r.gif" height="14px">	Checking Card Details ...</center>');
		
		$.post(url,{'cdr':cdr,'retrieveid':2},function(data){
			
				if(data==x){
						window.location="diary1.php";
				}else{
					
					$('#feedback').html('<center><img src="../images/cancel.png" width="14px">'+data+'</center>');	
						
					}
			
			});
		}

/************************End Function*************************************/


/* **********************|Binders|****************************************** */
	
	$('#sblogin').bind('click',{referer:'cpanel.php'},login);
	$('#sbaddbud').bind('click',addbud);
//	$('#pfile').bind('change',memberpassport);
//	$('#class').bind('click change',getsubclass);
//	$('#hfile').bind('change',adddoctolibrary);
	$('#sbverify').bind('click',verifycard);
//	$('#gsearch').bind('keyup',isearch);
//	$('#addclass').bind('click',addtocatalog);
//	$('p > a').bind('click',opensubclass);
//	$('#addsubclass').bind('click',addsubclass);
//	$('#exploreshelf').bind('click submit',shelf);
//	$('#right cc').on('click','a',removefromshelf);
//	$('#callno').bind('keyup',searchusingcallno);
//	$('#right cc').on('click','#bwbk',iborrow);
//	$('#acprq').bind('click',acceptrequest);
//	$('#dcrrq').bind('click',declinerequest);
//	$('#delbr').bind('click',returntolib);
	
	
	
});