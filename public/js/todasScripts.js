
			/* function changeImage() {
     			
            		document.getElementById("cima").src = "/images/jesus.jpg";
        			//alert('yaaaa');
        		}
			*/

			function changeImage(source) {
     				
            		document.getElementById("cima").src = source;
        			
        		}






/*
        	function uploadPic() {
        		$('#upload').modal('show');

        	}
    	
*/
		function uploadPic() {
				$('#upload').modal('show');	

        		$('#upload').on('show',function(){
        			$("modal-body #produto_id").val('He is coming back');	
        		});
       			

        	}

       $(document).on("click", ".uppic", function () {
	     var produtoId = $(this).data('id');
	     $(".modal-body #produto_id").val( produtoId );
	     // As pointed out in comments, 
	     // it is superfluous to have to manually call the modal.
	     // $('#addBookDialog').modal('show');
	});

       function addcategoria(){
       	$('#modalcategoria').modal('show');
       }

       $(document).on("click", ".uppicserve", function () {
       var servicoId = $(this).data('id');
       $(".modal-body #servico_id").val( servicoId );
       // As pointed out in comments, 
       // it is superfluous to have to manually call the modal.
       // $('#addBookDialog').modal('show');
  });

/*
$('#show-produto').on('show.bs.modal', function(e) {
  //var yourParameter = e.relatedTarget.dataset.yourParameter;
  // Do some stuff w/ it.
  var clicked = $(e.target);
  //$(".modal-body #testeset").val( 'work' );
  console.log('gfgfgfgfgfgfgfgfg');
});
*/
$('#show-produto').on('click', function(e) {
  //var yourParameter = e.relatedTarget.dataset.yourParameter;
  // Do some stuff w/ it.
  var clicked = $(e.target);
  //$(".modal-body #testeset").val( 'work' );
  console.log('gfgfgfgfgfgfgfgfg');
});


/*
$(function() {
    $('#show-produto').modal('show');
});
*/
$('#testeshow').click(function(anyothername) {
    var clicked = $(anyothername.target);
    alert('hjhjhjhj')
});      

    


   function clicbt() {
        
    alert('jkjkjk');
  };