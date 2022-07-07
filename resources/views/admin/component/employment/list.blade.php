
<!DOCTYPE html>
<html lang="en">
<head>
@include('header-footer.header')


</head>

<body>
@include('admin.sidebar.sidebar')
 <div class="all-content-wrapper"> 
@include('admin.top-header.all')
@include('admin.sub-header.subheader')

    <!-- <style type="text/css">
                                 button[data-original-title='Picture'],button[data-original-title='Video']{
                                       display: none;
                                    }
                            </style> -->
<div class="data-table-area mg-b-15">
            <div class="container-fluid">
                         <div class="row">
                  <div   class="col-sm-12 col-md-12" style="display: none;" id="AddAnn" >
                     <div class="panel panel-bd lobidrag">

                       <div class="panel-heading">
                           <div class="btn-group" id="buttonexport">
                           
                             
                           </div>

                            
                           <div class="panel-title" style="max-width: calc(100% - 210px);">Emplployment</div>
                          <button type="button" class="btn btn-xs btn-danger boxShadow pull-right" id="exitAddAnn"> Exit add data</button>
                     
                          
                        </div>
                        <div class="panel-body">

                        <form action="/admin/create-employment"  department p__ method="post" emp >
                        @csrf
                    
                        <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 box-white item-edit-container" style=" width: 96%;left: 16px;" >

                            <div class="form-group mt-3">
                            <label>Select item subcategory</label>
                            <select class="form-control" name="part"  data-placeholder="Pick one or more options">
                                <option>Administrative</option>
                                <option>Aggregator</option>
                                <option>Farmer</option>
                                <option>Warehouse</option>
                                <option>Logistics</option>
                                        
                            </select>
                            </div>

                            <div class="form-group mt-3">
                            <label>Start on</label>

                            <input type="date" name="from" class="form-control">

                            </div>

                            <div class="form-group mt-3">
                            <label>Deadline on</label>

                            <input type="date" name="to" class="form-control">

                            </div>

                            <div class="form-group mt-3">
                            <label>Description</label>

                            <div id="summernote"></div>

                            </div>

                            <div class="col-sm-12 col-md-12 col-xs-12">
                                    <div class="form-group">
                                    <button type="button" name="sendreg"  is_item_request class="btn btn-theme" style="margin: 0px -19px">Save  <i class="fa fa-spinner anim" style="opacity: 0;"></i></button>

                                    </div>
                                </div>

                            </div>


                             
                        </form> 
      

                   
                        </div> 
                     </div>
                  </div>
              


                  <div class="col-sm-12 col-md-12"    id="AnnTable" >
                     <div class="panel panel-bd lobidrag">
                          <div class="panel-heading">
                           <div class="panel-title" style="max-width: calc(100% - 210px);">Add data</div>
                           <button type="button" class="btn btn-xs btn-primary boxShadow pull-right" id="dropAddAnn">Add Data</button>
                        </div>

                        <div class="panel-body">
                        <!-- Plugin content:powerpoint,txt,pdf,png,word,xl -->
                         
                           <!-- ./Plugin content:powerpoint,txt,pdf,png,word,xl -->
                           <div class="table-responsive list-r">
                           	 <div id="toolbar">
                                        <select class="form-control dt-tb">
                                        <option value="">Export Basic</option>
                                       <!--  <option value="all">Export All</option> -->
                                        <option value="selected">Export Selected</option>
                                      </select>
                                    </div>
                                    <div class="table-holder"></div>
                            
                            </div>
                        </div>
                     </div>
                  </div>
           

               

               <div class="modal fade" id="updateDepartment" tabindex="-1" role="dialog" aria-hidden="true">
                  <div class="modal-dialog">
                     <div class="modal-content">
                        <div class="modal-header modal-header-primary" style="height: 56px">
                           <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                           <h3 style="margin-top: -1px" class="title--"><!-- <i class="f fa-plus m-r-5"></i> -->Update </h3>
                        </div>
                        <div class="modal-body">
                           <div class="row -md">
                              <div class="col-md-12">











                                    <form  p__2 action="/admin/employment/update" update-department  method="post"   >
                                    
                                                 
                        <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 box-white item-edit-container" style=" width: 96%;left: 16px;" >
                                
                                <div class="form-group mt-3">
                                <label>Select item subcategory</label>
                                <select class="form-control chosen-select" name="part"  data-placeholder="Pick one or more options">
                                    <option>Administrative</option>
                                    <option>Aggregator</option>
                                    <option>Farmer</option>
                                    <option>Warehouse</option>
                                    <option>Logistics</option>
                                            
                                </select>
                                </div>

                                <div class="form-group mt-3">
                                <label>Start on</label>
                                <input type="hidden" name="updateId" class="form-control">
                                <!-- <input type="hidden" name="post3" class="form-control" value="single"> -->
                                <input type="date" name="from" class="form-control">

                                </div>

                                <div class="form-group mt-3">
                                <label>Deadline on</label>

                                <input type="date" name="to" class="form-control">

                                </div>

                                <div class="form-group mt-3">
                                <label>Description</label>

                                <div id="summernote"></div>

                                </div>

                                <div class="col-sm-12 col-md-12 col-xs-12">
                                        <div class="form-group">
                                        <button type="button" name="upreg"  is_item_request class="btn btn-theme" style="margin: 0px -19px">Save  <i class="fa fa-spinner anim" style="opacity: 0;"></i></button>

                                        </div>
                                    </div>

                                </div>

                                            
                           
                          
                             
                                      </form>



                              </div>
                           </div>
                        </div>

             
                     </div>
                     <!-- /.modal-content -->
                  </div>
                  <!-- /.modal-dialog -->
               </div>
               <!-- /.modal -->

       
            </div>
    </div>  
