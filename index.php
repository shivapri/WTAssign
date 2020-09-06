<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
  <script src= "jquery-3.5.1.min.js"></script>
    <h1>Hello, world!</h1>
    <br /><br />
    <div class="container" style="width:600px;">
        <h2 align="center">JSON - Dynamic Dependent Dropdown List using Jquery and Ajax</h2><br /><br />
        <h5>Use Name option tag to select the name of the item and use submit to submit the item in the dropdown</h5><br>
        <h5>for again using again select the name</h5>
        <select name="item restaurant-dropdown restaurant" class="custom-select custom-select-lg mb-3" id="restaurant">
              <option value="">Select Menu</option>
          </select>
          <br>
        <!-- <select name="id" id="id" class="form-control input-lg">
            <option value="">Select id</option>
        </select>
        <br />
        <select name="shortname" id="shortname" class="form-control input-lg">
            <option value="">Select shortname</option>
        </select>
        <br />
        <select name="name" id="name" class="form-control input-lg">
            <option value="">Select name</option>
        </select>
        <br>
        <select name="description" id="description" class="form-control input-lg">
            <option value="">Select description</option>
        </select>
        <br>
        <select name="pricesmall" id="pricesmall" class="form-control input-lg">
            <option value="">Select price small</option>
        </select>
        <br>
        <select name="pricelarge" id="pricelarge" class="form-control input-lg">
            <option value="">Select price large</option>
        </select>
        <br>
        <select name="smallportionname" id="smallportionname" class="form-control input-lg">
            <option value="">Select small portion name</option>
        </select>
        <br>
        <select name="largeportionname" id="largeportionname" class="form-control input-lg">
            <option value="">Select large portion name</option>
        </select>
        <br> -->
        <button type="submit" class="btn btn-success" id="add">Submit</button>
    </div>
    <div class="tablevent">
        <table class="table">
            <thead>

                <th scope="col">id</th>
                <th scope="col">short_name</th>
                <th scope="col">name</th>
                <!-- <th scope="col">description</th> -->
                <!-- <th scope="col">price small</th>
                <th scope="col">price large</th>
                <th scope="col">small portion name</th>
                <th scope="col">large portion name</th> -->
            </thead>
            <tbody id="addeveent">
                <tr>
                    <td id="tid"></td>
                    <td id="tsname"></td>
                    <td id="tname"></td>
                    <!-- <td id="tdesc" style='width:40%'></td> -->
                    <!-- <td id="tpsmall"></td>
                    <td id="tplarge"></td>
                    <td id="tspname"></td>
                    <td id="tlpname"></td> --> -->


                </tr>
            </tbody>

        </table>
    </div>
    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <!-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script> -->
  </body>
</html>
<script>
    let base_url = "controller.php";
    
    $(document).ready(function(){
    //     $.get(base_url,function(data,success){
    //         console.log(data);
        
    //     });
getnamelist();

    });
    function getnamelist(){
        let url = base_url + "?req=name_list";
        $.get(url,function(data,success){
            load_json_data('menu');
                // console.log('hi');
        function load_json_data(param_menu) {
            var html_code_menu_name = '';
            // var html_code_shortname = '';
            // var html_code_name = '';
            // var html_code_description = '';
            // var html_code_pricesmall = '';
            // var html_code_pricelarge = '';
            // var html_code_smallportionname = '';
            // var html_code_largeportionname = '';
            // $.getJSON('text.json', function (data) {
                html_code_menu_name += '<option value="">Select ' + param_menu + '</option>';
                // html_code_+= '<option value ="">Select menu</option>'
                // $.each(data, function (key, value) {
                    $.each(data, function (key, value) {
                        // console.log('hi');
                        if (param_menu == 'menu') {
                            html_code_menu_name += '<option value="' + value.name + '">' + value.name + '</option>';
                            // console.log(value.name);
                            // html_code_id += '<option value = "' + value.id + '">' + val.id + '</option>';
                            // param_id = 'id';

                        }

                    }); $('#restaurant').html(html_code_menu_name);
                    // $('#' + param_id).html(html_code_id);



                // });

            // });

        }

        });
    }
    function nexttimedata(){
        let url = base_url+"?req=name_list";
        $.get(url,function(data,success){
            load_json_data_another('menu');
            function load_json_data_another(param_menu) {
            var html_code_menu_name = '';
            html_code_menu_name += '<option value="">Select ' + param_menu + '</option>';
            $.each(data, function (key, value) {
                if (param_menu == 'menu') {
                            html_code_menu_name += '<option value="' + value.name + '">' + value.name + '</option>';

            }
}); $('#restaurant').html(html_code_menu_name);
            }
        });
    }
    $(document).on('change', '#restaurant', function () {

            var name = $(this).val();
            // console.log(name);
            var checked = '';
            if (name != '') {
                $('#restaurant').html('<option value = "' + name + '">' + name + '</option>')
                // load_json_data('description', 'shortname', 'name', 'id', 'pricesmall', 'pricelarge', 'smallportionname', 'largeportionname')
                // load_other_data(name);
                $(document).on('click','#add',function(){
                    // console.log(name);
                    console.log('enter');
                                // 
                                // console.log('enter');
                    $.getJSON("text.json",function(data,success){
                        // console.log(data);
                        $.each(data, function (key, value) {
                    $.each(value, function (key, val) {
    
                            if (val.name == name && checked=='') {
                                let element_id = document.createElement('td');
                                let element_sname = document.createElement('td');
                                let element_name = document.createElement('td');
                                let element_newline = document.createElement('tr');
                                var val_id = val.id;
                                var val_sname = val.short_name;
                                var val_name = val.name;
                                var tx_id = $('<td></td>').text(val_id);
                                var tx_sname = $('<td></td>').text(val_sname);
                                var tx_name = $('<td></td>').text(val_name);
                                checked = 'HII';
                                $('#addeveent').append(element_newline);
                                $('#addeveent').append(tx_id);
                                $('#addeveent').append(tx_sname);
                                $('#addeveent').append(tx_name);
                                // load_json_data('menu');
                                // load_json_data_another('menu');
                                // nexttimedata();
                                // element_id = 
                                // element_sname
                                // element_name 
                                
                                nexttimedata();
                              

                            }
                                val_id = '';
                                val_sname = '';
                                val_name = ''; 
                            
                        });
                    });
                      
                });                
  
            });
            
        }
        // if(checked == 'HII'){
            
            
        //     val_id = '';
        //                         val_sname = '';
        //                         val_name = ''; 
        // }
        
            })
  
       
  </script>