<html>

<!-- #BeginTemplate "template/main_template.dwt" -->

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>همراه بانوان</title>
<script language="javascript">
function checkInfo(){
		var status = true;
		if(document.frm.name.value.length == 0){
			first.innerHTML = "<font face='tahoma' size='1' color='red'>"+" *لطفا فیلد مربوط به نام را کامل نمایید."+"</font>";
			status = false;
		}
		else{
			first.innerHTML = "";
			}
		
		
		if(document.frm.email.value.length == 0){
			mail.innerHTML = "<font face='tahoma' size='1' color='red'>"+" *لطفا فیلد مربوط به ایمیل را کامل نمایید."+"</font>";
			status = false;
		}
		else if(document.frm.email.value.length != 0 && document.frm.email.value.indexOf("@") == -1){
			mail.innerHTML = "<font face='tahoma' size='1' color='red'>"+" *لطفا در واردکردن ایمیل دقت نمایید."+"</font>";
			status = false;
		}
		else{
			mail.innerHTML = "";
			}
			
		if(document.frm.subject.value.length == 0){
			subj.innerHTML = "<font face='tahoma' size='1' color='red'>"+" *لطفا فیلد مربوط به عنوان را کامل نمایید."+"</font>";
			status = false;
		}
		else{
			first.innerHTML = "";
			}	
		
		if(document.frm.description.value.length == 0){
			descript.innerHTML = "<font face='tahoma' size='1' color='red'>"+" *لطفا  توضیحات خود را وارد نمایید."+"</font>";
			status = false;
		}
		else{
			first.innerHTML = "";
			}
		
		if(status == false){
			return false;
			}
		else{
			window.alert(".اطلاعات با موفقیت ارسال شد");
			return true;
			}
		
	}
</script>
<style fprolloverstyle>
a:link {
	text-decoration: none;
	color: #3E003E;
}
a:visited {
	color: #3E003E;
	text-decoration: none;
}
a:hover {
	color: #F7F1F8;
	text-decoration: none;
}