</div>


    <script type="text/javascript">
 
        window.addEventListener("load",function(){
       
       
            (function(table_r){
       
             function populate_new_table(tblclass,callbackHandlecheck=null,callbackTableData=null)
       {
       
       function table_($data,$otherData){
         let tablenew  = ` <table   class="table"  data-toggle="table-" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true"
                                               data-cookie-id-table="saveId"  data-sortable="true" data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar" >
                                               <thead>
                                                 
                                                   <tr class="info">
                                                    <th  data-checkbox="true"></th>
                                               
                                                    <th data-field="for"  data-sortable="true">For</th>
                                                      <th data-field="Satrt on"  data-sortable="true">Start on</th>
                                                    <th data-field="End on"  data-sortable="true">End on</th>
                                                    

                                                    <th  data-field="action" >Action</th>
                                                    
                                                  </tr>
                                               </thead>
                                               <tbody class="data--container"  data-total="${$otherData.total_selected_data }" >
                                                        ${$data} 
                                               </tbody>
                                           </table>`
                                        document.querySelector(table_r).querySelector(".table-holder").innerHTML= tablenew  
                                        
                                try{
                                 if(document.querySelectorAll('.panel-title').length>1){
                                   let e =  document.querySelectorAll('.panel-title')[0]
                                   let e2 =  document.querySelectorAll('.panel-title')[1]
                                  e.innerHTML = ' Employment data '//+$otherData.total_data   
                                  e2.innerHTML = ' Employment data '//+$otherData.total_data   
                                }else{
                                    let e =  document.querySelectorAll('.panel-title')[0]
                                  e.innerHTML = ' Employment data '//+$otherData.total_data  
                                }
                              } catch (error) {
                                
                              }
                                 
       }
       
         /*delear loader*/
         let prev_loader = ` <center class="loader" style="padding-top:7px "><div class="car"><span class="throbber-loader"></span> </div></center> `
         document.querySelector(table_r).querySelector(".table-holder").innerHTML= prev_loader  
        /*delear loader*/
       /* **Filter selecter****/
          let selet  =document.querySelector(table_r).querySelector(".one--")? document.querySelector(table_r).querySelector(".one--").value:"-1";
          let selet2  =document.querySelector(table_r).querySelector(".two--")? document.querySelector(table_r).querySelector(".two--").value:"-1";
          
          if(parseInt(selet) === "NAN" || parseInt(selet2) ==="NAN") {
             notify("error","data row number must be number type")
             return false;
          }
         let numCof2  = numCof();/*Check connecte devicie*/
         let toAppend = selet ==="-1"?["1",0,1000,JSON.stringify(numCof2[0])]:["1",selet, selet2,JSON.stringify(numCof2[0]) ];
        let new_data = user().getData({
            appends:toAppend,url:"/admin/employment/get?"+numCof2[1]+"",
            form:document.querySelector('form[add-user2]'),
            token:document.querySelector('input[name="_token"]').value,
            
        });
       /* **Filter selecter****/
        
       let dataSetPromise = new Promise( (pass,fail)=>{
       
         /******PROMISE SECTION********/
       new_data.then(data=>{
     //  
       if(data.res.data) {
       let  dataList = data.res.data
       let  list  =``;
          dataList.forEach( ($o,$key)=>{
            list+=`<tr class="parent${$key}"  data-user="${$o.a}" row-index="${$key+1}"> 
                                       <td class="1" col-idex="1"></td>
    
                                        <td  class="upper">${$o.f} </td>
                                        <td>${formatDate($o.d)}</td>
                                       
                                       <td>${formatDate($o.e)}</td>

                                        <td > 

                                        <button type="button" class="btn btn-add btn-xs" edit-sch-btn data-toggle="modal" data-target="#updateDepartment" sn="${$key+1}" ><i class="fa fa-pencil"  sn="${$key+1}" edit-sch-btn  ></i></button>
		   
                                     <!--<a   href="/admin/registration/details/${$o.a}"><button type="button" class=" btn btn-xs btn-success del__ child-edit${$key}"><i class="fa fa-pencil" ></i></button></a>-->
                                  
                                      <button type="button" index="${$key}"  index-- ="${$o.a}" class="del__ btn btn-xs btn-danger delete-wh-r child-delete${$key}" data-toggle="modal" data-target="#deleteschool"><i class="fa fa-trash-o delete-wh-r" index="${$key}"></i> 
                                      </button>
                                         
                                        </td>
           </tr> `
          })
      //  
       // if(getCookie('abpng__user__data_2')===data.res.cook ){
          table_(list,{'total_selected_data':data.res.data.length,'total_data':data.res.total_data } );
          pass({data_pass:true}) 
       
      
       
       }else{

         table_('',{'total_selected_data':0})
           pass({data_pass: false})
            if(data.res.exception){
             notify('error',data.res.message+', reload the page')
            }
           //no data
          } /*****NO DATA********/
                                       
           }).catch(e=>{
             
           })
       
       /*****PROMISE SECTION*******/
       
       } )
       
       dataSetPromise.then(dataPass=>{
        document.querySelector(table_r).querySelector('table.table').classList.add(tblclass)
        document.querySelector(table_r).querySelector('table.table').setAttribute("id",tblclass)
          let url ={
            flagout:"/admin/employment/delete",
            add:"PARTH2",
            stm:"Are you sure to delete the selected data",
            method:"POST",
            token:document.querySelector("input[name='_token']").value

       
        };
          callbackTableData !==null? callbackTableData(table_r,url):null;//////////Table builder 
          callbackHandlecheck !==null?callbackHandlecheck(table_r,url):null////////Table checkHAndler
          
       }).catch(e=>{
          callbackTableData !==null? callbackTableData(table_r,null):null;//////////Table builder 
          //callbackHandlecheck !==null?callbackHandlecheck(table_r,url):null////////Table checkHAndler
         // 
       })
       
       }/* **End of populate_new_table function ****/
       
       /* **Any action can call  populate_new_table function****/
       
       /* **Initial call ;when the table first load****/
       setTimeout(function(){  
       populate_new_table("table__1",handlecheck,repopulateTable)
       },2000)
        
       /* **Initial call when the table first load****/
       
        /* **Whenever the filetr field is change repopulate the table****/
        if(document.querySelector(table_r).querySelectorAll('.search_f')){
          document.querySelector(table_r).querySelectorAll('.search_f').forEach(filter_fields=>{
         filter_fields.addEventListener('click',function(){
          populate_new_table("table__1",handlecheck,repopulateTable)
       })
       
       }) 
        }
       
       /* **Whenever the filetr field is change repopulate the table****/
       
       /* **Call this functin to repopulate table****/
       function respondTocal(){
        setTimeout(function(){
          populate_new_table("table__1",handlecheck,repopulateTable)
        },200)
       }
        /* **Call this functin to repopulate table****/


       /***********************************************/
        //   setPerm(respondTocal);
        handleSubmitWithSummer("button[name='sendreg']","form[emp]",[],respondTocal,"/uploadImgUrl/usage_images_summer-img-for-reg" ,"/usage/images/summer-img-for-reg/",{token:document.querySelector("input[name='_token']").value})
       /*******************************************/
         function closePop(){
          respondTocal()
          
           let ev  = new Event('click')
          document.querySelector("div.modal.fade").dispatchEvent(ev)
         }
       handleSubmitWithSummer("button[name='upreg']","form[update-department]",[],closePop,"/uploadImgUrl/usage_images_summer-img-for-reg" ,"/usage/images/summer-img-for-reg/",{token:document.querySelector("input[name='_token']").value})
       /*******************************************/
 

         
          })(".list-r")
       
         })




         function pupUpdate(formAttr){
                      window.addEventListener("load",function(){
                     let allbtn = Array.from(document.querySelectorAll("div.list-r"));
                     allbtn.forEach(el=>{
                      el.addEventListener("click",function(e){
                   
                      if (e.target.hasAttribute("edit-sch-btn")) {
                            /////////////////////////////////////////////////////////////////////////////////////////////////////
                           let sn = e.target.getAttribute("sn");
                           document.querySelector("h3.title--").innerHTML="Update Role "+sn
                         
                           let key_ =e.target.nextElementSibling?e.target.nextElementSibling.getAttribute("index--"):e.target.parentElement.nextElementSibling.getAttribute("index--");
                          
                        let userData = user().getData({
                            appends:['single',0,1,key_],
                            url:"/admin/employment/get",
                            token:document.querySelector("input[name='_token']").value,
                           
                            
                        });
                        userData.then(aw=>{
                            //
                         if(true==1 ){                               
                          let cont =   aw.res.data;
                           
                          
                          document.querySelector(formAttr).querySelector("input[name='updateId']").value  = cont.a
                          document.querySelector(formAttr).querySelector("input[name='from']").value =new Date(parseInt(cont.d)*1000).toISOString().split("T")[0] ;

                          document.querySelector(formAttr).querySelector("input[name='to']").value = new Date(parseInt(cont.e)*1000).toISOString().split("T")[0] ;
                        
                     
                         
                              if (cont.b !=="") {
                                     document.querySelector(formAttr).querySelector("div.note-editable").innerHTML = unescape(JSON.parse(cont.b)[0]);
                              } 
                           //
                      
                      
                           Array.from( document.querySelector(formAttr).querySelector("select[name='part']").children).forEach(ch=>{
                         if (ch.innerText == cont.f) {
                          ch.setAttribute("selected","")
                            chosenMaker.update2("select[name='part']")
                         }else{
                           ch.removeAttribute("selected")
                         }
                       })
                        
                         }else{
                            
                            
                          notify('error',"Document not ready yet")
                         }

                               }).catch(err=>{
                                   
                                   notify('error',err)
                               })
                   
                      

                         
                      }
////////////////////////////////////////////////////////////////////////////////////////
                     });

                     })



             
                   })

                  } 

               pupUpdate('form[update-department]')
       
        </script>


   
       
@include('modal.modal')               
 @include('header-footer.footer')
 
</body>
</html>