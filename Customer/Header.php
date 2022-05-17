<!-- <div id="title">
    <h1><span style="color: #008000;">ONLINE CLOTHING STORE</span></h1>
  </div>
  
<div class="container">
    <ul id="navCircle">
      <li><a class="active" href="index.php">Home</a></li>

      <li><a href="Category.php">Category</a></li>
      <li><a href="Products.php">Products</a></li>
      <li><a href="Offers.php">Offers</a></li>
 <li><a href="Register.php">Register</a></li>
      <li><a href="Contact.php">Contact</a></li>
    </ul>
  </div> -->
  <?php
if(!isset($_SESSION))
{
session_start();
}
?>

  <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Online Clothing Store</title>
<!-- <link href="style.css" rel="stylesheet" type="text/css" /> -->
<link rel="stylesheet" href="App.css">
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<!-- <style type="text/css">
<!--
.style8 {font-size: 24px}
.style9 {font-size: 95%; font-weight: bold; color: #003300; font-family: Verdana, Arial, Helvetica, sans-serif; }
-->
</style> -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script type="text/javascript">
// <!-- <![CDATA[

// Project: Dynamic Date Selector (DtTvB) - 2006-03-16
// Script featured on JavaScript Kit- http://www.javascriptkit.com
// Code begin...
// Set the initial date.
var ds_i_date = new Date();
ds_c_month = ds_i_date.getMonth() + 1;
ds_c_year = ds_i_date.getFullYear();

// Get Element By Id
function ds_getel(id) {
	return document.getElementById(id);
}

// Get the left and the top of the element.
function ds_getleft(el) {
	var tmp = el.offsetLeft;
	el = el.offsetParent
	while(el) {
		tmp += el.offsetLeft;
		el = el.offsetParent;
	}
	return tmp;
}
function ds_gettop(el) {
	var tmp = el.offsetTop;
	el = el.offsetParent
	while(el) {
		tmp += el.offsetTop;
		el = el.offsetParent;
	}
	return tmp;
}

// Output Element
var ds_oe = ds_getel('ds_calclass');
// Container
var ds_ce = ds_getel('ds_conclass');

// Output Buffering
var ds_ob = '';
function ds_ob_clean() {
	ds_ob = '';
}
function ds_ob_flush() {
	ds_oe.innerHTML = ds_ob;
	ds_ob_clean();
}
function ds_echo(t) {
	ds_ob += t;
}

var ds_element; // Text Element...

var ds_monthnames = [
'January', 'February', 'March', 'April', 'May', 'June',
'July', 'August', 'September', 'October', 'November', 'December'
]; // You can translate it for your language.

var ds_daynames = [
'Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'
]; // You can translate it for your language.

// Calendar template
function ds_template_main_above(t) {
	return '<table cellpadding="3" cellspacing="1" class="ds_tbl">'
	     + '<tr>'
		 + '<td class="ds_head" style="cursor: pointer" onclick="ds_py();">&lt;&lt;</td>'
		 + '<td class="ds_head" style="cursor: pointer" onclick="ds_pm();">&lt;</td>'
		 + '<td class="ds_head" style="cursor: pointer" onclick="ds_hi();" colspan="3">[Close]</td>'
		 + '<td class="ds_head" style="cursor: pointer" onclick="ds_nm();">&gt;</td>'
		 + '<td class="ds_head" style="cursor: pointer" onclick="ds_ny();">&gt;&gt;</td>'
		 + '</tr>'
	     + '<tr>'
		 + '<td colspan="7" class="ds_head">' + t + '</td>'
		 + '</tr>'
		 + '<tr>';
}

function ds_template_day_row(t) {
	return '<td class="ds_subhead">' + t + '</td>';
	
}

function ds_template_new_week() {
	return '</tr><tr>';
}

function ds_template_blank_cell(colspan) {
	return '<td colspan="' + colspan + '"></td>'
}

function ds_template_day(d, m, y) {
	return '<td class="ds_cell" onclick="ds_onclick(' + d + ',' + m + ',' + y + ')">' + d + '</td>';

}

function ds_template_main_below() {
	return '</tr>'
	     + '</table>';
}


function ds_draw_calendar(m, y) {
	
	ds_ob_clean();
	
	ds_echo (ds_template_main_above(ds_monthnames[m - 1] + ' ' + y));
	for (i = 0; i < 7; i ++) {
		ds_echo (ds_template_day_row(ds_daynames[i]));
	}
	
	var ds_dc_date = new Date();
	ds_dc_date.setMonth(m - 1);
	ds_dc_date.setFullYear(y);
	ds_dc_date.setDate(1);
	if (m == 1 || m == 3 || m == 5 || m == 7 || m == 8 || m == 10 || m == 12) {
		days = 31;
	} else if (m == 4 || m == 6 || m == 9 || m == 11) {
		days = 30;
	} else {
		days = (y % 4 == 0) ? 29 : 28;
	}
	var first_day = ds_dc_date.getDay();
	var first_loop = 1;
	
	ds_echo (ds_template_new_week());
	
	if (first_day != 0) {
		ds_echo (ds_template_blank_cell(first_day));
	}
	var j = first_day;
	for (i = 0; i < days; i ++) {

		if (j == 0 && !first_loop) {
			
			ds_echo (ds_template_new_week());
		}

		ds_echo (ds_template_day(i + 1, m, y));
		
		first_loop = 0;
	
		j ++;
		j %= 7;
	}

	ds_echo (ds_template_main_below());
	
	ds_ob_flush();

	ds_ce.scrollIntoView();
}


function ds_sh(t) {
	
	ds_element = t;
	
	var ds_sh_date = new Date();
	ds_c_month = ds_sh_date.getMonth() + 1;
	ds_c_year = ds_sh_date.getFullYear();

	ds_draw_calendar(ds_c_month, ds_c_year);
	
	ds_ce.style.display = '';

	the_left = ds_getleft(t);
	the_top = ds_gettop(t) + t.offsetHeight;
	ds_ce.style.left = the_left + 'px';
	ds_ce.style.top = the_top + 'px';
	
	ds_ce.scrollIntoView();
}


function ds_hi() {
	ds_ce.style.display = 'none';
}


function ds_nm() {
	
	ds_c_month ++;
	
	if (ds_c_month > 12) {
		ds_c_month = 1;
		ds_c_year++;
	}
	
	ds_draw_calendar(ds_c_month, ds_c_year);
}


function ds_pm() {
	ds_c_month = ds_c_month - 1; 

	if (ds_c_month < 1) {
		ds_c_month = 12;
		ds_c_year = ds_c_year - 1; 
	}

	ds_draw_calendar(ds_c_month, ds_c_year);
}


function ds_ny() {
	
	ds_c_year++;
	
	ds_draw_calendar(ds_c_month, ds_c_year);
}


function ds_py() {
	
	ds_c_year = ds_c_year - 1; 

	ds_draw_calendar(ds_c_month, ds_c_year);
}


function ds_format_date(d, m, y) {

	m2 = '00' + m;
	m2 = m2.substr(m2.length - 2);
	
	d2 = '00' + d;
	d2 = d2.substr(d2.length - 2);
	
	return y + '-' + m2 + '-' + d2;
}


function ds_onclick(d, m, y) {
	
	ds_hi();
	
	if (typeof(ds_element.value) != 'undefined') {
		ds_element.value = ds_format_date(d, m, y);
	
	} else if (typeof(ds_element.innerHTML) != 'undefined') {
		ds_element.innerHTML = ds_format_date(d, m, y);
	
	} else {
		alert (ds_format_date(d, m, y));

	}
}


</script>



<SCRIPT language="JavaScript1.2" src="gen_validation.js"></SCRIPT>
<SCRIPT language="JavaScript1.2">
var arrFormValidation=
             [
			 		[//Name
						["minlen=1",
		"Please Enter Name"
						  ],
						  ["alpha",
		"Please Enter Valid Name"
						  ]

                     ],
                   [//Address
						  ["minlen=1",
		"Please Enter Address"
						  ]

                   ],
                   [//City

                   ],
				   [//Email

						["minlen=1",
		"Please Enter Email "
						  ],
						  ["email",
		"Please Enter valid email "
						  ]
                   ],
				   [//Mobile
						   ["num",
		"Please Enter valid Mobile "
						  ],
						  ["minlen=10",
		"Please Enter valid Mobile "
						  ],
						  ["maxlen=10",
		"Please Enter valid Mobile "
						  ]
                   ]
				   ,
				   [//Gender

                   ],
				   [//BirthDate


                   ],


				   [//User
						  ["minlen=1",
		"Please Enter UserName "
						  ]


                   ],
				   [//Password
						["minlen=1",
		"Please Enter Password "
						  ]


                   ]

            ];
</SCRIPT>

</head>
<body style="background:#eeeeee;">

  <div class="container-fluid mt-3">
<div class="row">
<div class="col-lg-6"><div class='logo'>
    <img src='images/logo.jpg' alt="" />
    </div></div>
          <div class="col-lg-6">
              <div class='menu'>
                  <ul class='menubar'>
                      <li><select name="" id="" class='fixed'>
                          <option value="" >Collection</option>
                          <option value="" class='option' ><a href="Products.php">men Traditional</a></option>
                          <option value=""><a href="Products.php">Women Traditional</a></option>
                          <option value="">Festive Collection</option>
                          <option value="">party</option>
                          </select></li>
                      <li>about</li>
                      <li><a href="Right.php">Login</a></li>
                      <li><a href="index.php">Home</a></li>
                      <li> Cart
</li>
                  </ul>
                  
              </div>
          </div>
</div>
      </div>








      