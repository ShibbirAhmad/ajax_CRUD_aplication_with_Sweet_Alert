
      // $(function(){
              
      //      var adminUrl= '{{url('client')}}';
            
      //       var _modal = $('#Mymodal');         
      //       var btnSave = $('.btnSave');
      //       var btnUpdate =$('.btnUpdate');

      //       $.ajaxSetup({ headers: {  'X-CSRF-Token' : '{{csrf_token()}}'  }  });
           
      //       // $.ajax({ 
      //       //        url : adminUrl ,
      //       //        method : 'get',
                  
      //       //        success: function(response){
                     
      //       //            if(response.data){
      //       //              console.log()
      //       //            }
                      
      //       //        },
      //       //        error : function(error){
      //       //         console.log(error)
      //       //        }
      //       //     })

           
      //        function getRecords(){
               
      //           $.get(adminUrl + '/data').success(function(data){

      //             var html = '' ;
      //           data.foreach(function(row){
      //             html += '<tr>'
      //               html += '<td>' + row.id + '</td>'
                   
      //               html += '<td>' + row.email + '</td>'
      //               html += '<td>' + row.name + '</td>'
      //               html += '<td>' + row.phone + '</td>'
      //               html += '<td>' + row.country + '</td>'
      //               html += '<td>' 
      //                    html += '<button type="button" class="btn btn-xs btn-warning btnEdit " title="Edit Record" >Edit </button>'  
      //                    html += '<button type="button" class="btn btn-xs btn-warning btnEdit " title="Delete Record"  data-id="' + row.id +'">Delete </button>'        
      //               html +=  '</td>'
      //             html += '</tr>'  
                  
      //           })
      //           $('table tbody').html(html)
      //           })
              
      //        }

      //        getRecords()
                 
           
      //        function reset() {
      //            _modal.find('input').each(function(){
      //              $(this).val(null)
      //            })
      //        }


             
      //        function create(){
      //          _modal.find('.modal-title').text('new client');
      //          reset();
      //          _modal.modal('show')
      //          btnSave.show();
      //          btnUpdate.hide();

      //        }
           
           
           
      //      });
           
           