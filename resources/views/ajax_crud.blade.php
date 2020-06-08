

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ajax crud pracetice</title>
    
    <link rel="stylesheet" href="{{asset('css/app.css')}}">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/8.11.8/sweetalert2.css">
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/8.11.8/sweetalert2.all.js"></script>
   

</head>
<body>          

      <div class="container-fluid " style="background:#4e4e4e;"> 
    
        <div class="container mt-5 bg-info">
    
          <div class="col-md-12">
              <div style="margin:20px;" class="clearfix">
                  <span>Laravel - jQuery CRUD Developed By shibbirit</span>
                  <a id="newClient" class="btn btn-xl  btn-success btn-sm pull-right" data-toggle="modal" href="#add_modal" >Add New Client Records</a>
              </div>
               <div  class="developerinfo text-center mb-3">
                    <h2 style="color:#fc721e" class="heading ">this Ajax CRUD application </h2>
                    <h3 class="heading ">By this application Record Create Read Udpate 
                        and Delelete will be performed without page loading </h3>
               </div>
              <!--data listing table-->
              <div class="table-responsive"> 
              <table class="table table-bordered table-striped table-condensed text-center">
                  <thead>
                  <tr>
                      <td>ID</td>
                      <td>NAME</td>
                      <td>EMAIL</td>
                      <td>PHONE</td>
                      <td>Country</td>
                      <td>ACTION</td>
                  </tr>
                  </thead>
                  <tbody>
  
                  </tbody>
              </table>
            </div>
              <!--data listing table-->
  
          </div>
          <div  class="footerinfo text-center">
               <h3 class="heading text-white">copyright all reserved by Shibbir Ahmad in 08-06-2020 </h3>
          </div>
        </div> 
      </div>
  
      <!-- modal -->
      <div class="modal fade" id="add_modal">
          <div class="modal-dialog">
              <div class="modal-content">
                  <div class="modal-header">
                      <button type="button" class="close"
                              data-dismiss="modal" aria-hidden="true">&times;
                      </button>
                      <h4 class="modal-title">Add New Client</h4>
                  </div>
                  <div class="modal-body">
                   
                      <div class="form-group">
                          <label>Name</label>
                          <input class="form-control input-sm" type="text" name="name">
                      </div>
                      <div class="form-group">
                          <label>E-mail</label>
                          <input class="form-control input-sm" type="email" name="email">
                      </div>
                      <div class="form-group">
                          <label>Phone</label>
                          <input class="form-control input-sm" type="text" name="phone">
                      </div>
                      <div class="form-group">
                        <label>Country/City</label>
                        <input class="form-control input-sm" type="text" name="country">
                    </div>
                  </div>
                  <div class="modal-footer">
                      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
  
                      <button type="button" class="btn btn-primary btnSave"
                              onClick="store()">Save
                      </button>
                     
                  </div>
              </div><!-- /.modal-content -->
          </div><!-- /.modal-dialog -->
      </div><!-- /.modal -->
  

      
      <!-- modal -->
      <div class="modal fade" id="edit_modal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close"
                            data-dismiss="modal" aria-hidden="true">&times;
                    </button>
                    <h4 class="modal-title">Update  Client info. </h4>
                </div>
                <div class="modal-body">

                  <form class="form" id="updateClientForm" method="POST">
                    <input type="hidden" class="form-control input-sm" name="id">
                    <div class="form-group">
                        <label>Name</label>
                        <input class="form-control input-sm" type="text" name="name">
                    </div>
                    <div class="form-group">
                        <label>E-mail</label>
                        <input class="form-control input-sm" type="email" name="email">
                    </div>
                    <div class="form-group">
                        <label>Phone</label>
                        <input class="form-control input-sm" type="text" name="phone">
                    </div>
                    <div class="form-group">
                        <label>Country/City</label>
                        <input class="form-control input-sm" type="text" name="country">
                    </div>

                </div>
                <div class="modal-footer">

                    <input  type="submit" class="btn btn-warning "  value="update">
             
                  </form>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>

                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
  
  
    <script  src="{{asset('js/jquery.min.js')}}"></script>

    <script  src="{{asset('js/app.js')}}" ></script>

    <script src="{{asset('js/modal.js')}}"></script>
    
    
    
     
        <script>


            var adminUrl = '{{url('client')}}';
            var add_modal = $('#add_modal');
            var edit_modal = $('#edit_modal');
            var btnSave = $('.btnSave');
            var btnUpdate = $('.btnUpdate');

            $.ajaxSetup({
              
                headers: {'X-CSRF-Token': '{{csrf_token()}}'}
            });


             //this is get function of data
            function getRecords() {

                $.get(adminUrl + '/data')
                    .then(function (data) {
                        var html='';
                        data.forEach(function(row){
                            html += '<tr>'
                            html += '<td>' + row.id + '</td>'
                            html += '<td>' + row.name + '</td>'
                            html += '<td>' + row.email + '</td>'
                            html += '<td>' + row.phone + '</td>'
                            html += '<td>' + row.country + '</td>'
                            html += '<td>'
                            html += '<a data-toggle="modal" href="#edit_modal" class="btn btn-xs btn-warning btnEdit" title="Edit Record" >Edit</a>'
                            html += '<button type="button" style="margin-left:5px" class="btn btn-xs btn-danger btnDelete" data-id="' + row.id + '" title="Delete Record">Delete</button>'
                            html += '</td> </tr>';
                        })
                        $('table tbody').html(html)
                    })
            }


            getRecords()

            
            //function for reset model input fields
            function reset() {
                add_modal.find('input').each(function () {
                    $(this).val(null)
                })
            }

            //function for get inputed data of form
            function getInputs() {
                var id = $('input[name="id"]').val()
                var name = $('input[name="name"]').val()
                var email = $('input[name="email"]').val()
                var phone = $('input[name="phone"]').val()
                var country=$('input[name="country"]').val()
                return {id: id, name: name, email: email, phone: phone , country: country}
            }


           //every click inputed data will be empty
            $('#newClient').click(function(){
                reset()
            })
           

           // this is ajax store function 
            function store(){
              
                if(!confirm('Are you sure?')) return;
                
                $.ajax({
                    method: 'POST',
                    url: adminUrl + '/add',
                    data: getInputs(),
                    dataType: 'JSON',
                    cache: false,
                    success: function(response){
                        if (response.success == "OK") {

                          add_modal.modal('hide');


                          Swal.fire({
                              type: 'success',
                              text: "client "+response.status + " successfully",
                          });

                      }

                      reset()
                   
                      getRecords()
                   },
                })
            }



            //firstly data catched from table and displed modal input field

            $('table').on('click', '.btnEdit', function () {
                
                var id = $(this).parent().parent().find('td').eq(0).text()
                var name = $(this).parent().parent().find('td').eq(1).text()
                var email = $(this).parent().parent().find('td').eq(2).text()
                var phone = $(this).parent().parent().find('td').eq(3).text()
                var country=$(this).parent().parent().find('td').eq(4).text()
                $('input[name="id"]').val(id)
                $('input[name="name"]').val(name)
                $('input[name="email"]').val(email)
                $('input[name="phone"]').val(phone)
                $('input[name="country"]').val(country)
            })



            //this is update function 
               $('#updateClientForm').on('submit',function(e){
                e.preventDefault()

                var data = $(this).serialize();
                var url = '{{url('client/update')}}'
                  if(!confirm('Are you sure ? ')) return ;
               $.ajax({ 
                   url : url ,
                   method : 'POST',
                   data : data ,
                   dataType : 'JSON' ,

                   cache: false,
                   success: function(response){

                    if(response.success=="OK"){
                         
                        reset()

                        getRecords()

                        edit_modal.modal('hide');
                        

                        Swal.fire({
                        type: 'success',
                        text: "client " +response.status + " successfully",
                        });

                        }else {

                        ///validation error
                        Swal.fire({
                            type: 'error',
                            title: '<P style="color: red;">Oops...<p>',
                            text: resp.errors,
                            footer: '<b> Something Wrong</b>'
                        });
                        }
                        
                   },

                   error : function(error){

                       alert('something went wrong')
                   }
                   
                });


            });


            //this delete function
            $('table').on('click', '.btnDelete', function (e) {
               e.preventDefault()
      
                var id = $(this).data(id)
                var deltUrl = '{{url('client/deleted')}}'
                if(!confirm('Are you sure?')) return;

                $.ajax({
                    method: 'DELETE',
                    url: deltUrl ,
                    data: id,
                    dataType: 'JSON',
                    cache: false,
                    success: function (response) {
                        console.log(response)
                        if(response.success=='OK'){

                            Swal.fire({
                              type: 'success',
                              text: "client "+response.status + " successfully",
                          });

                        }

                        getRecords();
                    }
                })
            });
        </script>
    


    <script src="{{asset('js/myScript.js')}}"></script>


   
</body>
</html>
