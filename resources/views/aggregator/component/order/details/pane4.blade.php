                

  <!-- =======pane0==== -->
        
  <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 content-pane-4" >  
                                  <form enctype="multipart/form-data" department p___5 method="post">
                                    @csrf
                                    <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 box-white five_" >
                        
                          

                                  </div>
                   
                  
                                  </form>
                               </div>
                                <!-- =======pane0==== -->


                                <script type="text/javascript" >


                  
let   ui5 = ($data)=>{
    
  
  try {
    $data  = $data.loader
       let d = `
       <div class="form-group mt-3">
                      <label>Business name</label>
                      <p type="text" class="form-control" placeholder="Category name" autocomplete="off" name="category_name" is-req="" is-req-text="Category name is required"  >
                       ${$data.a}
                        
                      </p>
                 </div>
           
               
                         <div class="form-group mt-3">
                              <label>Store contact number</label>
                              <p type="text" class="form-control" placeholder="Category name" autocomplete="off" name="category_name" is-req="" is-req-text="Category name is required"  >
                              ${$data.g}
                                
                              </p>
                         </div>

                       
                          ${$data.h && $data.h.length >3? (` <div class="form-group mt-3">
                              <label>Store other contact number</label>
                              <p type="text" class="form-control" placeholder="Category name" autocomplete="off" name="category_name" is-req="" is-req-text="Category name is required"  >
                              ${$data.h}
                                
                              </p>
                         </div>`):''}
                       
                         <div class="form-group mt-3">
                              <label>Store Email</label>
                              <p type="text" class="form-control" placeholder="Category name" autocomplete="off" name="category_name" is-req="" is-req-text="Category name is required"  >
                              ${$data.d}
                                
                              </p>
                         </div>

                          <div class="form-group mt-3">
                              <label>Store Address</label>
                              <p type="text" class="form-control" placeholder="Category name" autocomplete="off" name="category_name" is-req="" is-req-text="Category name is required"  >
                              ${$data.i}
                                
                              </p>
                         </div>


                          <div class="form-group mt-3">
                              <label>Store state</label>
                              <p type="text" class="form-control" placeholder="Category name" autocomplete="off" name="category_name" is-req="" is-req-text="Category name is required"  >
                              ${$data.e}
                                
                              </p>
                         </div>
                          <div class="form-group mt-3">
                              <label>Store lga</label>
                              <p type="text" class="form-control" placeholder="Category name" autocomplete="off" name="category_name" is-req="" is-req-text="Category name is required"  >
                              
                                ${JSON.parse($data.f).lga_name}
                                
                              </p>
                         </div>
                     
                         <div class="form-group mt-3">
                              <label>Store Area</label>
                              <p type="text" class="form-control" placeholder="Category name" autocomplete="off" name="category_name" is-req="" is-req-text="Category name is required"  >
                              
                                ${JSON.parse($data.f).area_name}
                                
                              </p>
                         </div>
    

       `
       document.querySelector(".five_").innerHTML  = d   
  } catch (error) {
   console.log(error," is error")
  }     
       
  }        

       pupUpdate('form[p___5]', (data)=>{
            ui5(data)
             
       })

</script>