<!DOCTYPE html>
    <html >
    <head>
        <head>
            <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@100&family=Poppins&display=swap" rel="stylesheet">
            <title>Forts and Castles </title>
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
            <h1 id=headtag>Forts and Castles <h3 class=je>The Paradise on earth</h3></h1>
        </head>
    <body class=hero>
        
        <h1 id=hh1>Join, Eat And Enjoy......</h1>
            <h1 id="hh2">Select the Menu you like to Eat</h1>
          <br>
          <div class="container">
            <select id="menu">
              <option value="">Select Menu</option>
          </select>
          <br>
        
          <div id="table1">
            
          <table id="table">
            <tr>
              <th>Name</th>
              <td id="menuname"></td>
            </tr>
            <tr>
              <th>ID</th>
              <td id="id"></td>
            </tr>
            <tr>
              <th>Short Name</th>
              <td id="sname"></td>
            </tr>
            <tr>
              <th>Description</th>
              <td id="descp"></td>
            </tr>
            <tr>
              <th>Price Small</th>
              <td id="psmall"></td>
            </tr>
            <tr>
              <th>Price Large</th>
              <td id="plarge"></td>
            </tr>
            <tr>
              <th>Small Portion Name</th>
              <td id="spname"></td>
            </tr>
            <tr>
              <th>Large Portion Name</th>
              <td id="lpname"></td>
            </tr>
          </table>
        </div>
        
      
          </div>
      
          
      
        <div id=div1><h1>Permenant Address</h1><h3>7, Mangaldas Road, Pune, Maharashtra 411001</h3></div>
        
    
    </body>
    <script src="jquery-3.5.1.min.js"></script>
<div ></div>
<style>
.hero { 
    position: relative; 
    height: 200vh;
    width: 100%;
    align-items: center;
    justify-content: center;
    background-image: url('http://localhost/new/OIP.jpg' );
    background-size: cover;
  }  
  #hh1
  {
      font-size: 35px;
      text-align: center;
      display: block;
      width: 20%;
      margin-top: 1%;
      color: black;
      margin-left: 5%;
  
  }
  #menu{
      block-size: 50px;
      border-block-color: black;
      color: rgb(46, 33, 16);
      font-weight: bold;
      font-size: 15px;
  }
  #hh2
  {
      font-size: 40px;
      background-image: linear-gradient(to right, rgba(51, 145, 117, 0.295), rgba(43, 22, 233, 0.329)); 
      text-align: center;
      display: flex;
      width: 30%;
      color: rgba(255, 255, 255, 0.938);
      margin-left: 35%;
  
  }
  .je
{
    font-family: 'Josefin Sans', sans-serif;
    font-size: 30px;
    color: black;
    margin-top: 0px;
    margin-left: 70%;
}
  #headtag  {
    text-align: center;
    font-size: 75px;
    letter-spacing: 15px;
    font-family: 'Poppins', sans-serif;
    margin-bottom: 10px ;
    color: #070202;
    margin-left: 0px;
}
  #div1
  {
      font-size: 25px;
      text-align: center;
      display: block;
      width: 50%;
      margin-top: 5%;
      color:#ffffffbb; 
      
      margin-left: 40%;
  }
  .container{
    align-items: center;
    justify-content: center; 
    margin-left: 25%;
    position: relative;
  }
  .table tr td{
      border:2px solid black;
  }
  #table1{
    color:#16fab2;
    border-style:solid;
    font-size:25px;
    width:70%;
    font-weight: bold;
    margin-top:3%;
    text-align: center;
    background-color: #df7be391;
  }
  th,td{
      padding: 10px;
      border:2px solid black;
  }
</style>




<script>
let base_url = "details.php";

$("document").ready(function(){
    getRestaurantMenuList();
    document.querySelector("#menu").addEventListener("change",getMenuItemList);
});

function getRestaurantMenuList() {
    let url = base_url + "?req=menu_name_list";
    $.get(url,function(data,success){
        for (const key in data) {
        let opt = document.createElement("option");
        opt.textContent = data[key].name;
        opt.value = data[key].name; 
        document.querySelector('#menu').appendChild(opt);
    }
    });
}


    function getMenuItemList(i)
    {
        
        let index=i.target.value;
        
        let url=base_url + "?req=menuName&name="+index;
        $.get(url,function(data,success){
            
                
                if(data != null){
                let x = data;
                let pricesmall = x.price_small;
                
                if(pricesmall == null){
                    pricesmall = "NULL";
                }
                let descrp = x.description;
                if(descrp == ""){
                    descrp = "NULL";
                }
                let smallpname = x.small_portion_name;
                if(smallpname == null)
                {
                    smallpname = "NULL";
                }
                let largepname = x.large_portion_name;
                if(largepname == null)
                {
                    largepname = "NULL";
                }
                document.querySelector("#menuname").textContent = x.name;
                document.querySelector("#id").textContent = x.id;
                document.querySelector("#sname").textContent = x.short_name;
                document.querySelector("#descp").textContent = descrp;
                document.querySelector("#psmall").textContent = pricesmall;
                document.querySelector("#plarge").textContent = x.price_large;
                document.querySelector("#spname").textContent = smallpname;
                document.querySelector("#lpname").textContent = largepname;
            }
            document.getElementById("table").style.display = "block";
        });
        
    }
</script>












        
</html>
