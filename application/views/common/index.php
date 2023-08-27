<h1>hii</h1>
<div id="addForm"></div>
<script>
    $(document).ready(function () {
        getMenu ();
    })
    function addMenu () {
        $.ajax({
            url:"<?php echo base_url('Section/addOne');?>",
            type: "get",
            success:function(response){
               $("#addForm").html(JSON.parse(response).html);
               $("#Addmenu").modal("show");  
            }
        });
    }
    function getMenu () {   
        $.ajax({
            url:"<?php echo base_url('Welcome/navbar');?>",
            type: "get",
            success:function(response){
               $("#nav").html(JSON.parse(response).html);
            }
        });
    }
    $("body").on("submit", "#addmenu", function (event){
        event.preventDefault();
        $.ajax({
            url:"<?php echo base_url('Section/add');?>",
            type: "post",
            data: $(this).serializeArray(),
            datatype: 'text/plain',
            success:function(response){
                $("#Addmenu").modal("hide");
                getMenu ();
            }
        });
    });
    function addSubMenu (id) { 
        $.ajax({
            url:"<?php echo base_url('Section/addOne/');?>"+id,
            type: "get",
            success:function(response){
                $("#Addmenu").modal("hide");
                $("#addForm").html(JSON.parse(response).html);
               $("#Addsubmenu").modal("show");  
            }
        });
     }
     $("body").on("submit", "#addsubmenu", function (event){
        event.preventDefault();
        $.ajax({
            url:"<?php echo base_url('Section/addsubmenu');?>",
            type: "post",
            data: $(this).serializeArray(),
            datatype: 'text/plain',
            success:function(response){
                $("#Addsubmenu").modal("hide");
                getMenu ();
                getItem();
            }
        });
    });
    function getItem(id){
        $.ajax({
            url: "<?php echo base_url('Welcome/subItem/');?>"+id,
            type: "get",
            success: function(response){
                $("#submeNu"+id).html(JSON.parse(response).html);
            }
        });
    }
</script>
