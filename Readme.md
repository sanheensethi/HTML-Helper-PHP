
 PHL HTML Helper Library

 An open source Library File for PHP

 This content is released under the MIT License (MIT)

 Copyright (c) 2018 , Sanheen Sethi

 Permission is hereby granted, free of charge, to any person obtaining a copy
 of this software and associated documentation files (the "Software"), to deal
 in the Software without restriction, including without limitation the rights
 to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 copies of the Software, and to permit persons to whom the Software is
 furnished to do so, subject to the following conditions:

 The above copyright notice and this permission notice shall be included in
 all copies or substantial portions of the Software.

 THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 THE SOFTWARE.

 * @package HTML Helper Library
 * @author	Sanheen Sethi
 * @copyright	Copyright (c) 2018, Sanheen Sethi
 * @license	http://opensource.org/licenses/MIT	MIT License
 * @link	https://github.com/sanheensethi
 * @since	Version 0.0.9
 * @version	Version 0.0.9
 * @filesource
 * @Date : 05-02-2018
 * @Time : 8:56 AM
 
	> Tutorial :
	
		#Include file as 【 require_once "PHP-HTML-HELPER/index.php"; 】
		
		#You can see files included as [ var_dump(get_included_files()); ]
		
			Firstly Remember { 1->OPEN ; 0->CLOSE }
			1 is by default
			
		HTML TAG ::
			<html>  ->  html();
			</html> ->  html(0);
		
		HEAD TAG ::
			<head>	->  head();
			</head>	->  head(0);
		
		BODY TAG ::
			<body>	->  body();
			</body>	->	body(0); 
		 
		 We can also give extra attributes to Body Tag as ::
		 	
		 	<body onload="function()">	<- body(1,['onload'=>'function']);
		 
		 Break ::
		 	
		 	<br>			-> echo br();
		 	<br><br> 		-> echo br(2);
		 	<br><br>....	-> echo br(n); Where n = 2,3,4,5,....
		 
		 Horizontal Line ::
		 	
		 	<hr>				-> echo hr();
		 	<hr class='hori'>	-> echo hr(['class'=>'hori']);
		 
		 Space ::
		 
		 	&nbsp;				-> echo space();
		 	&nbsp;&nbsp;		-> echo space(2);
		 	&nbsp;&nbsp;....	-> echo space(n); Where n = 2,3,4,5....
		 	
		 HEADINGS ::
		 	
		 	<h1>data</h1>	-> echo h1("data");
		 	<h2>data</h2>	-> echo h2("data");
		 	<h3>data</h3>	-> echo h3("data");
		 	.
		 	.
		 	.
		 	
		 	Also take extra attributes as array
		 	e.g =>
		 		<h1 class="big" style="color:red" data-title="hello">hello</h1>
		 				
		 		write it as :: 
		 				
		 		echo h1("Hello Bro",['class'=>'big','style'=>'color:red','data-title'=>'hello']);
		 		
		 		Similarly for other function , Remeber if you wanna give arguments then always give 1st argumemt.
		
		 Text Formatting ::
		 	
		 	* <b>Text</b>	-> echo b("Hello"); <- No extra Parameters will be given
		 	
		 	* <u>Text</u> -> echo u("Underline"); <- No extra Parameters
		 	
		 	* <i>Italic</i> -> echo i('Italic'); <- No extra Parameters
		 	
		 			also used as u(b(i("Hello"))); <- data given is underlined , bold and italic
		 	
		 Tables ::
		 	
		 	*	<table class="table">	-> echo table(1,['class'=>'table']);
		 	
		 	*	</table>				-> echo table(0);
		 	
		 	*	<th>					-> echo th(); = extra attributes are allowed as an array
		 	
		 	*	</th>					-> echo th(0);
		 	
		 	*	<tr class='pad'>		-> echo tr(1,['class'=>'pad']);	
		 	
		 	*	</tr>					-> echo tr(0);
		 	
		 	*	<td>					-> echo td();
		 	
		 	*	</td>					-> echo td(0);
		 	
 
 > Soon More Functions Will Be Added.
 
 #Sanheen Sethi.		