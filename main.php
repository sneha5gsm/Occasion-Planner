<html>
<body background="back.jpg">
<form class="form-horizontal" action='display.php' method="POST">
<font face="sans-serif">
<div class="control-group">
<!-- Button -->
<div class="controls">
<button  id=0 type="submit" style="font-size : 15px; width: 20%; height: 20px;"  name="name" value="logout">Logout</button>
</div>
</div>
<h1> Hi,</h1>

<h1>Give us your requirements so that we help you plan your occasion! :)</h1>

<h1>Select occasion</h1>

<select>
  <option value="birthday">Birthday</option>
  <option value="marriage">Marriage</option>
  <option value="get-together">Gettogether</option>
  <option value="reception">Reception</option>
</select>
<h1>Budget</h1>
<input type="text" id="Phone" name="Phone" placeholder="" class="input-xlarge">
<h2>This is optional...</h2>
<br>
<h1>Preferences</h1>
<h2>You want a particular caterers:</h2>
<horizontal>
<button  id=2 type="submit" name="name" value="Taste N Taste Catering" onclick="myfunction(value,id)" >
<img src="taste.jpg"  width="240" height="240"/>
<br/>
Taste N Taste Catering
</button>
<button id=3 type="submit" name="name" value="Lakshmi Food Service" onclick="myfunction(value,id)">
<img src="Lakshmi Food Service.jpg"  width="240" height="240"/>
<br/>
Lakshmi Food Service
</button>
<button id=4 type="submit" name="name" value="Mrchefs" >
<img src="Mrchef's.jpg"  width="240" height="240"/>
<br/>
Mrchefs
</button>
<button id=5 type="submit" name="name" value="Karumbukadai" onclick="myfunction(value,id)" >
<img src="Karumbukadai.jpg"  width="240" height="240"/>
<br/>
Karumbukadai
</button>
<button id=6 type="submit" name="name" value="Taste Buds" onclick="myfunction(value,id)">
<img src=" buds.jpg"  width="240" height="240"/>
<br/>
Taste Buds
</button>
</horizontal>
<h2> You want a particular decorator</h2>
<horizontal>
<button id=7 type="submit" name="name" value="Naina Decorators" onclick="myfunction(value,id)" >
<img src="naina flower decorators.jpg"  width="240" height="240"/>
<br/>
Naina Decorators
</button>
<button id=8 type="submit" name="name" value="Bajarang Decorators" onclick="myfunction(value,id)" >
<img src="Bajarang decorators.jpg"  width="240" height="240"/>
<br/>
Bajarang Decorators
</button>
<button id=9 type="submit" name="name" value="Angel Decorators" onclick="myfunction(value,id)">
<img src="angel decorators.jpg"  width="240" height="240"/>
<br/>
Angel Decorators
</button>
<button id=10 type="submit" name="name" value="Fantastic Decorators" onclick="myfunction(value,id)">
<img src="fantastic.jpg"  width="240" height="240"/>
<br/>
Fantastic Decorators
</button>
<button id=11 type="submit" name="name" value="Fashion Decorators" onclick="myfunction(value,id)">
<img src="fashion party decorators.jpg"  width="240" height="240"/>
<br/>
Fashion Decorators
</button>
</horizontal>


<br>
<h2> You want a particular hall:</h2>
<horizontal>
<button id=1 type="submit" name="name" value="Mani Mahal" onclick="myfunction(value,id)">
<img src="Mani Mahal.jpg"  width="240" height="240"/>
<br/>
Mani Mahal
</button>
<button type="submit" name="name" value="Senthur Mahal" onclick="myfunction(value,id)">
<img src="senthur mahal1.jpg"  width="240" height="240"/>
<br/>
Senthur Mahal
</button>
<button id=12 type="submit" name="name" value="Rengaz" onclick="myfunction(value,id)">
<img src="rengaz1.jpg"  width="240" height="240"/>
<br/>
Rengaz
</button>
<button id=13 type="submit" name="name" value="Marian International" onclick="myfunction(value,id)">
<img src="marian international1.jpg"  width="240" height="240"/>
<br/>
Marian International
</button>
<button id=14 type="submit" name="name" value="Sri Sai Vivaha Mahal" onclick="myfunction(value,id)">
<img src="sri sai vivaha mahal 2.jpg"  width="240" height="240"/>
<br/>
Sri Sai Vivaha Mahal
</button>
</horizontal>
<div class="control-group">

<br>
<br>
<div class="control-group">
<!-- Button -->
<button  id=0 type="submit" style="font-size : 15px; width: 20%; height: 20px;"  name="name" value="done">Done</button>

<div class="controls">

</div>
<script>
function myfunction(value,id)()
{
	document.getElementById(id).name=value;
}
</script>

</font>
</form>
</body>
</html>
