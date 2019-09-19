<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="jquery-ui.css">
    <script src="../ui-features/jquery.js"></script>
    <script src="jquery-ui.js"></script>
    <title>Content</title>
    <style>
        /* .ui-dialog-titlebar{
            color: red;
            text-align: center;
            width: 100%;
            height: 100%;
            position: absolute;
            font-size: 24px;
        } */
        body{
            background:radial-gradient(farthest-corner at 30vw 20vh, #ccccdd 1%, #1a1aa1 100%);
            /* background-color: radial-gradient() */
            background-repeat: no-repeat;
            height: 100vh;
        }
    </style>
    
    
</head>
<body>
    <div class="container-fluid">
        <div class="row">
        <div class="col-md-6 pt-5 mx-auto">
            <button class="btn btn-outline-primary float-right " id="add" type="button">Add</button>
            
            <div class="">
                <table class="table table-dark rounded table-bordered">
                    <thead>
                        <tr>
                            <th id="test"> name</th>
                            <th>Admission No</th>
                            <th>Univ Roll No</th>
                        </tr>
                    </thead>
                    <tbody id="here">
                        <tr>
                            <td contenteditable="true" class="first"></td>
                            <td contenteditable="true" class="second"></td>
                            <td contenteditable="true" class="last"></td>
                            
                        </tr>
                    </tbody>
                </table>
            </div>
            <a class="btn btn-outline-secondary " href="basic-table.php" id="back">Back</a>
            <button class="btn btn-outline-primary float-right mr-5" type="button" id="submit">Submit Now</button>
                
            </div>
        </div>
        <div id="io"></div>
                        <div id="ioi" class=" col-md-8 text-center mx-auto ">
                            <h4></h4>
                        </div>
        
        
    </div>
    <script>
 $(function(){
     var i=0;

     $("#io").dialog({
        width:250,
        height:200,
        autoOpen:false
    });

    // $("#io").dialog("option","title","success");
    // $("#io").dialog("open");
    
$("#add").click(function(){
    i+=1;
    var o="<tr id='row"+i+"'><td id='first_"+i+"' contenteditable='true' class='first'></td>";
        o+="<td id='second_"+i+"' contenteditable='true'class='second'></td>";
        o+="<td id='last_"+i+"' contenteditable='true' class='last'></td>";
        o+="</tr>";
        $('#here').append(o);
    
});

     $("#submit").click(function(){
         var name=[];
         var admn_no=[];
         var univ_roll=[];
        $(".first").each(function(){
            name.push($(this).text());
            
            
        });
        $(".second").each(function(){
            
            admn_no.push($(this).text());
        });
        $(".last").each(function(){
            
            univ_roll.push($(this).text());
        });

         
        $.ajax({
            url:'save.php',
            type:'POST',
            data:{name:name,admission_no:admn_no,univ_roll:univ_roll},
            async:true,
            success:function(res){
                // $("#ioi").html(i+1+"row inserted");
            // alert("success");
                $("td[contenteditable='true']").text("");
                for(var op=1;op<=i;op++){
                    $("tr#row"+op+"").remove();
                }
                pp=i+1;
                // func();
                $("#io").dialog('option','title','success');
                $("#io").text("succesfully Inserted "+pp+" rows");
                $("#io").dialog('open');

            },
            error:function(){
                alert("error hai");
            }
        });
        
     });


     
     
    //  $(".io").text($("#test").text());
     
 });
        
    </script>
    
</body>
</html>