.reg a:hover       { color: #800000; text-decoration: none }
.reg a        { color: #CC0066; font-family: Tahoma; font-size: 12pt; font-weight: bold; text-decoration:none }
.reg        { color: #3E003E; font-family: Tahoma; font-size: 12pt; text-decoration:none }

.form {color: #3E003E; font-family: Tahoma; font-size: 10pt; text-decoration:none}

</style>
</head>

<body topmargin="4" leftmargin="0" rightmargin="0" bottommargin="0" marginwidth="0" marginheight="0" style="font-family: Tahoma; font-size: 10px; direction: rtl; text-align: justify" bgcolor="#F7F1F8">

<div align="center">
	<table border="0" width="900" cellspacing="0" cellpadding="0">
		<tr>
			<td>
			<table border="0" width="100%" cellspacing="0" cellpadding="0">
				<tr>
					<td>
					<font size="2">
					<img border="0" src="images/logo.jpg" width="900" height="140"></font></td>
				</tr>
				<tr>
					<td height="5">
					</td>
				</tr>
				<tr>
					<td>
					<!-- #BeginEditable "menu1" -->
					<table border="0" width="100%" bgcolor="#B587C0">
						<tr>
							<td align="center" height="25" width="200">&nbsp;</td>
							<td align="center" height="25" width="100"><b>
							<font color="#3E003E" size="2">
							<span style="text-decoration: none">
							<a href="index.htm">صفحهٔ اصلی</a></span></font></b></td>
							<td align="center" height="25"><b>
							<span lang="en-us"><font color="#3E003E" size="2">|</font></span></b></td>
							<td align="center" height="25" width="100">
							<span lang="fa"><font size="2" color="#3E003E"><b>
							<a style="text-decoration: none" href="about.htm">در 
							این کتاب</a></b></font></span></td>
							<td align="center" height="25"><b>
							<font color="#3E003E" size="2">|</font></b></td>
							<td align="center" height="25" width="100" bgcolor="#DBC7E2"><b>
							<font color="#3E003E" size="2">
							<a href="order.htm">سفارش کتاب</a></font></b></td>
							<td align="center" height="25"><b>
							<font color="#3E003E" size="2">|</font></b></td>
							<td align="center" height="25" width="100"><b>
							<font color="#3E003E" size="2">
							<a href="contact.htm">ارتباط با ما</a></font></b></td>
							<td align="center" height="25" width="200">&nbsp;</td>
						</tr>
					</table>
					<!-- #EndEditable -->
					</td>
				</tr>
				<tr>
					<td height="5"></td>
				</tr>
				<tr>
					<td>
					<table border="0" width="100%" cellspacing="0" cellpadding="0">
						<tr>
							<td width="170" valign="top" bgcolor="#DBC7E2">
							<!-- #BeginEditable "menu2" -->
							<table border="0" width="100%" cellspacing="0" cellpadding="0">
								<tr>
									<td align="right" height="10" style="padding-right: 15px" bgcolor="#DBC7E2">&nbsp;</td>
								</tr>
								<tr>
									<td align="right" height="40" style="padding-right: 15px" bgcolor="#DBC7E2">
									<b><font size="2" color="#3E003E">
									<img border="0" src="images/bulet.gif" width="10" height="10"><span lang="en-us">&nbsp;
									</span><a href="abstract.htm">منتخب کتاب</a></font></b><hr color="#3E003E" size="1" align="right" width="80%">
									</td>
								</tr>
								<tr>
									<td align="right" height="40" style="padding-right: 15px" bgcolor="#DBC7E2">
									<b><font size="2" color="#3E003E">
									<img border="0" src="images/bulet.gif" width="10" height="10"><span lang="en-us">&nbsp;
									</span><a href="toc.htm">فهرست کتاب</a></font></b><hr color="#3E003E" width="80%" size="1" align="right">
									</td>
								</tr>
								<tr>
									<td align="right" height="40" style="padding-right: 15px" bgcolor="#DBC7E2">
									<b><font size="2" color="#3E003E">
									<img border="0" src="images/bulet.gif" width="10" height="10"><span lang="en-us">&nbsp;
									</span><span lang="fa"><a href="cd.htm">
									معرفی سی دی</a></span></font></b><hr color="#3E003E" width="80%" size="1" align="right">
									</td>
								</tr>
								<tr>
									<td align="right" height="40" style="padding-right: 15px" bgcolor="#DBC7E2">
									<b><font size="2" color="#3E003E">
									<img border="0" src="images/bulet.gif" width="10" height="10"><span lang="en-us">&nbsp;
									</span><a href="publisher.htm">سخن ناشر</a></font></b><hr color="#3E003E" size="1" align="right" width="80%">
									</td>
								</tr>
								<tr>
									<td align="right" height="40" style="padding-right: 15px" bgcolor="#DBC7E2">
									<b><font size="2" color="#3E003E">
									<img border="0" src="images/bulet.gif" width="10" height="10"><span lang="en-us">&nbsp;
									</span><a href="author.htm">سخن گردآورنده</a></font></b><hr color="#3E003E" size="1" align="right" width="80%">
									</td>
								</tr>
								<tr>
									<td align="right" height="40" style="padding-right: 15px" bgcolor="#DBC7E2">
									<b><font size="2" color="#3E003E">
									<img border="0" src="images/bulet.gif" width="10" height="10"><span lang="en-us">&nbsp;
									</span><a href="faq.htm">سوالات متداول</a></font></b><hr color="#3E003E" size="1" align="right" width="80%">
									</td>
								</tr>
								<tr>
									<td align="right" style="padding-right: 0" bgcolor="#DBC7E2" height="10" valign="bottom">
									&nbsp;</td>
								</tr>
							</table>
							<!-- #EndEditable -->
							</td>
							<td width="5" rowspan="2">&nbsp;</td>
							<td bgcolor="#DBC7E2" valign="top" rowspan="2" style="padding: 10px; line-height:150%">
							<!-- #BeginEditable "main" -->
							<table border="0" width="100%">
								<tr>
									<td>
									<form name="frm" id="frm" method="GET" onsubmit="return checkOrder()" action="order.php">
										
										<fieldset><legend class="reg">سفارش کتاب</legend>
										
										<table class="form" border="0" cellspacing="20" width="100%">
										<tr>
				<td colspan="2">
				<p align="justify" style="line-height=200%">برای سفارش کتاب لازم 
				است مبلغ واریزی خود را به شماره حساب *** بانک *** پرداخت نموده و 
				سپس فرم زیر را تکمیل و ارسال نمایید. همچنین شهروندان تهرانی 
				می‌توانند از امکان پرداخت نقدی استفاده نمایند. لازم به ذکر است 
				امکان پرداخت نقدی درحال حاضر فقط برای شهروندان تهرانی امکانپذیر 
				است.</p></td>
			</tr>
			<tr>
				<td colspan="2">
				<span style="background-color: #3E003E">
							<font size="2" color="#F7F1F8">اطلاعات مخصوص اشخاص 
				حقیقی: </font></span><hr color="#3E003E" width="31%" align="right">
				</td>
			</tr>
			<tr>
				<td width="100"><span lang="fa">نام و نام خانوادگی</span></td>
				<td><input type="text" name="name" size="30" tabindex="1" style="border:3px double #3E003E; font-family: Tahoma; font-size: 12px; color: #3E003E; background-color:#f4e1f7"><span id="first"></span></td>
			</tr>
			<tr>
				<td>تاریخ تولد</td>
					<td>
					<select name="year" style="border:3px double #3E003E; font-family: Tahoma; font-size: 10pt; color: #3E003E; background-color:#f4e1f7" size="1" tabindex="10">
			<option>1330</option>
			<option>1331</option>
			<option>1332</option>
			<option>1333</option>
			<option>1334</option>
			<option>1335</option>
			<option>1336</option>
			<option>1337</option>
			<option>1338</option>
			<option>1339</option>
			<option>1340</option>
			<option>1341</option>
			<option>1342</option>
			<option>1343</option>
			<option>1344</option>
			<option>1345</option>
			<option>1346</option>
			<option>1347</option>
			<option>1348</option>
			<option>1349</option>
			<option>1350</option>
			<option>1351</option>
			<option>1352</option>
			<option>1353</option>
			<option>1354</option>
			<option>1355</option>
			<option>1356</option>
			<option>1357</option>
			<option>1358</option>
			<option>1359</option>
			<option>1360</option>
			<option>1361</option>
			<option>1362</option>
			<option>1363</option>
			<option>1364</option>
			<option>1365</option>
			<option>1366</option>
			<option>1367</option>
			<option>1368</option>
			<option>1369</option>
			<option>1370</option>
			<option>1371</option>
			<option>1372</option>
			<option>1373</option>
			<option>1374</option>
			<option>1375</option>
			</select></td>			</tr>
			
			<tr>
				<td>شماره ثابت</td>
					<td><input type="text" name="subject" size="30" tabindex="3" style="border:3px double #3E003E; font-family: Tahoma; font-size: 12px; color: #3E003E; background-color:#f4e1f7"><span id="subj"></span></td>

			</tr>
			<tr>
				<td>شماره همراه</td>
					<td><input type="text" name="subject" size="30" tabindex="3" style="border:3px double #3E003E; font-family: Tahoma; font-size: 12px; color: #3E003E; background-color:#f4e1f7"><span id="subj"></span></td>

			</tr>
			<tr>
				<td colspan="2">
				&nbsp;
				</td>
			</tr>
			<tr>
				<td colspan="2">
				<span style="background-color: #3E003E">
							<font size="2" color="#F7F1F8">اطلاعات مخصوص ارگان‌ها و سازمان‌ها: </font></span><hr color="#3E003E" width="33%" align="right">
				</td>
			</tr>
			<tr>
				<td width="100"><span lang="fa">نام ارگان</span></td>
				<td><input type="text" name="name" size="30" tabindex="1" style="border:3px double #3E003E; font-family: Tahoma; font-size: 12px; color: #3E003E; background-color:#f4e1f7"><span id="first"></span></td>
			</tr>
			<tr>
				<td width="100"><span lang="fa">نام شخص پرکننده‌ی فرم</span></td>
				<td><input type="text" name="name" size="30" tabindex="1" style="border:3px double #3E003E; font-family: Tahoma; font-size: 12px; color: #3E003E; background-color:#f4e1f7"><span id="first"></span></td>
			</tr>
			<tr>
				<td colspan="2">
				&nbsp;
				</td>
			</tr>
			<tr>
				<td colspan="2">
				<span style="background-color: #3E003E">
							<font size="2" color="#F7F1F8">اطلاعات مشترک: </font></span><hr color="#3E003E" width="15%" align="right">
				</td>
			</tr>
			<tr>
				<td>شماره فیش واریزی</td>
					<td><input type="text" name="subject" size="40" tabindex="3" style="border:3px double #3E003E; font-family: Tahoma; font-size: 12px; color: #3E003E; background-color:#f4e1f7"><span id="subj"></span></td>

			</tr>
			<tr>
				<td>نام شعبه بانک</td>
					<td><input type="text" name="subject" size="20" tabindex="3" style="border:3px double #3E003E; font-family: Tahoma; font-size: 12px; color: #3E003E; background-color:#f4e1f7"><span id="subj"></span></td>

			</tr>
			<tr>
				<td>کد شعبه بانک</td>
					<td><input type="text" name="subject" size="20" tabindex="3" style="border:3px double #3E003E; font-family: Tahoma; font-size: 12px; color: #3E003E; background-color:#f4e1f7"><span id="subj"></span></td>

			</tr>
			<tr>
				<td>تعداد</td>
					<td><input type="text" name="subject" size="10" tabindex="3" style="border:3px double #3E003E; font-family: Tahoma; font-size: 12px; color: #3E003E; background-color:#f4e1f7"><span id="subj"></span></td>

			</tr>
			<tr>
				<td valign=top>نحوه‌ی آشنایی</td>
				<td>
				<textarea dir="rtl" name="description" cols="40" rows="3" tabindex="4" style="border:3px double #3E003E; font-family: Tahoma; font-size: 12px; color: #3E003E; background-color:#f4e1f7"></textarea><span id="descript"></span></td>
			</tr>
			<tr>
				<td valign=top>آدرس دقیق پستی</td>
				<td>
				<textarea dir="rtl" name="description" cols="70" rows="5" tabindex="4" style="border:3px double #3E003E; font-family: Tahoma; font-size: 12px; color: #3E003E; background-color:#f4e1f7"></textarea><span id="descript"></span></td>
			</tr>
			<tr>
				<td>کدپستی ده رقمی</td>
					<td><input type="text" name="subject" size="20" tabindex="3" style="border:3px double #3E003E; font-family: Tahoma; font-size: 12px; color: #3E003E; background-color:#f4e1f7"><span id="subj"></span></td>

			</tr>
			<tr>
				<td colspan="2"><input type="checkbox" name="chckBtn" value="ch">پرداخت نقدی
					<span id="subj"></span></td>

			</tr>
			<tr>
				<td colspan="2">
				<p align="center">
				<input type="submit" value="&#1575;&#1585;&#1587;&#1575;&#1604; &#1588;&#1608;&#1583;" tabindex="5" style="font-family: Tahoma; color: #3E003E; font-weight: bold; font-size:8pt"></td>
			</tr>

			</table>
										
										</fieldset>
									</form>
									</td>
								</tr>
							</table>

							<!-- #EndEditable --></td>
						</tr>
						<tr>
							<td width="170" valign="bottom" bgcolor="#DBC7E2">
							<img border="0" src="images/corner.jpg" width="170" height="192"></td>
						</tr>
					</table>
					</td>
				</tr>
				<tr>
					<td height="5"></td>
				</tr>
				<tr>
					<td bgcolor="#DBC7E2" align="center" height="30">
					<font color="#3E003E" style="font-size: 11pt">این سایت تنها 
					سایت مجاز فروش کتاب همراه بانوان است.</font></td>
				</tr>
				<tr>
					<td align="center" height="5"></td>
				</tr>
				<tr>
					<td>
					<table border="0" width="100%" bgcolor="#B587C0" cellspacing="0" cellpadding="0" height="20">
						<tr>
							<td align="center" height="15" width="280">&nbsp;</td>
							<td align="center" height="15" width="70">
							<font color="#3E003E" style="font-size: 9pt">
							<a href="index.htm">صفحهٔ اصلی</a></font></td>
							<td align="center" height="15"><span lang="en-us">
							<font color="#3E003E" style="font-size: 9pt">|</font></span></td>
							<td align="center" height="15" width="70">
							<span lang="fa"><font color="#3E003E">
							<span style="font-size: 9pt"><a href="about.htm">
							در این کتاب</a></span></font></span></td>
							<td align="center" height="15">
							<font color="#3E003E" style="font-size: 9pt">|</font></td>
							<td align="center" height="15" width="70">
							<font color="#3E003E" style="font-size: 9pt">
							<a href="order.htm">سفارش کتاب</a></font></td>
							<td align="center" height="15">
							<font color="#3E003E" style="font-size: 9pt">|</font></td>
							<td align="center" height="15" width="70">
							<font color="#3E003E" style="font-size: 9pt">
							<a href="contact.htm">ارتباط با ما</a></font></td>
							<td align="center" height="15" width="280">&nbsp;</td>
						</tr>
						<tr>
							<td align="center" height="30" colspan="9" bgcolor="#3E003E">
							<table border="0" width="100%" cellspacing="0" cellpadding="0">
								<tr>
									<td width="440">
									<p align="left">
									<font color="#DBC7E2" style="font-size: 9pt">
									© تمامی حقوق پرای صاحب سایت محفوظ است.</font></td>
									<td width="20">
									<p align="center"><font color="#DBC7E2">|</font></td>
									<td>
									<font color="#DBC7E2" style="font-size: 9pt">
									Made and Designed by Charsooghi ©2010</font></td>
								</tr>
							</table>
							</td>
						</tr>
					</table>
					</td>
				</tr>
			</table>
			</td>
		</tr>
	</table>
</div>

</body>

<!-- #EndTemplate -->

</html>